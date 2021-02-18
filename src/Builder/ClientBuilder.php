<?php

/**
 * PHP version 7.3
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 */

namespace RetailCrm\Api\Builder;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\FilesystemCache;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Client;
use RetailCrm\Api\Component\Transformer\RequestTransformer;
use RetailCrm\Api\Component\Transformer\ResponseTransformer;
use RetailCrm\Api\Exception\BuilderException;
use RetailCrm\Api\Factory\RequestPipelineFactory;
use RetailCrm\Api\Factory\ResponsePipelineFactory;
use RetailCrm\Api\Factory\SerializerFactory;
use RetailCrm\Api\Interfaces\BuilderInterface;
use RetailCrm\Api\Interfaces\HandlerInterface;
use RetailCrm\Api\Interfaces\RequestTransformerInterface;
use RetailCrm\Api\Interfaces\ResponseTransformerInterface;
use RuntimeException;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ClientBuilder
 *
 * @category ClientBuilder
 * @package  RetailCrm\Api\Builder
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ClientBuilder implements BuilderInterface
{
    private const CACHE_DIR_NAME = 'retailcrm_metadata_cache';

    /** @var string */
    private $apiUrl;

    /** @var ?HandlerInterface */
    private $authenticator;

    /** @var ?ClientInterface */
    private $httpClient;

    /** @var ?\Psr\Log\LoggerInterface */
    private $debugLogger;

    /** @var string */
    private $cacheDir;

    /** @var \Doctrine\Common\Cache\Cache|null */
    private $cache;

    /** @var RequestTransformerInterface|null */
    private $requestTransformer;

    /** @var ?\RetailCrm\Api\Interfaces\ResponseTransformerInterface */
    protected $responseTransformer;

    /** @var \Symfony\Component\Serializer\SerializerInterface|null */
    private $serializer;

    /**
     * API URL. Looks like this: "https://test.retailcrm.pro/"
     *
     * @param string $apiUrl
     *
     * @return ClientBuilder
     */
    public function setApiUrl(string $apiUrl): ClientBuilder
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * Request authenticator to append into request transformer pipeline.
     *
     * Do not use it if you already added a proper authenticator in the pipeline manually.
     * You can use this method to drop authenticator from client builder (use null).
     *
     * @param \RetailCrm\Api\Interfaces\HandlerInterface|null $authenticator
     *
     * @return ClientBuilder
     */
    public function setAuthenticatorHandler(?HandlerInterface $authenticator): ClientBuilder
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * Set your own PSR-18 HTTP client.
     *
     * Service discovery will be used if no client has been provided.
     *
     * @param \Psr\Http\Client\ClientInterface $httpClient
     *
     * @return ClientBuilder
     */
    public function setHttpClient(ClientInterface $httpClient): ClientBuilder
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * Set debug logger.
     *
     * The provided logger will be used to record all requests and responses.
     * This feature consumes a lot of resources and shouldn't be used in production.
     *
     * @param \Psr\Log\LoggerInterface|null $debugLogger
     *
     * @return ClientBuilder
     */
    public function setDebugLogger(?LoggerInterface $debugLogger): ClientBuilder
    {
        $this->debugLogger = $debugLogger;
        return $this;
    }

    /**
     * Sets cache directory.
     *
     * This directory will be used by AnnotationReader component to store annotations cache.
     * Annotations parsing consumes a lot of resources, which is the reason why you should cache results.
     *
     * @param string $cacheDir
     *
     * @return ClientBuilder
     */
    public function setCacheDir(string $cacheDir): ClientBuilder
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    /**
     * Sets cache implementation.
     *
     * This cache implementation will be used by AnnotationReader component to store annotations cache.
     * Any cache from `doctrine/cache` should work just fine.
     *
     * @param \Doctrine\Common\Cache\Cache $cache
     *
     * @return ClientBuilder
     */
    public function setCache(Cache $cache): ClientBuilder
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * Set request transformer into API client.
     *
     * You can use this method to set your request transformer which will execute the pipeline.
     * The default request transformer doesn't do anything besides calling provided chain of handlers.
     *
     * @param \RetailCrm\Api\Interfaces\RequestTransformerInterface|null $requestTransformer
     *
     * @return ClientBuilder
     */
    public function setRequestTransformer(?RequestTransformerInterface $requestTransformer): ClientBuilder
    {
        $this->requestTransformer = $requestTransformer;
        return $this;
    }

    /**
     * Set response transformer into API client.
     *
     * You can use this method to set your response transformer which will execute the pipeline.
     * The default response transformer doesn't do anything besides calling provided chain of handlers.
     * The serializer instance for the request pipeline can be inferred from the provided FormDataEncoder instance.
     *
     * @param \RetailCrm\Api\Interfaces\ResponseTransformerInterface|null $responseTransformer
     *
     * @return ClientBuilder
     */
    public function setResponseTransformer(?ResponseTransformerInterface $responseTransformer): ClientBuilder
    {
        $this->responseTransformer = $responseTransformer;
        return $this;
    }

    /**
     * Set Symfony Serializer instance into API client.
     *
     * Use only if you really need to inject your own instance. Keep in mind: our instance uses custom normalizers and
     * encoders, which should be provided. Otherwise API client will not work properly.
     *
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     *
     * @return ClientBuilder
     */
    public function setSerializer(SerializerInterface $serializer): ClientBuilder
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * Builds client with provided dependencies.
     *
     * @inheritDoc
     */
    public function build(): Client
    {
        $this->validateBuilder();
        $this->buildCache();
        $this->buildSerializer();

        if (
            null !== $this->authenticator &&
            null !== $this->requestTransformer &&
            null !== $this->requestTransformer->getHandler()
        ) {
            $this->requestTransformer->getHandler()->append($this->authenticator);
        }

        if (null === $this->requestTransformer) {
            $this->requestTransformer = $this->buildRequestTransformer();
        }

        if (null === $this->responseTransformer) {
            $this->responseTransformer = $this->buildResponseTransformer();
        }

        return new Client(
            $this->apiUrl,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestTransformer,
            $this->responseTransformer,
            $this->debugLogger
        );
    }

    /**
     * Check if builder is ready to build a Client instance.
     *
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function validateBuilder(): void
    {
        if (empty($this->apiUrl)) {
            throw new BuilderException('apiUrl must not be empty', ['apiUrl']);
        }

        if (empty($this->authenticator) && empty($this->requestTransformer)) {
            throw new BuilderException(
                'Authenticator or RequestTransformer must be present',
                ['authenticator', 'requestTransformer']
            );
        }
    }

    /**
     * Builds cache if needed.
     */
    private function buildCache(): void
    {
        if (null === $this->cache && !empty($this->cacheDir) && is_dir($this->cacheDir)) {
            $this->createDir($this->cacheDir . static::CACHE_DIR_NAME);
            $this->cache = new FilesystemCache($this->cacheDir . static::CACHE_DIR_NAME);
        }
    }

    /**
     * Builds serializer.
     */
    private function buildSerializer(): void
    {
        if (null !== $this->serializer) {
            return;
        }

        $annotationReader = new AnnotationReader();

        if (null !== $this->cache) {
            $annotationReader = new CachedReader(new AnnotationReader(), $this->cache);
        }

        $this->serializer = SerializerFactory::createSerializer($annotationReader);
    }

    /**
     * Builds RequestTransformer with default pipeline and authenticator.
     *
     * @return \RetailCrm\Api\Component\Transformer\RequestTransformer
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function buildRequestTransformer(): RequestTransformer
    {
        if (null === $this->serializer) {
            throw new BuilderException('Serializer must be set');
        }

        if (null === $this->authenticator) {
            throw new BuilderException(
                "You must provide an authenticator handler instance in order to delegate " .
                "RequestTransformer instantiation to the ClientBuilder."
            );
        }

        return new RequestTransformer(
            RequestPipelineFactory::createDefaultPipeline($this->serializer, $this->authenticator)
        );
    }

    /**
     * Builds ResponseTransformer.
     *
     * @return \RetailCrm\Api\Component\Transformer\ResponseTransformer
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    private function buildResponseTransformer(): ResponseTransformer
    {
        if (null === $this->serializer) {
            throw new BuilderException(
                "You must provide a SerializerInterface instance in order to delegate " .
                "ResponseTransformer instantiation to the ClientBuilder."
            );
        }

        return new ResponseTransformer(
            ResponsePipelineFactory::createDefaultPipeline($this->serializer)
        );
    }

    /**
     * @param string $dir
     */
    private function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (false === mkdir($dir, 0777, true) && false === is_dir($dir)) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }
}

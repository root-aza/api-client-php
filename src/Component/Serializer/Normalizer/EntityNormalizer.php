<?php

/**
 * PHP version 7.3
 *
 * @category EntityNormalizer
 * @package  RetailCrm\Api\Component\Serializer\Normalizer
 */

namespace RetailCrm\Api\Component\Serializer\Normalizer;

use RetailCrm\Api\Model\Entity\Entity;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class EntityNormalizer
 *
 * @category EntityNormalizer
 * @package  RetailCrm\Api\Component\Serializer\Normalizer
 *
 * @SuppressWarnings(PHPMD.ElseExpression)
 */
class EntityNormalizer implements
    NormalizerInterface,
    DenormalizerInterface,
    SerializerAwareInterface,
    CacheableSupportsMethodInterface
{
    /** @var array<string, mixed> */
    private $defaultContext = [ObjectNormalizer::SKIP_NULL_VALUES => true];

    /** @var ObjectNormalizer */
    private $objectNormalizer;

    /**
     * EntityNormalizer constructor.
     *
     * @param \Symfony\Component\Serializer\Normalizer\ObjectNormalizer $objectNormalizer
     */
    public function __construct(ObjectNormalizer $objectNormalizer)
    {
        $this->objectNormalizer = $objectNormalizer;
    }

    /**
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer): void
    {
        $this->objectNormalizer->setSerializer($serializer);
    }

    /**
     * @param mixed[] $context
     *
     * @return mixed
     * @inheritDoc
     * @throws \JsonException
     */
    public function normalize($object, string $format = null, array $context = [])
    {
        if (is_array($object)) {
            if (static::isEntityArray($object)) {
                $data = [];

                foreach ($object as $key => $value) {
                    $data[$key] = $this->normalizeJson($value, $context);
                }
            } else {
                return $object;
            }
        } else {
            $data = $this->normalizeJson($object, $context);
        }

        if ($object instanceof Entity || static::isEntityArray($object)) {
            return json_encode($data, JSON_THROW_ON_ERROR);
        }

        return $data;
    }

    /**
     * @inheritDoc
     */
    public function supportsNormalization($data, string $format = null): bool
    {
        if (static::isEntityArray($data)) {
            return true;
        }

        return $this->objectNormalizer->supportsNormalization($data, $format);
    }

    /**
     * @inheritDoc
     */
    public function denormalize($data, string $type, string $format = null, array $context = []): object
    {
        return $this->objectNormalizer->denormalize($data, $type, $format, $context);
    }

    /**
     * @inheritDoc
     */
    public function supportsDenormalization($data, string $type, string $format = null): bool
    {
        return $this->objectNormalizer->supportsDenormalization($data, $type, $format);
    }

    public function hasCacheableSupportsMethod(): bool
    {
        return $this->objectNormalizer->hasCacheableSupportsMethod();
    }

    /**
     * @param object               $object
     * @param array<string, mixed> $context
     *
     * @return mixed
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    private function normalizeJson($object, array $context = []): array
    {
        return $this->objectNormalizer->normalize($object, JsonEncoder::FORMAT, $this->buildContext($context));
    }

    /**
     * @param array<string, mixed> $context
     *
     * @return array<string, mixed>
     */
    private function buildContext(array $context): array
    {
        return array_merge($this->defaultContext, $context);
    }

    /**
     * @param mixed $data
     *
     * @return bool
     */
    private static function isEntityArray($data): bool
    {
        return is_array($data) && count($data) > 0 && reset($data) instanceof Entity;
    }
}

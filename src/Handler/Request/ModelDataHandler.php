<?php

/**
 * PHP version 7.3
 *
 * @category ModelDataHandler
 * @package  RetailCrm\Api\Handler\Request
 */

namespace RetailCrm\Api\Handler\Request;

use Psr\Http\Message\StreamFactoryInterface;
use RetailCrm\Api\Component\Serializer\Encoder\FormDataEncoder;
use RetailCrm\Api\Enum\RequestMethod;
use RetailCrm\Api\Handler\AbstractHandler;
use RetailCrm\Api\Model\RequestData;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ModelDataHandler
 *
 * @category ModelDataHandler
 * @package  RetailCrm\Api\Handler\Request
 */
class ModelDataHandler extends AbstractHandler
{
    /**
     * @var StreamFactoryInterface $streamFactory
     */
    private $streamFactory;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * ModelDataHandler constructor.
     *
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     * @param \Psr\Http\Message\StreamFactoryInterface          $streamFactory
     */
    public function __construct(SerializerInterface $serializer, StreamFactoryInterface $streamFactory)
    {
        $this->serializer = $serializer;
        $this->streamFactory = $streamFactory;
    }

    /**
     * Fills PSR-7 compatible request with request data.
     *
     * @param mixed $item
     *
     * @return mixed|null
     * @throws \RetailCrm\Api\Exception\HandlerException
     *
     * @SuppressWarnings(PHPMD.ElseExpression)
     */
    public function handle($item)
    {
        if ($item instanceof RequestData && null !== $item->requestModel && null !== $item->request) {
            $formData = $this->serializer->serialize($item->requestModel, FormDataEncoder::FORMAT);

            if (in_array(strtoupper($item->request->getMethod()), [RequestMethod::GET, RequestMethod::DELETE], true)) {
                $item->request = $item->request->withUri(
                    $item->request->getUri()->withQuery($formData)
                );
            } else {
                $item->request = $item->request->withBody(
                    $this->streamFactory->createStream($formData)
                );
            }
        }

        return parent::handle($item);
    }
}

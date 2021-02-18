<?php

/**
 * PHP version 7.3
 *
 * @category FormDataEncoder
 * @package  RetailCrm\Api\Component\Serializer\Encoder
 */

namespace RetailCrm\Api\Component\Serializer\Encoder;

use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\Encoder\EncoderInterface;

/**
 * Class FormDataEncoder
 *
 * @category FormDataEncoder
 * @package  RetailCrm\Api\Component\Serializer\Encoder
 */
class FormDataEncoder implements EncoderInterface, DecoderInterface
{
    public const FORMAT = 'form-data';
    public const OPTIONS = 'http_build_query_options';

    /** @var array[] */
    private $defaultContext = [
        self::OPTIONS => [],
    ];

    /**
     * @param array<string, mixed> $context
     *
     * @return mixed[]
     * @inheritDoc
     */
    public function decode(string $data, string $format, array $context = []): array
    {
        $result = [];
        parse_str($data, $result);

        return $result;
    }

    /**
     * @param array<string, mixed> $context
     *
     * @return mixed
     * @inheritDoc
     */
    public function encode($data, string $format, array $context = [])
    {
        $options = $context[self::OPTIONS] ?? $this->defaultContext[self::OPTIONS];

        return http_build_query($data, ...$options);
    }

    /**
     * @inheritdoc
     */
    public function supportsEncoding(string $format): bool
    {
        return static::FORMAT === $format;
    }

    /**
     * @inheritDoc
     */
    public function supportsDecoding(string $format): bool
    {
        return $this->supportsEncoding($format);
    }
}

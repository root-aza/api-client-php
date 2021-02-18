<?php

/**
 * PHP version 7.3
 *
 * @category SerializerFactory
 * @package  RetailCrm\Api\Factory
 */

namespace RetailCrm\Api\Factory;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\Reader;
use RetailCrm\Api\Component\Serializer\Encoder\FormDataEncoder;
use RetailCrm\Api\Component\Serializer\Normalizer\DateTimeNormalizer;
use RetailCrm\Api\Component\Serializer\Normalizer\EntityNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DataUriNormalizer;
use Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class SerializerFactory
 *
 * @category SerializerFactory
 * @package  RetailCrm\Api\Factory
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class SerializerFactory
{
    /**
     * Creates and returns Serializer.
     *
     * @param \Doctrine\Common\Annotations\Reader|null $reader
     *
     * @return \Symfony\Component\Serializer\SerializerInterface
     */
    public static function createSerializer(?Reader $reader = null): SerializerInterface
    {
        $classMetadataFactory = new ClassMetadataFactory(new AnnotationLoader($reader ?: new AnnotationReader()));
        $metadataAwareNameConverter = new MetadataAwareNameConverter($classMetadataFactory);

        return new Serializer(
            [
                new DateTimeNormalizer(),
                new DateTimeZoneNormalizer(),
                new DateIntervalNormalizer(),
                new DataUriNormalizer(),
                new JsonSerializableNormalizer(),
                new ArrayDenormalizer(),
                new EntityNormalizer(new ObjectNormalizer($classMetadataFactory, $metadataAwareNameConverter)),
            ],
            [
                JsonEncoder::FORMAT     => new JsonEncoder(),
                FormDataEncoder::FORMAT => new FormDataEncoder()
            ]
        );
    }
}

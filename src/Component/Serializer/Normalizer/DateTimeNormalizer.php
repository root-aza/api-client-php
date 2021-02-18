<?php

/**
 * PHP version 7.3
 *
 * @category DateTimeNormalizer
 * @package  RetailCrm\Api\Component\Serializer\Normalizer
 */

namespace RetailCrm\Api\Component\Serializer\Normalizer;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use Exception;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer as BaseDateTimeNormalizer;

/**
 * Class DateTimeNormalizer
 *
 * @category DateTimeNormalizer
 * @package  RetailCrm\Api\Component\Serializer\Normalizer
 */
class DateTimeNormalizer extends BaseDateTimeNormalizer
{
    /** @var array<string, ?string> */
    private $defaultContext = [
        self::FORMAT_KEY => 'Y-m-d H:i:s',
        self::TIMEZONE_KEY => null,
    ];

    /**
     * @param mixed[] $context
     *
     * @inheritDoc
     */
    public function normalize($object, string $format = null, array $context = []): string
    {
        if (!$object instanceof DateTimeInterface) {
            throw new InvalidArgumentException('The object must implement the "\DateTimeInterface".');
        }

        $dateTimeFormat = $context[self::FORMAT_KEY] ?? $this->defaultContext[self::FORMAT_KEY];
        $timezone = $this->getTimezone($context);

        if (null !== $timezone) {
            $object = clone $object;
            $object = $object->setTimezone($timezone);
        }

        return $object->format($dateTimeFormat);
    }

    /**
     * @param mixed[] $context
     *
     * @inheritDoc
     */
    public function denormalize($data, string $type, string $format = null, array $context = [])
    {
        $dateTimeFormat = $context[self::FORMAT_KEY] ?? null;
        $timezone = $this->getTimezone($context);

        if ('' === $data || null === $data) {
            throw new NotNormalizableValueException(
                'The data is either an empty string or null, you should pass a string that can be parsed ' .
                'with the passed format or a valid DateTime string.'
            );
        }

        if (null !== $dateTimeFormat) {
            $object = DateTime::class === $type
                ? DateTime::createFromFormat($dateTimeFormat, $data, $timezone)
                : DateTimeImmutable::createFromFormat($dateTimeFormat, $data, $timezone);

            if (false !== $object) {
                return $object;
            }

            $dateTimeErrors = DateTime::class === $type
                ? DateTime::getLastErrors()
                : DateTimeImmutable::getLastErrors();

            throw new NotNormalizableValueException(sprintf(
                'Parsing datetime string "%s" using format "%s" resulted in %d errors: ',
                $data,
                $dateTimeFormat,
                $dateTimeErrors['error_count']
            ) . "\n" .
                implode("\n", $this->formatDateTimeErrors($dateTimeErrors['errors'])));
        }

        try {
            return \DateTime::class === $type
                ? new DateTime($data, $timezone)
                : new DateTimeImmutable($data, $timezone);
        } catch (Exception $exception) {
            throw new NotNormalizableValueException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }

    /**
     * @param mixed[] $context
     *
     * @return DateTimeZone|null
     */
    private function getTimezone(array $context): ?DateTimeZone
    {
        $dateTimeZone = $context[self::TIMEZONE_KEY] ?? $this->defaultContext[self::TIMEZONE_KEY];

        if (null === $dateTimeZone) {
            return null;
        }

        return $dateTimeZone instanceof DateTimeZone ? $dateTimeZone : new DateTimeZone($dateTimeZone);
    }

    /**
     * Formats datetime errors.
     *
     * @param mixed[] $errors
     *
     * @return string[]
     */
    private function formatDateTimeErrors(array $errors): array
    {
        $formattedErrors = [];

        foreach ($errors as $pos => $message) {
            $formattedErrors[] = sprintf('at position %d: %s', $pos, $message);
        }

        return $formattedErrors;
    }
}

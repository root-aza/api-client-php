<?php

/**
 * PHP version 7.3
 *
 * @category TestClientFactory
 * @package  RetailCrm\Test
 */

namespace RetailCrm\Test;

use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use RetailCrm\Api\Builder\ClientBuilder;
use RetailCrm\Api\Client;
use RetailCrm\Api\Handler\Request\HeaderAuthenticatorHandler;

/**
 * Class TestClientFactory
 *
 * @category TestClientFactory
 * @package  RetailCrm\Test
 */
class TestClientFactory
{
    /**
     * Create client using environment variables.
     *
     * @param \Psr\Http\Client\ClientInterface $client
     * @param \Psr\Log\LoggerInterface|null    $logger
     *
     * @return \RetailCrm\Api\Client
     * @throws \RetailCrm\Api\Exception\BuilderException
     */
    public static function createClient(ClientInterface $client, LoggerInterface $logger = null): Client
    {
        return (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setDebugLogger($logger)
            ->setHttpClient($client)
            ->build();
    }
}

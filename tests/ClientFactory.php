<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Tests;

class ClientFactory
{
    public static function create(HttpCallBackCatcher $httpCallback): \VoiceApiCallLib\VoiceApiCallClient
    {
        $client = (new \VoiceApiCallLib\VoiceApiCallClient(static::getConfigurationFromEnvironment()))
            ->withConfiguration(static::getTestConfiguration($httpCallback));
        return $client;
    }

    public static function getTestConfiguration(HttpCallBackCatcher $httpCallback): array
    {
        return ['environment' => \VoiceApiCallLib\Environment::SINTESA, 'httpCallback' => $httpCallback];
    }

    public static function getConfigurationFromEnvironment(): array
    {
        $config = [];
        $timeout = getenv('VOICE_API_CALL_TIMEOUT');
        $numberOfRetries = getenv('VOICE_API_CALL_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('VOICE_API_CALL_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('VOICE_API_CALL_ENVIRONMENT');
        $username = getenv('VOICE_API_CALL_USERNAME');
        $password = getenv('VOICE_API_CALL_PASSWORD');

        if ($timeout !== false && \is_numeric($timeout)) {
            $config['timeout'] = intval($timeout);
        }

        if ($numberOfRetries !== false && \is_numeric($numberOfRetries)) {
            $config['numberOfRetries'] = intval($numberOfRetries);
        }

        if ($maximumRetryWaitTime !== false && \is_numeric($maximumRetryWaitTime)) {
            $config['maximumRetryWaitTime'] = intval($maximumRetryWaitTime);
        }

        if ($environment !== false) {
            $config['environment'] = $environment;
        }

        if ($username !== false) {
            $config['username'] = $username;
        }

        if ($password !== false) {
            $config['password'] = $password;
        }

        return $config;
    }
}

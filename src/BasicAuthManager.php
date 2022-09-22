<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib;

use VoiceApiCallLib\Http\HttpRequest;

/**
 * Utility class for authorization and token management.
 */
class BasicAuthManager implements AuthManagerInterface, BasicAuthCredentials
{
    private $username;

    private $password;

    /**
     * Returns an instance of this class.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * String value for username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * String value for password.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $username
     * @param string $password
     */
    public function equals(string $username, string $password): bool
    {
        return $username == $this->username &&
            $password == $this->password;
    }

    /**
     * Adds authentication to the given HttpRequest.
     */
    public function apply(HttpRequest $httpRequest)
    {
        $httpRequest->addHeader(
            'Authorization',
            'Basic ' . base64_encode($this->username . ':' . $this->password)
        );
    }
}

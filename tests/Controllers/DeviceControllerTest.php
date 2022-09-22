<?php
/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Tests;

use VoiceApiCallLib\Exceptions\ApiException;
use VoiceApiCallLib\Exceptions;
use VoiceApiCallLib\ApiHelper;
use VoiceApiCallLib\Models;
use PHPUnit\Framework\TestCase;

class DeviceControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\DeviceController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected static $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$httpResponse = new HttpCallBackCatcher();
        self::$controller = ClientFactory::create(self::$httpResponse)->getDeviceController();
    }


    /**
     * DEVICE_TYPE :

\*   TRUNK (This will be sip trunk with dedicated IP Address)
\*   EXTEN (Extension)
     */
    public function testDevice()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "device_type": "[DEVICE_TYPE]",
  "device_owner": "[DEVICE_OWNER]",
  "extension"' .
            ': "[DEVICE_NAME / EXTENSION]",
  "secret": "[DEVICE_SECRET]",
  "ip_address": "[DEVICE' .
            '_IP_ADDRESS]"
}'),
            'VoiceApiCallLib\Models\\DeviceRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->device($body);
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = null ;
        $headers['Date'] = null ;
        $headers['Server'] = null ;
        $headers['X-Powered-By'] = null ;
        $headers['Content-Length'] = null ;
        $headers['ETag'] = null ;
        $headers['Keep-Alive'] = null ;
        $headers['Connection'] = null ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                '{
  "response": true,
  "data": {
    "extension": "961424500000013",
    "secre' .
                't": "padamunegeri",
    "device_owner": "kiki"
  }
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }

    /**
     * Todo Add description for test testDevcieList
     */
    public function testDevcieList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->devcieList();
        } catch (ApiException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            self::$httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test headers
        $headers = [];
        $headers['Content-Type'] = null ;
        $headers['Date'] = null ;
        $headers['Server'] = null ;
        $headers['X-Powered-By'] = null ;
        $headers['Content-Length'] = null ;
        $headers['ETag'] = null ;
        $headers['Keep-Alive'] = null ;
        $headers['Connection'] = null ;
        
        $this->assertTrue(
            TestHelper::areHeadersProperSubsetOf($headers, self::$httpResponse->getResponse()->getHeaders(), true),
            "Headers do not match"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertTrue(
            TestHelper::isJsonObjectProperSubsetOf(
                '{
  "response": true,
  "data": [
    {
      "extension": "968976567",
      "' .
                'host": "dynamic",
      "device_type": "EXTEN",
      "device_owner": "sahabat",
' .
                '      "secret": "sahabat",
      "isOnline": 0,
      "device_state": "UNAVAILABLE' .
                '"
    },
    {
      "extension": "961424500000013",
      "host": "192.168.1.1"' .
                ',
      "device_type": "TRUNK",
      "device_owner": "kiki",
      "secret": "pa' .
                'damunegeri",
      "isOnline": 0,
      "device_state": null
    }
  ]
}',
                self::$httpResponse->getResponse()->getRawBody(),
                false,
                true,
                false
            ),
            "Response body does not match in keys"
        );
    }
}

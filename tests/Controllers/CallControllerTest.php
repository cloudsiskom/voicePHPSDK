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

class CallControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\CallController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getCallController();
    }


    /**
     * SUPPORTED **LANGUAGE** :

\* id-ID  
\* en-US

**GENDER** :

\* MALE  
\* FEMALE
     */
    public function testBlast()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "destination": "[DESTINATION]",
  "text_to_speech": "[TEXT_TO_SPEECH]",
  "langua' .
            'ge": "[LANGUAGE]",
  "gender": "[GENDER]",
  "repeat": 2,
  "external_id": "[EXTERNAL' .
            '_ID]",
  "callback_url": "https://eobub4g7qinc475.m.pipedream.net"
}'),
            'VoiceApiCallLib\Models\\Blastrequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->blast($body);
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
  "rcode": {
    "transaction_id": "489EF4175D9E35DDAEFD748' .
                '39DB9558D",
    "callback_key": "25c1e6ec24db6cf8bcff665761e1c985",
    "destinati' .
                'on": "62127867676",
    "text_to_speech": "Hai.... Selamat datang saudara-saudaraku' .
                ', anda adalah pelanggan utama hari ini, selamat yaaa gaeees!",
    "language": "id-' .
                'ID",
    "gender": "FEMALE",
    "VoiceRepeat": "2",
    "external_id": "93894893' .
                '483984938",
    "callback_url": "http"
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
}

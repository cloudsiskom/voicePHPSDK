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

class RouteControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\RouteController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getRouteController();
    }


    /**
     * Todo Add description for test testRouteIncoming
     */
    public function testRouteIncoming()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "did": "[DID]",
  "destination": "[DESTINATION]",
  "destination_detail": "[DESTI' .
            'NATION_DETAIL]"
}'),
            'VoiceApiCallLib\Models\\RouteIncomingRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->routeIncoming($body);
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
  "reponse": true,
  "did": "6285757920463",
  "destination": "TRUNK",
  "dest' .
                'ination_detail": "CVAI"
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
     * Todo Add description for test testRouteOutgoing
     */
    public function testRouteOutgoing()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "route_name": "[ROUTE_NAME]",
  "device": "[DEVICE]",
  "route_to": "[ROUTE_DESTI' .
            'NATION]",
  "route_detail": "[DESTINATION_DETAIL]",
  "route_prefix": "[PREFIX]"
}'),
            'VoiceApiCallLib\Models\\RouteOutgoingRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->routeOutgoing($body);
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
  "device": "8210000000001",
  "route_to": "RANDOM",
  "ro' .
                'ute_detail": "RDM1"
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
     * Todo Add description for test testRouteList
     */
    public function testRouteList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->routeList();
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
  "incoming_route": [
    {
      "id": 57,
      "transa' .
                'ction_id": null,
      "customer_code": "GOJEK",
      "did": "6285757920462",
  ' .
                '    "destination": "DTMFTEST",
      "destination_detail": null,
      "create_dat' .
                'e": "2022-08-23T22:57:32.000Z",
      "isActive": 1
    },
    {
      "id": 65,' .
                '
      "transaction_id": null,
      "customer_code": "GOJEK",
      "did": "6285' .
                '592055238",
      "destination": "CVAI",
      "destination_detail": "BANK_BKKN",' .
                '
      "create_date": "2022-09-01T17:00:23.000Z",
      "isActive": 1
    },
    ' .
                '{
      "id": 69,
      "transaction_id": null,
      "customer_code": "GOJEK",
' .
                '      "did": "02150995134",
      "destination": "IVR",
      "destination_detail"' .
                ': "TOKO_BUAH",
      "create_date": "2022-09-14T02:37:27.000Z",
      "isActive": ' .
                '1
    },
    {
      "id": 72,
      "transaction_id": null,
      "customer_co' .
                'de": "GOJEK",
      "did": "6285757920463",
      "destination": "TRUNK",
      "' .
                'destination_detail": "CVAI",
      "create_date": "2022-09-16T03:45:38.000Z",
    ' .
                '  "isActive": 1
    }
  ],
  "outgoing_route": [
    {
      "id": 582,
      ' .
                '"customer_code": "GOJEK",
      "extension": "ALL",
      "route_to": "PROVIDER",' .
                '
      "route_detail": "6285592055236",
      "tech_prefix": "",
      "create_dat' .
                'e": "2022-09-14T19:40:24.000Z",
      "isActive": 1
    },
    {
      "id": 583' .
                ',
      "customer_code": "GOJEK",
      "extension": "8210000000001",
      "rout' .
                'e_to": "RANDOM",
      "route_detail": "RDM1",
      "tech_prefix": "198767",
   ' .
                '   "create_date": "2022-09-16T03:45:44.000Z",
      "isActive": 1
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

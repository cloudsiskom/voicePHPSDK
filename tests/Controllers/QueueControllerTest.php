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

class QueueControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\QueueController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getQueueController();
    }


    /**
     * RING_STRATEGY :

\*   ringall: ring all available channels until one answers (default)
\*   roundrobin: take turns ringing each available interface (deprecated in 1.4, use rrmemory)
\*   leastrecent: ring interface which was least recently called by this queue
\*   fewestcalls: ring the one with fewest completed calls from this queue
\*   random: ring random interface
\*   rrmemory: round robin with memory, remember where we left off last ring pass
     */
    public function testQueueNew()
    {
        // Parameters for the API call
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '{
  "queue_name": "[QUEUE_NAME]",
  "ring_strategy": "[RING_STRATEGY]"
}'),
            'VoiceApiCallLib\Models\\QueueNewRequest'
        );

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->queueNew($body);
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
    "queue_name": "queue-151-3",
    "ring_str' .
                'ategy": "ringall"
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
     * Todo Add description for test testQueueList
     */
    public function testQueueList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->queueList();
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
      "queue_id": 35,
      "queue_name' .
                '": "96789665",
      "musiclass": "default",
      "strategy": "ringall",
      "' .
                'members": [
        {
          "member": "SIP/968976567"
        }
      ]
   ' .
                ' },
    {
      "queue_id": 36,
      "queue_name": "96queue-151-3",
      "musi' .
                'class": "default",
      "strategy": "ringall",
      "members": []
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

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

class DIDControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\DIDController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getDIDController();
    }


    /**
     * Todo Add description for test testDIDListAll
     */
    public function testDIDListAll()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->dIDListAll();
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
  "total": 458,
  "data": [
    {
      "did": "628587393' .
                '5693",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055237",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935694",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935695",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935696",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920391",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935697",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0392",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920393",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920394",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920395",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920396",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920397",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055239",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5240",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935698",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055241",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055242",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935699",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055243",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935700",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5244",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935701",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055245",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935702",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055246",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055247",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920398",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0399",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920400",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920401",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920402",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920403",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920405",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055248",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5703",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935704",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055249",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935706",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055250",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935707",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920406",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0407",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920408",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935708",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920409",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935709",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920410",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935710",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0411",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935711",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920412",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935712",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920413",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935713",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920414",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5714",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055251",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055253",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055254",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055256",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055257",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055258",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5259",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055260",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055261",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055262",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055263",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055264",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055265",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0415",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935715",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920416",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920417",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935716",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920418",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935717",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0419",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935718",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055266",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935719",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055267",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055268",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920420",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5720",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920421",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920422",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920423",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935721",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920424",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935722",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0425",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935723",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055269",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920426",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935724",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920427",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935725",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5270",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920428",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935726",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055271",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920429",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055272",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920430",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5273",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920431",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055274",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920432",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055275",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925037",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055276",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5038",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055277",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925039",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925040",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935727",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935728",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935729",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5730",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935731",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055278",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935732",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055279",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055280",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055281",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5282",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925041",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935733",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055283",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925042",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935734",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925043",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5735",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055284",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925044",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935736",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055285",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925045",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935737",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5286",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935738",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055287",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935739",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055288",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935740",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935741",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5289",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935742",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055290",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925046",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925047",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055291",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055292",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5743",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055293",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055294",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925048",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935744",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055295",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925049",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5745",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925051",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935746",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935747",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055296",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935748",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055297",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5749",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055298",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935750",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055299",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935751",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055300",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935752",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628559205' .
                '5301",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925052",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935753",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055302",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935754",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055303",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935755",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5053",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935756",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925054",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935758",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925055",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935759",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925056",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5760",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925057",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935761",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925058",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935762",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925059",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055304",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5763",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925060",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055305",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935764",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925061",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935765",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925062",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5063",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925064",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925065",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925066",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925067",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925068",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285592055306",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5069",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925070",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285592055307",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925071",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925072",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055308",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925073",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5766",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055309",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925074",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055310",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935767",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285592055311",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935768",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5769",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285592055312",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935770",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285592055313",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285592055314",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920433",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920434",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0435",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920436",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920437",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920438",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920439",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920441",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920442",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5771",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935772",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925075",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925076",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925077",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925078",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925079",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5773",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935774",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935776",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920443",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920445",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920446",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920447",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0448",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935778",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925080",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935779",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935780",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925081",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935781",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5082",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935782",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925083",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935783",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925084",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935784",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920449",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5085",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935785",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920450",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935786",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925086",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920451",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935787",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5087",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757920452",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935788",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920453",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935790",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935791",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935792",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5793",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935794",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935795",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935796",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925088",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935797",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920454",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5089",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935798",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925090",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935799",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925091",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935800",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925092",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0455",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935904",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925093",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757920457",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925094",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757920458",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925095",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '0459",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925096",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757920460",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925097",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757920461",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925098",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757920462",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792' .
                '5099",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925100",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925101",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285873935905",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285873935906",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285873935907",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285873935908",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5909",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925102",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285757925103",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925104",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925105",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "6285757925106",
      "activation_cost": 100000,
      "monthly_cos' .
                't": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did"' .
                ': "6285757925107",
      "activation_cost": 100000,
      "monthly_cost": 100000,' .
                '
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628587393' .
                '5910",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_' .
                'type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925108",
    ' .
                '  "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN"' .
                ',
      "active": 1
    },
    {
      "did": "6285873935911",
      "activatio' .
                'n_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "ac' .
                'tive": 1
    },
    {
      "did": "6285757925109",
      "activation_cost": 100' .
                '000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
  ' .
                '  },
    {
      "did": "6285757925110",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {' .
                '
      "did": "623613007221",
      "activation_cost": 100000,
      "monthly_cost' .
                '": 100000,
      "did_type": "FVN",
      "active": 1
    },
    {
      "did":' .
                ' "6285757925112",
      "activation_cost": 100000,
      "monthly_cost": 100000,
' .
                '      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285757925' .
                '113",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_t' .
                'ype": "MVN",
      "active": 1
    },
    {
      "did": "623613007223",
      ' .
                '"activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "FVN",' .
                '
      "active": 1
    },
    {
      "did": "6285757925114",
      "activation_' .
                'cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "acti' .
                've": 1
    },
    {
      "did": "623613007224",
      "activation_cost": 100000' .
                ',
      "monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
    }' .
                ',
    {
      "did": "6285757925116",
      "activation_cost": 100000,
      "mo' .
                'nthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
  ' .
                '    "did": "6285757925117",
      "activation_cost": 100000,
      "monthly_cost":' .
                ' 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "' .
                '6285757925118",
      "activation_cost": 100000,
      "monthly_cost": 100000,
  ' .
                '    "did_type": "MVN",
      "active": 1
    },
    {
      "did": "628575792511' .
                '9",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_typ' .
                'e": "MVN",
      "active": 1
    },
    {
      "did": "6285757925120",
      "' .
                'activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
' .
                '      "active": 1
    },
    {
      "did": "6285757925121",
      "activation_c' .
                'ost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "activ' .
                'e": 1
    },
    {
      "did": "6285757925122",
      "activation_cost": 100000' .
                ',
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    }' .
                ',
    {
      "did": "6285757925124",
      "activation_cost": 100000,
      "mo' .
                'nthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
  ' .
                '    "did": "6285757925125",
      "activation_cost": 100000,
      "monthly_cost":' .
                ' 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "' .
                '623613007225",
      "activation_cost": 100000,
      "monthly_cost": 100000,
   ' .
                '   "did_type": "FVN",
      "active": 1
    },
    {
      "did": "6285757925126' .
                '",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type' .
                '": "MVN",
      "active": 1
    },
    {
      "did": "6285757925127",
      "a' .
                'ctivation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
 ' .
                '     "active": 1
    },
    {
      "did": "623613007226",
      "activation_cos' .
                't": 100000,
      "monthly_cost": 100000,
      "did_type": "FVN",
      "active"' .
                ': 1
    },
    {
      "did": "6285757925128",
      "activation_cost": 100000,' .
                '
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },' .
                '
    {
      "did": "623613007227",
      "activation_cost": 100000,
      "month' .
                'ly_cost": 100000,
      "did_type": "FVN",
      "active": 1
    },
    {
     ' .
                ' "did": "623613007228",
      "activation_cost": 100000,
      "monthly_cost": 100' .
                '000,
      "did_type": "FVN",
      "active": 1
    },
    {
      "did": "6236' .
                '13007229",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "' .
                'did_type": "FVN",
      "active": 1
    },
    {
      "did": "623613007230",
 ' .
                '     "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "F' .
                'VN",
      "active": 1
    },
    {
      "did": "623613007231",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "FVN",
      "' .
                'active": 1
    },
    {
      "did": "623613007232",
      "activation_cost": 10' .
                '0000,
      "monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
 ' .
                '   },
    {
      "did": "623613007233",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
    },
    {' .
                '
      "did": "623613007234",
      "activation_cost": 100000,
      "monthly_cost' .
                '": 100000,
      "did_type": "FVN",
      "active": 1
    },
    {
      "did":' .
                ' "623613007235",
      "activation_cost": 100000,
      "monthly_cost": 100000,
 ' .
                '     "did_type": "FVN",
      "active": 1
    },
    {
      "did": "62361300723' .
                '6",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_typ' .
                'e": "FVN",
      "active": 1
    },
    {
      "did": "623613007237",
      "a' .
                'ctivation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "FVN",
 ' .
                '     "active": 1
    },
    {
      "did": "6285757925129",
      "activation_co' .
                'st": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active' .
                '": 1
    },
    {
      "did": "623613007238",
      "activation_cost": 100000,' .
                '
      "monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
    },' .
                '
    {
      "did": "6285757925131",
      "activation_cost": 100000,
      "mont' .
                'hly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
    ' .
                '  "did": "6285757925132",
      "activation_cost": 100000,
      "monthly_cost": 1' .
                '00000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "62' .
                '85757925133",
      "activation_cost": 100000,
      "monthly_cost": 100000,
    ' .
                '  "did_type": "MVN",
      "active": 1
    },
    {
      "did": "623613007240",' .
                '
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type":' .
                ' "FVN",
      "active": 1
    },
    {
      "did": "6285757925134",
      "act' .
                'ivation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
   ' .
                '   "active": 1
    },
    {
      "did": "6285757925135",
      "activation_cost' .
                '": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active":' .
                ' 1
    },
    {
      "did": "623613007241",
      "activation_cost": 100000,
 ' .
                '     "monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
    },
 ' .
                '   {
      "did": "6285757925136",
      "activation_cost": 100000,
      "monthl' .
                'y_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      ' .
                '"did": "623613007242",
      "activation_cost": 100000,
      "monthly_cost": 1000' .
                '00,
      "did_type": "FVN",
      "active": 1
    },
    {
      "did": "62857' .
                '57925137",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "' .
                'did_type": "MVN",
      "active": 1
    },
    {
      "did": "623613007243",
 ' .
                '     "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "F' .
                'VN",
      "active": 1
    },
    {
      "did": "6285757925138",
      "activa' .
                'tion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      ' .
                '"active": 1
    },
    {
      "did": "623613007244",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "FVN",
      "active": 1
' .
                '    },
    {
      "did": "6285757925139",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285757925140",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935601",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935602",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935603",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935604",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935605",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935606",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935607",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935608",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935609",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935610",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935611",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935612",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935613",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935614",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935615",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935616",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935617",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935618",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935619",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935620",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935621",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935622",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935623",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935624",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935625",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935626",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935627",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935628",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935629",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935630",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935631",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935632",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935633",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935634",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935635",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935636",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935637",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935638",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935639",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935640",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935641",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935642",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935643",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935644",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935645",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935646",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935647",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935648",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935649",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935650",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935651",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935652",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935653",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935654",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935655",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935657",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935658",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935659",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935660",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935661",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935662",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935663",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935664",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935667",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935668",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935669",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935670",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935671",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935672",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935673",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935674",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935675",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935676",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935677",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935679",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "6285873935680",
      "activation_cost": 100000,
    ' .
                '  "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    ' .
                '{
      "did": "6285873935681",
      "activation_cost": 100000,
      "monthly_c' .
                'ost": 100000,
      "did_type": "MVN",
      "active": 1
    },
    {
      "di' .
                'd": "6285873935682",
      "activation_cost": 100000,
      "monthly_cost": 100000' .
                ',
      "did_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873' .
                '935683",
      "activation_cost": 100000,
      "monthly_cost": 100000,
      "di' .
                'd_type": "MVN",
      "active": 1
    },
    {
      "did": "6285873935684",
  ' .
                '    "activation_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MV' .
                'N",
      "active": 1
    },
    {
      "did": "6285873935685",
      "activat' .
                'ion_cost": 100000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "' .
                'active": 1
    },
    {
      "did": "6285873935686",
      "activation_cost": 1' .
                '00000,
      "monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
' .
                '    },
    {
      "did": "02150995134",
      "activation_cost": 100000,
      ' .
                '"monthly_cost": 100000,
      "did_type": "MVN",
      "active": 1
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

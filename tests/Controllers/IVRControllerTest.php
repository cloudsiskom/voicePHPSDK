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

class IVRControllerTest extends TestCase
{
    /**
     * @var \VoiceApiCallLib\Controllers\IVRController Controller instance
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
        self::$controller = ClientFactory::create(self::$httpResponse)->getIVRController();
    }


    /**
     * Todo Add description for test testIVRList
     */
    public function testIVRList()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->iVRList();
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

        $this->assertEquals(
            '{
    "response": true,
    "data": [
        {
            "id": 36,
            "c' .
                'ustomer_code": "GOJEK",
            "ivr_name": "TOKO_BUAH",
            "ivr_title"' .
                ': "MAIN_IVR",
            "ivr_parent": 0,
            "ivr_text": "Selamat datang d' .
                'i toko buah, disini anda akan mendapatkan buah terbaik, untuk pembelian buah, tekan ' .
                '1, untuk pembelian bibit buah, tekan 2, untuk pembelian pupuk buah, tekan 3, tekan 4' .
                ' untuk menghubungi layanan pelanggan, tekan 5 untuk apa, tekan angka 9 untuk mengakh' .
                'iri",
            "language": "id-ID",
            "gender": "MALE",
            "ke' .
                'y_pressed": 0,
            "exit_key": "9",
            "back_menu": 8,
            ' .
                '"main_menu": "0",
            "action": "MAIN",
            "action_detail": "",
   ' .
                '         "trying": 3,
            "isActive": 1,
            "children": [
         ' .
                '       {
                    "id": 37,
                    "customer_code": "GOJEK",' .
                '
                    "ivr_name": "TOKO_BUAH",
                    "ivr_title": "BUAH' .
                '",
                    "ivr_parent": 36,
                    "ivr_text": "Untuk memb' .
                'eli buah mangga tekan1, untuk membeli buah jeruk tekan 2, untuk membeli buah salak t' .
                'ekan 3, untuk mengakhiri tekan angka 9",
                    "language": "id-ID",
  ' .
                '                  "gender": "MALE",
                    "key_pressed": 1,
          ' .
                '          "exit_key": "9",
                    "back_menu": 8,
                    "' .
                'main_menu": "0",
                    "action": "NONE",
                    "action_d' .
                'etail": "",
                    "trying": 3,
                    "isActive": 1,
    ' .
                '                "children": [
                        {
                            ' .
                '"id": 42,
                            "customer_code": "GOJEK",
                    ' .
                '        "ivr_name": "TOKO_BUAH",
                            "ivr_title": "BUAH JERU' .
                'K",
                            "ivr_parent": 37,
                            "ivr_t' .
                'ext": "Untuk jeruk bali tekan 1, jeruk yang lain tekan 2, tekan 3 untuk mengakhiri",' .
                '
                            "language": "id-ID",
                            "gende' .
                'r": "MALE",
                            "key_pressed": 1,
                          ' .
                '  "exit_key": "9",
                            "back_menu": 8,
                     ' .
                '       "main_menu": "0",
                            "action": "none",
             ' .
                '               "action_detail": "",
                            "trying": 3,
       ' .
                '                     "isActive": 1
                        },
                      ' .
                '  {
                            "id": 69,
                            "customer_code' .
                '": "GOJEK",
                            "ivr_name": "TOKO_BUAH",
                   ' .
                '         "ivr_title": "Mangga",
                            "ivr_parent": 37,
      ' .
                '                      "ivr_text": "Mangga sedang habis",
                           ' .
                ' "language": "id-ID",
                            "gender": "MALE",
                ' .
                '            "key_pressed": 2,
                            "exit_key": "9",
         ' .
                '                   "back_menu": 8,
                            "main_menu": "0",
   ' .
                '                         "action": "none",
                            "action_detai' .
                'l": null,
                            "trying": 3,
                            "isAc' .
                'tive": 1
                        }
                    ]
                },
        ' .
                '        {
                    "id": 38,
                    "customer_code": "GOJEK"' .
                ',
                    "ivr_name": "TOKO_BUAH",
                    "ivr_title": "BIB' .
                'IT",
                    "ivr_parent": 36,
                    "ivr_text": "Untuk bi' .
                'bit lokal tekan 1, untuk bibit import tekan 2, untuk mengakhiri tekan 9",
          ' .
                '          "language": "id-ID",
                    "gender": "MALE",
               ' .
                '     "key_pressed": 2,
                    "exit_key": "9",
                    "bac' .
                'k_menu": 8,
                    "main_menu": "0",
                    "action": "MON' .
                '",
                    "action_detail": "",
                    "trying": 3,
       ' .
                '             "isActive": 1,
                    "children": [
                      ' .
                '  {
                            "id": 43,
                            "customer_code' .
                '": "GOJEK",
                            "ivr_name": "TOKO_BUAH",
                   ' .
                '         "ivr_title": "BIBIT_LOCA",
                            "ivr_parent": 38,
  ' .
                '                          "ivr_text": "Bibit buah lokal jumbo tekan 1, Bibit buah lo' .
                'kal biasa tekan 2",
                            "language": "id-ID",
               ' .
                '             "gender": "FEMALE",
                            "key_pressed": 1,
     ' .
                '                       "exit_key": "9",
                            "back_menu": 8,
' .
                '                            "main_menu": "0",
                            "action": ' .
                '"MON",
                            "action_detail": "",
                            ' .
                '"trying": 3,
                            "isActive": 1,
                            ' .
                '"children": [
                                {
                                    ' .
                '"id": 44,
                                    "customer_code": "GOJEK",
            ' .
                '                        "ivr_name": "TOKO_BUAH",
                                   ' .
                ' "ivr_title": "BIBIT_JUMB",
                                    "ivr_parent": 43,
  ' .
                '                                  "ivr_text": "Untuk bibit buah jumbo super tekan 1,' .
                ' bibit jumbo biasa tekan 2",
                                    "language": "id-ID"' .
                ',
                                    "gender": "MALE",
                            ' .
                '        "key_pressed": 1,
                                    "exit_key": "9",
     ' .
                '                               "back_menu": 8,
                                    "' .
                'main_menu": "0",
                                    "action": "GONE",
             ' .
                '                       "action_detail": "",
                                    "try' .
                'ing": 3,
                                    "isActive": 1
                         ' .
                '       },
                                {
                                    "id"' .
                ': 45,
                                    "customer_code": "GOJEK",
                ' .
                '                    "ivr_name": "TOKO_BUAH",
                                    "iv' .
                'r_title": "LOCAL_BIAS",
                                    "ivr_parent": 43,
      ' .
                '                              "ivr_text": "Bibit buah local biasa hanya bisa di tana' .
                'm dimusin hujan, saat ini tidak musim hujan, terima kasih",
                        ' .
                '            "language": "id-ID",
                                    "gender": "MALE' .
                '",
                                    "key_pressed": 2,
                           ' .
                '         "exit_key": "9",
                                    "back_menu": 8,
      ' .
                '                              "main_menu": "0",
                                    ' .
                '"action": "NON",
                                    "action_detail": "",
          ' .
                '                          "trying": 3,
                                    "isActive' .
                '": 1
                                }
                            ]
               ' .
                '         }
                    ]
                },
                {
              ' .
                '      "id": 39,
                    "customer_code": "GOJEK",
                    "i' .
                'vr_name": "TOKO_BUAH",
                    "ivr_title": "PUPUK",
                   ' .
                ' "ivr_parent": 36,
                    "ivr_text": "Untuk pembelian pupk organik tek' .
                'an 1, pupuk kandang tekan 2, menghubungi layanan pelanggan tekan 3",
               ' .
                '     "language": "id-ID",
                    "gender": "MALE",
                    ' .
                '"key_pressed": 3,
                    "exit_key": "9",
                    "back_men' .
                'u": 8,
                    "main_menu": "0",
                    "action": "NON",
  ' .
                '                  "action_detail": "",
                    "trying": 3,
            ' .
                '        "isActive": 1,
                    "children": [
                        {
 ' .
                '                           "id": 40,
                            "customer_code": "G' .
                'OJEK",
                            "ivr_name": "TOKO_BUAH",
                        ' .
                '    "ivr_title": "PPK_KANDAN",
                            "ivr_parent": 39,
       ' .
                '                     "ivr_text": "Pupuk kandang sedang habis",
                     ' .
                '       "language": "id-ID",
                            "gender": "MALE",
          ' .
                '                  "key_pressed": 1,
                            "exit_key": "9",
   ' .
                '                         "back_menu": 8,
                            "main_menu": "0' .
                '",
                            "action": "NO",
                            "action_d' .
                'etail": "",
                            "trying": 3,
                            "is' .
                'Active": 1
                        },
                        {
                    ' .
                '        "id": 41,
                            "customer_code": "GOJEK",
            ' .
                '                "ivr_name": "TOKO_BUAH",
                            "ivr_title": "P' .
                'PK_ORG",
                            "ivr_parent": 39,
                            "' .
                'ivr_text": "Pupuk organik yang ada tinggal 1",
                            "language' .
                '": "id-ID",
                            "gender": "FEMALE",
                        ' .
                '    "key_pressed": 2,
                            "exit_key": "9",
                 ' .
                '           "back_menu": 8,
                            "main_menu": "0",
           ' .
                '                 "action": "NO",
                            "action_detail": "",
  ' .
                '                          "trying": 3,
                            "isActive": 1
   ' .
                '                     }
                    ]
                },
                {
  ' .
                '                  "id": 46,
                    "customer_code": "GOJEK",
          ' .
                '          "ivr_name": "TOKO_BUAH",
                    "ivr_title": "CS",
          ' .
                '          "ivr_parent": 36,
                    "ivr_text": "Anda akan dihubungkan d' .
                'engan layanan pelanggan",
                    "language": "id-ID",
                 ' .
                '   "gender": "MALE",
                    "key_pressed": 4,
                    "exit' .
                '_key": "9",
                    "back_menu": 8,
                    "main_menu": "0"' .
                ',
                    "action": "CS",
                    "action_detail": "",
     ' .
                '               "trying": 3,
                    "isActive": 1
                },
   ' .
                '             {
                    "id": 75,
                    "customer_code": "G' .
                'OJEK",
                    "ivr_name": "TOKO_BUAH",
                    "ivr_title":' .
                ' "apa mau",
                    "ivr_parent": 36,
                    "ivr_text": "m' .
                'au apa?",
                    "language": "id-ID",
                    "gender": "MA' .
                'LE",
                    "key_pressed": 5,
                    "exit_key": "9",
    ' .
                '                "back_menu": 8,
                    "main_menu": "0",
              ' .
                '      "action": "none",
                    "action_detail": null,
                 ' .
                '   "trying": 3,
                    "isActive": 1
                }
            ]
  ' .
                '      }
    ]
',
            self::$httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * Todo Add description for test testIVRLang
     */
    public function testIVRLang()
    {

        // Set callback and perform API call
        $result = null;
        try {
            $result = self::$controller->iVRLang();
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
      "code": "fil-PH",
      "name": "' .
                'fil-PH-Wavenet-B",
      "language": "Filipino (Philippines)",
      "gender": "FE' .
                'MALE"
    },
    {
      "code": "fil-PH",
      "name": "fil-PH-Wavenet-C",
  ' .
                '    "language": "Filipino (Philippines)",
      "gender": "MALE"
    },
    {
  ' .
                '    "code": "fil-PH",
      "name": "fil-PH-Wavenet-D",
      "language": "Filipin' .
                'o (Philippines)",
      "gender": "MALE"
    },
    {
      "code": "fi-FI",
  ' .
                '    "name": "fi-FI-Standard-A",
      "language": "Finnish (Finland)",
      "gend' .
                'er": "FEMALE"
    },
    {
      "code": "fi-FI",
      "name": "fi-FI-Wavenet-A' .
                '",
      "language": "Finnish (Finland)",
      "gender": "FEMALE"
    },
    {' .
                '
      "code": "fr-CA",
      "name": "fr-CA-Standard-A",
      "language": "Frenc' .
                'h (Canada)",
      "gender": "FEMALE"
    },
    {
      "code": "fr-CA",
     ' .
                ' "name": "fr-CA-Standard-B",
      "language": "French (Canada)",
      "gender": ' .
                '"MALE"
    },
    {
      "code": "fr-CA",
      "name": "fr-CA-Standard-C",
  ' .
                '    "language": "French (Canada)",
      "gender": "FEMALE"
    },
    {
      "' .
                'code": "fr-CA",
      "name": "fr-CA-Standard-D",
      "language": "French (Canad' .
                'a)",
      "gender": "MALE"
    },
    {
      "code": "fr-CA",
      "name": "' .
                'fr-CA-Wavenet-A",
      "language": "French (Canada)",
      "gender": "FEMALE"
 ' .
                '   },
    {
      "code": "fr-CA",
      "name": "fr-CA-Wavenet-B",
      "langu' .
                'age": "French (Canada)",
      "gender": "MALE"
    },
    {
      "code": "fr-C' .
                'A",
      "name": "fr-CA-Wavenet-C",
      "language": "French (Canada)",
      "' .
                'gender": "FEMALE"
    },
    {
      "code": "sv-SE",
      "name": "sv-SE-Waven' .
                'et-A",
      "language": "Swedish (Sweden)",
      "gender": "FEMALE"
    },
   ' .
                ' {
      "code": "af-ZA",
      "name": "af-ZA-Standard-A",
      "language": "Af' .
                'rikaans (South Africa)",
      "gender": "FEMALE"
    },
    {
      "code": "fr' .
                '-CA",
      "name": "fr-CA-Wavenet-D",
      "language": "French (Canada)",
     ' .
                ' "gender": "MALE"
    },
    {
      "code": "sv-SE",
      "name": "sv-SE-Waven' .
                'et-B",
      "language": "Swedish (Sweden)",
      "gender": "FEMALE"
    },
   ' .
                ' {
      "code": "fr-FR",
      "name": "fr-FR-Standard-A",
      "language": "Fr' .
                'ench (France)",
      "gender": "FEMALE"
    },
    {
      "code": "ar-XA",
  ' .
                '    "name": "ar-XA-Standard-A",
      "language": "Arabic",
      "gender": "FEMAL' .
                'E"
    },
    {
      "code": "fr-FR",
      "name": "fr-FR-Standard-B",
      ' .
                '"language": "French (France)",
      "gender": "MALE"
    },
    {
      "code":' .
                ' "sv-SE",
      "name": "sv-SE-Wavenet-C",
      "language": "Swedish (Sweden)",
' .
                '      "gender": "MALE"
    },
    {
      "code": "ar-XA",
      "name": "ar-XA-' .
                'Standard-B",
      "language": "Arabic",
      "gender": "MALE"
    },
    {
  ' .
                '    "code": "fr-FR",
      "name": "fr-FR-Standard-C",
      "language": "French (' .
                'France)",
      "gender": "FEMALE"
    },
    {
      "code": "sv-SE",
      "n' .
                'ame": "sv-SE-Wavenet-D",
      "language": "Swedish (Sweden)",
      "gender": "FE' .
                'MALE"
    },
    {
      "code": "fr-FR",
      "name": "fr-FR-Standard-D",
   ' .
                '   "language": "French (France)",
      "gender": "MALE"
    },
    {
      "cod' .
                'e": "ar-XA",
      "name": "ar-XA-Standard-C",
      "language": "Arabic",
      ' .
                '"gender": "MALE"
    },
    {
      "code": "fr-FR",
      "name": "fr-FR-Standa' .
                'rd-E",
      "language": "French (France)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "sv-SE",
      "name": "sv-SE-Wavenet-E",
      "language": "Swed' .
                'ish (Sweden)",
      "gender": "MALE"
    },
    {
      "code": "ar-XA",
     ' .
                ' "name": "ar-XA-Standard-D",
      "language": "Arabic",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "fr-FR",
      "name": "fr-FR-Wavenet-A",
      "lan' .
                'guage": "French (France)",
      "gender": "FEMALE"
    },
    {
      "code": "' .
                'ar-XA",
      "name": "ar-XA-Wavenet-A",
      "language": "Arabic",
      "gende' .
                'r": "FEMALE"
    },
    {
      "code": "fr-FR",
      "name": "fr-FR-Wavenet-B"' .
                ',
      "language": "French (France)",
      "gender": "MALE"
    },
    {
    ' .
                '  "code": "ar-XA",
      "name": "ar-XA-Wavenet-B",
      "language": "Arabic",
 ' .
                '     "gender": "MALE"
    },
    {
      "code": "ar-XA",
      "name": "ar-XA-W' .
                'avenet-C",
      "language": "Arabic",
      "gender": "MALE"
    },
    {
    ' .
                '  "code": "ta-IN",
      "name": "ta-IN-Standard-A",
      "language": "Tamil (Ind' .
                'ia)",
      "gender": "FEMALE"
    },
    {
      "code": "ar-XA",
      "name"' .
                ': "ar-XA-Wavenet-D",
      "language": "Arabic",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "ta-IN",
      "name": "ta-IN-Standard-B",
      "language":' .
                ' "Tamil (India)",
      "gender": "MALE"
    },
    {
      "code": "bn-IN",
  ' .
                '    "name": "bn-IN-Standard-A",
      "language": "Bengali (India)",
      "gender' .
                '": "FEMALE"
    },
    {
      "code": "ta-IN",
      "name": "ta-IN-Wavenet-A",' .
                '
      "language": "Tamil (India)",
      "gender": "FEMALE"
    },
    {
     ' .
                ' "code": "bn-IN",
      "name": "bn-IN-Standard-B",
      "language": "Bengali (In' .
                'dia)",
      "gender": "MALE"
    },
    {
      "code": "fr-FR",
      "name":' .
                ' "fr-FR-Wavenet-C",
      "language": "French (France)",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "ta-IN",
      "name": "ta-IN-Wavenet-B",
      "lan' .
                'guage": "Tamil (India)",
      "gender": "MALE"
    },
    {
      "code": "bn-I' .
                'N",
      "name": "bn-IN-Wavenet-A",
      "language": "Bengali (India)",
      "' .
                'gender": "FEMALE"
    },
    {
      "code": "te-IN",
      "name": "te-IN-Stand' .
                'ard-A",
      "language": "Telugu (India)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "fr-FR",
      "name": "fr-FR-Wavenet-D",
      "language": "Fren' .
                'ch (France)",
      "gender": "MALE"
    },
    {
      "code": "te-IN",
      ' .
                '"name": "te-IN-Standard-B",
      "language": "Telugu (India)",
      "gender": "M' .
                'ALE"
    },
    {
      "code": "bn-IN",
      "name": "bn-IN-Wavenet-B",
     ' .
                ' "language": "Bengali (India)",
      "gender": "MALE"
    },
    {
      "code"' .
                ': "fr-FR",
      "name": "fr-FR-Wavenet-E",
      "language": "French (France)",
' .
                '      "gender": "FEMALE"
    },
    {
      "code": "th-TH",
      "name": "th-T' .
                'H-Standard-A",
      "language": "Thai (Thailand)",
      "gender": "FEMALE"
    ' .
                '},
    {
      "code": "bg-BG",
      "name": "bg-bg-Standard-A",
      "languag' .
                'e": "Bulgarian (Bulgaria)",
      "gender": "FEMALE"
    },
    {
      "code": ' .
                '"de-DE",
      "name": "de-DE-Standard-A",
      "language": "German (Germany)",
' .
                '      "gender": "FEMALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-T' .
                'R-Standard-A",
      "language": "Turkish (Turkey)",
      "gender": "FEMALE"
   ' .
                ' },
    {
      "code": "ca-ES",
      "name": "ca-es-Standard-A",
      "langua' .
                'ge": "Catalan (Spain)",
      "gender": "FEMALE"
    },
    {
      "code": "de-' .
                'DE",
      "name": "de-DE-Standard-B",
      "language": "German (Germany)",
    ' .
                '  "gender": "MALE"
    },
    {
      "code": "yue-HK",
      "name": "yue-HK-St' .
                'andard-A",
      "language": "Chinese (Hong Kong)",
      "gender": "FEMALE"
    ' .
                '},
    {
      "code": "de-DE",
      "name": "de-DE-Standard-C",
      "languag' .
                'e": "German (Germany)",
      "gender": "FEMALE"
    },
    {
      "code": "yue' .
                '-HK",
      "name": "yue-HK-Standard-B",
      "language": "Chinese (Hong Kong)",' .
                '
      "gender": "MALE"
    },
    {
      "code": "de-DE",
      "name": "de-DE' .
                '-Standard-D",
      "language": "German (Germany)",
      "gender": "MALE"
    },' .
                '
    {
      "code": "yue-HK",
      "name": "yue-HK-Standard-C",
      "languag' .
                'e": "Chinese (Hong Kong)",
      "gender": "FEMALE"
    },
    {
      "code": "' .
                'de-DE",
      "name": "de-DE-Standard-E",
      "language": "German (Germany)",
 ' .
                '     "gender": "MALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-S' .
                'tandard-B",
      "language": "Turkish (Turkey)",
      "gender": "MALE"
    },
' .
                '    {
      "code": "de-DE",
      "name": "de-DE-Standard-F",
      "language": ' .
                '"German (Germany)",
      "gender": "FEMALE"
    },
    {
      "code": "tr-TR",' .
                '
      "name": "tr-TR-Standard-C",
      "language": "Turkish (Turkey)",
      "g' .
                'ender": "FEMALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-Standa' .
                'rd-D",
      "language": "Turkish (Turkey)",
      "gender": "FEMALE"
    },
   ' .
                ' {
      "code": "yue-HK",
      "name": "yue-HK-Standard-D",
      "language": "' .
                'Chinese (Hong Kong)",
      "gender": "MALE"
    },
    {
      "code": "de-DE",' .
                '
      "name": "de-DE-Wavenet-A",
      "language": "German (Germany)",
      "ge' .
                'nder": "FEMALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-Standar' .
                'd-E",
      "language": "Turkish (Turkey)",
      "gender": "MALE"
    },
    {' .
                '
      "code": "cs-CZ",
      "name": "cs-CZ-Standard-A",
      "language": "Czech' .
                ' (Czech Republic)",
      "gender": "FEMALE"
    },
    {
      "code": "de-DE",' .
                '
      "name": "de-DE-Wavenet-B",
      "language": "German (Germany)",
      "ge' .
                'nder": "MALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-Wavenet-A' .
                '",
      "language": "Turkish (Turkey)",
      "gender": "FEMALE"
    },
    {
' .
                '      "code": "de-DE",
      "name": "de-DE-Wavenet-C",
      "language": "German ' .
                '(Germany)",
      "gender": "FEMALE"
    },
    {
      "code": "tr-TR",
      ' .
                '"name": "tr-TR-Wavenet-B",
      "language": "Turkish (Turkey)",
      "gender": "' .
                'MALE"
    },
    {
      "code": "cs-CZ",
      "name": "cs-CZ-Wavenet-A",
    ' .
                '  "language": "Czech (Czech Republic)",
      "gender": "FEMALE"
    },
    {
  ' .
                '    "code": "de-DE",
      "name": "de-DE-Wavenet-D",
      "language": "German (G' .
                'ermany)",
      "gender": "MALE"
    },
    {
      "code": "da-DK",
      "nam' .
                'e": "da-DK-Standard-A",
      "language": "Danish (Denmark)",
      "gender": "FEM' .
                'ALE"
    },
    {
      "code": "de-DE",
      "name": "de-DE-Wavenet-E",
     ' .
                ' "language": "German (Germany)",
      "gender": "MALE"
    },
    {
      "code' .
                '": "da-DK",
      "name": "da-DK-Standard-C",
      "language": "Danish (Denmark)"' .
                ',
      "gender": "MALE"
    },
    {
      "code": "de-DE",
      "name": "de-' .
                'DE-Wavenet-F",
      "language": "German (Germany)",
      "gender": "FEMALE"
   ' .
                ' },
    {
      "code": "da-DK",
      "name": "da-DK-Standard-D",
      "langua' .
                'ge": "Danish (Denmark)",
      "gender": "FEMALE"
    },
    {
      "code": "el' .
                '-GR",
      "name": "el-GR-Standard-A",
      "language": "Greek (Greece)",
     ' .
                ' "gender": "FEMALE"
    },
    {
      "code": "el-GR",
      "name": "el-GR-Wav' .
                'enet-A",
      "language": "Greek (Greece)",
      "gender": "FEMALE"
    },
   ' .
                ' {
      "code": "tr-TR",
      "name": "tr-TR-Wavenet-C",
      "language": "Tur' .
                'kish (Turkey)",
      "gender": "FEMALE"
    },
    {
      "code": "gu-IN",
  ' .
                '    "name": "gu-IN-Standard-A",
      "language": "Gujarati (India)",
      "gende' .
                'r": "FEMALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-Wavenet-D"' .
                ',
      "language": "Turkish (Turkey)",
      "gender": "FEMALE"
    },
    {
 ' .
                '     "code": "gu-IN",
      "name": "gu-IN-Standard-B",
      "language": "Gujarat' .
                'i (India)",
      "gender": "MALE"
    },
    {
      "code": "gu-IN",
      "n' .
                'ame": "gu-IN-Wavenet-A",
      "language": "Gujarati (India)",
      "gender": "FE' .
                'MALE"
    },
    {
      "code": "tr-TR",
      "name": "tr-TR-Wavenet-E",
    ' .
                '  "language": "Turkish (Turkey)",
      "gender": "MALE"
    },
    {
      "cod' .
                'e": "gu-IN",
      "name": "gu-IN-Wavenet-B",
      "language": "Gujarati (India)"' .
                ',
      "gender": "MALE"
    },
    {
      "code": "uk-UA",
      "name": "uk-' .
                'UA-Standard-A",
      "language": "Ukrainian (Ukraine)",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "hi-IN",
      "name": "hi-IN-Standard-A",
      "la' .
                'nguage": "Hindi (India)",
      "gender": "FEMALE"
    },
    {
      "code": "u' .
                'k-UA",
      "name": "uk-UA-Wavenet-A",
      "language": "Ukrainian (Ukraine)",
' .
                '      "gender": "FEMALE"
    },
    {
      "code": "hi-IN",
      "name": "hi-I' .
                'N-Standard-B",
      "language": "Hindi (India)",
      "gender": "MALE"
    },
' .
                '    {
      "code": "vi-VN",
      "name": "vi-VN-Standard-A",
      "language": ' .
                '"Vietnamese (Vietnam)",
      "gender": "FEMALE"
    },
    {
      "code": "vi-' .
                'VN",
      "name": "vi-VN-Standard-B",
      "language": "Vietnamese (Vietnam)",
' .
                '      "gender": "MALE"
    },
    {
      "code": "hi-IN",
      "name": "hi-IN-' .
                'Standard-C",
      "language": "Hindi (India)",
      "gender": "MALE"
    },
  ' .
                '  {
      "code": "vi-VN",
      "name": "vi-VN-Standard-C",
      "language": "V' .
                'ietnamese (Vietnam)",
      "gender": "FEMALE"
    },
    {
      "code": "hi-IN' .
                '",
      "name": "hi-IN-Standard-D",
      "language": "Hindi (India)",
      "ge' .
                'nder": "FEMALE"
    },
    {
      "code": "da-DK",
      "name": "da-DK-Standar' .
                'd-E",
      "language": "Danish (Denmark)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "hi-IN",
      "name": "hi-IN-Wavenet-A",
      "language": "Hind' .
                'i (India)",
      "gender": "FEMALE"
    },
    {
      "code": "da-DK",
      ' .
                '"name": "da-DK-Wavenet-A",
      "language": "Danish (Denmark)",
      "gender": "' .
                'FEMALE"
    },
    {
      "code": "hi-IN",
      "name": "hi-IN-Wavenet-B",
  ' .
                '    "language": "Hindi (India)",
      "gender": "MALE"
    },
    {
      "code' .
                '": "da-DK",
      "name": "da-DK-Wavenet-C",
      "language": "Danish (Denmark)",' .
                '
      "gender": "MALE"
    },
    {
      "code": "hi-IN",
      "name": "hi-I' .
                'N-Wavenet-C",
      "language": "Hindi (India)",
      "gender": "MALE"
    },
 ' .
                '   {
      "code": "da-DK",
      "name": "da-DK-Wavenet-D",
      "language": "D' .
                'anish (Denmark)",
      "gender": "FEMALE"
    },
    {
      "code": "hi-IN",
' .
                '      "name": "hi-IN-Wavenet-D",
      "language": "Hindi (India)",
      "gender"' .
                ': "FEMALE"
    },
    {
      "code": "da-DK",
      "name": "da-DK-Wavenet-E",' .
                '
      "language": "Danish (Denmark)",
      "gender": "FEMALE"
    },
    {
   ' .
                '   "code": "hu-HU",
      "name": "hu-HU-Standard-A",
      "language": "Hungarian' .
                ' (Hungary)",
      "gender": "FEMALE"
    },
    {
      "code": "nl-BE",
     ' .
                ' "name": "nl-BE-Standard-A",
      "language": "Dutch (Belgium)",
      "gender": ' .
                '"FEMALE"
    },
    {
      "code": "hu-HU",
      "name": "hu-HU-Wavenet-A",
 ' .
                '     "language": "Hungarian (Hungary)",
      "gender": "FEMALE"
    },
    {
  ' .
                '    "code": "vi-VN",
      "name": "vi-VN-Standard-D",
      "language": "Vietname' .
                'se (Vietnam)",
      "gender": "MALE"
    },
    {
      "code": "nl-BE",
     ' .
                ' "name": "nl-BE-Standard-B",
      "language": "Dutch (Belgium)",
      "gender": ' .
                '"MALE"
    },
    {
      "code": "is-IS",
      "name": "is-is-Standard-A",
  ' .
                '    "language": "Icelandic (Iceland)",
      "gender": "FEMALE"
    },
    {
   ' .
                '   "code": "vi-VN",
      "name": "vi-VN-Wavenet-A",
      "language": "Vietnamese' .
                ' (Vietnam)",
      "gender": "FEMALE"
    },
    {
      "code": "nl-BE",
     ' .
                ' "name": "nl-BE-Wavenet-A",
      "language": "Dutch (Belgium)",
      "gender": "' .
                'FEMALE"
    },
    {
      "code": "id-ID",
      "name": "id-ID-Standard-A",
 ' .
                '     "language": "Indonesian (Indonesia)",
      "gender": "FEMALE"
    },
    {' .
                '
      "code": "vi-VN",
      "name": "vi-VN-Wavenet-B",
      "language": "Vietna' .
                'mese (Vietnam)",
      "gender": "MALE"
    },
    {
      "code": "nl-BE",
   ' .
                '   "name": "nl-BE-Wavenet-B",
      "language": "Dutch (Belgium)",
      "gender":' .
                ' "MALE"
    },
    {
      "code": "id-ID",
      "name": "id-ID-Standard-B",
 ' .
                '     "language": "Indonesian (Indonesia)",
      "gender": "MALE"
    },
    {
 ' .
                '     "code": "nl-NL",
      "name": "nl-NL-Standard-A",
      "language": "Dutch (' .
                'Netherlands)",
      "gender": "FEMALE"
    },
    {
      "code": "vi-VN",
   ' .
                '   "name": "vi-VN-Wavenet-C",
      "language": "Vietnamese (Vietnam)",
      "gen' .
                'der": "FEMALE"
    },
    {
      "code": "id-ID",
      "name": "id-ID-Standard' .
                '-C",
      "language": "Indonesian (Indonesia)",
      "gender": "MALE"
    },
 ' .
                '   {
      "code": "nl-NL",
      "name": "nl-NL-Standard-B",
      "language": "' .
                'Dutch (Netherlands)",
      "gender": "MALE"
    },
    {
      "code": "id-ID",' .
                '
      "name": "id-ID-Standard-D",
      "language": "Indonesian (Indonesia)",
  ' .
                '    "gender": "FEMALE"
    },
    {
      "code": "nl-NL",
      "name": "nl-NL-' .
                'Standard-C",
      "language": "Dutch (Netherlands)",
      "gender": "MALE"
    ' .
                '},
    {
      "code": "id-ID",
      "name": "id-ID-Wavenet-A",
      "language' .
                '": "Indonesian (Indonesia)",
      "gender": "FEMALE"
    },
    {
      "code":' .
                ' "nl-NL",
      "name": "nl-NL-Standard-D",
      "language": "Dutch (Netherlands)' .
                '",
      "gender": "FEMALE"
    },
    {
      "code": "id-ID",
      "name": "' .
                'id-ID-Wavenet-B",
      "language": "Indonesian (Indonesia)",
      "gender": "MAL' .
                'E"
    },
    {
      "code": "nl-NL",
      "name": "nl-NL-Standard-E",
      ' .
                '"language": "Dutch (Netherlands)",
      "gender": "FEMALE"
    },
    {
      "' .
                'code": "nl-NL",
      "name": "nl-NL-Wavenet-A",
      "language": "Dutch (Netherl' .
                'ands)",
      "gender": "FEMALE"
    },
    {
      "code": "id-ID",
      "nam' .
                'e": "id-ID-Wavenet-C",
      "language": "Indonesian (Indonesia)",
      "gender":' .
                ' "MALE"
    },
    {
      "code": "vi-VN",
      "name": "vi-VN-Wavenet-D",
  ' .
                '    "language": "Vietnamese (Vietnam)",
      "gender": "MALE"
    },
    {
    ' .
                '  "code": "nl-NL",
      "name": "nl-NL-Wavenet-B",
      "language": "Dutch (Neth' .
                'erlands)",
      "gender": "MALE"
    },
    {
      "code": "id-ID",
      "na' .
                'me": "id-ID-Wavenet-D",
      "language": "Indonesian (Indonesia)",
      "gender"' .
                ': "FEMALE"
    },
    {
      "code": "nl-NL",
      "name": "nl-NL-Wavenet-C",' .
                '
      "language": "Dutch (Netherlands)",
      "gender": "MALE"
    },
    {
  ' .
                '    "code": "it-IT",
      "name": "it-IT-Standard-A",
      "language": "Italian ' .
                '(Italy)",
      "gender": "FEMALE"
    },
    {
      "code": "nl-NL",
      "n' .
                'ame": "nl-NL-Wavenet-D",
      "language": "Dutch (Netherlands)",
      "gender": ' .
                '"FEMALE"
    },
    {
      "code": "it-IT",
      "name": "it-IT-Standard-B",
' .
                '      "language": "Italian (Italy)",
      "gender": "FEMALE"
    },
    {
     ' .
                ' "code": "nl-NL",
      "name": "nl-NL-Wavenet-E",
      "language": "Dutch (Nethe' .
                'rlands)",
      "gender": "FEMALE"
    },
    {
      "code": "it-IT",
      "n' .
                'ame": "it-IT-Standard-C",
      "language": "Italian (Italy)",
      "gender": "MA' .
                'LE"
    },
    {
      "code": "en-AU",
      "name": "en-AU-Standard-A",
     ' .
                ' "language": "English (Australia)",
      "gender": "FEMALE"
    },
    {
      ' .
                '"code": "it-IT",
      "name": "it-IT-Standard-D",
      "language": "Italian (Ita' .
                'ly)",
      "gender": "MALE"
    },
    {
      "code": "en-AU",
      "name": ' .
                '"en-AU-Standard-B",
      "language": "English (Australia)",
      "gender": "MALE' .
                '"
    },
    {
      "code": "it-IT",
      "name": "it-IT-Wavenet-A",
      "l' .
                'anguage": "Italian (Italy)",
      "gender": "FEMALE"
    },
    {
      "code":' .
                ' "en-AU",
      "name": "en-AU-Standard-C",
      "language": "English (Australia)' .
                '",
      "gender": "FEMALE"
    },
    {
      "code": "en-AU",
      "name": "' .
                'en-AU-Standard-D",
      "language": "English (Australia)",
      "gender": "MALE"' .
                '
    },
    {
      "code": "it-IT",
      "name": "it-IT-Wavenet-B",
      "la' .
                'nguage": "Italian (Italy)",
      "gender": "FEMALE"
    },
    {
      "code": ' .
                '"en-AU",
      "name": "en-AU-Wavenet-A",
      "language": "English (Australia)",' .
                '
      "gender": "FEMALE"
    },
    {
      "code": "it-IT",
      "name": "it' .
                '-IT-Wavenet-C",
      "language": "Italian (Italy)",
      "gender": "MALE"
    }' .
                ',
    {
      "code": "en-AU",
      "name": "en-AU-Wavenet-B",
      "language"' .
                ': "English (Australia)",
      "gender": "MALE"
    },
    {
      "code": "it-I' .
                'T",
      "name": "it-IT-Wavenet-D",
      "language": "Italian (Italy)",
      "' .
                'gender": "MALE"
    },
    {
      "code": "en-AU",
      "name": "en-AU-Wavenet' .
                '-C",
      "language": "English (Australia)",
      "gender": "FEMALE"
    },
  ' .
                '  {
      "code": "ja-JP",
      "name": "ja-JP-Standard-A",
      "language": "J' .
                'apanese (Japan)",
      "gender": "FEMALE"
    },
    {
      "code": "en-AU",
' .
                '      "name": "en-AU-Wavenet-D",
      "language": "English (Australia)",
      "g' .
                'ender": "MALE"
    },
    {
      "code": "ja-JP",
      "name": "ja-JP-Standard' .
                '-B",
      "language": "Japanese (Japan)",
      "gender": "FEMALE"
    },
    {' .
                '
      "code": "en-IN",
      "name": "en-IN-Standard-A",
      "language": "Engl' .
                'ish (India)",
      "gender": "FEMALE"
    },
    {
      "code": "ja-JP",
    ' .
                '  "name": "ja-JP-Standard-C",
      "language": "Japanese (Japan)",
      "gender"' .
                ': "MALE"
    },
    {
      "code": "en-IN",
      "name": "en-IN-Standard-B",
' .
                '      "language": "English (India)",
      "gender": "MALE"
    },
    {
      "' .
                'code": "ja-JP",
      "name": "ja-JP-Standard-D",
      "language": "Japanese (Jap' .
                'an)",
      "gender": "MALE"
    },
    {
      "code": "en-IN",
      "name": ' .
                '"en-IN-Standard-C",
      "language": "English (India)",
      "gender": "MALE"
 ' .
                '   },
    {
      "code": "ja-JP",
      "name": "ja-JP-Wavenet-A",
      "langu' .
                'age": "Japanese (Japan)",
      "gender": "FEMALE"
    },
    {
      "code": "e' .
                'n-IN",
      "name": "en-IN-Standard-D",
      "language": "English (India)",
   ' .
                '   "gender": "FEMALE"
    },
    {
      "code": "ja-JP",
      "name": "ja-JP-W' .
                'avenet-B",
      "language": "Japanese (Japan)",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "en-IN",
      "name": "en-IN-Wavenet-A",
      "language": ' .
                '"English (India)",
      "gender": "FEMALE"
    },
    {
      "code": "ja-JP",' .
                '
      "name": "ja-JP-Wavenet-C",
      "language": "Japanese (Japan)",
      "gen' .
                'der": "MALE"
    },
    {
      "code": "en-IN",
      "name": "en-IN-Wavenet-B"' .
                ',
      "language": "English (India)",
      "gender": "MALE"
    },
    {
    ' .
                '  "code": "ja-JP",
      "name": "ja-JP-Wavenet-D",
      "language": "Japanese (J' .
                'apan)",
      "gender": "MALE"
    },
    {
      "code": "en-IN",
      "name"' .
                ': "en-IN-Wavenet-C",
      "language": "English (India)",
      "gender": "MALE"
' .
                '    },
    {
      "code": "kn-IN",
      "name": "kn-IN-Standard-A",
      "lan' .
                'guage": "Kannada (India)",
      "gender": "FEMALE"
    },
    {
      "code": "' .
                'en-IN",
      "name": "en-IN-Wavenet-D",
      "language": "English (India)",
   ' .
                '   "gender": "FEMALE"
    },
    {
      "code": "kn-IN",
      "name": "kn-IN-S' .
                'tandard-B",
      "language": "Kannada (India)",
      "gender": "MALE"
    },
 ' .
                '   {
      "code": "en-GB",
      "name": "en-GB-Standard-A",
      "language": "' .
                'English (UK)",
      "gender": "FEMALE"
    },
    {
      "code": "kn-IN",
   ' .
                '   "name": "kn-IN-Wavenet-A",
      "language": "Kannada (India)",
      "gender":' .
                ' "FEMALE"
    },
    {
      "code": "en-GB",
      "name": "en-GB-Standard-B",' .
                '
      "language": "English (UK)",
      "gender": "MALE"
    },
    {
      "co' .
                'de": "kn-IN",
      "name": "kn-IN-Wavenet-B",
      "language": "Kannada (India)"' .
                ',
      "gender": "MALE"
    },
    {
      "code": "en-GB",
      "name": "en-' .
                'GB-Standard-C",
      "language": "English (UK)",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "ko-KR",
      "name": "ko-KR-Standard-A",
      "language"' .
                ': "Korean (South Korea)",
      "gender": "FEMALE"
    },
    {
      "code": "e' .
                'n-GB",
      "name": "en-GB-Standard-D",
      "language": "English (UK)",
      ' .
                '"gender": "MALE"
    },
    {
      "code": "ko-KR",
      "name": "ko-KR-Standa' .
                'rd-B",
      "language": "Korean (South Korea)",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "en-GB",
      "name": "en-GB-Standard-F",
      "language":' .
                ' "English (UK)",
      "gender": "FEMALE"
    },
    {
      "code": "ko-KR",
 ' .
                '     "name": "ko-KR-Standard-C",
      "language": "Korean (South Korea)",
      "' .
                'gender": "MALE"
    },
    {
      "code": "ko-KR",
      "name": "ko-KR-Standar' .
                'd-D",
      "language": "Korean (South Korea)",
      "gender": "MALE"
    },
  ' .
                '  {
      "code": "ko-KR",
      "name": "ko-KR-Wavenet-A",
      "language": "Ko' .
                'rean (South Korea)",
      "gender": "FEMALE"
    },
    {
      "code": "en-GB"' .
                ',
      "name": "en-GB-Wavenet-A",
      "language": "English (UK)",
      "gende' .
                'r": "FEMALE"
    },
    {
      "code": "ko-KR",
      "name": "ko-KR-Wavenet-B"' .
                ',
      "language": "Korean (South Korea)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "en-GB",
      "name": "en-GB-Wavenet-B",
      "language": "Engl' .
                'ish (UK)",
      "gender": "MALE"
    },
    {
      "code": "en-GB",
      "na' .
                'me": "en-GB-Wavenet-C",
      "language": "English (UK)",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "ko-KR",
      "name": "ko-KR-Wavenet-C",
      "la' .
                'nguage": "Korean (South Korea)",
      "gender": "MALE"
    },
    {
      "code' .
                '": "en-GB",
      "name": "en-GB-Wavenet-D",
      "language": "English (UK)",
  ' .
                '    "gender": "MALE"
    },
    {
      "code": "en-GB",
      "name": "en-GB-Wa' .
                'venet-F",
      "language": "English (UK)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "ko-KR",
      "name": "ko-KR-Wavenet-D",
      "language": "Kore' .
                'an (South Korea)",
      "gender": "MALE"
    },
    {
      "code": "en-US",
 ' .
                '     "name": "en-US-Standard-A",
      "language": "English (US)",
      "gender":' .
                ' "MALE"
    },
    {
      "code": "lv-LV",
      "name": "lv-lv-Standard-A",
 ' .
                '     "language": "Latvian (Latvia)",
      "gender": "MALE"
    },
    {
      "' .
                'code": "en-US",
      "name": "en-US-Standard-B",
      "language": "English (US)"' .
                ',
      "gender": "MALE"
    },
    {
      "code": "ms-MY",
      "name": "ms-' .
                'MY-Standard-A",
      "language": "Malay (Malaysia)",
      "gender": "FEMALE"
  ' .
                '  },
    {
      "code": "en-US",
      "name": "en-US-Standard-C",
      "langu' .
                'age": "English (US)",
      "gender": "FEMALE"
    },
    {
      "code": "ms-MY' .
                '",
      "name": "ms-MY-Standard-B",
      "language": "Malay (Malaysia)",
      ' .
                '"gender": "MALE"
    },
    {
      "code": "en-US",
      "name": "en-US-Standa' .
                'rd-D",
      "language": "English (US)",
      "gender": "MALE"
    },
    {
  ' .
                '    "code": "ms-MY",
      "name": "ms-MY-Standard-C",
      "language": "Malay (M' .
                'alaysia)",
      "gender": "FEMALE"
    },
    {
      "code": "en-US",
      "' .
                'name": "en-US-Standard-E",
      "language": "English (US)",
      "gender": "FEMA' .
                'LE"
    },
    {
      "code": "ms-MY",
      "name": "ms-MY-Standard-D",
     ' .
                ' "language": "Malay (Malaysia)",
      "gender": "MALE"
    },
    {
      "code' .
                '": "en-US",
      "name": "en-US-Standard-F",
      "language": "English (US)",
 ' .
                '     "gender": "FEMALE"
    },
    {
      "code": "ms-MY",
      "name": "ms-MY' .
                '-Wavenet-A",
      "language": "Malay (Malaysia)",
      "gender": "FEMALE"
    }' .
                ',
    {
      "code": "en-US",
      "name": "en-US-Standard-G",
      "language' .
                '": "English (US)",
      "gender": "FEMALE"
    },
    {
      "code": "ms-MY",' .
                '
      "name": "ms-MY-Wavenet-B",
      "language": "Malay (Malaysia)",
      "gen' .
                'der": "MALE"
    },
    {
      "code": "ms-MY",
      "name": "ms-MY-Wavenet-C"' .
                ',
      "language": "Malay (Malaysia)",
      "gender": "FEMALE"
    },
    {
 ' .
                '     "code": "ms-MY",
      "name": "ms-MY-Wavenet-D",
      "language": "Malay (M' .
                'alaysia)",
      "gender": "MALE"
    },
    {
      "code": "ml-IN",
      "na' .
                'me": "ml-IN-Standard-A",
      "language": "Malayalam (India)",
      "gender": "F' .
                'EMALE"
    },
    {
      "code": "en-US",
      "name": "en-US-Standard-H",
  ' .
                '    "language": "English (US)",
      "gender": "FEMALE"
    },
    {
      "cod' .
                'e": "ml-IN",
      "name": "ml-IN-Standard-B",
      "language": "Malayalam (India' .
                ')",
      "gender": "MALE"
    },
    {
      "code": "en-US",
      "name": "e' .
                'n-US-Standard-I",
      "language": "English (US)",
      "gender": "MALE"
    },' .
                '
    {
      "code": "ml-IN",
      "name": "ml-IN-Wavenet-A",
      "language":' .
                ' "Malayalam (India)",
      "gender": "FEMALE"
    },
    {
      "code": "en-US' .
                '",
      "name": "en-US-Standard-J",
      "language": "English (US)",
      "gen' .
                'der": "MALE"
    },
    {
      "code": "en-US",
      "name": "en-US-Wavenet-A"' .
                ',
      "language": "English (US)",
      "gender": "MALE"
    },
    {
      "' .
                'code": "ml-IN",
      "name": "ml-IN-Wavenet-B",
      "language": "Malayalam (Ind' .
                'ia)",
      "gender": "MALE"
    },
    {
      "code": "en-US",
      "name": ' .
                '"en-US-Wavenet-B",
      "language": "English (US)",
      "gender": "MALE"
    }' .
                ',
    {
      "code": "cmn-CN",
      "name": "cmn-CN-Standard-A",
      "langua' .
                'ge": "Mandarin Chinese",
      "gender": "FEMALE"
    },
    {
      "code": "en' .
                '-US",
      "name": "en-US-Wavenet-C",
      "language": "English (US)",
      "g' .
                'ender": "FEMALE"
    },
    {
      "code": "cmn-CN",
      "name": "cmn-CN-Stan' .
                'dard-B",
      "language": "Mandarin Chinese",
      "gender": "MALE"
    },
   ' .
                ' {
      "code": "en-US",
      "name": "en-US-Wavenet-D",
      "language": "Eng' .
                'lish (US)",
      "gender": "MALE"
    },
    {
      "code": "cmn-CN",
      "' .
                'name": "cmn-CN-Standard-C",
      "language": "Mandarin Chinese",
      "gender": ' .
                '"MALE"
    },
    {
      "code": "en-US",
      "name": "en-US-Wavenet-E",
   ' .
                '   "language": "English (US)",
      "gender": "FEMALE"
    },
    {
      "code' .
                '": "cmn-CN",
      "name": "cmn-CN-Standard-D",
      "language": "Mandarin Chines' .
                'e",
      "gender": "FEMALE"
    },
    {
      "code": "en-US",
      "name": ' .
                '"en-US-Wavenet-F",
      "language": "English (US)",
      "gender": "FEMALE"
   ' .
                ' },
    {
      "code": "cmn-CN",
      "name": "cmn-CN-Wavenet-A",
      "langu' .
                'age": "Mandarin Chinese",
      "gender": "FEMALE"
    },
    {
      "code": "e' .
                'n-US",
      "name": "en-US-Wavenet-G",
      "language": "English (US)",
      "' .
                'gender": "FEMALE"
    },
    {
      "code": "cmn-CN",
      "name": "cmn-CN-Wav' .
                'enet-B",
      "language": "Mandarin Chinese",
      "gender": "MALE"
    },
   ' .
                ' {
      "code": "cmn-CN",
      "name": "cmn-CN-Wavenet-C",
      "language": "M' .
                'andarin Chinese",
      "gender": "MALE"
    },
    {
      "code": "cmn-CN",
 ' .
                '     "name": "cmn-CN-Wavenet-D",
      "language": "Mandarin Chinese",
      "gend' .
                'er": "FEMALE"
    },
    {
      "code": "en-US",
      "name": "en-US-Wavenet-H' .
                '",
      "language": "English (US)",
      "gender": "FEMALE"
    },
    {
    ' .
                '  "code": "cmn-TW",
      "name": "cmn-TW-Standard-A",
      "language": "Mandarin' .
                ' Chinese",
      "gender": "FEMALE"
    },
    {
      "code": "en-US",
      "' .
                'name": "en-US-Wavenet-I",
      "language": "English (US)",
      "gender": "MALE"' .
                '
    },
    {
      "code": "cmn-TW",
      "name": "cmn-TW-Standard-B",
      ' .
                '"language": "Mandarin Chinese",
      "gender": "MALE"
    },
    {
      "code"' .
                ': "en-US",
      "name": "en-US-Wavenet-J",
      "language": "English (US)",
   ' .
                '   "gender": "MALE"
    },
    {
      "code": "cmn-TW",
      "name": "cmn-TW-S' .
                'tandard-C",
      "language": "Mandarin Chinese",
      "gender": "MALE"
    },
' .
                '    {
      "code": "cmn-TW",
      "name": "cmn-TW-Wavenet-A",
      "language":' .
                ' "Mandarin Chinese",
      "gender": "FEMALE"
    },
    {
      "code": "fil-PH' .
                '",
      "name": "fil-PH-Standard-A",
      "language": "Filipino (Philippines)",' .
                '
      "gender": "FEMALE"
    },
    {
      "code": "cmn-TW",
      "name": "cm' .
                'n-TW-Wavenet-B",
      "language": "Mandarin Chinese",
      "gender": "MALE"
   ' .
                ' },
    {
      "code": "fil-PH",
      "name": "fil-PH-Standard-B",
      "lang' .
                'uage": "Filipino (Philippines)",
      "gender": "FEMALE"
    },
    {
      "co' .
                'de": "cmn-TW",
      "name": "cmn-TW-Wavenet-C",
      "language": "Mandarin Chine' .
                'se",
      "gender": "MALE"
    },
    {
      "code": "fil-PH",
      "name": ' .
                '"fil-PH-Standard-C",
      "language": "Filipino (Philippines)",
      "gender": "' .
                'MALE"
    },
    {
      "code": "nb-NO",
      "name": "nb-NO-Standard-A",
   ' .
                '   "language": "Norwegian (Norway)",
      "gender": "FEMALE"
    },
    {
     ' .
                ' "code": "fil-PH",
      "name": "fil-PH-Standard-D",
      "language": "Filipino ' .
                '(Philippines)",
      "gender": "MALE"
    },
    {
      "code": "fil-PH",
   ' .
                '   "name": "fil-PH-Wavenet-A",
      "language": "Filipino (Philippines)",
      "' .
                'gender": "FEMALE"
    },
    {
      "code": "nb-NO",
      "name": "nb-NO-Stand' .
                'ard-B",
      "language": "Norwegian (Norway)",
      "gender": "MALE"
    },
  ' .
                '  {
      "code": "nb-NO",
      "name": "nb-NO-Standard-C",
      "language": "N' .
                'orwegian (Norway)",
      "gender": "FEMALE"
    },
    {
      "code": "nb-NO",' .
                '
      "name": "nb-NO-Standard-D",
      "language": "Norwegian (Norway)",
      ' .
                '"gender": "MALE"
    },
    {
      "code": "nb-NO",
      "name": "nb-NO-Wavene' .
                't-A",
      "language": "Norwegian (Norway)",
      "gender": "FEMALE"
    },
  ' .
                '  {
      "code": "nb-NO",
      "name": "nb-NO-Wavenet-B",
      "language": "No' .
                'rwegian (Norway)",
      "gender": "MALE"
    },
    {
      "code": "nb-NO",
 ' .
                '     "name": "nb-NO-Wavenet-C",
      "language": "Norwegian (Norway)",
      "gen' .
                'der": "FEMALE"
    },
    {
      "code": "nb-NO",
      "name": "nb-NO-Wavenet-' .
                'D",
      "language": "Norwegian (Norway)",
      "gender": "MALE"
    },
    {' .
                '
      "code": "nb-NO",
      "name": "nb-no-Standard-E",
      "language": "Norwe' .
                'gian (Norway)",
      "gender": "FEMALE"
    },
    {
      "code": "nb-NO",
  ' .
                '    "name": "nb-no-Standard-E",
      "language": "Norwegian (Norway)",
      "gen' .
                'der": "FEMALE"
    },
    {
      "code": "nb-NO",
      "name": "nb-no-Wavenet-' .
                'E",
      "language": "Norwegian (Norway)",
      "gender": "FEMALE"
    },
    ' .
                '{
      "code": "pl-PL",
      "name": "pl-PL-Standard-A",
      "language": "Pol' .
                'ish (Poland)",
      "gender": "FEMALE"
    },
    {
      "code": "pl-PL",
   ' .
                '   "name": "pl-PL-Standard-B",
      "language": "Polish (Poland)",
      "gender"' .
                ': "MALE"
    },
    {
      "code": "pl-PL",
      "name": "pl-PL-Standard-C",
' .
                '      "language": "Polish (Poland)",
      "gender": "MALE"
    },
    {
      "' .
                'code": "pl-PL",
      "name": "pl-PL-Standard-D",
      "language": "Polish (Polan' .
                'd)",
      "gender": "FEMALE"
    },
    {
      "code": "pl-PL",
      "name":' .
                ' "pl-PL-Standard-E",
      "language": "Polish (Poland)",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "pl-PL",
      "name": "pl-PL-Wavenet-A",
      "la' .
                'nguage": "Polish (Poland)",
      "gender": "FEMALE"
    },
    {
      "code": ' .
                '"pl-PL",
      "name": "pl-PL-Wavenet-B",
      "language": "Polish (Poland)",
  ' .
                '    "gender": "MALE"
    },
    {
      "code": "pl-PL",
      "name": "pl-PL-Wa' .
                'venet-C",
      "language": "Polish (Poland)",
      "gender": "MALE"
    },
   ' .
                ' {
      "code": "pl-PL",
      "name": "pl-PL-Wavenet-D",
      "language": "Pol' .
                'ish (Poland)",
      "gender": "FEMALE"
    },
    {
      "code": "pl-PL",
   ' .
                '   "name": "pl-PL-Wavenet-E",
      "language": "Polish (Poland)",
      "gender":' .
                ' "FEMALE"
    },
    {
      "code": "pt-BR",
      "name": "pt-BR-Standard-A",' .
                '
      "language": "Portuguese (Brazil)",
      "gender": "FEMALE"
    },
    {
' .
                '      "code": "pt-BR",
      "name": "pt-BR-Standard-B",
      "language": "Portug' .
                'uese (Brazil)",
      "gender": "MALE"
    },
    {
      "code": "pt-BR",
    ' .
                '  "name": "pt-BR-Wavenet-A",
      "language": "Portuguese (Brazil)",
      "gende' .
                'r": "FEMALE"
    },
    {
      "code": "pt-BR",
      "name": "pt-BR-Wavenet-B"' .
                ',
      "language": "Portuguese (Brazil)",
      "gender": "MALE"
    },
    {
' .
                '      "code": "pt-PT",
      "name": "pt-PT-Standard-A",
      "language": "Portug' .
                'uese (Portugal)",
      "gender": "FEMALE"
    },
    {
      "code": "pt-PT",
' .
                '      "name": "pt-PT-Standard-B",
      "language": "Portuguese (Portugal)",
     ' .
                ' "gender": "MALE"
    },
    {
      "code": "pt-PT",
      "name": "pt-PT-Stand' .
                'ard-C",
      "language": "Portuguese (Portugal)",
      "gender": "MALE"
    },' .
                '
    {
      "code": "pt-PT",
      "name": "pt-PT-Standard-D",
      "language":' .
                ' "Portuguese (Portugal)",
      "gender": "FEMALE"
    },
    {
      "code": "p' .
                't-PT",
      "name": "pt-PT-Wavenet-A",
      "language": "Portuguese (Portugal)",' .
                '
      "gender": "FEMALE"
    },
    {
      "code": "pt-PT",
      "name": "pt' .
                '-PT-Wavenet-B",
      "language": "Portuguese (Portugal)",
      "gender": "MALE"' .
                '
    },
    {
      "code": "pt-PT",
      "name": "pt-PT-Wavenet-C",
      "lan' .
                'guage": "Portuguese (Portugal)",
      "gender": "MALE"
    },
    {
      "code' .
                '": "pt-PT",
      "name": "pt-PT-Wavenet-D",
      "language": "Portuguese (Portug' .
                'al)",
      "gender": "FEMALE"
    },
    {
      "code": "pa-IN",
      "name"' .
                ': "pa-IN-Standard-A",
      "language": "Punjabi (India)",
      "gender": "FEMALE' .
                '"
    },
    {
      "code": "pa-IN",
      "name": "pa-IN-Standard-B",
      "' .
                'language": "Punjabi (India)",
      "gender": "MALE"
    },
    {
      "code": ' .
                '"pa-IN",
      "name": "pa-IN-Standard-C",
      "language": "Punjabi (India)",
 ' .
                '     "gender": "FEMALE"
    },
    {
      "code": "pa-IN",
      "name": "pa-IN' .
                '-Standard-D",
      "language": "Punjabi (India)",
      "gender": "MALE"
    },' .
                '
    {
      "code": "pa-IN",
      "name": "pa-IN-Wavenet-A",
      "language": ' .
                '"Punjabi (India)",
      "gender": "FEMALE"
    },
    {
      "code": "pa-IN",' .
                '
      "name": "pa-IN-Wavenet-B",
      "language": "Punjabi (India)",
      "gend' .
                'er": "MALE"
    },
    {
      "code": "pa-IN",
      "name": "pa-IN-Wavenet-C",' .
                '
      "language": "Punjabi (India)",
      "gender": "FEMALE"
    },
    {
   ' .
                '   "code": "pa-IN",
      "name": "pa-IN-Wavenet-D",
      "language": "Punjabi (I' .
                'ndia)",
      "gender": "MALE"
    },
    {
      "code": "ro-RO",
      "name"' .
                ': "ro-RO-Standard-A",
      "language": "Romanian (Romania)",
      "gender": "FEM' .
                'ALE"
    },
    {
      "code": "ro-RO",
      "name": "ro-RO-Wavenet-A",
     ' .
                ' "language": "Romanian (Romania)",
      "gender": "FEMALE"
    },
    {
      "' .
                'code": "ru-RU",
      "name": "ru-RU-Standard-A",
      "language": "Russian (Russ' .
                'ia)",
      "gender": "FEMALE"
    },
    {
      "code": "ru-RU",
      "name"' .
                ': "ru-RU-Standard-B",
      "language": "Russian (Russia)",
      "gender": "MALE"' .
                '
    },
    {
      "code": "ru-RU",
      "name": "ru-RU-Standard-C",
      "l' .
                'anguage": "Russian (Russia)",
      "gender": "FEMALE"
    },
    {
      "code"' .
                ': "ru-RU",
      "name": "ru-RU-Standard-D",
      "language": "Russian (Russia)",' .
                '
      "gender": "MALE"
    },
    {
      "code": "ru-RU",
      "name": "ru-R' .
                'U-Standard-E",
      "language": "Russian (Russia)",
      "gender": "FEMALE"
   ' .
                ' },
    {
      "code": "ru-RU",
      "name": "ru-RU-Wavenet-A",
      "languag' .
                'e": "Russian (Russia)",
      "gender": "FEMALE"
    },
    {
      "code": "ru-' .
                'RU",
      "name": "ru-RU-Wavenet-B",
      "language": "Russian (Russia)",
     ' .
                ' "gender": "MALE"
    },
    {
      "code": "ru-RU",
      "name": "ru-RU-Waven' .
                'et-C",
      "language": "Russian (Russia)",
      "gender": "FEMALE"
    },
   ' .
                ' {
      "code": "ru-RU",
      "name": "ru-RU-Wavenet-D",
      "language": "Rus' .
                'sian (Russia)",
      "gender": "MALE"
    },
    {
      "code": "ru-RU",
    ' .
                '  "name": "ru-RU-Wavenet-E",
      "language": "Russian (Russia)",
      "gender":' .
                ' "FEMALE"
    },
    {
      "code": "sr-RS",
      "name": "sr-rs-Standard-A",' .
                '
      "language": "Serbian (Cyrillic)",
      "gender": "FEMALE"
    },
    {
 ' .
                '     "code": "sk-SK",
      "name": "sk-SK-Standard-A",
      "language": "Slovak ' .
                '(Slovakia)",
      "gender": "FEMALE"
    },
    {
      "code": "sk-SK",
     ' .
                ' "name": "sk-SK-Wavenet-A",
      "language": "Slovak (Slovakia)",
      "gender":' .
                ' "FEMALE"
    },
    {
      "code": "es-ES",
      "name": "es-ES-Standard-A",' .
                '
      "language": "Spanish (Spain)",
      "gender": "FEMALE"
    },
    {
    ' .
                '  "code": "es-ES",
      "name": "es-ES-Standard-B",
      "language": "Spanish (S' .
                'pain)",
      "gender": "MALE"
    },
    {
      "code": "es-ES",
      "name"' .
                ': "es-ES-Standard-C",
      "language": "Spanish (Spain)",
      "gender": "FEMALE' .
                '"
    },
    {
      "code": "es-ES",
      "name": "es-ES-Standard-D",
      "' .
                'language": "Spanish (Spain)",
      "gender": "FEMALE"
    },
    {
      "code"' .
                ': "es-ES",
      "name": "es-ES-Wavenet-B",
      "language": "Spanish (Spain)",
' .
                '      "gender": "MALE"
    },
    {
      "code": "es-ES",
      "name": "es-ES-' .
                'Wavenet-C",
      "language": "Spanish (Spain)",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "es-ES",
      "name": "es-ES-Wavenet-D",
      "language": ' .
                '"Spanish (Spain)",
      "gender": "FEMALE"
    },
    {
      "code": "es-US",' .
                '
      "name": "es-US-Standard-A",
      "language": "Spanish (US)",
      "gender' .
                '": "FEMALE"
    },
    {
      "code": "es-US",
      "name": "es-US-Standard-B"' .
                ',
      "language": "Spanish (US)",
      "gender": "MALE"
    },
    {
      "' .
                'code": "es-US",
      "name": "es-US-Standard-C",
      "language": "Spanish (US)"' .
                ',
      "gender": "MALE"
    },
    {
      "code": "es-US",
      "name": "es-' .
                'US-Wavenet-A",
      "language": "Spanish (US)",
      "gender": "FEMALE"
    },' .
                '
    {
      "code": "es-US",
      "name": "es-US-Wavenet-B",
      "language": ' .
                '"Spanish (US)",
      "gender": "MALE"
    },
    {
      "code": "es-US",
    ' .
                '  "name": "es-US-Wavenet-C",
      "language": "Spanish (US)",
      "gender": "MA' .
                'LE"
    },
    {
      "code": "sv-SE",
      "name": "sv-SE-Standard-A",
     ' .
                ' "language": "Swedish (Sweden)",
      "gender": "FEMALE"
    },
    {
      "co' .
                'de": "sv-SE",
      "name": "sv-SE-Standard-B",
      "language": "Swedish (Sweden' .
                ')",
      "gender": "FEMALE"
    },
    {
      "code": "sv-SE",
      "name": ' .
                '"sv-SE-Standard-C",
      "language": "Swedish (Sweden)",
      "gender": "FEMALE"' .
                '
    },
    {
      "code": "sv-SE",
      "name": "sv-SE-Standard-D",
      "l' .
                'anguage": "Swedish (Sweden)",
      "gender": "MALE"
    },
    {
      "code": ' .
                '"sv-SE",
      "name": "sv-SE-Standard-E",
      "language": "Swedish (Sweden)",
' .
                '      "gender": "MALE"
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

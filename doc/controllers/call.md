# Call

```php
$callController = $client->getCallController();
```

## Class Name

`CallController`


# Blast

SUPPORTED **LANGUAGE** :

\* id-ID  
\* en-US

**GENDER** :

\* MALE  
\* FEMALE

```php
function blast(Blastrequest $body): Blast
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`Blastrequest`](../../doc/models/blastrequest.md) | Body, Required | - |

## Response Type

[`Blast`](../../doc/models/blast.md)

## Example Usage

```php
$body_destination = '[DESTINATION]';
$body_textToSpeech = '[TEXT_TO_SPEECH]';
$body_language = '[LANGUAGE]';
$body_gender = '[GENDER]';
$body_repeat = 2;
$body_externalId = '[EXTERNAL_ID]';
$body_callbackUrl = 'https://eobub4g7qinc475.m.pipedream.net';
$body = new Models\Blastrequest(
    $body_destination,
    $body_textToSpeech,
    $body_language,
    $body_gender,
    $body_repeat,
    $body_externalId,
    $body_callbackUrl
);

$result = $callController->blast($body);
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "rcode": {
    "transaction_id": "489EF4175D9E35DDAEFD74839DB9558D",
    "callback_key": "25c1e6ec24db6cf8bcff665761e1c985",
    "destination": "62127867676",
    "text_to_speech": "Hai.... Selamat datang saudara-saudaraku, anda adalah pelanggan utama hari ini, selamat yaaa gaeees!",
    "language": "id-ID",
    "gender": "FEMALE",
    "VoiceRepeat": "2",
    "external_id": "93894893483984938",
    "callback_url": "http"
  }
}
```


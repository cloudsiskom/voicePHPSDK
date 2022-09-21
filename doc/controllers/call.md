# Call

```php
$callController = $client->getCallController();
```

## Class Name

`CallController`


# Blast

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
$body_destination = '62127867676';
$body_textToSpeech = 'Hai.... Selamat datang saudara-saudaraku, anda adalah pelanggan utama hari ini, selamat yaaa gaeees!';
$body_language = 'id-ID';
$body_gender = 'FEMALE';
$body_repeat = '2';
$body_externalId = '93894893483984938';
$body_callbackUrl = 'http';
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


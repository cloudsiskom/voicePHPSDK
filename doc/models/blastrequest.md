
# Blastrequest

## Structure

`Blastrequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destination` | `string` | Required | - | getDestination(): string | setDestination(string destination): void |
| `textToSpeech` | `string` | Required | - | getTextToSpeech(): string | setTextToSpeech(string textToSpeech): void |
| `language` | `string` | Required | - | getLanguage(): string | setLanguage(string language): void |
| `gender` | `string` | Required | - | getGender(): string | setGender(string gender): void |
| `repeat` | `string` | Required | - | getRepeat(): string | setRepeat(string repeat): void |
| `externalId` | `string` | Required | - | getExternalId(): string | setExternalId(string externalId): void |
| `callbackUrl` | `string` | Required | - | getCallbackUrl(): string | setCallbackUrl(string callbackUrl): void |

## Example (as JSON)

```json
{
  "destination": "62127867676",
  "text_to_speech": "Hai.... Selamat datang saudara-saudaraku, anda adalah pelanggan utama hari ini, selamat yaaa gaeees!",
  "language": "id-ID",
  "gender": "FEMALE",
  "repeat": "2",
  "external_id": "93894893483984938",
  "callback_url": "http"
}
```


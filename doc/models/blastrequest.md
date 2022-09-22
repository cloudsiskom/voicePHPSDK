
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
| `repeat` | `int` | Required | - | getRepeat(): int | setRepeat(int repeat): void |
| `externalId` | `string` | Required | - | getExternalId(): string | setExternalId(string externalId): void |
| `callbackUrl` | `string` | Required | - | getCallbackUrl(): string | setCallbackUrl(string callbackUrl): void |

## Example (as JSON)

```json
{
  "destination": "[DESTINATION]",
  "text_to_speech": "[TEXT_TO_SPEECH]",
  "language": "[LANGUAGE]",
  "gender": "[GENDER]",
  "repeat": 2,
  "external_id": "[EXTERNAL_ID]",
  "callback_url": "https://eobub4g7qinc475.m.pipedream.net"
}
```


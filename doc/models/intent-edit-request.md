
# Intent Edit Request

## Structure

`IntentEditRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `aiName` | `string` | Required | - | getAiName(): string | setAiName(string aiName): void |
| `displayName` | `string` | Required | - | getDisplayName(): string | setDisplayName(string displayName): void |
| `trainingPhrases` | `string` | Required | - | getTrainingPhrases(): string | setTrainingPhrases(string trainingPhrases): void |
| `messageTexts` | `string` | Required | - | getMessageTexts(): string | setMessageTexts(string messageTexts): void |

## Example (as JSON)

```json
{
  "ai_name": "BANK_BKKN",
  "display_name": "kamu siapa yang buat",
  "training_phrases": "hi kamu siapa yang buat;siapa yang buat;programmermu siapa;apa yang kamu lakukan",
  "message_texts": "Aku lahir dari batu !;mau tauuu aja"
}
```



# Intent Query Request

## Structure

`IntentQueryRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `aiName` | `string` | Required | - | getAiName(): string | setAiName(string aiName): void |
| `trainingPhrases` | `string` | Required | - | getTrainingPhrases(): string | setTrainingPhrases(string trainingPhrases): void |

## Example (as JSON)

```json
{
  "ai_name": "BANK_BKKN",
  "training_phrases": "WELCOME"
}
```


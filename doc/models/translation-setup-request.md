
# Translation Setup Request

## Structure

`TranslationSetupRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fromNumber` | `string` | Required | - | getFromNumber(): string | setFromNumber(string fromNumber): void |
| `callerDidgateway` | `string` | Required | - | getCallerDidgateway(): string | setCallerDidgateway(string callerDidgateway): void |
| `calledDidgateway` | `string` | Required | - | getCalledDidgateway(): string | setCalledDidgateway(string calledDidgateway): void |
| `destinationNumber` | `string` | Required | - | getDestinationNumber(): string | setDestinationNumber(string destinationNumber): void |
| `externalId` | `string` | Required | - | getExternalId(): string | setExternalId(string externalId): void |

## Example (as JSON)

```json
{
  "from_number": "62811949736",
  "caller_didgateway": "6285757920463",
  "called_didgateway": "6285757920463",
  "destination_number": "6285161422932",
  "external_id": "1000"
}
```


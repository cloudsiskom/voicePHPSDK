
# Route Incoming Request

## Structure

`RouteIncomingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `did` | `string` | Required | - | getDid(): string | setDid(string did): void |
| `destination` | `string` | Required | - | getDestination(): string | setDestination(string destination): void |
| `destinationDetail` | `string` | Required | - | getDestinationDetail(): string | setDestinationDetail(string destinationDetail): void |

## Example (as JSON)

```json
{
  "did": "6285757920463",
  "destination": "TRUNK",
  "destination_detail": "CVAI"
}
```


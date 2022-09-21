
# Queue New

## Structure

`QueueNew`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `response` | `bool` | Required | - | getResponse(): bool | setResponse(bool response): void |
| `data` | [`Data6`](../../doc/models/data-6.md) | Required | - | getData(): Data6 | setData(Data6 data): void |

## Example (as JSON)

```json
{
  "response": true,
  "data": {
    "queue_name": "queue-151-3",
    "ring_strategy": "ringall"
  }
}
```


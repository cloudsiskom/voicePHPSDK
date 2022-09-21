
# Queue Remove Agent Request

## Structure

`QueueRemoveAgentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `queueName` | `string` | Required | - | getQueueName(): string | setQueueName(string queueName): void |
| `agents` | `string` | Required | - | getAgents(): string | setAgents(string agents): void |
| `agentType` | `string` | Required | - | getAgentType(): string | setAgentType(string agentType): void |

## Example (as JSON)

```json
{
  "queue_name": "96YSK-1",
  "agents": "961000001",
  "agent_type": "Local"
}
```


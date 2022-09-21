
# Agent Login Request

## Structure

`AgentLoginRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `actionType` | `string` | Required | - | getActionType(): string | setActionType(string actionType): void |
| `agentCode` | `string` | Required | - | getAgentCode(): string | setAgentCode(string agentCode): void |
| `extension` | `string` | Required | - | getExtension(): string | setExtension(string extension): void |
| `agentPassword` | `string` | Required | - | getAgentPassword(): string | setAgentPassword(string agentPassword): void |

## Example (as JSON)

```json
{
  "action_type": "login",
  "agent_code": "10002",
  "extension": "8210000000001",
  "agent_password": "4321"
}
```


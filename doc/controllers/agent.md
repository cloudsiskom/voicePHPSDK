# Agent

```php
$agentController = $client->getAgentController();
```

## Class Name

`AgentController`

## Methods

* [Agent New](../../doc/controllers/agent.md#agent-new)
* [Agent Delete](../../doc/controllers/agent.md#agent-delete)
* [Agent List](../../doc/controllers/agent.md#agent-list)
* [Agent Login](../../doc/controllers/agent.md#agent-login)


# Agent New

```php
function agentNew(AgentNewRequest $body): AgentNew
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AgentNewRequest`](../../doc/models/agent-new-request.md) | Body, Required | - |

## Response Type

[`AgentNew`](../../doc/models/agent-new.md)

## Example Usage

```php
$body_action = 'new';
$body_agentCode = '10002';
$body_agentName = 'queue-152';
$body_agentPassword = '4321';
$body = new Models\AgentNewRequest(
    $body_action,
    $body_agentCode,
    $body_agentName,
    $body_agentPassword
);

$result = $agentController->agentNew($body);
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "data": {
    "action": "new",
    "agent_code": "10002",
    "agent_name": "queue-152",
    "agent_password": "4321"
  }
}
```


# Agent Delete

```php
function agentDelete(AgentDeleteRequest $body): AgentDelete
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AgentDeleteRequest`](../../doc/models/agent-delete-request.md) | Body, Required | - |

## Response Type

[`AgentDelete`](../../doc/models/agent-delete.md)

## Example Usage

```php
$body_agentCode = '10002';
$body = new Models\AgentDeleteRequest(
    $body_agentCode
);

$result = $agentController->agentDelete($body);
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "data": {
    "agent_code": "10002"
  }
}
```


# Agent List

```php
function agentList(): AgentList
```

## Response Type

[`AgentList`](../../doc/models/agent-list.md)

## Example Usage

```php
$result = $agentController->agentList();
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "data": [
    {
      "id": 34,
      "customer_code": "YASS",
      "agent_code": 9610002,
      "agent_name": "queue-152",
      "require_password": 1,
      "agent_password": 4321,
      "lastlogin": 0,
      "isActive": 1,
      "isLogin": 0,
      "login_channel": null,
      "login_extension": null,
      "login_uniqueid": null
    }
  ]
}
```


# Agent Login

```php
function agentLogin(AgentLoginRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`AgentLoginRequest`](../../doc/models/agent-login-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_actionType = 'login';
$body_agentCode = '10002';
$body_extension = '8210000000001';
$body_agentPassword = '4321';
$body = new Models\AgentLoginRequest(
    $body_actionType,
    $body_agentCode,
    $body_extension,
    $body_agentPassword
);

$agentController->agentLogin($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`AgentLoginException`](../../doc/models/agent-login-exception.md) |


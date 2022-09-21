# Queue

```php
$queueController = $client->getQueueController();
```

## Class Name

`QueueController`

## Methods

* [Queue New](../../doc/controllers/queue.md#queue-new)
* [Queue Delete](../../doc/controllers/queue.md#queue-delete)
* [Queue List](../../doc/controllers/queue.md#queue-list)
* [Queue Add Agent](../../doc/controllers/queue.md#queue-add-agent)
* [Queue Remove Agent](../../doc/controllers/queue.md#queue-remove-agent)


# Queue New

```php
function queueNew(QueueNewRequest $body): QueueNew
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QueueNewRequest`](../../doc/models/queue-new-request.md) | Body, Required | - |

## Response Type

[`QueueNew`](../../doc/models/queue-new.md)

## Example Usage

```php
$body_queueName = 'queue-151-3';
$body_ringStrategy = 'ringall';
$body = new Models\QueueNewRequest(
    $body_queueName,
    $body_ringStrategy
);

$result = $queueController->queueNew($body);
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "data": {
    "queue_name": "queue-151-3",
    "ring_strategy": "ringall"
  }
}
```


# Queue Delete

```php
function queueDelete(QueueDeleteRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QueueDeleteRequest`](../../doc/models/queue-delete-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_queueName = 'queue-151-3';
$body = new Models\QueueDeleteRequest(
    $body_queueName
);

$queueController->queueDelete($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`QueueDeleteException`](../../doc/models/queue-delete-exception.md) |


# Queue List

```php
function queueList(): QueueList
```

## Response Type

[`QueueList`](../../doc/models/queue-list.md)

## Example Usage

```php
$result = $queueController->queueList();
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "data": [
    {
      "queue_id": 35,
      "queue_name": "96789665",
      "musiclass": "default",
      "strategy": "ringall",
      "members": [
        {
          "member": "SIP/968976567"
        }
      ]
    },
    {
      "queue_id": 36,
      "queue_name": "96queue-151-3",
      "musiclass": "default",
      "strategy": "ringall",
      "members": []
    }
  ]
}
```


# Queue Add Agent

```php
function queueAddAgent(QueueAddAgentRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QueueAddAgentRequest`](../../doc/models/queue-add-agent-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_queueName = '';
$body_agents = '';
$body_agentType = '';
$body = new Models\QueueAddAgentRequest(
    $body_queueName,
    $body_agents,
    $body_agentType
);

$queueController->queueAddAgent($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Queue Remove Agent

```php
function queueRemoveAgent(QueueRemoveAgentRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`QueueRemoveAgentRequest`](../../doc/models/queue-remove-agent-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_queueName = '96YSK-1';
$body_agents = '961000001';
$body_agentType = 'Local';
$body = new Models\QueueRemoveAgentRequest(
    $body_queueName,
    $body_agents,
    $body_agentType
);

$queueController->queueRemoveAgent($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`QueueRemoveAgentException`](../../doc/models/queue-remove-agent-exception.md) |


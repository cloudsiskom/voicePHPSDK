# Route

```php
$routeController = $client->getRouteController();
```

## Class Name

`RouteController`

## Methods

* [Route Incoming](../../doc/controllers/route.md#route-incoming)
* [Route Outgoing](../../doc/controllers/route.md#route-outgoing)
* [Route List](../../doc/controllers/route.md#route-list)


# Route Incoming

```php
function routeIncoming(RouteIncomingRequest $body): RouteIncoming
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RouteIncomingRequest`](../../doc/models/route-incoming-request.md) | Body, Required | - |

## Response Type

[`RouteIncoming`](../../doc/models/route-incoming.md)

## Example Usage

```php
$body_did = '6285757920463';
$body_destination = 'TRUNK';
$body_destinationDetail = 'CVAI';
$body = new Models\RouteIncomingRequest(
    $body_did,
    $body_destination,
    $body_destinationDetail
);

$result = $routeController->routeIncoming($body);
```

## Example Response *(as JSON)*

```json
{
  "reponse": true,
  "did": "6285757920463",
  "destination": "TRUNK",
  "destination_detail": "CVAI"
}
```


# Route Outgoing

```php
function routeOutgoing(RouteOutgoingRequest $body): RouteOutgoing
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`RouteOutgoingRequest`](../../doc/models/route-outgoing-request.md) | Body, Required | - |

## Response Type

[`RouteOutgoing`](../../doc/models/route-outgoing.md)

## Example Usage

```php
$body_routeName = 'test';
$body_device = '8210000000001';
$body_routeTo = 'RANDOM';
$body_routeDetail = 'RDM1';
$body_routePrefix = '198767';
$body = new Models\RouteOutgoingRequest(
    $body_routeName,
    $body_device,
    $body_routeTo,
    $body_routeDetail,
    $body_routePrefix
);

$result = $routeController->routeOutgoing($body);
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "device": "8210000000001",
  "route_to": "RANDOM",
  "route_detail": "RDM1"
}
```


# Route List

```php
function routeList(): RouteList
```

## Response Type

[`RouteList`](../../doc/models/route-list.md)

## Example Usage

```php
$result = $routeController->routeList();
```

## Example Response *(as JSON)*

```json
{
  "response": true,
  "incoming_route": [
    {
      "id": 57,
      "transaction_id": null,
      "customer_code": "YASS",
      "did": "6285757920462",
      "destination": "DTMFTEST",
      "destination_detail": null,
      "create_date": "2022-08-23T22:57:32.000Z",
      "isActive": 1
    },
    {
      "id": 65,
      "transaction_id": null,
      "customer_code": "YASS",
      "did": "6285592055238",
      "destination": "CVAI",
      "destination_detail": "BANK_BKKN",
      "create_date": "2022-09-01T17:00:23.000Z",
      "isActive": 1
    },
    {
      "id": 69,
      "transaction_id": null,
      "customer_code": "YASS",
      "did": "02150995134",
      "destination": "IVR",
      "destination_detail": "TOKO_BUAH",
      "create_date": "2022-09-14T02:37:27.000Z",
      "isActive": 1
    },
    {
      "id": 72,
      "transaction_id": null,
      "customer_code": "YASS",
      "did": "6285757920463",
      "destination": "TRUNK",
      "destination_detail": "CVAI",
      "create_date": "2022-09-16T03:45:38.000Z",
      "isActive": 1
    }
  ],
  "outgoing_route": [
    {
      "id": 582,
      "customer_code": "YASS",
      "extension": "ALL",
      "route_to": "PROVIDER",
      "route_detail": "6285592055236",
      "tech_prefix": "",
      "create_date": "2022-09-14T19:40:24.000Z",
      "isActive": 1
    },
    {
      "id": 583,
      "customer_code": "YASS",
      "extension": "8210000000001",
      "route_to": "RANDOM",
      "route_detail": "RDM1",
      "tech_prefix": "198767",
      "create_date": "2022-09-16T03:45:44.000Z",
      "isActive": 1
    }
  ]
}
```


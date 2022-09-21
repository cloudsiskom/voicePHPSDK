
# Route Outgoing Request

## Structure

`RouteOutgoingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `routeName` | `string` | Required | - | getRouteName(): string | setRouteName(string routeName): void |
| `device` | `string` | Required | - | getDevice(): string | setDevice(string device): void |
| `routeTo` | `string` | Required | - | getRouteTo(): string | setRouteTo(string routeTo): void |
| `routeDetail` | `string` | Required | - | getRouteDetail(): string | setRouteDetail(string routeDetail): void |
| `routePrefix` | `string` | Required | - | getRoutePrefix(): string | setRoutePrefix(string routePrefix): void |

## Example (as JSON)

```json
{
  "route_name": "test",
  "device": "8210000000001",
  "route_to": "RANDOM",
  "route_detail": "RDM1",
  "route_prefix": "198767"
}
```


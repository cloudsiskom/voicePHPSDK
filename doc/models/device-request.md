
# Device Request

## Structure

`DeviceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deviceType` | `string` | Required | - | getDeviceType(): string | setDeviceType(string deviceType): void |
| `deviceOwner` | `string` | Required | - | getDeviceOwner(): string | setDeviceOwner(string deviceOwner): void |
| `extension` | `string` | Required | - | getExtension(): string | setExtension(string extension): void |
| `secret` | `string` | Required | - | getSecret(): string | setSecret(string secret): void |
| `ipAddress` | `string` | Required | - | getIpAddress(): string | setIpAddress(string ipAddress): void |

## Example (as JSON)

```json
{
  "device_type": "TRUNK",
  "device_owner": "kiki",
  "extension": "1424500000013",
  "secret": "padamunegeri",
  "ip_address": "192.168.1.1"
}
```


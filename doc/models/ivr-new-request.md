
# IVR New Request

## Structure

`IVRNewRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | `string` | Required | - | getAction(): string | setAction(string action): void |
| `ivrName` | `string` | Required | - | getIvrName(): string | setIvrName(string ivrName): void |
| `ivrTitle` | `string` | Required | - | getIvrTitle(): string | setIvrTitle(string ivrTitle): void |
| `lang` | `string` | Required | - | getLang(): string | setLang(string lang): void |
| `gender` | `string` | Required | - | getGender(): string | setGender(string gender): void |
| `annauncementText` | `string` | Required | - | getAnnauncementText(): string | setAnnauncementText(string annauncementText): void |
| `maxTrying` | `string` | Required | - | getMaxTrying(): string | setMaxTrying(string maxTrying): void |
| `exitKey` | `string` | Required | - | getExitKey(): string | setExitKey(string exitKey): void |
| `backMenu` | `string` | Required | - | getBackMenu(): string | setBackMenu(string backMenu): void |
| `mainMenu` | `string` | Required | - | getMainMenu(): string | setMainMenu(string mainMenu): void |
| `keyPressed` | `string` | Required | - | getKeyPressed(): string | setKeyPressed(string keyPressed): void |
| `ivrParent` | `string` | Required | - | getIvrParent(): string | setIvrParent(string ivrParent): void |
| `ivrAction` | `string` | Required | - | getIvrAction(): string | setIvrAction(string ivrAction): void |

## Example (as JSON)

```json
{
  "action": "edit",
  "ivr_name": "788e0df1d21ecc13e5dd1601ba6ae42b",
  "ivr_title": "TEST-MAIN-2",
  "lang": "id-ID",
  "gender": "FEMALE",
  "annauncement_text": "haloo Selamat datang di sini, tekan 1 untuk pembelian, 2 untuk penjualan, 9 untuk mengakhiri",
  "max_trying": "2",
  "exit_key": "9",
  "back_menu": "9",
  "main_menu": "0",
  "key_pressed": "15",
  "ivr_parent": "110",
  "ivr_action": "NONE"
}
```


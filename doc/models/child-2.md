
# Child 2

## Structure

`Child2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `int` | Required | - | getId(): int | setId(int id): void |
| `customerCode` | `string` | Required | - | getCustomerCode(): string | setCustomerCode(string customerCode): void |
| `ivrName` | `string` | Required | - | getIvrName(): string | setIvrName(string ivrName): void |
| `ivrTitle` | `string` | Required | - | getIvrTitle(): string | setIvrTitle(string ivrTitle): void |
| `ivrParent` | `int` | Required | - | getIvrParent(): int | setIvrParent(int ivrParent): void |
| `ivrText` | `string` | Required | - | getIvrText(): string | setIvrText(string ivrText): void |
| `language` | `string` | Required | - | getLanguage(): string | setLanguage(string language): void |
| `gender` | `string` | Required | - | getGender(): string | setGender(string gender): void |
| `keyPressed` | `int` | Required | - | getKeyPressed(): int | setKeyPressed(int keyPressed): void |
| `exitKey` | `string` | Required | - | getExitKey(): string | setExitKey(string exitKey): void |
| `backMenu` | `int` | Required | - | getBackMenu(): int | setBackMenu(int backMenu): void |
| `mainMenu` | `string` | Required | - | getMainMenu(): string | setMainMenu(string mainMenu): void |
| `action` | `string` | Required | - | getAction(): string | setAction(string action): void |
| `actionDetail` | `string` | Required | - | getActionDetail(): string | setActionDetail(string actionDetail): void |
| `trying` | `int` | Required | - | getTrying(): int | setTrying(int trying): void |
| `isActive` | `int` | Required | - | getIsActive(): int | setIsActive(int isActive): void |

## Example (as JSON)

```json
{
  "id": 44,
  "customer_code": "YASS",
  "ivr_name": "TOKO_BUAH",
  "ivr_title": "BIBIT_JUMB",
  "ivr_parent": 43,
  "ivr_text": "Untuk bibit buah jumbo super tekan 1, bibit jumbo biasa tekan 2",
  "language": "id-ID",
  "gender": "MALE",
  "key_pressed": 1,
  "exit_key": "9",
  "back_menu": 8,
  "main_menu": "0",
  "action": "GONE",
  "action_detail": "",
  "trying": 3,
  "isActive": 1
}
```


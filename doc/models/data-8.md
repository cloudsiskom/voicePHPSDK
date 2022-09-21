
# Data 8

## Structure

`Data8`

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
| `children` | [`Child[]`](../../doc/models/child.md) | Required | - | getChildren(): array | setChildren(array children): void |

## Example (as JSON)

```json
{
  "id": 36,
  "customer_code": "YASS",
  "ivr_name": "TOKO_BUAH",
  "ivr_title": "MAIN_IVR",
  "ivr_parent": 0,
  "ivr_text": "Selamat datang di toko buah, disini anda akan mendapatkan buah terbaik, untuk pembelian buah, tekan 1, untuk pembelian bibit buah, tekan 2, untuk pembelian pupuk buah, tekan 3, tekan 4 untuk menghubungi layanan pelanggan, tekan 5 untuk apa, tekan angka 9 untuk mengakhiri",
  "language": "id-ID",
  "gender": "MALE",
  "key_pressed": 0,
  "exit_key": "9",
  "back_menu": 8,
  "main_menu": "0",
  "action": "MAIN",
  "action_detail": "",
  "trying": 3,
  "isActive": 1,
  "children": [
    {
      "id": 37,
      "customer_code": "YASS",
      "ivr_name": "TOKO_BUAH",
      "ivr_title": "BUAH",
      "ivr_parent": 36,
      "ivr_text": "Untuk membeli buah mangga tekan1, untuk membeli buah jeruk tekan 2, untuk membeli buah salak tekan 3, untuk mengakhiri tekan angka 9",
      "language": "id-ID",
      "gender": "MALE",
      "key_pressed": 1,
      "exit_key": "9",
      "back_menu": 8,
      "main_menu": "0",
      "action": "NONE",
      "action_detail": "",
      "trying": 3,
      "isActive": 1,
      "children": [
        {
          "id": 42,
          "customer_code": "YASS",
          "ivr_name": "TOKO_BUAH",
          "ivr_title": "BUAH JERUK",
          "ivr_parent": 37,
          "ivr_text": "Untuk jeruk bali tekan 1, jeruk yang lain tekan 2, tekan 3 untuk mengakhiri",
          "language": "id-ID",
          "gender": "MALE",
          "key_pressed": 1,
          "exit_key": "9",
          "back_menu": 8,
          "main_menu": "0",
          "action": "none",
          "action_detail": "",
          "trying": 3,
          "isActive": 1
        },
        {
          "id": 69,
          "customer_code": "YASS",
          "ivr_name": "TOKO_BUAH",
          "ivr_title": "Mangga",
          "ivr_parent": 37,
          "ivr_text": "Mangga sedang habis",
          "language": "id-ID",
          "gender": "MALE",
          "key_pressed": 2,
          "exit_key": "9",
          "back_menu": 8,
          "main_menu": "0",
          "action": "none",
          "action_detail": null,
          "trying": 3,
          "isActive": 1
        }
      ]
    },
    {
      "id": 38,
      "customer_code": "YASS",
      "ivr_name": "TOKO_BUAH",
      "ivr_title": "BIBIT",
      "ivr_parent": 36,
      "ivr_text": "Untuk bibit lokal tekan 1, untuk bibit import tekan 2, untuk mengakhiri tekan 9",
      "language": "id-ID",
      "gender": "MALE",
      "key_pressed": 2,
      "exit_key": "9",
      "back_menu": 8,
      "main_menu": "0",
      "action": "MON",
      "action_detail": "",
      "trying": 3,
      "isActive": 1,
      "children": [
        {
          "id": 43,
          "customer_code": "YASS",
          "ivr_name": "TOKO_BUAH",
          "ivr_title": "BIBIT_LOCA",
          "ivr_parent": 38,
          "ivr_text": "Bibit buah lokal jumbo tekan 1, Bibit buah lokal biasa tekan 2",
          "language": "id-ID",
          "gender": "FEMALE",
          "key_pressed": 1,
          "exit_key": "9",
          "back_menu": 8,
          "main_menu": "0",
          "action": "MON",
          "action_detail": "",
          "trying": 3,
          "isActive": 1,
          "children": [
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
            },
            {
              "id": 45,
              "customer_code": "YASS",
              "ivr_name": "TOKO_BUAH",
              "ivr_title": "LOCAL_BIAS",
              "ivr_parent": 43,
              "ivr_text": "Bibit buah local biasa hanya bisa di tanam dimusin hujan, saat ini tidak musim hujan, terima kasih",
              "language": "id-ID",
              "gender": "MALE",
              "key_pressed": 2,
              "exit_key": "9",
              "back_menu": 8,
              "main_menu": "0",
              "action": "NON",
              "action_detail": "",
              "trying": 3,
              "isActive": 1
            }
          ]
        }
      ]
    },
    {
      "id": 39,
      "customer_code": "YASS",
      "ivr_name": "TOKO_BUAH",
      "ivr_title": "PUPUK",
      "ivr_parent": 36,
      "ivr_text": "Untuk pembelian pupk organik tekan 1, pupuk kandang tekan 2, menghubungi layanan pelanggan tekan 3",
      "language": "id-ID",
      "gender": "MALE",
      "key_pressed": 3,
      "exit_key": "9",
      "back_menu": 8,
      "main_menu": "0",
      "action": "NON",
      "action_detail": "",
      "trying": 3,
      "isActive": 1,
      "children": [
        {
          "id": 40,
          "customer_code": "YASS",
          "ivr_name": "TOKO_BUAH",
          "ivr_title": "PPK_KANDAN",
          "ivr_parent": 39,
          "ivr_text": "Pupuk kandang sedang habis",
          "language": "id-ID",
          "gender": "MALE",
          "key_pressed": 1,
          "exit_key": "9",
          "back_menu": 8,
          "main_menu": "0",
          "action": "NO",
          "action_detail": "",
          "trying": 3,
          "isActive": 1
        },
        {
          "id": 41,
          "customer_code": "YASS",
          "ivr_name": "TOKO_BUAH",
          "ivr_title": "PPK_ORG",
          "ivr_parent": 39,
          "ivr_text": "Pupuk organik yang ada tinggal 1",
          "language": "id-ID",
          "gender": "FEMALE",
          "key_pressed": 2,
          "exit_key": "9",
          "back_menu": 8,
          "main_menu": "0",
          "action": "NO",
          "action_detail": "",
          "trying": 3,
          "isActive": 1
        }
      ]
    },
    {
      "id": 46,
      "customer_code": "YASS",
      "ivr_name": "TOKO_BUAH",
      "ivr_title": "CS",
      "ivr_parent": 36,
      "ivr_text": "Anda akan dihubungkan dengan layanan pelanggan",
      "language": "id-ID",
      "gender": "MALE",
      "key_pressed": 4,
      "exit_key": "9",
      "back_menu": 8,
      "main_menu": "0",
      "action": "CS",
      "action_detail": "",
      "trying": 3,
      "isActive": 1
    },
    {
      "id": 75,
      "customer_code": "YASS",
      "ivr_name": "TOKO_BUAH",
      "ivr_title": "apa mau",
      "ivr_parent": 36,
      "ivr_text": "mau apa?",
      "language": "id-ID",
      "gender": "MALE",
      "key_pressed": 5,
      "exit_key": "9",
      "back_menu": 8,
      "main_menu": "0",
      "action": "none",
      "action_detail": null,
      "trying": 3,
      "isActive": 1
    }
  ]
}
```


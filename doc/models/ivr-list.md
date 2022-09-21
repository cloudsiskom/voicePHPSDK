
# IVR List

## Structure

`IVRList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `response` | `bool` | Required | - | getResponse(): bool | setResponse(bool response): void |
| `data` | [`Data8[]`](../../doc/models/data-8.md) | Required | - | getData(): array | setData(array data): void |

## Example (as JSON)

```json
{
  "response": true,
  "data": [
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
  ]
}
```


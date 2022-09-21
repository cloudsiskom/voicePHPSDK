# Translation

```php
$translationController = $client->getTranslationController();
```

## Class Name

`TranslationController`

## Methods

* [Translation Delete](../../doc/controllers/translation.md#translation-delete)
* [Translation Setup](../../doc/controllers/translation.md#translation-setup)


# Translation Delete

```php
function translationDelete(TranslationDeleteRequest $body): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`TranslationDeleteRequest`](../../doc/models/translation-delete-request.md) | Body, Required | - |

## Response Type

`void`

## Example Usage

```php
$body_transactionId = '64c7a1e218b004054e49d304814cd1b0';
$body = new Models\TranslationDeleteRequest(
    $body_transactionId
);

$translationController->translationDelete($body);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`TranslationDeleteException`](../../doc/models/translation-delete-exception.md) |


# Translation Setup

```php
function translationSetup(TranslationSetupRequest $body): TranslationSetup
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`TranslationSetupRequest`](../../doc/models/translation-setup-request.md) | Body, Required | - |

## Response Type

[`TranslationSetup`](../../doc/models/translation-setup.md)

## Example Usage

```php
$body_fromNumber = '62811949736';
$body_callerDidgateway = '6285757920463';
$body_calledDidgateway = '6285757920463';
$body_destinationNumber = '6285161422932';
$body_externalId = '1000';
$body = new Models\TranslationSetupRequest(
    $body_fromNumber,
    $body_callerDidgateway,
    $body_calledDidgateway,
    $body_destinationNumber,
    $body_externalId
);

$result = $translationController->translationSetup($body);
```

## Example Response *(as JSON)*

```json
{
  "respose": true,
  "action": "setup",
  "transaction_id": "cf54bfa60c738515574809998f71bd62",
  "external_id": "1000",
  "from_number": "62811949736",
  "destination_number": "6285161422932",
  "caller_didgateway": "6285757920463",
  "called_didgateway": "6285757920463"
}
```


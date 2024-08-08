# criteo\api\marketingsolutions\v2023_07\AnalyticsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdsetReport()**](AnalyticsApi.md#getAdsetReport) | **POST** /2023-07/statistics/report |  |
| [**getPlacementsReport()**](AnalyticsApi.md#getPlacementsReport) | **POST** /2023-07/placements/report |  |
| [**getTransactionsReport()**](AnalyticsApi.md#getTransactionsReport) | **POST** /2023-07/transactions/report |  |
| [**getTransparencyReport()**](AnalyticsApi.md#getTransparencyReport) | **POST** /2023-07/log-level/advertisers/{advertiser-id}/report |  |


## `getAdsetReport()`

```php
getAdsetReport($statistics_report_query_message): string
```



This Statistics endpoint provides adset related data. It is an upgrade of our previous Statistics endpoint, and includes new metrics and customization capabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statistics_report_query_message = {"advertiserIds":"123,456,789","adSetIds":["12345","54321"],"adSetNames":["myAdSet1","myAdSet2"],"adSetStatus":["Active"],"dimensions":["CampaignId","Campaign","AdsetId","Adset","AdvertiserId","Advertiser","AdId","Ad","CouponId","Coupon","CategoryId","Category","Hour","Day","Week","Month","Year","Os","Device"],"metrics":["Clicks","Displays","Cpc","Visits"],"currency":"EUR","format":"csv","timezone":"Europe/Paris","startDate":"2024-04-24T00:00:00.0000000+02:00","endDate":"2024-04-27T00:00:00.0000000+02:00"}; // \criteo\api\marketingsolutions\v2023_07\Model\StatisticsReportQueryMessage

try {
    $result = $apiInstance->getAdsetReport($statistics_report_query_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAdsetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statistics_report_query_message** | [**\criteo\api\marketingsolutions\v2023_07\Model\StatisticsReportQueryMessage**](../Model/StatisticsReportQueryMessage.md)|  | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `text/csv`, `text/xml`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlacementsReport()`

```php
getPlacementsReport($placements_report_query_message_list_request): string
```



Your ads are placed in different domains (publishers) and environments (websites and apps). Thanks to the placements endpoint, you can analyse the performances for each publisher, comparing displays, clicks and sales generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placements_report_query_message_list_request = new \criteo\api\marketingsolutions\v2023_07\Model\PlacementsReportQueryMessageListRequest(); // \criteo\api\marketingsolutions\v2023_07\Model\PlacementsReportQueryMessageListRequest

try {
    $result = $apiInstance->getPlacementsReport($placements_report_query_message_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getPlacementsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placements_report_query_message_list_request** | [**\criteo\api\marketingsolutions\v2023_07\Model\PlacementsReportQueryMessageListRequest**](../Model/PlacementsReportQueryMessageListRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsReport()`

```php
getTransactionsReport($transactions_report_query_message_list_request): string
```



This Transactions endpoint provides transactions id related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_report_query_message_list_request = new \criteo\api\marketingsolutions\v2023_07\Model\TransactionsReportQueryMessageListRequest(); // \criteo\api\marketingsolutions\v2023_07\Model\TransactionsReportQueryMessageListRequest

try {
    $result = $apiInstance->getTransactionsReport($transactions_report_query_message_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transactions_report_query_message_list_request** | [**\criteo\api\marketingsolutions\v2023_07\Model\TransactionsReportQueryMessageListRequest**](../Model/TransactionsReportQueryMessageListRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `text/csv`, `text/xml`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransparencyReport()`

```php
getTransparencyReport($advertiser_id, $transparency_query_message): \criteo\api\marketingsolutions\v2023_07\Model\TransparencyReportListResponse
```



This Statistics endpoint provides publisher data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\v2023_07\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\v2023_07\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id to fetch the transparency data.
$transparency_query_message = {"shouldDisplayProductIds":false,"startDate":"2024-04-24T00:00:00.0000000+02:00","endDate":"2024-04-27T00:00:00.0000000+02:00"}; // \criteo\api\marketingsolutions\v2023_07\Model\TransparencyQueryMessage | The query message.

try {
    $result = $apiInstance->getTransparencyReport($advertiser_id, $transparency_query_message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTransparencyReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id to fetch the transparency data. | |
| **transparency_query_message** | [**\criteo\api\marketingsolutions\v2023_07\Model\TransparencyQueryMessage**](../Model/TransparencyQueryMessage.md)| The query message. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\v2023_07\Model\TransparencyReportListResponse**](../Model/TransparencyReportListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

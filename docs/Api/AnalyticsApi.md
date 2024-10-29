# criteo\api\marketingsolutions\preview\AnalyticsApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAdsetReport()**](AnalyticsApi.md#getAdsetReport) | **POST** /preview/statistics/report |  |
| [**getAsyncAdsetReport()**](AnalyticsApi.md#getAsyncAdsetReport) | **POST** /preview/reports/async-statistics |  |
| [**getAsyncAudienceReport()**](AnalyticsApi.md#getAsyncAudienceReport) | **POST** /preview/reports/async-audience-performance |  |
| [**getAsyncExportOutput()**](AnalyticsApi.md#getAsyncExportOutput) | **GET** /preview/reports/{report-id}/output |  |
| [**getAsyncExportStatus()**](AnalyticsApi.md#getAsyncExportStatus) | **GET** /preview/reports/{report-id}/status |  |
| [**getCategoriesReport()**](AnalyticsApi.md#getCategoriesReport) | **POST** /preview/categories/report |  |
| [**getCreativesReport()**](AnalyticsApi.md#getCreativesReport) | **POST** /preview/reports/creatives |  |
| [**getPlacementsReport()**](AnalyticsApi.md#getPlacementsReport) | **POST** /preview/placements/report |  |
| [**getTopProductsReport()**](AnalyticsApi.md#getTopProductsReport) | **POST** /preview/reports/top-products |  |
| [**getTransactionsReport()**](AnalyticsApi.md#getTransactionsReport) | **POST** /preview/transactions/report |  |
| [**getTransparencyReport()**](AnalyticsApi.md#getTransparencyReport) | **POST** /preview/log-level/advertisers/{advertiser-id}/report |  |


## `getAdsetReport()`

```php
getAdsetReport($statistics_report_query_message): \SplFileObject
```



This Statistics endpoint provides adset related data. It is an upgrade of our previous Statistics endpoint, and includes new metrics and customization capabilities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statistics_report_query_message = {"advertiserIds":"123,456,789","adSetIds":["12345","54321"],"adSetNames":["myAdSet1","myAdSet2"],"adSetStatus":["Active"],"dimensions":["CampaignId","Campaign","AdsetId","Adset","AdvertiserId","Advertiser","AdId","Ad","CouponId","Coupon","CategoryId","Category","Hour","Day","Week","Month","Year","Os","Device"],"metrics":["Clicks","Displays","Cpc","Visits"],"currency":"EUR","format":"csv","timezone":"Europe/Paris","startDate":"2024-04-24T00:00:00.0000000+02:00","endDate":"2024-04-27T00:00:00.0000000+02:00"}; // \criteo\api\marketingsolutions\preview\Model\StatisticsReportQueryMessage

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
| **statistics_report_query_message** | [**\criteo\api\marketingsolutions\preview\Model\StatisticsReportQueryMessage**](../Model/StatisticsReportQueryMessage.md)|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `text/csv`, `text/xml`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncAdsetReport()`

```php
getAsyncAdsetReport($generate_statistics_report_request): \criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse
```



This Statistics endpoint provides an export Id that let you retrieve data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_statistics_report_request = new \criteo\api\marketingsolutions\preview\Model\GenerateStatisticsReportRequest(); // \criteo\api\marketingsolutions\preview\Model\GenerateStatisticsReportRequest

try {
    $result = $apiInstance->getAsyncAdsetReport($generate_statistics_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncAdsetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_statistics_report_request** | [**\criteo\api\marketingsolutions\preview\Model\GenerateStatisticsReportRequest**](../Model/GenerateStatisticsReportRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse**](../Model/MarketingSolutionsReportStatusResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncAudienceReport()`

```php
getAsyncAudienceReport($generate_audience_performance_report_request): \criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse
```



This Statistics endpoint provides an export Id that lets you retrieve data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_audience_performance_report_request = new \criteo\api\marketingsolutions\preview\Model\GenerateAudiencePerformanceReportRequest(); // \criteo\api\marketingsolutions\preview\Model\GenerateAudiencePerformanceReportRequest

try {
    $result = $apiInstance->getAsyncAudienceReport($generate_audience_performance_report_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncAudienceReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_audience_performance_report_request** | [**\criteo\api\marketingsolutions\preview\Model\GenerateAudiencePerformanceReportRequest**](../Model/GenerateAudiencePerformanceReportRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse**](../Model/MarketingSolutionsReportStatusResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncExportOutput()`

```php
getAsyncExportOutput($report_id): \criteo\api\marketingsolutions\preview\Model\ExportResult
```



This endpoint gives you the output of the report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Id of the report

try {
    $result = $apiInstance->getAsyncExportOutput($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncExportOutput: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Id of the report | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ExportResult**](../Model/ExportResult.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAsyncExportStatus()`

```php
getAsyncExportStatus($report_id): \criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse
```



This endpoint gives you the status of the report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = 'report_id_example'; // string | Id of the report

try {
    $result = $apiInstance->getAsyncExportStatus($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getAsyncExportStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_id** | **string**| Id of the report | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\MarketingSolutionsReportStatusResponse**](../Model/MarketingSolutionsReportStatusResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoriesReport()`

```php
getCategoriesReport($generate_categories_report_request_attributes_request): \SplFileObject
```



With this endpoint you can analyse what are the categories of the placements' domains your ads are placed in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_categories_report_request_attributes_request = new \criteo\api\marketingsolutions\preview\Model\GenerateCategoriesReportRequestAttributesRequest(); // \criteo\api\marketingsolutions\preview\Model\GenerateCategoriesReportRequestAttributesRequest

try {
    $result = $apiInstance->getCategoriesReport($generate_categories_report_request_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCategoriesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_categories_report_request_attributes_request** | [**\criteo\api\marketingsolutions\preview\Model\GenerateCategoriesReportRequestAttributesRequest**](../Model/GenerateCategoriesReportRequestAttributesRequest.md)|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCreativesReport()`

```php
getCreativesReport($generate_creatives_report_request_attributes_request): \criteo\api\marketingsolutions\preview\Model\JsonReportRowsListResponse
```



With Creatives endpoint, you can analyse the daily performances of your creatives on the main metrics: clicks, ctr, displays.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_creatives_report_request_attributes_request = new \criteo\api\marketingsolutions\preview\Model\GenerateCreativesReportRequestAttributesRequest(); // \criteo\api\marketingsolutions\preview\Model\GenerateCreativesReportRequestAttributesRequest

try {
    $result = $apiInstance->getCreativesReport($generate_creatives_report_request_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getCreativesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_creatives_report_request_attributes_request** | [**\criteo\api\marketingsolutions\preview\Model\GenerateCreativesReportRequestAttributesRequest**](../Model/GenerateCreativesReportRequestAttributesRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\JsonReportRowsListResponse**](../Model/JsonReportRowsListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPlacementsReport()`

```php
getPlacementsReport($placements_report_query_message_list_request): \SplFileObject
```



Your ads are placed in different domains (publishers) and environments (websites and apps). Thanks to the placements endpoint, you can analyse the performances for each publisher, comparing displays, clicks and sales generated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$placements_report_query_message_list_request = new \criteo\api\marketingsolutions\preview\Model\PlacementsReportQueryMessageListRequest(); // \criteo\api\marketingsolutions\preview\Model\PlacementsReportQueryMessageListRequest

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
| **placements_report_query_message_list_request** | [**\criteo\api\marketingsolutions\preview\Model\PlacementsReportQueryMessageListRequest**](../Model/PlacementsReportQueryMessageListRequest.md)|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `text/csv`, `application/xml`, `application/vnd.openxmlformats-officedocument.spreadsheetml.sheet`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopProductsReport()`

```php
getTopProductsReport($generate_top_products_report_request_attributes_request): \criteo\api\marketingsolutions\preview\Model\JsonReportRowsListResponse
```



With the topProducts endpoint, you can analyse the performances for each publisher, by top displays, top clicks or top sales.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_top_products_report_request_attributes_request = new \criteo\api\marketingsolutions\preview\Model\GenerateTopProductsReportRequestAttributesRequest(); // \criteo\api\marketingsolutions\preview\Model\GenerateTopProductsReportRequestAttributesRequest

try {
    $result = $apiInstance->getTopProductsReport($generate_top_products_report_request_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTopProductsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **generate_top_products_report_request_attributes_request** | [**\criteo\api\marketingsolutions\preview\Model\GenerateTopProductsReportRequestAttributesRequest**](../Model/GenerateTopProductsReportRequestAttributesRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\JsonReportRowsListResponse**](../Model/JsonReportRowsListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`, `application/xml`, `text/xml`, `application/*+xml`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionsReport()`

```php
getTransactionsReport($transactions_report_query_message_list_request): \SplFileObject
```



This Transactions endpoint provides transactions id related data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactions_report_query_message_list_request = new \criteo\api\marketingsolutions\preview\Model\TransactionsReportQueryMessageListRequest(); // \criteo\api\marketingsolutions\preview\Model\TransactionsReportQueryMessageListRequest

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
| **transactions_report_query_message_list_request** | [**\criteo\api\marketingsolutions\preview\Model\TransactionsReportQueryMessageListRequest**](../Model/TransactionsReportQueryMessageListRequest.md)|  | [optional] |

### Return type

**\SplFileObject**

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
getTransparencyReport($advertiser_id, $transparency_query_message): \criteo\api\marketingsolutions\preview\Model\TransparencyReportListResponse
```



This Statistics endpoint provides publisher data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id to fetch the transparency data.
$transparency_query_message = {"shouldDisplayProductIds":false,"startDate":"2024-04-24T00:00:00.0000000+02:00","endDate":"2024-04-27T00:00:00.0000000+02:00"}; // \criteo\api\marketingsolutions\preview\Model\TransparencyQueryMessage | The query message.

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
| **transparency_query_message** | [**\criteo\api\marketingsolutions\preview\Model\TransparencyQueryMessage**](../Model/TransparencyQueryMessage.md)| The query message. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\TransparencyReportListResponse**](../Model/TransparencyReportListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

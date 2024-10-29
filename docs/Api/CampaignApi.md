# criteo\api\marketingsolutions\preview\CampaignApi

All URIs are relative to https://api.criteo.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAdSetV24Q3()**](CampaignApi.md#createAdSetV24Q3) | **POST** /preview/marketing-solutions/ad-sets |  |
| [**createCampaign()**](CampaignApi.md#createCampaign) | **POST** /preview/marketing-solutions/campaigns |  |
| [**deleteAdvertiserBundleRules()**](CampaignApi.md#deleteAdvertiserBundleRules) | **DELETE** /preview/advertisers/{advertiserId}/targeting/bundle-rules |  |
| [**deleteAdvertiserDomainRules()**](CampaignApi.md#deleteAdvertiserDomainRules) | **DELETE** /preview/advertisers/{advertiserId}/targeting/domain-rules |  |
| [**deleteCampaignBundleRules()**](CampaignApi.md#deleteCampaignBundleRules) | **DELETE** /preview/campaigns/{campaignId}/targeting/bundle-rules |  |
| [**deleteCampaignDomainRules()**](CampaignApi.md#deleteCampaignDomainRules) | **DELETE** /preview/campaigns/{campaignId}/targeting/domain-rules |  |
| [**deleteOCIbrandSafetyRule()**](CampaignApi.md#deleteOCIbrandSafetyRule) | **DELETE** /preview/brand-safety/oci |  |
| [**deleteOCItargetingRule()**](CampaignApi.md#deleteOCItargetingRule) | **DELETE** /preview/targeting/oci |  |
| [**disableAdSetTargetingDealIds()**](CampaignApi.md#disableAdSetTargetingDealIds) | **POST** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/deal-ids/disable |  |
| [**disableAdSetTargetingVideoPositioning()**](CampaignApi.md#disableAdSetTargetingVideoPositioning) | **POST** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/video-positionings/disable |  |
| [**getAdSetTargetingDealIds()**](CampaignApi.md#getAdSetTargetingDealIds) | **GET** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/deal-ids |  |
| [**getAdSetTargetingVideoPositioning()**](CampaignApi.md#getAdSetTargetingVideoPositioning) | **GET** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/video-positioning |  |
| [**getAdSetV24Q3()**](CampaignApi.md#getAdSetV24Q3) | **GET** /preview/marketing-solutions/ad-sets/{ad-set-id} |  |
| [**getAdvertiserBundleRules()**](CampaignApi.md#getAdvertiserBundleRules) | **GET** /preview/advertisers/{advertiserId}/targeting/bundle-rules |  |
| [**getAdvertiserDomainRules()**](CampaignApi.md#getAdvertiserDomainRules) | **GET** /preview/advertisers/{advertiserId}/targeting/domain-rules |  |
| [**getCampaignBundleRules()**](CampaignApi.md#getCampaignBundleRules) | **GET** /preview/campaigns/{campaignId}/targeting/bundle-rules |  |
| [**getCampaignDomainRules()**](CampaignApi.md#getCampaignDomainRules) | **GET** /preview/campaigns/{campaignId}/targeting/domain-rules |  |
| [**getCampaignV23Q1()**](CampaignApi.md#getCampaignV23Q1) | **GET** /preview/marketing-solutions/campaigns/{campaign-id} |  |
| [**getCategoryBidList()**](CampaignApi.md#getCategoryBidList) | **GET** /preview/marketing-solutions/ad-sets/{ad-set-id}/category-bids |  |
| [**getDisplayMultipliers()**](CampaignApi.md#getDisplayMultipliers) | **GET** /preview/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers |  |
| [**getOCIbrandSafetyRule()**](CampaignApi.md#getOCIbrandSafetyRule) | **GET** /preview/brand-safety/oci |  |
| [**getOCItargetingRule()**](CampaignApi.md#getOCItargetingRule) | **GET** /preview/targeting/oci |  |
| [**getSupplyVendorList()**](CampaignApi.md#getSupplyVendorList) | **GET** /preview/marketing-solutions/ad-sets/targeting/supply-vendors |  |
| [**patchAdSetsV24Q3()**](CampaignApi.md#patchAdSetsV24Q3) | **PATCH** /preview/marketing-solutions/ad-sets |  |
| [**patchCampaigns()**](CampaignApi.md#patchCampaigns) | **PATCH** /preview/marketing-solutions/campaigns |  |
| [**patchCategoryBidList()**](CampaignApi.md#patchCategoryBidList) | **PATCH** /preview/marketing-solutions/ad-sets/{ad-set-id}/category-bids |  |
| [**patchDisplayMultipliers()**](CampaignApi.md#patchDisplayMultipliers) | **PATCH** /preview/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers |  |
| [**postAdvertiserBundleRules()**](CampaignApi.md#postAdvertiserBundleRules) | **POST** /preview/advertisers/{advertiserId}/targeting/bundle-rules |  |
| [**postAdvertiserDomainRules()**](CampaignApi.md#postAdvertiserDomainRules) | **POST** /preview/advertisers/{advertiserId}/targeting/domain-rules |  |
| [**postCampaignBundleRules()**](CampaignApi.md#postCampaignBundleRules) | **POST** /preview/campaigns/{campaignId}/targeting/bundle-rules |  |
| [**postCampaignDomainRules()**](CampaignApi.md#postCampaignDomainRules) | **POST** /preview/campaigns/{campaignId}/targeting/domain-rules |  |
| [**putAdvertiserBundleRules()**](CampaignApi.md#putAdvertiserBundleRules) | **PUT** /preview/advertisers/{advertiserId}/targeting/bundle-rules |  |
| [**putAdvertiserDomainRules()**](CampaignApi.md#putAdvertiserDomainRules) | **PUT** /preview/advertisers/{advertiserId}/targeting/domain-rules |  |
| [**putCampaignBundleRules()**](CampaignApi.md#putCampaignBundleRules) | **PUT** /preview/campaigns/{campaignId}/targeting/bundle-rules |  |
| [**putCampaignDomainRules()**](CampaignApi.md#putCampaignDomainRules) | **PUT** /preview/campaigns/{campaignId}/targeting/domain-rules |  |
| [**searchAdSetsV24Q3()**](CampaignApi.md#searchAdSetsV24Q3) | **POST** /preview/marketing-solutions/ad-sets/search |  |
| [**searchCampaignsV23Q1()**](CampaignApi.md#searchCampaignsV23Q1) | **POST** /preview/marketing-solutions/campaigns/search |  |
| [**setAdSetTargetingDealIds()**](CampaignApi.md#setAdSetTargetingDealIds) | **PUT** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/deal-ids |  |
| [**setAdSetTargetingVideoPositioning()**](CampaignApi.md#setAdSetTargetingVideoPositioning) | **PUT** /preview/marketing-solutions/ad-sets/{ad-set-id}/targeting/video-positioning |  |
| [**startAdSets()**](CampaignApi.md#startAdSets) | **POST** /preview/marketing-solutions/ad-sets/start |  |
| [**stopAdSets()**](CampaignApi.md#stopAdSets) | **POST** /preview/marketing-solutions/ad-sets/stop |  |
| [**updateAdSetAudience()**](CampaignApi.md#updateAdSetAudience) | **PUT** /preview/marketing-solutions/ad-sets/{ad-set-id}/audience |  |
| [**upsertOCIbrandSafetyRule()**](CampaignApi.md#upsertOCIbrandSafetyRule) | **POST** /preview/brand-safety/oci |  |
| [**upsertOCItargetingRule()**](CampaignApi.md#upsertOCItargetingRule) | **POST** /preview/targeting/oci |  |


## `createAdSetV24Q3()`

```php
createAdSetV24Q3($create_ad_set_v24_q3_request): \criteo\api\marketingsolutions\preview\Model\ResponseReadAdSetV24Q3
```



Create the specified ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_ad_set_v24_q3_request = new \criteo\api\marketingsolutions\preview\Model\CreateAdSetV24Q3Request(); // \criteo\api\marketingsolutions\preview\Model\CreateAdSetV24Q3Request | the ad sets to create

try {
    $result = $apiInstance->createAdSetV24Q3($create_ad_set_v24_q3_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createAdSetV24Q3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_ad_set_v24_q3_request** | [**\criteo\api\marketingsolutions\preview\Model\CreateAdSetV24Q3Request**](../Model/CreateAdSetV24Q3Request.md)| the ad sets to create | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponseReadAdSetV24Q3**](../Model/ResponseReadAdSetV24Q3.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCampaign()`

```php
createCampaign($create_campaign_request): \criteo\api\marketingsolutions\preview\Model\CampaignV23Q1Response
```



Create the specified campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_campaign_request = new \criteo\api\marketingsolutions\preview\Model\CreateCampaignRequest(); // \criteo\api\marketingsolutions\preview\Model\CreateCampaignRequest | the campaigns to create

try {
    $result = $apiInstance->createCampaign($create_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_campaign_request** | [**\criteo\api\marketingsolutions\preview\Model\CreateCampaignRequest**](../Model/CreateCampaignRequest.md)| the campaigns to create | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CampaignV23Q1Response**](../Model/CampaignV23Q1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdvertiserBundleRules()`

```php
deleteAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Removes some bundles from the current list of targeted bundles for a given advertiser.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to delete from the list

try {
    $result = $apiInstance->deleteAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteAdvertiserBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to delete from the list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAdvertiserDomainRules()`

```php
deleteAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Removes some domains from the current list of targeted domains for a given advertiser.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to delete from the list

try {
    $result = $apiInstance->deleteAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteAdvertiserDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to delete from the list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignBundleRules()`

```php
deleteCampaignBundleRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Removes some bundles from the current list of targeted bundles for a given campaign.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to delete from the list

try {
    $result = $apiInstance->deleteCampaignBundleRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaignBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to delete from the list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCampaignDomainRules()`

```php
deleteCampaignDomainRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Removes some domains from the current list of targeted domains for a given campaign.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to delete from the list

try {
    $result = $apiInstance->deleteCampaignDomainRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaignDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to delete from the list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOCIbrandSafetyRule()`

```php
deleteOCIbrandSafetyRule($target_type, $target_id)
```



Delete OCI brand-safety rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_type = new \criteo\api\marketingsolutions\preview\Model\TargetType(); // TargetType | Defines a target for a rule.
$target_id = 56; // int | Unique target identifier.

try {
    $apiInstance->deleteOCIbrandSafetyRule($target_type, $target_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteOCIbrandSafetyRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_type** | [**TargetType**](../Model/.md)| Defines a target for a rule. | |
| **target_id** | **int**| Unique target identifier. | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOCItargetingRule()`

```php
deleteOCItargetingRule($target_type, $target_id)
```



Delete OCI targeting rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_type = new \criteo\api\marketingsolutions\preview\Model\TargetType(); // TargetType | Defines a target for a rule.
$target_id = 56; // int | Unique target identifier.

try {
    $apiInstance->deleteOCItargetingRule($target_type, $target_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteOCItargetingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_type** | [**TargetType**](../Model/.md)| Defines a target for a rule. | |
| **target_id** | **int**| Unique target identifier. | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableAdSetTargetingDealIds()`

```php
disableAdSetTargetingDealIds($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsDisableResultResponse
```



Disable the Deal Id Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->disableAdSetTargetingDealIds($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->disableAdSetTargetingDealIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsDisableResultResponse**](../Model/AdSetTargetingDealIdsDisableResultResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `disableAdSetTargetingVideoPositioning()`

```php
disableAdSetTargetingVideoPositioning($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningDisableResultResponse
```



Disable the Video Positioning Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->disableAdSetTargetingVideoPositioning($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->disableAdSetTargetingVideoPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningDisableResultResponse**](../Model/AdSetTargetingVideoPositioningDisableResultResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSetTargetingDealIds()`

```php
getAdSetTargetingDealIds($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsResponse
```



Get the Deal Id Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getAdSetTargetingDealIds($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdSetTargetingDealIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsResponse**](../Model/AdSetTargetingDealIdsResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSetTargetingVideoPositioning()`

```php
getAdSetTargetingVideoPositioning($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningResponse
```



Get the Video Positioning Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getAdSetTargetingVideoPositioning($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdSetTargetingVideoPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningResponse**](../Model/AdSetTargetingVideoPositioningResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdSetV24Q3()`

```php
getAdSetV24Q3($ad_set_id): \criteo\api\marketingsolutions\preview\Model\ResponseReadAdSetV24Q3
```



Get the data for the specified ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the ad set

try {
    $result = $apiInstance->getAdSetV24Q3($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdSetV24Q3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the ad set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponseReadAdSetV24Q3**](../Model/ResponseReadAdSetV24Q3.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserBundleRules()`

```php
getAdvertiserBundleRules($advertiser_id): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Returns a list of all targeted bundles for an advertiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id

try {
    $result = $apiInstance->getAdvertiserBundleRules($advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdvertiserBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAdvertiserDomainRules()`

```php
getAdvertiserDomainRules($advertiser_id): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Returns a list of all targeted domains for an advertiser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id

try {
    $result = $apiInstance->getAdvertiserDomainRules($advertiser_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAdvertiserDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignBundleRules()`

```php
getCampaignBundleRules($campaign_id): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Returns a list of all targeted bundles for a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id

try {
    $result = $apiInstance->getCampaignBundleRules($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignDomainRules()`

```php
getCampaignDomainRules($campaign_id): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Returns a list of all targeted domains for a campaign.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id

try {
    $result = $apiInstance->getCampaignDomainRules($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCampaignV23Q1()`

```php
getCampaignV23Q1($campaign_id): \criteo\api\marketingsolutions\preview\Model\CampaignV23Q1Response
```



Get the data for the specified campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string | Id of the campaign

try {
    $result = $apiInstance->getCampaignV23Q1($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignV23Q1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **string**| Id of the campaign | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CampaignV23Q1Response**](../Model/CampaignV23Q1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCategoryBidList()`

```php
getCategoryBidList($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetCategoryBidListResponse
```



Get the Category Bids for all valid Categories associated to an Ad Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getCategoryBidList($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCategoryBidList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetCategoryBidListResponse**](../Model/AdSetCategoryBidListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDisplayMultipliers()`

```php
getDisplayMultipliers($ad_set_id): \criteo\api\marketingsolutions\preview\Model\AdSetDisplayMultiplierListResponse
```



Get the Display Multipliers for all valid Categories associated to an Ad Set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set

try {
    $result = $apiInstance->getDisplayMultipliers($ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getDisplayMultipliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetDisplayMultiplierListResponse**](../Model/AdSetDisplayMultiplierListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOCIbrandSafetyRule()`

```php
getOCIbrandSafetyRule($target_type, $target_id): \criteo\api\marketingsolutions\preview\Model\OciBrandSafetyResponse
```



Get OCI brand-safety rule for the specified target

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_type = new \criteo\api\marketingsolutions\preview\Model\TargetType(); // TargetType | Defines a target for a rule.
$target_id = 56; // int | Unique target identifier.

try {
    $result = $apiInstance->getOCIbrandSafetyRule($target_type, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getOCIbrandSafetyRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_type** | [**TargetType**](../Model/.md)| Defines a target for a rule. | |
| **target_id** | **int**| Unique target identifier. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OciBrandSafetyResponse**](../Model/OciBrandSafetyResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOCItargetingRule()`

```php
getOCItargetingRule($target_type, $target_id): \criteo\api\marketingsolutions\preview\Model\OciTargetingResponse
```



Get OCI targeting rule for specified target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$target_type = new \criteo\api\marketingsolutions\preview\Model\TargetType(); // TargetType | Defines a target for a rule.
$target_id = 56; // int | Unique target identifier.

try {
    $result = $apiInstance->getOCItargetingRule($target_type, $target_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getOCItargetingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **target_type** | [**TargetType**](../Model/.md)| Defines a target for a rule. | |
| **target_id** | **int**| Unique target identifier. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OciTargetingResponse**](../Model/OciTargetingResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupplyVendorList()`

```php
getSupplyVendorList(): \criteo\api\marketingsolutions\preview\Model\SupplyVendorListResponse
```



Fetch the list of available supply vendors for any Ad Set targetings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSupplyVendorList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getSupplyVendorList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\criteo\api\marketingsolutions\preview\Model\SupplyVendorListResponse**](../Model/SupplyVendorListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAdSetsV24Q3()`

```php
patchAdSetsV24Q3($requests_patch_ad_set_v24_q3): \criteo\api\marketingsolutions\preview\Model\ResponsesAdSetIdV24Q3
```



Patch a list of AdSets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_patch_ad_set_v24_q3 = new \criteo\api\marketingsolutions\preview\Model\RequestsPatchAdSetV24Q3(); // \criteo\api\marketingsolutions\preview\Model\RequestsPatchAdSetV24Q3 | List of adsets to patch.

try {
    $result = $apiInstance->patchAdSetsV24Q3($requests_patch_ad_set_v24_q3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchAdSetsV24Q3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_patch_ad_set_v24_q3** | [**\criteo\api\marketingsolutions\preview\Model\RequestsPatchAdSetV24Q3**](../Model/RequestsPatchAdSetV24Q3.md)| List of adsets to patch. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponsesAdSetIdV24Q3**](../Model/ResponsesAdSetIdV24Q3.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCampaigns()`

```php
patchCampaigns($patch_campaign_list_request): \criteo\api\marketingsolutions\preview\Model\PatchResultCampaignListResponse
```



Patch a list of Campaigns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_campaign_list_request = new \criteo\api\marketingsolutions\preview\Model\PatchCampaignListRequest(); // \criteo\api\marketingsolutions\preview\Model\PatchCampaignListRequest | List of campaigns to patch.

try {
    $result = $apiInstance->patchCampaigns($patch_campaign_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_campaign_list_request** | [**\criteo\api\marketingsolutions\preview\Model\PatchCampaignListRequest**](../Model/PatchCampaignListRequest.md)| List of campaigns to patch. | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\PatchResultCampaignListResponse**](../Model/PatchResultCampaignListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCategoryBidList()`

```php
patchCategoryBidList($ad_set_id, $patch_ad_set_category_bid_list_request): \criteo\api\marketingsolutions\preview\Model\PatchAdSetCategoryBidResultListResponse
```



Patch Category Bids for one or more Categories in a single request. Partial success policy is followed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$patch_ad_set_category_bid_list_request = new \criteo\api\marketingsolutions\preview\Model\PatchAdSetCategoryBidListRequest(); // \criteo\api\marketingsolutions\preview\Model\PatchAdSetCategoryBidListRequest

try {
    $result = $apiInstance->patchCategoryBidList($ad_set_id, $patch_ad_set_category_bid_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchCategoryBidList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **patch_ad_set_category_bid_list_request** | [**\criteo\api\marketingsolutions\preview\Model\PatchAdSetCategoryBidListRequest**](../Model/PatchAdSetCategoryBidListRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\PatchAdSetCategoryBidResultListResponse**](../Model/PatchAdSetCategoryBidResultListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDisplayMultipliers()`

```php
patchDisplayMultipliers($ad_set_id, $patch_ad_set_display_multiplier_list_request): \criteo\api\marketingsolutions\preview\Model\PatchAdSetDisplayMultiplierResultListResponse
```



Patch Display Multipliers for one or more Categories in a single request. Partial success policy is followed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$patch_ad_set_display_multiplier_list_request = new \criteo\api\marketingsolutions\preview\Model\PatchAdSetDisplayMultiplierListRequest(); // \criteo\api\marketingsolutions\preview\Model\PatchAdSetDisplayMultiplierListRequest

try {
    $result = $apiInstance->patchDisplayMultipliers($ad_set_id, $patch_ad_set_display_multiplier_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->patchDisplayMultipliers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **patch_ad_set_display_multiplier_list_request** | [**\criteo\api\marketingsolutions\preview\Model\PatchAdSetDisplayMultiplierListRequest**](../Model/PatchAdSetDisplayMultiplierListRequest.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\PatchAdSetDisplayMultiplierResultListResponse**](../Model/PatchAdSetDisplayMultiplierResultListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAdvertiserBundleRules()`

```php
postAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Inserts a list of targeted bundles for an advertiser and sets the targeting mode : blocklisting or allowlisting.<br />  It will replace the current list if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Description of the targeting rule to setup

try {
    $result = $apiInstance->postAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postAdvertiserBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Description of the targeting rule to setup | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAdvertiserDomainRules()`

```php
postAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Inserts a list of targeted domains for an advertiser and sets the targeting mode : blocklisting or allowlisting.<br />  It will replace the current list if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Description of the targeting rule to setup

try {
    $result = $apiInstance->postAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postAdvertiserDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Description of the targeting rule to setup | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCampaignBundleRules()`

```php
postCampaignBundleRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Inserts a list of targeted bundles for a campaign and sets the targeting mode : blocklisting or allowlisting.<br />  It will replace the current list if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Description of the targeting rule to setup

try {
    $result = $apiInstance->postCampaignBundleRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postCampaignBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Description of the targeting rule to setup | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCampaignDomainRules()`

```php
postCampaignDomainRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Inserts a list of targeted domains for a campaign and sets the targeting mode : blocklisting or allowlisting.<br />  It will replace the current list if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Description of the targeting rule to setup

try {
    $result = $apiInstance->postCampaignDomainRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->postCampaignDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Description of the targeting rule to setup | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAdvertiserBundleRules()`

```php
putAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Updates the targeted bundles for an advertiser by adding a list of bundles to the current list.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to add to the existing list

try {
    $result = $apiInstance->putAdvertiserBundleRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putAdvertiserBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to add to the existing list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAdvertiserDomainRules()`

```php
putAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Updates the targeted domains for an advertiser by adding a list of domains to the current list.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advertiser_id = 56; // int | The advertiser id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to add to the existing list

try {
    $result = $apiInstance->putAdvertiserDomainRules($advertiser_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putAdvertiserDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **advertiser_id** | **int**| The advertiser id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to add to the existing list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCampaignBundleRules()`

```php
putCampaignBundleRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Updates the targeted bundles for a campaign by adding a list of bundles to the current list.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to add to the existing list

try {
    $result = $apiInstance->putCampaignBundleRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putCampaignBundleRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to add to the existing list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCampaignDomainRules()`

```php
putCampaignDomainRules($campaign_id, $api_request_of_targeting_entity): \criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity
```



Updates the targeted domains for a campaign by adding a list of domains to the current list.<br />  The mode of targeting (allowlist/blocklist) cannot be updated through this method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 56; // int | The campaign id
$api_request_of_targeting_entity = new \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity(); // \criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity | Contains the list of items to add to the existing list

try {
    $result = $apiInstance->putCampaignDomainRules($campaign_id, $api_request_of_targeting_entity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->putCampaignDomainRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_id** | **int**| The campaign id | |
| **api_request_of_targeting_entity** | [**\criteo\api\marketingsolutions\preview\Model\ApiRequestOfTargetingEntity**](../Model/ApiRequestOfTargetingEntity.md)| Contains the list of items to add to the existing list | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ApiResponseOfTargetingEntity**](../Model/ApiResponseOfTargetingEntity.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchAdSetsV24Q3()`

```php
searchAdSetsV24Q3($ad_set_search_request_v24_q3): \criteo\api\marketingsolutions\preview\Model\ResponsesReadAdSetV24Q3
```



Search for ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_search_request_v24_q3 = new \criteo\api\marketingsolutions\preview\Model\AdSetSearchRequestV24Q3(); // \criteo\api\marketingsolutions\preview\Model\AdSetSearchRequestV24Q3

try {
    $result = $apiInstance->searchAdSetsV24Q3($ad_set_search_request_v24_q3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchAdSetsV24Q3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_search_request_v24_q3** | [**\criteo\api\marketingsolutions\preview\Model\AdSetSearchRequestV24Q3**](../Model/AdSetSearchRequestV24Q3.md)|  | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponsesReadAdSetV24Q3**](../Model/ResponsesReadAdSetV24Q3.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCampaignsV23Q1()`

```php
searchCampaignsV23Q1($campaign_search_request_v23_q1): \criteo\api\marketingsolutions\preview\Model\CampaignV23Q1ListResponse
```



Search for campaigns

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_search_request_v23_q1 = new \criteo\api\marketingsolutions\preview\Model\CampaignSearchRequestV23Q1(); // \criteo\api\marketingsolutions\preview\Model\CampaignSearchRequestV23Q1 | filters on campaigns

try {
    $result = $apiInstance->searchCampaignsV23Q1($campaign_search_request_v23_q1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->searchCampaignsV23Q1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **campaign_search_request_v23_q1** | [**\criteo\api\marketingsolutions\preview\Model\CampaignSearchRequestV23Q1**](../Model/CampaignSearchRequestV23Q1.md)| filters on campaigns | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\CampaignV23Q1ListResponse**](../Model/CampaignV23Q1ListResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAdSetTargetingDealIds()`

```php
setAdSetTargetingDealIds($ad_set_id, $set_ad_set_targeting_deal_ids_request): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsSetResultResponse
```



Set the Deal Id Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$set_ad_set_targeting_deal_ids_request = new \criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingDealIdsRequest(); // \criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingDealIdsRequest | the new Deal Id Targeting configuration

try {
    $result = $apiInstance->setAdSetTargetingDealIds($ad_set_id, $set_ad_set_targeting_deal_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setAdSetTargetingDealIds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **set_ad_set_targeting_deal_ids_request** | [**\criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingDealIdsRequest**](../Model/SetAdSetTargetingDealIdsRequest.md)| the new Deal Id Targeting configuration | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingDealIdsSetResultResponse**](../Model/AdSetTargetingDealIdsSetResultResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAdSetTargetingVideoPositioning()`

```php
setAdSetTargetingVideoPositioning($ad_set_id, $set_ad_set_targeting_video_positioning_request): \criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningSetResultResponse
```



Set the Video Positioning Targeting configuration for the ad set whose id is specified

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | Id of the Ad Set
$set_ad_set_targeting_video_positioning_request = new \criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingVideoPositioningRequest(); // \criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingVideoPositioningRequest | the new Video Positioning Targeting configuration

try {
    $result = $apiInstance->setAdSetTargetingVideoPositioning($ad_set_id, $set_ad_set_targeting_video_positioning_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->setAdSetTargetingVideoPositioning: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| Id of the Ad Set | |
| **set_ad_set_targeting_video_positioning_request** | [**\criteo\api\marketingsolutions\preview\Model\SetAdSetTargetingVideoPositioningRequest**](../Model/SetAdSetTargetingVideoPositioningRequest.md)| the new Video Positioning Targeting configuration | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetTargetingVideoPositioningSetResultResponse**](../Model/AdSetTargetingVideoPositioningSetResultResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startAdSets()`

```php
startAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\preview\Model\ResponsesAdSetId
```



Start the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\preview\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\preview\Model\RequestsAdSetId | All the ad sets to start

try {
    $result = $apiInstance->startAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->startAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_ad_set_id** | [**\criteo\api\marketingsolutions\preview\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to start | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stopAdSets()`

```php
stopAdSets($requests_ad_set_id): \criteo\api\marketingsolutions\preview\Model\ResponsesAdSetId
```



Stop the specified list of ad sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requests_ad_set_id = new \criteo\api\marketingsolutions\preview\Model\RequestsAdSetId(); // \criteo\api\marketingsolutions\preview\Model\RequestsAdSetId | All the ad sets to stop

try {
    $result = $apiInstance->stopAdSets($requests_ad_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->stopAdSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requests_ad_set_id** | [**\criteo\api\marketingsolutions\preview\Model\RequestsAdSetId**](../Model/RequestsAdSetId.md)| All the ad sets to stop | [optional] |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\ResponsesAdSetId**](../Model/ResponsesAdSetId.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAdSetAudience()`

```php
updateAdSetAudience($ad_set_id, $ad_set_audience_link_input_entity_v1): \criteo\api\marketingsolutions\preview\Model\AdSetAudienceLinkEntityV1Response
```



Link or unlink an audience with an ad set

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_set_id = 'ad_set_id_example'; // string | The ad set ID.
$ad_set_audience_link_input_entity_v1 = new \criteo\api\marketingsolutions\preview\Model\AdSetAudienceLinkInputEntityV1(); // \criteo\api\marketingsolutions\preview\Model\AdSetAudienceLinkInputEntityV1 | Ad set-Audience update request.

try {
    $result = $apiInstance->updateAdSetAudience($ad_set_id, $ad_set_audience_link_input_entity_v1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateAdSetAudience: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ad_set_id** | **string**| The ad set ID. | |
| **ad_set_audience_link_input_entity_v1** | [**\criteo\api\marketingsolutions\preview\Model\AdSetAudienceLinkInputEntityV1**](../Model/AdSetAudienceLinkInputEntityV1.md)| Ad set-Audience update request. | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\AdSetAudienceLinkEntityV1Response**](../Model/AdSetAudienceLinkEntityV1Response.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertOCIbrandSafetyRule()`

```php
upsertOCIbrandSafetyRule($oci_brand_safety_rule): \criteo\api\marketingsolutions\preview\Model\OciBrandSafetyResponse
```



Create or update a new or replace existing OCI brand-safety rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oci_brand_safety_rule = new \criteo\api\marketingsolutions\preview\Model\OciBrandSafetyRule(); // \criteo\api\marketingsolutions\preview\Model\OciBrandSafetyRule | OCI brand-safety rule input

try {
    $result = $apiInstance->upsertOCIbrandSafetyRule($oci_brand_safety_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->upsertOCIbrandSafetyRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oci_brand_safety_rule** | [**\criteo\api\marketingsolutions\preview\Model\OciBrandSafetyRule**](../Model/OciBrandSafetyRule.md)| OCI brand-safety rule input | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OciBrandSafetyResponse**](../Model/OciBrandSafetyResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `upsertOCItargetingRule()`

```php
upsertOCItargetingRule($oci_targeting_rule): \criteo\api\marketingsolutions\preview\Model\OciTargetingResponse
```



Create or update new or update existing OCI targeting rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth
$config = criteo\api\marketingsolutions\preview\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new criteo\api\marketingsolutions\preview\Api\CampaignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oci_targeting_rule = new \criteo\api\marketingsolutions\preview\Model\OciTargetingRule(); // \criteo\api\marketingsolutions\preview\Model\OciTargetingRule | OCI targeting rule input

try {
    $result = $apiInstance->upsertOCItargetingRule($oci_targeting_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->upsertOCItargetingRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oci_targeting_rule** | [**\criteo\api\marketingsolutions\preview\Model\OciTargetingRule**](../Model/OciTargetingRule.md)| OCI targeting rule input | |

### Return type

[**\criteo\api\marketingsolutions\preview\Model\OciTargetingResponse**](../Model/OciTargetingResponse.md)

### Authorization

[oauth](../../README.md#oauth), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

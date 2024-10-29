# 

## Introduction
API Client Libraries can facilitate your use of the Criteo API allowing you to build unique and customized solutions to serve your businesses and clients.
These libraries can reduce the amount of code you need to write in order to start accessing Criteo programmatically. They also can help expedite troubleshooting, should you encounter any issues.

More information on how to use Criteo API and these SDKs can be found at: [https://developers.criteo.com/](https://developers.criteo.com/).

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- Package version: 2024.10.0.241029
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

This project is tested with PHP 8.0.
However it should work fine with PHP 7.4 too.

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/):

either run the following command: `composer require criteo/criteo-api-marketingsolutions-sdk:2024.10.0.241029`

or add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/criteo/criteo-api-marketingsolutions-php-sdk.git"
    }
  ],
  "require": {
    "criteo/criteo-api-marketingsolutions-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/criteo-api-marketingsolutions-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer run-script test
```

## Example

Please see [test/ExampleApplication.php](test/ExampleApplication.php) for an example on how to perform a simple call.

## Documentation for API Endpoints

All URIs are relative to *https://api.criteo.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdvertiserApi* | [**apiPortfolioGet**](docs/Api/AdvertiserApi.md#apiportfolioget) | **GET** /2024-10/advertisers/me | 
*AnalyticsApi* | [**getAdsetReport**](docs/Api/AnalyticsApi.md#getadsetreport) | **POST** /2024-10/statistics/report | 
*AnalyticsApi* | [**getPlacementsReport**](docs/Api/AnalyticsApi.md#getplacementsreport) | **POST** /2024-10/placements/report | 
*AnalyticsApi* | [**getTransactionsReport**](docs/Api/AnalyticsApi.md#gettransactionsreport) | **POST** /2024-10/transactions/report | 
*AnalyticsApi* | [**getTransparencyReport**](docs/Api/AnalyticsApi.md#gettransparencyreport) | **POST** /2024-10/log-level/advertisers/{advertiser-id}/report | 
*AudienceApi* | [**bulkCreateAudienceSegments**](docs/Api/AudienceApi.md#bulkcreateaudiencesegments) | **POST** /2024-10/marketing-solutions/audience-segments/create | 
*AudienceApi* | [**bulkCreateAudiences**](docs/Api/AudienceApi.md#bulkcreateaudiences) | **POST** /2024-10/marketing-solutions/audiences/create | 
*AudienceApi* | [**bulkDeleteAudienceSegments**](docs/Api/AudienceApi.md#bulkdeleteaudiencesegments) | **POST** /2024-10/marketing-solutions/audience-segments/delete | 
*AudienceApi* | [**bulkDeleteAudiences**](docs/Api/AudienceApi.md#bulkdeleteaudiences) | **POST** /2024-10/marketing-solutions/audiences/delete | 
*AudienceApi* | [**bulkUpdateAudienceSegments**](docs/Api/AudienceApi.md#bulkupdateaudiencesegments) | **PATCH** /2024-10/marketing-solutions/audience-segments | 
*AudienceApi* | [**bulkUpdateAudiences**](docs/Api/AudienceApi.md#bulkupdateaudiences) | **PATCH** /2024-10/marketing-solutions/audiences | 
*AudienceApi* | [**call10AudiencesAudienceSegmentIdContactlistDelete**](docs/Api/AudienceApi.md#call10audiencesaudiencesegmentidcontactlistdelete) | **DELETE** /2024-10/audiences/{audience-segment-id}/contactlist | 
*AudienceApi* | [**call10AudiencesAudienceSegmentIdContactlistPatch**](docs/Api/AudienceApi.md#call10audiencesaudiencesegmentidcontactlistpatch) | **PATCH** /2024-10/audiences/{audience-segment-id}/contactlist | 
*AudienceApi* | [**call10MarketingSolutionsAudienceSegmentsAudienceSegmentIdContactListDelete**](docs/Api/AudienceApi.md#call10marketingsolutionsaudiencesegmentsaudiencesegmentidcontactlistdelete) | **DELETE** /2024-10/marketing-solutions/audience-segments/{audience-segment-id}/contact-list | 
*AudienceApi* | [**call10MarketingSolutionsAudienceSegmentsAudienceSegmentIdContactListPatch**](docs/Api/AudienceApi.md#call10marketingsolutionsaudiencesegmentsaudiencesegmentidcontactlistpatch) | **PATCH** /2024-10/marketing-solutions/audience-segments/{audience-segment-id}/contact-list | 
*AudienceApi* | [**computeAudienceSegmentsSizes**](docs/Api/AudienceApi.md#computeaudiencesegmentssizes) | **POST** /2024-10/marketing-solutions/audience-segments/compute-sizes | 
*AudienceApi* | [**computeAudiencesSizes**](docs/Api/AudienceApi.md#computeaudiencessizes) | **POST** /2024-10/marketing-solutions/audiences/compute-sizes | 
*AudienceApi* | [**estimateAudienceSegmentSize**](docs/Api/AudienceApi.md#estimateaudiencesegmentsize) | **POST** /2024-10/marketing-solutions/audience-segments/estimate-size | 
*AudienceApi* | [**estimateAudienceSize**](docs/Api/AudienceApi.md#estimateaudiencesize) | **POST** /2024-10/marketing-solutions/audiences/estimate-size | 
*AudienceApi* | [**getAudienceSegmentContactListStatistics**](docs/Api/AudienceApi.md#getaudiencesegmentcontactliststatistics) | **GET** /2024-10/marketing-solutions/audience-segments/{audience-segment-id}/contact-list/statistics | 
*AudienceApi* | [**getAudienceSegmentsInMarketBrands**](docs/Api/AudienceApi.md#getaudiencesegmentsinmarketbrands) | **GET** /2024-10/marketing-solutions/audience-segments/in-market-brands | 
*AudienceApi* | [**getAudienceSegmentsInMarketInterests**](docs/Api/AudienceApi.md#getaudiencesegmentsinmarketinterests) | **GET** /2024-10/marketing-solutions/audience-segments/in-market-interests | 
*AudienceApi* | [**searchAudienceSegments**](docs/Api/AudienceApi.md#searchaudiencesegments) | **POST** /2024-10/marketing-solutions/audience-segments/search | 
*AudienceApi* | [**searchAudiences**](docs/Api/AudienceApi.md#searchaudiences) | **POST** /2024-10/marketing-solutions/audiences/search | 
*CampaignApi* | [**createAdSetV24Q1**](docs/Api/CampaignApi.md#createadsetv24q1) | **POST** /2024-10/marketing-solutions/ad-sets | 
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /2024-10/marketing-solutions/campaigns | 
*CampaignApi* | [**getAdSetV24Q1**](docs/Api/CampaignApi.md#getadsetv24q1) | **GET** /2024-10/marketing-solutions/ad-sets/{ad-set-id} | 
*CampaignApi* | [**getCampaignV23Q1**](docs/Api/CampaignApi.md#getcampaignv23q1) | **GET** /2024-10/marketing-solutions/campaigns/{campaign-id} | 
*CampaignApi* | [**getCategoryBidList**](docs/Api/CampaignApi.md#getcategorybidlist) | **GET** /2024-10/marketing-solutions/ad-sets/{ad-set-id}/category-bids | 
*CampaignApi* | [**getDisplayMultipliers**](docs/Api/CampaignApi.md#getdisplaymultipliers) | **GET** /2024-10/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers | 
*CampaignApi* | [**patchAdSetsV24Q1**](docs/Api/CampaignApi.md#patchadsetsv24q1) | **PATCH** /2024-10/marketing-solutions/ad-sets | 
*CampaignApi* | [**patchCampaigns**](docs/Api/CampaignApi.md#patchcampaigns) | **PATCH** /2024-10/marketing-solutions/campaigns | 
*CampaignApi* | [**patchCategoryBidList**](docs/Api/CampaignApi.md#patchcategorybidlist) | **PATCH** /2024-10/marketing-solutions/ad-sets/{ad-set-id}/category-bids | 
*CampaignApi* | [**patchDisplayMultipliers**](docs/Api/CampaignApi.md#patchdisplaymultipliers) | **PATCH** /2024-10/marketing-solutions/ad-sets/{ad-set-id}/display-multipliers | 
*CampaignApi* | [**searchAdSetsV24Q1**](docs/Api/CampaignApi.md#searchadsetsv24q1) | **POST** /2024-10/marketing-solutions/ad-sets/search | 
*CampaignApi* | [**searchCampaignsV23Q1**](docs/Api/CampaignApi.md#searchcampaignsv23q1) | **POST** /2024-10/marketing-solutions/campaigns/search | 
*CampaignApi* | [**startAdSets**](docs/Api/CampaignApi.md#startadsets) | **POST** /2024-10/marketing-solutions/ad-sets/start | 
*CampaignApi* | [**stopAdSets**](docs/Api/CampaignApi.md#stopadsets) | **POST** /2024-10/marketing-solutions/ad-sets/stop | 
*CampaignApi* | [**updateAdSetAudience**](docs/Api/CampaignApi.md#updateadsetaudience) | **PUT** /2024-10/marketing-solutions/ad-sets/{ad-set-id}/audience | 
*CreativeApi* | [**createAdvertiserAd**](docs/Api/CreativeApi.md#createadvertiserad) | **POST** /2024-10/marketing-solutions/advertisers/{advertiser-id}/ads | 
*CreativeApi* | [**createAdvertiserCoupon**](docs/Api/CreativeApi.md#createadvertisercoupon) | **POST** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons | 
*CreativeApi* | [**createAdvertiserCreative**](docs/Api/CreativeApi.md#createadvertisercreative) | **POST** /2024-10/marketing-solutions/advertisers/{advertiser-id}/creatives | 
*CreativeApi* | [**deleteAd**](docs/Api/CreativeApi.md#deletead) | **DELETE** /2024-10/marketing-solutions/ads/{id} | 
*CreativeApi* | [**deleteAdvertiserCoupon**](docs/Api/CreativeApi.md#deleteadvertisercoupon) | **DELETE** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons/{id} | 
*CreativeApi* | [**deleteCreative**](docs/Api/CreativeApi.md#deletecreative) | **DELETE** /2024-10/marketing-solutions/creatives/{id} | 
*CreativeApi* | [**editAdvertiserCoupon**](docs/Api/CreativeApi.md#editadvertisercoupon) | **PUT** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons/{id} | 
*CreativeApi* | [**editCreative**](docs/Api/CreativeApi.md#editcreative) | **PUT** /2024-10/marketing-solutions/creatives/{id} | 
*CreativeApi* | [**generateCreativePreview**](docs/Api/CreativeApi.md#generatecreativepreview) | **POST** /2024-10/marketing-solutions/creatives/{id}/preview | 
*CreativeApi* | [**getAd**](docs/Api/CreativeApi.md#getad) | **GET** /2024-10/marketing-solutions/ads/{id} | 
*CreativeApi* | [**getAdvertiserAds**](docs/Api/CreativeApi.md#getadvertiserads) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/ads | 
*CreativeApi* | [**getAdvertiserCoupon**](docs/Api/CreativeApi.md#getadvertisercoupon) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons/{id} | 
*CreativeApi* | [**getAdvertiserCouponPreview**](docs/Api/CreativeApi.md#getadvertisercouponpreview) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons/{id}/preview | 
*CreativeApi* | [**getAdvertiserCouponSupportedSizes**](docs/Api/CreativeApi.md#getadvertisercouponsupportedsizes) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons-supported-sizes | 
*CreativeApi* | [**getAdvertiserCoupons**](docs/Api/CreativeApi.md#getadvertisercoupons) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/coupons | 
*CreativeApi* | [**getAdvertiserCreatives**](docs/Api/CreativeApi.md#getadvertisercreatives) | **GET** /2024-10/marketing-solutions/advertisers/{advertiser-id}/creatives | 
*CreativeApi* | [**getCreative**](docs/Api/CreativeApi.md#getcreative) | **GET** /2024-10/marketing-solutions/creatives/{id} | 
*GatewayApi* | [**getCurrentApplication**](docs/Api/GatewayApi.md#getcurrentapplication) | **GET** /2024-10/marketing-solutions/me | 


## Documentation For Models

 - [Ad](docs/Model/Ad.md)
 - [AdListResponse](docs/Model/AdListResponse.md)
 - [AdResource](docs/Model/AdResource.md)
 - [AdResponse](docs/Model/AdResponse.md)
 - [AdSetAudienceLinkEntityV1](docs/Model/AdSetAudienceLinkEntityV1.md)
 - [AdSetAudienceLinkEntityV1Resource](docs/Model/AdSetAudienceLinkEntityV1Resource.md)
 - [AdSetAudienceLinkEntityV1Response](docs/Model/AdSetAudienceLinkEntityV1Response.md)
 - [AdSetAudienceLinkInputEntityV1](docs/Model/AdSetAudienceLinkInputEntityV1.md)
 - [AdSetCategoryBid](docs/Model/AdSetCategoryBid.md)
 - [AdSetCategoryBidListResponse](docs/Model/AdSetCategoryBidListResponse.md)
 - [AdSetCategoryBidResource](docs/Model/AdSetCategoryBidResource.md)
 - [AdSetDeliveryLimitationsV24Q1](docs/Model/AdSetDeliveryLimitationsV24Q1.md)
 - [AdSetDisplayMultiplier](docs/Model/AdSetDisplayMultiplier.md)
 - [AdSetDisplayMultiplierListResponse](docs/Model/AdSetDisplayMultiplierListResponse.md)
 - [AdSetDisplayMultiplierResource](docs/Model/AdSetDisplayMultiplierResource.md)
 - [AdSetFrequencyCappingV24Q1](docs/Model/AdSetFrequencyCappingV24Q1.md)
 - [AdSetGeoLocationV24Q1](docs/Model/AdSetGeoLocationV24Q1.md)
 - [AdSetSearchFilterV24Q1](docs/Model/AdSetSearchFilterV24Q1.md)
 - [AdSetSearchRequestV24Q1](docs/Model/AdSetSearchRequestV24Q1.md)
 - [AdSetTargetingRuleV24Q1](docs/Model/AdSetTargetingRuleV24Q1.md)
 - [AdSetTargetingV24Q1](docs/Model/AdSetTargetingV24Q1.md)
 - [AdWrite](docs/Model/AdWrite.md)
 - [AdWriteRequest](docs/Model/AdWriteRequest.md)
 - [AdWriteResource](docs/Model/AdWriteResource.md)
 - [AdaptiveAttributes](docs/Model/AdaptiveAttributes.md)
 - [AdaptiveColors](docs/Model/AdaptiveColors.md)
 - [AdaptiveWriteAttributes](docs/Model/AdaptiveWriteAttributes.md)
 - [AlgebraNodeV1](docs/Model/AlgebraNodeV1.md)
 - [ApplicationSummaryModel](docs/Model/ApplicationSummaryModel.md)
 - [ApplicationSummaryModelResource](docs/Model/ApplicationSummaryModelResource.md)
 - [ApplicationSummaryModelResponse](docs/Model/ApplicationSummaryModelResponse.md)
 - [AudienceBulkCreateInputV1](docs/Model/AudienceBulkCreateInputV1.md)
 - [AudienceBulkDeleteInputV1](docs/Model/AudienceBulkDeleteInputV1.md)
 - [AudienceBulkUpdateInputV1](docs/Model/AudienceBulkUpdateInputV1.md)
 - [AudienceComputeSizeEntityV1Resource](docs/Model/AudienceComputeSizeEntityV1Resource.md)
 - [AudienceComputeSizesInputV1](docs/Model/AudienceComputeSizesInputV1.md)
 - [AudienceCreateEntityV1](docs/Model/AudienceCreateEntityV1.md)
 - [AudienceCreateEntityV1Resource](docs/Model/AudienceCreateEntityV1Resource.md)
 - [AudienceDeleteEntityV1Resource](docs/Model/AudienceDeleteEntityV1Resource.md)
 - [AudienceEntityV1](docs/Model/AudienceEntityV1.md)
 - [AudienceEntityV1AudienceSearchMetadataV1ListResponse](docs/Model/AudienceEntityV1AudienceSearchMetadataV1ListResponse.md)
 - [AudienceEntityV1ListResponse](docs/Model/AudienceEntityV1ListResponse.md)
 - [AudienceEntityV1Resource](docs/Model/AudienceEntityV1Resource.md)
 - [AudienceError](docs/Model/AudienceError.md)
 - [AudienceEstimateSizeEntityV1](docs/Model/AudienceEstimateSizeEntityV1.md)
 - [AudienceEstimateSizeEntityV1Resource](docs/Model/AudienceEstimateSizeEntityV1Resource.md)
 - [AudienceEstimateSizeInputV1](docs/Model/AudienceEstimateSizeInputV1.md)
 - [AudienceIdEntityV1ListResponse](docs/Model/AudienceIdEntityV1ListResponse.md)
 - [AudienceIdEntityV1Resource](docs/Model/AudienceIdEntityV1Resource.md)
 - [AudienceNameDescription](docs/Model/AudienceNameDescription.md)
 - [AudienceSearchEntityV1](docs/Model/AudienceSearchEntityV1.md)
 - [AudienceSearchEntityV1Resource](docs/Model/AudienceSearchEntityV1Resource.md)
 - [AudienceSearchInputV1](docs/Model/AudienceSearchInputV1.md)
 - [AudienceSearchMetadataV1](docs/Model/AudienceSearchMetadataV1.md)
 - [AudienceSegmentBulkCreateInputV1](docs/Model/AudienceSegmentBulkCreateInputV1.md)
 - [AudienceSegmentBulkDeleteInputV1](docs/Model/AudienceSegmentBulkDeleteInputV1.md)
 - [AudienceSegmentBulkUpdateInputV1](docs/Model/AudienceSegmentBulkUpdateInputV1.md)
 - [AudienceSegmentComputeSizeEntityV1Resource](docs/Model/AudienceSegmentComputeSizeEntityV1Resource.md)
 - [AudienceSegmentComputeSizesInputV1](docs/Model/AudienceSegmentComputeSizesInputV1.md)
 - [AudienceSegmentCreateEntityV1](docs/Model/AudienceSegmentCreateEntityV1.md)
 - [AudienceSegmentCreateEntityV1Resource](docs/Model/AudienceSegmentCreateEntityV1Resource.md)
 - [AudienceSegmentDeleteEntityV1Resource](docs/Model/AudienceSegmentDeleteEntityV1Resource.md)
 - [AudienceSegmentEntityV1](docs/Model/AudienceSegmentEntityV1.md)
 - [AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse](docs/Model/AudienceSegmentEntityV1AudienceSegmentSearchMetadataV1ListResponse.md)
 - [AudienceSegmentEntityV1ListResponse](docs/Model/AudienceSegmentEntityV1ListResponse.md)
 - [AudienceSegmentEntityV1Resource](docs/Model/AudienceSegmentEntityV1Resource.md)
 - [AudienceSegmentEstimateSizeInputV1](docs/Model/AudienceSegmentEstimateSizeInputV1.md)
 - [AudienceSegmentIdEntityV1ListResponse](docs/Model/AudienceSegmentIdEntityV1ListResponse.md)
 - [AudienceSegmentIdEntityV1Resource](docs/Model/AudienceSegmentIdEntityV1Resource.md)
 - [AudienceSegmentSearchEntityV1](docs/Model/AudienceSegmentSearchEntityV1.md)
 - [AudienceSegmentSearchEntityV1Resource](docs/Model/AudienceSegmentSearchEntityV1Resource.md)
 - [AudienceSegmentSearchInputV1](docs/Model/AudienceSegmentSearchInputV1.md)
 - [AudienceSegmentSearchMetadataV1](docs/Model/AudienceSegmentSearchMetadataV1.md)
 - [AudienceSegmentSizeEntityV1](docs/Model/AudienceSegmentSizeEntityV1.md)
 - [AudienceSegmentSizeEntityV1ListResponse](docs/Model/AudienceSegmentSizeEntityV1ListResponse.md)
 - [AudienceSegmentSizeEntityV1Resource](docs/Model/AudienceSegmentSizeEntityV1Resource.md)
 - [AudienceSegmentSizeEstimationEntityV1](docs/Model/AudienceSegmentSizeEstimationEntityV1.md)
 - [AudienceSegmentSizeEstimationEntityV1Resource](docs/Model/AudienceSegmentSizeEstimationEntityV1Resource.md)
 - [AudienceSegmentSizeEstimationV1](docs/Model/AudienceSegmentSizeEstimationV1.md)
 - [AudienceSegmentSizeEstimationV1Resource](docs/Model/AudienceSegmentSizeEstimationV1Resource.md)
 - [AudienceSegmentSizeEstimationV1Response](docs/Model/AudienceSegmentSizeEstimationV1Response.md)
 - [AudienceSegmentUpdateEntityV1](docs/Model/AudienceSegmentUpdateEntityV1.md)
 - [AudienceSegmentUpdateEntityV1Resource](docs/Model/AudienceSegmentUpdateEntityV1Resource.md)
 - [AudienceSizeEntityV1](docs/Model/AudienceSizeEntityV1.md)
 - [AudienceSizeEntityV1ListResponse](docs/Model/AudienceSizeEntityV1ListResponse.md)
 - [AudienceSizeEntityV1Resource](docs/Model/AudienceSizeEntityV1Resource.md)
 - [AudienceSizeEstimationV1](docs/Model/AudienceSizeEstimationV1.md)
 - [AudienceSizeEstimationV1Resource](docs/Model/AudienceSizeEstimationV1Resource.md)
 - [AudienceSizeEstimationV1Response](docs/Model/AudienceSizeEstimationV1Response.md)
 - [AudienceUpdateEntityV1](docs/Model/AudienceUpdateEntityV1.md)
 - [AudienceUpdateEntityV1Resource](docs/Model/AudienceUpdateEntityV1Resource.md)
 - [AudienceWarning](docs/Model/AudienceWarning.md)
 - [BasicAudienceDefinition](docs/Model/BasicAudienceDefinition.md)
 - [BehavioralV1](docs/Model/BehavioralV1.md)
 - [CampaignSearchFiltersV23Q1](docs/Model/CampaignSearchFiltersV23Q1.md)
 - [CampaignSearchRequestV23Q1](docs/Model/CampaignSearchRequestV23Q1.md)
 - [CampaignSpendLimitV23Q1](docs/Model/CampaignSpendLimitV23Q1.md)
 - [CampaignV23Q1](docs/Model/CampaignV23Q1.md)
 - [CampaignV23Q1ListResponse](docs/Model/CampaignV23Q1ListResponse.md)
 - [CampaignV23Q1Resource](docs/Model/CampaignV23Q1Resource.md)
 - [CampaignV23Q1Response](docs/Model/CampaignV23Q1Response.md)
 - [CommonProblem](docs/Model/CommonProblem.md)
 - [ContactListStatisticsEntityV1](docs/Model/ContactListStatisticsEntityV1.md)
 - [ContactListStatisticsEntityV1Resource](docs/Model/ContactListStatisticsEntityV1Resource.md)
 - [ContactListStatisticsEntityV1Response](docs/Model/ContactListStatisticsEntityV1Response.md)
 - [ContactListV1](docs/Model/ContactListV1.md)
 - [ContactlistAmendment](docs/Model/ContactlistAmendment.md)
 - [ContactlistAmendmentAttributes](docs/Model/ContactlistAmendmentAttributes.md)
 - [ContactlistAmendmentRequest](docs/Model/ContactlistAmendmentRequest.md)
 - [ContactlistOperation](docs/Model/ContactlistOperation.md)
 - [ContactlistOperationAttributes](docs/Model/ContactlistOperationAttributes.md)
 - [Coupon](docs/Model/Coupon.md)
 - [CouponListResponse](docs/Model/CouponListResponse.md)
 - [CouponResource](docs/Model/CouponResource.md)
 - [CouponResponse](docs/Model/CouponResponse.md)
 - [CouponSupportedSizes](docs/Model/CouponSupportedSizes.md)
 - [CouponSupportedSizesResource](docs/Model/CouponSupportedSizesResource.md)
 - [CouponSupportedSizesResponse](docs/Model/CouponSupportedSizesResponse.md)
 - [CreateAdSetBiddingV24Q1](docs/Model/CreateAdSetBiddingV24Q1.md)
 - [CreateAdSetBudgetV24Q1](docs/Model/CreateAdSetBudgetV24Q1.md)
 - [CreateAdSetGeoLocationV24Q1](docs/Model/CreateAdSetGeoLocationV24Q1.md)
 - [CreateAdSetScheduleV24Q1](docs/Model/CreateAdSetScheduleV24Q1.md)
 - [CreateAdSetTargetingV24Q1](docs/Model/CreateAdSetTargetingV24Q1.md)
 - [CreateAdSetV24Q1](docs/Model/CreateAdSetV24Q1.md)
 - [CreateAdSetV24Q1Request](docs/Model/CreateAdSetV24Q1Request.md)
 - [CreateAdSetV24Q1Resource](docs/Model/CreateAdSetV24Q1Resource.md)
 - [CreateCampaign](docs/Model/CreateCampaign.md)
 - [CreateCampaignRequest](docs/Model/CreateCampaignRequest.md)
 - [CreateCampaignResource](docs/Model/CreateCampaignResource.md)
 - [CreateCampaignSpendLimit](docs/Model/CreateCampaignSpendLimit.md)
 - [CreateCoupon](docs/Model/CreateCoupon.md)
 - [CreateCouponRequest](docs/Model/CreateCouponRequest.md)
 - [CreateCouponResource](docs/Model/CreateCouponResource.md)
 - [CreateImageSlide](docs/Model/CreateImageSlide.md)
 - [Creative](docs/Model/Creative.md)
 - [CreativeListResponse](docs/Model/CreativeListResponse.md)
 - [CreativeResource](docs/Model/CreativeResource.md)
 - [CreativeResponse](docs/Model/CreativeResponse.md)
 - [CreativeWrite](docs/Model/CreativeWrite.md)
 - [CreativeWriteRequest](docs/Model/CreativeWriteRequest.md)
 - [CreativeWriteResource](docs/Model/CreativeWriteResource.md)
 - [CriteoApiError](docs/Model/CriteoApiError.md)
 - [CriteoApiWarning](docs/Model/CriteoApiWarning.md)
 - [DeleteAudienceContactListResponse](docs/Model/DeleteAudienceContactListResponse.md)
 - [DynamicAttributes](docs/Model/DynamicAttributes.md)
 - [DynamicWriteAttributes](docs/Model/DynamicWriteAttributes.md)
 - [EntityOfPortfolioMessage](docs/Model/EntityOfPortfolioMessage.md)
 - [ErrorCodeResponse](docs/Model/ErrorCodeResponse.md)
 - [GetPortfolioResponse](docs/Model/GetPortfolioResponse.md)
 - [HtmlTagAttributes](docs/Model/HtmlTagAttributes.md)
 - [HtmlTagWriteAttributes](docs/Model/HtmlTagWriteAttributes.md)
 - [ImageAttributes](docs/Model/ImageAttributes.md)
 - [ImageSet](docs/Model/ImageSet.md)
 - [ImageSetBase64](docs/Model/ImageSetBase64.md)
 - [ImageShape](docs/Model/ImageShape.md)
 - [ImageSlide](docs/Model/ImageSlide.md)
 - [ImageWriteAttributes](docs/Model/ImageWriteAttributes.md)
 - [InMarketAudienceSegmentBrandEntityV1](docs/Model/InMarketAudienceSegmentBrandEntityV1.md)
 - [InMarketAudienceSegmentBrandEntityV1ListResponse](docs/Model/InMarketAudienceSegmentBrandEntityV1ListResponse.md)
 - [InMarketAudienceSegmentBrandEntityV1Resource](docs/Model/InMarketAudienceSegmentBrandEntityV1Resource.md)
 - [InMarketAudienceSegmentInterestEntityV1](docs/Model/InMarketAudienceSegmentInterestEntityV1.md)
 - [InMarketAudienceSegmentInterestEntityV1ListResponse](docs/Model/InMarketAudienceSegmentInterestEntityV1ListResponse.md)
 - [InMarketAudienceSegmentInterestEntityV1Resource](docs/Model/InMarketAudienceSegmentInterestEntityV1Resource.md)
 - [InMarketCreateV1](docs/Model/InMarketCreateV1.md)
 - [InMarketSizeEstimationV1](docs/Model/InMarketSizeEstimationV1.md)
 - [InMarketUpdateV1](docs/Model/InMarketUpdateV1.md)
 - [InMarketV1](docs/Model/InMarketV1.md)
 - [LocationCreateV1](docs/Model/LocationCreateV1.md)
 - [LocationSizeEstimationV1](docs/Model/LocationSizeEstimationV1.md)
 - [LocationUpdateV1](docs/Model/LocationUpdateV1.md)
 - [LocationV1](docs/Model/LocationV1.md)
 - [LookalikeCreateV1](docs/Model/LookalikeCreateV1.md)
 - [LookalikeUpdateV1](docs/Model/LookalikeUpdateV1.md)
 - [LookalikeV1](docs/Model/LookalikeV1.md)
 - [ModifyAudienceResponse](docs/Model/ModifyAudienceResponse.md)
 - [NillableAdSetTargetingRuleV24Q1](docs/Model/NillableAdSetTargetingRuleV24Q1.md)
 - [NillableAdSetTargetingRuleV24Q1Value](docs/Model/NillableAdSetTargetingRuleV24Q1Value.md)
 - [NillableDateTime](docs/Model/NillableDateTime.md)
 - [NillableDecimal](docs/Model/NillableDecimal.md)
 - [NillableGenderV1](docs/Model/NillableGenderV1.md)
 - [NillableInt32](docs/Model/NillableInt32.md)
 - [NillableString](docs/Model/NillableString.md)
 - [Outcome](docs/Model/Outcome.md)
 - [PatchAdSetBiddingV24Q1](docs/Model/PatchAdSetBiddingV24Q1.md)
 - [PatchAdSetBudgetV24Q1](docs/Model/PatchAdSetBudgetV24Q1.md)
 - [PatchAdSetCategoryBid](docs/Model/PatchAdSetCategoryBid.md)
 - [PatchAdSetCategoryBidListRequest](docs/Model/PatchAdSetCategoryBidListRequest.md)
 - [PatchAdSetCategoryBidResource](docs/Model/PatchAdSetCategoryBidResource.md)
 - [PatchAdSetCategoryBidResultListResponse](docs/Model/PatchAdSetCategoryBidResultListResponse.md)
 - [PatchAdSetCategoryBidResultResource](docs/Model/PatchAdSetCategoryBidResultResource.md)
 - [PatchAdSetDisplayMultiplier](docs/Model/PatchAdSetDisplayMultiplier.md)
 - [PatchAdSetDisplayMultiplierListRequest](docs/Model/PatchAdSetDisplayMultiplierListRequest.md)
 - [PatchAdSetDisplayMultiplierResource](docs/Model/PatchAdSetDisplayMultiplierResource.md)
 - [PatchAdSetDisplayMultiplierResultListResponse](docs/Model/PatchAdSetDisplayMultiplierResultListResponse.md)
 - [PatchAdSetDisplayMultiplierResultResource](docs/Model/PatchAdSetDisplayMultiplierResultResource.md)
 - [PatchAdSetSchedulingV24Q1](docs/Model/PatchAdSetSchedulingV24Q1.md)
 - [PatchAdSetV24Q1](docs/Model/PatchAdSetV24Q1.md)
 - [PatchCampaign](docs/Model/PatchCampaign.md)
 - [PatchCampaignListRequest](docs/Model/PatchCampaignListRequest.md)
 - [PatchCampaignSpendLimit](docs/Model/PatchCampaignSpendLimit.md)
 - [PatchCampaignWriteResource](docs/Model/PatchCampaignWriteResource.md)
 - [PatchResultCampaignListResponse](docs/Model/PatchResultCampaignListResponse.md)
 - [PatchResultCampaignReadResource](docs/Model/PatchResultCampaignReadResource.md)
 - [PlacementsReportQueryMessage](docs/Model/PlacementsReportQueryMessage.md)
 - [PlacementsReportQueryMessageListRequest](docs/Model/PlacementsReportQueryMessageListRequest.md)
 - [PlacementsReportQueryMessageResource](docs/Model/PlacementsReportQueryMessageResource.md)
 - [PointOfInterestV1](docs/Model/PointOfInterestV1.md)
 - [PortfolioMessage](docs/Model/PortfolioMessage.md)
 - [ProspectingCreateV1](docs/Model/ProspectingCreateV1.md)
 - [ProspectingUpdateV1](docs/Model/ProspectingUpdateV1.md)
 - [ProspectingV1](docs/Model/ProspectingV1.md)
 - [ReadAdSetBiddingV24Q1](docs/Model/ReadAdSetBiddingV24Q1.md)
 - [ReadAdSetBudgetV24Q1](docs/Model/ReadAdSetBudgetV24Q1.md)
 - [ReadAdSetScheduleV24Q1](docs/Model/ReadAdSetScheduleV24Q1.md)
 - [ReadAdSetV24Q1](docs/Model/ReadAdSetV24Q1.md)
 - [ReadModelAdSetId](docs/Model/ReadModelAdSetId.md)
 - [ReadModelAdSetIdV24Q1](docs/Model/ReadModelAdSetIdV24Q1.md)
 - [ReadModelReadAdSetV24Q1](docs/Model/ReadModelReadAdSetV24Q1.md)
 - [RequestsAdSetId](docs/Model/RequestsAdSetId.md)
 - [RequestsPatchAdSetV24Q1](docs/Model/RequestsPatchAdSetV24Q1.md)
 - [ResponseReadAdSetV24Q1](docs/Model/ResponseReadAdSetV24Q1.md)
 - [ResponsesAdSetId](docs/Model/ResponsesAdSetId.md)
 - [ResponsesAdSetIdV24Q1](docs/Model/ResponsesAdSetIdV24Q1.md)
 - [ResponsesReadAdSetV24Q1](docs/Model/ResponsesReadAdSetV24Q1.md)
 - [RetargetingCreateV1](docs/Model/RetargetingCreateV1.md)
 - [RetargetingUpdateV1](docs/Model/RetargetingUpdateV1.md)
 - [RetargetingV1](docs/Model/RetargetingV1.md)
 - [Size](docs/Model/Size.md)
 - [StatisticsReportQueryMessage](docs/Model/StatisticsReportQueryMessage.md)
 - [Tag](docs/Model/Tag.md)
 - [TransactionsReportQueryMessage](docs/Model/TransactionsReportQueryMessage.md)
 - [TransactionsReportQueryMessageListRequest](docs/Model/TransactionsReportQueryMessageListRequest.md)
 - [TransactionsReportQueryMessageResource](docs/Model/TransactionsReportQueryMessageResource.md)
 - [TransparencyQueryMessage](docs/Model/TransparencyQueryMessage.md)
 - [TransparencyReport](docs/Model/TransparencyReport.md)
 - [TransparencyReportFile](docs/Model/TransparencyReportFile.md)
 - [TransparencyReportListResponse](docs/Model/TransparencyReportListResponse.md)
 - [TransparencyReportResource](docs/Model/TransparencyReportResource.md)
 - [UpdateCoupon](docs/Model/UpdateCoupon.md)
 - [UpdateCouponRequest](docs/Model/UpdateCouponRequest.md)
 - [UpdateCouponResource](docs/Model/UpdateCouponResource.md)
 - [VideoDetail](docs/Model/VideoDetail.md)
 - [WriteModelAdSetId](docs/Model/WriteModelAdSetId.md)
 - [WriteModelPatchAdSetV24Q1](docs/Model/WriteModelPatchAdSetV24Q1.md)


## Documentation For Authorization



### oauth


- **Type**: OAuth
- **Flow**: application
- **Authorization URL**: 
- **Scopes**: N/A



### oauth


- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://api.criteo.com/oauth2
- **Scopes**: N/A


## Author
[Criteo](https://www.criteo.com/)

## Disclaimer
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.


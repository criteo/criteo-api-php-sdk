# # Coupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the Coupon | [optional]
**description** | **string** | The description of the Coupon | [optional]
**author** | **string** | The login of the person who created this Coupon | [optional]
**advertiser_id** | **string** | Advertiser linked to the Coupon | [optional]
**ad_set_id** | **string** | The id of the Ad Set on which the Coupon is applied to | [optional]
**landing_page_url** | **string** | Web redirection of the landing page url | [optional]
**start_date** | **string** | The date when the Coupon will be launched  String must be in ISO8601 format | [optional]
**end_date** | **string** | The date when when we will stop to show this Coupon. If the end date is not specified (i.e. null) then the Coupon will go on forever  String must be in ISO8601 format | [optional]
**format** | **string** | Format of the Coupon, it can have two values: \&quot;FullFrame\&quot; or \&quot;LogoZone\&quot; | [optional]
**status** | **string** | The status of the Coupon | [optional]
**images** | [**\criteo\api\marketingsolutions\v2025_01\Model\ImageSlide[]**](ImageSlide.md) | List of slides containing the image URLs | [optional]
**show_every** | **int** | Show the Coupon every N seconds (between 1 and 10) | [optional]
**show_duration** | **int** | Show Coupon for a duration of N seconds (between 1 and 5) | [optional]
**rotations_number** | **int** | Number of rotations for the Coupons (from 1 to 10 times) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

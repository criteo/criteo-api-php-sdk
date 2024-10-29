# # AdaptiveWriteAttributes

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**layouts** | **string[]** | The Adaptive layouts that are enabled.  It can contain any of the following values: \&quot;Editorial\&quot;, “Montage“, \&quot;InBannerVideo\&quot;. |
**logo_base64_string** | **string** | Logo image as a base-64 encoded string |
**headline_text** | **string** | The headline text of the banner |
**headline_font** | **string** | Font of the headline  Valid supported font like \&quot;Arial\&quot; |
**description_text** | **string** | The description text of the banner |
**description_font** | **string** | Font of the description  Valid supported font like \&quot;Arial\&quot; |
**calls_to_action** | **string[]** | A Call-to-Action (CTA) is an action-driven instruction to your audience intended to provoke an immediate  response, such as “Buy now” or “Go!”. |
**colors** | [**\criteo\api\marketingsolutions\v2024_10\Model\AdaptiveColors**](AdaptiveColors.md) |  |
**image_sets_base64** | [**\criteo\api\marketingsolutions\v2024_10\Model\ImageSetBase64[]**](ImageSetBase64.md) | Multiple image sets, each image set consists of multiple images as a base-64 encoded string and a headline text. | [optional]
**image_display** | **string** | Value can be \&quot;ShowFullImage\&quot; or \&quot;ZoomOnImage\&quot;. Choose whether your image set should fit inside the allocated  space (\&quot;ShowFullImage\&quot;) or whether it should fill that space (\&quot;ZoomOnImage\&quot;). If you choose ZoomOnImage, there may be some  image cropping. | [optional]
**video_base64_strings** | **string[]** | Multiple videos potentially in different shapes, each video is a base-64 encoded string. | [optional]
**landing_page_url** | **string** | Web redirection of the landing page url. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

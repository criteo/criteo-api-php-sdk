# # ReportOkResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the operation. The operation is completed when the status is one of (VALIDATED,VALIDATED_WITH_ERRORS,FAILED) |
**import_request_timestamp** | **int** | The date when the original batch request was sent. |
**number_of_products_in_the_batch** | **int** | The number of products present in the batch. |
**number_of_products_upserted** | **int** | The number of products upserted. |
**number_of_products_deleted** | **int** | The number of products deleted. |
**number_of_products_with_errors** | **int** | The number of products with errors. |
**error_details** | [**\criteo\api\marketingsolutions\preview\Model\ReportDetailErrors[]**](ReportDetailErrors.md) | The list of errors with details. |
**number_of_products_with_warnings** | **int** | The number of products with Warnings. |
**warning_details** | [**\criteo\api\marketingsolutions\preview\Model\ReportDetailWarnings[]**](ReportDetailWarnings.md) | The list of Warnings with details. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

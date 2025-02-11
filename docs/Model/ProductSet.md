# # ProductSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dataset_id** | **string** | The dataset to which the product set belong |
**name** | **string** | The name of the product set |
**minimum_number_of_products** | **int** | Minimum amount of products that should match the product set to consider it valid.  Greater or equal than one. |
**status** | **string** | The status of the product set |
**number_of_products** | **int** | The number of product matching the product set.  Can be null for newly created product set. |
**creation_date** | **string** | The creation date of the product set (UTC time in ISO8601 format). Example: \&quot;02/25/2022 14:51:26\&quot;.  Can be null if the value isn&#39;t available. |
**rules** | [**\criteo\api\marketingsolutions\preview\Model\ProductSetRule[]**](ProductSetRule.md) | The rules identifying the product belonging to the set |
**client_type** | **string** | The client type of the product set |
**keep_variant_products** | **bool** |  |
**id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

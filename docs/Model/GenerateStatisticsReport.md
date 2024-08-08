# # GenerateStatisticsReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**advertiser_ids** | **string[]** | The list of advertiser ids | [optional]
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional]
**dimensions** | **string[]** | The dimensions for the report. |
**metrics** | **string[]** | The list of metrics to report. |
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). | [optional]
**ad_set_ids** | **string[]** | The list of adSets ids. If empty, all the adSets will be fetched | [optional]
**ad_set_names** | **string[]** | The list of adSets names. If empty, all the adSets will be fetched | [optional]
**ad_set_status** | **string[]** | The list of adSets status. If empty, all the adSets will be fetched | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# # GenerateAudiencePerformanceReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_date** | **\DateTime** | Start date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**end_date** | **\DateTime** | End date of the report. Date component of ISO 8061 format, any time or timezone component is ignored. |
**advertiser_id** | **string** | The advertiser id |
**timezone** | **string** | The timezone used for the report. Timezone Database format (Tz). | [optional]
**dimension** | **string** | The dimension for the report. |
**metrics** | **string[]** | The list of metrics to report. |
**currency** | **string** | The currency used for the report. ISO 4217 code (three-letter capitals). | [optional]
**ad_set_ids** | **string[]** | The list of adSets ids. If empty, all the adSets will be fetched. | [optional]
**audience_ids** | **string[]** | The list of Audiences ids. If empty, all the Audiences will be fetched. | [optional]
**segments_ids** | **string[]** | The list of Segments ids. If empty, all the segments will be fetched. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

# PTV_Service_Hour

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_hour_type** | **string** | Type of service hour. Valid values are: Standard, Exception or Special. | 
**valid_from** | [**\DateTime**](\DateTime.md) | Date time where from this entry is valid. | [optional] 
**valid_to** | [**\DateTime**](\DateTime.md) | Date time to this entry is valid. | [optional] 
**is_closed** | **bool** | Set to true to present a time between the valid from and to times as closed. | [optional] 
**valid_for_now** | **bool** | Set to true to present that this entry is valid for now. | [optional] 
**additional_information** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information. (Max.Length: 100). | [optional] 
**opening_hour** | [**PTV_Daily_Opening_Time[]**](PTV_Daily_Opening_Time.md) | List of servicing hours (open and closes times). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# PTV_Service_Service_Channel_By_Source

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_channel_source_id** | **string** | The external source id for service channel. | 
**description** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel relationship descriptions. | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of connection related service hours. | [optional] 
**contact_details** | [**PTV_Contact_Details_In_Base**](PTV_Contact_Details_In_Base.md) | List of connection related contact details. | [optional] 
**delete_service_charge_type** | **bool** | Indicates if value for property ServiceChargeType should be deleted. | [optional] 
**delete_all_descriptions** | **bool** | Indicates if all descriptions should be deleted. | [optional] 
**delete_all_service_hours** | **bool** | Gets or sets a value indicating whether all service hours should be deleted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



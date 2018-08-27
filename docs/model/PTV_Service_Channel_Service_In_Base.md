# PTV_Service_Channel_Service_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_id** | **string** | PTV service channel identifier. | 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other | [optional] 
**description** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel relationship descriptions. | [optional] 
**extra_types** | [**PTV_Extra_Type[]**](PTV_Extra_Type.md) | The extra types related to service and service channel connection. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of connection related service hours. | [optional] 
**contact_details** | [**PTV_Contact_Details_In_Base**](PTV_Contact_Details_In_Base.md) | List of connection related service hours. | [optional] 
**delete_service_charge_type** | **bool** | Indicates if value for property ServiceChargeType should be deleted. | [optional] 
**delete_all_extra_types** | **bool** | Indicates if all extra types should be deleted. | [optional] 
**delete_all_descriptions** | **bool** | Indicates if all descriptions should be deleted. | [optional] 
**delete_all_service_hours** | **bool** | Gets or sets a value indicating whether all service hours should be delted. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



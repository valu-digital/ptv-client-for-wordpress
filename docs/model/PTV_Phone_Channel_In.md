# PTV_Phone_Channel_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**organization_id** | **string** | PTV organization identifier of organization responsible for this channel. | 
**service_channel_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of service channel names. (Max.Length: 100). | 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | Localized list of service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**phone_numbers** | [**PTV_Phone_With_Type[]**](PTV_Phone_With_Type.md) | List of phone numbers for the service channel. | [optional] 
**urls** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized urls. (Max.Length: 500). | [optional] 
**support_emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**is_visible_for_all** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



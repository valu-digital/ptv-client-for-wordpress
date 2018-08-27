# PTV_Service_Location_Channel_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**organization_id** | **string** | PTV organization identifier for organization responsible for this service channel. | [optional] 
**service_channel_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of service channel names. (Max.Length: 100). | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List email addresses for the service channel. (Max.Length: 100). | [optional] 
**fax_numbers** | [**PTV_Phone_Simple[]**](PTV_Phone_Simple.md) | Service location contact fax numbers. | [optional] 
**phone_numbers** | [**PTV_Phone[]**](PTV_Phone.md) | List of phone numbers for the service channel. Includes also fax numbers. | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of service channel web pages. | [optional] 
**addresses** | [**PTV_Address_With_Moving_In[]**](PTV_Address_With_Moving_In.md) | List of service location addresses. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**delete_all_emails** | **bool** | Set to true to delete emails. The email property should be empty when this property is set to true. | [optional] 
**delete_all_phone_numbers** | **bool** | Set to true to delete phone number. The prohone property should be empty when this property is set to true. | [optional] 
**delete_all_fax_numbers** | **bool** | Set to true to delete fax number. The fax property should be empty when this property is set to true. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**is_visible_for_all** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**delete_all_web_pages** | **bool** | Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true. | [optional] 
**delete_all_service_hours** | **bool** | Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# PTV_Service_Location_Channel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV identifier for the service channel. | [optional] 
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**service_channel_type** | **string** | Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation. | [optional] 
**organization_id** | **string** | PTV organization identifier responsible for the channel. | [optional] 
**service_channel_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | Localized list of service channel names. | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area[]**](PTV_Area.md) | List of service channel areas. | [optional] 
**phone_numbers** | [**PTV_Phone_With_Type[]**](PTV_Phone_With_Type.md) | List of phone numbers for the service channel. Includes also fax numbers. | [optional] 
**emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List email addresses for the service channel. (Max.Length: 100). | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of service channel web pages. | [optional] 
**addresses** | [**PTV_Address_With_Moving[]**](PTV_Address_With_Moving.md) | List of service location addresses. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**services** | [**PTV_Service_Channel_Service[]**](PTV_Service_Channel_Service.md) | List of linked services including relationship data. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



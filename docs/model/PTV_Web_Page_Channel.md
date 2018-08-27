# PTV_Web_Page_Channel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV identifier for the service channel. | [optional] 
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**service_channel_type** | **string** | Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation. | [optional] 
**organization_id** | **string** | PTV organization identifier responsible for the channel. | [optional] 
**service_channel_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | Localized list of service channel names. | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**urls** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized urls. | [optional] 
**support_phones** | [**PTV_Phone[]**](PTV_Phone.md) | List of support phone numbers for the service channel. | [optional] 
**support_emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of service channel web pages. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**services** | [**PTV_Service_Channel_Service[]**](PTV_Service_Channel_Service.md) | List of linked services including relationship data. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



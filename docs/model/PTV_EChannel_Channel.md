# PTV_EChannel_Channel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV identifier for the service channel. | [optional] 
**service_channel_type** | **string** | Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation. | [optional] 
**organization_id** | **string** | PTV organization identifier responsible for the channel. | [optional] 
**service_channel_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | Localized list of service channel names. | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area[]**](PTV_Area.md) | List of service channel areas. | [optional] 
**signature_quantity** | **int** | How many signatures are required. | [optional] 
**requires_signature** | **bool** | Is signature required. | [optional] 
**requires_authentication** | **bool** | Does the electronic channel require authentication. | [optional] 
**urls** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of channel urls. | [optional] 
**attachments** | [**PTV_Attachment_With_Type[]**](PTV_Attachment_With_Type.md) | List of attachments. | [optional] 
**support_phones** | [**PTV_Phone[]**](PTV_Phone.md) | List of support phone numbers for the service channel. | [optional] 
**support_emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of service channel web pages. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



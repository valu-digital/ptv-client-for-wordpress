# PTV_EChannel_Channel_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**organization_id** | **string** | PTV organization identifier for organization responsible for this service channel. | [optional] 
**service_channel_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of service channel names. (Max.Length: 100). | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**signature_quantity** | **string** | How many signatures are required (number). Required if RequiresSignature is true. | [optional] 
**requires_signature** | **bool** | Signature required. | [optional] 
**requires_authentication** | **bool** | Does the service require authentication. | 
**urls** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized urls. (Max.Length: 500). | [optional] 
**attachments** | [**PTV_Attachment[]**](PTV_Attachment.md) | List of attachments. | [optional] 
**support_phones** | [**PTV_Phone[]**](PTV_Phone.md) | List of support phone numbers for the service channel. | [optional] 
**support_emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**is_visible_for_all** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**delete_all_attachments** | **bool** | Set to true to delete all existing attachments. The attachments collection should be empty when this property is set to true. | [optional] 
**delete_all_web_pages** | **bool** | Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true. | [optional] 
**delete_all_service_hours** | **bool** | Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true. | [optional] 
**delete_all_support_emails** | **bool** | Set to true to delete all existing support email addresses for the service channel. The SupportEmails collection should be empty when this property is set to true. | [optional] 
**delete_all_support_phones** | **bool** | Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



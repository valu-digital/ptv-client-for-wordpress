# PTV_Printable_Form_Channel_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**organization_id** | **string** | PTV organization identifier for organization responsible for this service channel. | [optional] 
**service_channel_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of service channel names. (Max.Length: 100). | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**form_identifier** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized form identifiers. One per language. (Max.Length: 100). | [optional] 
**form_receiver** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized form receivers. One per language. (Max.Length: 100). | [optional] 
**delivery_address** | [**PTV_Address_Delivery_In**](PTV_Address_Delivery_In.md) | Form delivery address. | [optional] 
**channel_urls** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized channel urls. (Max.Length: 500). | [optional] 
**attachments** | [**PTV_Attachment[]**](PTV_Attachment.md) | List of attachments. | [optional] 
**support_phones** | [**PTV_Phone[]**](PTV_Phone.md) | List of support phone numbers for the service channel. | [optional] 
**delete_delivery_address** | **bool** | Set to true to delete all existing delivery address for the service channel. The DeliveryAddress should be empty when this property is set to true. | [optional] 
**support_emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**delete_all_channel_urls** | **bool** | Set to true to delete all existing channel urls for the service channel. The ChannelUrls collection should be empty when this property is set to true. | [optional] 
**delete_all_attachments** | **bool** | Set to true to delete all existing attachments for the service channel. The Attachments collection should be empty when this property is set to true. | [optional] 
**delete_all_form_identifiers** | **bool** | Set to true to delete all existing form identifiers for the service channel. The form identifiers collection should be empty when this property is set to true. | [optional] 
**delete_all_form_receivers** | **bool** | Set to true to delete all existing form receivers for the service channel. The form receivers collection should be empty when this property is set to true. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**is_visible_for_all** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**delete_all_support_emails** | **bool** | Set to true to delete all existing support email addresses for the service channel. The SupportEmails collection should be empty when this property is set to true. | [optional] 
**delete_all_support_phones** | **bool** | Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



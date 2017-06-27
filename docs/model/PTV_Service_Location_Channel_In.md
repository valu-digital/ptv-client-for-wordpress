# PTV_Service_Location_Channel_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for this service channel. | [optional] 
**organization_id** | **string** | PTV organization identifier of organization responsible for this channel. | 
**service_channel_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service channel names. (Max.Length: 100). | [optional] 
**service_channel_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**emails** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List email addresses for the service channel. (Max.Length: 100). | [optional] 
**fax_numbers** | [**PTV_Phone_Simple[]**](PTV_Phone_Simple.md) | Service location contact fax numbers. | [optional] 
**phone_numbers** | [**PTV_Phone[]**](PTV_Phone.md) | List of phone numbers for the service channel. Includes also fax numbers. | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**phone_service_charge** | **bool** | Is the phone service charged for. This property is not used in the API anymore. Do not use. | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of service channel web pages. | [optional] 
**addresses** | [**PTV_Address_With_Type_In[]**](PTV_Address_With_Type_In.md) | List of visiting addresses. | [optional] 
**service_hours** | [**PTV_Service_Hour[]**](PTV_Service_Hour.md) | List of service channel service hours. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft or Published. | 
**is_visible_for_all** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



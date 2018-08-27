# PTV_Address_With_Foreign_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Address type, Visiting or Postal. | 
**sub_type** | **string** | Address sub type, Street, PostOfficeBox or Foreign. | 
**post_office_box_address** | [**PTV_Post_Office_Box_In**](PTV_Post_Office_Box_In.md) | Post office box address | [optional] 
**street_address** | [**PTV_Street_Address_With_Coordinates_In**](PTV_Street_Address_With_Coordinates_In.md) | Street address. | [optional] 
**foreign_address** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of foreign address information. (Max.Length: 500). | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# PTV_Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Address type, Visiting or Postal. | [optional] 
**sub_type** | **string** | Address sub type, Street, PostOfficeBox or Foreign. | [optional] 
**post_office_box_address** | [**PTV_Post_Office_Box**](PTV_Post_Office_Box.md) | Post office box address | [optional] 
**street_address** | [**PTV_Street_Address_With_Coordinates**](PTV_Street_Address_With_Coordinates.md) | Street address. | [optional] 
**foreign_address** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of foreign address information. | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



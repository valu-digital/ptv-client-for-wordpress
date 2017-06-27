# PTV_Address_With_Type_And_Coordinates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**latitude** | **string** | Service location latitude coordinate. | [optional] 
**longitude** | **string** | Service location longitude coordinate. | [optional] 
**coordinate_state** | **string** | State of coordinates. Coordinates are fetched from a service provided by Maanmittauslaitos (WFS).  Possible values are: Loading, Ok, Failed, NotReceived, EmptyInputReceived, MultipleResultsReceived, WrongFormatReceived or EnteredByUser. | [optional] 
**type** | **string** | Address type, Visiting or Postal. | 
**post_office_box** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Post office box like PL 310 | [optional] 
**postal_code** | **string** | Postal code, for example 00010. | 
**post_office** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized Post offices, for example Helsinki, Helsingfors. | [optional] 
**street_address** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized street addresses. | [optional] 
**street_number** | **string** | Street number for street address. | [optional] 
**municipality** | [**PTV_Municipality**](PTV_Municipality.md) | Municipality including municipality code and a localized list of municipality names. | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 
**additional_informations** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information about the address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



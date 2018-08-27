# PTV_Street_Address_With_Coordinates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**street** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized street addresses. (Max.Length: 100). | [optional] 
**street_number** | **string** | Street number for street address. (Max.Length: 30). | [optional] 
**postal_code** | **string** | Postal code, for example 00100. | 
**post_office** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized Post offices, for example Helsinki, Helsingfors. | [optional] 
**municipality** | [**PTV_Municipality**](PTV_Municipality.md) | Municipality code (e.g. 091). | [optional] 
**additional_information** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information about the address. (Max.Length: 150). | [optional] 
**latitude** | **string** | Location latitude coordinate. | [optional] 
**longitude** | **string** | Location longitude coordinate. | [optional] 
**coordinate_state** | **string** | State of coordinates. Coordinates are fetched from a service provided by Maanmittauslaitos (WFS).  Possible values are: Loading, Ok, Failed, NotReceived, EmptyInputReceived, MultipleResultsReceived, WrongFormatReceived or EnteredByUser. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



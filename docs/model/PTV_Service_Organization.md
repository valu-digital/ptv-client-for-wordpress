# PTV_Service_Organization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**provision_type** | **string** | Provision type, valid values SelfProduced, PurchaseServices or Other. Required if RoleType value is Producer. | [optional] 
**organization** | [**PTV_Item**](PTV_Item.md) | Service channel identifier and name. | [optional] 
**role_type** | **string** | Role type, valid values Responsible or Producer. In version 7 and upper also OtherResponsible role type is used. | 
**additional_information** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



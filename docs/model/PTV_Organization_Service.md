# PTV_Organization_Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**organization_id** | **string** | PTV organization identifier (organization related to the service). | [optional] 
**service** | [**PTV_Item**](PTV_Item.md) | Service identifier and name. | [optional] 
**role_type** | **string** | Role type, valid values Responsible or Producer. In version 7 and upper also OtherResponsible role type is used. | 
**provision_type** | **string** | Provision type, valid values SelfProduced, PurchaseServices, Other or VoucherServices. Required if RoleType value is Producer. | [optional] 
**additional_information** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information. | [optional] 
**web_pages** | [**PTV_Web_Page[]**](PTV_Web_Page.md) | List of web pages. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# PTV_Service_Organization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**additional_information** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of additional information. (Max.Length: 150). | [optional] 
**organization_id** | **string** | PTV organization identifier (organization related to the service). Required if role type is Responsible or if ProvisionType is SelfProduced. | [optional] 
**role_type** | **string** | Role type, valid values Responsible or Producer. | 
**provision_type** | **string** | Provision type, valid values SelfProduced, PurchaseServices, Other or VoucherServices. Required if RoleType value is Producer. | [optional] 
**web_pages** | [**PTV_Web_Page[]**](PTV_Web_Page.md) | List of web pages. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



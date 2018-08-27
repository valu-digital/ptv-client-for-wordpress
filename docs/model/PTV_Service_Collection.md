# PTV_Service_Collection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV service identifier. | [optional] 
**source_id** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**main_responsible_organization** | **string** | Main responsible organization Id | [optional] 
**service_collection_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service collection names. (Max.Length: 100). | [optional] 
**service_collection_descriptions** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service collection descriptions. (Max.Length: 500). | [optional] 
**services** | [**PTV_Service_Collection_Service[]**](PTV_Service_Collection_Service.md) | List of service collection services. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



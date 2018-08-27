# PTV_Service_Collection_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**main_responsible_organization** | **string** | Main responsible organization Id | [optional] 
**service_collection_names** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service collection names. (Max.Length: 100). | [optional] 
**service_collection_descriptions** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service collection descriptions. (Max.Length: 500). | [optional] 
**services** | **string[]** | List of service collection services. | [optional] 
**delete_all_services** | **bool** | Set to true to delete all existing services (the services collection for this object should be empty collection when this option is used). | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



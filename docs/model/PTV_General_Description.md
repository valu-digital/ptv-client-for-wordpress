# PTV_General_Description

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity Guid identifier. | [optional] 
**names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized names. (Max.Length: 100). | [optional] 
**descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 2500 BackgroundDescription). | [optional] 
**languages** | **string[]** | List of statutory service general description languages. | [optional] 
**service_classes** | [**PTV_Finto_Item_With_Description[]**](PTV_Finto_Item_With_Description.md) | List of service classes. | [optional] 
**ontology_terms** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of ontology terms. | [optional] 
**target_groups** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of target groups. | [optional] 
**life_events** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of life events. | [optional] 
**industrial_classes** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of industrial classes. | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**type** | **string** | Service type. Possible values are: Service or PermissionAndObligation. In version 6 (and newer) also ProfessionalQualifications. | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | Laws that a general description is based on. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 
**service_channels** | [**PTV_Service_Service_Channel[]**](PTV_Service_Service_Channel.md) | List of linked service channels including relationship data. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



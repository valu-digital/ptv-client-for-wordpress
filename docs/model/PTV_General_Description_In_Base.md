# PTV_General_Description_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized names. (Max.Length: 100). | [optional] 
**descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 2500 BackgroundDescription). | [optional] 
**languages** | **string[]** | List of statutory service general description languages. | [optional] 
**service_classes** | **string[]** | List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065 | [optional] 
**ontology_terms** | **string[]** | List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435 | [optional] 
**target_groups** | **string[]** | List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004 | [optional] 
**life_events** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017 | [optional] 
**industrial_classes** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt). | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermissionAndObligation or ProfessionalQualifications. | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | Laws that a general description is based on. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**delete_all_life_events** | **bool** | Set to true to delete all existing life events (the LifeEvents collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_industrial_classes** | **bool** | Set to true to delete all existing industrial classes (the IndustrialClasses collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_laws** | **bool** | Set to true to delete all existing laws within legislation (the legislation collection for this object should be empty collection when this option is used). | [optional] 
**delete_service_charge_type** | **bool** | Set to true to delete service charge type (ServiceChargeType property for this object should be empty when this option is used). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



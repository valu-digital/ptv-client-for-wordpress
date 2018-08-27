# PTV_Service_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**statutory_service_general_description_id** | **string** | Valid PTV statutory service general description identifier that this service will be linked to. List of valid identifiers can be retrieved from the endpoint /api/GeneralDescription | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermissionAndObligation or ProfessionalQualifications.  NOTE! If service type has been defined within attached statutory service general description, the type for service is ignored. | [optional] 
**funding_type** | **string** | Service funding type. Possible values are: PubliclyFunded or MarketFunded. | [optional] 
**service_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service names. (Max.Length: 100). | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged or Free.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored. | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**service_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service descriptions. (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 150 ShortDescription). (Max.Length: 500 ProcessingTimeAdditionalInfo). (Max.Length: 500 DeadLineAdditionalInfo). (Max.Length: 500 ChargeTypeAdditionalInfo). (Max.Length: 500 ValidityTimeAdditionalInfo). | [optional] 
**languages** | **string[]** | List of service languages. | [optional] 
**service_classes** | **string[]** | List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065.  NOTE! If service class has been defined within attached statutory service general description, the service class is not added for service. | [optional] 
**ontology_terms** | **string[]** | List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435.  NOTE! If ontology term has been defined within attached statutory service general description, the ontology term is not added for service. | [optional] 
**target_groups** | **string[]** | List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004.  NOTE! If target group has been defined within attached statutory service general description, the target group is not added for service. | [optional] 
**life_events** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017  NOTE! If life event has been defined within attached statutory service general description, the life event is not added for service. | [optional] 
**industrial_classes** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt).  NOTE! If industrial class has been defined within attached statutory service general description, the industrial class is not added for service. | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | List of laws related to the service. | [optional] 
**keywords** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service keywords. (Max.Length: 150). | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**other_responsible_organizations** | **string[]** | List of other responsible organizations for the service. | [optional] 
**service_producers** | [**PTV_Service_Producer_In[]**](PTV_Service_Producer_In.md) | List of service producers | [optional] 
**service_vouchers_in_use** | **bool** | Indicates if service vouchers are used in the service. | [optional] 
**service_vouchers** | [**PTV_Service_Voucher[]**](PTV_Service_Voucher.md) | List of service vouchers. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**delete_all_life_events** | **bool** | Set to true to delete all existing life events (the LifeEvents collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_industrial_classes** | **bool** | Set to true to delete all existing industrial classes (the IndustrialClasses collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_laws** | **bool** | Set to true to delete all existing laws within legislation (the legislation collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_keywords** | **bool** | Set to true to delete all existing keywords (the Keywords collection for this object should be empty collection when this option is used). | [optional] 
**delete_service_charge_type** | **bool** | Set to true to delete service charge type (ServiceChargeType property for this object should be empty when this option is used). | [optional] 
**delete_statutory_service_general_description_id** | **bool** | Set to true to delete statutory service general description (StatutoryServiceGeneralDescriptionId property for this object should be empty when this option is used). | [optional] 
**main_responsible_organization** | **string** | Main responsible organization Id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



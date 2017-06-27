# PTV_Service_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | External system identifier for the entity. | [optional] 
**statutory_service_general_description_id** | **string** | Valid PTV statutory service general description identifier that this service will be linked to. List of valid identifiers can be retrieved from the endpoint /api/GeneralDescription | [optional] 
**type** | **string** | Service type. Possible values are: Service or PermissionAndObligation.  NOTE! If service type has been defined within attached statutory service general description, the type for service is ignored. | [optional] 
**service_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of service names. (Max.Length: 100). | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored. | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | 
**areas** | [**PTV_Area_In[]**](PTV_Area_In.md) | List of areas. List can contain different types of areas. | [optional] 
**service_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of service descriptions. (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 150 ShortDescription). (Max.Length: 500 ProcessingTimeAdditionalInfo). (Max.Length: 500 DeadLineAdditionalInfo). (Max.Length: 500 ChargeTypeAdditionalInfo). (Max.Length: 500 ValidityTimeAdditionalInfo). | [optional] 
**languages** | **string[]** | List of service language codes. | [optional] 
**service_classes** | **string[]** | List of service class urls (see http://finto.fi/ptvl/fi/).  NOTE! If service class has been defined within attached statutory service general description, the service class is not added for service. | [optional] 
**ontology_terms** | **string[]** | List of ontology term urls (see http://finto.fi/koko/fi/).  NOTE! If ontology term has been defined within attached statutory service general description, the ontology term is not added for service. | [optional] 
**target_groups** | **string[]** | List of target group urls (see http://finto.fi/ptvl/fi/page/?uri&#x3D;http://urn.fi/URN:NBN:fi:au:ptvl:KR).  NOTE! If target group has been defined within attached statutory service general description, the target group is not added for service. | [optional] 
**life_events** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017  NOTE! If life event has been defined within attached statutory service general description, the life event is not added for service. | [optional] 
**industrial_classes** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt).  NOTE! If industrial class has been defined within attached statutory service general description, the industrial class is not added for service. | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | List of laws related to the service. | [optional] 
**keywords** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service keywords. | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**service_organizations** | [**PTV_Service_Organization[]**](PTV_Service_Organization.md) | List of organizations responsible or producing the service. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft or Published. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



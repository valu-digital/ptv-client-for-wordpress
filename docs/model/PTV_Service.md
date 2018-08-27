# PTV_Service

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV service identifier. | [optional] 
**source_id** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**statutory_service_general_description_id** | **string** | PTV identifier for linked general description. | [optional] 
**type** | **string** | Service type. Possible values are: Service or PermissionAndObligation. In version 6 (and newer) also ProfessionalQualifications.  NOTE! Current PTV database does not anymore support for types Notice, Registration or Permission - they are automatically mapped into PermissionAndObligation type when possible.  POST and PUT methods accepts old types but GET method only can return Service or PermissionAndObligation types. | [optional] 
**funding_type** | **string** | Service funding type. Possible values are: PubliclyFunded or MarketFunded. | [optional] 
**service_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service names. (Max.Length: 100). | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged or Free.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored. | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area[]**](PTV_Area.md) | List of service areas. | [optional] 
**service_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of localized service descriptions. (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 150 ShortDescription). (Max.Length: 500 ProcessingTimeAdditionalInfo). (Max.Length: 500 DeadLineAdditionalInfo). (Max.Length: 500 ChargeTypeAdditionalInfo). (Max.Length: 500 ValidityTimeAdditionalInfo). | [optional] 
**languages** | **string[]** | List of service languages. | [optional] 
**service_classes** | [**PTV_Finto_Item_With_Description[]**](PTV_Finto_Item_With_Description.md) | List of service classes related to the service. | [optional] 
**ontology_terms** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of ontology terms related to the service. | [optional] 
**target_groups** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of target groups related to the service. | [optional] 
**life_events** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of life events  related to the service. | [optional] 
**industrial_classes** | [**PTV_Finto_Item[]**](PTV_Finto_Item.md) | List of industrial classes related to the service. | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | List of laws related to the service. | [optional] 
**keywords** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | List of localized service keywords. (Max.Length: 150). | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**service_channels** | [**PTV_Service_Service_Channel[]**](PTV_Service_Service_Channel.md) | List of linked service channels including relationship data. | [optional] 
**organizations** | [**PTV_Service_Organization[]**](PTV_Service_Organization.md) | List of organizations, responsible and producer organizations of the service. | [optional] 
**service_vouchers_in_use** | **bool** | Indicates if service vouchers are used in the service. | [optional] 
**service_vouchers** | [**PTV_Service_Voucher[]**](PTV_Service_Voucher.md) | List of service vouchers. | [optional] 
**service_collections** | [**PTV_Service_Service_Collection[]**](PTV_Service_Service_Collection.md) | List of service collections that the service has been linked to | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# PTV_General_Description_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of name entities. Value of \&quot;type\&quot; has to be always \&quot;Name\&quot;.   Sample single JSON object: {\&quot;language\&quot;: \&quot;fi\&quot;, \&quot;value\&quot;: \&quot;Perhepäivähoito esiopetusikäisille\&quot;, \&quot;type\&quot;: \&quot;Name\&quot;}. (Max.Length: 100). | 
**descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of description entities. Requires two entities where ones type is \&quot;Description\&quot; or \&quot;BackgroundDescription\&quot; and the other ones type is \&quot;ShortDescription\&quot;.  Sample single JSON object: {\&quot;language\&quot;: \&quot;fi\&quot;, \&quot;value\&quot;: \&quot;Lyhyen kuvauksen kuvaus esimerkki teksti.\&quot;, \&quot;type\&quot;: \&quot;ShortDescription\&quot;}.  Other optional description types are ServiceUserInstruction, ChargeTypeAdditionalInfo, DeadLineAdditionalInfo, ProcessingTimeAdditionalInfo, ValidityTimeAdditionalInfo. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 2500 BackgroundDescription). | 
**languages** | **string[]** | List of language codes. | [optional] 
**service_classes** | **string[]** | List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065 | [optional] 
**ontology_terms** | **string[]** | List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435 | [optional] 
**target_groups** | **string[]** | List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004 | [optional] 
**life_events** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017 | [optional] 
**industrial_classes** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt). | [optional] 
**requirements** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**type** | **string** | Service type. Possible values are: Service or PermissionAndObligation. | [optional] 
**service_charge_type** | **string** | Service charge type. Possible values are: Charged, Free or Other | [optional] 
**legislation** | [**PTV_Law[]**](PTV_Law.md) | Laws that a general description is based on. | [optional] 
**publishing_status** | **string** | Publishing status. Possible values are: Draft or Published. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



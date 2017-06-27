# PTV_Organization_In

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | Organization external system identifier. | [optional] 
**oid** | **string** | Organization OID. - must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot; (Max.Length: 100). | [optional] 
**municipality** | **string** | Municipality code (like 491 or 091). | [optional] 
**organization_type** | **string** | Organization type (State, Municipality, RegionalOrganization, Organization, Company). | 
**business_code** | **string** | Organization business code (Y-tunnus). | [optional] 
**business_name** | **string** | Organization business name (name used for business code). | [optional] 
**organization_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of organization names. (Max.Length: 100). | [optional] 
**display_name_type** | [**PTV_Name_Type_By_Language[]**](PTV_Name_Type_By_Language.md) | List of Display name types (Name or AlternateName) for each language version of OrganizationNames. | [optional] 
**organization_descriptions** | [**PTV_Language_Item[]**](PTV_Language_Item.md) | Localized list of organization descriptions. (Max.Length: 2500). | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**sub_area_type** | **string** | Sub area type (Municipality, Province, BusinessRegions, HospitalRegions). | [optional] 
**areas** | **string[]** | Area codes related to sub area type. For example if SubAreaType &#x3D; Municipality, Areas-list need to include municipality codes like 491 or 091. | [optional] 
**email_addresses** | [**PTV_Email[]**](PTV_Email.md) | List of email addresses. | [optional] 
**phone_numbers** | [**PTV_Phone[]**](PTV_Phone.md) | List of organizations phone numbers. | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of organizations web pages. | [optional] 
**addresses** | [**PTV_Address_With_Type_In[]**](PTV_Address_With_Type_In.md) | List of addresses. | [optional] 
**publishing_status** | **string** | Publishing status (Draft or Published). | 
**parent_organization_id** | **string** | Parent organization identifier if exists. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



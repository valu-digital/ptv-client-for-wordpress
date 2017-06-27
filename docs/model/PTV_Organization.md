# PTV_Organization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity identifier. | [optional] 
**oid** | **string** | Organization OID. - must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot; | [optional] 
**parent_organization** | **string** | Organizations parent organization identifier if exists. | [optional] 
**organization_type** | **string** | Organization type (State, Municipality, RegionalOrganization, Organization, Company). | [optional] 
**municipality** | [**PTV_Municipality**](PTV_Municipality.md) | Municipality including municipality code and a localized list of municipality names. | [optional] 
**business_code** | **string** | Organization business code (Y-tunnus). | [optional] 
**business_name** | **string** | Organization business name (name used for business code). | [optional] 
**organization_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of organization names. (Max.Length: 100). | [optional] 
**display_name_type** | [**PTV_Name_Type_By_Language[]**](PTV_Name_Type_By_Language.md) | List of Display name types (Name or AlternateName) for each language version of OrganizationNames. | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**areas** | [**PTV_Area[]**](PTV_Area.md) | List of organization areas. | [optional] 
**organization_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of organizations descriptions. | [optional] 
**email_addresses** | [**PTV_Email[]**](PTV_Email.md) | List of organizations email addresses. | [optional] 
**phone_numbers** | [**PTV_Phone[]**](PTV_Phone.md) | List of organizations phone numbers. | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of organizations web pages. | [optional] 
**addresses** | [**PTV_Address_With_Type_And_Coordinates[]**](PTV_Address_With_Type_And_Coordinates.md) | List of organizations addresses. | [optional] 
**publishing_status** | **string** | Publishing status (Draft, Published, Deleted or Modified). | [optional] 
**services** | [**PTV_Organization_Service[]**](PTV_Organization_Service.md) | List of organizations services. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



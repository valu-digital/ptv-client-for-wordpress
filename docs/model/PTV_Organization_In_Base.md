# PTV_Organization_In_Base

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_id** | **string** | Organization external system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**oid** | **string** | Organization OID. - must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot; (Max.Length: 100). | [optional] 
**municipality** | **string** | Municipality code (like 491 or 091). | [optional] 
**organization_type** | **string** | Organization type (State, Municipality, RegionalOrganization, Organization, Company). | [optional] 
**business_code** | **string** | Organization business code (Y-tunnus). | [optional] 
**business_name** | **string** | Organization business name (name used for business code). | [optional] 
**organization_names** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | List of organization names. (Max.Length: 100). | [optional] 
**display_name_type** | [**PTV_Name_Type_By_Language[]**](PTV_Name_Type_By_Language.md) | List of Display name types (Name or AlternateName) for each language version of OrganizationNames. | [optional] 
**area_type** | **string** | Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType). | [optional] 
**sub_area_type** | **string** | Sub area type (Municipality, Province, BusinessRegions, HospitalRegions). | [optional] 
**areas** | **string[]** | Area codes related to sub area type. For example if SubAreaType &#x3D; Municipality, Areas-list need to include municipality codes like 491 or 091. | [optional] 
**organization_descriptions** | [**PTV_Localized_List_Item[]**](PTV_Localized_List_Item.md) | Localized list of organization descriptions. (Max.Length: 2500 Description). (Max.Length: 150 ShortDescription). | [optional] 
**email_addresses** | [**PTV_Email[]**](PTV_Email.md) | List of email addresses. | [optional] 
**phone_numbers** | [**PTV_Phone[]**](PTV_Phone.md) | List of organizations phone numbers. | [optional] 
**web_pages** | [**PTV_Web_Page_With_Order_Number[]**](PTV_Web_Page_With_Order_Number.md) | List of organizations web pages. | [optional] 
**addresses** | [**PTV_Address_With_Foreign_In[]**](PTV_Address_With_Foreign_In.md) | List of addresses. | [optional] 
**electronic_invoicings** | [**PTV_Organization_Einvoicing[]**](PTV_Organization_Einvoicing.md) | List of organizations electronic invoicing information. | [optional] 
**publishing_status** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**parent_organization_id** | **string** | Parent organization identifier if exists. | [optional] 
**delete_all_emails** | **bool** | Set to true to delete all existing emails (the EmailAddresses collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_phones** | **bool** | Set to true to delete all existing phone numbers (the PhoneNumbers collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_web_pages** | **bool** | Set to true to delete all existing web pages (the WebPages collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_addresses** | **bool** | Set to true to delete all existing addresses (the Addresses collection for this object should be empty collection when this option is used). | [optional] 
**delete_all_electronic_invoicings** | **bool** | Set to true to delete all existing electronic invoicing addresses (the ElectronicInvoicings collection for this object should be empty collection when this option is used). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



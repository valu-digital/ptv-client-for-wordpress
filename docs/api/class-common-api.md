# Common_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_entities_by_organization_id**](Common_Api.md#get_entities_by_organization_id) | **GET** /api/v7/Common/EntitiesByOrganization/{organizationId} | Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.


# **get_entities_by_organization_id**
> PTV_Entitity_Guid_Page get_entities_by_organization_id( $organization_id, $date, $page )

Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new Common_Api();
$organization_id = "organization_id_example"; // string | Guid
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_entities_by_organization_id( $organization_id, $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional]

### Return type

[**PTV_Entitity_Guid_Page**](../model/PTV_Entitity_Guid_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


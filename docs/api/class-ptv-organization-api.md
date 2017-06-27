# PTV_Organization_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_organization**](PTV_Organization_Api.md#create_organization) | **POST** /api/v5/Organization | Creates a new organization with the data provided as input.
[**get_organization_by_businesscode**](PTV_Organization_Api.md#get_organization_by_businesscode) | **GET** /api/v5/Organization/businesscode/{code} | Fetches all the information related to organizations with defined business identity code.
[**get_organization_by_id**](PTV_Organization_Api.md#get_organization_by_id) | **GET** /api/v5/Organization/{id} | Fetches all the information related to a single organization.
[**get_organization_by_oid**](PTV_Organization_Api.md#get_organization_by_oid) | **GET** /api/v5/Organization/oid/{oid} | Fetches all the information related to a single organization with defined Oid.
[**get_organizations**](PTV_Organization_Api.md#get_organizations) | **GET** /api/v5/Organization | Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.
[**update_organization_by_id**](PTV_Organization_Api.md#update_organization_by_id) | **PUT** /api/v5/Organization/{id} | Updates organization.
[**update_organization_by_source_id**](PTV_Organization_Api.md#update_organization_by_source_id) | **PUT** /api/v5/Organization/sourceId/{sourceId} | Updates organization.


# **create_organization**
> PTV_Organization create_organization( $request )

Creates a new organization with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Addresses[1].StreetAddress\": [                      \"The StreetAddress field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Organization_Api();
$request = new PTV_Organization_In(); // PTV_Organization_In | The organization data.


$result = $api_instance->create_organization( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Organization_In**](../model/PTV_Organization_In.md)| The organization data. | [optional]

### Return type

[**PTV_Organization**](../model/PTV_Organization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_organization_by_businesscode**
> PTV_Organization[] get_organization_by_businesscode( $code )

Fetches all the information related to organizations with defined business identity code.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"code\": [                   \"The field code must match the regular expression '^[0-9]{7}-[0-9]{1}$'.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Organization_Api();
$code = "code_example"; // string | Finnish business identity code (Y-tunnus).


$result = $api_instance->get_organization_by_businesscode( $code );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Finnish business identity code (Y-tunnus). |

### Return type

[**PTV_Organization[]**](../model/PTV_Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_organization_by_id**
> PTV_Organization get_organization_by_id( $id )

Fetches all the information related to a single organization.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"id\": [                   \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Organization_Api();
$id = "id_example"; // string | Guid


$result = $api_instance->get_organization_by_id( $id );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Guid |

### Return type

[**PTV_Organization**](../model/PTV_Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_organization_by_oid**
> PTV_Organization get_organization_by_oid( $oid )

Fetches all the information related to a single organization with defined Oid.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"oid\": [                   \"The field oid must match the regular expression '^[A-Za-z0-9.-]*$'.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Organization_Api();
$oid = "oid_example"; // string | Oid identifier


$result = $api_instance->get_organization_by_oid( $oid );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **oid** | **string**| Oid identifier |

### Return type

[**PTV_Organization**](../model/PTV_Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_organizations**
> PTV_Guid_Page get_organizations( $date, $page )

Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"date\": [                   \"The value '-2' is not valid for Nullable`1.\",                   \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Organization_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_organizations( $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page number to be fetched. | [optional]

### Return type

[**PTV_Guid_Page**](../model/PTV_Guid_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_organization_by_id**
> PTV_Organization update_organization_by_id( $id, $request )

Updates organization.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"propertyname\": [                   \"The field propertyname has invalid characters.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Organization_Api();
$id = "id_example"; // string | organization entity id
$request = new PTV_Organization_In_Base(); // PTV_Organization_In_Base | organization values


$result = $api_instance->update_organization_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| organization entity id |
 **request** | [**PTV_Organization_In_Base**](../model/PTV_Organization_In_Base.md)| organization values | [optional]

### Return type

[**PTV_Organization**](../model/PTV_Organization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_organization_by_source_id**
> PTV_Organization update_organization_by_source_id( $source_id, $request )

Updates organization.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"propertyname\": [                   \"The field propertyname has invalid characters.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Organization_Api();
$source_id = "source_id_example"; // string | organization external id
$request = new PTV_Organization_In_Base(); // PTV_Organization_In_Base | organization values


$result = $api_instance->update_organization_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| organization external id |
 **request** | [**PTV_Organization_In_Base**](../model/PTV_Organization_In_Base.md)| organization values | [optional]

### Return type

[**PTV_Organization**](../model/PTV_Organization.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


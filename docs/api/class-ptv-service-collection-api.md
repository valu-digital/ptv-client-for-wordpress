# PTV_ServiceCollection_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_service_collection**](PTV_ServiceCollection_Api.md#create_service_collection) | **POST** /api/v7/ServiceCollection | Creates a new service collection with the data provided as input.
[**get_service_collection_by_id**](PTV_ServiceCollection_Api.md#get_service_collection_by_id) | **GET** /api/v7/ServiceCollection/{id} | Fetches all the information related to a single service collection.
[**get_service_collections**](PTV_ServiceCollection_Api.md#get_service_collections) | **GET** /api/v7/ServiceCollection | Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
[**update_collection_by_source_id**](PTV_ServiceCollection_Api.md#update_collection_by_source_id) | **PUT** /api/v7/ServiceCollection/sourceId/{sourceId} | Updates the defined service collection with the data provided as input.
[**update_service_collection_by_id**](PTV_ServiceCollection_Api.md#update_service_collection_by_id) | **PUT** /api/v7/ServiceCollection/{id} | Updates the defined service collection with the data provided as input.


# **create_service_collection**
> PTV_Service_Collection create_service_collection( $request )

Creates a new service collection with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceCollectionNames\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_ServiceCollection_Api();
$request = new PTV_Service_Collection_In(); // PTV_Service_Collection_In | The service collection data.


$result = $api_instance->create_service_collection( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_Collection_In**](../model/PTV_Service_Collection_In.md)| The service collection data. | [optional]

### Return type

[**PTV_Service_Collection**](../model/PTV_Service_Collection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_collection_by_id**
> PTV_Service_Collection get_service_collection_by_id( $id )

Fetches all the information related to a single service collection.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_ServiceCollection_Api();
$id = "id_example"; // string | Guid


$result = $api_instance->get_service_collection_by_id( $id );

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

[**PTV_Service_Collection**](../model/PTV_Service_Collection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_collections**
> PTV_Guid_Page get_service_collections( $date, $page, $archived )

Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_ServiceCollection_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.
$archived = true; // bool | Get archived items by setting archived to true.


$result = $api_instance->get_service_collections( $date, $page, $archived );

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
 **archived** | **bool**| Get archived items by setting archived to true. | [optional]

### Return type

[**PTV_Guid_Page**](../model/PTV_Guid_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_collection_by_source_id**
> PTV_Service_Collection update_collection_by_source_id( $source_id, $request )

Updates the defined service collection with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceCollectionNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_ServiceCollection_Api();
$source_id = "source_id_example"; // string | External source identifier
$request = new PTV_Service_Collection_In_Base(); // PTV_Service_Collection_In_Base | The service collection data


$result = $api_instance->update_collection_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| External source identifier |
 **request** | [**PTV_Service_Collection_In_Base**](../model/PTV_Service_Collection_In_Base.md)| The service collection data | [optional]

### Return type

[**PTV_Service_Collection**](../model/PTV_Service_Collection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_collection_by_id**
> PTV_Service_Collection update_service_collection_by_id( $id, $request )

Updates the defined service collection with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceCollectionNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_ServiceCollection_Api();
$id = "id_example"; // string | Service collection identifier
$request = new PTV_Service_Collection_In_Base(); // PTV_Service_Collection_In_Base | The service collection data


$result = $api_instance->update_service_collection_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Service collection identifier |
 **request** | [**PTV_Service_Collection_In_Base**](../model/PTV_Service_Collection_In_Base.md)| The service collection data | [optional]

### Return type

[**PTV_Service_Collection**](../model/PTV_Service_Collection.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


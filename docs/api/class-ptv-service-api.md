# PTV_Service_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_service**](PTV_Service_Api.md#create_service) | **POST** /api/v7/Service | Creates a new service with the data provided as input.
[**get_active_service_by_id**](PTV_Service_Api.md#get_active_service_by_id) | **GET** /api/v7/Service/active/{id} | Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
[**get_active_services**](PTV_Service_Api.md#get_active_services) | **GET** /api/v7/Service/active | Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.   Services created after certain date can be fetched by adding date as query string parameter.   NOTE! This is a restricted endpoint.
[**get_municipality_by_code**](PTV_Service_Api.md#get_municipality_by_code) | **GET** /api/v7/Service/municipality/{code} | Gets a list of published services related to defined municipality.  Services created after certain date can be fetched by adding date as query string parameter.
[**get_service_by_id**](PTV_Service_Api.md#get_service_by_id) | **GET** /api/v7/Service/{id} | Fetches all the information related to a single service.
[**get_service_class_by_uri**](PTV_Service_Api.md#get_service_class_by_uri) | **GET** /api/v7/Service/serviceClass/{uri} | Gets a list of published services for defined service class.  Services created after certain date can be fetched by adding date as query string parameter.
[**get_services**](PTV_Service_Api.md#get_services) | **GET** /api/v7/Service | Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
[**get_services_for_service_channel_by_id**](PTV_Service_Api.md#get_services_for_service_channel_by_id) | **GET** /api/v7/Service/serviceChannel/{serviceChannelId} | Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.
[**update_service_by_id**](PTV_Service_Api.md#update_service_by_id) | **PUT** /api/v7/Service/{id} | Updates the defined service with the data provided as input.
[**update_service_by_source_id**](PTV_Service_Api.md#update_service_by_source_id) | **PUT** /api/v7/Service/sourceId/{sourceId} | Updates the defined service with the data provided as input.


# **create_service**
> PTV_Service create_service( $request, $attach_proposed_channels )

Creates a new service with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceNames\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$request = new PTV_Service_In(); // PTV_Service_In | The service data.
$attach_proposed_channels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.


$result = $api_instance->create_service( $request, $attach_proposed_channels );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_In**](../model/PTV_Service_In.md)| The service data. | [optional]
 **attach_proposed_channels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_active_service_by_id**
> PTV_Service get_active_service_by_id( $id )

Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$id = "id_example"; // string | Guid


$result = $api_instance->get_active_service_by_id( $id );

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

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_active_services**
> PTV_Guid_Page get_active_services( $date, $page )

Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.   Services created after certain date can be fetched by adding date as query string parameter.   NOTE! This is a restricted endpoint.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_active_services( $date, $page );

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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_municipality_by_code**
> PTV_Guid_Page get_municipality_by_code( $code, $date, $page )

Gets a list of published services related to defined municipality.  Services created after certain date can be fetched by adding date as query string parameter.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$code = "code_example"; // string | Municipality code
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_municipality_by_code( $code, $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Municipality code |
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

# **get_service_by_id**
> PTV_Service get_service_by_id( $id )

Fetches all the information related to a single service.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"id\": [                      \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$id = "id_example"; // string | Guid


$result = $api_instance->get_service_by_id( $id );

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

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_class_by_uri**
> PTV_Guid_Page get_service_class_by_uri( $uri, $date, $page )

Gets a list of published services for defined service class.  Services created after certain date can be fetched by adding date as query string parameter.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$uri = "uri_example"; // string | Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_service_class_by_uri( $uri, $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uri** | **string**| Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065 |
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

# **get_services**
> PTV_Guid_Page get_services( $date, $page, $archived )

Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.
$archived = true; // bool | Get archived items by setting archived to true.


$result = $api_instance->get_services( $date, $page, $archived );

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

# **get_services_for_service_channel_by_id**
> PTV_Guid_Page get_services_for_service_channel_by_id( $service_channel_id, $date, $page )

Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$service_channel_id = "service_channel_id_example"; // string | Guid
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_services_for_service_channel_by_id( $service_channel_id, $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_channel_id** | **string**| Guid |
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

# **update_service_by_id**
> PTV_Service update_service_by_id( $id, $request, $attach_proposed_channels )

Updates the defined service with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$id = "id_example"; // string | Service identifier
$request = new PTV_Service_In_Base(); // PTV_Service_In_Base | The service data
$attach_proposed_channels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.


$result = $api_instance->update_service_by_id( $id, $request, $attach_proposed_channels );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Service identifier |
 **request** | [**PTV_Service_In_Base**](../model/PTV_Service_In_Base.md)| The service data | [optional]
 **attach_proposed_channels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_by_source_id**
> PTV_Service update_service_by_source_id( $source_id, $request, $attach_proposed_channels )

Updates the defined service with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceNames[0].Type\": [                      \"The Type field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$source_id = "source_id_example"; // string | External source identifier
$request = new PTV_Service_In_Base(); // PTV_Service_In_Base | The service data
$attach_proposed_channels = true; // bool | Indicates if service channels attached into general description should automatically be attached into the service.


$result = $api_instance->update_service_by_source_id( $source_id, $request, $attach_proposed_channels );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| External source identifier |
 **request** | [**PTV_Service_In_Base**](../model/PTV_Service_In_Base.md)| The service data | [optional]
 **attach_proposed_channels** | **bool**| Indicates if service channels attached into general description should automatically be attached into the service. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


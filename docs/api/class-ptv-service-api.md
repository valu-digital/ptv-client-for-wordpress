# PTV_Service_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_service**](PTV_Service_Api.md#create_service) | **POST** /api/v5/Service | Creates a new service with the data provided as input.
[**create_service_and_channel**](PTV_Service_Api.md#create_service_and_channel) | **POST** /api/v5/Service/ServiceAndChannel | Creates a relationships between services and service channels with extra data.
[**get_service_by_id**](PTV_Service_Api.md#get_service_by_id) | **GET** /api/v5/Service/{id} | Fetches all the information related to a single service.
[**get_services**](PTV_Service_Api.md#get_services) | **GET** /api/v5/Service | Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.
[**get_services_for_service_channel_by_id**](PTV_Service_Api.md#get_services_for_service_channel_by_id) | **GET** /api/v5/Service/serviceChannel/{serviceChannelId} | Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.
[**update_service_and_channel_by_service_id**](PTV_Service_Api.md#update_service_and_channel_by_service_id) | **PUT** /api/v5/Service/ServiceAndChannel/{serviceId} | Updates relationships between a service and service channels with extra data.   Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel relations for a service set &#39;deleteAllChannelRelations&#39; property to true.
[**update_service_by_id**](PTV_Service_Api.md#update_service_by_id) | **PUT** /api/v5/Service/{id} | Updates the defined service with the data provided as input.
[**update_service_by_source_id**](PTV_Service_Api.md#update_service_by_source_id) | **PUT** /api/v5/Service/sourceId/{sourceId} | Updates the defined service with the data provided as input.


# **create_service**
> PTV_Service create_service( $request )

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


$result = $api_instance->create_service( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_In**](../model/PTV_Service_In.md)| The service data. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_service_and_channel**
> string[] create_service_and_channel( $request )

Creates a relationships between services and service channels with extra data.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$request = array(new PTV_Service_And_Channel()); // PTV_Service_And_Channel[] | A list of services and service channels.


$result = $api_instance->create_service_and_channel( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_And_Channel[]**](../model/PTV_Service_And_Channel.md)| A list of services and service channels. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
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

# **get_services**
> PTV_Guid_Page get_services( $date, $page )

Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"date\": [                      \"The value 'rfsd' is not valid for Nullable`1.\",                      \"The date parameter is invalid.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page number to be fetched.


$result = $api_instance->get_services( $date, $page );

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

# **get_services_for_service_channel_by_id**
> PTV_Service[] get_services_for_service_channel_by_id( $service_channel_id, $date )

Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Api();
$service_channel_id = "service_channel_id_example"; // string | Guid
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).


$result = $api_instance->get_services_for_service_channel_by_id( $service_channel_id, $date );

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

### Return type

[**PTV_Service[]**](../model/PTV_Service.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_and_channel_by_service_id**
> PTV_Service update_service_and_channel_by_service_id( $service_id, $request )

Updates relationships between a service and service channels with extra data.   Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel relations for a service set 'deleteAllChannelRelations' property to true.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Api();
$service_id = "service_id_example"; // string | Service identifier
$request = new PTV_Service_And_Channel_Relation_In_Base(); // PTV_Service_And_Channel_Relation_In_Base | A list of service channels.


$result = $api_instance->update_service_and_channel_by_service_id( $service_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service identifier |
 **request** | [**PTV_Service_And_Channel_Relation_In_Base**](../model/PTV_Service_And_Channel_Relation_In_Base.md)| A list of service channels. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_by_id**
> PTV_Service update_service_by_id( $id, $request )

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


$result = $api_instance->update_service_by_id( $id, $request );

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

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_by_source_id**
> PTV_Service update_service_by_source_id( $source_id, $request )

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


$result = $api_instance->update_service_by_source_id( $source_id, $request );

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

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


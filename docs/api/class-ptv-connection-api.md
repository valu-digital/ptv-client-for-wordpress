# PTV_Connection_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_connection**](PTV_Connection_Api.md#create_connection) | **POST** /api/v7/Connection | Creates a connections between services and service channels with extra data.
[**create_connection_by_source**](PTV_Connection_Api.md#create_connection_by_source) | **POST** /api/v7/Connection/Source | Creates a connections between services and service channels with extra data. External source ids are used.
[**update_asti_connections_by_service_channel_id**](PTV_Connection_Api.md#update_asti_connections_by_service_channel_id) | **PUT** /api/v7/Connection/ASTI/serviceChannelId/{serviceChannelId} | Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set &#39;deleteAllServiceRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**update_asti_connections_by_service_id**](PTV_Connection_Api.md#update_asti_connections_by_service_id) | **PUT** /api/v7/Connection/ASTI/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set &#39;deleteAllChannelRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**update_asti_connections_by_service_source_id**](PTV_Connection_Api.md#update_asti_connections_by_service_source_id) | **PUT** /api/v7/Connection/ASTI/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set &#39;deleteAllChannelRelations&#39; property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
[**update_connection**](PTV_Connection_Api.md#update_connection) | **PUT** /api/v7/Connection/serviceSourceId/{serviceSourceId} | Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set &#39;deleteAllChannelRelations&#39; property to true.  ASTI connections are not removed - data for those connections can be updated though.
[**update_connection_by_service_id**](PTV_Connection_Api.md#update_connection_by_service_id) | **PUT** /api/v7/Connection/serviceId/{serviceId} | Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set &#39;deleteAllChannelRelations&#39; property to true.


# **create_connection**
> string[] create_connection( $request )

Creates a connections between services and service channels with extra data.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$request = array(new PTV_Service_And_Channel_In()); // PTV_Service_And_Channel_In[] | A list of services and service channels.


$result = $api_instance->create_connection( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_And_Channel_In[]**](../model/PTV_Service_And_Channel_In.md)| A list of services and service channels. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_connection_by_source**
> string[] create_connection_by_source( $request )

Creates a connections between services and service channels with extra data. External source ids are used.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$request = array(new PTV_Service_And_Channel_Relation_By_Source()); // PTV_Service_And_Channel_Relation_By_Source[] | A list of services and service channels.


$result = $api_instance->create_connection_by_source( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_And_Channel_Relation_By_Source[]**](../model/PTV_Service_And_Channel_Relation_By_Source.md)| A list of services and service channels. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_asti_connections_by_service_channel_id**
> PTV_Service update_asti_connections_by_service_channel_id( $service_channel_id, $request )

Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set 'deleteAllServiceRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$service_channel_id = "service_channel_id_example"; // string | Service channel identifier
$request = new PTV_Channel_Services_In(); // PTV_Channel_Services_In | A list of service channels.


$result = $api_instance->update_asti_connections_by_service_channel_id( $service_channel_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_channel_id** | **string**| Service channel identifier |
 **request** | [**PTV_Channel_Services_In**](../model/PTV_Channel_Services_In.md)| A list of service channels. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_asti_connections_by_service_id**
> PTV_Service update_asti_connections_by_service_id( $service_id, $request )

Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$service_id = "service_id_example"; // string | Service identifier
$request = new PTV_Service_And_Channel_Asti_Relation_In_Base(); // PTV_Service_And_Channel_Asti_Relation_In_Base | A list of service channels.


$result = $api_instance->update_asti_connections_by_service_id( $service_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_id** | **string**| Service identifier |
 **request** | [**PTV_Service_And_Channel_Asti_Relation_In_Base**](../model/PTV_Service_And_Channel_Asti_Relation_In_Base.md)| A list of service channels. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_asti_connections_by_service_source_id**
> PTV_Service update_asti_connections_by_service_source_id( $service_source_id, $request )

Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$service_source_id = "service_source_id_example"; // string | External source identifier for service
$request = new PTV_Service_And_Channel_Asti_Relation_By_Source(); // PTV_Service_And_Channel_Asti_Relation_By_Source | A list of service channels.


$result = $api_instance->update_asti_connections_by_service_source_id( $service_source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_source_id** | **string**| External source identifier for service |
 **request** | [**PTV_Service_And_Channel_Asti_Relation_By_Source**](../model/PTV_Service_And_Channel_Asti_Relation_By_Source.md)| A list of service channels. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_connection**
> PTV_Service update_connection( $service_source_id, $request )

Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set 'deleteAllChannelRelations' property to true.  ASTI connections are not removed - data for those connections can be updated though.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$service_source_id = "service_source_id_example"; // string | External source identifier for service
$request = new PTV_Service_And_Channel_Relation_By_Source_In_Base(); // PTV_Service_And_Channel_Relation_By_Source_In_Base | A list of service channels.


$result = $api_instance->update_connection( $service_source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service_source_id** | **string**| External source identifier for service |
 **request** | [**PTV_Service_And_Channel_Relation_By_Source_In_Base**](../model/PTV_Service_And_Channel_Relation_By_Source_In_Base.md)| A list of service channels. | [optional]

### Return type

[**PTV_Service**](../model/PTV_Service.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_connection_by_service_id**
> PTV_Service update_connection_by_service_id( $service_id, $request )

Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set 'deleteAllChannelRelations' property to true.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"Service with id '00000000-0000-0000-0000-00000000' not found!\"              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Connection_Api();
$service_id = "service_id_example"; // string | Service identifier
$request = new PTV_Service_And_Channel_Relation_In_Base(); // PTV_Service_And_Channel_Relation_In_Base | A list of service channels.


$result = $api_instance->update_connection_by_service_id( $service_id, $request );

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


# PTV_Service_Channel_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_echannel**](PTV_Service_Channel_Api.md#create_echannel) | **POST** /api/v5/ServiceChannel/EChannel | Creates a new electronic channel with the data provided as input.
[**create_phone**](PTV_Service_Channel_Api.md#create_phone) | **POST** /api/v5/ServiceChannel/Phone | Creates a new phone channel with the data provided as input.
[**create_printable_form**](PTV_Service_Channel_Api.md#create_printable_form) | **POST** /api/v5/ServiceChannel/PrintableForm | Creates a new printable form channel with the data provided as input.
[**create_service_location**](PTV_Service_Channel_Api.md#create_service_location) | **POST** /api/v5/ServiceChannel/ServiceLocation | Creates a new service location channel with the data provided as input.
[**create_webpage**](PTV_Service_Channel_Api.md#create_webpage) | **POST** /api/v5/ServiceChannel/WebPage | Creates a new web page channel with the data provided as input.
[**get_service_channel_by_id**](PTV_Service_Channel_Api.md#get_service_channel_by_id) | **GET** /api/v5/ServiceChannel/{id} | Fetches all the information related to a single service channel.
[**get_service_channel_by_type**](PTV_Service_Channel_Api.md#get_service_channel_by_type) | **GET** /api/v5/ServiceChannel/type/{type} | Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
[**get_service_channels**](PTV_Service_Channel_Api.md#get_service_channels) | **GET** /api/v5/ServiceChannel | Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
[**get_service_channels_for_organization_by_organization_id**](PTV_Service_Channel_Api.md#get_service_channels_for_organization_by_organization_id) | **GET** /api/v5/ServiceChannel/organization/{organizationId} | Gets a list of published service channels for defined organization.   Service channels created/modified after certain date can be fetched by adding date as query string parameter.
[**get_service_channels_for_organization_by_organization_type**](PTV_Service_Channel_Api.md#get_service_channels_for_organization_by_organization_type) | **GET** /api/v5/ServiceChannel/organization/{organizationId}/type/{type} | Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
[**update_echannel_by_id**](PTV_Service_Channel_Api.md#update_echannel_by_id) | **PUT** /api/v5/ServiceChannel/EChannel/{id} | Updates a new electronic channel with the data provided as input.
[**update_echannel_by_source_id**](PTV_Service_Channel_Api.md#update_echannel_by_source_id) | **PUT** /api/v5/ServiceChannel/EChannel/sourceId/{sourceId} | Updates a new electronic channel with the data provided as input.
[**update_phone_by_id**](PTV_Service_Channel_Api.md#update_phone_by_id) | **PUT** /api/v5/ServiceChannel/Phone/{id} | Updates phone channel with the data provided as input.
[**update_phone_by_source_id**](PTV_Service_Channel_Api.md#update_phone_by_source_id) | **PUT** /api/v5/ServiceChannel/Phone/sourceId/{sourceId} | Updates phone channel with the data provided as input.
[**update_printable_form_by_id**](PTV_Service_Channel_Api.md#update_printable_form_by_id) | **PUT** /api/v5/ServiceChannel/PrintableForm/{id} | Updates printable form channel with the data provided as input.
[**update_printable_form_by_source_id**](PTV_Service_Channel_Api.md#update_printable_form_by_source_id) | **PUT** /api/v5/ServiceChannel/PrintableForm/sourceId/{sourceId} | Updates printable form channel with the data provided as input.
[**update_service_location_by_id**](PTV_Service_Channel_Api.md#update_service_location_by_id) | **PUT** /api/v5/ServiceChannel/ServiceLocation/{id} | Updates a new service location channel with the data provided as input.
[**update_service_location_by_source_id**](PTV_Service_Channel_Api.md#update_service_location_by_source_id) | **PUT** /api/v5/ServiceChannel/ServiceLocation/sourceId/{sourceId} | Updates a new service location channel with the data provided as input.
[**update_webpage_by_id**](PTV_Service_Channel_Api.md#update_webpage_by_id) | **PUT** /api/v5/ServiceChannel/WebPage/{id} | Updates webpage channel with the data provided as input.
[**update_webpage_by_source_id**](PTV_Service_Channel_Api.md#update_webpage_by_source_id) | **PUT** /api/v5/ServiceChannel/WebPage/sourceId/{sourceId} | Updates webpage channel with the data provided as input.


# **create_echannel**
> PTV_EChannel_Channel create_echannel( $request )

Creates a new electronic channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$request = new PTV_EChannel_Channel_In(); // PTV_EChannel_Channel_In | The electronic channel data.


$result = $api_instance->create_echannel( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_EChannel_Channel_In**](../model/PTV_EChannel_Channel_In.md)| The electronic channel data. | [optional]

### Return type

[**PTV_EChannel_Channel**](../model/PTV_EChannel_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_phone**
> PTV_Phone_Channel create_phone( $request )

Creates a new phone channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$request = new PTV_Phone_Channel_In(); // PTV_Phone_Channel_In | The phone channel data.


$result = $api_instance->create_phone( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Phone_Channel_In**](../model/PTV_Phone_Channel_In.md)| The phone channel data. | [optional]

### Return type

[**PTV_Phone_Channel**](../model/PTV_Phone_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_printable_form**
> PTV_Printable_Form_Channel create_printable_form( $request )

Creates a new printable form channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$request = new PTV_Printable_Form_Channel_In(); // PTV_Printable_Form_Channel_In | The printable form channel data.


$result = $api_instance->create_printable_form( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Printable_Form_Channel_In**](../model/PTV_Printable_Form_Channel_In.md)| The printable form channel data. | [optional]

### Return type

[**PTV_Printable_Form_Channel**](../model/PTV_Printable_Form_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_service_location**
> PTV_Service_Location_Channel create_service_location( $request )

Creates a new service location channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$request = new PTV_Service_Location_Channel_In(); // PTV_Service_Location_Channel_In | The service location channel data.


$result = $api_instance->create_service_location( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Service_Location_Channel_In**](../model/PTV_Service_Location_Channel_In.md)| The service location channel data. | [optional]

### Return type

[**PTV_Service_Location_Channel**](../model/PTV_Service_Location_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create_webpage**
> PTV_Web_Page_Channel create_webpage( $request )

Creates a new web page channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$request = new PTV_Web_Page_Channel_In(); // PTV_Web_Page_Channel_In | The web page channel data.


$result = $api_instance->create_webpage( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_Web_Page_Channel_In**](../model/PTV_Web_Page_Channel_In.md)| The web page channel data. | [optional]

### Return type

[**PTV_Web_Page_Channel**](../model/PTV_Web_Page_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_channel_by_id**
> PTV_Service_Channels get_service_channel_by_id( $id )

Fetches all the information related to a single service channel.

<para>Notice! The returned object is one of the following: <i>PTV_EChannel_Channel</i> or <i>PTV_Phone_Channel</i> or               <i>PTV_Printable_Form_Channel</i> or <i>PTV_Service_Location_Channel</i> or <i>PTV_Web_Page_Channel</i></para>  <para>The returned object depends on the type of the channel. For example if the channel is phone channel then V5VmOpenApiPhoneChannel object is returned.</para>  <para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                 \"id\": [                     \"Guid should contain 32 digits with 4 dashes (xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx).\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | Guid


$result = $api_instance->get_service_channel_by_id( $id );

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

[**PTV_Service_Channels**](../model/PTV_Service_Channels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_channel_by_type**
> PTV_Service_Channels[] get_service_channel_by_type( $type, $date )

Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.

<para>Notice! The returned object is one of the following: <i>PTV_EChannel_Channel</i> or <i>PTV_Phone_Channel</i> or               <i>PTV_Printable_Form_Channel</i> or <i>PTV_Service_Location_Channel</i> or <i>PTV_Web_Page_Channel</i></para>  <para>The returned object depends on the type parameter. For example if the request type was 'Phone' then V5VmOpenApiPhoneChannel objects are returned.</para>  <para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Channel_Api();
$type = "type_example"; // string | Service channel type
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).


$result = $api_instance->get_service_channel_by_type( $type, $date );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Service channel type |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]

### Return type

[**PTV_Service_Channels[]**](../model/PTV_Service_Channels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_channels**
> PTV_Guid_Page get_service_channels( $date, $page )

Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                 \"date\": [                   \"The value '-5' is not valid for Nullable`1.\",                   \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Channel_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page to be fetched.


$result = $api_instance->get_service_channels( $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. | [optional]

### Return type

[**PTV_Guid_Page**](../model/PTV_Guid_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_channels_for_organization_by_organization_id**
> PTV_Service_Channels[] get_service_channels_for_organization_by_organization_id( $organization_id, $date )

Gets a list of published service channels for defined organization.   Service channels created/modified after certain date can be fetched by adding date as query string parameter.

<para>Notice! The returned object is one of the following: <i>PTV_EChannel_Channel</i> or <i>PTV_Phone_Channel</i> or               <i>PTV_Printable_Form_Channel</i> or <i>PTV_Service_Location_Channel</i> or <i>PTV_Web_Page_Channel</i></para>  <para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                 \"date\": [                     \"The value '-2' is not valid for Nullable`1.\",                     \"The date parameter is invalid.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Channel_Api();
$organization_id = "organization_id_example"; // string | Guid
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).


$result = $api_instance->get_service_channels_for_organization_by_organization_id( $organization_id, $date );

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

### Return type

[**PTV_Service_Channels[]**](../model/PTV_Service_Channels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_service_channels_for_organization_by_organization_type**
> PTV_Service_Channels[] get_service_channels_for_organization_by_organization_type( $organization_id, $type, $date )

Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.

<para>Notice! The returned object is one of the following: <i>PTV_EChannel_Channel</i> or <i>PTV_Phone_Channel</i> or               <i>PTV_Printable_Form_Channel</i> or <i>PTV_Service_Location_Channel</i> or <i>PTV_Web_Page_Channel</i></para>  <para>The returned object depends on the type parameter. For example if the request type was 'Phone' then V5VmOpenApiPhoneChannel objects are returned.</para>  <para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                 \"type\": [                     \"The field is invalid. Please use one of these: 'EChannel, WebPage, PrintableForm, Phone, ServiceLocation'.\"                 ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_Service_Channel_Api();
$organization_id = "organization_id_example"; // string | Guid
$type = "type_example"; // string | Service channel type
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).


$result = $api_instance->get_service_channels_for_organization_by_organization_type( $organization_id, $type, $date );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid |
 **type** | **string**| Service channel type |
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]

### Return type

[**PTV_Service_Channels[]**](../model/PTV_Service_Channels.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_echannel_by_id**
> PTV_EChannel_Channel update_echannel_by_id( $id, $request )

Updates a new electronic channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | electronic channel id
$request = new PTV_EChannel_Channel_In_Base(); // PTV_EChannel_Channel_In_Base | electronic channel data


$result = $api_instance->update_echannel_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| electronic channel id |
 **request** | [**PTV_EChannel_Channel_In_Base**](../model/PTV_EChannel_Channel_In_Base.md)| electronic channel data | [optional]

### Return type

[**PTV_EChannel_Channel**](../model/PTV_EChannel_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_echannel_by_source_id**
> PTV_EChannel_Channel update_echannel_by_source_id( $source_id, $request )

Updates a new electronic channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$source_id = "source_id_example"; // string | electronic channel external source id
$request = new PTV_EChannel_Channel_In_Base(); // PTV_EChannel_Channel_In_Base | electronic channel data


$result = $api_instance->update_echannel_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| electronic channel external source id |
 **request** | [**PTV_EChannel_Channel_In_Base**](../model/PTV_EChannel_Channel_In_Base.md)| electronic channel data | [optional]

### Return type

[**PTV_EChannel_Channel**](../model/PTV_EChannel_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_phone_by_id**
> PTV_Phone_Channel update_phone_by_id( $id, $request )

Updates phone channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | phone channel id
$request = new PTV_Phone_Channel_In_Base(); // PTV_Phone_Channel_In_Base | phone channel data


$result = $api_instance->update_phone_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| phone channel id |
 **request** | [**PTV_Phone_Channel_In_Base**](../model/PTV_Phone_Channel_In_Base.md)| phone channel data | [optional]

### Return type

[**PTV_Phone_Channel**](../model/PTV_Phone_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_phone_by_source_id**
> PTV_Phone_Channel update_phone_by_source_id( $source_id, $request )

Updates phone channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$source_id = "source_id_example"; // string | phone channel external id
$request = new PTV_Phone_Channel_In_Base(); // PTV_Phone_Channel_In_Base | phone channel data


$result = $api_instance->update_phone_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| phone channel external id |
 **request** | [**PTV_Phone_Channel_In_Base**](../model/PTV_Phone_Channel_In_Base.md)| phone channel data | [optional]

### Return type

[**PTV_Phone_Channel**](../model/PTV_Phone_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_printable_form_by_id**
> PTV_Printable_Form_Channel update_printable_form_by_id( $id, $request )

Updates printable form channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | printable form channel id
$request = new PTV_Printable_Form_Channel_In_Base(); // PTV_Printable_Form_Channel_In_Base | printable form channel data


$result = $api_instance->update_printable_form_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| printable form channel id |
 **request** | [**PTV_Printable_Form_Channel_In_Base**](../model/PTV_Printable_Form_Channel_In_Base.md)| printable form channel data | [optional]

### Return type

[**PTV_Printable_Form_Channel**](../model/PTV_Printable_Form_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_printable_form_by_source_id**
> PTV_Printable_Form_Channel update_printable_form_by_source_id( $source_id, $request )

Updates printable form channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$source_id = "source_id_example"; // string | printable form channel external source id
$request = new PTV_Printable_Form_Channel_In_Base(); // PTV_Printable_Form_Channel_In_Base | printable form channel data


$result = $api_instance->update_printable_form_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| printable form channel external source id |
 **request** | [**PTV_Printable_Form_Channel_In_Base**](../model/PTV_Printable_Form_Channel_In_Base.md)| printable form channel data | [optional]

### Return type

[**PTV_Printable_Form_Channel**](../model/PTV_Printable_Form_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_location_by_id**
> PTV_Service_Location_Channel update_service_location_by_id( $id, $request )

Updates a new service location channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | service location channel id
$request = new PTV_Service_Location_Channel_In_Base(); // PTV_Service_Location_Channel_In_Base | service location channel data.


$result = $api_instance->update_service_location_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| service location channel id |
 **request** | [**PTV_Service_Location_Channel_In_Base**](../model/PTV_Service_Location_Channel_In_Base.md)| service location channel data. | [optional]

### Return type

[**PTV_Service_Location_Channel**](../model/PTV_Service_Location_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_service_location_by_source_id**
> PTV_Service_Location_Channel update_service_location_by_source_id( $source_id, $request )

Updates a new service location channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$source_id = "source_id_example"; // string | service location channel external source id
$request = new PTV_Service_Location_Channel_In_Base(); // PTV_Service_Location_Channel_In_Base | service location channel data


$result = $api_instance->update_service_location_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| service location channel external source id |
 **request** | [**PTV_Service_Location_Channel_In_Base**](../model/PTV_Service_Location_Channel_In_Base.md)| service location channel data | [optional]

### Return type

[**PTV_Service_Location_Channel**](../model/PTV_Service_Location_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_webpage_by_id**
> PTV_Web_Page_Channel update_webpage_by_id( $id, $request )

Updates webpage channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$id = "id_example"; // string | web page channel id
$request = new PTV_Web_Page_Channel_In_Base(); // PTV_Web_Page_Channel_In_Base | web page channel data


$result = $api_instance->update_webpage_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| web page channel id |
 **request** | [**PTV_Web_Page_Channel_In_Base**](../model/PTV_Web_Page_Channel_In_Base.md)| web page channel data | [optional]

### Return type

[**PTV_Web_Page_Channel**](../model/PTV_Web_Page_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_webpage_by_source_id**
> PTV_Web_Page_Channel update_webpage_by_source_id( $source_id, $request )

Updates webpage channel with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages.</para>  <code>              {                  \"ServiceChannelNames\":[                      \"The ServiceChannelNames field is required.\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_Service_Channel_Api();
$source_id = "source_id_example"; // string | web page channel external source id
$request = new PTV_Web_Page_Channel_In_Base(); // PTV_Web_Page_Channel_In_Base | web page channel data


$result = $api_instance->update_webpage_by_source_id( $source_id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **source_id** | **string**| web page channel external source id |
 **request** | [**PTV_Web_Page_Channel_In_Base**](../model/PTV_Web_Page_Channel_In_Base.md)| web page channel data | [optional]

### Return type

[**PTV_Web_Page_Channel**](../model/PTV_Web_Page_Channel.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


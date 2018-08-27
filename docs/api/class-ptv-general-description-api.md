# PTV_General_Description_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_general_description**](PTV_General_Description_Api.md#create_general_description) | **POST** /api/v7/GeneralDescription | Creates a new general description with the data provided as input.
[**get_general_description_by_id**](PTV_General_Description_Api.md#get_general_description_by_id) | **GET** /api/v7/GeneralDescription/{id} | Fetches all the information related to a single statutory service general description.
[**get_general_descriptions**](PTV_General_Description_Api.md#get_general_descriptions) | **GET** /api/v7/GeneralDescription | Gets all the statutory service general descriptions within PTV as a list of ids and names.  Descriptions created/modified after certain date can be fetched by adding date as query string parameter.
[**update_general_description_by_id**](PTV_General_Description_Api.md#update_general_description_by_id) | **PUT** /api/v7/GeneralDescription/{id} | Updates the defined general description with the data provided as input.


# **create_general_description**
> PTV_General_Description create_general_description( $request )

Creates a new general description with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_General_Description_Api();
$request = new PTV_General_Description_In(); // PTV_General_Description_In | The general description data.


$result = $api_instance->create_general_description( $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**PTV_General_Description_In**](../model/PTV_General_Description_In.md)| The general description data. | [optional]

### Return type

[**PTV_General_Description**](../model/PTV_General_Description.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_general_description_by_id**
> PTV_General_Description get_general_description_by_id( $id )

Fetches all the information related to a single statutory service general description.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_General_Description_Api();
$id = "id_example"; // string | Statutory service general description guid (id of the entity) to fetch.


$result = $api_instance->get_general_description_by_id( $id );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Statutory service general description guid (id of the entity) to fetch. |

### Return type

[**PTV_General_Description**](../model/PTV_General_Description.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_general_descriptions**
> PTV_Guid_Page get_general_descriptions( $date, $page )

Gets all the statutory service general descriptions within PTV as a list of ids and names.  Descriptions created/modified after certain date can be fetched by adding date as query string parameter.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new PTV_General_Description_Api();
$date = new \DateTime(); // \DateTime | Supports only format \"yyyy-MM-ddTHH:mm:ss\" (UTC).
$page = 56; // int | The page to be fetched. Page numbering starts from one.


$result = $api_instance->get_general_descriptions( $date, $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). | [optional]
 **page** | **int**| The page to be fetched. Page numbering starts from one. | [optional]

### Return type

[**PTV_Guid_Page**](../model/PTV_Guid_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update_general_description_by_id**
> PTV_General_Description update_general_description_by_id( $id, $request )

Updates the defined general description with the data provided as input.

<para>HTTP status code 400 response model is a dictionary where key is property name and value is a list of error messages. Below sample response.</para>  <code>              {                  \"Names\": [                      \"Type - Required value 'Name' was not found!\"                  ]              }              </code>

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

// Configure OAuth2 access token for authorization: oauth2
PTV_Api_Client_Configuration::get_default_configuration()->set_access_token( 'YOUR_ACCESS_TOKEN' );

$api_instance = new PTV_General_Description_Api();
$id = "id_example"; // string | Statutory service general description identifier
$request = new PTV_General_Description_In_Base(); // PTV_General_Description_In_Base | The general description data.


$result = $api_instance->update_general_description_by_id( $id, $request );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Statutory service general description identifier |
 **request** | [**PTV_General_Description_In_Base**](../model/PTV_General_Description_In_Base.md)| The general description data. | [optional]

### Return type

[**PTV_General_Description**](../model/PTV_General_Description.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/json-patch+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


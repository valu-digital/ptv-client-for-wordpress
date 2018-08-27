# CodeList_Api

All URIs are relative to *https://localhost/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**get_area_codes**](CodeList_Api.md#get_area_codes) | **GET** /api/v7/CodeList/GetAreaCodes/type/{type} | Gets a list of area codes filtered by area type.
[**get_country_codes**](CodeList_Api.md#get_country_codes) | **GET** /api/v7/CodeList/GetCountryCodes | Gets a list of country codes.
[**get_language_codes**](CodeList_Api.md#get_language_codes) | **GET** /api/v7/CodeList/GetLanguageCodes | Gets a list of language codes.
[**get_municipality_codes**](CodeList_Api.md#get_municipality_codes) | **GET** /api/v7/CodeList/GetMunicipalityCodes | Gets a list of municipality codes.
[**get_postal_codes**](CodeList_Api.md#get_postal_codes) | **GET** /api/v7/CodeList/GetPostalCodes | Gets a list of postal codes.


# **get_area_codes**
> PTV_Code_List_Item[] get_area_codes( $type )

Gets a list of area codes filtered by area type.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new CodeList_Api();
$type = "type_example"; // string | Area type


$result = $api_instance->get_area_codes( $type );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Area type |

### Return type

[**PTV_Code_List_Item[]**](../model/PTV_Code_List_Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_country_codes**
> PTV_Dial_Code_List_Item[] get_country_codes(  )

Gets a list of country codes.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new CodeList_Api();


$result = $api_instance->get_country_codes(  );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**PTV_Dial_Code_List_Item[]**](../model/PTV_Dial_Code_List_Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_language_codes**
> PTV_Code_List_Item[] get_language_codes(  )

Gets a list of language codes.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new CodeList_Api();


$result = $api_instance->get_language_codes(  );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**PTV_Code_List_Item[]**](../model/PTV_Code_List_Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_municipality_codes**
> PTV_Code_List_Item[] get_municipality_codes(  )

Gets a list of municipality codes.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new CodeList_Api();


$result = $api_instance->get_municipality_codes(  );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**PTV_Code_List_Item[]**](../model/PTV_Code_List_Item.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **get_postal_codes**
> PTV_Code_List_Page get_postal_codes( $page )

Gets a list of postal codes.

### Example
```php
<?php
require_once( __DIR__ . '/vendor/autoload.php' );

$api_instance = new CodeList_Api();
$page = 56; // int | The page to be fetched.


$result = $api_instance->get_postal_codes( $page );

if( ! is_wp_error( $result ) ){
	print_r( $result );
}

?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The page to be fetched. | [optional]

### Return type

[**PTV_Code_List_Page**](../model/PTV_Code_List_Page.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


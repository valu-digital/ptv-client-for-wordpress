<?php
/**
 * CodeList_Api
 * PHP version 5
 *
 * @category Class

 * @author   Valu Digital
 * @link     https://www.valu.fi
 */

/**
 * PTV Client for WordPress
 *
 * PTV Open API Version: v7
 *
 */


/**
 * CodeList_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class CodeList_Api {
	/**
	 * API Client
	 *
	 * @var PTV_Api_Client instance of the PTV_Api_Client
	 */
	protected $api_client;

	/**
	 * Constructor
	 *
	 * @param PTV_Api_Client|null $api_client The api client to use
	 */
	public function __construct( PTV_Api_Client $api_client = null ) {
		if ( null === $api_client ) {
			$api_client = new PTV_Api_Client();
		}

		$this->api_client = $api_client;
	}

	/**
	 * Get API client
	 *
	 * @return PTV_Api_Client get the API client
	 */
	public function get_api_client() {
		return $this->api_client;
	}

	/**
	 * Set the API client
	 *
	 * @param PTV_Api_Client $api_client set the API client
	 *
	 * @return CodeList_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation get_area_codes
	 *
	 * Gets a list of area codes filtered by area type.
	 *
	 * @param string $type Area type (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Code_List_Item[]
	 */
	public function get_area_codes( $type ) {
		list( $response ) = $this->get_area_codes_with_http_info( $type );
		return $response;
	}

	/**
	 * Operation get_area_codes_with_http_info
	 *
	 * Gets a list of area codes filtered by area type.
	 *
	 * @param string $type Area type (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Code_List_Item[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_area_codes_with_http_info( $type ) {
		// verify the required parameter 'type' is set
		if ( null === $type ) {
			throw new InvalidArgumentException( 'Missing the required parameter $type when calling get_area_codes' );
		}
		// parse inputs
		$resource_path = '/api/v7/CodeList/GetAreaCodes/type/{type}';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array() );

		// path params
		if ( null !== $type ) {
			$resource_path = str_replace(
				"{" . "type" . "}",
				$this->api_client->get_serializer()->to_path_value( $type ),
				$resource_path
			);
		}
		
		// for model (json/xml)
		if ( isset( $temp_body ) ) {
			$http_body = $temp_body; // $temp_body is the method argument, if present
		} elseif ( count( $form_params ) > 0 ) {
			$http_body = $form_params; // for HTTP post (form)
		}

		// this endpoint requires OAuth (access token)
		if ( strlen( $this->api_client->get_config()->get_access_token() ) !== 0 ) {
			$header_params['Authorization'] = 'Bearer ' . $this->api_client->get_config()->get_access_token();
		}

		// make the API Call
		list( $response, $status_code, $http_header ) = $this->api_client->call_api(
			$resource_path,
			'GET',
			$query_params,
			$http_body,
			$header_params,
			'PTV_Code_List_Item[]',
			'/api/v7/CodeList/GetAreaCodes/type/{type}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Code_List_Item[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_country_codes
	 *
	 * Gets a list of country codes.
	 *
	 * WP_Error on non-2xx response
	 * @return PTV_Dial_Code_List_Item[]
	 */
	public function get_country_codes(  ) {
		list( $response ) = $this->get_country_codes_with_http_info(  );
		return $response;
	}

	/**
	 * Operation get_country_codes_with_http_info
	 *
	 * Gets a list of country codes.
	 *
	 * WP_Error on non-2xx response
	 * @return array of PTV_Dial_Code_List_Item[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_country_codes_with_http_info(  ) {
		// parse inputs
		$resource_path = '/api/v7/CodeList/GetCountryCodes';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array() );

		
		// for model (json/xml)
		if ( isset( $temp_body ) ) {
			$http_body = $temp_body; // $temp_body is the method argument, if present
		} elseif ( count( $form_params ) > 0 ) {
			$http_body = $form_params; // for HTTP post (form)
		}

		// this endpoint requires OAuth (access token)
		if ( strlen( $this->api_client->get_config()->get_access_token() ) !== 0 ) {
			$header_params['Authorization'] = 'Bearer ' . $this->api_client->get_config()->get_access_token();
		}

		// make the API Call
		list( $response, $status_code, $http_header ) = $this->api_client->call_api(
			$resource_path,
			'GET',
			$query_params,
			$http_body,
			$header_params,
			'PTV_Dial_Code_List_Item[]',
			'/api/v7/CodeList/GetCountryCodes'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Dial_Code_List_Item[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_language_codes
	 *
	 * Gets a list of language codes.
	 *
	 * WP_Error on non-2xx response
	 * @return PTV_Code_List_Item[]
	 */
	public function get_language_codes(  ) {
		list( $response ) = $this->get_language_codes_with_http_info(  );
		return $response;
	}

	/**
	 * Operation get_language_codes_with_http_info
	 *
	 * Gets a list of language codes.
	 *
	 * WP_Error on non-2xx response
	 * @return array of PTV_Code_List_Item[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_language_codes_with_http_info(  ) {
		// parse inputs
		$resource_path = '/api/v7/CodeList/GetLanguageCodes';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array() );

		
		// for model (json/xml)
		if ( isset( $temp_body ) ) {
			$http_body = $temp_body; // $temp_body is the method argument, if present
		} elseif ( count( $form_params ) > 0 ) {
			$http_body = $form_params; // for HTTP post (form)
		}

		// this endpoint requires OAuth (access token)
		if ( strlen( $this->api_client->get_config()->get_access_token() ) !== 0 ) {
			$header_params['Authorization'] = 'Bearer ' . $this->api_client->get_config()->get_access_token();
		}

		// make the API Call
		list( $response, $status_code, $http_header ) = $this->api_client->call_api(
			$resource_path,
			'GET',
			$query_params,
			$http_body,
			$header_params,
			'PTV_Code_List_Item[]',
			'/api/v7/CodeList/GetLanguageCodes'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Code_List_Item[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_municipality_codes
	 *
	 * Gets a list of municipality codes.
	 *
	 * WP_Error on non-2xx response
	 * @return PTV_Code_List_Item[]
	 */
	public function get_municipality_codes(  ) {
		list( $response ) = $this->get_municipality_codes_with_http_info(  );
		return $response;
	}

	/**
	 * Operation get_municipality_codes_with_http_info
	 *
	 * Gets a list of municipality codes.
	 *
	 * WP_Error on non-2xx response
	 * @return array of PTV_Code_List_Item[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_municipality_codes_with_http_info(  ) {
		// parse inputs
		$resource_path = '/api/v7/CodeList/GetMunicipalityCodes';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array() );

		
		// for model (json/xml)
		if ( isset( $temp_body ) ) {
			$http_body = $temp_body; // $temp_body is the method argument, if present
		} elseif ( count( $form_params ) > 0 ) {
			$http_body = $form_params; // for HTTP post (form)
		}

		// this endpoint requires OAuth (access token)
		if ( strlen( $this->api_client->get_config()->get_access_token() ) !== 0 ) {
			$header_params['Authorization'] = 'Bearer ' . $this->api_client->get_config()->get_access_token();
		}

		// make the API Call
		list( $response, $status_code, $http_header ) = $this->api_client->call_api(
			$resource_path,
			'GET',
			$query_params,
			$http_body,
			$header_params,
			'PTV_Code_List_Item[]',
			'/api/v7/CodeList/GetMunicipalityCodes'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Code_List_Item[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_postal_codes
	 *
	 * Gets a list of postal codes.
	 *
	 * @param int $page The page to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Code_List_Page
	 */
	public function get_postal_codes( $page = null ) {
		list( $response ) = $this->get_postal_codes_with_http_info( $page );
		return $response;
	}

	/**
	 * Operation get_postal_codes_with_http_info
	 *
	 * Gets a list of postal codes.
	 *
	 * @param int $page The page to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Code_List_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_postal_codes_with_http_info( $page = null ) {
		// parse inputs
		$resource_path = '/api/v7/CodeList/GetPostalCodes';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array() );

		
		// for model (json/xml)
		if ( isset( $temp_body ) ) {
			$http_body = $temp_body; // $temp_body is the method argument, if present
		} elseif ( count( $form_params ) > 0 ) {
			$http_body = $form_params; // for HTTP post (form)
		}

		// this endpoint requires OAuth (access token)
		if ( strlen( $this->api_client->get_config()->get_access_token() ) !== 0 ) {
			$header_params['Authorization'] = 'Bearer ' . $this->api_client->get_config()->get_access_token();
		}

		// make the API Call
		list( $response, $status_code, $http_header ) = $this->api_client->call_api(
			$resource_path,
			'GET',
			$query_params,
			$http_body,
			$header_params,
			'PTV_Code_List_Page',
			'/api/v7/CodeList/GetPostalCodes'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Code_List_Page', $http_header ), $status_code, $http_header );
	}

}

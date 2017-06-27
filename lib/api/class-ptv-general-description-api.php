<?php
/**
 * PTV_General_Description_Api
 * PHP version 5
 *
 * @category Class

 * @author   Valu Digital
 * @link     https://www.valu.fi
 */

/**
 * PTV Client for WordPress
 *
 * PTV Open API Version: v5
 *
 */


/**
 * PTV_General_Description_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_General_Description_Api {
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
	 * @return PTV_General_Description_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_general_description
	 *
	 * Creates a new general description with the data provided as input.
	 *
	 * @param PTV_General_Description_In $request The general description data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_General_Description
	 */
	public function create_general_description( $request = null ) {
		list( $response ) = $this->create_general_description_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_general_description_with_http_info
	 *
	 * Creates a new general description with the data provided as input.
	 *
	 * @param PTV_General_Description_In $request The general description data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_General_Description, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_general_description_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/GeneralDescription';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array('application/json', 'text/json', 'application/json-patch+json') );

		// body params
		$temp_body = null;
		if ( isset( $request ) ) {
			$temp_body = $request;
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
			'POST',
			$query_params,
			$http_body,
			$header_params,
			'PTV_General_Description',
			'/api/v5/GeneralDescription'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_General_Description', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_general_description_by_id
	 *
	 * Fetches all the information related to a single statutory service general description.
	 *
	 * @param string $id Statutory service general description guid (id of the entity) to fetch. (required)
	 * WP_Error on non-2xx response
	 * @return PTV_General_Description
	 */
	public function get_general_description_by_id( $id ) {
		list( $response ) = $this->get_general_description_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_general_description_by_id_with_http_info
	 *
	 * Fetches all the information related to a single statutory service general description.
	 *
	 * @param string $id Statutory service general description guid (id of the entity) to fetch. (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_General_Description, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_general_description_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_general_description_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/GeneralDescription/{id}';
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
		if ( null !== $id ) {
			$resource_path = str_replace(
				"{" . "id" . "}",
				$this->api_client->get_serializer()->to_path_value( $id ),
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
			'PTV_General_Description',
			'/api/v5/GeneralDescription/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_General_Description', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_general_descriptions
	 *
	 * Gets all the statutory service general descriptions within PTV as a list of ids and names.  Descriptions created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page to be fetched. Page numbering starts from one. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_general_descriptions( $date = null, $page = null ) {
		list( $response ) = $this->get_general_descriptions_with_http_info( $date, $page );
		return $response;
	}

	/**
	 * Operation get_general_descriptions_with_http_info
	 *
	 * Gets all the statutory service general descriptions within PTV as a list of ids and names.  Descriptions created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page to be fetched. Page numbering starts from one. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_general_descriptions_with_http_info( $date = null, $page = null ) {
		// parse inputs
		$resource_path = '/api/v5/GeneralDescription';
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
			'PTV_Guid_Page',
			'/api/v5/GeneralDescription'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_general_description
	 *
	 * Updates the defined general description with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_General_Description_In_Base $request The general description data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_General_Description
	 */
	public function update_general_description( $id, $request = null ) {
		list( $response ) = $this->update_general_description_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_general_description_with_http_info
	 *
	 * Updates the defined general description with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_General_Description_In_Base $request The general description data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_General_Description, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_general_description_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_general_description' );
		}
		// parse inputs
		$resource_path = '/api/v5/GeneralDescription/{id}';
		$http_body = '';
		$query_params = array();
		$header_params = array();
		$form_params = array();
		$_header_accept = $this->api_client->select_header_accept( array( 'text/plain', 'application/json', 'text/json' ) );
		if ( ! is_null( $_header_accept ) ) {
			$header_params['Accept'] = $_header_accept;
		}
		$header_params['Content-Type'] = $this->api_client->select_header_content_type( array('application/json', 'text/json', 'application/json-patch+json') );

		// path params
		if ( null !== $id ) {
			$resource_path = str_replace(
				"{" . "id" . "}",
				$this->api_client->get_serializer()->to_path_value( $id ),
				$resource_path
			);
		}
		// body params
		$temp_body = null;
		if ( isset( $request ) ) {
			$temp_body = $request;
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
			'PUT',
			$query_params,
			$http_body,
			$header_params,
			'PTV_General_Description',
			'/api/v5/GeneralDescription/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_General_Description', $http_header ), $status_code, $http_header );
	}

}

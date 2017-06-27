<?php
/**
 * PTV_Organization_Api
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
 * PTV_Organization_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Organization_Api {
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
	 * @return PTV_Organization_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_organization
	 *
	 * Creates a new organization with the data provided as input.
	 *
	 * @param PTV_Organization_In $request The organization data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization
	 */
	public function create_organization( $request = null ) {
		list( $response ) = $this->create_organization_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_organization_with_http_info
	 *
	 * Creates a new organization with the data provided as input.
	 *
	 * @param PTV_Organization_In $request The organization data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_organization_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/Organization';
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
			'PTV_Organization',
			'/api/v5/Organization'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_organization_by_businesscode
	 *
	 * Fetches all the information related to organizations with defined business identity code.
	 *
	 * @param string $code Finnish business identity code (Y-tunnus). (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization[]
	 */
	public function get_organization_by_businesscode( $code ) {
		list( $response ) = $this->get_organization_by_businesscode_with_http_info( $code );
		return $response;
	}

	/**
	 * Operation get_organization_by_businesscode_with_http_info
	 *
	 * Fetches all the information related to organizations with defined business identity code.
	 *
	 * @param string $code Finnish business identity code (Y-tunnus). (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_organization_by_businesscode_with_http_info( $code ) {
		// verify the required parameter 'code' is set
		if ( null === $code ) {
			throw new InvalidArgumentException( 'Missing the required parameter $code when calling get_organization_by_businesscode' );
		}
		// parse inputs
		$resource_path = '/api/v5/Organization/businesscode/{code}';
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
		if ( null !== $code ) {
			$resource_path = str_replace(
				"{" . "code" . "}",
				$this->api_client->get_serializer()->to_path_value( $code ),
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
			'PTV_Organization[]',
			'/api/v5/Organization/businesscode/{code}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_organization_by_id
	 *
	 * Fetches all the information related to a single organization.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization
	 */
	public function get_organization_by_id( $id ) {
		list( $response ) = $this->get_organization_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_organization_by_id_with_http_info
	 *
	 * Fetches all the information related to a single organization.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_organization_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_organization_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Organization/{id}';
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
			'PTV_Organization',
			'/api/v5/Organization/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_organization_by_oid
	 *
	 * Fetches all the information related to a single organization with defined Oid.
	 *
	 * @param string $oid Oid identifier (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization
	 */
	public function get_organization_by_oid( $oid ) {
		list( $response ) = $this->get_organization_by_oid_with_http_info( $oid );
		return $response;
	}

	/**
	 * Operation get_organization_by_oid_with_http_info
	 *
	 * Fetches all the information related to a single organization with defined Oid.
	 *
	 * @param string $oid Oid identifier (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_organization_by_oid_with_http_info( $oid ) {
		// verify the required parameter 'oid' is set
		if ( null === $oid ) {
			throw new InvalidArgumentException( 'Missing the required parameter $oid when calling get_organization_by_oid' );
		}
		// parse inputs
		$resource_path = '/api/v5/Organization/oid/{oid}';
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
		if ( null !== $oid ) {
			$resource_path = str_replace(
				"{" . "oid" . "}",
				$this->api_client->get_serializer()->to_path_value( $oid ),
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
			'PTV_Organization',
			'/api/v5/Organization/oid/{oid}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_organizations
	 *
	 * Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_organizations( $date = null, $page = null ) {
		list( $response ) = $this->get_organizations_with_http_info( $date, $page );
		return $response;
	}

	/**
	 * Operation get_organizations_with_http_info
	 *
	 * Gets all the published organizations within PTV as a list of organization ids and names.  Organizations created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_organizations_with_http_info( $date = null, $page = null ) {
		// parse inputs
		$resource_path = '/api/v5/Organization';
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
			'/api/v5/Organization'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_organization_by_id
	 *
	 * Updates organization.
	 *
	 * @param string $id organization entity id (required)
	 * @param PTV_Organization_In_Base $request organization values (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization
	 */
	public function update_organization_by_id( $id, $request = null ) {
		list( $response ) = $this->update_organization_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_organization_by_id_with_http_info
	 *
	 * Updates organization.
	 *
	 * @param string $id organization entity id (required)
	 * @param PTV_Organization_In_Base $request organization values (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_organization_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_organization_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Organization/{id}';
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
			'PTV_Organization',
			'/api/v5/Organization/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_organization_by_source_id
	 *
	 * Updates organization.
	 *
	 * @param string $source_id organization external id (required)
	 * @param PTV_Organization_In_Base $request organization values (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Organization
	 */
	public function update_organization_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_organization_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_organization_by_source_id_with_http_info
	 *
	 * Updates organization.
	 *
	 * @param string $source_id organization external id (required)
	 * @param PTV_Organization_In_Base $request organization values (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Organization, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_organization_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_organization_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Organization/sourceId/{sourceId}';
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
		if ( null !== $source_id ) {
			$resource_path = str_replace(
				"{" . "sourceId" . "}",
				$this->api_client->get_serializer()->to_path_value( $source_id ),
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
			'PTV_Organization',
			'/api/v5/Organization/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Organization', $http_header ), $status_code, $http_header );
	}

}

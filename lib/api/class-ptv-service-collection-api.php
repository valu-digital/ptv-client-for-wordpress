<?php
/**
 * PTV_ServiceCollection_Api
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
 * PTV_ServiceCollection_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_ServiceCollection_Api {
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
	 * @return PTV_ServiceCollection_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_service_collection
	 *
	 * Creates a new service collection with the data provided as input.
	 *
	 * @param PTV_Service_Collection_In $request The service collection data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Collection
	 */
	public function create_service_collection( $request = null ) {
		list( $response ) = $this->create_service_collection_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_service_collection_with_http_info
	 *
	 * Creates a new service collection with the data provided as input.
	 *
	 * @param PTV_Service_Collection_In $request The service collection data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Collection, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_service_collection_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v7/ServiceCollection';
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
			'PTV_Service_Collection',
			'/api/v7/ServiceCollection'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Collection', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_collection_by_id
	 *
	 * Fetches all the information related to a single service collection.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Collection
	 */
	public function get_service_collection_by_id( $id ) {
		list( $response ) = $this->get_service_collection_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_service_collection_by_id_with_http_info
	 *
	 * Fetches all the information related to a single service collection.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Collection, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_collection_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_service_collection_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/ServiceCollection/{id}';
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
			'PTV_Service_Collection',
			'/api/v7/ServiceCollection/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Collection', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_collections
	 *
	 * Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * @param bool $archived Get archived items by setting archived to true. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_service_collections( $date = null, $page = null, $archived = null ) {
		list( $response ) = $this->get_service_collections_with_http_info( $date, $page, $archived );
		return $response;
	}

	/**
	 * Operation get_service_collections_with_http_info
	 *
	 * Gets all the published service collections within PTV as a list of service collection ids and names.  Service collections created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * @param bool $archived Get archived items by setting archived to true. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_collections_with_http_info( $date = null, $page = null, $archived = null ) {
		// parse inputs
		$resource_path = '/api/v7/ServiceCollection';
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
			'/api/v7/ServiceCollection'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_collection_by_source_id
	 *
	 * Updates the defined service collection with the data provided as input.
	 *
	 * @param string $source_id External source identifier (required)
	 * @param PTV_Service_Collection_In_Base $request The service collection data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Collection
	 */
	public function update_collection_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_collection_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_collection_by_source_id_with_http_info
	 *
	 * Updates the defined service collection with the data provided as input.
	 *
	 * @param string $source_id External source identifier (required)
	 * @param PTV_Service_Collection_In_Base $request The service collection data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Collection, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_collection_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_collection_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/ServiceCollection/sourceId/{sourceId}';
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
			'PTV_Service_Collection',
			'/api/v7/ServiceCollection/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Collection', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_collection_by_id
	 *
	 * Updates the defined service collection with the data provided as input.
	 *
	 * @param string $id Service collection identifier (required)
	 * @param PTV_Service_Collection_In_Base $request The service collection data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Collection
	 */
	public function update_service_collection_by_id( $id, $request = null ) {
		list( $response ) = $this->update_service_collection_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_service_collection_by_id_with_http_info
	 *
	 * Updates the defined service collection with the data provided as input.
	 *
	 * @param string $id Service collection identifier (required)
	 * @param PTV_Service_Collection_In_Base $request The service collection data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Collection, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_collection_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_service_collection_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/ServiceCollection/{id}';
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
			'PTV_Service_Collection',
			'/api/v7/ServiceCollection/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Collection', $http_header ), $status_code, $http_header );
	}

}

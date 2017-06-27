<?php
/**
 * PTV_Service_Api
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
 * PTV_Service_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Service_Api {
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
	 * @return PTV_Service_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_service
	 *
	 * Creates a new service with the data provided as input.
	 *
	 * @param PTV_Service_In $request The service data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function create_service( $request = null ) {
		list( $response ) = $this->create_service_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_service_with_http_info
	 *
	 * Creates a new service with the data provided as input.
	 *
	 * @param PTV_Service_In $request The service data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_service_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/Service';
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
			'PTV_Service',
			'/api/v5/Service'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_service_and_channel
	 *
	 * Creates a relationships between services and service channels with extra data.
	 *
	 * @param PTV_Service_And_Channel[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return string[]
	 */
	public function create_service_and_channel( $request = null ) {
		list( $response ) = $this->create_service_and_channel_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_service_and_channel_with_http_info
	 *
	 * Creates a relationships between services and service channels with extra data.
	 *
	 * @param PTV_Service_And_Channel[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of string[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_service_and_channel_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/Service/ServiceAndChannel';
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
			'string[]',
			'/api/v5/Service/ServiceAndChannel'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'string[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_by_id
	 *
	 * Fetches all the information related to a single service.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function get_service_by_id( $id ) {
		list( $response ) = $this->get_service_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_service_by_id_with_http_info
	 *
	 * Fetches all the information related to a single service.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_service_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Service/{id}';
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
			'PTV_Service',
			'/api/v5/Service/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_services
	 *
	 * Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_services( $date = null, $page = null ) {
		list( $response ) = $this->get_services_with_http_info( $date, $page );
		return $response;
	}

	/**
	 * Operation get_services_with_http_info
	 *
	 * Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_services_with_http_info( $date = null, $page = null ) {
		// parse inputs
		$resource_path = '/api/v5/Service';
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
			'/api/v5/Service'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_services_for_service_channel_by_id
	 *
	 * Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $service_channel_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service[]
	 */
	public function get_services_for_service_channel_by_id( $service_channel_id, $date = null ) {
		list( $response ) = $this->get_services_for_service_channel_by_id_with_http_info( $service_channel_id, $date );
		return $response;
	}

	/**
	 * Operation get_services_for_service_channel_by_id_with_http_info
	 *
	 * Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $service_channel_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_services_for_service_channel_by_id_with_http_info( $service_channel_id, $date = null ) {
		// verify the required parameter 'service_channel_id' is set
		if ( null === $service_channel_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_channel_id when calling get_services_for_service_channel_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Service/serviceChannel/{serviceChannelId}';
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
		if ( null !== $service_channel_id ) {
			$resource_path = str_replace(
				"{" . "serviceChannelId" . "}",
				$this->api_client->get_serializer()->to_path_value( $service_channel_id ),
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
			'PTV_Service[]',
			'/api/v5/Service/serviceChannel/{serviceChannelId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_and_channel_by_service_id
	 *
	 * Updates relationships between a service and service channels with extra data.   Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel relations for a service set 'deleteAllChannelRelations' property to true.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_service_and_channel_by_service_id( $service_id, $request = null ) {
		list( $response ) = $this->update_service_and_channel_by_service_id_with_http_info( $service_id, $request );
		return $response;
	}

	/**
	 * Operation update_service_and_channel_by_service_id_with_http_info
	 *
	 * Updates relationships between a service and service channels with extra data.   Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel relations for a service set 'deleteAllChannelRelations' property to true.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_and_channel_by_service_id_with_http_info( $service_id, $request = null ) {
		// verify the required parameter 'service_id' is set
		if ( null === $service_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_id when calling update_service_and_channel_by_service_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Service/ServiceAndChannel/{serviceId}';
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
		if ( null !== $service_id ) {
			$resource_path = str_replace(
				"{" . "serviceId" . "}",
				$this->api_client->get_serializer()->to_path_value( $service_id ),
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
			'PTV_Service',
			'/api/v5/Service/ServiceAndChannel/{serviceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_by_id
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_service_by_id( $id, $request = null ) {
		list( $response ) = $this->update_service_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_service_by_id_with_http_info
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_service_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Service/{id}';
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
			'PTV_Service',
			'/api/v5/Service/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_by_source_id
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $source_id External source identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_service_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_service_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_service_by_source_id_with_http_info
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $source_id External source identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_service_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/Service/sourceId/{sourceId}';
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
			'PTV_Service',
			'/api/v5/Service/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}

}

<?php
/**
 * PTV_Connection_Api
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
 * PTV_Connection_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Connection_Api {
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
	 * @return PTV_Connection_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_connection
	 *
	 * Creates a connections between services and service channels with extra data.
	 *
	 * @param PTV_Service_And_Channel_In[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return string[]
	 */
	public function create_connection( $request = null ) {
		list( $response ) = $this->create_connection_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_connection_with_http_info
	 *
	 * Creates a connections between services and service channels with extra data.
	 *
	 * @param PTV_Service_And_Channel_In[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of string[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_connection_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v7/Connection';
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
			'/api/v7/Connection'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'string[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_connection_by_source
	 *
	 * Creates a connections between services and service channels with extra data. External source ids are used.
	 *
	 * @param PTV_Service_And_Channel_Relation_By_Source[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return string[]
	 */
	public function create_connection_by_source( $request = null ) {
		list( $response ) = $this->create_connection_by_source_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_connection_by_source_with_http_info
	 *
	 * Creates a connections between services and service channels with extra data. External source ids are used.
	 *
	 * @param PTV_Service_And_Channel_Relation_By_Source[] $request A list of services and service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of string[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_connection_by_source_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v7/Connection/Source';
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
			'/api/v7/Connection/Source'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'string[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_asti_connections_by_service_channel_id
	 *
	 * Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set 'deleteAllServiceRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_channel_id Service channel identifier (required)
	 * @param PTV_Channel_Services_In $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_asti_connections_by_service_channel_id( $service_channel_id, $request = null ) {
		list( $response ) = $this->update_asti_connections_by_service_channel_id_with_http_info( $service_channel_id, $request );
		return $response;
	}

	/**
	 * Operation update_asti_connections_by_service_channel_id_with_http_info
	 *
	 * Updates connections between a service channel and services with extra data.  Request includes services for one certain service channel and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI connections for a service channel set 'deleteAllServiceRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_channel_id Service channel identifier (required)
	 * @param PTV_Channel_Services_In $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_asti_connections_by_service_channel_id_with_http_info( $service_channel_id, $request = null ) {
		// verify the required parameter 'service_channel_id' is set
		if ( null === $service_channel_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_channel_id when calling update_asti_connections_by_service_channel_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Connection/ASTI/serviceChannelId/{serviceChannelId}';
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
		if ( null !== $service_channel_id ) {
			$resource_path = str_replace(
				"{" . "serviceChannelId" . "}",
				$this->api_client->get_serializer()->to_path_value( $service_channel_id ),
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
			'/api/v7/Connection/ASTI/serviceChannelId/{serviceChannelId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_asti_connections_by_service_id
	 *
	 * Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Asti_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_asti_connections_by_service_id( $service_id, $request = null ) {
		list( $response ) = $this->update_asti_connections_by_service_id_with_http_info( $service_id, $request );
		return $response;
	}

	/**
	 * Operation update_asti_connections_by_service_id_with_http_info
	 *
	 * Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service, set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Asti_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_asti_connections_by_service_id_with_http_info( $service_id, $request = null ) {
		// verify the required parameter 'service_id' is set
		if ( null === $service_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_id when calling update_asti_connections_by_service_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Connection/ASTI/serviceId/{serviceId}';
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
			'/api/v7/Connection/ASTI/serviceId/{serviceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_asti_connections_by_service_source_id
	 *
	 * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_source_id External source identifier for service (required)
	 * @param PTV_Service_And_Channel_Asti_Relation_By_Source $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_asti_connections_by_service_source_id( $service_source_id, $request = null ) {
		list( $response ) = $this->update_asti_connections_by_service_source_id_with_http_info( $service_source_id, $request );
		return $response;
	}

	/**
	 * Operation update_asti_connections_by_service_source_id_with_http_info
	 *
	 * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service and missing ASTI connections are removed. Regular connections are left as they are.  To delete all ASTI service channel connections for a service set 'deleteAllChannelRelations' property to true.  This is special endpoint for ASTI and users need to have special access right to be able use it.
	 *
	 * @param string $service_source_id External source identifier for service (required)
	 * @param PTV_Service_And_Channel_Asti_Relation_By_Source $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_asti_connections_by_service_source_id_with_http_info( $service_source_id, $request = null ) {
		// verify the required parameter 'service_source_id' is set
		if ( null === $service_source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_source_id when calling update_asti_connections_by_service_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Connection/ASTI/serviceSourceId/{serviceSourceId}';
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
		if ( null !== $service_source_id ) {
			$resource_path = str_replace(
				"{" . "serviceSourceId" . "}",
				$this->api_client->get_serializer()->to_path_value( $service_source_id ),
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
			'/api/v7/Connection/ASTI/serviceSourceId/{serviceSourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_connection
	 *
	 * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set 'deleteAllChannelRelations' property to true.  ASTI connections are not removed - data for those connections can be updated though.
	 *
	 * @param string $service_source_id External source identifier for service (required)
	 * @param PTV_Service_And_Channel_Relation_By_Source_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_connection( $service_source_id, $request = null ) {
		list( $response ) = $this->update_connection_with_http_info( $service_source_id, $request );
		return $response;
	}

	/**
	 * Operation update_connection_with_http_info
	 *
	 * Updates connections between a service and service channels with extra data. External source ids are used.  Request includes service channels for one certain service so service channels missing from request are removed.  To delete all service channel connections for a service set 'deleteAllChannelRelations' property to true.  ASTI connections are not removed - data for those connections can be updated though.
	 *
	 * @param string $service_source_id External source identifier for service (required)
	 * @param PTV_Service_And_Channel_Relation_By_Source_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_connection_with_http_info( $service_source_id, $request = null ) {
		// verify the required parameter 'service_source_id' is set
		if ( null === $service_source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_source_id when calling update_connection' );
		}
		// parse inputs
		$resource_path = '/api/v7/Connection/serviceSourceId/{serviceSourceId}';
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
		if ( null !== $service_source_id ) {
			$resource_path = str_replace(
				"{" . "serviceSourceId" . "}",
				$this->api_client->get_serializer()->to_path_value( $service_source_id ),
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
			'/api/v7/Connection/serviceSourceId/{serviceSourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_connection_by_service_id
	 *
	 * Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set 'deleteAllChannelRelations' property to true.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_connection_by_service_id( $service_id, $request = null ) {
		list( $response ) = $this->update_connection_by_service_id_with_http_info( $service_id, $request );
		return $response;
	}

	/**
	 * Operation update_connection_by_service_id_with_http_info
	 *
	 * Updates connections between a service and service channels with extra data.   Request includes service channels for one certain service so regular connections missing from request are removed.  ASTI connections are left as they are.  To delete all regular service channel connections for a service, set 'deleteAllChannelRelations' property to true.
	 *
	 * @param string $service_id Service identifier (required)
	 * @param PTV_Service_And_Channel_Relation_In_Base $request A list of service channels. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_connection_by_service_id_with_http_info( $service_id, $request = null ) {
		// verify the required parameter 'service_id' is set
		if ( null === $service_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_id when calling update_connection_by_service_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Connection/serviceId/{serviceId}';
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
			'/api/v7/Connection/serviceId/{serviceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}

}

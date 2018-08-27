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
 * PTV Open API Version: v7
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
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function create_service( $request = null, $attach_proposed_channels = null ) {
		list( $response ) = $this->create_service_with_http_info( $request, $attach_proposed_channels );
		return $response;
	}

	/**
	 * Operation create_service_with_http_info
	 *
	 * Creates a new service with the data provided as input.
	 *
	 * @param PTV_Service_In $request The service data. (optional)
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_service_with_http_info( $request = null, $attach_proposed_channels = null ) {
		// parse inputs
		$resource_path = '/api/v7/Service';
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
			'/api/v7/Service'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_active_service_by_id
	 *
	 * Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function get_active_service_by_id( $id ) {
		list( $response ) = $this->get_active_service_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_active_service_by_id_with_http_info
	 *
	 * Fetches all the information related to a single service. Also services with only draft or modified versions are returned.  NOTE! This is a restricted endpoint.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_active_service_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_active_service_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/active/{id}';
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
			'/api/v7/Service/active/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_active_services
	 *
	 * Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.   Services created after certain date can be fetched by adding date as query string parameter.   NOTE! This is a restricted endpoint.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_active_services( $date = null, $page = null ) {
		list( $response ) = $this->get_active_services_with_http_info( $date, $page );
		return $response;
	}

	/**
	 * Operation get_active_services_with_http_info
	 *
	 * Gets all services within PTV as a list of service ids and names. Also services with draft and modified versions are included.   Services created after certain date can be fetched by adding date as query string parameter.   NOTE! This is a restricted endpoint.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_active_services_with_http_info( $date = null, $page = null ) {
		// parse inputs
		$resource_path = '/api/v7/Service/active';
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
			'/api/v7/Service/active'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_municipality_by_code
	 *
	 * Gets a list of published services related to defined municipality.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $code Municipality code (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_municipality_by_code( $code, $date = null, $page = null ) {
		list( $response ) = $this->get_municipality_by_code_with_http_info( $code, $date, $page );
		return $response;
	}

	/**
	 * Operation get_municipality_by_code_with_http_info
	 *
	 * Gets a list of published services related to defined municipality.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $code Municipality code (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_municipality_by_code_with_http_info( $code, $date = null, $page = null ) {
		// verify the required parameter 'code' is set
		if ( null === $code ) {
			throw new InvalidArgumentException( 'Missing the required parameter $code when calling get_municipality_by_code' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/municipality/{code}';
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
			'PTV_Guid_Page',
			'/api/v7/Service/municipality/{code}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
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
		$resource_path = '/api/v7/Service/{id}';
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
			'/api/v7/Service/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_class_by_uri
	 *
	 * Gets a list of published services for defined service class.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $uri Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065 (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_service_class_by_uri( $uri, $date = null, $page = null ) {
		list( $response ) = $this->get_service_class_by_uri_with_http_info( $uri, $date, $page );
		return $response;
	}

	/**
	 * Operation get_service_class_by_uri_with_http_info
	 *
	 * Gets a list of published services for defined service class.  Services created after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $uri Service class uri, e.g. http://urn.fi/URN:NBN:fi:au:ptvl:v1065 (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_class_by_uri_with_http_info( $uri, $date = null, $page = null ) {
		// verify the required parameter 'uri' is set
		if ( null === $uri ) {
			throw new InvalidArgumentException( 'Missing the required parameter $uri when calling get_service_class_by_uri' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/serviceClass/{uri}';
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
		if ( null !== $uri ) {
			$resource_path = str_replace(
				"{" . "uri" . "}",
				$this->api_client->get_serializer()->to_path_value( $uri ),
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
			'PTV_Guid_Page',
			'/api/v7/Service/serviceClass/{uri}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_services
	 *
	 * Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * @param bool $archived Get archived items by setting archived to true. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_services( $date = null, $page = null, $archived = null ) {
		list( $response ) = $this->get_services_with_http_info( $date, $page, $archived );
		return $response;
	}

	/**
	 * Operation get_services_with_http_info
	 *
	 * Gets all the published services within PTV as a list of service ids and names.  Services created after certain date can be fetched by adding date as query string parameter.  Archived items can be fetched by setting parameter archived to true.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * @param bool $archived Get archived items by setting archived to true. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_services_with_http_info( $date = null, $page = null, $archived = null ) {
		// parse inputs
		$resource_path = '/api/v7/Service';
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
			'/api/v7/Service'
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
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_services_for_service_channel_by_id( $service_channel_id, $date = null, $page = null ) {
		list( $response ) = $this->get_services_for_service_channel_by_id_with_http_info( $service_channel_id, $date, $page );
		return $response;
	}

	/**
	 * Operation get_services_for_service_channel_by_id_with_http_info
	 *
	 * Gets a list of published services for defined service channel.  Services joined to service channel after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $service_channel_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_services_for_service_channel_by_id_with_http_info( $service_channel_id, $date = null, $page = null ) {
		// verify the required parameter 'service_channel_id' is set
		if ( null === $service_channel_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $service_channel_id when calling get_services_for_service_channel_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/serviceChannel/{serviceChannelId}';
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
			'PTV_Guid_Page',
			'/api/v7/Service/serviceChannel/{serviceChannelId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_by_id
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_service_by_id( $id, $request = null, $attach_proposed_channels = null ) {
		list( $response ) = $this->update_service_by_id_with_http_info( $id, $request, $attach_proposed_channels );
		return $response;
	}

	/**
	 * Operation update_service_by_id_with_http_info
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $id Service identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_by_id_with_http_info( $id, $request = null, $attach_proposed_channels = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_service_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/{id}';
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
			'/api/v7/Service/{id}'
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
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service
	 */
	public function update_service_by_source_id( $source_id, $request = null, $attach_proposed_channels = null ) {
		list( $response ) = $this->update_service_by_source_id_with_http_info( $source_id, $request, $attach_proposed_channels );
		return $response;
	}

	/**
	 * Operation update_service_by_source_id_with_http_info
	 *
	 * Updates the defined service with the data provided as input.
	 *
	 * @param string $source_id External source identifier (required)
	 * @param PTV_Service_In_Base $request The service data (optional)
	 * @param bool $attach_proposed_channels Indicates if service channels attached into general description should automatically be attached into the service. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_by_source_id_with_http_info( $source_id, $request = null, $attach_proposed_channels = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_service_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Service/sourceId/{sourceId}';
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
			'/api/v7/Service/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service', $http_header ), $status_code, $http_header );
	}

}

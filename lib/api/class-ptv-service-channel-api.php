<?php
/**
 * PTV_Service_Channel_Api
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
 * PTV_Service_Channel_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Service_Channel_Api {
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
	 * @return PTV_Service_Channel_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation create_echannel
	 *
	 * Creates a new electronic channel with the data provided as input.
	 *
	 * @param PTV_EChannel_Channel_In $request The electronic channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_EChannel_Channel
	 */
	public function create_echannel( $request = null ) {
		list( $response ) = $this->create_echannel_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_echannel_with_http_info
	 *
	 * Creates a new electronic channel with the data provided as input.
	 *
	 * @param PTV_EChannel_Channel_In $request The electronic channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_EChannel_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_echannel_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/EChannel';
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
			'PTV_EChannel_Channel',
			'/api/v5/ServiceChannel/EChannel'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_EChannel_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_phone
	 *
	 * Creates a new phone channel with the data provided as input.
	 *
	 * @param PTV_Phone_Channel_In $request The phone channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Phone_Channel
	 */
	public function create_phone( $request = null ) {
		list( $response ) = $this->create_phone_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_phone_with_http_info
	 *
	 * Creates a new phone channel with the data provided as input.
	 *
	 * @param PTV_Phone_Channel_In $request The phone channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Phone_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_phone_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/Phone';
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
			'PTV_Phone_Channel',
			'/api/v5/ServiceChannel/Phone'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Phone_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_printable_form
	 *
	 * Creates a new printable form channel with the data provided as input.
	 *
	 * @param PTV_Printable_Form_Channel_In $request The printable form channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Printable_Form_Channel
	 */
	public function create_printable_form( $request = null ) {
		list( $response ) = $this->create_printable_form_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_printable_form_with_http_info
	 *
	 * Creates a new printable form channel with the data provided as input.
	 *
	 * @param PTV_Printable_Form_Channel_In $request The printable form channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Printable_Form_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_printable_form_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/PrintableForm';
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
			'PTV_Printable_Form_Channel',
			'/api/v5/ServiceChannel/PrintableForm'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Printable_Form_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_service_location
	 *
	 * Creates a new service location channel with the data provided as input.
	 *
	 * @param PTV_Service_Location_Channel_In $request The service location channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Location_Channel
	 */
	public function create_service_location( $request = null ) {
		list( $response ) = $this->create_service_location_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_service_location_with_http_info
	 *
	 * Creates a new service location channel with the data provided as input.
	 *
	 * @param PTV_Service_Location_Channel_In $request The service location channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Location_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_service_location_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/ServiceLocation';
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
			'PTV_Service_Location_Channel',
			'/api/v5/ServiceChannel/ServiceLocation'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Location_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation create_webpage
	 *
	 * Creates a new web page channel with the data provided as input.
	 *
	 * @param PTV_Web_Page_Channel_In $request The web page channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Web_Page_Channel
	 */
	public function create_webpage( $request = null ) {
		list( $response ) = $this->create_webpage_with_http_info( $request );
		return $response;
	}

	/**
	 * Operation create_webpage_with_http_info
	 *
	 * Creates a new web page channel with the data provided as input.
	 *
	 * @param PTV_Web_Page_Channel_In $request The web page channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Web_Page_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function create_webpage_with_http_info( $request = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/WebPage';
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
			'PTV_Web_Page_Channel',
			'/api/v5/ServiceChannel/WebPage'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Web_Page_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_channel_by_id
	 *
	 * Fetches all the information related to a single service channel.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Channels
	 */
	public function get_service_channel_by_id( $id ) {
		list( $response ) = $this->get_service_channel_by_id_with_http_info( $id );
		return $response;
	}

	/**
	 * Operation get_service_channel_by_id_with_http_info
	 *
	 * Fetches all the information related to a single service channel.
	 *
	 * @param string $id Guid (required)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Channels, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_channel_by_id_with_http_info( $id ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling get_service_channel_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/{id}';
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
			'PTV_Service_Channels',
			'/api/v5/ServiceChannel/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Channels', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_channel_by_type
	 *
	 * Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $type Service channel type (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Channels[]
	 */
	public function get_service_channel_by_type( $type, $date = null ) {
		list( $response ) = $this->get_service_channel_by_type_with_http_info( $type, $date );
		return $response;
	}

	/**
	 * Operation get_service_channel_by_type_with_http_info
	 *
	 * Gets a list of certain type of published service channels.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $type Service channel type (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Channels[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_channel_by_type_with_http_info( $type, $date = null ) {
		// verify the required parameter 'type' is set
		if ( null === $type ) {
			throw new InvalidArgumentException( 'Missing the required parameter $type when calling get_service_channel_by_type' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/type/{type}';
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
			'PTV_Service_Channels[]',
			'/api/v5/ServiceChannel/type/{type}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Channels[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_channels
	 *
	 * Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Guid_Page
	 */
	public function get_service_channels( $date = null, $page = null ) {
		list( $response ) = $this->get_service_channels_with_http_info( $date, $page );
		return $response;
	}

	/**
	 * Operation get_service_channels_with_http_info
	 *
	 * Gets all published service channels within PTV as a list of service channel ids and names.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_channels_with_http_info( $date = null, $page = null ) {
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel';
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
			'/api/v5/ServiceChannel'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Guid_Page', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_channels_for_organization_by_organization_id
	 *
	 * Gets a list of published service channels for defined organization.   Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Channels[]
	 */
	public function get_service_channels_for_organization_by_organization_id( $organization_id, $date = null ) {
		list( $response ) = $this->get_service_channels_for_organization_by_organization_id_with_http_info( $organization_id, $date );
		return $response;
	}

	/**
	 * Operation get_service_channels_for_organization_by_organization_id_with_http_info
	 *
	 * Gets a list of published service channels for defined organization.   Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Channels[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_channels_for_organization_by_organization_id_with_http_info( $organization_id, $date = null ) {
		// verify the required parameter 'organization_id' is set
		if ( null === $organization_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $organization_id when calling get_service_channels_for_organization_by_organization_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/organization/{organizationId}';
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
		if ( null !== $organization_id ) {
			$resource_path = str_replace(
				"{" . "organizationId" . "}",
				$this->api_client->get_serializer()->to_path_value( $organization_id ),
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
			'PTV_Service_Channels[]',
			'/api/v5/ServiceChannel/organization/{organizationId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Channels[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation get_service_channels_for_organization_by_organization_type
	 *
	 * Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param string $type Service channel type (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Channels[]
	 */
	public function get_service_channels_for_organization_by_organization_type( $organization_id, $type, $date = null ) {
		list( $response ) = $this->get_service_channels_for_organization_by_organization_type_with_http_info( $organization_id, $type, $date );
		return $response;
	}

	/**
	 * Operation get_service_channels_for_organization_by_organization_type_with_http_info
	 *
	 * Gets a list of certain type of published service channels for defined organization.  Service channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param string $type Service channel type (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Channels[], HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_service_channels_for_organization_by_organization_type_with_http_info( $organization_id, $type, $date = null ) {
		// verify the required parameter 'organization_id' is set
		if ( null === $organization_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $organization_id when calling get_service_channels_for_organization_by_organization_type' );
		}
		// verify the required parameter 'type' is set
		if ( null === $type ) {
			throw new InvalidArgumentException( 'Missing the required parameter $type when calling get_service_channels_for_organization_by_organization_type' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/organization/{organizationId}/type/{type}';
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
		if ( null !== $organization_id ) {
			$resource_path = str_replace(
				"{" . "organizationId" . "}",
				$this->api_client->get_serializer()->to_path_value( $organization_id ),
				$resource_path
			);
		}
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
			'PTV_Service_Channels[]',
			'/api/v5/ServiceChannel/organization/{organizationId}/type/{type}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Channels[]', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_echannel_by_id
	 *
	 * Updates a new electronic channel with the data provided as input.
	 *
	 * @param string $id electronic channel id (required)
	 * @param PTV_EChannel_Channel_In_Base $request electronic channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_EChannel_Channel
	 */
	public function update_echannel_by_id( $id, $request = null ) {
		list( $response ) = $this->update_echannel_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_echannel_by_id_with_http_info
	 *
	 * Updates a new electronic channel with the data provided as input.
	 *
	 * @param string $id electronic channel id (required)
	 * @param PTV_EChannel_Channel_In_Base $request electronic channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_EChannel_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_echannel_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_echannel_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/EChannel/{id}';
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
			'PTV_EChannel_Channel',
			'/api/v5/ServiceChannel/EChannel/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_EChannel_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_echannel_by_source_id
	 *
	 * Updates a new electronic channel with the data provided as input.
	 *
	 * @param string $source_id electronic channel external source id (required)
	 * @param PTV_EChannel_Channel_In_Base $request electronic channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_EChannel_Channel
	 */
	public function update_echannel_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_echannel_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_echannel_by_source_id_with_http_info
	 *
	 * Updates a new electronic channel with the data provided as input.
	 *
	 * @param string $source_id electronic channel external source id (required)
	 * @param PTV_EChannel_Channel_In_Base $request electronic channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_EChannel_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_echannel_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_echannel_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/EChannel/sourceId/{sourceId}';
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
			'PTV_EChannel_Channel',
			'/api/v5/ServiceChannel/EChannel/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_EChannel_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_phone_by_id
	 *
	 * Updates phone channel with the data provided as input.
	 *
	 * @param string $id phone channel id (required)
	 * @param PTV_Phone_Channel_In_Base $request phone channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Phone_Channel
	 */
	public function update_phone_by_id( $id, $request = null ) {
		list( $response ) = $this->update_phone_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_phone_by_id_with_http_info
	 *
	 * Updates phone channel with the data provided as input.
	 *
	 * @param string $id phone channel id (required)
	 * @param PTV_Phone_Channel_In_Base $request phone channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Phone_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_phone_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_phone_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/Phone/{id}';
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
			'PTV_Phone_Channel',
			'/api/v5/ServiceChannel/Phone/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Phone_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_phone_by_source_id
	 *
	 * Updates phone channel with the data provided as input.
	 *
	 * @param string $source_id phone channel external id (required)
	 * @param PTV_Phone_Channel_In_Base $request phone channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Phone_Channel
	 */
	public function update_phone_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_phone_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_phone_by_source_id_with_http_info
	 *
	 * Updates phone channel with the data provided as input.
	 *
	 * @param string $source_id phone channel external id (required)
	 * @param PTV_Phone_Channel_In_Base $request phone channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Phone_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_phone_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_phone_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/Phone/sourceId/{sourceId}';
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
			'PTV_Phone_Channel',
			'/api/v5/ServiceChannel/Phone/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Phone_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_printable_form_by_id
	 *
	 * Updates printable form channel with the data provided as input.
	 *
	 * @param string $id printable form channel id (required)
	 * @param PTV_Printable_Form_Channel_In_Base $request printable form channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Printable_Form_Channel
	 */
	public function update_printable_form_by_id( $id, $request = null ) {
		list( $response ) = $this->update_printable_form_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_printable_form_by_id_with_http_info
	 *
	 * Updates printable form channel with the data provided as input.
	 *
	 * @param string $id printable form channel id (required)
	 * @param PTV_Printable_Form_Channel_In_Base $request printable form channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Printable_Form_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_printable_form_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_printable_form_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/PrintableForm/{id}';
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
			'PTV_Printable_Form_Channel',
			'/api/v5/ServiceChannel/PrintableForm/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Printable_Form_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_printable_form_by_source_id
	 *
	 * Updates printable form channel with the data provided as input.
	 *
	 * @param string $source_id printable form channel external source id (required)
	 * @param PTV_Printable_Form_Channel_In_Base $request printable form channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Printable_Form_Channel
	 */
	public function update_printable_form_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_printable_form_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_printable_form_by_source_id_with_http_info
	 *
	 * Updates printable form channel with the data provided as input.
	 *
	 * @param string $source_id printable form channel external source id (required)
	 * @param PTV_Printable_Form_Channel_In_Base $request printable form channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Printable_Form_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_printable_form_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_printable_form_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/PrintableForm/sourceId/{sourceId}';
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
			'PTV_Printable_Form_Channel',
			'/api/v5/ServiceChannel/PrintableForm/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Printable_Form_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_location_by_id
	 *
	 * Updates a new service location channel with the data provided as input.
	 *
	 * @param string $id service location channel id (required)
	 * @param PTV_Service_Location_Channel_In_Base $request service location channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Location_Channel
	 */
	public function update_service_location_by_id( $id, $request = null ) {
		list( $response ) = $this->update_service_location_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_service_location_by_id_with_http_info
	 *
	 * Updates a new service location channel with the data provided as input.
	 *
	 * @param string $id service location channel id (required)
	 * @param PTV_Service_Location_Channel_In_Base $request service location channel data. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Location_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_location_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_service_location_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/ServiceLocation/{id}';
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
			'PTV_Service_Location_Channel',
			'/api/v5/ServiceChannel/ServiceLocation/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Location_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_service_location_by_source_id
	 *
	 * Updates a new service location channel with the data provided as input.
	 *
	 * @param string $source_id service location channel external source id (required)
	 * @param PTV_Service_Location_Channel_In_Base $request service location channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Service_Location_Channel
	 */
	public function update_service_location_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_service_location_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_service_location_by_source_id_with_http_info
	 *
	 * Updates a new service location channel with the data provided as input.
	 *
	 * @param string $source_id service location channel external source id (required)
	 * @param PTV_Service_Location_Channel_In_Base $request service location channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Service_Location_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_service_location_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_service_location_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/ServiceLocation/sourceId/{sourceId}';
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
			'PTV_Service_Location_Channel',
			'/api/v5/ServiceChannel/ServiceLocation/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Service_Location_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_webpage_by_id
	 *
	 * Updates webpage channel with the data provided as input.
	 *
	 * @param string $id web page channel id (required)
	 * @param PTV_Web_Page_Channel_In_Base $request web page channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Web_Page_Channel
	 */
	public function update_webpage_by_id( $id, $request = null ) {
		list( $response ) = $this->update_webpage_by_id_with_http_info( $id, $request );
		return $response;
	}

	/**
	 * Operation update_webpage_by_id_with_http_info
	 *
	 * Updates webpage channel with the data provided as input.
	 *
	 * @param string $id web page channel id (required)
	 * @param PTV_Web_Page_Channel_In_Base $request web page channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Web_Page_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_webpage_by_id_with_http_info( $id, $request = null ) {
		// verify the required parameter 'id' is set
		if ( null === $id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $id when calling update_webpage_by_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/WebPage/{id}';
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
			'PTV_Web_Page_Channel',
			'/api/v5/ServiceChannel/WebPage/{id}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Web_Page_Channel', $http_header ), $status_code, $http_header );
	}


	/**
	 * Operation update_webpage_by_source_id
	 *
	 * Updates webpage channel with the data provided as input.
	 *
	 * @param string $source_id web page channel external source id (required)
	 * @param PTV_Web_Page_Channel_In_Base $request web page channel data (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Web_Page_Channel
	 */
	public function update_webpage_by_source_id( $source_id, $request = null ) {
		list( $response ) = $this->update_webpage_by_source_id_with_http_info( $source_id, $request );
		return $response;
	}

	/**
	 * Operation update_webpage_by_source_id_with_http_info
	 *
	 * Updates webpage channel with the data provided as input.
	 *
	 * @param string $source_id web page channel external source id (required)
	 * @param PTV_Web_Page_Channel_In_Base $request web page channel data (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Web_Page_Channel, HTTP status code, HTTP response headers (array of strings)
	 */
	public function update_webpage_by_source_id_with_http_info( $source_id, $request = null ) {
		// verify the required parameter 'source_id' is set
		if ( null === $source_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $source_id when calling update_webpage_by_source_id' );
		}
		// parse inputs
		$resource_path = '/api/v5/ServiceChannel/WebPage/sourceId/{sourceId}';
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
			'PTV_Web_Page_Channel',
			'/api/v5/ServiceChannel/WebPage/sourceId/{sourceId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Web_Page_Channel', $http_header ), $status_code, $http_header );
	}

}

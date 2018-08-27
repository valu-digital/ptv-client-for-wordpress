<?php
/**
 * Common_Api
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
 * Common_Api Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class Common_Api {
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
	 * @return Common_Api
	 */
	public function set_api_client( PTV_Api_Client $api_client ) {
		$this->api_client = $api_client;
		return $this;
	}

	/**
	 * Operation get_entities_by_organization_id
	 *
	 * Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return PTV_Entitity_Guid_Page
	 */
	public function get_entities_by_organization_id( $organization_id, $date = null, $page = null ) {
		list( $response ) = $this->get_entities_by_organization_id_with_http_info( $organization_id, $date, $page );
		return $response;
	}

	/**
	 * Operation get_entities_by_organization_id_with_http_info
	 *
	 * Gets a list of published services and service channels by organization.  Services/channels created/modified after certain date can be fetched by adding date as query string parameter.
	 *
	 * @param string $organization_id Guid (required)
	 * @param \DateTime $date Supports only format \&quot;yyyy-MM-ddTHH:mm:ss\&quot; (UTC). (optional)
	 * @param int $page The page number to be fetched. (optional)
	 * WP_Error on non-2xx response
	 * @return array of PTV_Entitity_Guid_Page, HTTP status code, HTTP response headers (array of strings)
	 */
	public function get_entities_by_organization_id_with_http_info( $organization_id, $date = null, $page = null ) {
		// verify the required parameter 'organization_id' is set
		if ( null === $organization_id ) {
			throw new InvalidArgumentException( 'Missing the required parameter $organization_id when calling get_entities_by_organization_id' );
		}
		// parse inputs
		$resource_path = '/api/v7/Common/EntitiesByOrganization/{organizationId}';
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
			'PTV_Entitity_Guid_Page',
			'/api/v7/Common/EntitiesByOrganization/{organizationId}'
		);

		if ( is_wp_error( $response ) ) {
			$response = array( $response, $status_code, $http_header );
			return $response;
		}

		return array( $this->api_client->get_serializer()->deserialize( $response, 'PTV_Entitity_Guid_Page', $http_header ), $status_code, $http_header );
	}

}

<?php
/**
 * PTV_Api_Client
 *
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
 * PTV_Api_Client Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Api_Client {

	/**
	 * PTV_Api_Client_Configuration
	 *
	 * @var PTV_Api_Client_Configuration
	 */
	protected $config;

	/**
	 * Object Serializer
	 *
	 * @var PTV_Object_Serializer
	 */
	protected $serializer;

	/**
	 * Constructor of the class
	 *
	 * @param PTV_Api_Client_Configuration $config config for this PTV_Api_Client
	 */
	public function __construct( PTV_Api_Client_Configuration $config = null ) {
		if ( null === $config ) {
			$config = PTV_Api_Client_Configuration::get_default_configuration();
		}

		$this->config     = $config;
		$this->serializer = new PTV_Object_Serializer();
	}

	/**
	 * Get the config
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function get_config() {
		return $this->config;
	}

	/**
	 * Get the serializer
	 *
	 * @return PTV_Object_Serializer
	 */
	public function get_serializer() {
		return $this->serializer;
	}

	/**
	 * Get API key (with prefix if set)
	 *
	 * @param  string $api_key_identifier name of apikey
	 *
	 * @return string API key with the prefix
	 */
	public function get_api_key_with_prefix( $api_key_identifier ) {
		$prefix  = $this->config->get_api_key_prefix( $api_key_identifier );
		$api_key = $this->config->get_api_key( $api_key_identifier );

		if ( ! isset( $api_key ) ) {
			return null;
		}

		if ( isset( $prefix ) ) {
			$key_with_prefix = $prefix . ' ' . $api_key;
		} else {
			$key_with_prefix = $api_key;
		}

		return $key_with_prefix;
	}

	/**
	 * Make the HTTP call (Sync)
	 *
	 * @param string $resource_path path to method endpoint
	 * @param string $method method to call
	 * @param array $query_params parameters to be place in query URL
	 * @param array $post_data parameters to be placed in POST body
	 * @param array $header_params parameters to be place in request header
	 * @param string $response_type expected response type of the endpoint
	 * @param string $endpoint_path path to method endpoint before expanding parameters
	 *
	 * @throws PTV_Api_Exception on a non 2xx response
	 * @return mixed
	 */
	public function call_api( $resource_path, $method, $query_params, $post_data, $header_params, $response_type = null, $endpoint_path = null ) {

		$args = array();

		// construct the http header
		$args['headers'] = array_merge(
			(array) $this->config->get_default_headers(),
			(array) $header_params
		);

		// form data
		if ( $post_data and in_array( 'Content-Type: application/x-www-form-urlencoded', $args['headers'], true ) ) {
			$post_data = http_build_query( $post_data );
		} elseif ( ( is_object( $post_data ) or is_array( $post_data ) ) and ! in_array( 'Content-Type: multipart/form-data', $args['headers'], true ) ) { // json model
			$post_data = wp_json_encode( PTV_Object_Serializer::sanitize_for_serialization( $post_data ) );
		}

		$url = $this->config->get_host() . $resource_path;

		// set timeout, if needed
		if ( $this->config->get_timeout() !== 0 ) {
			$args['timeout'] = $this->config->get_timeout();
		}

		// disable SSL verification, if needed
		if ( $this->config->get_ssl_verification() === false ) {
			$args['sslverify'] = $this->config->get_ssl_verification();
		}

		// Set user agent
		if ( $this->config->get_user_agent() === false ) {
			$args['user-agent'] = $this->config->get_user_agent();
		}

		if ( ! empty( $query_params ) ) {
			$url = add_query_arg( $query_params, $url );
		}

		if ( 'POST' === $method ) {
			$args['method'] = 'POST';
			$args['body']   = $post_data;
		} elseif ( 'HEAD' === $method ) {
			$args['method'] = 'HEAD';
		} elseif ( 'OPTIONS' === $method ) {
			$args['method'] = 'OPTIONS';
			$args['body']   = $post_data;
		} elseif ( 'PATCH' === $method ) {
			$args['method'] = 'PATCH';
			$args['body']   = $post_data;
		} elseif ( 'PUT' === $method ) {
			$args['method'] = 'PUT';
			$args['body']   = $post_data;
		} elseif ( 'DELETE' === $method ) {
			$args['method'] = 'DELETE';
			$args['body']   = $post_data;
		} elseif ( 'GET' !== $method ) {
			throw new PTV_Api_Exception( 'Method ' . $method . ' is not recognized.' );
		}

		// Make the request
		$response    = wp_remote_request( $url, $args );
		$http_header = wp_remote_retrieve_headers( $response );
		$http_body     = wp_remote_retrieve_body( $response );
		$response_code = wp_remote_retrieve_response_code( $response );

		// Handle the response
		if ( is_wp_error( $response ) ) {

			$error_message = $response->get_error_message();

			if ( ! empty( $error_message ) ) {
				$error_message = sprintf( "API call to $url failed: %s", $error_message );
			} else {
				$error_message = sprintf( 'API call to %s failed, but for an unknown reason. This could happen if you are disconnected from the network.', $url );
			}

			$error = new WP_Error( 'ptv-api-error', $error_message, array( 'status' => $response_code, 'data' => null, 'headers' => null ) );

			return array( $error, $response_code, $http_header );


		} elseif ( $response_code >= 200 && $response_code <= 299 ) {

			// return raw body if response is a file
			if ( '\SplFileObject' === $response_type || 'string' === $response_type ) {
				return array( $http_body, $response_code, $http_header );
			}

			$data = json_decode( $http_body );
			if ( json_last_error() > 0 ) { // if response is a string
				$data = $http_body;
			}
		} else {

			$data = json_decode( $http_body );
			if ( json_last_error() > 0 ) { // if response is a string
				$data = $http_body;
			}

			$error = new WP_Error( 'ptv-api-error', sprintf( '[%s] Error connecting to the API (%s)', $response_code, $url ), array( 'data' => $data, 'status' => $response_code, 'headers' => $http_header ) );

			return array( $error, $response_code, $http_header );

		}


		return array( $data, $response_code, $http_header );
	}

	/**
	 * Return the header 'Accept' based on an array of Accept provided
	 *
	 * @param string[] $accept Array of header
	 *
	 * @return string Accept (e.g. application/json)
	 */
	public function select_header_accept( $accept ) {
		if ( 0 === count( $accept ) or 1 === ( count( $accept ) and '' === $accept[0] ) ) {
			return null;
		} elseif ( preg_grep( '/application\/json/i', $accept ) ) {
			return 'application/json';
		} else {
			return implode( ',', $accept );
		}
	}

	/**
	 * Return the content type based on an array of content-type provided
	 *
	 * @param string[] $content_type Array fo content-type
	 *
	 * @return string Content-Type (e.g. application/json)
	 */
	public function select_header_content_type( $content_type ) {
		if ( 0 === count( $content_type ) or 1 === ( count( $content_type ) and '' === $content_type[0] ) ) {
			return 'application/json';
		} elseif ( preg_grep( '/application\/json/i', $content_type ) ) {
			return 'application/json';
		} else {
			return implode( ',', $content_type );
		}
	}

}

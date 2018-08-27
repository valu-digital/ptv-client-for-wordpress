<?php
/**
 * PTV_Api_Exception
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
 * PTV_Api_Exception Class Doc Comment
 *
 * @category Class

 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Api_Exception extends Exception {

	/**
	 * The HTTP body of the server response either as Json or string.
	 *
	 * @var mixed
	 */
	protected $response_body;

	/**
	 * The HTTP header of the server response.
	 *
	 * @var string[]
	 */
	protected $response_headers;

	/**
	 * The deserialized response object
	 *
	 * @var $response_object;
	 */
	protected $response_object;

	/**
	 * Constructor
	 *
	 * @param string $message         Error message
	 * @param int    $code            HTTP status code
	 * @param string $response_headers HTTP response header
	 * @param mixed  $response_body    HTTP body of the server response either as Json or string
	 */
	public function __construct( $message = '', $code = 0, $response_headers = null, $response_body = null ) {
		parent::__construct( $message, $code );
		$this->response_headers = $response_headers;
		$this->response_body = $response_body;
	}

	/**
	 * Gets the HTTP response header
	 *
	 * @return string HTTP response header
	 */
	public function get_response_headers() {
		return $this->response_headers;
	}

	/**
	 * Gets the HTTP body of the server response either as Json or string
	 *
	 * @return mixed HTTP body of the server response either as Json or string
	 */
	public function get_response_body() {
		return $this->response_body;
	}

	/**
	 * Sets the deseralized response object (during deserialization)
	 *
	 * @param mixed $obj Deserialized response object
	 *
	 * @return void
	 */
	public function set_response_object( $obj ) {
		$this->response_object = $obj;
	}

	/**
	 * Gets the deseralized response object (during deserialization)
	 *
	 * @return mixed the deserialized response object
	 */
	public function get_response_object() {
		return $this->response_object;
	}
}

<?php
/**
 * PTV_Api_Client_Configuration
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
 * PTV_Api_Client_Configuration Class Doc Comment
 * PHP version 5
 *
 * @category Class

 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Api_Client_Configuration {

	private static $default_configuration = null;

	/**
	 * Associate array to store API key(s)
	 *
	 * @var string[]
	 */
	protected $api_keys = [];

	/**
	 * Associate array to store API prefix (e.g. Bearer)
	 *
	 * @var string[]
	 */
	protected $api_key_prefixes = [];

	/**
	 * Access token for OAuth
	 *
	 * @var string
	 */
	protected $access_token = '';

	/**
	 * _username for HTTP basic authentication
	 *
	 * @var string
	 */
	protected $username = '';

	/**
	 * _password for HTTP basic authentication
	 *
	 * @var string
	 */
	protected $password = '';

	/**
	 * The default header(s)
	 *
	 * @var array
	 */
	protected $default_headers = [];

	/**
	 * The host
	 *
	 * @var string
	 */
	protected $host = 'https://localhost/';

	/**
	 * Timeout (second) of the HTTP request, by default set to 0, no timeout
	 *
	 * @var string
	 */
	protected $timeout = 0;

	/**
	 * User agent of the HTTP request, set to "PHP-Swagger" by default
	 *
	 * @var string
	 */
	protected $user_agent = '';

	/**
	 * Debug file location (log to STDOUT by default)
	 *
	 * @var string
	 */
	protected $temp_folder_path;

	/**
	 * Indicates if SSL verification should be enabled or disabled.
	 *
	 * This is useful if the host uses a self-signed SSL certificate.
	 *
	 * @var boolean True if the certificate should be validated, false otherwise.
	 */
	protected $ssl_verification = true;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->temp_folder_path = sys_get_temp_dir();
	}

	/**
	 * Sets API key
	 *
	 * @param string $api_key_identifier API key identifier (authentication scheme)
	 * @param string $key              API key or token
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_api_key( $api_key_identifier, $key ) {
		$this->api_keys[ $api_key_identifier ] = $key;
		return $this;
	}

	/**
	 * Gets API key
	 *
	 * @param string $api_key_identifier API key identifier (authentication scheme)
	 *
	 * @return string API key or token
	 */
	public function get_api_key( $api_key_identifier ) {
		return isset( $this->api_keys[ $api_key_identifier ] ) ? $this->api_keys[ $api_key_identifier ] : null;
	}

	/**
	 * Sets the prefix for API key (e.g. Bearer)
	 *
	 * @param string $api_key_identifier API key identifier (authentication scheme)
	 * @param string $prefix           API key prefix, e.g. Bearer
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_api_key_prefix( $api_key_identifier, $prefix ) {
		$this->api_key_prefixes[ $api_key_identifier ] = $prefix;
		return $this;
	}

	/**
	 * Gets API key prefix
	 *
	 * @param string $api_key_identifier API key identifier (authentication scheme)
	 *
	 * @return string
	 */
	public function get_api_key_prefix( $api_key_identifier ) {
		return isset( $this->api_key_prefixes[ $api_key_identifier ] ) ? $this->api_key_prefixes[ $api_key_identifier ] : null;
	}

	/**
	 * Sets the access token for OAuth
	 *
	 * @param string $access_token Token for OAuth
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_access_token( $access_token ) {
		$this->access_token = $access_token;
		return $this;
	}

	/**
	 * Gets the access token for OAuth
	 *
	 * @return string Access token for OAuth
	 */
	public function get_access_token() {
		return $this->access_token;
	}

	/**
	 * Sets the username for HTTP basic authentication
	 *
	 * @param string $username _username for HTTP basic authentication
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_username( $username ) {
		$this->username = $username;
		return $this;
	}

	/**
	 * Gets the username for HTTP basic authentication
	 *
	 * @return string _username for HTTP basic authentication
	 */
	public function get_username() {
		return $this->username;
	}

	/**
	 * Sets the password for HTTP basic authentication
	 *
	 * @param string $password _password for HTTP basic authentication
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_password( $password ) {
		$this->password = $password;
		return $this;
	}

	/**
	 * Gets the password for HTTP basic authentication
	 *
	 * @return string _password for HTTP basic authentication
	 */
	public function get_password() {
		return $this->password;
	}

	/**
	 * Adds a default header
	 *
	 * @param string $header_name  header name (e.g. Token)
	 * @param string $header_value header value (e.g. 1z8wp3)
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function add_default_header( $header_name, $header_value ) {
		if ( ! is_string( $header_name ) ) {
			throw new InvalidArgumentException( 'Header name must be a string.' );
		}

		$this->default_headers[ $header_name ] = $header_value;
		return $this;
	}

	/**
	 * Gets the default header
	 *
	 * @return array An array of default header(s)
	 */
	public function get_default_headers() {
		return $this->default_headers;
	}

	/**
	 * Deletes a default header
	 *
	 * @param string $header_name the header to delete
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function delete_default_header( $header_name ) {
		unset( $this->default_headers[ $header_name ] );
	}

	/**
	 * Sets the host
	 *
	 * @param string $host _host
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_host( $host ) {
		$this->host = $host;
		return $this;
	}

	/**
	 * Gets the host
	 *
	 * @return string _host
	 */
	public function get_host() {
		return $this->host;
	}

	/**
	 * Sets the user agent of the api client
	 *
	 * @param string $user_agent the user agent of the api client
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_user_agent( $user_agent ) {
		if ( ! is_string( $user_agent ) ) {
			throw new InvalidArgumentException( 'User-agent must be a string.' );
		}

		$this->user_agent = $user_agent;
		return $this;
	}

	/**
	 * Gets the user agent of the api client
	 *
	 * @return string user agent
	 */
	public function get_user_agent() {
		return $this->user_agent;
	}

	/**
	 * Sets the HTTP timeout value
	 *
	 * @param integer $seconds Number of seconds before timing out [set to 0 for no timeout]
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_timeout( $seconds ) {
		if ( ! is_numeric( $seconds ) || $seconds < 0 ) {
			throw new InvalidArgumentException( 'Timeout value must be numeric and a non-negative number.' );
		}

		$this->timeout = $seconds;
		return $this;
	}

	/**
	 * Gets the HTTP timeout value
	 *
	 * @return string HTTP timeout value
	 */
	public function get_timeout() {
		return $this->timeout;
	}

	/**
	 * Sets the temp folder path
	 *
	 * @param string $temp_folder_path Temp folder path
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_temp_folder_path( $temp_folder_path ) {
		$this->temp_folder_path = $temp_folder_path;
		return $this;
	}

	/**
	 * Gets the temp folder path
	 *
	 * @return string Temp folder path
	 */
	public function get_temp_folder_path() {
		return $this->temp_folder_path;
	}

	/**
	 * Sets if SSL verification should be enabled or disabled
	 *
	 * @param boolean $ssl_verification True if the certificate should be validated, false otherwise
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public function set_ssl_verification( $ssl_verification ) {
		$this->ssl_verification = $ssl_verification;
		return $this;
	}

	/**
	 * Gets if SSL verification should be enabled or disabled
	 *
	 * @return boolean True if the certificate should be validated, false otherwise
	 */
	public function get_ssl_verification() {
		return $this->ssl_verification;
	}

	/**
	 * Gets the default PTV_Api_Client_Configuration instance
	 *
	 * @return PTV_Api_Client_Configuration
	 */
	public static function get_default_configuration() {
		if ( null === self::$default_configuration ) {
			self::$default_configuration = new PTV_Api_Client_Configuration();
		}

		return self::$default_configuration;
	}

	/**
	 * Sets the default PTV_Api_Client_Configuration instance
	 *
	 * @param PTV_Api_Client_Configuration $config An instance of the PTV_Api_Client_Configuration Object
	 *
	 * @return void
	 */
	public static function set_default_configuration( PTV_Api_Client_Configuration $config ) {
		self::$default_configuration = $config;
	}

}

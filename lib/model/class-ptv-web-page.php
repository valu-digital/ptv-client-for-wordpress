<?php
/**
 * PTV_Web_Page
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
 * PTV_Web_Page Class Doc Comment
 *
 * @category    Class
 * @description Open API web page model.
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Web_Page implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Web_Page';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'value' => 'string',
		'url' => 'string',
		'language' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'value' => 'value',
		'url' => 'url',
		'language' => 'language',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'value' => 'set_value',
		'url' => 'set_url',
		'language' => 'set_language',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'value' => 'get_value',
		'url' => 'get_url',
		'language' => 'get_language',
	);

	public static function attribute_map() {
		return self::$attribute_map;
	}

	public static function setters() {
		return self::$setters;
	}

	public static function getters() {
		return self::$getters;
	}

	

	

	/**
	 * Associative array for storing property values
	 * @var mixed[]
	 */
	protected $container = array();

	/**
	 * Constructor
	 * @param mixed[] $data Associated array of property values initializing the model
	 */
	public function __construct( array $data = null ) {
		$this->container['value'] = isset( $data['value'] ) ? $data['value'] : null;
		$this->container['url'] = isset( $data['url'] ) ? $data['url'] : null;
		$this->container['language'] = isset( $data['language'] ) ? $data['language'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( ! is_null( $this->container['value'] ) && ( strlen( $this->container['value'] ) > 110 ) ) {
			$invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 110.";
		}

		if ( null === $this->container['url'] ) {
			$invalid_properties[] = "'url' can't be null";
		}
		if ( ( strlen( $this->container['url'] ) > 500 ) ) {
			$invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 500.";
		}

		if ( null === $this->container['language'] ) {
			$invalid_properties[] = "'language' can't be null";
		}
		return $invalid_properties;
	}

	/**
	 * validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid() {

		if ( strlen( $this->container['value'] ) > 110 ) {
			return false;
		}
		if ( null === $this->container['url'] ) {
			return false;
		}
		if ( strlen( $this->container['url'] ) > 500 ) {
			return false;
		}
		if ( null === $this->container['language'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets value
	 * @return string
	 */
	public function get_value() {
		return $this->container['value'];
	}

	/**
	 * Sets value
	 * @param string $value Name of the web page. (Max.Length: 110).
	 * @return $this
	 */
	public function set_value( $value ) {
		if ( ! is_null( $value ) && ( strlen( $value ) > 110 ) ) {
			throw new InvalidArgumentException( 'invalid length for $value when calling PTV_Web_Page., must be smaller than or equal to 110.' );
		}

		$this->container['value'] = $value;

		return $this;
	}

	/**
	 * Gets url
	 * @return string
	 */
	public function get_url() {
		return $this->container['url'];
	}

	/**
	 * Sets url
	 * @param string $url Web page url. (Max.Length: 500).
	 * @return $this
	 */
	public function set_url( $url ) {
		if ( ( strlen( $url ) > 500 ) ) {
			throw new InvalidArgumentException( 'invalid length for $url when calling PTV_Web_Page., must be smaller than or equal to 500.' );
		}

		$this->container['url'] = $url;

		return $this;
	}

	/**
	 * Gets language
	 * @return string
	 */
	public function get_language() {
		return $this->container['language'];
	}

	/**
	 * Sets language
	 * @param string $language Language code.
	 * @return $this
	 */
	public function set_language( $language ) {
		$this->container['language'] = $language;

		return $this;
	}
	/**
	 * Returns true if offset exists. False otherwise.
	 * @param  integer $offset Offset
	 * @return boolean
	 */
	public function offsetExists( $offset ) {
		return isset( $this->container[ $offset ] );
	}

	/**
	 * Gets offset.
	 * @param  integer $offset Offset
	 * @return mixed
	 */
	public function offsetGet( $offset ) {
		return isset( $this->container[ $offset ] ) ? $this->container[ $offset ] : null;
	}

	/**
	 * Sets value based on offset.
	 * @param  integer $offset Offset
	 * @param  mixed   $value  Value to be set
	 * @return void
	 */
	public function offsetSet( $offset, $value ) {
		if ( is_null( $offset ) ) {
			$this->container[] = $value;
		} else {
			$this->container[ $offset ] = $value;
		}
	}

	/**
	 * Unsets offset.
	 * @param  integer $offset Offset
	 * @return void
	 */
	public function offsetUnset( $offset ) {
		unset( $this->container[ $offset ] );
	}

	/**
	 * Gets the string presentation of the object
	 * @return string
	 */
	public function __to_string() {
		if ( defined( 'JSON_PRETTY_PRINT' ) ) { // use JSON pretty print
			return wp_json_encode( PTV_Object_Serializer::sanitize_for_serialization( $this ), JSON_PRETTY_PRINT );
		}

		return wp_json_encode( PTV_Object_Serializer::sanitize_for_serialization( $this ) );
	}
}



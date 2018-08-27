<?php
/**
 * PTV_Service_Voucher
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
 * PTV_Service_Voucher Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of service voucher
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Voucher implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Voucher';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'order_number' => 'int',
		'value' => 'string',
		'language' => 'string',
		'url' => 'string',
		'additional_information' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'order_number' => 'orderNumber',
		'value' => 'value',
		'language' => 'language',
		'url' => 'url',
		'additional_information' => 'additionalInformation',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'order_number' => 'set_order_number',
		'value' => 'set_value',
		'language' => 'set_language',
		'url' => 'set_url',
		'additional_information' => 'set_additional_information',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'order_number' => 'get_order_number',
		'value' => 'get_value',
		'language' => 'get_language',
		'url' => 'get_url',
		'additional_information' => 'get_additional_information',
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
		$this->container['order_number'] = isset( $data['order_number'] ) ? $data['order_number'] : null;
		$this->container['value'] = isset( $data['value'] ) ? $data['value'] : null;
		$this->container['language'] = isset( $data['language'] ) ? $data['language'] : null;
		$this->container['url'] = isset( $data['url'] ) ? $data['url'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['order_number'] ) {
			$invalid_properties[] = "'order_number' can't be null";
		}
		if ( null === $this->container['language'] ) {
			$invalid_properties[] = "'language' can't be null";
		}
		if ( ! is_null( $this->container['url'] ) && ( strlen( $this->container['url'] ) > 500 ) ) {
			$invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 500.";
		}

		if ( ! is_null( $this->container['additional_information'] ) && ( strlen( $this->container['additional_information'] ) > 150 ) ) {
			$invalid_properties[] = "invalid value for 'additional_information', the character length must be smaller than or equal to 150.";
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

		if ( null === $this->container['order_number'] ) {
			return false;
		}
		if ( null === $this->container['language'] ) {
			return false;
		}
		if ( strlen( $this->container['url'] ) > 500 ) {
			return false;
		}
		if ( strlen( $this->container['additional_information'] ) > 150 ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets order_number
	 * @return int
	 */
	public function get_order_number() {
		return $this->container['order_number'];
	}

	/**
	 * Sets order_number
	 * @param int $order_number The order of service voucher.
	 * @return $this
	 */
	public function set_order_number( $order_number ) {
		$this->container['order_number'] = $order_number;

		return $this;
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
	 * @param string $value Name of the service voucher.
	 * @return $this
	 */
	public function set_value( $value ) {
		$this->container['value'] = $value;

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
		if ( ! is_null( $url ) && ( strlen( $url ) > 500 ) ) {
			throw new InvalidArgumentException( 'invalid length for $url when calling PTV_Service_Voucher., must be smaller than or equal to 500.' );
		}

		$this->container['url'] = $url;

		return $this;
	}

	/**
	 * Gets additional_information
	 * @return string
	 */
	public function get_additional_information() {
		return $this->container['additional_information'];
	}

	/**
	 * Sets additional_information
	 * @param string $additional_information Service voucher additional information (Max.Length: 150).
	 * @return $this
	 */
	public function set_additional_information( $additional_information ) {
		if ( ! is_null( $additional_information ) && ( strlen( $additional_information ) > 150 ) ) {
			throw new InvalidArgumentException( 'invalid length for $additional_information when calling PTV_Service_Voucher., must be smaller than or equal to 150.' );
		}

		$this->container['additional_information'] = $additional_information;

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



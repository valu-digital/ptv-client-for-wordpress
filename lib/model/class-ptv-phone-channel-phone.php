<?php
/**
 * PTV_Phone_Channel_Phone
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
 * PTV Open API Version: v5
 *
 */


/**
 * PTV_Phone_Channel_Phone Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of phone
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Phone_Channel_Phone implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Phone_Channel_Phone';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'type' => 'string',
		'service_charge_type' => 'string',
		'charge_description' => 'string',
		'prefix_number' => 'string',
		'is_finnish_service_number' => 'bool',
		'number' => 'string',
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
		'type' => 'type',
		'service_charge_type' => 'serviceChargeType',
		'charge_description' => 'chargeDescription',
		'prefix_number' => 'prefixNumber',
		'is_finnish_service_number' => 'isFinnishServiceNumber',
		'number' => 'number',
		'language' => 'language',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'type' => 'set_type',
		'service_charge_type' => 'set_service_charge_type',
		'charge_description' => 'set_charge_description',
		'prefix_number' => 'set_prefix_number',
		'is_finnish_service_number' => 'set_is_finnish_service_number',
		'number' => 'set_number',
		'language' => 'set_language',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'type' => 'get_type',
		'service_charge_type' => 'get_service_charge_type',
		'charge_description' => 'get_charge_description',
		'prefix_number' => 'get_prefix_number',
		'is_finnish_service_number' => 'get_is_finnish_service_number',
		'number' => 'get_number',
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
		$this->container['type'] = isset( $data['type'] ) ? $data['type'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['charge_description'] = isset( $data['charge_description'] ) ? $data['charge_description'] : null;
		$this->container['prefix_number'] = isset( $data['prefix_number'] ) ? $data['prefix_number'] : null;
		$this->container['is_finnish_service_number'] = isset( $data['is_finnish_service_number'] ) ? $data['is_finnish_service_number'] : null;
		$this->container['number'] = isset( $data['number'] ) ? $data['number'] : null;
		$this->container['language'] = isset( $data['language'] ) ? $data['language'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['type'] ) {
			$invalid_properties[] = "'type' can't be null";
		}
		if ( ! is_null( $this->container['charge_description'] ) && ( strlen( $this->container['charge_description'] ) > 150 ) ) {
			$invalid_properties[] = "invalid value for 'charge_description', the character length must be smaller than or equal to 150.";
		}

		if ( null === $this->container['number'] ) {
			$invalid_properties[] = "'number' can't be null";
		}
		if ( ! preg_match( '/^\\d{1,20}$/', $this->container['number'] ) ) {
			$invalid_properties[] = "invalid value for 'number', must be conform to the pattern /^\\d{1,20}$/.";
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

		if ( null === $this->container['type'] ) {
			return false;
		}
		if ( strlen( $this->container['charge_description'] ) > 150 ) {
			return false;
		}
		if ( null === $this->container['number'] ) {
			return false;
		}
		if ( ! preg_match( '/^\\d{1,20}$/', $this->container['number'] ) ) {
			return false;
		}
		if ( null === $this->container['language'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets type
	 * @return string
	 */
	public function get_type() {
		return $this->container['type'];
	}

	/**
	 * Sets type
	 * @param string $type Phone number type (Phone, Sms or Fax).
	 * @return $this
	 */
	public function set_type( $type ) {
		$this->container['type'] = $type;

		return $this;
	}

	/**
	 * Gets service_charge_type
	 * @return string
	 */
	public function get_service_charge_type() {
		return $this->container['service_charge_type'];
	}

	/**
	 * Sets service_charge_type
	 * @param string $service_charge_type Service charge type. Possible values are: Charged, Free or Other.
	 * @return $this
	 */
	public function set_service_charge_type( $service_charge_type ) {
		$this->container['service_charge_type'] = $service_charge_type;

		return $this;
	}

	/**
	 * Gets charge_description
	 * @return string
	 */
	public function get_charge_description() {
		return $this->container['charge_description'];
	}

	/**
	 * Sets charge_description
	 * @param string $charge_description Charge description. (Max.Length: 150).
	 * @return $this
	 */
	public function set_charge_description( $charge_description ) {
		if ( ! is_null( $charge_description ) && ( strlen( $charge_description ) > 150 ) ) {
			throw new InvalidArgumentException( 'invalid length for $charge_description when calling PTV_Phone_Channel_Phone., must be smaller than or equal to 150.' );
		}

		$this->container['charge_description'] = $charge_description;

		return $this;
	}

	/**
	 * Gets prefix_number
	 * @return string
	 */
	public function get_prefix_number() {
		return $this->container['prefix_number'];
	}

	/**
	 * Sets prefix_number
	 * @param string $prefix_number Prefix for the phone number.
	 * @return $this
	 */
	public function set_prefix_number( $prefix_number ) {
		$this->container['prefix_number'] = $prefix_number;

		return $this;
	}

	/**
	 * Gets is_finnish_service_number
	 * @return bool
	 */
	public function get_is_finnish_service_number() {
		return $this->container['is_finnish_service_number'];
	}

	/**
	 * Sets is_finnish_service_number
	 * @param bool $is_finnish_service_number Defines if number is Finnish service number. If true prefix number can be left empty.
	 * @return $this
	 */
	public function set_is_finnish_service_number( $is_finnish_service_number ) {
		$this->container['is_finnish_service_number'] = $is_finnish_service_number;

		return $this;
	}

	/**
	 * Gets number
	 * @return string
	 */
	public function get_number() {
		return $this->container['number'];
	}

	/**
	 * Sets number
	 * @param string $number Phone number.
	 * @return $this
	 */
	public function set_number( $number ) {

		if ( ( ! preg_match( '/^\\d{1,20}$/', $number ) ) ) {
			throw new InvalidArgumentException( "invalid value for $number when calling PTV_Phone_Channel_Phone., must conform to the pattern /^\\d{1,20}$/." );
		}

		$this->container['number'] = $number;

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
	 * @param string $language Language of this object. Valid values are: fi, sv or en.
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



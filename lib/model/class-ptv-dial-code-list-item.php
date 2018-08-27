<?php
/**
 * PTV_Dial_Code_List_Item
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
 * PTV_Dial_Code_List_Item Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of codelist item
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Dial_Code_List_Item implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Dial_Code_List_Item';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'code' => 'string',
		'names' => 'PTV_Language_Item[]',
		'prefix_numbers' => 'string[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'code' => 'code',
		'names' => 'names',
		'prefix_numbers' => 'prefixNumbers',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'code' => 'set_code',
		'names' => 'set_names',
		'prefix_numbers' => 'set_prefix_numbers',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'code' => 'get_code',
		'names' => 'get_names',
		'prefix_numbers' => 'get_prefix_numbers',
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
		$this->container['code'] = isset( $data['code'] ) ? $data['code'] : null;
		$this->container['names'] = isset( $data['names'] ) ? $data['names'] : null;
		$this->container['prefix_numbers'] = isset( $data['prefix_numbers'] ) ? $data['prefix_numbers'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		return $invalid_properties;
	}

	/**
	 * validate all the properties in the model
	 * return true if all passed
	 *
	 * @return bool True if all properties are valid
	 */
	public function valid() {

		return true;
	}


	/**
	 * Gets code
	 * @return string
	 */
	public function get_code() {
		return $this->container['code'];
	}

	/**
	 * Sets code
	 * @param string $code Localized value corresponding to the Language property value.
	 * @return $this
	 */
	public function set_code( $code ) {
		$this->container['code'] = $code;

		return $this;
	}

	/**
	 * Gets names
	 * @return PTV_Language_Item[]
	 */
	public function get_names() {
		return $this->container['names'];
	}

	/**
	 * Sets names
	 * @param PTV_Language_Item[] $names Localized list of names.
	 * @return $this
	 */
	public function set_names( $names ) {
		$this->container['names'] = $names;

		return $this;
	}

	/**
	 * Gets prefix_numbers
	 * @return string[]
	 */
	public function get_prefix_numbers() {
		return $this->container['prefix_numbers'];
	}

	/**
	 * Sets prefix_numbers
	 * @param string[] $prefix_numbers List of prefix numbers
	 * @return $this
	 */
	public function set_prefix_numbers( $prefix_numbers ) {
		$this->container['prefix_numbers'] = $prefix_numbers;

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



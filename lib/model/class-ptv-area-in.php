<?php
/**
 * PTV_Area_In
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
 * PTV_Area_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model interface of area IN (POST and PUT).
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Area_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Area_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'type' => 'string',
		'area_codes' => 'string[]',
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
		'area_codes' => 'areaCodes',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'type' => 'set_type',
		'area_codes' => 'set_area_codes',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'type' => 'get_type',
		'area_codes' => 'get_area_codes',
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
		$this->container['area_codes'] = isset( $data['area_codes'] ) ? $data['area_codes'] : null;
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
	 * @param string $type Type of the area (Municipality, Province, BusinessRegions, HospitalRegions).
	 * @return $this
	 */
	public function set_type( $type ) {
		$this->container['type'] = $type;

		return $this;
	}

	/**
	 * Gets area_codes
	 * @return string[]
	 */
	public function get_area_codes() {
		return $this->container['area_codes'];
	}

	/**
	 * Sets area_codes
	 * @param string[] $area_codes List of area codes related to type. For example if type = Municipality, areaCodes-list need to include municipality codes like 491 or 091.
	 * @return $this
	 */
	public function set_area_codes( $area_codes ) {
		$this->container['area_codes'] = $area_codes;

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



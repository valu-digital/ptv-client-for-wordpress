<?php
/**
 * PTV_Daily_Opening_Time
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
 * PTV_Daily_Opening_Time Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V2 - View Model of Daily opening hours
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Daily_Opening_Time implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Daily_Opening_Time';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'day_from' => 'string',
		'day_to' => 'string',
		'from' => 'string',
		'to' => 'string',
		'is_extra' => 'bool',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'day_from' => 'dayFrom',
		'day_to' => 'dayTo',
		'from' => 'from',
		'to' => 'to',
		'is_extra' => 'isExtra',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'day_from' => 'set_day_from',
		'day_to' => 'set_day_to',
		'from' => 'set_from',
		'to' => 'set_to',
		'is_extra' => 'set_is_extra',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'day_from' => 'get_day_from',
		'day_to' => 'get_day_to',
		'from' => 'get_from',
		'to' => 'get_to',
		'is_extra' => 'get_is_extra',
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
		$this->container['day_from'] = isset( $data['day_from'] ) ? $data['day_from'] : null;
		$this->container['day_to'] = isset( $data['day_to'] ) ? $data['day_to'] : null;
		$this->container['from'] = isset( $data['from'] ) ? $data['from'] : null;
		$this->container['to'] = isset( $data['to'] ) ? $data['to'] : null;
		$this->container['is_extra'] = isset( $data['is_extra'] ) ? $data['is_extra'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['from'] ) {
			$invalid_properties[] = "'from' can't be null";
		}
		if ( null === $this->container['to'] ) {
			$invalid_properties[] = "'to' can't be null";
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

		if ( null === $this->container['from'] ) {
			return false;
		}
		if ( null === $this->container['to'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets day_from
	 * @return string
	 */
	public function get_day_from() {
		return $this->container['day_from'];
	}

	/**
	 * Sets day_from
	 * @param string $day_from Starts from weekday (e.g. Monday).
	 * @return $this
	 */
	public function set_day_from( $day_from ) {
		$this->container['day_from'] = $day_from;

		return $this;
	}

	/**
	 * Gets day_to
	 * @return string
	 */
	public function get_day_to() {
		return $this->container['day_to'];
	}

	/**
	 * Sets day_to
	 * @param string $day_to Ends to weekday (e.g. Monday).
	 * @return $this
	 */
	public function set_day_to( $day_to ) {
		$this->container['day_to'] = $day_to;

		return $this;
	}

	/**
	 * Gets from
	 * @return string
	 */
	public function get_from() {
		return $this->container['from'];
	}

	/**
	 * Sets from
	 * @param string $from Start time for example 10:00.
	 * @return $this
	 */
	public function set_from( $from ) {
		$this->container['from'] = $from;

		return $this;
	}

	/**
	 * Gets to
	 * @return string
	 */
	public function get_to() {
		return $this->container['to'];
	}

	/**
	 * Sets to
	 * @param string $to End time for example 20:00.
	 * @return $this
	 */
	public function set_to( $to ) {
		$this->container['to'] = $to;

		return $this;
	}

	/**
	 * Gets is_extra
	 * @return bool
	 */
	public function get_is_extra() {
		return $this->container['is_extra'];
	}

	/**
	 * Sets is_extra
	 * @param bool $is_extra Set to true to have extra time for a day. Enables to have open times like 10:00-14:00 and also on the same day 16:00-20:00. So the latter time is extra time.
	 * @return $this
	 */
	public function set_is_extra( $is_extra ) {
		$this->container['is_extra'] = $is_extra;

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



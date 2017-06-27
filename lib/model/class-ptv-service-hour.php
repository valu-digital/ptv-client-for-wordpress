<?php
/**
 * PTV_Service_Hour
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
 * PTV_Service_Hour Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V4 - View Model of service hour
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Hour implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Hour';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service_hour_type' => 'string',
		'valid_from' => '\DateTime',
		'valid_to' => '\DateTime',
		'is_closed' => 'bool',
		'valid_for_now' => 'bool',
		'additional_information' => 'PTV_Language_Item[]',
		'opening_hour' => 'PTV_Daily_Opening_Time[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'service_hour_type' => 'serviceHourType',
		'valid_from' => 'validFrom',
		'valid_to' => 'validTo',
		'is_closed' => 'isClosed',
		'valid_for_now' => 'validForNow',
		'additional_information' => 'additionalInformation',
		'opening_hour' => 'openingHour',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service_hour_type' => 'set_service_hour_type',
		'valid_from' => 'set_valid_from',
		'valid_to' => 'set_valid_to',
		'is_closed' => 'set_is_closed',
		'valid_for_now' => 'set_valid_for_now',
		'additional_information' => 'set_additional_information',
		'opening_hour' => 'set_opening_hour',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service_hour_type' => 'get_service_hour_type',
		'valid_from' => 'get_valid_from',
		'valid_to' => 'get_valid_to',
		'is_closed' => 'get_is_closed',
		'valid_for_now' => 'get_valid_for_now',
		'additional_information' => 'get_additional_information',
		'opening_hour' => 'get_opening_hour',
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
		$this->container['service_hour_type'] = isset( $data['service_hour_type'] ) ? $data['service_hour_type'] : null;
		$this->container['valid_from'] = isset( $data['valid_from'] ) ? $data['valid_from'] : null;
		$this->container['valid_to'] = isset( $data['valid_to'] ) ? $data['valid_to'] : null;
		$this->container['is_closed'] = isset( $data['is_closed'] ) ? $data['is_closed'] : null;
		$this->container['valid_for_now'] = isset( $data['valid_for_now'] ) ? $data['valid_for_now'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
		$this->container['opening_hour'] = isset( $data['opening_hour'] ) ? $data['opening_hour'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['service_hour_type'] ) {
			$invalid_properties[] = "'service_hour_type' can't be null";
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

		if ( null === $this->container['service_hour_type'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets service_hour_type
	 * @return string
	 */
	public function get_service_hour_type() {
		return $this->container['service_hour_type'];
	}

	/**
	 * Sets service_hour_type
	 * @param string $service_hour_type Type of service hour. Valid values are: Standard, Exception or Special.
	 * @return $this
	 */
	public function set_service_hour_type( $service_hour_type ) {
		$this->container['service_hour_type'] = $service_hour_type;

		return $this;
	}

	/**
	 * Gets valid_from
	 * @return \DateTime
	 */
	public function get_valid_from() {
		return $this->container['valid_from'];
	}

	/**
	 * Sets valid_from
	 * @param \DateTime $valid_from Date time where from this entry is valid.
	 * @return $this
	 */
	public function set_valid_from( $valid_from ) {
		$this->container['valid_from'] = $valid_from;

		return $this;
	}

	/**
	 * Gets valid_to
	 * @return \DateTime
	 */
	public function get_valid_to() {
		return $this->container['valid_to'];
	}

	/**
	 * Sets valid_to
	 * @param \DateTime $valid_to Date time to this entry is valid.
	 * @return $this
	 */
	public function set_valid_to( $valid_to ) {
		$this->container['valid_to'] = $valid_to;

		return $this;
	}

	/**
	 * Gets is_closed
	 * @return bool
	 */
	public function get_is_closed() {
		return $this->container['is_closed'];
	}

	/**
	 * Sets is_closed
	 * @param bool $is_closed Set to true to present a time between the valid from and to times as closed.
	 * @return $this
	 */
	public function set_is_closed( $is_closed ) {
		$this->container['is_closed'] = $is_closed;

		return $this;
	}

	/**
	 * Gets valid_for_now
	 * @return bool
	 */
	public function get_valid_for_now() {
		return $this->container['valid_for_now'];
	}

	/**
	 * Sets valid_for_now
	 * @param bool $valid_for_now Set to true to present that this entry is valid for now.
	 * @return $this
	 */
	public function set_valid_for_now( $valid_for_now ) {
		$this->container['valid_for_now'] = $valid_for_now;

		return $this;
	}

	/**
	 * Gets additional_information
	 * @return PTV_Language_Item[]
	 */
	public function get_additional_information() {
		return $this->container['additional_information'];
	}

	/**
	 * Sets additional_information
	 * @param PTV_Language_Item[] $additional_information Localized list of additional information. (Max.Length: 100).
	 * @return $this
	 */
	public function set_additional_information( $additional_information ) {
		$this->container['additional_information'] = $additional_information;

		return $this;
	}

	/**
	 * Gets opening_hour
	 * @return PTV_Daily_Opening_Time[]
	 */
	public function get_opening_hour() {
		return $this->container['opening_hour'];
	}

	/**
	 * Sets opening_hour
	 * @param PTV_Daily_Opening_Time[] $opening_hour List of servicing hours (open and closes times).
	 * @return $this
	 */
	public function set_opening_hour( $opening_hour ) {
		$this->container['opening_hour'] = $opening_hour;

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



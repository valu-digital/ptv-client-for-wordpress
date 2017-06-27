<?php
/**
 * PTV_Service_Service_Channel_In_Base
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
 * PTV_Service_Service_Channel_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of service service channel IN.
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Service_Channel_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Service_Channel_In_Base';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service_channel_id' => 'string',
		'description' => 'PTV_Localized_List_Item[]',
		'service_charge_type' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'service_channel_id' => 'serviceChannelId',
		'description' => 'description',
		'service_charge_type' => 'serviceChargeType',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service_channel_id' => 'set_service_channel_id',
		'description' => 'set_description',
		'service_charge_type' => 'set_service_charge_type',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service_channel_id' => 'get_service_channel_id',
		'description' => 'get_description',
		'service_charge_type' => 'get_service_charge_type',
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
		$this->container['service_channel_id'] = isset( $data['service_channel_id'] ) ? $data['service_channel_id'] : null;
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['service_channel_id'] ) {
			$invalid_properties[] = "'service_channel_id' can't be null";
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

		if ( null === $this->container['service_channel_id'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets service_channel_id
	 * @return string
	 */
	public function get_service_channel_id() {
		return $this->container['service_channel_id'];
	}

	/**
	 * Sets service_channel_id
	 * @param string $service_channel_id PTV service channel identifier.
	 * @return $this
	 */
	public function set_service_channel_id( $service_channel_id ) {
		$this->container['service_channel_id'] = $service_channel_id;

		return $this;
	}

	/**
	 * Gets description
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_description() {
		return $this->container['description'];
	}

	/**
	 * Sets description
	 * @param PTV_Localized_List_Item[] $description List of localized service channel relationship descriptions.
	 * @return $this
	 */
	public function set_description( $description ) {
		$this->container['description'] = $description;

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
	 * @param string $service_charge_type Service charge type. Possible values are: Charged, Free or Other
	 * @return $this
	 */
	public function set_service_charge_type( $service_charge_type ) {
		$this->container['service_charge_type'] = $service_charge_type;

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



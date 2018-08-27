<?php
/**
 * PTV_Service_And_Channel_In
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
 * PTV_Service_And_Channel_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of service and channel relation
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_And_Channel_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_And_Channel_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service_id' => 'string',
		'service_channel_id' => 'string',
		'service_charge_type' => 'string',
		'description' => 'PTV_Localized_List_Item[]',
		'service_hours' => 'PTV_Service_Hour[]',
		'contact_details' => 'PTV_Contact_Details_In',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'service_id' => 'serviceId',
		'service_channel_id' => 'serviceChannelId',
		'service_charge_type' => 'serviceChargeType',
		'description' => 'description',
		'service_hours' => 'serviceHours',
		'contact_details' => 'contactDetails',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service_id' => 'set_service_id',
		'service_channel_id' => 'set_service_channel_id',
		'service_charge_type' => 'set_service_charge_type',
		'description' => 'set_description',
		'service_hours' => 'set_service_hours',
		'contact_details' => 'set_contact_details',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service_id' => 'get_service_id',
		'service_channel_id' => 'get_service_channel_id',
		'service_charge_type' => 'get_service_charge_type',
		'description' => 'get_description',
		'service_hours' => 'get_service_hours',
		'contact_details' => 'get_contact_details',
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
		$this->container['service_id'] = isset( $data['service_id'] ) ? $data['service_id'] : null;
		$this->container['service_channel_id'] = isset( $data['service_channel_id'] ) ? $data['service_channel_id'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['contact_details'] = isset( $data['contact_details'] ) ? $data['contact_details'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['service_id'] ) {
			$invalid_properties[] = "'service_id' can't be null";
		}
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

		if ( null === $this->container['service_id'] ) {
			return false;
		}
		if ( null === $this->container['service_channel_id'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets service_id
	 * @return string
	 */
	public function get_service_id() {
		return $this->container['service_id'];
	}

	/**
	 * Sets service_id
	 * @param string $service_id PTV service identifier.
	 * @return $this
	 */
	public function set_service_id( $service_id ) {
		$this->container['service_id'] = $service_id;

		return $this;
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
	 * Gets service_hours
	 * @return PTV_Service_Hour[]
	 */
	public function get_service_hours() {
		return $this->container['service_hours'];
	}

	/**
	 * Sets service_hours
	 * @param PTV_Service_Hour[] $service_hours List of connection related service hours.
	 * @return $this
	 */
	public function set_service_hours( $service_hours ) {
		$this->container['service_hours'] = $service_hours;

		return $this;
	}

	/**
	 * Gets contact_details
	 * @return PTV_Contact_Details_In
	 */
	public function get_contact_details() {
		return $this->container['contact_details'];
	}

	/**
	 * Sets contact_details
	 * @param PTV_Contact_Details_In $contact_details List of connection related contact details.
	 * @return $this
	 */
	public function set_contact_details( $contact_details ) {
		$this->container['contact_details'] = $contact_details;

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



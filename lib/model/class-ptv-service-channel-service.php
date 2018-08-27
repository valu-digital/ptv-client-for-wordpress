<?php
/**
 * PTV_Service_Channel_Service
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
 * PTV_Service_Channel_Service Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of Service channel - base version
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Channel_Service implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Channel_Service';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service' => 'PTV_Item',
		'service_charge_type' => 'string',
		'description' => 'PTV_Localized_List_Item[]',
		'extra_types' => 'PTV_Extra_Type[]',
		'service_hours' => 'PTV_Service_Hour[]',
		'contact_details' => 'PTV_Contact_Details',
		'digital_authorizations' => 'PTV_Finto_Item[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'service' => 'service',
		'service_charge_type' => 'serviceChargeType',
		'description' => 'description',
		'extra_types' => 'extraTypes',
		'service_hours' => 'serviceHours',
		'contact_details' => 'contactDetails',
		'digital_authorizations' => 'digitalAuthorizations',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service' => 'set_service',
		'service_charge_type' => 'set_service_charge_type',
		'description' => 'set_description',
		'extra_types' => 'set_extra_types',
		'service_hours' => 'set_service_hours',
		'contact_details' => 'set_contact_details',
		'digital_authorizations' => 'set_digital_authorizations',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service' => 'get_service',
		'service_charge_type' => 'get_service_charge_type',
		'description' => 'get_description',
		'extra_types' => 'get_extra_types',
		'service_hours' => 'get_service_hours',
		'contact_details' => 'get_contact_details',
		'digital_authorizations' => 'get_digital_authorizations',
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
		$this->container['service'] = isset( $data['service'] ) ? $data['service'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
		$this->container['extra_types'] = isset( $data['extra_types'] ) ? $data['extra_types'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['contact_details'] = isset( $data['contact_details'] ) ? $data['contact_details'] : null;
		$this->container['digital_authorizations'] = isset( $data['digital_authorizations'] ) ? $data['digital_authorizations'] : null;
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
	 * Gets service
	 * @return PTV_Item
	 */
	public function get_service() {
		return $this->container['service'];
	}

	/**
	 * Sets service
	 * @param PTV_Item $service Service channel identifier and name.
	 * @return $this
	 */
	public function set_service( $service ) {
		$this->container['service'] = $service;

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
	 * Gets extra_types
	 * @return PTV_Extra_Type[]
	 */
	public function get_extra_types() {
		return $this->container['extra_types'];
	}

	/**
	 * Sets extra_types
	 * @param PTV_Extra_Type[] $extra_types The extra types related to service and service channel connection.
	 * @return $this
	 */
	public function set_extra_types( $extra_types ) {
		$this->container['extra_types'] = $extra_types;

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
	 * @return PTV_Contact_Details
	 */
	public function get_contact_details() {
		return $this->container['contact_details'];
	}

	/**
	 * Sets contact_details
	 * @param PTV_Contact_Details $contact_details Contact details for connection.
	 * @return $this
	 */
	public function set_contact_details( $contact_details ) {
		$this->container['contact_details'] = $contact_details;

		return $this;
	}

	/**
	 * Gets digital_authorizations
	 * @return PTV_Finto_Item[]
	 */
	public function get_digital_authorizations() {
		return $this->container['digital_authorizations'];
	}

	/**
	 * Sets digital_authorizations
	 * @param PTV_Finto_Item[] $digital_authorizations List of digital authorizations related to the service.
	 * @return $this
	 */
	public function set_digital_authorizations( $digital_authorizations ) {
		$this->container['digital_authorizations'] = $digital_authorizations;

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



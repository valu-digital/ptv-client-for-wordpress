<?php
/**
 * PTV_Service_Service_Channel_By_Source
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
 * PTV_Service_Service_Channel_By_Source Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of Service service channel - with external source and external types
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Service_Channel_By_Source implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Service_Channel_By_Source';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service_channel_source_id' => 'string',
		'description' => 'PTV_Localized_List_Item[]',
		'service_charge_type' => 'string',
		'service_hours' => 'PTV_Service_Hour[]',
		'contact_details' => 'PTV_Contact_Details_In_Base',
		'delete_service_charge_type' => 'bool',
		'delete_all_descriptions' => 'bool',
		'delete_all_service_hours' => 'bool',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'service_channel_source_id' => 'serviceChannelSourceId',
		'description' => 'description',
		'service_charge_type' => 'serviceChargeType',
		'service_hours' => 'serviceHours',
		'contact_details' => 'contactDetails',
		'delete_service_charge_type' => 'deleteServiceChargeType',
		'delete_all_descriptions' => 'deleteAllDescriptions',
		'delete_all_service_hours' => 'deleteAllServiceHours',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service_channel_source_id' => 'set_service_channel_source_id',
		'description' => 'set_description',
		'service_charge_type' => 'set_service_charge_type',
		'service_hours' => 'set_service_hours',
		'contact_details' => 'set_contact_details',
		'delete_service_charge_type' => 'set_delete_service_charge_type',
		'delete_all_descriptions' => 'set_delete_all_descriptions',
		'delete_all_service_hours' => 'set_delete_all_service_hours',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service_channel_source_id' => 'get_service_channel_source_id',
		'description' => 'get_description',
		'service_charge_type' => 'get_service_charge_type',
		'service_hours' => 'get_service_hours',
		'contact_details' => 'get_contact_details',
		'delete_service_charge_type' => 'get_delete_service_charge_type',
		'delete_all_descriptions' => 'get_delete_all_descriptions',
		'delete_all_service_hours' => 'get_delete_all_service_hours',
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
		$this->container['service_channel_source_id'] = isset( $data['service_channel_source_id'] ) ? $data['service_channel_source_id'] : null;
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['contact_details'] = isset( $data['contact_details'] ) ? $data['contact_details'] : null;
		$this->container['delete_service_charge_type'] = isset( $data['delete_service_charge_type'] ) ? $data['delete_service_charge_type'] : null;
		$this->container['delete_all_descriptions'] = isset( $data['delete_all_descriptions'] ) ? $data['delete_all_descriptions'] : null;
		$this->container['delete_all_service_hours'] = isset( $data['delete_all_service_hours'] ) ? $data['delete_all_service_hours'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['service_channel_source_id'] ) {
			$invalid_properties[] = "'service_channel_source_id' can't be null";
		}
		if ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $this->container['service_channel_source_id'] ) ) {
			$invalid_properties[] = "invalid value for 'service_channel_source_id', must be conform to the pattern /^[A-Za-z0-9-.]*$/.";
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

		if ( null === $this->container['service_channel_source_id'] ) {
			return false;
		}
		if ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $this->container['service_channel_source_id'] ) ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets service_channel_source_id
	 * @return string
	 */
	public function get_service_channel_source_id() {
		return $this->container['service_channel_source_id'];
	}

	/**
	 * Sets service_channel_source_id
	 * @param string $service_channel_source_id The external source id for service channel.
	 * @return $this
	 */
	public function set_service_channel_source_id( $service_channel_source_id ) {

		if ( ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $service_channel_source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $service_channel_source_id when calling PTV_Service_Service_Channel_By_Source., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
		}

		$this->container['service_channel_source_id'] = $service_channel_source_id;

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
	 * @return PTV_Contact_Details_In_Base
	 */
	public function get_contact_details() {
		return $this->container['contact_details'];
	}

	/**
	 * Sets contact_details
	 * @param PTV_Contact_Details_In_Base $contact_details List of connection related contact details.
	 * @return $this
	 */
	public function set_contact_details( $contact_details ) {
		$this->container['contact_details'] = $contact_details;

		return $this;
	}

	/**
	 * Gets delete_service_charge_type
	 * @return bool
	 */
	public function get_delete_service_charge_type() {
		return $this->container['delete_service_charge_type'];
	}

	/**
	 * Sets delete_service_charge_type
	 * @param bool $delete_service_charge_type Indicates if value for property ServiceChargeType should be deleted.
	 * @return $this
	 */
	public function set_delete_service_charge_type( $delete_service_charge_type ) {
		$this->container['delete_service_charge_type'] = $delete_service_charge_type;

		return $this;
	}

	/**
	 * Gets delete_all_descriptions
	 * @return bool
	 */
	public function get_delete_all_descriptions() {
		return $this->container['delete_all_descriptions'];
	}

	/**
	 * Sets delete_all_descriptions
	 * @param bool $delete_all_descriptions Indicates if all descriptions should be deleted.
	 * @return $this
	 */
	public function set_delete_all_descriptions( $delete_all_descriptions ) {
		$this->container['delete_all_descriptions'] = $delete_all_descriptions;

		return $this;
	}

	/**
	 * Gets delete_all_service_hours
	 * @return bool
	 */
	public function get_delete_all_service_hours() {
		return $this->container['delete_all_service_hours'];
	}

	/**
	 * Sets delete_all_service_hours
	 * @param bool $delete_all_service_hours Gets or sets a value indicating whether all service hours should be deleted.
	 * @return $this
	 */
	public function set_delete_all_service_hours( $delete_all_service_hours ) {
		$this->container['delete_all_service_hours'] = $delete_all_service_hours;

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



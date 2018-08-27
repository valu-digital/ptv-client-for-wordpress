<?php
/**
 * PTV_Service_Service_Channel
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
 * PTV_Service_Service_Channel Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V6 - View Model of service channel
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Service_Channel implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Service_Channel';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'service_channel' => 'PTV_Item',
		'service_charge_type' => 'string',
		'description' => 'PTV_Localized_List_Item[]',
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
		'service_channel' => 'serviceChannel',
		'service_charge_type' => 'serviceChargeType',
		'description' => 'description',
		'digital_authorizations' => 'digitalAuthorizations',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'service_channel' => 'set_service_channel',
		'service_charge_type' => 'set_service_charge_type',
		'description' => 'set_description',
		'digital_authorizations' => 'set_digital_authorizations',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'service_channel' => 'get_service_channel',
		'service_charge_type' => 'get_service_charge_type',
		'description' => 'get_description',
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
		$this->container['service_channel'] = isset( $data['service_channel'] ) ? $data['service_channel'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
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
	 * Gets service_channel
	 * @return PTV_Item
	 */
	public function get_service_channel() {
		return $this->container['service_channel'];
	}

	/**
	 * Sets service_channel
	 * @param PTV_Item $service_channel Service channel identifier and name.
	 * @return $this
	 */
	public function set_service_channel( $service_channel ) {
		$this->container['service_channel'] = $service_channel;

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



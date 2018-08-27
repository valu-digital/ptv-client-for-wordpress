<?php
/**
 * PTV_Service_Producer_In
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
 * PTV_Service_Producer_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of service producer
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Producer_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Producer_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'order_number' => 'int',
		'provision_type' => 'string',
		'organizations' => 'string[]',
		'additional_information' => 'PTV_Language_Item[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'order_number' => 'orderNumber',
		'provision_type' => 'provisionType',
		'organizations' => 'organizations',
		'additional_information' => 'additionalInformation',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'order_number' => 'set_order_number',
		'provision_type' => 'set_provision_type',
		'organizations' => 'set_organizations',
		'additional_information' => 'set_additional_information',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'order_number' => 'get_order_number',
		'provision_type' => 'get_provision_type',
		'organizations' => 'get_organizations',
		'additional_information' => 'get_additional_information',
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
		$this->container['order_number'] = isset( $data['order_number'] ) ? $data['order_number'] : null;
		$this->container['provision_type'] = isset( $data['provision_type'] ) ? $data['provision_type'] : null;
		$this->container['organizations'] = isset( $data['organizations'] ) ? $data['organizations'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['order_number'] ) {
			$invalid_properties[] = "'order_number' can't be null";
		}
		if ( null === $this->container['provision_type'] ) {
			$invalid_properties[] = "'provision_type' can't be null";
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

		if ( null === $this->container['order_number'] ) {
			return false;
		}
		if ( null === $this->container['provision_type'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets order_number
	 * @return int
	 */
	public function get_order_number() {
		return $this->container['order_number'];
	}

	/**
	 * Sets order_number
	 * @param int $order_number The order of service voucher.
	 * @return $this
	 */
	public function set_order_number( $order_number ) {
		$this->container['order_number'] = $order_number;

		return $this;
	}

	/**
	 * Gets provision_type
	 * @return string
	 */
	public function get_provision_type() {
		return $this->container['provision_type'];
	}

	/**
	 * Sets provision_type
	 * @param string $provision_type Provision type, valid values SelfProduced, PurchaseServices, Other.
	 * @return $this
	 */
	public function set_provision_type( $provision_type ) {
		$this->container['provision_type'] = $provision_type;

		return $this;
	}

	/**
	 * Gets organizations
	 * @return string[]
	 */
	public function get_organizations() {
		return $this->container['organizations'];
	}

	/**
	 * Sets organizations
	 * @param string[] $organizations Gets or sets the organization id information.
	 * @return $this
	 */
	public function set_organizations( $organizations ) {
		$this->container['organizations'] = $organizations;

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
	 * @param PTV_Language_Item[] $additional_information Localized list of additional information. (Max.Length: 150).
	 * @return $this
	 */
	public function set_additional_information( $additional_information ) {
		$this->container['additional_information'] = $additional_information;

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



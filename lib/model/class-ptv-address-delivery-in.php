<?php
/**
 * PTV_Address_Delivery_In
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
 * PTV_Address_Delivery_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of delivery address
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Address_Delivery_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Address_Delivery_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'sub_type' => 'string',
		'post_office_box_address' => 'PTV_Post_Office_Box_In',
		'street_address' => 'PTV_Street_Address_In',
		'delivery_address_in_text' => 'PTV_Language_Item[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'sub_type' => 'subType',
		'post_office_box_address' => 'postOfficeBoxAddress',
		'street_address' => 'streetAddress',
		'delivery_address_in_text' => 'deliveryAddressInText',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'sub_type' => 'set_sub_type',
		'post_office_box_address' => 'set_post_office_box_address',
		'street_address' => 'set_street_address',
		'delivery_address_in_text' => 'set_delivery_address_in_text',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'sub_type' => 'get_sub_type',
		'post_office_box_address' => 'get_post_office_box_address',
		'street_address' => 'get_street_address',
		'delivery_address_in_text' => 'get_delivery_address_in_text',
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
		$this->container['sub_type'] = isset( $data['sub_type'] ) ? $data['sub_type'] : null;
		$this->container['post_office_box_address'] = isset( $data['post_office_box_address'] ) ? $data['post_office_box_address'] : null;
		$this->container['street_address'] = isset( $data['street_address'] ) ? $data['street_address'] : null;
		$this->container['delivery_address_in_text'] = isset( $data['delivery_address_in_text'] ) ? $data['delivery_address_in_text'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['sub_type'] ) {
			$invalid_properties[] = "'sub_type' can't be null";
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

		if ( null === $this->container['sub_type'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets sub_type
	 * @return string
	 */
	public function get_sub_type() {
		return $this->container['sub_type'];
	}

	/**
	 * Sets sub_type
	 * @param string $sub_type Address sub type, Street, PostOfficeBox or NoAddress.
	 * @return $this
	 */
	public function set_sub_type( $sub_type ) {
		$this->container['sub_type'] = $sub_type;

		return $this;
	}

	/**
	 * Gets post_office_box_address
	 * @return PTV_Post_Office_Box_In
	 */
	public function get_post_office_box_address() {
		return $this->container['post_office_box_address'];
	}

	/**
	 * Sets post_office_box_address
	 * @param PTV_Post_Office_Box_In $post_office_box_address Post office box address
	 * @return $this
	 */
	public function set_post_office_box_address( $post_office_box_address ) {
		$this->container['post_office_box_address'] = $post_office_box_address;

		return $this;
	}

	/**
	 * Gets street_address
	 * @return PTV_Street_Address_In
	 */
	public function get_street_address() {
		return $this->container['street_address'];
	}

	/**
	 * Sets street_address
	 * @param PTV_Street_Address_In $street_address Street address.
	 * @return $this
	 */
	public function set_street_address( $street_address ) {
		$this->container['street_address'] = $street_address;

		return $this;
	}

	/**
	 * Gets delivery_address_in_text
	 * @return PTV_Language_Item[]
	 */
	public function get_delivery_address_in_text() {
		return $this->container['delivery_address_in_text'];
	}

	/**
	 * Sets delivery_address_in_text
	 * @param PTV_Language_Item[] $delivery_address_in_text Localized list of foreign address information. (Max.Length: 150).
	 * @return $this
	 */
	public function set_delivery_address_in_text( $delivery_address_in_text ) {
		$this->container['delivery_address_in_text'] = $delivery_address_in_text;

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



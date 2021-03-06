<?php
/**
 * PTV_Address
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
 * PTV_Address Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of address
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Address implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Address';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'type' => 'string',
		'sub_type' => 'string',
		'post_office_box_address' => 'PTV_Post_Office_Box',
		'street_address' => 'PTV_Street_Address_With_Coordinates',
		'foreign_address' => 'PTV_Language_Item[]',
		'country' => 'string',
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
		'sub_type' => 'subType',
		'post_office_box_address' => 'postOfficeBoxAddress',
		'street_address' => 'streetAddress',
		'foreign_address' => 'foreignAddress',
		'country' => 'country',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'type' => 'set_type',
		'sub_type' => 'set_sub_type',
		'post_office_box_address' => 'set_post_office_box_address',
		'street_address' => 'set_street_address',
		'foreign_address' => 'set_foreign_address',
		'country' => 'set_country',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'type' => 'get_type',
		'sub_type' => 'get_sub_type',
		'post_office_box_address' => 'get_post_office_box_address',
		'street_address' => 'get_street_address',
		'foreign_address' => 'get_foreign_address',
		'country' => 'get_country',
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
		$this->container['sub_type'] = isset( $data['sub_type'] ) ? $data['sub_type'] : null;
		$this->container['post_office_box_address'] = isset( $data['post_office_box_address'] ) ? $data['post_office_box_address'] : null;
		$this->container['street_address'] = isset( $data['street_address'] ) ? $data['street_address'] : null;
		$this->container['foreign_address'] = isset( $data['foreign_address'] ) ? $data['foreign_address'] : null;
		$this->container['country'] = isset( $data['country'] ) ? $data['country'] : null;
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
	 * Gets type
	 * @return string
	 */
	public function get_type() {
		return $this->container['type'];
	}

	/**
	 * Sets type
	 * @param string $type Address type, Visiting or Postal.
	 * @return $this
	 */
	public function set_type( $type ) {
		$this->container['type'] = $type;

		return $this;
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
	 * @param string $sub_type Address sub type, Street, PostOfficeBox or Foreign.
	 * @return $this
	 */
	public function set_sub_type( $sub_type ) {
		$this->container['sub_type'] = $sub_type;

		return $this;
	}

	/**
	 * Gets post_office_box_address
	 * @return PTV_Post_Office_Box
	 */
	public function get_post_office_box_address() {
		return $this->container['post_office_box_address'];
	}

	/**
	 * Sets post_office_box_address
	 * @param PTV_Post_Office_Box $post_office_box_address Post office box address
	 * @return $this
	 */
	public function set_post_office_box_address( $post_office_box_address ) {
		$this->container['post_office_box_address'] = $post_office_box_address;

		return $this;
	}

	/**
	 * Gets street_address
	 * @return PTV_Street_Address_With_Coordinates
	 */
	public function get_street_address() {
		return $this->container['street_address'];
	}

	/**
	 * Sets street_address
	 * @param PTV_Street_Address_With_Coordinates $street_address Street address.
	 * @return $this
	 */
	public function set_street_address( $street_address ) {
		$this->container['street_address'] = $street_address;

		return $this;
	}

	/**
	 * Gets foreign_address
	 * @return PTV_Language_Item[]
	 */
	public function get_foreign_address() {
		return $this->container['foreign_address'];
	}

	/**
	 * Sets foreign_address
	 * @param PTV_Language_Item[] $foreign_address Localized list of foreign address information.
	 * @return $this
	 */
	public function set_foreign_address( $foreign_address ) {
		$this->container['foreign_address'] = $foreign_address;

		return $this;
	}

	/**
	 * Gets country
	 * @return string
	 */
	public function get_country() {
		return $this->container['country'];
	}

	/**
	 * Sets country
	 * @param string $country Country code (ISO 3166-1 alpha-2), for example FI.
	 * @return $this
	 */
	public function set_country( $country ) {
		$this->container['country'] = $country;

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



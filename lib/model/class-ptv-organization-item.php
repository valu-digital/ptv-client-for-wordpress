<?php
/**
 * PTV_Organization_Item
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
 * PTV_Organization_Item Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of organization item
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Organization_Item implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Organization_Item';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'parent_organization' => 'string',
		'id' => 'string',
		'name' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'parent_organization' => 'parentOrganization',
		'id' => 'id',
		'name' => 'name',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'parent_organization' => 'set_parent_organization',
		'id' => 'set_id',
		'name' => 'set_name',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'parent_organization' => 'get_parent_organization',
		'id' => 'get_id',
		'name' => 'get_name',
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
		$this->container['parent_organization'] = isset( $data['parent_organization'] ) ? $data['parent_organization'] : null;
		$this->container['id'] = isset( $data['id'] ) ? $data['id'] : null;
		$this->container['name'] = isset( $data['name'] ) ? $data['name'] : null;
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
	 * Gets parent_organization
	 * @return string
	 */
	public function get_parent_organization() {
		return $this->container['parent_organization'];
	}

	/**
	 * Sets parent_organization
	 * @param string $parent_organization Organizations parent organization identifier if exists.
	 * @return $this
	 */
	public function set_parent_organization( $parent_organization ) {
		$this->container['parent_organization'] = $parent_organization;

		return $this;
	}

	/**
	 * Gets id
	 * @return string
	 */
	public function get_id() {
		return $this->container['id'];
	}

	/**
	 * Sets id
	 * @param string $id Id of the item.
	 * @return $this
	 */
	public function set_id( $id ) {
		$this->container['id'] = $id;

		return $this;
	}

	/**
	 * Gets name
	 * @return string
	 */
	public function get_name() {
		return $this->container['name'];
	}

	/**
	 * Sets name
	 * @param string $name Name of the item.
	 * @return $this
	 */
	public function set_name( $name ) {
		$this->container['name'] = $name;

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



<?php
/**
 * PTV_Finto_Item
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
 * PTV_Finto_Item Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V4 - View Model of finto item
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Finto_Item implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Finto_Item';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'name' => 'PTV_Language_Item[]',
		'code' => 'string',
		'ontology_type' => 'string',
		'uri' => 'string',
		'parent_id' => 'string',
		'parent_uri' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'name' => 'name',
		'code' => 'code',
		'ontology_type' => 'ontologyType',
		'uri' => 'uri',
		'parent_id' => 'parentId',
		'parent_uri' => 'parentUri',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'name' => 'set_name',
		'code' => 'set_code',
		'ontology_type' => 'set_ontology_type',
		'uri' => 'set_uri',
		'parent_id' => 'set_parent_id',
		'parent_uri' => 'set_parent_uri',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'name' => 'get_name',
		'code' => 'get_code',
		'ontology_type' => 'get_ontology_type',
		'uri' => 'get_uri',
		'parent_id' => 'get_parent_id',
		'parent_uri' => 'get_parent_uri',
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
		$this->container['name'] = isset( $data['name'] ) ? $data['name'] : null;
		$this->container['code'] = isset( $data['code'] ) ? $data['code'] : null;
		$this->container['ontology_type'] = isset( $data['ontology_type'] ) ? $data['ontology_type'] : null;
		$this->container['uri'] = isset( $data['uri'] ) ? $data['uri'] : null;
		$this->container['parent_id'] = isset( $data['parent_id'] ) ? $data['parent_id'] : null;
		$this->container['parent_uri'] = isset( $data['parent_uri'] ) ? $data['parent_uri'] : null;
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
	 * Gets name
	 * @return PTV_Language_Item[]
	 */
	public function get_name() {
		return $this->container['name'];
	}

	/**
	 * Sets name
	 * @param PTV_Language_Item[] $name List of localized entity names.
	 * @return $this
	 */
	public function set_name( $name ) {
		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets code
	 * @return string
	 */
	public function get_code() {
		return $this->container['code'];
	}

	/**
	 * Sets code
	 * @param string $code Entity code.
	 * @return $this
	 */
	public function set_code( $code ) {
		$this->container['code'] = $code;

		return $this;
	}

	/**
	 * Gets ontology_type
	 * @return string
	 */
	public function get_ontology_type() {
		return $this->container['ontology_type'];
	}

	/**
	 * Sets ontology_type
	 * @param string $ontology_type Ontology term type.
	 * @return $this
	 */
	public function set_ontology_type( $ontology_type ) {
		$this->container['ontology_type'] = $ontology_type;

		return $this;
	}

	/**
	 * Gets uri
	 * @return string
	 */
	public function get_uri() {
		return $this->container['uri'];
	}

	/**
	 * Sets uri
	 * @param string $uri Entity uri.
	 * @return $this
	 */
	public function set_uri( $uri ) {
		$this->container['uri'] = $uri;

		return $this;
	}

	/**
	 * Gets parent_id
	 * @return string
	 */
	public function get_parent_id() {
		return $this->container['parent_id'];
	}

	/**
	 * Sets parent_id
	 * @param string $parent_id Entity parent identifier.
	 * @return $this
	 */
	public function set_parent_id( $parent_id ) {
		$this->container['parent_id'] = $parent_id;

		return $this;
	}

	/**
	 * Gets parent_uri
	 * @return string
	 */
	public function get_parent_uri() {
		return $this->container['parent_uri'];
	}

	/**
	 * Sets parent_uri
	 * @param string $parent_uri Entity parent uri.
	 * @return $this
	 */
	public function set_parent_uri( $parent_uri ) {
		$this->container['parent_uri'] = $parent_uri;

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



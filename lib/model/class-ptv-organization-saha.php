<?php
/**
 * PTV_Organization_Saha
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
 * PTV_Organization_Saha Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of Saha organization
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Organization_Saha implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Organization_Saha';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'id' => 'string',
		'parent_organization_id' => 'string',
		'saha_id' => 'string',
		'organization_names' => 'PTV_Localized_List_Item[]',
		'modified' => '\DateTime',
		'publishing_status' => 'string',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'id' => 'id',
		'parent_organization_id' => 'parentOrganizationId',
		'saha_id' => 'sahaId',
		'organization_names' => 'organizationNames',
		'modified' => 'modified',
		'publishing_status' => 'publishingStatus',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'id' => 'set_id',
		'parent_organization_id' => 'set_parent_organization_id',
		'saha_id' => 'set_saha_id',
		'organization_names' => 'set_organization_names',
		'modified' => 'set_modified',
		'publishing_status' => 'set_publishing_status',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'id' => 'get_id',
		'parent_organization_id' => 'get_parent_organization_id',
		'saha_id' => 'get_saha_id',
		'organization_names' => 'get_organization_names',
		'modified' => 'get_modified',
		'publishing_status' => 'get_publishing_status',
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
		$this->container['id'] = isset( $data['id'] ) ? $data['id'] : null;
		$this->container['parent_organization_id'] = isset( $data['parent_organization_id'] ) ? $data['parent_organization_id'] : null;
		$this->container['saha_id'] = isset( $data['saha_id'] ) ? $data['saha_id'] : null;
		$this->container['organization_names'] = isset( $data['organization_names'] ) ? $data['organization_names'] : null;
		$this->container['modified'] = isset( $data['modified'] ) ? $data['modified'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
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
	 * Gets id
	 * @return string
	 */
	public function get_id() {
		return $this->container['id'];
	}

	/**
	 * Sets id
	 * @param string $id Entity identifier.
	 * @return $this
	 */
	public function set_id( $id ) {
		$this->container['id'] = $id;

		return $this;
	}

	/**
	 * Gets parent_organization_id
	 * @return string
	 */
	public function get_parent_organization_id() {
		return $this->container['parent_organization_id'];
	}

	/**
	 * Sets parent_organization_id
	 * @param string $parent_organization_id Organizations parent organization identifier if exists.
	 * @return $this
	 */
	public function set_parent_organization_id( $parent_organization_id ) {
		$this->container['parent_organization_id'] = $parent_organization_id;

		return $this;
	}

	/**
	 * Gets saha_id
	 * @return string
	 */
	public function get_saha_id() {
		return $this->container['saha_id'];
	}

	/**
	 * Sets saha_id
	 * @param string $saha_id Organizations Saha identifier if exists.
	 * @return $this
	 */
	public function set_saha_id( $saha_id ) {
		$this->container['saha_id'] = $saha_id;

		return $this;
	}

	/**
	 * Gets organization_names
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_organization_names() {
		return $this->container['organization_names'];
	}

	/**
	 * Sets organization_names
	 * @param PTV_Localized_List_Item[] $organization_names List of organization names.
	 * @return $this
	 */
	public function set_organization_names( $organization_names ) {
		$this->container['organization_names'] = $organization_names;

		return $this;
	}

	/**
	 * Gets modified
	 * @return \DateTime
	 */
	public function get_modified() {
		return $this->container['modified'];
	}

	/**
	 * Sets modified
	 * @param \DateTime $modified Date when item was modified/created (UTC).
	 * @return $this
	 */
	public function set_modified( $modified ) {
		$this->container['modified'] = $modified;

		return $this;
	}

	/**
	 * Gets publishing_status
	 * @return string
	 */
	public function get_publishing_status() {
		return $this->container['publishing_status'];
	}

	/**
	 * Sets publishing_status
	 * @param string $publishing_status Publishing status (Published or Deleted).
	 * @return $this
	 */
	public function set_publishing_status( $publishing_status ) {
		$this->container['publishing_status'] = $publishing_status;

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



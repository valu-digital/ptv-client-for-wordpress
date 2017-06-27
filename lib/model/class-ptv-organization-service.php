<?php
/**
 * PTV_Organization_Service
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
 * PTV_Organization_Service Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of organization service
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Organization_Service implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Organization_Service';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'organization_id' => 'string',
		'service' => 'PTV_Item',
		'role_type' => 'string',
		'provision_type' => 'string',
		'additional_information' => 'PTV_Language_Item[]',
		'web_pages' => 'PTV_Web_Page[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'organization_id' => 'organizationId',
		'service' => 'service',
		'role_type' => 'roleType',
		'provision_type' => 'provisionType',
		'additional_information' => 'additionalInformation',
		'web_pages' => 'webPages',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'organization_id' => 'set_organization_id',
		'service' => 'set_service',
		'role_type' => 'set_role_type',
		'provision_type' => 'set_provision_type',
		'additional_information' => 'set_additional_information',
		'web_pages' => 'set_web_pages',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'organization_id' => 'get_organization_id',
		'service' => 'get_service',
		'role_type' => 'get_role_type',
		'provision_type' => 'get_provision_type',
		'additional_information' => 'get_additional_information',
		'web_pages' => 'get_web_pages',
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
		$this->container['organization_id'] = isset( $data['organization_id'] ) ? $data['organization_id'] : null;
		$this->container['service'] = isset( $data['service'] ) ? $data['service'] : null;
		$this->container['role_type'] = isset( $data['role_type'] ) ? $data['role_type'] : null;
		$this->container['provision_type'] = isset( $data['provision_type'] ) ? $data['provision_type'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['role_type'] ) {
			$invalid_properties[] = "'role_type' can't be null";
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

		if ( null === $this->container['role_type'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets organization_id
	 * @return string
	 */
	public function get_organization_id() {
		return $this->container['organization_id'];
	}

	/**
	 * Sets organization_id
	 * @param string $organization_id PTV organization identifier (organization related to the service).
	 * @return $this
	 */
	public function set_organization_id( $organization_id ) {
		$this->container['organization_id'] = $organization_id;

		return $this;
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
	 * @param PTV_Item $service Service identifier and name.
	 * @return $this
	 */
	public function set_service( $service ) {
		$this->container['service'] = $service;

		return $this;
	}

	/**
	 * Gets role_type
	 * @return string
	 */
	public function get_role_type() {
		return $this->container['role_type'];
	}

	/**
	 * Sets role_type
	 * @param string $role_type Role type, valid values Responsible or Producer.
	 * @return $this
	 */
	public function set_role_type( $role_type ) {
		$this->container['role_type'] = $role_type;

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
	 * @param string $provision_type Provision type, valid values SelfProduced, PurchaseServices, Other or VoucherServices. Required if RoleType value is Producer.
	 * @return $this
	 */
	public function set_provision_type( $provision_type ) {
		$this->container['provision_type'] = $provision_type;

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
	 * @param PTV_Language_Item[] $additional_information Localized list of additional information.
	 * @return $this
	 */
	public function set_additional_information( $additional_information ) {
		$this->container['additional_information'] = $additional_information;

		return $this;
	}

	/**
	 * Gets web_pages
	 * @return PTV_Web_Page[]
	 */
	public function get_web_pages() {
		return $this->container['web_pages'];
	}

	/**
	 * Sets web_pages
	 * @param PTV_Web_Page[] $web_pages List of web pages.
	 * @return $this
	 */
	public function set_web_pages( $web_pages ) {
		$this->container['web_pages'] = $web_pages;

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



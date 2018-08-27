<?php
/**
 * PTV_Service_Organization
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
 * PTV_Service_Organization Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V6 - View Model of service organization
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Organization implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Organization';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'provision_type' => 'string',
		'organization' => 'PTV_Item',
		'role_type' => 'string',
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
		'provision_type' => 'provisionType',
		'organization' => 'organization',
		'role_type' => 'roleType',
		'additional_information' => 'additionalInformation',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'provision_type' => 'set_provision_type',
		'organization' => 'set_organization',
		'role_type' => 'set_role_type',
		'additional_information' => 'set_additional_information',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'provision_type' => 'get_provision_type',
		'organization' => 'get_organization',
		'role_type' => 'get_role_type',
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
		$this->container['provision_type'] = isset( $data['provision_type'] ) ? $data['provision_type'] : null;
		$this->container['organization'] = isset( $data['organization'] ) ? $data['organization'] : null;
		$this->container['role_type'] = isset( $data['role_type'] ) ? $data['role_type'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
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
	 * Gets provision_type
	 * @return string
	 */
	public function get_provision_type() {
		return $this->container['provision_type'];
	}

	/**
	 * Sets provision_type
	 * @param string $provision_type Provision type, valid values SelfProduced, PurchaseServices or Other. Required if RoleType value is Producer.
	 * @return $this
	 */
	public function set_provision_type( $provision_type ) {
		$this->container['provision_type'] = $provision_type;

		return $this;
	}

	/**
	 * Gets organization
	 * @return PTV_Item
	 */
	public function get_organization() {
		return $this->container['organization'];
	}

	/**
	 * Sets organization
	 * @param PTV_Item $organization Service channel identifier and name.
	 * @return $this
	 */
	public function set_organization( $organization ) {
		$this->container['organization'] = $organization;

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
	 * @param string $role_type Role type, valid values Responsible or Producer. In version 7 and upper also OtherResponsible role type is used.
	 * @return $this
	 */
	public function set_role_type( $role_type ) {
		$this->container['role_type'] = $role_type;

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



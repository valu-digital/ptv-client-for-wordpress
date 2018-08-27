<?php
/**
 * PTV_Service_Collection_In
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
 * PTV_Service_Collection_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of service collection IN
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Collection_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Collection_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'source_id' => 'string',
		'main_responsible_organization' => 'string',
		'service_collection_names' => 'PTV_Language_Item[]',
		'service_collection_descriptions' => 'PTV_Language_Item[]',
		'services' => 'string[]',
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
		'source_id' => 'sourceId',
		'main_responsible_organization' => 'mainResponsibleOrganization',
		'service_collection_names' => 'serviceCollectionNames',
		'service_collection_descriptions' => 'serviceCollectionDescriptions',
		'services' => 'services',
		'publishing_status' => 'publishingStatus',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'source_id' => 'set_source_id',
		'main_responsible_organization' => 'set_main_responsible_organization',
		'service_collection_names' => 'set_service_collection_names',
		'service_collection_descriptions' => 'set_service_collection_descriptions',
		'services' => 'set_services',
		'publishing_status' => 'set_publishing_status',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'source_id' => 'get_source_id',
		'main_responsible_organization' => 'get_main_responsible_organization',
		'service_collection_names' => 'get_service_collection_names',
		'service_collection_descriptions' => 'get_service_collection_descriptions',
		'services' => 'get_services',
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
		$this->container['source_id'] = isset( $data['source_id'] ) ? $data['source_id'] : null;
		$this->container['main_responsible_organization'] = isset( $data['main_responsible_organization'] ) ? $data['main_responsible_organization'] : null;
		$this->container['service_collection_names'] = isset( $data['service_collection_names'] ) ? $data['service_collection_names'] : null;
		$this->container['service_collection_descriptions'] = isset( $data['service_collection_descriptions'] ) ? $data['service_collection_descriptions'] : null;
		$this->container['services'] = isset( $data['services'] ) ? $data['services'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( ! is_null( $this->container['source_id'] ) && ! preg_match( '/^[A-Za-z0-9-.]*$/', $this->container['source_id'] ) ) {
			$invalid_properties[] = "invalid value for 'source_id', must be conform to the pattern /^[A-Za-z0-9-.]*$/.";
		}

		if ( null === $this->container['main_responsible_organization'] ) {
			$invalid_properties[] = "'main_responsible_organization' can't be null";
		}
		if ( null === $this->container['service_collection_names'] ) {
			$invalid_properties[] = "'service_collection_names' can't be null";
		}
		if ( null === $this->container['service_collection_descriptions'] ) {
			$invalid_properties[] = "'service_collection_descriptions' can't be null";
		}
		if ( null === $this->container['publishing_status'] ) {
			$invalid_properties[] = "'publishing_status' can't be null";
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

		if ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $this->container['source_id'] ) ) {
			return false;
		}
		if ( null === $this->container['main_responsible_organization'] ) {
			return false;
		}
		if ( null === $this->container['service_collection_names'] ) {
			return false;
		}
		if ( null === $this->container['service_collection_descriptions'] ) {
			return false;
		}
		if ( null === $this->container['publishing_status'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets source_id
	 * @return string
	 */
	public function get_source_id() {
		return $this->container['source_id'];
	}

	/**
	 * Sets source_id
	 * @param string $source_id External system identifier for the entity. User needs to be logged in to be able to get/set value.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Service_Collection_In., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
		}

		$this->container['source_id'] = $source_id;

		return $this;
	}

	/**
	 * Gets main_responsible_organization
	 * @return string
	 */
	public function get_main_responsible_organization() {
		return $this->container['main_responsible_organization'];
	}

	/**
	 * Sets main_responsible_organization
	 * @param string $main_responsible_organization Main responsible organization Id
	 * @return $this
	 */
	public function set_main_responsible_organization( $main_responsible_organization ) {
		$this->container['main_responsible_organization'] = $main_responsible_organization;

		return $this;
	}

	/**
	 * Gets service_collection_names
	 * @return PTV_Language_Item[]
	 */
	public function get_service_collection_names() {
		return $this->container['service_collection_names'];
	}

	/**
	 * Sets service_collection_names
	 * @param PTV_Language_Item[] $service_collection_names List of localized service collection names. (Max.Length: 100).
	 * @return $this
	 */
	public function set_service_collection_names( $service_collection_names ) {
		$this->container['service_collection_names'] = $service_collection_names;

		return $this;
	}

	/**
	 * Gets service_collection_descriptions
	 * @return PTV_Language_Item[]
	 */
	public function get_service_collection_descriptions() {
		return $this->container['service_collection_descriptions'];
	}

	/**
	 * Sets service_collection_descriptions
	 * @param PTV_Language_Item[] $service_collection_descriptions List of localized service collection descriptions. (Max.Length: 500).
	 * @return $this
	 */
	public function set_service_collection_descriptions( $service_collection_descriptions ) {
		$this->container['service_collection_descriptions'] = $service_collection_descriptions;

		return $this;
	}

	/**
	 * Gets services
	 * @return string[]
	 */
	public function get_services() {
		return $this->container['services'];
	}

	/**
	 * Sets services
	 * @param string[] $services List of service collection services.
	 * @return $this
	 */
	public function set_services( $services ) {
		$this->container['services'] = $services;

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
	 * @param string $publishing_status Publishing status. Possible values are: Draft or Published.
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



<?php
/**
 * PTV_Post_Office_Box
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
 * PTV_Post_Office_Box Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of post office box address.
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Post_Office_Box implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Post_Office_Box';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'post_office_box' => 'PTV_Language_Item[]',
		'postal_code' => 'string',
		'post_office' => 'PTV_Language_Item[]',
		'municipality' => 'PTV_Municipality',
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
		'post_office_box' => 'postOfficeBox',
		'postal_code' => 'postalCode',
		'post_office' => 'postOffice',
		'municipality' => 'municipality',
		'additional_information' => 'additionalInformation',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'post_office_box' => 'set_post_office_box',
		'postal_code' => 'set_postal_code',
		'post_office' => 'set_post_office',
		'municipality' => 'set_municipality',
		'additional_information' => 'set_additional_information',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'post_office_box' => 'get_post_office_box',
		'postal_code' => 'get_postal_code',
		'post_office' => 'get_post_office',
		'municipality' => 'get_municipality',
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
		$this->container['post_office_box'] = isset( $data['post_office_box'] ) ? $data['post_office_box'] : null;
		$this->container['postal_code'] = isset( $data['postal_code'] ) ? $data['postal_code'] : null;
		$this->container['post_office'] = isset( $data['post_office'] ) ? $data['post_office'] : null;
		$this->container['municipality'] = isset( $data['municipality'] ) ? $data['municipality'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['post_office_box'] ) {
			$invalid_properties[] = "'post_office_box' can't be null";
		}
		if ( null === $this->container['postal_code'] ) {
			$invalid_properties[] = "'postal_code' can't be null";
		}
		if ( ! preg_match( '/\\d{5}?/', $this->container['postal_code'] ) ) {
			$invalid_properties[] = "invalid value for 'postal_code', must be conform to the pattern /\\d{5}?/.";
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

		if ( null === $this->container['post_office_box'] ) {
			return false;
		}
		if ( null === $this->container['postal_code'] ) {
			return false;
		}
		if ( ! preg_match( '/\\d{5}?/', $this->container['postal_code'] ) ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets post_office_box
	 * @return PTV_Language_Item[]
	 */
	public function get_post_office_box() {
		return $this->container['post_office_box'];
	}

	/**
	 * Sets post_office_box
	 * @param PTV_Language_Item[] $post_office_box Post office box like PL 310 (Max.Length: 100).
	 * @return $this
	 */
	public function set_post_office_box( $post_office_box ) {
		$this->container['post_office_box'] = $post_office_box;

		return $this;
	}

	/**
	 * Gets postal_code
	 * @return string
	 */
	public function get_postal_code() {
		return $this->container['postal_code'];
	}

	/**
	 * Sets postal_code
	 * @param string $postal_code Postal code, for example 00100.
	 * @return $this
	 */
	public function set_postal_code( $postal_code ) {

		if ( ( ! preg_match( '/\\d{5}?/', $postal_code ) ) ) {
			throw new InvalidArgumentException( "invalid value for $postal_code when calling PTV_Post_Office_Box., must conform to the pattern /\\d{5}?/." );
		}

		$this->container['postal_code'] = $postal_code;

		return $this;
	}

	/**
	 * Gets post_office
	 * @return PTV_Language_Item[]
	 */
	public function get_post_office() {
		return $this->container['post_office'];
	}

	/**
	 * Sets post_office
	 * @param PTV_Language_Item[] $post_office List of localized Post offices, for example Helsinki, Helsingfors.
	 * @return $this
	 */
	public function set_post_office( $post_office ) {
		$this->container['post_office'] = $post_office;

		return $this;
	}

	/**
	 * Gets municipality
	 * @return PTV_Municipality
	 */
	public function get_municipality() {
		return $this->container['municipality'];
	}

	/**
	 * Sets municipality
	 * @param PTV_Municipality $municipality Municipality code (e.g. 091).
	 * @return $this
	 */
	public function set_municipality( $municipality ) {
		$this->container['municipality'] = $municipality;

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
	 * @param PTV_Language_Item[] $additional_information Localized list of additional information about the address. (Max.Length: 150).
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



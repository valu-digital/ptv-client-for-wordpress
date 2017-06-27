<?php
/**
 * PTV_Address_With_Type_In
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
 * PTV_Address_With_Type_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of address with type
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Address_With_Type_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Address_With_Type_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'type' => 'string',
		'post_office_box' => 'PTV_Language_Item[]',
		'street_address' => 'PTV_Language_Item[]',
		'postal_code' => 'string',
		'street_number' => 'string',
		'municipality' => 'string',
		'country' => 'string',
		'additional_informations' => 'PTV_Language_Item[]',
		'latitude' => 'string',
		'longitude' => 'string',
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
		'post_office_box' => 'postOfficeBox',
		'street_address' => 'streetAddress',
		'postal_code' => 'postalCode',
		'street_number' => 'streetNumber',
		'municipality' => 'municipality',
		'country' => 'country',
		'additional_informations' => 'additionalInformations',
		'latitude' => 'latitude',
		'longitude' => 'longitude',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'type' => 'set_type',
		'post_office_box' => 'set_post_office_box',
		'street_address' => 'set_street_address',
		'postal_code' => 'set_postal_code',
		'street_number' => 'set_street_number',
		'municipality' => 'set_municipality',
		'country' => 'set_country',
		'additional_informations' => 'set_additional_informations',
		'latitude' => 'set_latitude',
		'longitude' => 'set_longitude',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'type' => 'get_type',
		'post_office_box' => 'get_post_office_box',
		'street_address' => 'get_street_address',
		'postal_code' => 'get_postal_code',
		'street_number' => 'get_street_number',
		'municipality' => 'get_municipality',
		'country' => 'get_country',
		'additional_informations' => 'get_additional_informations',
		'latitude' => 'get_latitude',
		'longitude' => 'get_longitude',
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
		$this->container['post_office_box'] = isset( $data['post_office_box'] ) ? $data['post_office_box'] : null;
		$this->container['street_address'] = isset( $data['street_address'] ) ? $data['street_address'] : null;
		$this->container['postal_code'] = isset( $data['postal_code'] ) ? $data['postal_code'] : null;
		$this->container['street_number'] = isset( $data['street_number'] ) ? $data['street_number'] : null;
		$this->container['municipality'] = isset( $data['municipality'] ) ? $data['municipality'] : null;
		$this->container['country'] = isset( $data['country'] ) ? $data['country'] : null;
		$this->container['additional_informations'] = isset( $data['additional_informations'] ) ? $data['additional_informations'] : null;
		$this->container['latitude'] = isset( $data['latitude'] ) ? $data['latitude'] : null;
		$this->container['longitude'] = isset( $data['longitude'] ) ? $data['longitude'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['type'] ) {
			$invalid_properties[] = "'type' can't be null";
		}
		if ( null === $this->container['postal_code'] ) {
			$invalid_properties[] = "'postal_code' can't be null";
		}
		if ( ! preg_match( '/\\d{5}?/', $this->container['postal_code'] ) ) {
			$invalid_properties[] = "invalid value for 'postal_code', must be conform to the pattern /\\d{5}?/.";
		}

		if ( ! is_null( $this->container['street_number'] ) && ( strlen( $this->container['street_number'] ) > 30 ) ) {
			$invalid_properties[] = "invalid value for 'street_number', the character length must be smaller than or equal to 30.";
		}

		if ( ! is_null( $this->container['municipality'] ) && ! preg_match( '/^[0-9]{1,3}$/', $this->container['municipality'] ) ) {
			$invalid_properties[] = "invalid value for 'municipality', must be conform to the pattern /^[0-9]{1,3}$/.";
		}

		if ( ! is_null( $this->container['country'] ) && ! preg_match( '/^[A-Z]{2}$/', $this->container['country'] ) ) {
			$invalid_properties[] = "invalid value for 'country', must be conform to the pattern /^[A-Z]{2}$/.";
		}

		if ( ! is_null( $this->container['latitude'] ) && ! preg_match( '/^\\d+\\.?\\d*$/', $this->container['latitude'] ) ) {
			$invalid_properties[] = "invalid value for 'latitude', must be conform to the pattern /^\\d+\\.?\\d*$/.";
		}

		if ( ! is_null( $this->container['longitude'] ) && ! preg_match( '/^\\d+\\.?\\d*$/', $this->container['longitude'] ) ) {
			$invalid_properties[] = "invalid value for 'longitude', must be conform to the pattern /^\\d+\\.?\\d*$/.";
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

		if ( null === $this->container['type'] ) {
			return false;
		}
		if ( null === $this->container['postal_code'] ) {
			return false;
		}
		if ( ! preg_match( '/\\d{5}?/', $this->container['postal_code'] ) ) {
			return false;
		}
		if ( strlen( $this->container['street_number'] ) > 30 ) {
			return false;
		}
		if ( ! preg_match( '/^[0-9]{1,3}$/', $this->container['municipality'] ) ) {
			return false;
		}
		if ( ! preg_match( '/^[A-Z]{2}$/', $this->container['country'] ) ) {
			return false;
		}
		if ( ! preg_match( '/^\\d+\\.?\\d*$/', $this->container['latitude'] ) ) {
			return false;
		}
		if ( ! preg_match( '/^\\d+\\.?\\d*$/', $this->container['longitude'] ) ) {
			return false;
		}
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
	 * Gets street_address
	 * @return PTV_Language_Item[]
	 */
	public function get_street_address() {
		return $this->container['street_address'];
	}

	/**
	 * Sets street_address
	 * @param PTV_Language_Item[] $street_address List of localized street addresses. (Max.Length: 100).
	 * @return $this
	 */
	public function set_street_address( $street_address ) {
		$this->container['street_address'] = $street_address;

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
	 * @param string $postal_code Postal code, for example 00010.
	 * @return $this
	 */
	public function set_postal_code( $postal_code ) {

		if ( ( ! preg_match( '/\\d{5}?/', $postal_code ) ) ) {
			throw new InvalidArgumentException( "invalid value for $postal_code when calling PTV_Address_With_Type_In., must conform to the pattern /\\d{5}?/." );
		}

		$this->container['postal_code'] = $postal_code;

		return $this;
	}

	/**
	 * Gets street_number
	 * @return string
	 */
	public function get_street_number() {
		return $this->container['street_number'];
	}

	/**
	 * Sets street_number
	 * @param string $street_number Street number for street address. (Max.Length: 30).
	 * @return $this
	 */
	public function set_street_number( $street_number ) {
		if ( ! is_null( $street_number ) && ( strlen( $street_number ) > 30 ) ) {
			throw new InvalidArgumentException( 'invalid length for $street_number when calling PTV_Address_With_Type_In., must be smaller than or equal to 30.' );
		}

		$this->container['street_number'] = $street_number;

		return $this;
	}

	/**
	 * Gets municipality
	 * @return string
	 */
	public function get_municipality() {
		return $this->container['municipality'];
	}

	/**
	 * Sets municipality
	 * @param string $municipality Municipality code (e.g. 091).
	 * @return $this
	 */
	public function set_municipality( $municipality ) {

		if ( ! is_null( $municipality ) && ( ! preg_match( '/^[0-9]{1,3}$/', $municipality ) ) ) {
			throw new InvalidArgumentException( "invalid value for $municipality when calling PTV_Address_With_Type_In., must conform to the pattern /^[0-9]{1,3}$/." );
		}

		$this->container['municipality'] = $municipality;

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

		if ( ! is_null( $country ) && ( ! preg_match( '/^[A-Z]{2}$/', $country ) ) ) {
			throw new InvalidArgumentException( "invalid value for $country when calling PTV_Address_With_Type_In., must conform to the pattern /^[A-Z]{2}$/." );
		}

		$this->container['country'] = $country;

		return $this;
	}

	/**
	 * Gets additional_informations
	 * @return PTV_Language_Item[]
	 */
	public function get_additional_informations() {
		return $this->container['additional_informations'];
	}

	/**
	 * Sets additional_informations
	 * @param PTV_Language_Item[] $additional_informations Localized list of additional information about the address. (Max.Length: 150).
	 * @return $this
	 */
	public function set_additional_informations( $additional_informations ) {
		$this->container['additional_informations'] = $additional_informations;

		return $this;
	}

	/**
	 * Gets latitude
	 * @return string
	 */
	public function get_latitude() {
		return $this->container['latitude'];
	}

	/**
	 * Sets latitude
	 * @param string $latitude Location latitude coordinate.
	 * @return $this
	 */
	public function set_latitude( $latitude ) {

		if ( ! is_null( $latitude ) && ( ! preg_match( '/^\\d+\\.?\\d*$/', $latitude ) ) ) {
			throw new InvalidArgumentException( "invalid value for $latitude when calling PTV_Address_With_Type_In., must conform to the pattern /^\\d+\\.?\\d*$/." );
		}

		$this->container['latitude'] = $latitude;

		return $this;
	}

	/**
	 * Gets longitude
	 * @return string
	 */
	public function get_longitude() {
		return $this->container['longitude'];
	}

	/**
	 * Sets longitude
	 * @param string $longitude Location longitude coordinate.
	 * @return $this
	 */
	public function set_longitude( $longitude ) {

		if ( ! is_null( $longitude ) && ( ! preg_match( '/^\\d+\\.?\\d*$/', $longitude ) ) ) {
			throw new InvalidArgumentException( "invalid value for $longitude when calling PTV_Address_With_Type_In., must conform to the pattern /^\\d+\\.?\\d*$/." );
		}

		$this->container['longitude'] = $longitude;

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



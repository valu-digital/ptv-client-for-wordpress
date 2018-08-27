<?php
/**
 * PTV_Organization_Einvoicing
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
 * PTV_Organization_Einvoicing Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of organization email
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Organization_Einvoicing implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Organization_Einvoicing';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'operator_code' => 'string',
		'electronic_invoicing_address' => 'string',
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
		'operator_code' => 'operatorCode',
		'electronic_invoicing_address' => 'electronicInvoicingAddress',
		'additional_information' => 'additionalInformation',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'operator_code' => 'set_operator_code',
		'electronic_invoicing_address' => 'set_electronic_invoicing_address',
		'additional_information' => 'set_additional_information',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'operator_code' => 'get_operator_code',
		'electronic_invoicing_address' => 'get_electronic_invoicing_address',
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
		$this->container['operator_code'] = isset( $data['operator_code'] ) ? $data['operator_code'] : null;
		$this->container['electronic_invoicing_address'] = isset( $data['electronic_invoicing_address'] ) ? $data['electronic_invoicing_address'] : null;
		$this->container['additional_information'] = isset( $data['additional_information'] ) ? $data['additional_information'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( ! is_null( $this->container['operator_code'] ) && ( strlen( $this->container['operator_code'] ) > 110 ) ) {
			$invalid_properties[] = "invalid value for 'operator_code', the character length must be smaller than or equal to 110.";
		}

		if ( ! is_null( $this->container['electronic_invoicing_address'] ) && ( strlen( $this->container['electronic_invoicing_address'] ) > 110 ) ) {
			$invalid_properties[] = "invalid value for 'electronic_invoicing_address', the character length must be smaller than or equal to 110.";
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

		if ( strlen( $this->container['operator_code'] ) > 110 ) {
			return false;
		}
		if ( strlen( $this->container['electronic_invoicing_address'] ) > 110 ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets operator_code
	 * @return string
	 */
	public function get_operator_code() {
		return $this->container['operator_code'];
	}

	/**
	 * Sets operator_code
	 * @param string $operator_code Operator code. (Max.Length: 110).
	 * @return $this
	 */
	public function set_operator_code( $operator_code ) {
		if ( ! is_null( $operator_code ) && ( strlen( $operator_code ) > 110 ) ) {
			throw new InvalidArgumentException( 'invalid length for $operator_code when calling PTV_Organization_Einvoicing., must be smaller than or equal to 110.' );
		}

		$this->container['operator_code'] = $operator_code;

		return $this;
	}

	/**
	 * Gets electronic_invoicing_address
	 * @return string
	 */
	public function get_electronic_invoicing_address() {
		return $this->container['electronic_invoicing_address'];
	}

	/**
	 * Sets electronic_invoicing_address
	 * @param string $electronic_invoicing_address Electronic invoicing address (Max.Length: 110).
	 * @return $this
	 */
	public function set_electronic_invoicing_address( $electronic_invoicing_address ) {
		if ( ! is_null( $electronic_invoicing_address ) && ( strlen( $electronic_invoicing_address ) > 110 ) ) {
			throw new InvalidArgumentException( 'invalid length for $electronic_invoicing_address when calling PTV_Organization_Einvoicing., must be smaller than or equal to 110.' );
		}

		$this->container['electronic_invoicing_address'] = $electronic_invoicing_address;

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
	 * @param PTV_Language_Item[] $additional_information Localized list of additional information for electronic invoicing address. (Max.Length: 150).
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



<?php
/**
 * PTV_Attachment
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
 * PTV_Attachment Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of Attachment
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Attachment implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Attachment';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'name' => 'string',
		'description' => 'string',
		'url' => 'string',
		'language' => 'string',
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
		'description' => 'description',
		'url' => 'url',
		'language' => 'language',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'name' => 'set_name',
		'description' => 'set_description',
		'url' => 'set_url',
		'language' => 'set_language',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'name' => 'get_name',
		'description' => 'get_description',
		'url' => 'get_url',
		'language' => 'get_language',
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
		$this->container['description'] = isset( $data['description'] ) ? $data['description'] : null;
		$this->container['url'] = isset( $data['url'] ) ? $data['url'] : null;
		$this->container['language'] = isset( $data['language'] ) ? $data['language'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( ! is_null( $this->container['name'] ) && ( strlen( $this->container['name'] ) > 100 ) ) {
			$invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
		}

		if ( ! is_null( $this->container['description'] ) && ( strlen( $this->container['description'] ) > 150 ) ) {
			$invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 150.";
		}

		if ( null === $this->container['url'] ) {
			$invalid_properties[] = "'url' can't be null";
		}
		if ( ( strlen( $this->container['url'] ) > 500 ) ) {
			$invalid_properties[] = "invalid value for 'url', the character length must be smaller than or equal to 500.";
		}

		if ( null === $this->container['language'] ) {
			$invalid_properties[] = "'language' can't be null";
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

		if ( strlen( $this->container['name'] ) > 100 ) {
			return false;
		}
		if ( strlen( $this->container['description'] ) > 150 ) {
			return false;
		}
		if ( null === $this->container['url'] ) {
			return false;
		}
		if ( strlen( $this->container['url'] ) > 500 ) {
			return false;
		}
		if ( null === $this->container['language'] ) {
			return false;
		}
		return true;
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
	 * @param string $name Name of the attachment. (Max.Length: 100).
	 * @return $this
	 */
	public function set_name( $name ) {
		if ( ! is_null( $name ) && ( strlen( $name ) > 100 ) ) {
			throw new InvalidArgumentException( 'invalid length for $name when calling PTV_Attachment., must be smaller than or equal to 100.' );
		}

		$this->container['name'] = $name;

		return $this;
	}

	/**
	 * Gets description
	 * @return string
	 */
	public function get_description() {
		return $this->container['description'];
	}

	/**
	 * Sets description
	 * @param string $description Description of the attachment. (Max.Length: 150).
	 * @return $this
	 */
	public function set_description( $description ) {
		if ( ! is_null( $description ) && ( strlen( $description ) > 150 ) ) {
			throw new InvalidArgumentException( 'invalid length for $description when calling PTV_Attachment., must be smaller than or equal to 150.' );
		}

		$this->container['description'] = $description;

		return $this;
	}

	/**
	 * Gets url
	 * @return string
	 */
	public function get_url() {
		return $this->container['url'];
	}

	/**
	 * Sets url
	 * @param string $url Url to the attachment. (Max.Length: 500).
	 * @return $this
	 */
	public function set_url( $url ) {
		if ( ( strlen( $url ) > 500 ) ) {
			throw new InvalidArgumentException( 'invalid length for $url when calling PTV_Attachment., must be smaller than or equal to 500.' );
		}

		$this->container['url'] = $url;

		return $this;
	}

	/**
	 * Gets language
	 * @return string
	 */
	public function get_language() {
		return $this->container['language'];
	}

	/**
	 * Sets language
	 * @param string $language Language of this object. Valid values are: fi, sv or en.
	 * @return $this
	 */
	public function set_language( $language ) {
		$this->container['language'] = $language;

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



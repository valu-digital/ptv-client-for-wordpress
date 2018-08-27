<?php
/**
 * PTV_Service_Channels
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
 * PTV_Service_Channels Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of service channels
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Channels implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Channels';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'electronic_channel' => 'PTV_EChannel_Channel',
		'phone_channel' => 'PTV_Phone_Channel',
		'printable_form_channel' => 'PTV_Printable_Form_Channel',
		'location_channel' => 'PTV_Service_Location_Channel',
		'web_page_channel' => 'PTV_Web_Page_Channel',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'electronic_channel' => 'electronicChannel',
		'phone_channel' => 'phoneChannel',
		'printable_form_channel' => 'printableFormChannel',
		'location_channel' => 'locationChannel',
		'web_page_channel' => 'webPageChannel',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'electronic_channel' => 'set_electronic_channel',
		'phone_channel' => 'set_phone_channel',
		'printable_form_channel' => 'set_printable_form_channel',
		'location_channel' => 'set_location_channel',
		'web_page_channel' => 'set_web_page_channel',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'electronic_channel' => 'get_electronic_channel',
		'phone_channel' => 'get_phone_channel',
		'printable_form_channel' => 'get_printable_form_channel',
		'location_channel' => 'get_location_channel',
		'web_page_channel' => 'get_web_page_channel',
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
		$this->container['electronic_channel'] = isset( $data['electronic_channel'] ) ? $data['electronic_channel'] : null;
		$this->container['phone_channel'] = isset( $data['phone_channel'] ) ? $data['phone_channel'] : null;
		$this->container['printable_form_channel'] = isset( $data['printable_form_channel'] ) ? $data['printable_form_channel'] : null;
		$this->container['location_channel'] = isset( $data['location_channel'] ) ? $data['location_channel'] : null;
		$this->container['web_page_channel'] = isset( $data['web_page_channel'] ) ? $data['web_page_channel'] : null;
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
	 * Gets electronic_channel
	 * @return PTV_EChannel_Channel
	 */
	public function get_electronic_channel() {
		return $this->container['electronic_channel'];
	}

	/**
	 * Sets electronic_channel
	 * @param PTV_EChannel_Channel $electronic_channel Electronic channel.
	 * @return $this
	 */
	public function set_electronic_channel( $electronic_channel ) {
		$this->container['electronic_channel'] = $electronic_channel;

		return $this;
	}

	/**
	 * Gets phone_channel
	 * @return PTV_Phone_Channel
	 */
	public function get_phone_channel() {
		return $this->container['phone_channel'];
	}

	/**
	 * Sets phone_channel
	 * @param PTV_Phone_Channel $phone_channel Phone channel.
	 * @return $this
	 */
	public function set_phone_channel( $phone_channel ) {
		$this->container['phone_channel'] = $phone_channel;

		return $this;
	}

	/**
	 * Gets printable_form_channel
	 * @return PTV_Printable_Form_Channel
	 */
	public function get_printable_form_channel() {
		return $this->container['printable_form_channel'];
	}

	/**
	 * Sets printable_form_channel
	 * @param PTV_Printable_Form_Channel $printable_form_channel Printable form channel.
	 * @return $this
	 */
	public function set_printable_form_channel( $printable_form_channel ) {
		$this->container['printable_form_channel'] = $printable_form_channel;

		return $this;
	}

	/**
	 * Gets location_channel
	 * @return PTV_Service_Location_Channel
	 */
	public function get_location_channel() {
		return $this->container['location_channel'];
	}

	/**
	 * Sets location_channel
	 * @param PTV_Service_Location_Channel $location_channel Location channel.
	 * @return $this
	 */
	public function set_location_channel( $location_channel ) {
		$this->container['location_channel'] = $location_channel;

		return $this;
	}

	/**
	 * Gets web_page_channel
	 * @return PTV_Web_Page_Channel
	 */
	public function get_web_page_channel() {
		return $this->container['web_page_channel'];
	}

	/**
	 * Sets web_page_channel
	 * @param PTV_Web_Page_Channel $web_page_channel Web page channel.
	 * @return $this
	 */
	public function set_web_page_channel( $web_page_channel ) {
		$this->container['web_page_channel'] = $web_page_channel;

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



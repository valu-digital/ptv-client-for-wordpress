<?php
/**
 * PTV_Contact_Details_In_Base
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
 * PTV_Contact_Details_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of service location channel - base version
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Contact_Details_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Contact_Details_In_Base';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'emails' => 'PTV_Language_Item[]',
		'phones' => 'PTV_Phone[]',
		'web_pages' => 'PTV_Web_Page_With_Order_Number[]',
		'addresses' => 'PTV_Address_In[]',
		'delete_all_emails' => 'bool',
		'delete_all_phones' => 'bool',
		'delete_all_web_pages' => 'bool',
		'delete_all_addresses' => 'bool',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'emails' => 'emails',
		'phones' => 'phones',
		'web_pages' => 'webPages',
		'addresses' => 'addresses',
		'delete_all_emails' => 'deleteAllEmails',
		'delete_all_phones' => 'deleteAllPhones',
		'delete_all_web_pages' => 'deleteAllWebPages',
		'delete_all_addresses' => 'deleteAllAddresses',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'emails' => 'set_emails',
		'phones' => 'set_phones',
		'web_pages' => 'set_web_pages',
		'addresses' => 'set_addresses',
		'delete_all_emails' => 'set_delete_all_emails',
		'delete_all_phones' => 'set_delete_all_phones',
		'delete_all_web_pages' => 'set_delete_all_web_pages',
		'delete_all_addresses' => 'set_delete_all_addresses',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'emails' => 'get_emails',
		'phones' => 'get_phones',
		'web_pages' => 'get_web_pages',
		'addresses' => 'get_addresses',
		'delete_all_emails' => 'get_delete_all_emails',
		'delete_all_phones' => 'get_delete_all_phones',
		'delete_all_web_pages' => 'get_delete_all_web_pages',
		'delete_all_addresses' => 'get_delete_all_addresses',
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
		$this->container['emails'] = isset( $data['emails'] ) ? $data['emails'] : null;
		$this->container['phones'] = isset( $data['phones'] ) ? $data['phones'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
		$this->container['addresses'] = isset( $data['addresses'] ) ? $data['addresses'] : null;
		$this->container['delete_all_emails'] = isset( $data['delete_all_emails'] ) ? $data['delete_all_emails'] : null;
		$this->container['delete_all_phones'] = isset( $data['delete_all_phones'] ) ? $data['delete_all_phones'] : null;
		$this->container['delete_all_web_pages'] = isset( $data['delete_all_web_pages'] ) ? $data['delete_all_web_pages'] : null;
		$this->container['delete_all_addresses'] = isset( $data['delete_all_addresses'] ) ? $data['delete_all_addresses'] : null;
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
	 * Gets emails
	 * @return PTV_Language_Item[]
	 */
	public function get_emails() {
		return $this->container['emails'];
	}

	/**
	 * Sets emails
	 * @param PTV_Language_Item[] $emails List of connection related email addresses.
	 * @return $this
	 */
	public function set_emails( $emails ) {
		$this->container['emails'] = $emails;

		return $this;
	}

	/**
	 * Gets phones
	 * @return PTV_Phone[]
	 */
	public function get_phones() {
		return $this->container['phones'];
	}

	/**
	 * Sets phones
	 * @param PTV_Phone[] $phones List of connection related phone numbers.
	 * @return $this
	 */
	public function set_phones( $phones ) {
		$this->container['phones'] = $phones;

		return $this;
	}

	/**
	 * Gets web_pages
	 * @return PTV_Web_Page_With_Order_Number[]
	 */
	public function get_web_pages() {
		return $this->container['web_pages'];
	}

	/**
	 * Sets web_pages
	 * @param PTV_Web_Page_With_Order_Number[] $web_pages List of connection related web pages.
	 * @return $this
	 */
	public function set_web_pages( $web_pages ) {
		$this->container['web_pages'] = $web_pages;

		return $this;
	}

	/**
	 * Gets addresses
	 * @return PTV_Address_In[]
	 */
	public function get_addresses() {
		return $this->container['addresses'];
	}

	/**
	 * Sets addresses
	 * @param PTV_Address_In[] $addresses List of service location addresses.
	 * @return $this
	 */
	public function set_addresses( $addresses ) {
		$this->container['addresses'] = $addresses;

		return $this;
	}

	/**
	 * Gets delete_all_emails
	 * @return bool
	 */
	public function get_delete_all_emails() {
		return $this->container['delete_all_emails'];
	}

	/**
	 * Sets delete_all_emails
	 * @param bool $delete_all_emails Gets or sets a value indicating whether all emails should be delted.
	 * @return $this
	 */
	public function set_delete_all_emails( $delete_all_emails ) {
		$this->container['delete_all_emails'] = $delete_all_emails;

		return $this;
	}

	/**
	 * Gets delete_all_phones
	 * @return bool
	 */
	public function get_delete_all_phones() {
		return $this->container['delete_all_phones'];
	}

	/**
	 * Sets delete_all_phones
	 * @param bool $delete_all_phones Gets or sets a value indicating whether all phones should be delted.
	 * @return $this
	 */
	public function set_delete_all_phones( $delete_all_phones ) {
		$this->container['delete_all_phones'] = $delete_all_phones;

		return $this;
	}

	/**
	 * Gets delete_all_web_pages
	 * @return bool
	 */
	public function get_delete_all_web_pages() {
		return $this->container['delete_all_web_pages'];
	}

	/**
	 * Sets delete_all_web_pages
	 * @param bool $delete_all_web_pages Gets or sets a value indicating whether all web pages should be delted.
	 * @return $this
	 */
	public function set_delete_all_web_pages( $delete_all_web_pages ) {
		$this->container['delete_all_web_pages'] = $delete_all_web_pages;

		return $this;
	}

	/**
	 * Gets delete_all_addresses
	 * @return bool
	 */
	public function get_delete_all_addresses() {
		return $this->container['delete_all_addresses'];
	}

	/**
	 * Sets delete_all_addresses
	 * @param bool $delete_all_addresses Gets or sets a value indicating whether all addresses should be delted.
	 * @return $this
	 */
	public function set_delete_all_addresses( $delete_all_addresses ) {
		$this->container['delete_all_addresses'] = $delete_all_addresses;

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



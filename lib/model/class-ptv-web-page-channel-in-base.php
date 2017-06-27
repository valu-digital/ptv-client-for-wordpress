<?php
/**
 * PTV_Web_Page_Channel_In_Base
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
 * PTV_Web_Page_Channel_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of web page channel for IN api - base
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Web_Page_Channel_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Web_Page_Channel_In_Base';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'source_id' => 'string',
		'organization_id' => 'string',
		'service_channel_names' => 'PTV_Language_Item[]',
		'service_channel_descriptions' => 'PTV_Localized_List_Item[]',
		'urls' => 'PTV_Language_Item[]',
		'support_phones' => 'PTV_Phone[]',
		'support_emails' => 'PTV_Language_Item[]',
		'languages' => 'string[]',
		'publishing_status' => 'string',
		'is_visible_for_all' => 'bool',
		'delete_all_support_emails' => 'bool',
		'delete_all_support_phones' => 'bool',
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
		'organization_id' => 'organizationId',
		'service_channel_names' => 'serviceChannelNames',
		'service_channel_descriptions' => 'serviceChannelDescriptions',
		'urls' => 'urls',
		'support_phones' => 'supportPhones',
		'support_emails' => 'supportEmails',
		'languages' => 'languages',
		'publishing_status' => 'publishingStatus',
		'is_visible_for_all' => 'isVisibleForAll',
		'delete_all_support_emails' => 'deleteAllSupportEmails',
		'delete_all_support_phones' => 'deleteAllSupportPhones',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'source_id' => 'set_source_id',
		'organization_id' => 'set_organization_id',
		'service_channel_names' => 'set_service_channel_names',
		'service_channel_descriptions' => 'set_service_channel_descriptions',
		'urls' => 'set_urls',
		'support_phones' => 'set_support_phones',
		'support_emails' => 'set_support_emails',
		'languages' => 'set_languages',
		'publishing_status' => 'set_publishing_status',
		'is_visible_for_all' => 'set_is_visible_for_all',
		'delete_all_support_emails' => 'set_delete_all_support_emails',
		'delete_all_support_phones' => 'set_delete_all_support_phones',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'source_id' => 'get_source_id',
		'organization_id' => 'get_organization_id',
		'service_channel_names' => 'get_service_channel_names',
		'service_channel_descriptions' => 'get_service_channel_descriptions',
		'urls' => 'get_urls',
		'support_phones' => 'get_support_phones',
		'support_emails' => 'get_support_emails',
		'languages' => 'get_languages',
		'publishing_status' => 'get_publishing_status',
		'is_visible_for_all' => 'get_is_visible_for_all',
		'delete_all_support_emails' => 'get_delete_all_support_emails',
		'delete_all_support_phones' => 'get_delete_all_support_phones',
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
		$this->container['organization_id'] = isset( $data['organization_id'] ) ? $data['organization_id'] : null;
		$this->container['service_channel_names'] = isset( $data['service_channel_names'] ) ? $data['service_channel_names'] : null;
		$this->container['service_channel_descriptions'] = isset( $data['service_channel_descriptions'] ) ? $data['service_channel_descriptions'] : null;
		$this->container['urls'] = isset( $data['urls'] ) ? $data['urls'] : null;
		$this->container['support_phones'] = isset( $data['support_phones'] ) ? $data['support_phones'] : null;
		$this->container['support_emails'] = isset( $data['support_emails'] ) ? $data['support_emails'] : null;
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['is_visible_for_all'] = isset( $data['is_visible_for_all'] ) ? $data['is_visible_for_all'] : null;
		$this->container['delete_all_support_emails'] = isset( $data['delete_all_support_emails'] ) ? $data['delete_all_support_emails'] : null;
		$this->container['delete_all_support_phones'] = isset( $data['delete_all_support_phones'] ) ? $data['delete_all_support_phones'] : null;
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
	 * @param string $source_id External system identifier for this service channel.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Web_Page_Channel_In_Base., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
		}

		$this->container['source_id'] = $source_id;

		return $this;
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
	 * @param string $organization_id PTV organization identifier for organization responsible for this service channel.
	 * @return $this
	 */
	public function set_organization_id( $organization_id ) {
		$this->container['organization_id'] = $organization_id;

		return $this;
	}

	/**
	 * Gets service_channel_names
	 * @return PTV_Language_Item[]
	 */
	public function get_service_channel_names() {
		return $this->container['service_channel_names'];
	}

	/**
	 * Sets service_channel_names
	 * @param PTV_Language_Item[] $service_channel_names Localized list of service channel names. (Max.Length: 100).
	 * @return $this
	 */
	public function set_service_channel_names( $service_channel_names ) {
		$this->container['service_channel_names'] = $service_channel_names;

		return $this;
	}

	/**
	 * Gets service_channel_descriptions
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_service_channel_descriptions() {
		return $this->container['service_channel_descriptions'];
	}

	/**
	 * Sets service_channel_descriptions
	 * @param PTV_Localized_List_Item[] $service_channel_descriptions List of localized service channel descriptions. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description).
	 * @return $this
	 */
	public function set_service_channel_descriptions( $service_channel_descriptions ) {
		$this->container['service_channel_descriptions'] = $service_channel_descriptions;

		return $this;
	}

	/**
	 * Gets urls
	 * @return PTV_Language_Item[]
	 */
	public function get_urls() {
		return $this->container['urls'];
	}

	/**
	 * Sets urls
	 * @param PTV_Language_Item[] $urls List of localized urls. (Max.Length: 500).
	 * @return $this
	 */
	public function set_urls( $urls ) {
		$this->container['urls'] = $urls;

		return $this;
	}

	/**
	 * Gets support_phones
	 * @return PTV_Phone[]
	 */
	public function get_support_phones() {
		return $this->container['support_phones'];
	}

	/**
	 * Sets support_phones
	 * @param PTV_Phone[] $support_phones List of support phone numbers for the service channel.
	 * @return $this
	 */
	public function set_support_phones( $support_phones ) {
		$this->container['support_phones'] = $support_phones;

		return $this;
	}

	/**
	 * Gets support_emails
	 * @return PTV_Language_Item[]
	 */
	public function get_support_emails() {
		return $this->container['support_emails'];
	}

	/**
	 * Sets support_emails
	 * @param PTV_Language_Item[] $support_emails List of support email addresses for the service channel. (Max.Length: 100).
	 * @return $this
	 */
	public function set_support_emails( $support_emails ) {
		$this->container['support_emails'] = $support_emails;

		return $this;
	}

	/**
	 * Gets languages
	 * @return string[]
	 */
	public function get_languages() {
		return $this->container['languages'];
	}

	/**
	 * Sets languages
	 * @param string[] $languages List of languages the service channel is available in (two letter language code).
	 * @return $this
	 */
	public function set_languages( $languages ) {
		$this->container['languages'] = $languages;

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
	 * @param string $publishing_status Service channel publishing status. Values: Draft, Published, Deleted or Modified.
	 * @return $this
	 */
	public function set_publishing_status( $publishing_status ) {
		$this->container['publishing_status'] = $publishing_status;

		return $this;
	}

	/**
	 * Gets is_visible_for_all
	 * @return bool
	 */
	public function get_is_visible_for_all() {
		return $this->container['is_visible_for_all'];
	}

	/**
	 * Sets is_visible_for_all
	 * @param bool $is_visible_for_all Indicates if channel can be used (referenced within services) by other users from other organizations.
	 * @return $this
	 */
	public function set_is_visible_for_all( $is_visible_for_all ) {
		$this->container['is_visible_for_all'] = $is_visible_for_all;

		return $this;
	}

	/**
	 * Gets delete_all_support_emails
	 * @return bool
	 */
	public function get_delete_all_support_emails() {
		return $this->container['delete_all_support_emails'];
	}

	/**
	 * Sets delete_all_support_emails
	 * @param bool $delete_all_support_emails Set to true to delete all existing support email addresses for the service channel. The SupportEmails collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_support_emails( $delete_all_support_emails ) {
		$this->container['delete_all_support_emails'] = $delete_all_support_emails;

		return $this;
	}

	/**
	 * Gets delete_all_support_phones
	 * @return bool
	 */
	public function get_delete_all_support_phones() {
		return $this->container['delete_all_support_phones'];
	}

	/**
	 * Sets delete_all_support_phones
	 * @param bool $delete_all_support_phones Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_support_phones( $delete_all_support_phones ) {
		$this->container['delete_all_support_phones'] = $delete_all_support_phones;

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



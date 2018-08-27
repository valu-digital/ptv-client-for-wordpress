<?php
/**
 * PTV_Printable_Form_Channel_In
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
 * PTV_Printable_Form_Channel_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of printable from channel for IN api
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Printable_Form_Channel_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Printable_Form_Channel_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'source_id' => 'string',
		'organization_id' => 'string',
		'service_channel_names' => 'PTV_Language_Item[]',
		'service_channel_descriptions' => 'PTV_Localized_List_Item[]',
		'area_type' => 'string',
		'areas' => 'PTV_Area_In[]',
		'form_identifier' => 'PTV_Language_Item[]',
		'form_receiver' => 'PTV_Language_Item[]',
		'delivery_address' => 'PTV_Address_Delivery_In',
		'channel_urls' => 'PTV_Localized_List_Item[]',
		'attachments' => 'PTV_Attachment[]',
		'support_phones' => 'PTV_Phone[]',
		'support_emails' => 'PTV_Language_Item[]',
		'publishing_status' => 'string',
		'is_visible_for_all' => 'bool',
		'services' => 'string[]',
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
		'area_type' => 'areaType',
		'areas' => 'areas',
		'form_identifier' => 'formIdentifier',
		'form_receiver' => 'formReceiver',
		'delivery_address' => 'deliveryAddress',
		'channel_urls' => 'channelUrls',
		'attachments' => 'attachments',
		'support_phones' => 'supportPhones',
		'support_emails' => 'supportEmails',
		'publishing_status' => 'publishingStatus',
		'is_visible_for_all' => 'isVisibleForAll',
		'services' => 'services',
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
		'area_type' => 'set_area_type',
		'areas' => 'set_areas',
		'form_identifier' => 'set_form_identifier',
		'form_receiver' => 'set_form_receiver',
		'delivery_address' => 'set_delivery_address',
		'channel_urls' => 'set_channel_urls',
		'attachments' => 'set_attachments',
		'support_phones' => 'set_support_phones',
		'support_emails' => 'set_support_emails',
		'publishing_status' => 'set_publishing_status',
		'is_visible_for_all' => 'set_is_visible_for_all',
		'services' => 'set_services',
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
		'area_type' => 'get_area_type',
		'areas' => 'get_areas',
		'form_identifier' => 'get_form_identifier',
		'form_receiver' => 'get_form_receiver',
		'delivery_address' => 'get_delivery_address',
		'channel_urls' => 'get_channel_urls',
		'attachments' => 'get_attachments',
		'support_phones' => 'get_support_phones',
		'support_emails' => 'get_support_emails',
		'publishing_status' => 'get_publishing_status',
		'is_visible_for_all' => 'get_is_visible_for_all',
		'services' => 'get_services',
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
		$this->container['area_type'] = isset( $data['area_type'] ) ? $data['area_type'] : null;
		$this->container['areas'] = isset( $data['areas'] ) ? $data['areas'] : null;
		$this->container['form_identifier'] = isset( $data['form_identifier'] ) ? $data['form_identifier'] : null;
		$this->container['form_receiver'] = isset( $data['form_receiver'] ) ? $data['form_receiver'] : null;
		$this->container['delivery_address'] = isset( $data['delivery_address'] ) ? $data['delivery_address'] : null;
		$this->container['channel_urls'] = isset( $data['channel_urls'] ) ? $data['channel_urls'] : null;
		$this->container['attachments'] = isset( $data['attachments'] ) ? $data['attachments'] : null;
		$this->container['support_phones'] = isset( $data['support_phones'] ) ? $data['support_phones'] : null;
		$this->container['support_emails'] = isset( $data['support_emails'] ) ? $data['support_emails'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['is_visible_for_all'] = isset( $data['is_visible_for_all'] ) ? $data['is_visible_for_all'] : null;
		$this->container['services'] = isset( $data['services'] ) ? $data['services'] : null;
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

		if ( null === $this->container['organization_id'] ) {
			$invalid_properties[] = "'organization_id' can't be null";
		}
		if ( null === $this->container['service_channel_names'] ) {
			$invalid_properties[] = "'service_channel_names' can't be null";
		}
		if ( null === $this->container['service_channel_descriptions'] ) {
			$invalid_properties[] = "'service_channel_descriptions' can't be null";
		}
		if ( null === $this->container['channel_urls'] ) {
			$invalid_properties[] = "'channel_urls' can't be null";
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
		if ( null === $this->container['organization_id'] ) {
			return false;
		}
		if ( null === $this->container['service_channel_names'] ) {
			return false;
		}
		if ( null === $this->container['service_channel_descriptions'] ) {
			return false;
		}
		if ( null === $this->container['channel_urls'] ) {
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
	 * @param string $source_id External system identifier for this service channel. User needs to be logged in to be able to get/set value.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Printable_Form_Channel_In., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
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
	 * @param string $organization_id PTV organization identifier of organization responsible for this channel.
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
	 * @param PTV_Language_Item[] $service_channel_names List of localized service channel names. (Max.Length: 100).
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
	 * Gets area_type
	 * @return string
	 */
	public function get_area_type() {
		return $this->container['area_type'];
	}

	/**
	 * Sets area_type
	 * @param string $area_type Area type (WholeCountry, WholeCountryExceptAlandIslands, AreaType).
	 * @return $this
	 */
	public function set_area_type( $area_type ) {
		$this->container['area_type'] = $area_type;

		return $this;
	}

	/**
	 * Gets areas
	 * @return PTV_Area_In[]
	 */
	public function get_areas() {
		return $this->container['areas'];
	}

	/**
	 * Sets areas
	 * @param PTV_Area_In[] $areas List of areas. List can contain different types of areas.
	 * @return $this
	 */
	public function set_areas( $areas ) {
		$this->container['areas'] = $areas;

		return $this;
	}

	/**
	 * Gets form_identifier
	 * @return PTV_Language_Item[]
	 */
	public function get_form_identifier() {
		return $this->container['form_identifier'];
	}

	/**
	 * Sets form_identifier
	 * @param PTV_Language_Item[] $form_identifier List of localized form identifiers. One per language. (Max.Length: 100).
	 * @return $this
	 */
	public function set_form_identifier( $form_identifier ) {
		$this->container['form_identifier'] = $form_identifier;

		return $this;
	}

	/**
	 * Gets form_receiver
	 * @return PTV_Language_Item[]
	 */
	public function get_form_receiver() {
		return $this->container['form_receiver'];
	}

	/**
	 * Sets form_receiver
	 * @param PTV_Language_Item[] $form_receiver List of localized form receivers. One per language. (Max.Length: 100).
	 * @return $this
	 */
	public function set_form_receiver( $form_receiver ) {
		$this->container['form_receiver'] = $form_receiver;

		return $this;
	}

	/**
	 * Gets delivery_address
	 * @return PTV_Address_Delivery_In
	 */
	public function get_delivery_address() {
		return $this->container['delivery_address'];
	}

	/**
	 * Sets delivery_address
	 * @param PTV_Address_Delivery_In $delivery_address Form delivery address.
	 * @return $this
	 */
	public function set_delivery_address( $delivery_address ) {
		$this->container['delivery_address'] = $delivery_address;

		return $this;
	}

	/**
	 * Gets channel_urls
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_channel_urls() {
		return $this->container['channel_urls'];
	}

	/**
	 * Sets channel_urls
	 * @param PTV_Localized_List_Item[] $channel_urls List of localized urls. (Max.Length: 500).
	 * @return $this
	 */
	public function set_channel_urls( $channel_urls ) {
		$this->container['channel_urls'] = $channel_urls;

		return $this;
	}

	/**
	 * Gets attachments
	 * @return PTV_Attachment[]
	 */
	public function get_attachments() {
		return $this->container['attachments'];
	}

	/**
	 * Sets attachments
	 * @param PTV_Attachment[] $attachments List of attachments.
	 * @return $this
	 */
	public function set_attachments( $attachments ) {
		$this->container['attachments'] = $attachments;

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
	 * Gets publishing_status
	 * @return string
	 */
	public function get_publishing_status() {
		return $this->container['publishing_status'];
	}

	/**
	 * Sets publishing_status
	 * @param string $publishing_status Service channel publishing status. Values: Draft or Published.
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
	 * Gets services
	 * @return string[]
	 */
	public function get_services() {
		return $this->container['services'];
	}

	/**
	 * Sets services
	 * @param string[] $services List of related services (GUID).
	 * @return $this
	 */
	public function set_services( $services ) {
		$this->container['services'] = $services;

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



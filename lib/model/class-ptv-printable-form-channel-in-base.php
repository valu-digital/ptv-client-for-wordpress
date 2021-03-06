<?php
/**
 * PTV_Printable_Form_Channel_In_Base
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
 * PTV_Printable_Form_Channel_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of printable form channel for IN api - base
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Printable_Form_Channel_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Printable_Form_Channel_In_Base';

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
		'delete_delivery_address' => 'bool',
		'support_emails' => 'PTV_Language_Item[]',
		'delete_all_channel_urls' => 'bool',
		'delete_all_attachments' => 'bool',
		'delete_all_form_identifiers' => 'bool',
		'delete_all_form_receivers' => 'bool',
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
		'area_type' => 'areaType',
		'areas' => 'areas',
		'form_identifier' => 'formIdentifier',
		'form_receiver' => 'formReceiver',
		'delivery_address' => 'deliveryAddress',
		'channel_urls' => 'channelUrls',
		'attachments' => 'attachments',
		'support_phones' => 'supportPhones',
		'delete_delivery_address' => 'deleteDeliveryAddress',
		'support_emails' => 'supportEmails',
		'delete_all_channel_urls' => 'deleteAllChannelUrls',
		'delete_all_attachments' => 'deleteAllAttachments',
		'delete_all_form_identifiers' => 'deleteAllFormIdentifiers',
		'delete_all_form_receivers' => 'deleteAllFormReceivers',
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
		'area_type' => 'set_area_type',
		'areas' => 'set_areas',
		'form_identifier' => 'set_form_identifier',
		'form_receiver' => 'set_form_receiver',
		'delivery_address' => 'set_delivery_address',
		'channel_urls' => 'set_channel_urls',
		'attachments' => 'set_attachments',
		'support_phones' => 'set_support_phones',
		'delete_delivery_address' => 'set_delete_delivery_address',
		'support_emails' => 'set_support_emails',
		'delete_all_channel_urls' => 'set_delete_all_channel_urls',
		'delete_all_attachments' => 'set_delete_all_attachments',
		'delete_all_form_identifiers' => 'set_delete_all_form_identifiers',
		'delete_all_form_receivers' => 'set_delete_all_form_receivers',
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
		'area_type' => 'get_area_type',
		'areas' => 'get_areas',
		'form_identifier' => 'get_form_identifier',
		'form_receiver' => 'get_form_receiver',
		'delivery_address' => 'get_delivery_address',
		'channel_urls' => 'get_channel_urls',
		'attachments' => 'get_attachments',
		'support_phones' => 'get_support_phones',
		'delete_delivery_address' => 'get_delete_delivery_address',
		'support_emails' => 'get_support_emails',
		'delete_all_channel_urls' => 'get_delete_all_channel_urls',
		'delete_all_attachments' => 'get_delete_all_attachments',
		'delete_all_form_identifiers' => 'get_delete_all_form_identifiers',
		'delete_all_form_receivers' => 'get_delete_all_form_receivers',
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
		$this->container['area_type'] = isset( $data['area_type'] ) ? $data['area_type'] : null;
		$this->container['areas'] = isset( $data['areas'] ) ? $data['areas'] : null;
		$this->container['form_identifier'] = isset( $data['form_identifier'] ) ? $data['form_identifier'] : null;
		$this->container['form_receiver'] = isset( $data['form_receiver'] ) ? $data['form_receiver'] : null;
		$this->container['delivery_address'] = isset( $data['delivery_address'] ) ? $data['delivery_address'] : null;
		$this->container['channel_urls'] = isset( $data['channel_urls'] ) ? $data['channel_urls'] : null;
		$this->container['attachments'] = isset( $data['attachments'] ) ? $data['attachments'] : null;
		$this->container['support_phones'] = isset( $data['support_phones'] ) ? $data['support_phones'] : null;
		$this->container['delete_delivery_address'] = isset( $data['delete_delivery_address'] ) ? $data['delete_delivery_address'] : null;
		$this->container['support_emails'] = isset( $data['support_emails'] ) ? $data['support_emails'] : null;
		$this->container['delete_all_channel_urls'] = isset( $data['delete_all_channel_urls'] ) ? $data['delete_all_channel_urls'] : null;
		$this->container['delete_all_attachments'] = isset( $data['delete_all_attachments'] ) ? $data['delete_all_attachments'] : null;
		$this->container['delete_all_form_identifiers'] = isset( $data['delete_all_form_identifiers'] ) ? $data['delete_all_form_identifiers'] : null;
		$this->container['delete_all_form_receivers'] = isset( $data['delete_all_form_receivers'] ) ? $data['delete_all_form_receivers'] : null;
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
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Printable_Form_Channel_In_Base., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
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
	 * @param PTV_Localized_List_Item[] $channel_urls List of localized channel urls. (Max.Length: 500).
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
	 * Gets delete_delivery_address
	 * @return bool
	 */
	public function get_delete_delivery_address() {
		return $this->container['delete_delivery_address'];
	}

	/**
	 * Sets delete_delivery_address
	 * @param bool $delete_delivery_address Set to true to delete all existing delivery address for the service channel. The DeliveryAddress should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_delivery_address( $delete_delivery_address ) {
		$this->container['delete_delivery_address'] = $delete_delivery_address;

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
	 * Gets delete_all_channel_urls
	 * @return bool
	 */
	public function get_delete_all_channel_urls() {
		return $this->container['delete_all_channel_urls'];
	}

	/**
	 * Sets delete_all_channel_urls
	 * @param bool $delete_all_channel_urls Set to true to delete all existing channel urls for the service channel. The ChannelUrls collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_channel_urls( $delete_all_channel_urls ) {
		$this->container['delete_all_channel_urls'] = $delete_all_channel_urls;

		return $this;
	}

	/**
	 * Gets delete_all_attachments
	 * @return bool
	 */
	public function get_delete_all_attachments() {
		return $this->container['delete_all_attachments'];
	}

	/**
	 * Sets delete_all_attachments
	 * @param bool $delete_all_attachments Set to true to delete all existing attachments for the service channel. The Attachments collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_attachments( $delete_all_attachments ) {
		$this->container['delete_all_attachments'] = $delete_all_attachments;

		return $this;
	}

	/**
	 * Gets delete_all_form_identifiers
	 * @return bool
	 */
	public function get_delete_all_form_identifiers() {
		return $this->container['delete_all_form_identifiers'];
	}

	/**
	 * Sets delete_all_form_identifiers
	 * @param bool $delete_all_form_identifiers Set to true to delete all existing form identifiers for the service channel. The form identifiers collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_form_identifiers( $delete_all_form_identifiers ) {
		$this->container['delete_all_form_identifiers'] = $delete_all_form_identifiers;

		return $this;
	}

	/**
	 * Gets delete_all_form_receivers
	 * @return bool
	 */
	public function get_delete_all_form_receivers() {
		return $this->container['delete_all_form_receivers'];
	}

	/**
	 * Sets delete_all_form_receivers
	 * @param bool $delete_all_form_receivers Set to true to delete all existing form receivers for the service channel. The form receivers collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_form_receivers( $delete_all_form_receivers ) {
		$this->container['delete_all_form_receivers'] = $delete_all_form_receivers;

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



<?php
/**
 * PTV_Printable_Form_Channel
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
 * PTV_Printable_Form_Channel Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of printable form channel
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Printable_Form_Channel implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Printable_Form_Channel';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'id' => 'string',
		'service_channel_type' => 'string',
		'organization_id' => 'string',
		'service_channel_names' => 'PTV_Localized_List_Item[]',
		'service_channel_descriptions' => 'PTV_Localized_List_Item[]',
		'area_type' => 'string',
		'areas' => 'PTV_Area[]',
		'form_identifier' => 'PTV_Language_Item[]',
		'form_receiver' => 'PTV_Language_Item[]',
		'delivery_address' => 'PTV_Address_With_Coordinates',
		'channel_urls' => 'PTV_Localized_List_Item[]',
		'attachments' => 'PTV_Attachment_With_Type[]',
		'support_phones' => 'PTV_Phone[]',
		'support_emails' => 'PTV_Language_Item[]',
		'languages' => 'string[]',
		'web_pages' => 'PTV_Web_Page_With_Order_Number[]',
		'service_hours' => 'PTV_Service_Hour[]',
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
		'id' => 'id',
		'service_channel_type' => 'serviceChannelType',
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
		'languages' => 'languages',
		'web_pages' => 'webPages',
		'service_hours' => 'serviceHours',
		'publishing_status' => 'publishingStatus',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'id' => 'set_id',
		'service_channel_type' => 'set_service_channel_type',
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
		'languages' => 'set_languages',
		'web_pages' => 'set_web_pages',
		'service_hours' => 'set_service_hours',
		'publishing_status' => 'set_publishing_status',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'id' => 'get_id',
		'service_channel_type' => 'get_service_channel_type',
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
		'languages' => 'get_languages',
		'web_pages' => 'get_web_pages',
		'service_hours' => 'get_service_hours',
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
		$this->container['id'] = isset( $data['id'] ) ? $data['id'] : null;
		$this->container['service_channel_type'] = isset( $data['service_channel_type'] ) ? $data['service_channel_type'] : null;
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
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
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
	 * Gets id
	 * @return string
	 */
	public function get_id() {
		return $this->container['id'];
	}

	/**
	 * Sets id
	 * @param string $id PTV identifier for the service channel.
	 * @return $this
	 */
	public function set_id( $id ) {
		$this->container['id'] = $id;

		return $this;
	}

	/**
	 * Gets service_channel_type
	 * @return string
	 */
	public function get_service_channel_type() {
		return $this->container['service_channel_type'];
	}

	/**
	 * Sets service_channel_type
	 * @param string $service_channel_type Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation.
	 * @return $this
	 */
	public function set_service_channel_type( $service_channel_type ) {
		$this->container['service_channel_type'] = $service_channel_type;

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
	 * @param string $organization_id PTV organization identifier responsible for the channel.
	 * @return $this
	 */
	public function set_organization_id( $organization_id ) {
		$this->container['organization_id'] = $organization_id;

		return $this;
	}

	/**
	 * Gets service_channel_names
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_service_channel_names() {
		return $this->container['service_channel_names'];
	}

	/**
	 * Sets service_channel_names
	 * @param PTV_Localized_List_Item[] $service_channel_names Localized list of service channel names.
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
	 * @return PTV_Area[]
	 */
	public function get_areas() {
		return $this->container['areas'];
	}

	/**
	 * Sets areas
	 * @param PTV_Area[] $areas List of service channel areas.
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
	 * @param PTV_Language_Item[] $form_identifier List of localized form identifier. One per language.
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
	 * @param PTV_Language_Item[] $form_receiver List of localized form receiver. One per language.
	 * @return $this
	 */
	public function set_form_receiver( $form_receiver ) {
		$this->container['form_receiver'] = $form_receiver;

		return $this;
	}

	/**
	 * Gets delivery_address
	 * @return PTV_Address_With_Coordinates
	 */
	public function get_delivery_address() {
		return $this->container['delivery_address'];
	}

	/**
	 * Sets delivery_address
	 * @param PTV_Address_With_Coordinates $delivery_address Form delivery address.
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
	 * @param PTV_Localized_List_Item[] $channel_urls List of localized channel urls.
	 * @return $this
	 */
	public function set_channel_urls( $channel_urls ) {
		$this->container['channel_urls'] = $channel_urls;

		return $this;
	}

	/**
	 * Gets attachments
	 * @return PTV_Attachment_With_Type[]
	 */
	public function get_attachments() {
		return $this->container['attachments'];
	}

	/**
	 * Sets attachments
	 * @param PTV_Attachment_With_Type[] $attachments List of attachments.
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
	 * Gets web_pages
	 * @return PTV_Web_Page_With_Order_Number[]
	 */
	public function get_web_pages() {
		return $this->container['web_pages'];
	}

	/**
	 * Sets web_pages
	 * @param PTV_Web_Page_With_Order_Number[] $web_pages List of service channel web pages.
	 * @return $this
	 */
	public function set_web_pages( $web_pages ) {
		$this->container['web_pages'] = $web_pages;

		return $this;
	}

	/**
	 * Gets service_hours
	 * @return PTV_Service_Hour[]
	 */
	public function get_service_hours() {
		return $this->container['service_hours'];
	}

	/**
	 * Sets service_hours
	 * @param PTV_Service_Hour[] $service_hours List of service channel service hours.
	 * @return $this
	 */
	public function set_service_hours( $service_hours ) {
		$this->container['service_hours'] = $service_hours;

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
	 * @param string $publishing_status Publishing status. Possible values are: Draft, Published, Deleted or Modified.
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



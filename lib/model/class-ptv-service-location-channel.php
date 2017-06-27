<?php
/**
 * PTV_Service_Location_Channel
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
 * PTV_Service_Location_Channel Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of service location channel
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Location_Channel implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Location_Channel';

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
		'phone_numbers' => 'PTV_Phone_With_Type[]',
		'emails' => 'PTV_Language_Item[]',
		'languages' => 'string[]',
		'phone_service_charge' => 'bool',
		'web_pages' => 'PTV_Web_Page_With_Order_Number[]',
		'addresses' => 'PTV_Address_With_Type_And_Coordinates[]',
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
		'phone_numbers' => 'phoneNumbers',
		'emails' => 'emails',
		'languages' => 'languages',
		'phone_service_charge' => 'phoneServiceCharge',
		'web_pages' => 'webPages',
		'addresses' => 'addresses',
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
		'phone_numbers' => 'set_phone_numbers',
		'emails' => 'set_emails',
		'languages' => 'set_languages',
		'phone_service_charge' => 'set_phone_service_charge',
		'web_pages' => 'set_web_pages',
		'addresses' => 'set_addresses',
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
		'phone_numbers' => 'get_phone_numbers',
		'emails' => 'get_emails',
		'languages' => 'get_languages',
		'phone_service_charge' => 'get_phone_service_charge',
		'web_pages' => 'get_web_pages',
		'addresses' => 'get_addresses',
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
		$this->container['phone_numbers'] = isset( $data['phone_numbers'] ) ? $data['phone_numbers'] : null;
		$this->container['emails'] = isset( $data['emails'] ) ? $data['emails'] : null;
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['phone_service_charge'] = isset( $data['phone_service_charge'] ) ? $data['phone_service_charge'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
		$this->container['addresses'] = isset( $data['addresses'] ) ? $data['addresses'] : null;
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
	 * Gets phone_numbers
	 * @return PTV_Phone_With_Type[]
	 */
	public function get_phone_numbers() {
		return $this->container['phone_numbers'];
	}

	/**
	 * Sets phone_numbers
	 * @param PTV_Phone_With_Type[] $phone_numbers List of phone numbers for the service channel. Includes also fax numbers.
	 * @return $this
	 */
	public function set_phone_numbers( $phone_numbers ) {
		$this->container['phone_numbers'] = $phone_numbers;

		return $this;
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
	 * @param PTV_Language_Item[] $emails List email addresses for the service channel. (Max.Length: 100).
	 * @return $this
	 */
	public function set_emails( $emails ) {
		$this->container['emails'] = $emails;

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
	 * Gets phone_service_charge
	 * @return bool
	 */
	public function get_phone_service_charge() {
		return $this->container['phone_service_charge'];
	}

	/**
	 * Sets phone_service_charge
	 * @param bool $phone_service_charge Is the phone service charged for. This property is not used in the API anymore. Do not use.
	 * @return $this
	 */
	public function set_phone_service_charge( $phone_service_charge ) {
		$this->container['phone_service_charge'] = $phone_service_charge;

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
	 * Gets addresses
	 * @return PTV_Address_With_Type_And_Coordinates[]
	 */
	public function get_addresses() {
		return $this->container['addresses'];
	}

	/**
	 * Sets addresses
	 * @param PTV_Address_With_Type_And_Coordinates[] $addresses List of service location addresses.
	 * @return $this
	 */
	public function set_addresses( $addresses ) {
		$this->container['addresses'] = $addresses;

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


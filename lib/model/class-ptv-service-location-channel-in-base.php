<?php
/**
 * PTV_Service_Location_Channel_In_Base
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
 * PTV_Service_Location_Channel_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of service location channel for IN api - base
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_Location_Channel_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_Location_Channel_In_Base';

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
		'emails' => 'PTV_Language_Item[]',
		'fax_numbers' => 'PTV_Phone_Simple[]',
		'phone_numbers' => 'PTV_Phone[]',
		'languages' => 'string[]',
		'web_pages' => 'PTV_Web_Page_With_Order_Number[]',
		'addresses' => 'PTV_Address_With_Moving_In[]',
		'service_hours' => 'PTV_Service_Hour[]',
		'delete_all_emails' => 'bool',
		'delete_all_phone_numbers' => 'bool',
		'delete_all_fax_numbers' => 'bool',
		'publishing_status' => 'string',
		'is_visible_for_all' => 'bool',
		'delete_all_web_pages' => 'bool',
		'delete_all_service_hours' => 'bool',
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
		'emails' => 'emails',
		'fax_numbers' => 'faxNumbers',
		'phone_numbers' => 'phoneNumbers',
		'languages' => 'languages',
		'web_pages' => 'webPages',
		'addresses' => 'addresses',
		'service_hours' => 'serviceHours',
		'delete_all_emails' => 'deleteAllEmails',
		'delete_all_phone_numbers' => 'deleteAllPhoneNumbers',
		'delete_all_fax_numbers' => 'deleteAllFaxNumbers',
		'publishing_status' => 'publishingStatus',
		'is_visible_for_all' => 'isVisibleForAll',
		'delete_all_web_pages' => 'deleteAllWebPages',
		'delete_all_service_hours' => 'deleteAllServiceHours',
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
		'emails' => 'set_emails',
		'fax_numbers' => 'set_fax_numbers',
		'phone_numbers' => 'set_phone_numbers',
		'languages' => 'set_languages',
		'web_pages' => 'set_web_pages',
		'addresses' => 'set_addresses',
		'service_hours' => 'set_service_hours',
		'delete_all_emails' => 'set_delete_all_emails',
		'delete_all_phone_numbers' => 'set_delete_all_phone_numbers',
		'delete_all_fax_numbers' => 'set_delete_all_fax_numbers',
		'publishing_status' => 'set_publishing_status',
		'is_visible_for_all' => 'set_is_visible_for_all',
		'delete_all_web_pages' => 'set_delete_all_web_pages',
		'delete_all_service_hours' => 'set_delete_all_service_hours',
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
		'emails' => 'get_emails',
		'fax_numbers' => 'get_fax_numbers',
		'phone_numbers' => 'get_phone_numbers',
		'languages' => 'get_languages',
		'web_pages' => 'get_web_pages',
		'addresses' => 'get_addresses',
		'service_hours' => 'get_service_hours',
		'delete_all_emails' => 'get_delete_all_emails',
		'delete_all_phone_numbers' => 'get_delete_all_phone_numbers',
		'delete_all_fax_numbers' => 'get_delete_all_fax_numbers',
		'publishing_status' => 'get_publishing_status',
		'is_visible_for_all' => 'get_is_visible_for_all',
		'delete_all_web_pages' => 'get_delete_all_web_pages',
		'delete_all_service_hours' => 'get_delete_all_service_hours',
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
		$this->container['emails'] = isset( $data['emails'] ) ? $data['emails'] : null;
		$this->container['fax_numbers'] = isset( $data['fax_numbers'] ) ? $data['fax_numbers'] : null;
		$this->container['phone_numbers'] = isset( $data['phone_numbers'] ) ? $data['phone_numbers'] : null;
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
		$this->container['addresses'] = isset( $data['addresses'] ) ? $data['addresses'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['delete_all_emails'] = isset( $data['delete_all_emails'] ) ? $data['delete_all_emails'] : null;
		$this->container['delete_all_phone_numbers'] = isset( $data['delete_all_phone_numbers'] ) ? $data['delete_all_phone_numbers'] : null;
		$this->container['delete_all_fax_numbers'] = isset( $data['delete_all_fax_numbers'] ) ? $data['delete_all_fax_numbers'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['is_visible_for_all'] = isset( $data['is_visible_for_all'] ) ? $data['is_visible_for_all'] : null;
		$this->container['delete_all_web_pages'] = isset( $data['delete_all_web_pages'] ) ? $data['delete_all_web_pages'] : null;
		$this->container['delete_all_service_hours'] = isset( $data['delete_all_service_hours'] ) ? $data['delete_all_service_hours'] : null;
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
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Service_Location_Channel_In_Base., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
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
	 * Gets fax_numbers
	 * @return PTV_Phone_Simple[]
	 */
	public function get_fax_numbers() {
		return $this->container['fax_numbers'];
	}

	/**
	 * Sets fax_numbers
	 * @param PTV_Phone_Simple[] $fax_numbers Service location contact fax numbers.
	 * @return $this
	 */
	public function set_fax_numbers( $fax_numbers ) {
		$this->container['fax_numbers'] = $fax_numbers;

		return $this;
	}

	/**
	 * Gets phone_numbers
	 * @return PTV_Phone[]
	 */
	public function get_phone_numbers() {
		return $this->container['phone_numbers'];
	}

	/**
	 * Sets phone_numbers
	 * @param PTV_Phone[] $phone_numbers List of phone numbers for the service channel. Includes also fax numbers.
	 * @return $this
	 */
	public function set_phone_numbers( $phone_numbers ) {
		$this->container['phone_numbers'] = $phone_numbers;

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
	 * Gets addresses
	 * @return PTV_Address_With_Moving_In[]
	 */
	public function get_addresses() {
		return $this->container['addresses'];
	}

	/**
	 * Sets addresses
	 * @param PTV_Address_With_Moving_In[] $addresses List of service location addresses.
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
	 * Gets delete_all_emails
	 * @return bool
	 */
	public function get_delete_all_emails() {
		return $this->container['delete_all_emails'];
	}

	/**
	 * Sets delete_all_emails
	 * @param bool $delete_all_emails Set to true to delete emails. The email property should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_emails( $delete_all_emails ) {
		$this->container['delete_all_emails'] = $delete_all_emails;

		return $this;
	}

	/**
	 * Gets delete_all_phone_numbers
	 * @return bool
	 */
	public function get_delete_all_phone_numbers() {
		return $this->container['delete_all_phone_numbers'];
	}

	/**
	 * Sets delete_all_phone_numbers
	 * @param bool $delete_all_phone_numbers Set to true to delete phone number. The prohone property should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_phone_numbers( $delete_all_phone_numbers ) {
		$this->container['delete_all_phone_numbers'] = $delete_all_phone_numbers;

		return $this;
	}

	/**
	 * Gets delete_all_fax_numbers
	 * @return bool
	 */
	public function get_delete_all_fax_numbers() {
		return $this->container['delete_all_fax_numbers'];
	}

	/**
	 * Sets delete_all_fax_numbers
	 * @param bool $delete_all_fax_numbers Set to true to delete fax number. The fax property should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_fax_numbers( $delete_all_fax_numbers ) {
		$this->container['delete_all_fax_numbers'] = $delete_all_fax_numbers;

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
	 * Gets delete_all_web_pages
	 * @return bool
	 */
	public function get_delete_all_web_pages() {
		return $this->container['delete_all_web_pages'];
	}

	/**
	 * Sets delete_all_web_pages
	 * @param bool $delete_all_web_pages Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_web_pages( $delete_all_web_pages ) {
		$this->container['delete_all_web_pages'] = $delete_all_web_pages;

		return $this;
	}

	/**
	 * Gets delete_all_service_hours
	 * @return bool
	 */
	public function get_delete_all_service_hours() {
		return $this->container['delete_all_service_hours'];
	}

	/**
	 * Sets delete_all_service_hours
	 * @param bool $delete_all_service_hours Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true.
	 * @return $this
	 */
	public function set_delete_all_service_hours( $delete_all_service_hours ) {
		$this->container['delete_all_service_hours'] = $delete_all_service_hours;

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



<?php
/**
 * PTV_Organization
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
 * PTV_Organization Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of organization
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Organization implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Organization';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'id' => 'string',
		'source_id' => 'string',
		'oid' => 'string',
		'parent_organization' => 'string',
		'organization_type' => 'string',
		'municipality' => 'PTV_Municipality',
		'business_code' => 'string',
		'business_name' => 'string',
		'organization_names' => 'PTV_Localized_List_Item[]',
		'display_name_type' => 'PTV_Name_Type_By_Language[]',
		'area_type' => 'string',
		'areas' => 'PTV_Area[]',
		'organization_descriptions' => 'PTV_Localized_List_Item[]',
		'email_addresses' => 'PTV_Email[]',
		'phone_numbers' => 'PTV_Phone[]',
		'web_pages' => 'PTV_Web_Page_With_Order_Number[]',
		'addresses' => 'PTV_Address[]',
		'electronic_invoicings' => 'PTV_Organization_Einvoicing[]',
		'publishing_status' => 'string',
		'services' => 'PTV_Organization_Service[]',
		'modified' => '\DateTime',
		'sub_organizations' => 'PTV_Item[]',
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
		'source_id' => 'sourceId',
		'oid' => 'oid',
		'parent_organization' => 'parentOrganization',
		'organization_type' => 'organizationType',
		'municipality' => 'municipality',
		'business_code' => 'businessCode',
		'business_name' => 'businessName',
		'organization_names' => 'organizationNames',
		'display_name_type' => 'displayNameType',
		'area_type' => 'areaType',
		'areas' => 'areas',
		'organization_descriptions' => 'organizationDescriptions',
		'email_addresses' => 'emailAddresses',
		'phone_numbers' => 'phoneNumbers',
		'web_pages' => 'webPages',
		'addresses' => 'addresses',
		'electronic_invoicings' => 'electronicInvoicings',
		'publishing_status' => 'publishingStatus',
		'services' => 'services',
		'modified' => 'modified',
		'sub_organizations' => 'subOrganizations',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'id' => 'set_id',
		'source_id' => 'set_source_id',
		'oid' => 'set_oid',
		'parent_organization' => 'set_parent_organization',
		'organization_type' => 'set_organization_type',
		'municipality' => 'set_municipality',
		'business_code' => 'set_business_code',
		'business_name' => 'set_business_name',
		'organization_names' => 'set_organization_names',
		'display_name_type' => 'set_display_name_type',
		'area_type' => 'set_area_type',
		'areas' => 'set_areas',
		'organization_descriptions' => 'set_organization_descriptions',
		'email_addresses' => 'set_email_addresses',
		'phone_numbers' => 'set_phone_numbers',
		'web_pages' => 'set_web_pages',
		'addresses' => 'set_addresses',
		'electronic_invoicings' => 'set_electronic_invoicings',
		'publishing_status' => 'set_publishing_status',
		'services' => 'set_services',
		'modified' => 'set_modified',
		'sub_organizations' => 'set_sub_organizations',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'id' => 'get_id',
		'source_id' => 'get_source_id',
		'oid' => 'get_oid',
		'parent_organization' => 'get_parent_organization',
		'organization_type' => 'get_organization_type',
		'municipality' => 'get_municipality',
		'business_code' => 'get_business_code',
		'business_name' => 'get_business_name',
		'organization_names' => 'get_organization_names',
		'display_name_type' => 'get_display_name_type',
		'area_type' => 'get_area_type',
		'areas' => 'get_areas',
		'organization_descriptions' => 'get_organization_descriptions',
		'email_addresses' => 'get_email_addresses',
		'phone_numbers' => 'get_phone_numbers',
		'web_pages' => 'get_web_pages',
		'addresses' => 'get_addresses',
		'electronic_invoicings' => 'get_electronic_invoicings',
		'publishing_status' => 'get_publishing_status',
		'services' => 'get_services',
		'modified' => 'get_modified',
		'sub_organizations' => 'get_sub_organizations',
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
		$this->container['source_id'] = isset( $data['source_id'] ) ? $data['source_id'] : null;
		$this->container['oid'] = isset( $data['oid'] ) ? $data['oid'] : null;
		$this->container['parent_organization'] = isset( $data['parent_organization'] ) ? $data['parent_organization'] : null;
		$this->container['organization_type'] = isset( $data['organization_type'] ) ? $data['organization_type'] : null;
		$this->container['municipality'] = isset( $data['municipality'] ) ? $data['municipality'] : null;
		$this->container['business_code'] = isset( $data['business_code'] ) ? $data['business_code'] : null;
		$this->container['business_name'] = isset( $data['business_name'] ) ? $data['business_name'] : null;
		$this->container['organization_names'] = isset( $data['organization_names'] ) ? $data['organization_names'] : null;
		$this->container['display_name_type'] = isset( $data['display_name_type'] ) ? $data['display_name_type'] : null;
		$this->container['area_type'] = isset( $data['area_type'] ) ? $data['area_type'] : null;
		$this->container['areas'] = isset( $data['areas'] ) ? $data['areas'] : null;
		$this->container['organization_descriptions'] = isset( $data['organization_descriptions'] ) ? $data['organization_descriptions'] : null;
		$this->container['email_addresses'] = isset( $data['email_addresses'] ) ? $data['email_addresses'] : null;
		$this->container['phone_numbers'] = isset( $data['phone_numbers'] ) ? $data['phone_numbers'] : null;
		$this->container['web_pages'] = isset( $data['web_pages'] ) ? $data['web_pages'] : null;
		$this->container['addresses'] = isset( $data['addresses'] ) ? $data['addresses'] : null;
		$this->container['electronic_invoicings'] = isset( $data['electronic_invoicings'] ) ? $data['electronic_invoicings'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['services'] = isset( $data['services'] ) ? $data['services'] : null;
		$this->container['modified'] = isset( $data['modified'] ) ? $data['modified'] : null;
		$this->container['sub_organizations'] = isset( $data['sub_organizations'] ) ? $data['sub_organizations'] : null;
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

		if ( ! is_null( $this->container['oid'] ) && ! preg_match( '/^[A-Za-z0-9.-]*$/', $this->container['oid'] ) ) {
			$invalid_properties[] = "invalid value for 'oid', must be conform to the pattern /^[A-Za-z0-9.-]*$/.";
		}

		if ( ! is_null( $this->container['business_code'] ) && ! preg_match( '/^[0-9]{7}-[0-9]{1}$/', $this->container['business_code'] ) ) {
			$invalid_properties[] = "invalid value for 'business_code', must be conform to the pattern /^[0-9]{7}-[0-9]{1}$/.";
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
		if ( ! preg_match( '/^[A-Za-z0-9.-]*$/', $this->container['oid'] ) ) {
			return false;
		}
		if ( ! preg_match( '/^[0-9]{7}-[0-9]{1}$/', $this->container['business_code'] ) ) {
			return false;
		}
		if ( null === $this->container['publishing_status'] ) {
			return false;
		}
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
	 * @param string $id Entity identifier.
	 * @return $this
	 */
	public function set_id( $id ) {
		$this->container['id'] = $id;

		return $this;
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
	 * @param string $source_id Organization external system identifier. User needs to be logged in to be able to get/set value.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Organization., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
		}

		$this->container['source_id'] = $source_id;

		return $this;
	}

	/**
	 * Gets oid
	 * @return string
	 */
	public function get_oid() {
		return $this->container['oid'];
	}

	/**
	 * Sets oid
	 * @param string $oid Organization OID. - must match the regex @\"^[A-Za-z0-9.-]*$\"
	 * @return $this
	 */
	public function set_oid( $oid ) {

		if ( ! is_null( $oid ) && ( ! preg_match( '/^[A-Za-z0-9.-]*$/', $oid ) ) ) {
			throw new InvalidArgumentException( "invalid value for $oid when calling PTV_Organization., must conform to the pattern /^[A-Za-z0-9.-]*$/." );
		}

		$this->container['oid'] = $oid;

		return $this;
	}

	/**
	 * Gets parent_organization
	 * @return string
	 */
	public function get_parent_organization() {
		return $this->container['parent_organization'];
	}

	/**
	 * Sets parent_organization
	 * @param string $parent_organization Organizations parent organization identifier if exists.
	 * @return $this
	 */
	public function set_parent_organization( $parent_organization ) {
		$this->container['parent_organization'] = $parent_organization;

		return $this;
	}

	/**
	 * Gets organization_type
	 * @return string
	 */
	public function get_organization_type() {
		return $this->container['organization_type'];
	}

	/**
	 * Sets organization_type
	 * @param string $organization_type Organization type (State, Municipality, RegionalOrganization, Organization, Company).
	 * @return $this
	 */
	public function set_organization_type( $organization_type ) {
		$this->container['organization_type'] = $organization_type;

		return $this;
	}

	/**
	 * Gets municipality
	 * @return PTV_Municipality
	 */
	public function get_municipality() {
		return $this->container['municipality'];
	}

	/**
	 * Sets municipality
	 * @param PTV_Municipality $municipality Municipality including municipality code and a localized list of municipality names.
	 * @return $this
	 */
	public function set_municipality( $municipality ) {
		$this->container['municipality'] = $municipality;

		return $this;
	}

	/**
	 * Gets business_code
	 * @return string
	 */
	public function get_business_code() {
		return $this->container['business_code'];
	}

	/**
	 * Sets business_code
	 * @param string $business_code Organization business code (Y-tunnus).
	 * @return $this
	 */
	public function set_business_code( $business_code ) {

		if ( ! is_null( $business_code ) && ( ! preg_match( '/^[0-9]{7}-[0-9]{1}$/', $business_code ) ) ) {
			throw new InvalidArgumentException( "invalid value for $business_code when calling PTV_Organization., must conform to the pattern /^[0-9]{7}-[0-9]{1}$/." );
		}

		$this->container['business_code'] = $business_code;

		return $this;
	}

	/**
	 * Gets business_name
	 * @return string
	 */
	public function get_business_name() {
		return $this->container['business_name'];
	}

	/**
	 * Sets business_name
	 * @param string $business_name Organization business name (name used for business code).
	 * @return $this
	 */
	public function set_business_name( $business_name ) {
		$this->container['business_name'] = $business_name;

		return $this;
	}

	/**
	 * Gets organization_names
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_organization_names() {
		return $this->container['organization_names'];
	}

	/**
	 * Sets organization_names
	 * @param PTV_Localized_List_Item[] $organization_names List of organization names. (Max.Length: 100).
	 * @return $this
	 */
	public function set_organization_names( $organization_names ) {
		$this->container['organization_names'] = $organization_names;

		return $this;
	}

	/**
	 * Gets display_name_type
	 * @return PTV_Name_Type_By_Language[]
	 */
	public function get_display_name_type() {
		return $this->container['display_name_type'];
	}

	/**
	 * Sets display_name_type
	 * @param PTV_Name_Type_By_Language[] $display_name_type List of Display name types (Name or AlternateName) for each language version of OrganizationNames.
	 * @return $this
	 */
	public function set_display_name_type( $display_name_type ) {
		$this->container['display_name_type'] = $display_name_type;

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
	 * @param PTV_Area[] $areas List of organization areas.
	 * @return $this
	 */
	public function set_areas( $areas ) {
		$this->container['areas'] = $areas;

		return $this;
	}

	/**
	 * Gets organization_descriptions
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_organization_descriptions() {
		return $this->container['organization_descriptions'];
	}

	/**
	 * Sets organization_descriptions
	 * @param PTV_Localized_List_Item[] $organization_descriptions Localized list of organization descriptions. (Max.Length: 2500 Description). (Max.Length: 150 ShortDescription).
	 * @return $this
	 */
	public function set_organization_descriptions( $organization_descriptions ) {
		$this->container['organization_descriptions'] = $organization_descriptions;

		return $this;
	}

	/**
	 * Gets email_addresses
	 * @return PTV_Email[]
	 */
	public function get_email_addresses() {
		return $this->container['email_addresses'];
	}

	/**
	 * Sets email_addresses
	 * @param PTV_Email[] $email_addresses List of organizations email addresses.
	 * @return $this
	 */
	public function set_email_addresses( $email_addresses ) {
		$this->container['email_addresses'] = $email_addresses;

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
	 * @param PTV_Phone[] $phone_numbers List of organizations phone numbers.
	 * @return $this
	 */
	public function set_phone_numbers( $phone_numbers ) {
		$this->container['phone_numbers'] = $phone_numbers;

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
	 * @param PTV_Web_Page_With_Order_Number[] $web_pages List of organizations web pages.
	 * @return $this
	 */
	public function set_web_pages( $web_pages ) {
		$this->container['web_pages'] = $web_pages;

		return $this;
	}

	/**
	 * Gets addresses
	 * @return PTV_Address[]
	 */
	public function get_addresses() {
		return $this->container['addresses'];
	}

	/**
	 * Sets addresses
	 * @param PTV_Address[] $addresses List of organizations addresses.
	 * @return $this
	 */
	public function set_addresses( $addresses ) {
		$this->container['addresses'] = $addresses;

		return $this;
	}

	/**
	 * Gets electronic_invoicings
	 * @return PTV_Organization_Einvoicing[]
	 */
	public function get_electronic_invoicings() {
		return $this->container['electronic_invoicings'];
	}

	/**
	 * Sets electronic_invoicings
	 * @param PTV_Organization_Einvoicing[] $electronic_invoicings List of organizations electronic invoicing information.
	 * @return $this
	 */
	public function set_electronic_invoicings( $electronic_invoicings ) {
		$this->container['electronic_invoicings'] = $electronic_invoicings;

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
	 * @param string $publishing_status Publishing status (Draft, Published, Deleted or Modified).
	 * @return $this
	 */
	public function set_publishing_status( $publishing_status ) {
		$this->container['publishing_status'] = $publishing_status;

		return $this;
	}

	/**
	 * Gets services
	 * @return PTV_Organization_Service[]
	 */
	public function get_services() {
		return $this->container['services'];
	}

	/**
	 * Sets services
	 * @param PTV_Organization_Service[] $services List of organizations services.
	 * @return $this
	 */
	public function set_services( $services ) {
		$this->container['services'] = $services;

		return $this;
	}

	/**
	 * Gets modified
	 * @return \DateTime
	 */
	public function get_modified() {
		return $this->container['modified'];
	}

	/**
	 * Sets modified
	 * @param \DateTime $modified Date when item was modified/created (UTC).
	 * @return $this
	 */
	public function set_modified( $modified ) {
		$this->container['modified'] = $modified;

		return $this;
	}

	/**
	 * Gets sub_organizations
	 * @return PTV_Item[]
	 */
	public function get_sub_organizations() {
		return $this->container['sub_organizations'];
	}

	/**
	 * Sets sub_organizations
	 * @param PTV_Item[] $sub_organizations The sub organizations
	 * @return $this
	 */
	public function set_sub_organizations( $sub_organizations ) {
		$this->container['sub_organizations'] = $sub_organizations;

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



<?php
/**
 * PTV_EChannel_Channel_In
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
 * PTV_EChannel_Channel_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V5 - View Model of electronic channel for IN api
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_EChannel_Channel_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_EChannel_Channel_In';

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
		'signature_quantity' => 'string',
		'requires_signature' => 'bool',
		'requires_authentication' => 'bool',
		'urls' => 'PTV_Language_Item[]',
		'attachments' => 'PTV_Attachment[]',
		'support_phones' => 'PTV_Phone[]',
		'support_emails' => 'PTV_Language_Item[]',
		'service_hours' => 'PTV_Service_Hour[]',
		'publishing_status' => 'string',
		'is_visible_for_all' => 'bool',
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
		'signature_quantity' => 'signatureQuantity',
		'requires_signature' => 'requiresSignature',
		'requires_authentication' => 'requiresAuthentication',
		'urls' => 'urls',
		'attachments' => 'attachments',
		'support_phones' => 'supportPhones',
		'support_emails' => 'supportEmails',
		'service_hours' => 'serviceHours',
		'publishing_status' => 'publishingStatus',
		'is_visible_for_all' => 'isVisibleForAll',
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
		'signature_quantity' => 'set_signature_quantity',
		'requires_signature' => 'set_requires_signature',
		'requires_authentication' => 'set_requires_authentication',
		'urls' => 'set_urls',
		'attachments' => 'set_attachments',
		'support_phones' => 'set_support_phones',
		'support_emails' => 'set_support_emails',
		'service_hours' => 'set_service_hours',
		'publishing_status' => 'set_publishing_status',
		'is_visible_for_all' => 'set_is_visible_for_all',
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
		'signature_quantity' => 'get_signature_quantity',
		'requires_signature' => 'get_requires_signature',
		'requires_authentication' => 'get_requires_authentication',
		'urls' => 'get_urls',
		'attachments' => 'get_attachments',
		'support_phones' => 'get_support_phones',
		'support_emails' => 'get_support_emails',
		'service_hours' => 'get_service_hours',
		'publishing_status' => 'get_publishing_status',
		'is_visible_for_all' => 'get_is_visible_for_all',
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
		$this->container['signature_quantity'] = isset( $data['signature_quantity'] ) ? $data['signature_quantity'] : null;
		$this->container['requires_signature'] = isset( $data['requires_signature'] ) ? $data['requires_signature'] : null;
		$this->container['requires_authentication'] = isset( $data['requires_authentication'] ) ? $data['requires_authentication'] : null;
		$this->container['urls'] = isset( $data['urls'] ) ? $data['urls'] : null;
		$this->container['attachments'] = isset( $data['attachments'] ) ? $data['attachments'] : null;
		$this->container['support_phones'] = isset( $data['support_phones'] ) ? $data['support_phones'] : null;
		$this->container['support_emails'] = isset( $data['support_emails'] ) ? $data['support_emails'] : null;
		$this->container['service_hours'] = isset( $data['service_hours'] ) ? $data['service_hours'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['is_visible_for_all'] = isset( $data['is_visible_for_all'] ) ? $data['is_visible_for_all'] : null;
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
		if ( ! is_null( $this->container['signature_quantity'] ) && ! preg_match( '/^\\d+?$/', $this->container['signature_quantity'] ) ) {
			$invalid_properties[] = "invalid value for 'signature_quantity', must be conform to the pattern /^\\d+?$/.";
		}

		if ( null === $this->container['requires_authentication'] ) {
			$invalid_properties[] = "'requires_authentication' can't be null";
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
		if ( ! preg_match( '/^\\d+?$/', $this->container['signature_quantity'] ) ) {
			return false;
		}
		if ( null === $this->container['requires_authentication'] ) {
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
	 * @param string $source_id External system identifier for this service channel.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_EChannel_Channel_In., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
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
	 * Gets signature_quantity
	 * @return string
	 */
	public function get_signature_quantity() {
		return $this->container['signature_quantity'];
	}

	/**
	 * Sets signature_quantity
	 * @param string $signature_quantity How many signatures are required (number). Required if RequiresSignature is true.
	 * @return $this
	 */
	public function set_signature_quantity( $signature_quantity ) {

		if ( ! is_null( $signature_quantity ) && ( ! preg_match( '/^\\d+?$/', $signature_quantity ) ) ) {
			throw new InvalidArgumentException( "invalid value for $signature_quantity when calling PTV_EChannel_Channel_In., must conform to the pattern /^\\d+?$/." );
		}

		$this->container['signature_quantity'] = $signature_quantity;

		return $this;
	}

	/**
	 * Gets requires_signature
	 * @return bool
	 */
	public function get_requires_signature() {
		return $this->container['requires_signature'];
	}

	/**
	 * Sets requires_signature
	 * @param bool $requires_signature Signature required.
	 * @return $this
	 */
	public function set_requires_signature( $requires_signature ) {
		$this->container['requires_signature'] = $requires_signature;

		return $this;
	}

	/**
	 * Gets requires_authentication
	 * @return bool
	 */
	public function get_requires_authentication() {
		return $this->container['requires_authentication'];
	}

	/**
	 * Sets requires_authentication
	 * @param bool $requires_authentication Does the service require authentication.
	 * @return $this
	 */
	public function set_requires_authentication( $requires_authentication ) {
		$this->container['requires_authentication'] = $requires_authentication;

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



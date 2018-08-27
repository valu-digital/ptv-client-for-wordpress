<?php
/**
 * PTV_Service_In
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
 * PTV_Service_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of service for IN api
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'source_id' => 'string',
		'statutory_service_general_description_id' => 'string',
		'type' => 'string',
		'funding_type' => 'string',
		'service_names' => 'PTV_Localized_List_Item[]',
		'service_charge_type' => 'string',
		'area_type' => 'string',
		'areas' => 'PTV_Area_In[]',
		'service_descriptions' => 'PTV_Localized_List_Item[]',
		'languages' => 'string[]',
		'service_classes' => 'string[]',
		'ontology_terms' => 'string[]',
		'target_groups' => 'string[]',
		'life_events' => 'string[]',
		'industrial_classes' => 'string[]',
		'legislation' => 'PTV_Law[]',
		'keywords' => 'PTV_Language_Item[]',
		'requirements' => 'PTV_Language_Item[]',
		'other_responsible_organizations' => 'string[]',
		'service_producers' => 'PTV_Service_Producer_In[]',
		'service_vouchers_in_use' => 'bool',
		'service_vouchers' => 'PTV_Service_Voucher[]',
		'publishing_status' => 'string',
		'service_channels' => 'string[]',
		'main_responsible_organization' => 'string',
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
		'statutory_service_general_description_id' => 'statutoryServiceGeneralDescriptionId',
		'type' => 'type',
		'funding_type' => 'fundingType',
		'service_names' => 'serviceNames',
		'service_charge_type' => 'serviceChargeType',
		'area_type' => 'areaType',
		'areas' => 'areas',
		'service_descriptions' => 'serviceDescriptions',
		'languages' => 'languages',
		'service_classes' => 'serviceClasses',
		'ontology_terms' => 'ontologyTerms',
		'target_groups' => 'targetGroups',
		'life_events' => 'lifeEvents',
		'industrial_classes' => 'industrialClasses',
		'legislation' => 'legislation',
		'keywords' => 'keywords',
		'requirements' => 'requirements',
		'other_responsible_organizations' => 'otherResponsibleOrganizations',
		'service_producers' => 'serviceProducers',
		'service_vouchers_in_use' => 'serviceVouchersInUse',
		'service_vouchers' => 'serviceVouchers',
		'publishing_status' => 'publishingStatus',
		'service_channels' => 'serviceChannels',
		'main_responsible_organization' => 'mainResponsibleOrganization',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'source_id' => 'set_source_id',
		'statutory_service_general_description_id' => 'set_statutory_service_general_description_id',
		'type' => 'set_type',
		'funding_type' => 'set_funding_type',
		'service_names' => 'set_service_names',
		'service_charge_type' => 'set_service_charge_type',
		'area_type' => 'set_area_type',
		'areas' => 'set_areas',
		'service_descriptions' => 'set_service_descriptions',
		'languages' => 'set_languages',
		'service_classes' => 'set_service_classes',
		'ontology_terms' => 'set_ontology_terms',
		'target_groups' => 'set_target_groups',
		'life_events' => 'set_life_events',
		'industrial_classes' => 'set_industrial_classes',
		'legislation' => 'set_legislation',
		'keywords' => 'set_keywords',
		'requirements' => 'set_requirements',
		'other_responsible_organizations' => 'set_other_responsible_organizations',
		'service_producers' => 'set_service_producers',
		'service_vouchers_in_use' => 'set_service_vouchers_in_use',
		'service_vouchers' => 'set_service_vouchers',
		'publishing_status' => 'set_publishing_status',
		'service_channels' => 'set_service_channels',
		'main_responsible_organization' => 'set_main_responsible_organization',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'source_id' => 'get_source_id',
		'statutory_service_general_description_id' => 'get_statutory_service_general_description_id',
		'type' => 'get_type',
		'funding_type' => 'get_funding_type',
		'service_names' => 'get_service_names',
		'service_charge_type' => 'get_service_charge_type',
		'area_type' => 'get_area_type',
		'areas' => 'get_areas',
		'service_descriptions' => 'get_service_descriptions',
		'languages' => 'get_languages',
		'service_classes' => 'get_service_classes',
		'ontology_terms' => 'get_ontology_terms',
		'target_groups' => 'get_target_groups',
		'life_events' => 'get_life_events',
		'industrial_classes' => 'get_industrial_classes',
		'legislation' => 'get_legislation',
		'keywords' => 'get_keywords',
		'requirements' => 'get_requirements',
		'other_responsible_organizations' => 'get_other_responsible_organizations',
		'service_producers' => 'get_service_producers',
		'service_vouchers_in_use' => 'get_service_vouchers_in_use',
		'service_vouchers' => 'get_service_vouchers',
		'publishing_status' => 'get_publishing_status',
		'service_channels' => 'get_service_channels',
		'main_responsible_organization' => 'get_main_responsible_organization',
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
		$this->container['statutory_service_general_description_id'] = isset( $data['statutory_service_general_description_id'] ) ? $data['statutory_service_general_description_id'] : null;
		$this->container['type'] = isset( $data['type'] ) ? $data['type'] : null;
		$this->container['funding_type'] = isset( $data['funding_type'] ) ? $data['funding_type'] : null;
		$this->container['service_names'] = isset( $data['service_names'] ) ? $data['service_names'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['area_type'] = isset( $data['area_type'] ) ? $data['area_type'] : null;
		$this->container['areas'] = isset( $data['areas'] ) ? $data['areas'] : null;
		$this->container['service_descriptions'] = isset( $data['service_descriptions'] ) ? $data['service_descriptions'] : null;
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['service_classes'] = isset( $data['service_classes'] ) ? $data['service_classes'] : null;
		$this->container['ontology_terms'] = isset( $data['ontology_terms'] ) ? $data['ontology_terms'] : null;
		$this->container['target_groups'] = isset( $data['target_groups'] ) ? $data['target_groups'] : null;
		$this->container['life_events'] = isset( $data['life_events'] ) ? $data['life_events'] : null;
		$this->container['industrial_classes'] = isset( $data['industrial_classes'] ) ? $data['industrial_classes'] : null;
		$this->container['legislation'] = isset( $data['legislation'] ) ? $data['legislation'] : null;
		$this->container['keywords'] = isset( $data['keywords'] ) ? $data['keywords'] : null;
		$this->container['requirements'] = isset( $data['requirements'] ) ? $data['requirements'] : null;
		$this->container['other_responsible_organizations'] = isset( $data['other_responsible_organizations'] ) ? $data['other_responsible_organizations'] : null;
		$this->container['service_producers'] = isset( $data['service_producers'] ) ? $data['service_producers'] : null;
		$this->container['service_vouchers_in_use'] = isset( $data['service_vouchers_in_use'] ) ? $data['service_vouchers_in_use'] : null;
		$this->container['service_vouchers'] = isset( $data['service_vouchers'] ) ? $data['service_vouchers'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
		$this->container['service_channels'] = isset( $data['service_channels'] ) ? $data['service_channels'] : null;
		$this->container['main_responsible_organization'] = isset( $data['main_responsible_organization'] ) ? $data['main_responsible_organization'] : null;
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

		if ( null === $this->container['funding_type'] ) {
			$invalid_properties[] = "'funding_type' can't be null";
		}
		if ( null === $this->container['area_type'] ) {
			$invalid_properties[] = "'area_type' can't be null";
		}
		if ( null === $this->container['service_descriptions'] ) {
			$invalid_properties[] = "'service_descriptions' can't be null";
		}
		if ( null === $this->container['languages'] ) {
			$invalid_properties[] = "'languages' can't be null";
		}
		if ( null === $this->container['service_producers'] ) {
			$invalid_properties[] = "'service_producers' can't be null";
		}
		if ( null === $this->container['publishing_status'] ) {
			$invalid_properties[] = "'publishing_status' can't be null";
		}
		if ( null === $this->container['main_responsible_organization'] ) {
			$invalid_properties[] = "'main_responsible_organization' can't be null";
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
		if ( null === $this->container['funding_type'] ) {
			return false;
		}
		if ( null === $this->container['area_type'] ) {
			return false;
		}
		if ( null === $this->container['service_descriptions'] ) {
			return false;
		}
		if ( null === $this->container['languages'] ) {
			return false;
		}
		if ( null === $this->container['service_producers'] ) {
			return false;
		}
		if ( null === $this->container['publishing_status'] ) {
			return false;
		}
		if ( null === $this->container['main_responsible_organization'] ) {
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
	 * @param string $source_id External system identifier for the entity. User needs to be logged in to be able to get/set value.
	 * @return $this
	 */
	public function set_source_id( $source_id ) {

		if ( ! is_null( $source_id ) && ( ! preg_match( '/^[A-Za-z0-9-.]*$/', $source_id ) ) ) {
			throw new InvalidArgumentException( "invalid value for $source_id when calling PTV_Service_In., must conform to the pattern /^[A-Za-z0-9-.]*$/." );
		}

		$this->container['source_id'] = $source_id;

		return $this;
	}

	/**
	 * Gets statutory_service_general_description_id
	 * @return string
	 */
	public function get_statutory_service_general_description_id() {
		return $this->container['statutory_service_general_description_id'];
	}

	/**
	 * Sets statutory_service_general_description_id
	 * @param string $statutory_service_general_description_id Valid PTV statutory service general description identifier that this service will be linked to. List of valid identifiers can be retrieved from the endpoint /api/GeneralDescription
	 * @return $this
	 */
	public function set_statutory_service_general_description_id( $statutory_service_general_description_id ) {
		$this->container['statutory_service_general_description_id'] = $statutory_service_general_description_id;

		return $this;
	}

	/**
	 * Gets type
	 * @return string
	 */
	public function get_type() {
		return $this->container['type'];
	}

	/**
	 * Sets type
	 * @param string $type Service type. Possible values are: Service or PermissionAndObligation.  NOTE! If service type has been defined within attached statutory service general description, the type for service is ignored.
	 * @return $this
	 */
	public function set_type( $type ) {
		$this->container['type'] = $type;

		return $this;
	}

	/**
	 * Gets funding_type
	 * @return string
	 */
	public function get_funding_type() {
		return $this->container['funding_type'];
	}

	/**
	 * Sets funding_type
	 * @param string $funding_type Service funding type. Possible values are: PubliclyFunded or MarketFunded.
	 * @return $this
	 */
	public function set_funding_type( $funding_type ) {
		$this->container['funding_type'] = $funding_type;

		return $this;
	}

	/**
	 * Gets service_names
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_service_names() {
		return $this->container['service_names'];
	}

	/**
	 * Sets service_names
	 * @param PTV_Localized_List_Item[] $service_names List of service names. (Max.Length: 100).
	 * @return $this
	 */
	public function set_service_names( $service_names ) {
		$this->container['service_names'] = $service_names;

		return $this;
	}

	/**
	 * Gets service_charge_type
	 * @return string
	 */
	public function get_service_charge_type() {
		return $this->container['service_charge_type'];
	}

	/**
	 * Sets service_charge_type
	 * @param string $service_charge_type Service charge type. Possible values are: Charged or Free.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored.
	 * @return $this
	 */
	public function set_service_charge_type( $service_charge_type ) {
		$this->container['service_charge_type'] = $service_charge_type;

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
	 * Gets service_descriptions
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_service_descriptions() {
		return $this->container['service_descriptions'];
	}

	/**
	 * Sets service_descriptions
	 * @param PTV_Localized_List_Item[] $service_descriptions List of service descriptions. (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 150 ShortDescription). (Max.Length: 500 ProcessingTimeAdditionalInfo). (Max.Length: 500 DeadLineAdditionalInfo). (Max.Length: 500 ChargeTypeAdditionalInfo). (Max.Length: 500 ValidityTimeAdditionalInfo).
	 * @return $this
	 */
	public function set_service_descriptions( $service_descriptions ) {
		$this->container['service_descriptions'] = $service_descriptions;

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
	 * @param string[] $languages List of service language codes.
	 * @return $this
	 */
	public function set_languages( $languages ) {
		$this->container['languages'] = $languages;

		return $this;
	}

	/**
	 * Gets service_classes
	 * @return string[]
	 */
	public function get_service_classes() {
		return $this->container['service_classes'];
	}

	/**
	 * Sets service_classes
	 * @param string[] $service_classes List of service class urls (see http://finto.fi/ptvl/fi/).  NOTE! If service class has been defined within attached statutory service general description, the service class is not added for service.
	 * @return $this
	 */
	public function set_service_classes( $service_classes ) {
		$this->container['service_classes'] = $service_classes;

		return $this;
	}

	/**
	 * Gets ontology_terms
	 * @return string[]
	 */
	public function get_ontology_terms() {
		return $this->container['ontology_terms'];
	}

	/**
	 * Sets ontology_terms
	 * @param string[] $ontology_terms List of ontology term urls (see http://finto.fi/koko/fi/).  NOTE! If ontology term has been defined within attached statutory service general description, the ontology term is not added for service.
	 * @return $this
	 */
	public function set_ontology_terms( $ontology_terms ) {
		$this->container['ontology_terms'] = $ontology_terms;

		return $this;
	}

	/**
	 * Gets target_groups
	 * @return string[]
	 */
	public function get_target_groups() {
		return $this->container['target_groups'];
	}

	/**
	 * Sets target_groups
	 * @param string[] $target_groups List of target group urls (see http://finto.fi/ptvl/fi/page/?uri=http://urn.fi/URN:NBN:fi:au:ptvl:KR).  NOTE! If target group has been defined within attached statutory service general description, the target group is not added for service.
	 * @return $this
	 */
	public function set_target_groups( $target_groups ) {
		$this->container['target_groups'] = $target_groups;

		return $this;
	}

	/**
	 * Gets life_events
	 * @return string[]
	 */
	public function get_life_events() {
		return $this->container['life_events'];
	}

	/**
	 * Sets life_events
	 * @param string[] $life_events List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017  NOTE! If life event has been defined within attached statutory service general description, the life event is not added for service.
	 * @return $this
	 */
	public function set_life_events( $life_events ) {
		$this->container['life_events'] = $life_events;

		return $this;
	}

	/**
	 * Gets industrial_classes
	 * @return string[]
	 */
	public function get_industrial_classes() {
		return $this->container['industrial_classes'];
	}

	/**
	 * Sets industrial_classes
	 * @param string[] $industrial_classes List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt).  NOTE! If industrial class has been defined within attached statutory service general description, the industrial class is not added for service.
	 * @return $this
	 */
	public function set_industrial_classes( $industrial_classes ) {
		$this->container['industrial_classes'] = $industrial_classes;

		return $this;
	}

	/**
	 * Gets legislation
	 * @return PTV_Law[]
	 */
	public function get_legislation() {
		return $this->container['legislation'];
	}

	/**
	 * Sets legislation
	 * @param PTV_Law[] $legislation List of laws related to the service.
	 * @return $this
	 */
	public function set_legislation( $legislation ) {
		$this->container['legislation'] = $legislation;

		return $this;
	}

	/**
	 * Gets keywords
	 * @return PTV_Language_Item[]
	 */
	public function get_keywords() {
		return $this->container['keywords'];
	}

	/**
	 * Sets keywords
	 * @param PTV_Language_Item[] $keywords List of localized service keywords. (Max.Length: 150).
	 * @return $this
	 */
	public function set_keywords( $keywords ) {
		$this->container['keywords'] = $keywords;

		return $this;
	}

	/**
	 * Gets requirements
	 * @return PTV_Language_Item[]
	 */
	public function get_requirements() {
		return $this->container['requirements'];
	}

	/**
	 * Sets requirements
	 * @param PTV_Language_Item[] $requirements Localized service usage requirements (description of requirement). (Max.Length: 2500).
	 * @return $this
	 */
	public function set_requirements( $requirements ) {
		$this->container['requirements'] = $requirements;

		return $this;
	}

	/**
	 * Gets other_responsible_organizations
	 * @return string[]
	 */
	public function get_other_responsible_organizations() {
		return $this->container['other_responsible_organizations'];
	}

	/**
	 * Sets other_responsible_organizations
	 * @param string[] $other_responsible_organizations List of other responsible organizations for the service.
	 * @return $this
	 */
	public function set_other_responsible_organizations( $other_responsible_organizations ) {
		$this->container['other_responsible_organizations'] = $other_responsible_organizations;

		return $this;
	}

	/**
	 * Gets service_producers
	 * @return PTV_Service_Producer_In[]
	 */
	public function get_service_producers() {
		return $this->container['service_producers'];
	}

	/**
	 * Sets service_producers
	 * @param PTV_Service_Producer_In[] $service_producers List of service producers
	 * @return $this
	 */
	public function set_service_producers( $service_producers ) {
		$this->container['service_producers'] = $service_producers;

		return $this;
	}

	/**
	 * Gets service_vouchers_in_use
	 * @return bool
	 */
	public function get_service_vouchers_in_use() {
		return $this->container['service_vouchers_in_use'];
	}

	/**
	 * Sets service_vouchers_in_use
	 * @param bool $service_vouchers_in_use Indicates if service vouchers are used in the service.
	 * @return $this
	 */
	public function set_service_vouchers_in_use( $service_vouchers_in_use ) {
		$this->container['service_vouchers_in_use'] = $service_vouchers_in_use;

		return $this;
	}

	/**
	 * Gets service_vouchers
	 * @return PTV_Service_Voucher[]
	 */
	public function get_service_vouchers() {
		return $this->container['service_vouchers'];
	}

	/**
	 * Sets service_vouchers
	 * @param PTV_Service_Voucher[] $service_vouchers List of service vouchers.
	 * @return $this
	 */
	public function set_service_vouchers( $service_vouchers ) {
		$this->container['service_vouchers'] = $service_vouchers;

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
	 * @param string $publishing_status Publishing status. Possible values are: Draft or Published.
	 * @return $this
	 */
	public function set_publishing_status( $publishing_status ) {
		$this->container['publishing_status'] = $publishing_status;

		return $this;
	}

	/**
	 * Gets service_channels
	 * @return string[]
	 */
	public function get_service_channels() {
		return $this->container['service_channels'];
	}

	/**
	 * Sets service_channels
	 * @param string[] $service_channels List of related service channels (GUID).
	 * @return $this
	 */
	public function set_service_channels( $service_channels ) {
		$this->container['service_channels'] = $service_channels;

		return $this;
	}

	/**
	 * Gets main_responsible_organization
	 * @return string
	 */
	public function get_main_responsible_organization() {
		return $this->container['main_responsible_organization'];
	}

	/**
	 * Sets main_responsible_organization
	 * @param string $main_responsible_organization Main organization id.
	 * @return $this
	 */
	public function set_main_responsible_organization( $main_responsible_organization ) {
		$this->container['main_responsible_organization'] = $main_responsible_organization;

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



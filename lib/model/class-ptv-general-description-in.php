<?php
/**
 * PTV_General_Description_In
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
 * PTV_General_Description_In Class Doc Comment
 *
 * @category    Class
 * @description OPEN API - View Model of general description for IN api (POST)
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_General_Description_In implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_General_Description_In';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'names' => 'PTV_Localized_List_Item[]',
		'descriptions' => 'PTV_Localized_List_Item[]',
		'languages' => 'string[]',
		'service_classes' => 'string[]',
		'ontology_terms' => 'string[]',
		'target_groups' => 'string[]',
		'life_events' => 'string[]',
		'industrial_classes' => 'string[]',
		'requirements' => 'PTV_Language_Item[]',
		'type' => 'string',
		'service_charge_type' => 'string',
		'legislation' => 'PTV_Law[]',
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
		'names' => 'names',
		'descriptions' => 'descriptions',
		'languages' => 'languages',
		'service_classes' => 'serviceClasses',
		'ontology_terms' => 'ontologyTerms',
		'target_groups' => 'targetGroups',
		'life_events' => 'lifeEvents',
		'industrial_classes' => 'industrialClasses',
		'requirements' => 'requirements',
		'type' => 'type',
		'service_charge_type' => 'serviceChargeType',
		'legislation' => 'legislation',
		'publishing_status' => 'publishingStatus',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'names' => 'set_names',
		'descriptions' => 'set_descriptions',
		'languages' => 'set_languages',
		'service_classes' => 'set_service_classes',
		'ontology_terms' => 'set_ontology_terms',
		'target_groups' => 'set_target_groups',
		'life_events' => 'set_life_events',
		'industrial_classes' => 'set_industrial_classes',
		'requirements' => 'set_requirements',
		'type' => 'set_type',
		'service_charge_type' => 'set_service_charge_type',
		'legislation' => 'set_legislation',
		'publishing_status' => 'set_publishing_status',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'names' => 'get_names',
		'descriptions' => 'get_descriptions',
		'languages' => 'get_languages',
		'service_classes' => 'get_service_classes',
		'ontology_terms' => 'get_ontology_terms',
		'target_groups' => 'get_target_groups',
		'life_events' => 'get_life_events',
		'industrial_classes' => 'get_industrial_classes',
		'requirements' => 'get_requirements',
		'type' => 'get_type',
		'service_charge_type' => 'get_service_charge_type',
		'legislation' => 'get_legislation',
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
		$this->container['names'] = isset( $data['names'] ) ? $data['names'] : null;
		$this->container['descriptions'] = isset( $data['descriptions'] ) ? $data['descriptions'] : null;
		$this->container['languages'] = isset( $data['languages'] ) ? $data['languages'] : null;
		$this->container['service_classes'] = isset( $data['service_classes'] ) ? $data['service_classes'] : null;
		$this->container['ontology_terms'] = isset( $data['ontology_terms'] ) ? $data['ontology_terms'] : null;
		$this->container['target_groups'] = isset( $data['target_groups'] ) ? $data['target_groups'] : null;
		$this->container['life_events'] = isset( $data['life_events'] ) ? $data['life_events'] : null;
		$this->container['industrial_classes'] = isset( $data['industrial_classes'] ) ? $data['industrial_classes'] : null;
		$this->container['requirements'] = isset( $data['requirements'] ) ? $data['requirements'] : null;
		$this->container['type'] = isset( $data['type'] ) ? $data['type'] : null;
		$this->container['service_charge_type'] = isset( $data['service_charge_type'] ) ? $data['service_charge_type'] : null;
		$this->container['legislation'] = isset( $data['legislation'] ) ? $data['legislation'] : null;
		$this->container['publishing_status'] = isset( $data['publishing_status'] ) ? $data['publishing_status'] : null;
	}

	/**
	 * show all the invalid properties with reasons.
	 *
	 * @return array invalid properties with reasons
	 */
	public function list_invalid_properties() {
		$invalid_properties = array();

		if ( null === $this->container['names'] ) {
			$invalid_properties[] = "'names' can't be null";
		}
		if ( null === $this->container['descriptions'] ) {
			$invalid_properties[] = "'descriptions' can't be null";
		}
		if ( null === $this->container['languages'] ) {
			$invalid_properties[] = "'languages' can't be null";
		}
		if ( null === $this->container['service_classes'] ) {
			$invalid_properties[] = "'service_classes' can't be null";
		}
		if ( null === $this->container['ontology_terms'] ) {
			$invalid_properties[] = "'ontology_terms' can't be null";
		}
		if ( null === $this->container['target_groups'] ) {
			$invalid_properties[] = "'target_groups' can't be null";
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

		if ( null === $this->container['names'] ) {
			return false;
		}
		if ( null === $this->container['descriptions'] ) {
			return false;
		}
		if ( null === $this->container['languages'] ) {
			return false;
		}
		if ( null === $this->container['service_classes'] ) {
			return false;
		}
		if ( null === $this->container['ontology_terms'] ) {
			return false;
		}
		if ( null === $this->container['target_groups'] ) {
			return false;
		}
		if ( null === $this->container['publishing_status'] ) {
			return false;
		}
		return true;
	}


	/**
	 * Gets names
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_names() {
		return $this->container['names'];
	}

	/**
	 * Sets names
	 * @param PTV_Localized_List_Item[] $names List of name entities. Value of \"type\" has to be always \"Name\".   Sample single JSON object: {\"language\": \"fi\", \"value\": \"Perhepäivähoito esiopetusikäisille\", \"type\": \"Name\"}. (Max.Length: 100).
	 * @return $this
	 */
	public function set_names( $names ) {
		$this->container['names'] = $names;

		return $this;
	}

	/**
	 * Gets descriptions
	 * @return PTV_Localized_List_Item[]
	 */
	public function get_descriptions() {
		return $this->container['descriptions'];
	}

	/**
	 * Sets descriptions
	 * @param PTV_Localized_List_Item[] $descriptions List of description entities. Requires two entities where ones type is \"Description\" or \"BackgroundDescription\" and the other ones type is \"ShortDescription\".  Sample single JSON object: {\"language\": \"fi\", \"value\": \"Lyhyen kuvauksen kuvaus esimerkki teksti.\", \"type\": \"ShortDescription\"}.  Other optional description types are ServiceUserInstruction, ChargeTypeAdditionalInfo, DeadLineAdditionalInfo, ProcessingTimeAdditionalInfo, ValidityTimeAdditionalInfo. (Max.Length: 150 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 2500 ServiceUserInstruction). (Max.Length: 2500 BackgroundDescription).
	 * @return $this
	 */
	public function set_descriptions( $descriptions ) {
		$this->container['descriptions'] = $descriptions;

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
	 * @param string[] $languages List of language codes.
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
	 * @param string[] $service_classes List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065
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
	 * @param string[] $ontology_terms List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435
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
	 * @param string[] $target_groups List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004
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
	 * @param string[] $life_events List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017
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
	 * @param string[] $industrial_classes List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt).
	 * @return $this
	 */
	public function set_industrial_classes( $industrial_classes ) {
		$this->container['industrial_classes'] = $industrial_classes;

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
	 * Gets type
	 * @return string
	 */
	public function get_type() {
		return $this->container['type'];
	}

	/**
	 * Sets type
	 * @param string $type Service type. Possible values are: Service, PermissionAndObligation or ProfessionalQualifications.
	 * @return $this
	 */
	public function set_type( $type ) {
		$this->container['type'] = $type;

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
	 * @param string $service_charge_type Service charge type. Possible values are: Charged, Free or Other
	 * @return $this
	 */
	public function set_service_charge_type( $service_charge_type ) {
		$this->container['service_charge_type'] = $service_charge_type;

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
	 * @param PTV_Law[] $legislation Laws that a general description is based on.
	 * @return $this
	 */
	public function set_legislation( $legislation ) {
		$this->container['legislation'] = $legislation;

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



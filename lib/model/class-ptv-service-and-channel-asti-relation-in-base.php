<?php
/**
 * PTV_Service_And_Channel_Asti_Relation_In_Base
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
 * PTV_Service_And_Channel_Asti_Relation_In_Base Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V7 - View Model of service and channel relation IN (PUT).
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Service_And_Channel_Asti_Relation_In_Base implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Service_And_Channel_Asti_Relation_In_Base';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'delete_all_channel_relations' => 'bool',
		'channel_relations' => 'PTV_Service_Asti_Service_Channel_In_Base[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'delete_all_channel_relations' => 'deleteAllChannelRelations',
		'channel_relations' => 'channelRelations',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'delete_all_channel_relations' => 'set_delete_all_channel_relations',
		'channel_relations' => 'set_channel_relations',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'delete_all_channel_relations' => 'get_delete_all_channel_relations',
		'channel_relations' => 'get_channel_relations',
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
		$this->container['delete_all_channel_relations'] = isset( $data['delete_all_channel_relations'] ) ? $data['delete_all_channel_relations'] : null;
		$this->container['channel_relations'] = isset( $data['channel_relations'] ) ? $data['channel_relations'] : null;
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
	 * Gets delete_all_channel_relations
	 * @return bool
	 */
	public function get_delete_all_channel_relations() {
		return $this->container['delete_all_channel_relations'];
	}

	/**
	 * Sets delete_all_channel_relations
	 * @param bool $delete_all_channel_relations Set to true to delete all existing relations between defined service and service channels (the ChannelRelations collection for this object should be empty collection when this option is used).
	 * @return $this
	 */
	public function set_delete_all_channel_relations( $delete_all_channel_relations ) {
		$this->container['delete_all_channel_relations'] = $delete_all_channel_relations;

		return $this;
	}

	/**
	 * Gets channel_relations
	 * @return PTV_Service_Asti_Service_Channel_In_Base[]
	 */
	public function get_channel_relations() {
		return $this->container['channel_relations'];
	}

	/**
	 * Sets channel_relations
	 * @param PTV_Service_Asti_Service_Channel_In_Base[] $channel_relations Gets or sets the channel relations.
	 * @return $this
	 */
	public function set_channel_relations( $channel_relations ) {
		$this->container['channel_relations'] = $channel_relations;

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



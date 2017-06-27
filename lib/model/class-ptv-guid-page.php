<?php
/**
 * PTV_Guid_Page
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
 * PTV_Guid_Page Class Doc Comment
 *
 * @category    Class
 * @description OPEN API V3 - View Model of guid page
 * @author      Valu Digital
 * @link        https://www.valu.fi
 */
class PTV_Guid_Page implements ArrayAccess {

	/**
	  * The original name of the model.
	  * @var string
	  */
	protected static $model_name = 'PTV_Guid_Page';

	/**
	  * Array of property to type mappings. Used for (de)serialization
	  * @var string[]
	  */
	protected static $types = array(
		'page_number' => 'int',
		'page_size' => 'int',
		'page_count' => 'int',
		'item_list' => 'PTV_Item[]',
	);

	public static function types() {
		return self::$types;
	}

	/**
	 * Array of attributes where the key is the local name, and the value is the original name
	 * @var string[]
	 */
	protected static $attribute_map = array(
		'page_number' => 'pageNumber',
		'page_size' => 'pageSize',
		'page_count' => 'pageCount',
		'item_list' => 'itemList',
	);


	/**
	 * Array of attributes to setter functions (for deserialization of responses)
	 * @var string[]
	 */
	protected static $setters = array(
		'page_number' => 'set_page_number',
		'page_size' => 'set_page_size',
		'page_count' => 'set_page_count',
		'item_list' => 'set_item_list',
	);


	/**
	 * Array of attributes to getter functions (for serialization of requests)
	 * @var string[]
	 */
	protected static $getters = array(
		'page_number' => 'get_page_number',
		'page_size' => 'get_page_size',
		'page_count' => 'get_page_count',
		'item_list' => 'get_item_list',
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
		$this->container['page_number'] = isset( $data['page_number'] ) ? $data['page_number'] : null;
		$this->container['page_size'] = isset( $data['page_size'] ) ? $data['page_size'] : null;
		$this->container['page_count'] = isset( $data['page_count'] ) ? $data['page_count'] : null;
		$this->container['item_list'] = isset( $data['item_list'] ) ? $data['item_list'] : null;
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
	 * Gets page_number
	 * @return int
	 */
	public function get_page_number() {
		return $this->container['page_number'];
	}

	/**
	 * Sets page_number
	 * @param int $page_number Resultset page number (resultset paging). Page numbering starts from one.
	 * @return $this
	 */
	public function set_page_number( $page_number ) {
		$this->container['page_number'] = $page_number;

		return $this;
	}

	/**
	 * Gets page_size
	 * @return int
	 */
	public function get_page_size() {
		return $this->container['page_size'];
	}

	/**
	 * Sets page_size
	 * @param int $page_size How many results per page are returned (resultset paging).
	 * @return $this
	 */
	public function set_page_size( $page_size ) {
		$this->container['page_size'] = $page_size;

		return $this;
	}

	/**
	 * Gets page_count
	 * @return int
	 */
	public function get_page_count() {
		return $this->container['page_count'];
	}

	/**
	 * Sets page_count
	 * @param int $page_count Total count of pages the resultset has (resultset paging).
	 * @return $this
	 */
	public function set_page_count( $page_count ) {
		$this->container['page_count'] = $page_count;

		return $this;
	}

	/**
	 * Gets item_list
	 * @return PTV_Item[]
	 */
	public function get_item_list() {
		return $this->container['item_list'];
	}

	/**
	 * Sets item_list
	 * @param PTV_Item[] $item_list List of entity Guids.
	 * @return $this
	 */
	public function set_item_list( $item_list ) {
		$this->container['item_list'] = $item_list;

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



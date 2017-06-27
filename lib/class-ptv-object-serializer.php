<?php
/**
 * PTV_Object_Serializer
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
 * PTV_Object_Serializer Class Doc Comment
 *
 * @category Class
 * @author   Valu Digital
 * @link     https://www.valu.fi
 */
class PTV_Object_Serializer {
	/**
	 * Serialize data
	 *
	 * @param mixed $data the data to serialize
	 *
	 * @return string|object serialized form of $data
	 */
	public static function sanitize_for_serialization( $data ) {
		if ( is_scalar( $data ) || null === $data ) {
			return $data;
		} elseif ( $data instanceof \DateTime ) {
			return $data->format( \DateTime::ATOM );
		} elseif ( is_array( $data ) ) {
			foreach ( $data as $property => $value ) {
				$data[ $property ] = self::sanitize_for_serialization( $value );
			}
			return $data;
		} elseif ( is_object( $data ) ) {
			$values = [];
			foreach ( array_keys( $data::types() ) as $property ) {
				$getter = $data::getters()[ $property ];
				if ( $data->$getter() !== null ) {
					$values[ $data::attribute_map()[ $property ] ] = self::sanitize_for_serialization( $data->$getter() );
				}
			}
			return (object) $values;
		} else {
			return (string) $data;
		}
	}

	/**
	 * Sanitize filename by removing path.
	 * e.g. ../../sun.gif becomes sun.gif
	 *
	 * @param string $filename filename to be sanitized
	 *
	 * @return string the sanitized filename
	 */
	public function sanitize_filename( $filename ) {
		if ( preg_match( '/.*[\/\\\\](.*)$/', $filename, $match ) ) {
			return $match[1];
		} else {
			return $filename;
		}
	}

	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the path, by url-encoding.
	 *
	 * @param string $value a string which will be part of the path
	 *
	 * @return string the serialized object
	 */
	public function to_path_value( $value ) {
		return rawurlencode( $this->to_string( $value ) );
	}

	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the query, by imploding comma-separated if it's an object.
	 * If it's a string, pass through unchanged. It will be url-encoded
	 * later.
	 *
	 * @param string[]|string|\DateTime $object an object to be serialized to a string
	 *
	 * @return string the serialized object
	 */
	public function to_query_value( $object ) {
		if ( is_array( $object ) ) {
			return implode( ',', $object );
		} else {
			return $this->to_string( $object );
		}
	}

	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the header. If it's a string, pass through unchanged
	 * If it's a datetime object, format it in ISO8601
	 *
	 * @param string $value a string which will be part of the header
	 *
	 * @return string the header string
	 */
	public function to_header_value( $value ) {
		return $this->to_string( $value );
	}

	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the http body (form parameter). If it's a string, pass through unchanged
	 * If it's a datetime object, format it in ISO8601
	 *
	 * @param string|\SplFileObject $value the value of the form parameter
	 *
	 * @return string the form string
	 */
	public function to_form_value( $value ) {
		if ( $value instanceof \SplFileObject ) {
			return $value->getRealPath();
		} else {
			return $this->to_string( $value );
		}
	}

	/**
	 * Take value and turn it into a string suitable for inclusion in
	 * the parameter. If it's a string, pass through unchanged
	 * If it's a datetime object, format it in ISO8601
	 *
	 * @param string|\DateTime $value the value of the parameter
	 *
	 * @return string the header string
	 */
	public function to_string( $value ) {
		if ( $value instanceof \DateTime ) { // datetime in ISO8601 format
			return $value->format( \DateTime::ATOM );
		} else {
			return $value;
		}
	}

	/**
	 * Serialize an array to a string.
	 *
	 * @param array  $collection                 collection to serialize to a string
	 * @param string $collection_format           the format use for serialization (csv,
	 * ssv, tsv, pipes, multi)
	 * @param bool   $allow_collection_format_multi allow collection format to be a multidimensional array
	 *
	 * @return string
	 */
	public function serialize_collection( array $collection, $collection_format, $allow_collection_format_multi = false ) {
		if ( $allow_collection_format_multi && ('multi' === $collection_format ) ) {
			// http_build_query() almost does the job for us. We just
			// need to fix the result of multidimensional arrays.
			return preg_replace( '/%5B[0-9]+%5D=/', '=', http_build_query( $collection, '', '&' ) );
		}
		switch ( $collection_format ) {
			case 'pipes':
				return implode( '|', $collection );

			case 'tsv':
				return implode( "\t", $collection );

			case 'ssv':
				return implode( ' ', $collection );

			case 'csv':
				// Deliberate fall through. CSV is default format.
			default:
				return implode( ',', $collection );
		}
	}

	/**
	 * Deserialize a JSON string into an object
	 *
	 * @param mixed    $data          object or primitive to be deserialized
	 * @param string   $class         class name is passed as a string
	 * @param string[] $http_headers   HTTP headers
	 *
	 * @return object|array|null an single or an array of $class instances
	 */
	public static function deserialize( $data, $class, $http_headers = null ) {
		if ( null === $data ) {
			return null;
		} elseif ( substr( $class, 0, 4 ) === 'map[' ) { // for associative array e.g. map[string,int]
			$inner = substr( $class, 4, -1 );
			$deserialized = [];
			if ( strrpos( $inner, ',' ) !== false ) {
				$subclass_array = explode( ',', $inner, 2 );
				$subclass = $subclass_array[1];
				foreach ( $data as $key => $value ) {
					$deserialized[ $key ] = self::deserialize( $value, $subclass, null );
				}
			}
			return $deserialized;
		} elseif ( strcasecmp( substr( $class, -2 ), '[]' ) === 0 ) {
			$subclass = substr( $class, 0, -2 );
			$values = [];
			foreach ( $data as $key => $value ) {
				$values[] = self::deserialize( $value, $subclass, null );
			}
			return $values;
		} elseif ( 'object' === $class ) {
			settype( $data, 'array' );
			return $data;
		} elseif ( '\DateTime' === $class ) {
			// Some API's return an invalid, empty string as a
			// date-time property. DateTime::__construct() will return
			// the current time for empty input which is probably not
			// what is meant. The invalid empty string is probably to
			// be interpreted as a missing field/value. Let's handle
			// this graceful.
			if ( ! empty( $data ) ) {
				return new \DateTime( $data );
			} else {
				return null;
			}
		} elseif ( in_array( $class, [ 'DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void' ], true ) ) {
			settype( $data, $class );
			return $data;
		} elseif ( '\SplFileObject' === $class ) {
			// determine file name
			if ( array_key_exists( 'Content-Disposition', $http_headers ) &&
				preg_match( '/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $http_headers['Content-Disposition'], $match ) ) {
				$filename = PTV_Api_Client_Configuration::get_default_configuration()->get_temp_folder_path() . sanitize_filename( $match[1] );
			} else {
				$filename = tempnam( PTV_Api_Client_Configuration::get_default_configuration()->get_temp_folder_path(), '' );
			}
			$deserialized = new \SplFileObject( $filename, 'w' );
			$byte_written = $deserialized->fwrite( $data );

			return $deserialized;
		} elseif ( 'PTV_Service_Channels' === $class ) {
			return self::deserialize( $data, sprintf( 'PTV_%s_Channel', preg_replace( '/([a-z])([A-Z])/', '$1_$2', $data->serviceChannelType ) ), null );
		} else {
			$instance = new $class();
			foreach ( $instance::types() as $property => $type ) {
				$property_setter = $instance::setters()[ $property ];

				if ( ! isset( $property_setter ) || ! isset( $data->{$instance::attribute_map()[ $property ]} ) ) {
					continue;
				}

				$property_value = $data->{$instance::attribute_map()[ $property ]};
				if ( isset( $property_value ) ) {
					$instance->$property_setter( self::deserialize( $property_value, $type, null ) );
				}
			}
			return $instance;
		}
	}
}

<?php

namespace jsoner\filter;

use jsoner\Config;

class CensorKeysFilter implements Filter
{
	private $config;

	/**
	 * @param Config $config
	 */
	public function __construct( $config ) {

		$this->config = $config;
	}

	public static function doFilter( $array, $params ) {
		$dummy = array_pop( $params );
		foreach ( $params as $key ) {
			if ( array_key_exists( $key, $array ) ) {
				$array[$key] = $dummy;
			}
		}
		return $array;
	}
}

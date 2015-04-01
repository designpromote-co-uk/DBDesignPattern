<?php
/**
 * Singleton
 */
 
namespace DBDesignPattern;

class Preferences
{
	private $props = array();
	
	private $error = null;
	
	private static $instance;
	
	private function __construct(){
		// $this->error = 'an error!';
	}
	
	public static function init() {
		if ( empty( self::$instance ) ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	public function get($key) {
		return $this->props[$key];
	}
	
	public function set($key, $value) {
		$this->props[$key] = $value;
	}
	
	public function getError() {
		return $this->error;
	}
}
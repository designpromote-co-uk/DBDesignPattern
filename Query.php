<?php
/**
 * Query Class
 * Delegated to QueryStrategy
 */
 
namespace DBDesignPattern;

class Query
{
	private $dbType;
	private $sql;
	private $queryStrategy;

	public function __construct($sql, QueryStrategy $queryStrategy) {
		$this->sql = $sql;
		$this->queryStrategy = $queryStrategy;
	}
	
	public function getData() {
		return $this->queryStrategy->getData($this);
	}
	
	public function getSql() {
		return $this->sql;
	}
}
<?php
/**
 * SelectQueryStrategy Class
 */
 
namespace DBDesignPattern;

class SelectQueryStrategy extends QueryStrategy
{
	public function getData(Query $query) {
		// $connect = Preferences::init()->get('mysql');
		$data = \mysqli_query($this->getConnect(), $query->getSql());
		// return $query->getDbType();
		return \mysqli_fetch_all($data, MYSQLI_ASSOC);
	}
}
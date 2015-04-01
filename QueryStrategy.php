<?php
/**
 * QueryStrategy class
 * the delegated of Query
 */
namespace DBDesignPattern;

abstract class QueryStrategy
{
	public function getConnect() {
		return Preferences::init()->get('mysql');
	}
	abstract public function getData(Query $query);
}
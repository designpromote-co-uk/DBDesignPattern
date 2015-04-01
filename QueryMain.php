<?php

namespace DBDesignPattern;

require_once('Preferences.php');
require_once('Query.php');
require_once('QueryStrategy.php');
require_once('SelectQueryStrategy.php');

$connect = \mysqli_connect("localhost", "root", "", "frank_job_test");

Preferences::init()->set('mysql', $connect);

$query = new Query('SELECT * FROM blogs', new SelectQueryStrategy());

var_dump($query->getData());
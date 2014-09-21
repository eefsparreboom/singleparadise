<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
function __autoload($name) {
	require('../src/bolcom/' . $name . '.php');
}
//please fill in your API-key in Example.php before running index.php
require_once 'Example.php';

Example::run();

?>
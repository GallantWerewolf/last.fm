<?php
class DatabaseConnector {
	protected $mysqli;

	function __construct($host, $login, $password, $database) {
		$this->mysqli = new mysqli($host, $login, $password, $database);
	}
}
?>

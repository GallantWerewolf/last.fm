<?php
class DatabaseConnector {
	protected $mysqli;

	function __construct($host, $login, $password, $database) {
		$this->mysqli = new mysqli($host, $login, $password, $database);
		if($this->mysqli->connect_error) {
			throw new Exception($this->mysqli->connect_error);
		}
		if(!$this->mysqli->set_charset("utf8")) {
			throw new Exception($this->mysqli->error);
		}
	}
}
?>

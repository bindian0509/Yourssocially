<?php

class Database {

	private $connection = null;
	private $is_magic_quotes_active = null;
	private $is_real_escape_string_active = null;
	
	public function __construct() {
		$this->is_magic_quotes_active = get_magic_quotes_gpc();
		$this->is_real_escape_string_active = function_exists("mysql_real_escape_string");		
	}
	
	public function open() {
	
		// Open database connection
		$this->connection = mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD) 
			or die(mysql_error());
		
		// Select target database
		mysql_select_db(DATABASE_NAME, $this->connection) or die(mysql_error());
			
	}

	public function sanitize($value) {
	
		if ($this->is_real_escape_string_active) {
	
			if ($this->is_magic_quotes_active) {
	
				// Undo magic quote effects
				$value = stripslashes($value);
			}
			// Redo escape using mysql_real_escape_string
			$value = mysql_real_escape_string($value);
	
		} else {
	
			if (!$this->is_magic_quotes_active) {
	
				// Add slashed manually
				$value = addslashes($value);
			}
		}
		
		// Return sanitized value
		return $value;
	}

	public function execute($statement) {
	
		// Open database connection
		$this->open();
	
		// Execute database statement
		$result = mysql_query($statement, $this->connection) or die(mysql_error());
		
		// Close database connection
		$this->close();
		
		// Return results
		return $result;
	}
	
	public function fetch($result) {
		return mysql_fetch_array($result, MYSQL_ASSOC);
	}
				
	public function close() {
	
		// Close database connection
		if (isset($this->connection)) {
			mysql_close($this->connection);
		}
	}
}

$database = new Database();
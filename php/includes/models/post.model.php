<?php

class Post {
	
	public $id = null;
	public $title = null;
	public $content = null;
	public $created = null;

	public static function build($row) {
		
		// Instantiate new object
		$object = new self;
		
		// Initialize object's attributes
		$object->id = $row['id'];
		$object->title = $row['title'];
		$object->content = $row['content'];
		$object->created = $row['created'];
		
		// Return object
		return $object;
	}

	public static function getBySql($sql) {
	
		// Get database object from global scope
		global $database;
				
		// Get data from database
		$result = $database->execute($sql);
		
		// Initialize array to hold objects
		$objects = array();
		
		// Fetch rows from database cursor
		while($row = $database->fetch($result)) {
			$objects[] = self::build($row);
		}
		
		// Return array of objects
		return $objects;
	}
			
	public static function getAll() {
	
		// Build database query
		$sql = 'select * from post';

		// Execute database query
		return self::getBySql($sql);
	}

	public static function getById($id) {

		// Sanitize user input
		$id = (int)$id;
		
		// Build database query
		$sql = sprintf("select * from post where id = %d limit 1", $id);

		// Execute database query
		$result = self::getBySql($sql);
		
		// Extract object from array
		$object = array_shift($result);
		
		// Return object
		return $object;
	}

	public function insert() {
	
		// Get database object from global scope
		global $database;
		
		// Sanitize user input
		$title = $database->sanitize($this->title);
		$content = $database->sanitize($this->content);
	
		// Build database query
		$sql = sprintf("insert into post (title, content) values ('%s', '%s')", $title, $content);
				
		// Execute data manipulation
		return $database->execute($sql);	
	}

	public function update() {

		// Get database object from global scope
		global $database;
		
		// Sanitize user input
		$id = (int)$this->id;
		$title = $database->sanitize($this->title);
		$content = $database->sanitize($this->content);
	
		// Build database query	
		$sql = sprintf("update post set title = '%s', content = '%s' where id = %d", $title, $content, $id);
		
		// Execute data manipulation
		return $database->execute($sql);
		
	}

	public function delete() {

		// Get database object from global scope
		global $database;
	
		// Sanitize user input
		$id = (int)$this->id;
		
		// Build database query
		$sql = sprintf("delete from post where id = %d limit 1", $id);

		// Execute data manipulation
		return $database->execute($sql);	
	}
	
	public function save() {
	
		// Check object for id
		if (isset($this->id)) {	
		
			// Return update when id exists
			return $this->update();
			
		} else {
		
			// Return insert when id does not exists
			return $this->insert();
		}
	}	
}
<!-- 
 * THIS IS EXECUTE FILE, is used to delete from database. SQL is written in this file. Connection in "connect.php"
 * AgriExtension
 * File: 	access_delete.php
 * Written: Nguyen Ngoc Duy
 * Date: Sep 20 2015
 -->
 
 
<?php

class Delete_ {
	
	// TODO: Delete User_ by id
	// Hai
	static function User($id) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Delete Article by id
	// Duc
	static function Article($id) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Delete Crop by id
	// Chau
	static function Crop($id) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Delete Crop Catagory by id
	// Chau
	static function Crop_Cat($id) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Dlete Catagory by id
	// Duy
	static function Catagory($id) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Delete Files by id
	// Chuong
	static function Files($id) {
		$sql = "DELETE FROM files WHERE id=".$id;
		
		return $DB_Conn->query($sql);
		//return true; // True if success, False if not
	}
}
?>
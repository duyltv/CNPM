<!-- 
 * THIS IS EXECUTE FILE, is used to update to database. SQL is written in this file. Connection in "connect.php"
 * AgriExtension
 * File: 	access_update.php
 * Written: Nguyen Ngoc Duy
 * Date: Sep 20 2015
 -->
 
 
 <?php

class Update_ {
	/*
	 * Interface functions
	 */
	static function User($id,$name,$pass,$first_name,$last_name,$banned,$group,$capabilities,$meta) {
		// Set arguments for object
		$User_Object = new User_();
		$User_Object->$id = $id;
		$User_Object->$name = $name;
		$User_Object->$pass = $pass;
		$User_Object->$first_name = $first_name;
		$User_Object->$last_name = $last_name;
		$User_Object->$banned = $banned;
		$User_Object->$group = $group;
		$User_Object->$capabilities = $capabilities;
		$User_Object->$meta = $meta;
		
		// Update
		return User_Update($User_Object);
	}
	
	static function Article($id,$catagory_id,$title,$content,$status,$writter_id) {
		// Set arguments for object
		$Article_Object = new Article_();
		$Article_Object->$id = $id;
		$Article_Object->$catagory_id = $catagory_id;
		$Article_Object->$title = $title;
		$Article_Object->$content = $content;
		$Article_Object->$status = $status;
		$Article_Object->$writter_id = $writter_id;
		
		// Update
		return Article_Update($Article_Object);
	}
	
	static function Crop_Cat($id,$crop_category_name,$crop_category_title,$crop_category_parent) {
		// Set arguments for object
		$Crop_Cat_Object = new Crop_Cat_();
		$Crop_Cat_Object->$id = $id;
		$Crop_Cat_Object->$crop_category_name = $crop_category_name;
		$Crop_Cat_Object->$crop_category_title = $crop_category_title;
		$Crop_Cat_Object->$crop_category_parent = $crop_category_parent;
		
		// Update
		return Crop_Cat_Update($Crop_Cat_Object);
	}
	
	static function Crop($id,$crop_name,$crop_title,$crop_description,$crop_category,$crop_status,$crop_author,$meta) {
		// Set arguments for object
		$Crop_Object = new Crop_();
		$Crop_Object->$id = $id;
		$Crop_Object->$crop_name = $crop_name;
		$Crop_Object->$crop_title = $crop_title;
		$Crop_Object->$crop_description = $crop_description;
		$Crop_Object->$crop_category = $crop_category;
		$Crop_Object->$crop_status = $crop_status;
		$Crop_Object->$crop_author = $crop_author;
		$Crop_Object->$meta = $meta;
		
		// Update
		return Crop_Update($Crop_Object);
	}
	
	static function Catagory($id,$name,$parrent_id) {
		// Set arguments for object
		$Catagory_Object = new Catagory_();
		$Catagory_Object->$id = $id;
		$Catagory_Object->$name = $name;
		$Catagory_Object->$parrent_id = $parrent_id;
		
		// Update
		return Catagory_Update($Catagory_Object);
	}
	
	static function Files($id,$name,$url,$type_id,$typename) {
		// Set arguments for object
		$Files_Object = new Files_();
		$Files_Object->$id = $id;
		$Files_Object->$name = $name;
		$Files_Object->$url = $url;
		$Files_Object->$type_id = $type_id;
		$Files_Object->$typename = $typename;
		
		// Update
		return Files_Update($Files_Object);
	}
	
	/*
	 * Main functions
	 */
	// TODO: Update user to table
	// Hai
	private function User_Update($User_Object) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Update article to table
	// Duc
	private function Article_Update($Article_Object) {
		$sql = "UPDATE articles SET catagory_id=$Article_Object->catagory_id,
									title=$Article_Object->title
									content=$Article_Object->content
									status=$Article_Object->status
									writter_id=$Article_Object->writter_id WHERE id=$Article_Object->id";
		if (mysqli_query($DB_Conn, $sql)) {
		    echo "Record updated successfully";
		} else {
		    echo "Error updating record: " . mysqli_error($DB_Conn);
		    return false;
		}
		return true; // True if success, False if not
	}
	
	// TODO: Update crop catagory to table
	// Chau
	private function Crop_Cat_Update($Crop_Cat_Object) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Update crops to table
	// Chau
	private function Crop_Update($Crop_Object) {
		
		return true; // True if success, False if not
	}
	
	// TODO: Update catagory to table
	// Duy
	private function Catagory_Update($Catagory_Object) {
		$id = $Catagory_Object->id;
		$name = $Catagory_Object->name;
		$parrent_id = $Catagory_Object->parrent_id;
		
		$sql = "UPDATE catagories SET name='".$name."',parrent_id='".$parrent_id."' WHERE id='".$id."';"; // Query string
		$result = $DB_Conn->query($sql);
		return $result; // True if success, False if not
	}
	
	// TODO: Update file to table
	// Chuong
	private function Files_Update($Files_Object) {
		
		return true; // True if success, False if not
	}
}

?>
<?php
/**
 *
 * @author Pardha Saradhi Nimmagadda
 *        
 */


class Select
{
	
	public function getColoumnCount($tablename){
		$db = new Database;
		$dbh = $db->Connection();
		$stmt = $dbh->prepare("SELECT * FROM ".$tablename."");
		//$result=$stmt->columnCount();
		$stmt->execute();
		$result1=$stmt->columnCount();
		return $result1;
	}
	
	public function getColoumnNamesFromTable($tablename) {
		$db = new Database; // $db is an object for Database class
		$con = $db->connection(); // Creating connection $con using $db object
		try {
			$sql = "DESCRIBE ".$tablename;
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$table_fields = $stmt->fetchAll(PDO::FETCH_COLUMN); // fetches all column names
			return $table_fields;
		}
		catch (Exception $e) {
			return $e;
		}
	}
	public function selectAll($tablename) {
		$db = new Database(); // $db is an object for Database class
		$con = $db->connection(); // Creating connection $con using $db object
		$result = null;
		try {
			$sql = "SELECT * FROM ".$tablename;
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$output = array();
			$output = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetches everything in an array
			return $output;
		}
		catch(Exception $e) {
			return $e;
		}
	}
	
	public function selectWhere($fromtable, $wherecolumn, $columnvalue) {
		$db = new Database(); // $db is an object for Database class
		$con = $db->connection();  // Creating connection $con using $db object
		try {
			$sql = "SELECT * FROM ".$fromtable." WHERE ".$wherecolumn." = ?"; // Using prepated statements for where column value
			$stmt = $con->prepare($sql);
			$stmt->bindParam('1', $columnvalue, PDO::PARAM_INT); // Binding ? value with the sql statement
			$stmt->execute();
			$output = array();
			$output = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetches a row in an array
			//print_r($output);
			return $output;
		}
		catch(Exception $e) {
			return $e;
		}
	}
	
	public function selectLike($fromtable, $wherecolumn, $likevalue) {
		$db = new Database(); // $db is an object for Database class
		$con = $db->connection();  // Creating connection $con using $db object
		try {
			$sql = "SELECT * FROM ".$fromtable." WHERE ".$wherecolumn." LIKE '".$likevalue."%'"; // Using prepated statements for where column value
			$stmt = $con->prepare($sql);
			//$stmt->bindParam('1', $likevalue, PDO::PARAM_INT); // Binding ? value with the sql statement
			$stmt->execute();
			$output = array();
			$output = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetches a row in an array
			//print_r($output);
			return $output;
		}
		catch(Exception $e) {
			return $e;
		}
	}
	
	
	Public function selectAutoIncrement($tablename){
	
$db = new Database(); // $db is an object for Database class
		$con = $db->connection(); // Creating connection $con using $db object
		$result = null;
		try {

			$sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA ='a_t' AND TABLE_NAME = '".$tablename."'";
			//echo $sql;
			$stmt = $con->prepare($sql);
			$stmt->execute();
			//$output = array();
			$output = $stmt->fetch(PDO::FETCH_ASSOC); // fetches everything in an array
			
			return $output;
		}
		catch(Exception $e) {
			return $e;
		}
	}
	Public function selectRandom($tablename){
	
$db = new Database(); // $db is an object for Database class
		$con = $db->connection(); // Creating connection $con using $db object
		$result = null;
		try {

			$sql = "SELECT * FROM ".$tablename." ORDER BY RAND() LIMIT 4";
			//echo $sql;
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$output = array();
			$output = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetches everything in an array
			
			return $output;
		}
		catch(Exception $e) {
			return $e;
		}
	}
	
}

?>
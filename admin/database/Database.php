<?php
/**
 *
 * @author Pardha Saradhi Nimmagadda
 *        
 */

class Database {
	public  $dbhost = "mysql:dbname=peroneira;host=localhost:3306";
	public  $dbuser = "root";
	public  $dbpass = "root";
	public  $dbname = "peroneira";
	public  $connection;
	public  $selectdb;
	public  $isConnected;
	public  $dbh;
	
	//$user = 'dbuser';
	//$password = 'dbpass';
	
	public function Connection()
	{
		try
		{	
			 $this->dbh = new PDO($this->dbhost, $this->dbuser, $this->dbpass);
			 //echo "true";
				return  $this->dbh;
		}
		catch(Exception $e)
		{ 
                $this->isConnected = false;
                throw new Exception($e->getMessage());
        }
	}
	
	public function Disconnect()
	{
		$this->datab = null;
		$this->isConnected = false;
	}
}
?>


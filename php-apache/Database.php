<?php
class Database {
	public static $db;
	public static $con;
	function Database(){$this->user=getenv('DATABASE_ENV_MYSQL_USER');$this->pass=getenv('DATABASE_ENV_MYSQL_PASSWORD');$this->host=getenv('DATABASE_PORT_3306_TCP_ADDR');$this->ddbb=getenv('DATABASE_ENV_MYSQL_DATABASE');
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>

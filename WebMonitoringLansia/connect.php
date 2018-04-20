<?php
class func_sql
{
	function con()
	{
		
		$databaseHost ="localhost";
		$databaseName = "monitoring_lansia";
		$databaseUser = "root";
		$databasePassword = "";
		$databaseConnect = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUser, $databasePassword);
		$databaseConnect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $databaseConnect;
		
	}

	static function count_data($table,$where){
			$dbcon = self::con();
			$query = $dbcon->query("SELECT COUNT(*) FROM $table WHERE $where")->fetchColumn();
			return $query;exit();
	}

}
?>

<?php
	set_time_limit(0);
	date_default_timezone_set("Asia/Manila");
	$mydate = date("Y-m-d");
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

	$connection = mysqli_connect("localhost", "root", "", "dnsnsm");
	if(mysqli_connect_errno())
	{ die("Could not connect: " . mysqli_connect_error()); }

	function generateID($connection, $field, $table, $prefix)
	{
		$sql = "SELECT " . $field . " FROM " . $table . " WHERE " . $field . " LIKE '%" . $prefix . "%' ORDER BY " . $field . " DESC LIMIT 1";
		$res = mysqli_query($connection, $sql);
		$sqlarr = mysqli_fetch_array($res);

		$auto = $sqlarr[0];

		return str_pad(($auto + 1), 12, '407338150400', STR_PAD_LEFT);
	}

	function generateID2($connection, $field, $table, $prefix){
		$sql = "SELECT " . $field . " FROM " . $table . " WHERE " . $field . " LIKE '%" . $prefix . "%' ORDER BY " . $field . " DESC LIMIT 1";
		$res = mysqli_query($connection, $sql);
		$sqlarr = mysqli_fetch_array($res);

		$auto = explode('-', $sqlarr[0])[1];

		return $prefix . "-" . str_pad(($auto + 1), 6, '0', STR_PAD_LEFT);
	}
?>


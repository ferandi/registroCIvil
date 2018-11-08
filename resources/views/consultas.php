<?php
$serverName = "BTS\sqlexpress";
$connectionInfo = array( "Database"=>"RC", "UID"=>"BTS", "PWD"=>"BTS" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM bts.CAMPO";
$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
?>
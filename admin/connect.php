<?php 

$connection = mysql_connect("localhost", "root", "") or die(mysql_error());
$rc = mysql_select_db('baza_librarie', $connection);
if (!$rc) {
    die ('Can\'t use  : ' . mysql_error());
}	

?>
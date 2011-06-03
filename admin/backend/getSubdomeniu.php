<?php


//get the q parameter from URL
$iddomeniu=$_GET["id"];

include('../connect.php');

$response="";

$qry = mysql_query("SELECT * from subdomeniu where iddomeniu=".$iddomeniu." ORDER BY denumire");
if (! $qry)
    $response = "ERROR: " . mysql_error ();
else {
    while($row = mysql_fetch_array($qry)){
		echo "<option value=".$row['id'].">". $row['denumire']."</option>";
    }
}
/*else {
    while($row = mysql_fetch_array($qry)) {
        if ($response != "" )
            $response .= ",";
        $response.= "{optionValue: ". $row['id'].", optionDisplay : '".$row['denumire']."'}";
        
    }
}

echo <<<HERE_DOC
[ $response ]
HERE_DOC;
*/
?>

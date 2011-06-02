<?php include('../connect.php');?>
<?php 

$ur = explode('?',$unde);

$url = explode('&',$ur[1]);


if($url[0] != "exec=adauga_subdomeniu"){
$unde1 = 'index.php?salveaza_subdomeniu';
}else{
if(strstr($unde,'salveaza_subdomeniu') == false){
$unde1 = $unde.'&salveaza_subdomeniu';
}else{
$unde1=$unde;
}
}

if (isset($_GET['mod']))
	$mod = $_GET['mod'];

if ($mod > 0) {
	$id = $mod;
	$get_subdomeniu = "SELECT * from baza_librarie.subdomeniu where id=". $id;
	$rc = mysql_query($get_subdomeniu);
	$row = mysql_fetch_array($rc);
	$denumire = $row['denumire'];
	$idDomeniu = $row['idDomeniu'];
	//$origine = $row['origine'];
	$unde1.='&id='.$id.'';
}

?>
<form action="<?php echo $unde1?>" method="post">
 
	Denumire: 	<input type="text" name="denumire" <?php if(isset($denumire)) echo 'value="'.$denumire.'"';?> /><br/>
	
	
	<input type="submit" value="salveaza"/>
	

</form>

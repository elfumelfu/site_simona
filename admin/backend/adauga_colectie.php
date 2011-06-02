<?php include('../connect.php');?>
<?php 

$ur = explode('?',$unde);

$url = explode('&',$ur[1]);


if($url[0] != "exec=adauga_colectie"){
$unde1 = 'index.php?salveaza_colectie';
}else{
if(strstr($unde,'salveaza_colectie') == false){
$unde1 = $unde.'&salveaza_colectie';
}else{
$unde1=$unde;
}
}

if (isset($_GET['mod']))
	$mod = $_GET['mod'];

if ($mod > 0) {
	$id = $mod;
	$get_colectie = "SELECT * from baza_librarie.carte where id=". $id;
	$rc = mysql_query($get_colectie);
	$row = mysql_fetch_array($rc);
	$colectie = $row['colectie'];
	//$prenume = $row['prenume'];
	//$origine = $row['origine'];
	$unde1.='&id='.$id.'';
}

?>
<form action="<?php echo $unde1?>" method="post">
 
	Colectie: 	<input type="text" name="colectie" <?php if(isset($colectie)) echo 'value="'.$colectie.'"';?> /><br/>
	
	
	<input type="submit" value="salveaza"/>
	

</form>

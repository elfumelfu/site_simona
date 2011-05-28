<?php include('../connect.php');?>
<?php 

$ur = explode('?',$unde);

$url = explode('&',$ur[1]);


if($url[0] != "exec=adauga_carte"){
$unde1 = 'index.php?salveaza_autor';
}else{
if(strstr($unde,'salveaza_autor') == false){
$unde1 = $unde.'&salveaza_autor';
}else{
$unde1=$unde;
}
}

if (isset($_GET['mod']))
	$mod = $_GET['mod'];

if ($mod > 0) {
	$id = $mod;
	$get_autor = "SELECT * from baza_librarie.autor where id=". $id;
	$rc = mysql_query($get_autor);
	$row = mysql_fetch_array($rc);
	$nume = $row['nume'];
	$prenume = $row['prenume'];
	$origine = $row['origine'];
	$unde1.='&id='.$id.'';
}

?>
<form action="<?php echo $unde1?>" method="post">
 
	Nume: 	<input type="text" name="nume" <?php if(isset($nume)) echo 'value="'.$nume.'"';?> /><br/>
	Prenume:<input type="text" name="prenume" <?php if(isset($prenume)) echo 'value="'.$prenume.'"';?>/><br/>
	Origine:<input type="text" name="origine" <?php if(isset($origine)) echo 'value="'.$origine.'"';?>/><br/>
	<input type="submit" value="salveaza"/>
	

</form>

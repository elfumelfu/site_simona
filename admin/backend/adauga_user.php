<?php include('../connect.php');?>
<?php 

$ur = explode('?',$unde);

$url = explode('&',$ur[1]);


if($url[0] != "exec=adauga_user"){
$unde1 = 'index.php?salveaza_user';
}else{
if(strstr($unde,'salveaza_user') == false){
$unde1 = $unde.'&salveaza_user';
}else{
$unde1=$unde;
}
}

if (isset($_GET['mod']))
	$mod = $_GET['mod'];

if ($mod > 0) {
	$id = $mod;
	$get_user = "SELECT * from baza_librarie.user where id=". $id;
	$rc = mysql_query($get_user);
	$row = mysql_fetch_array($rc);
	$nume = $row['nume'];
	$prenume = $row['prenume'];
	$email = $row['email'];
    $parola = $row['parola'];
	$unde1.='&id='.$id.'';
}

?>
<form action="<?php echo $unde1?>" method="post">
 
	Nume: 	<input type="text" name="nume" <?php if(isset($nume)) echo 'value="'.$nume.'"';?> /><br/>
	Prenume: 	<input type="text" name="prenume" <?php if(isset($prenume)) echo 'value="'.$prenume.'"';?> /><br/>
    Email: 	<input type="text" name="email" <?php if(isset($email)) echo 'value="'.$email.'"';?> /><br/>
    Parola: 	<input type="text" name="parola" <?php if(isset($parola)) echo 'value="'.$parola.'"';?> /><br/>
	
	<input type="submit" value="salveaza"/>
	

</form>



<link rel="stylesheet" type="text/css" href="stylesheet.css" >
<?php include('../connect.php');



$ur = explode('?',$unde);

$url = explode('&',$ur[1]);


if($url[0] != "exec=adauga_carte"){
$unde1 = 'index.php?salveaza_editura';
}else{
if(strstr($unde,'salveaza_editura') == false){
$unde1 = $unde.'&salveaza_editura';
}else{
$unde1=$unde;
}
}

if (isset($_GET['mod']))
	$mod = $_GET['mod'];

if ($mod > 0) {
	$id = $mod;
	$get_autor = "SELECT * from baza_librarie.editura where id=". $id;
	$rc = mysql_query($get_autor);
	$row = mysql_fetch_array($rc);
	$denumire = $row['denumire'];
	$localitate = $row['localitate'];
	$nrtelefon = $row['nrtelefon'];
	$email = $row['email'];
	$unde1.='&id='.$id.'';
}

?>

<div class="content_wrapper_br">
<form action="<?php echo $unde1;?>" method="post">
 
	Denumire: 			<input type="text" name="denumire" <?php if(isset($denumire)) echo 'value="'.$denumire.'"';?> /><br/>
	Localitate:     	<input type="text" name="localitate" <?php if(isset($localitate)) echo 'value="'.$localitate.'"';?> /><br/>
	Numar de telefon:   <input type="text" name="numar_telefon" <?php if(isset($nrtelefon)) echo 'value="'.$nrtelefon.'"';?> /><br/>
	Email: 				<input type="text" name="email" <?php if(isset($email)) echo 'value="'.$email.'"';?>/><br/>
	<input type="submit" value="salveaza"/>
	

</form>
</div>
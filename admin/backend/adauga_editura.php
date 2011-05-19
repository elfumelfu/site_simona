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

?>


<form action="<?php echo $unde1;?>" method="post">
 
	Denumire: 			<input type="text" name="denumire"/><br/>
	Localitate:     	<input type="text" name="localitate"/><br/>
	Numar de telefon:   <input type="text" name="numar_telefon"/><br/>
	Email: 				<input type="text" name="email"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>

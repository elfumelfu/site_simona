<?php include('../connect.php');
$ur = explode('?',$unde);
var_dump($ur);


if($ur[1] != "exec=adauga_carte"){
$unde1 = 'index.php?salveaza_editura';
}else{
$unde1 = $unde.'&salveaza_editura';
}
//echo $unde1;
?>


<form action="<?php echo $unde1;?>" method="post">
 
	Denumire: 			<input type="text" name="denumire"/><br/>
	Localitate:     	<input type="text" name="localitate"/><br/>
	Numar de telefon:   <input type="text" name="numar_telefon"/><br/>
	Email: 				<input type="text" name="email"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>

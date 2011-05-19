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

?>
<form action="<?php echo $unde1?>" method="post">
 
	Nume: 	<input type="text" name="nume"/><br/>
	Prenume:<input type="text" name="prenume"/><br/>
	Origine:<input type="text" name="origine"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>

<?php include('../connect.php');?>
<?php 

$ur = explode('?',$unde);
var_dump($ur);

echo '<br/>';
if($ur[1] != "exec=adauga_carte"){
$unde1 = 'index.php?salveaza_autor';
}else{
$unde1 = $unde.'&salveaza_autor';
}

?>
<form action="<?php echo $unde1?>" method="post">
 
	Nume: 	<input type="text" name="nume"/><br/>
	Prenume:<input type="text" name="prenume"/><br/>
	Origine:<input type="text" name="origine"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>

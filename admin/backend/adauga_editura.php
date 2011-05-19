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
<<<<<<< HEAD
=======
<?php 
if(isset($_GET['salveaza'])){
$inserare_editura="INSERT INTO `baza_librarie`.`editura` (
`id` ,
`denumire` ,
`localitate` ,
`nrtelefon` ,
`email`
)
VALUES (
NULL , '".$_POST['denumire']."', '".$_POST['localitate']."', '".$_POST['numar_telefon']."', '".$_POST['email']."')";
mysql_query($inserare_editura);
}


//var_dump($_POST);?>
>>>>>>> 77b1c2f8c66e6de7bc125ca8cce3bd35fdc729f4

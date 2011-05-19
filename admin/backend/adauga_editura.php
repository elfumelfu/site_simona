<?php include('../connect.php');?>
<form action="index.php?adauga_editura&salveaza" method="post">
 
	Denumire: 			<input type="text" name="denumire"/><br/>
	Localitate:     	<input type="text" name="localitate"/><br/>
	Numar de telefon:   <input type="text" name="numar_telefon"/><br/>
	Email: 				<input type="text" name="email"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>
<?php 
if(isset($_GET['salveaza'])){
echo $inserare_editura="INSERT INTO `baza_librarie`.`editura` (
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
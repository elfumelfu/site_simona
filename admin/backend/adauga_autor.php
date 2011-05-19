<?php include('../connect.php');?>
<form action="index.php?adauga_autor&salveaza" method="post">
 
	Nume: 	<input type="text" name="nume"/><br/>
	Prenume:<input type="text" name="prenume"/><br/>
	Origine:<input type="text" name="origine"/><br/>
	<input type="submit" value="salveaza"/>
	

</form>
<?php 



var_dump($_POST);?>
<form method="post" action="index.php?exec=adauga_carte&salveaza">
	<pre>ISBN: <input name="isbn" type="text"/></pre>
	<pre>Titlu: <input name="titlu" value="" type="text"/></pre>
	<pre>Autor: 
<script>
$(document).ready(function()
{
$('#add').click(function() {
							$('#autor option:selected').appendTo('#selected_autor');
						    })
$('#delete').click(function() {
							$('#selected_autor option:selected').appendTo('#autor');
							})
})

</script>
	
<?php $select_autor = mysql_query("SELECT * FROM `baza_librarie`.`autor`");	?>
			<select name="autor" id="autor" multiple="multiple" size="10" style="float:left;width:200px">
			<?php while($autor = mysql_fetch_array($select_autor)){?>
			<?php var_dump($autor)?>
				<option><?php echo  $autor['prenume'].' '.$autor['nume']?></option>
			<?php }?>
			</select>
			<input id="add" value=">>" type="button"/>
			<input id="delete" value="<<" type="button"/>
			<select name="selected_autor[]" id="selected_autor" multiple="multiple" size="10" style="width:200px">
			</select>
	<a href="index.php?exec=adauga_autor">Adauga autor</a>
	</pre>
	<pre>Editura: 
	
	<?php $select_editura = mysql_query("SELECT * FROM `baza_librarie`.`editura`");	?>
			<select name="editura" style="float:left;">
			<?php while($editura = mysql_fetch_array($select_editura)){?>
				<option <?php if(isset($_POST['denumire']) && $_POST['denumire'] == $editura['denumire']){ echo "selected='selected'"; }?>>
					<?php 
					
					echo  $editura['denumire']
					
					?>
				</option>
			<?php }?>
			</select>
	<a href="index.php?exec=adauga_editura">Adauga editura</a>
	</pre>
	<input onclick='$("#selected_autor option").attr("selected","selected");' type="submit" value="Salveaza"/>
</form>

<?php 


	if(isset($_GET['salveaza'])){
	
	$select_editura_insert = mysql_query("SELECT * FROM `baza_librarie`.`editura` where `denumire` = '".$_POST['editura']."' ");
while($editura_insert = mysql_fetch_array($select_editura_insert)){
$editura =  $editura_insert['id'];

}


$insert_carte ="
		INSERT INTO `baza_librarie`.`carte` 
		(`isbn`, `titlu`, `colectie`, `ideditura`, `nrpag`, `pret`, `nrbuc`, `limba`, `anaparitie`, `descriere`, `imagine`) 
		VALUES  
		('".$_POST['isbn']."', '".$_POST['titlu']."', '',  '".$editura."', '', '', '', '', '', '', '')		
		";
		
		
	mysql_query($insert_carte);
foreach($_POST['selected_autor'] as $aut){


$nume_prenume = explode(' ',$aut);
$select_autor_insert = mysql_query("SELECT * FROM `baza_librarie`.`autor` where `nume` = '".$nume_prenume[0]."' and `prenume` = '".$nume_prenume[1]."' ");
while($autor_insert = mysql_fetch_array($select_autor_insert)){
$autor =  $autor_insert['id'];


$insert_autor_carte = "INSERT INTO `baza_librarie`.`autorcarte` (`idautor` ,`idcarte`)VALUES ('".$autor."', '".$_POST['isbn']."');";
mysql_query($insert_autor_carte);
}
}
}
//var_dump($_POST);


?>
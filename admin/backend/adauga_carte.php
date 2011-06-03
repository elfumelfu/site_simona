<script>
    $(document).ready(function()
    {
        $('#add').click(function() {
            $('#autor option:selected').appendTo('#selected_autor');
        })
        $('#delete').click(function() {
            $('#selected_autor option:selected').appendTo('#autor');
        })
        $('#addsubdom').click(function() {
        
        //alert("H"+$.trim($('#subdomeniu option:selected').text())+"H");
        
        var subdom = document.getElementById("subdom");
        
        //alert($subdom.length());
        
        if ($.trim($('#subdomeniu option:selected').text()) != "-" &&
            $('#domeniu option:selected').text() != "" )
            document.getElementById("subdom").innerHTML+="<option value="+
                $('#subdomeniu option:selected').val()+">"+
                $('#domeniu option:selected').text()+
                " -> "+$('#subdomeniu option:selected').text()+"</option>";
        else
            if ($.trim($('#subdomeniu option:selected').text()) == "-" &&
                $('#domeniu option:selected').text() != "" )
            document.getElementById("subdom").innerHTML+="<option value="+
                $('#subdomeniu option:selected').val()+">"+
                $('#domeniu option:selected').text()+"</option>";
         
        })
        $('#delsubdom').click(function() {
        

        if ($('#subdom option:selected').text() != "" )
            $('#subdom option:selected').remove();
        

        })
    })

</script>

<script language="javascript">
function showSubdomenii(str)
{
if (str=="")
  {
  document.getElementById("subdomeniu").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("subdomeniu").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getSubdomeniu.php?id="+str,true);
xmlhttp.send();
}
</script>
</script>


<form name="add_carte" method="post" action="index.php?exec=adauga_carte&salveaza">
	<pre>ISBN: <input name="isbn" type="text"/></pre>    Imagine!!!!
	<pre>Titlu: <input name="titlu" value="" type="text"/></pre>
	<pre>Autor: </pre> 

<div id="txtHint"> </div>

<?php $select_autor = mysql_query("SELECT * FROM `baza_librarie`.`autor`");	?>
			<select name="autor" id="autor" multiple="multiple" size="10" style="float:left;width:200px">
			<?php while($autor = mysql_fetch_array($select_autor)){?>
			<?php var_dump($autor)?>
				<option><?php echo  $autor['prenume'].' '.$autor['nume']?></option>
			<?php }?>
			</select>
<div style="float:left;width:100px;" class="add_del">
			<input id="add" value=">>" type="button"/>
			<input id="delete" value="<<" type="button"/>
                        </div>
<div style="float:left;width:200px;">
			<select name="selected_autor[]" id="selected_autor" multiple="multiple" size="10" style="width:200px;float:left;display:inline;">
			</select>
    </div>
<div style="clear:both"></div>
	<a href="index.php?exec=adauga_autor">Adauga autor</a>
	<br><br>
		Editura: <?php $select_editura = mysql_query("SELECT * FROM `baza_librarie`.`editura`");	?>
			<select name="editura" >
			<?php while($editura = mysql_fetch_array($select_editura)){?>
				<option <?php if(isset($_POST['denumire']) && $_POST['denumire'] == $editura['denumire']){ echo "selected='selected'"; }?>>
					<?php 
					
					echo  $editura['denumire'];
					
					?>
				</option>
			<?php }?>
			</select><a href="index.php?exec=adauga_editura">Adauga editura</a><br>

    
    
    <br><br><br>
     Domeniu:
            <?php $qry = mysql_query("SELECT * FROM `baza_librarie`.`domeniu` ORDER BY denumire");	?>
			<select name="domeniu" id="domeniu" onchange="showSubdomenii(this.value)" size="10" onclick="showSubdomenii(this.value)">
            <?php while($row = mysql_fetch_array($qry)){?>
				<option value="<?php echo $row['id'];	?>">
                    <?php echo $row['denumire']; ?>
				</option>
			<?php }?>
			</select>        
    Subdomeniu:
            <?php $qry = mysql_query("SELECT * FROM `baza_librarie`.`subdomeniu` WHERE 
                                 iddomeniu=(SELECT id FROM domeniu ORDER BY denumire LIMIT 1) ORDER BY denumire"  );	
                  if(! $qry )
                      echo "QUERY ERROR: ". mysql_error();
                  
            ?>
    
            <select name="subdomeniu" id="subdomeniu" size="10">
                <?php while($row = mysql_fetch_array($qry)){?>
                <option value="<?php echo $row['id'];	?>">
                    <?php echo $row['denumire']; ?>
				</option>
                <?php }?>
            </select>
            <input id="addsubdom" onclick="addSubdomeniu()" value="+" type="button">    
    <select name="subdom" id="subdom" size="5" style="width: 250px;"></select>
    <input id="delsubdom" onclick="delSubdomeniu()" value="-" type="button">    </br>
    <br><br><br>
    
    Pret: <input name="pret" type="text"/> <br>
	Reducere(procente): <input name="reducere" type="text"/><br>

	Numar de pagini: <input name="nrpag" type="text"/><br>

	Numar de bucati: <input name="nrbuc" type="text"/><br>

	Anul aparitiei: <input name="anaparitie" type="text"/><br>

	Limba: <input name="limba" type="text"/><br>

	Descriere: <br>
    <textarea name="descriere"  rows="3" cols="8" style="resize:none"> </textarea>
	
	
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
		(`isbn`, `titlu`, `ideditura`, `nrpag`, `pret`, `reducere`, `nrbuc`, `limba`, `anaparitie`, `descriere`, `imagine`) 
		VALUES  

		('".$_POST['isbn']."', '".$_POST['titlu']."',  '".$editura."', '', '', '', '', '', '', '', '')		
		";
		
		
	$rc = mysql_query($insert_carte);
      if (! $rc ) {
          echo "INVALID INSERT : ". mysql_error();
      }
foreach($_POST['selected_autor'] as $aut){

$nume_prenume = explode(' ',$aut);


$autor_insert =  "SELECT * FROM `baza_librarie`.`autor` where `nume` = '".$nume_prenume[1]."' and `prenume` = '".$nume_prenume[0]."' ";
$select_autor_insert = mysql_query($autor_insert);

if (!$select_autor_insert) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $autor_insert;
    die($message);
}

while($autor_insert = mysql_fetch_array($select_autor_insert)){
$autor =  $autor_insert['id'];

var_dump($_POST['isbn']);
$insert_autor_carte = "INSERT INTO `baza_librarie`.`autorcarte` (`idautor` ,`idcarte`)VALUES ('".$autor."', '".$_POST['isbn']."');";
$result = mysql_query($insert_autor_carte);
if (!$result) {
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $insert_autor_carte;
    die($message);
}
}
}
}
//var_dump($_POST);
//07

?>
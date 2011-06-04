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


<form name="add_carte" method="post" enctype="multipart/form-data" action="index.php?exec=adauga_carte&salveaza">
	<table border=2>
	<tr>
		<td style="padding: 2px;">
                    
                    
                    <label class="label_right">ISBN:</label>  <div class="input-box right"> <input name="isbn" type="text"/></div>
		</td>
        <td  rowspan=3><label class="label_right">Autor: </label>
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
            
		</td>
	</tr>
	<tr>
		<td><label class="label_right">Titlu:</label><div class="input-box right"> <input name="titlu" value="" type="text"/></div>
		</td>
	</tr>
        
	<tr>	
		<td><div class="input-box right"><input type="file" name="poza"/></div></pre>
		</td>
	</tr>
	<tr>
		<td>Editura: <?php $select_editura = mysql_query("SELECT * FROM `baza_librarie`.`editura`");	?>
			<select name="editura" >
			<?php while($editura = mysql_fetch_array($select_editura)){?>
				<option <?php if(isset($_POST['denumire']) && $_POST['denumire'] == $editura['denumire']){ echo "selected='selected'"; }?>>
					<?php 
					
					echo  $editura['denumire'];
					
					?>
				</option>
			<?php }?>
			</select><a href="index.php?exec=adauga_editura">Adauga editura</a><br>
		</td>
		<td rowspan=4>    
			<table>
				<tr>
					<td>Domeniu:
					</td>
					
					<td>Subdomeniu:
					</td>
					<td>bbb
					</td>
					<td>cccc
					</td>
		         <tr>
					<td>
						<?php $qry = mysql_query("SELECT * FROM `baza_librarie`.`domeniu` ORDER BY denumire");	?>
						<select name="domeniu" id="domeniu" onchange="showSubdomenii(this.value)" size="7" onclick="showSubdomenii(this.value)">
						<?php while($row = mysql_fetch_array($qry)){?>
						<option value="<?php echo $row['id'];	?>">
						<?php echo $row['denumire']; ?>
						</option>
						<?php }?>
						</select>  
					</td>
					
					<td><?php $qry = mysql_query("SELECT * FROM `baza_librarie`.`subdomeniu` WHERE 
                                 iddomeniu=(SELECT id FROM domeniu ORDER BY denumire LIMIT 1) ORDER BY denumire"  );	
                  if(! $qry )
                      echo "QUERY ERROR: ". mysql_error();
                  
            ?>
    
            <select name="subdomeniu" id="subdomeniu" size="7">
                <?php while($row = mysql_fetch_array($qry)){?>
                <option value="<?php echo $row['id'];	?>">
                    <?php echo $row['denumire']; ?>
				</option>
                <?php }?>
            </select>
					</td>
					<td><input id="addsubdom" onclick="addSubdomeniu()" value="+" type="button"> 
					</td>
					<td><select name="subdom" id="subdom" size="5" style="width: 200px;"></select>
					</td>
					<td><input id="delsubdom" onclick="delSubdomeniu()" value="-" type="button">  
					</td>
			<tr>
				<td>Adauga domeniu:
				</td>
				<td>Adauga subdomeniu:
				</td>
				<td>
				</td>
				<td>
				</td>
			</tr>
        	</table>
		</td>
	</tr>
    <tr>
		<td>Pret: <input name="colectie" type="text"/>
		</td>
	</tr>
	<tr>
		<td>Anul aparitiei: <input name="anaparitie" type="text"/>
		</td>
	</tr>
	<tr>
		<td>Limba: <input name="limba" type="text"/>
		</td>
	</tr>
	<tr>
		<td>Numar de pagini: <input name="nrpag" type="text"/>
		</td>
		<td rowspan=4>Descriere: <br>
		<textarea name="descriere"  rows="3" cols="8" style="resize:none"> </textarea>
		</td>
	</tr>
	<tr>
		<td>Numar de bucati: <input name="nrbuc" type="text"/>
		</td>
	</tr>
	<tr>
		<td>Pret: <input name="pret" type="text"/>
		</td>
	</tr>
	<tr>
		<td>Reducere(procente): <input name="reducere" type="text"/>
		</td>
	</tr>
</table>
	
	

	

	

	
	
	
	<input onclick='$("#selected_autor option").attr("selected","selected");' type="submit" value="Salveaza"/>
</form>

<?php 


	if(isset($_GET['salveaza'])){
	
	$select_editura_insert = mysql_query("SELECT * FROM `baza_librarie`.`editura` where `denumire` = '".$_POST['editura']."' ");
while($editura_insert = mysql_fetch_array($select_editura_insert)){
$editura =  $editura_insert['id'];

}










function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
/*function a($x){
	
	echo $x;
	
	
	}
	a('buhuhu');*/
$tip = getExtension($_FILES['poza']['name']);
$correct_type = array( 'png', 'jpg', 'jpeg');


//var_dump($tip);
//var_dump($correct_type);
	if(in_array($tip, $correct_type)){
	        
			//numele pozei
				$img_name = $_FILES['poza']['name'];
			//numele pozei
			
			//un sir de caractere generat pentru a nu se suprascrie pozele
				$unique = uniqid();
			//un sir de caractere generat pentru a nu se suprascrie pozele
			
			//noul nume + locatie poza
				$new_img = 'images/'.$unique.$_FILES['poza']['name'];
			//noul nume + locatie poza
			
			//copiere imagine
				//$copied = copy($_FILES['poza']['tmp_name'], $new_img);
			//copiere imagine
			
	move_uploaded_file($_FILES['poza']['tmp_name'], $new_img);		
	}else{
		echo 'fisierul pe care l-ati introdus nu este o imagine';
	}


//
//		
//<form action="index.php?post_pic" enctype="multipart/form-data" method="post">
//<input type="file" name="poza"/>
//<input type="submit" value="trimite"/>
//
//
//</form






$insert_carte ="
		INSERT INTO `baza_librarie`.`carte` 
		(`isbn`, `titlu`, `ideditura`, `nrpag`, `pret`, `reducere`, `nrbuc`, `limba`, `anaparitie`, `descriere`, `imagine`) 
		VALUES  

		('".$_POST['isbn']."', '".$_POST['titlu']."',  '".$editura."', '', '', '', '', '', '', '', '".$unique.$_FILES['poza']['name']."')		
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

//var_dump($_POST['isbn']);
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
<?php if (!isset($_SESSION['is_logged_in'])):?>

<form style="width: 100%;" method="post" >
        <fieldset>
            <h4>Deja &#238;nregistrat?</h4>
            <p>V&#259; rug&#259;m s&#259; v&#259; &#238;nregistra&#355;i mai jos</p>
            <ul class="form-list">
                <li>
                    <label class="required" ><em>*</em>Adres&#259; de email</label>
                    <div class="input-box">
                        <input type="text" value="" name="username" id="login-email" class="input-text required-entry validate-email">
                    </div>
                </li>
                <li>
                    <label class="required" for="login-password"><em>*</em>Parol&#259;</label>
                    <div class="input-box">
                        <input type="password" name="password" id="login-password" class="input-text required-entry"/>
                    </div>
                </li>
            </ul>
            <input type="submit" value="Autentificare"/>
        </fieldset>
        </form>
<?php else: ?>

<script>
  $(document).ready(function(){
   
	$("#finalizare_comanda").validate();

  
  })
</script>
<form id="finalizare_comanda">
   <fieldset>
       <h4>Informatii facturare:</h4>


<ul class="form-list">
                <li>
<label class="required" >Prenume*:</label>  <div class="input-box"><input type="text"  class="required" minlength="2" name="prenume" id="prenume"/></div>
                </li>
                <li>
<label class="required" >Nume*:</label><div class="input-box"> <input type="text" name="nume" class="required" id="nume"/></div>
                </li>
                <li>
                    <label class="required" >CNP*:</label><div class="input-box"> <input type="text" name="cnp" class="required" minlength="13" id="cnp"/></div>
</li>
                <li>
<label class="required" >Adresa*:</label><div class="input-box"> <input type="text" name="adresa[]" class="required"/></div>
</li>
                <li>
        <div class="input-box">  <input type="text" name="adresa[]" class="required"/></div>
         
<label class="required" >Oras*:</label><div class="input-box"> <input type="text" name="oras" class="required" id="oras"/></div>
</li>
                <li>
<label class="required" >Judet*:</label><div class="input-box"> <input type="text" name="judet" class="required" id="judet"/></div>
</li>
                <li>
<label class="required" >Cod postal:</label><div class="input-box"> <input type="text" name="cod_postal" class="required digits" id="cod_postal"/></div>
</li>
                <li>
<label class="required" >Tara*:</label><div class="input-box"> <input type="text" class="required" name="tara" id="tara"/></div>
</li>
                <li>
<label class="required">Telefon*:</label><div class="input-box"> <input type="text" class="required digits" name="telefon" id="telefon"/></div>
</li>
                <li>





<label class="required">  <h4>Informatii livrare:</h4></label>

</li>
                <li>
<label class="required">Prenume*: </label><div class="input-box"><input type="text" name="prenume" id="prenume"/></div>
</li>
                <li>
<label class="required">Nume*:</label><div class="input-box"><input type="text" name="nume" id="nume"/></div>
</li>
                <li>
<label class="required">CNP:</label><div class="input-box"> <input type="text" name="cnp" id="cnp"/></div>
            </li>
                <li>
<label class="required">Adresa*:</label><div class="input-box"> <input type="text" name="adresa[]" class="adresa"/></div>
</li>
                <li>
                    <div class="input-box"><input type="text" name="adresa[]" class="adresa"/></div>
         </li>
                <li>
<label class="required">Oras*:</label><div class="input-box"> <input type="text" name="oras" id="oras"/></div>
</li>
                <li>
<label class="required">Judet*:</label><div class="input-box"> <input type="text" name="judet" id="judet"/></div>
</li>
                <li>
<label class="required">Cod postal:</label><div class="input-box"> <input type="text" name="cod_postal" id="cod_postal"/></div>
</li>
                <li>
<label class="required">Tara*:</label><div class="input-box"> <input type="text" name="tara" id="tara"/></div>
</li>
                <li>
<label class="required">Telefon*:</label><div class="input-box"> <input type="text" name="telefon" id="telefon"/></div>

</li>
                <li>

<label class="required">
  <h4>Metoda de livrare:</h4>
</label>
</li>
                <li>
                     <label class="required">Posta romana</label><div class="input-box rad"><input type="radio" name="livrare"/></div>
</li>
                <li>
                     <label class="required">Fan courier</label><div class="input-box rad"><input type="radio" name="livrare"/></div>

</li>
                <li>
<label class="required">  <h4>Informatii de plata:</h4></label>
</li>
                <li>

 <label class="required">Ramburs</label> <div class="input-box rad"><input type="radio" name="plata"/></div>
</li>
                <li>
 <label class="required">Paypal</label> <div class="input-box rad" ><input type="radio" name="plata"/></div>

</li>
                <li>
<label class="required"><h4>Revizualizati comanda:</h4></label>
                </li>
 <table>
 
    <tr>
            <td>Titlu</td>
            <td>Numar</td>
            <td>Pret</td>
            <td>Sterge</td>
    </tr>
<?php 
$array_k = array_keys($_SESSION['cart']);
foreach($array_k as $cart_key){
    $select=mysql_query("SELECT * FROM `baza_librarie`.`carte` where isbn = ".$cart_key);
    $cart_obj = mysql_fetch_object($select);
?>

<tr>
    <td>
            <?php echo $cart_obj->titlu?>
    </td>
    <td>
            <?php echo $_SESSION['cart'][$cart_obj->isbn];?>
    </td>
    <td><?php echo $cart_obj->pret?></td>
    <input type="hidden" name="id[]" value="<?php echo $cart_obj->isbn?>"/>
    <td><input type="checkbox" name="sterge[]" value="<?php echo $cart_obj->isbn?>"/></td>
</tr>
    
 
<?PHP
}
//session_unset($_SESSION['cart']['121']);

//var_dump($_POST['sterge']);
?>


</table>
   </fieldset>
    
    <input type="submit" value="Finalizeaza comanda"/>
</form>
<?php endif; ?>

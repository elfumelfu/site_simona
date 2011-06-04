<?php 
if(isset($_SESSION['cart'])):

foreach($_POST as $post){
  
}
if(isset($_GET['id_prod'])){
    if(!isset($_SESSION['cart'][$_GET['id_prod']])){
        $_SESSION['cart'][$_GET['id_prod']] = 0;
    }
    $_SESSION['cart'][$_GET['id_prod']] += 1;
}


    $suma = 0;
    foreach($_SESSION['cart'] as $s){
        $suma += $s;
    }
?>
<strong>Cosul de cumparaturi:</strong>
<span> acum in cosul tau </span><a href="index.php?exec=cos"><?php echo $suma?> carti</a>
   <form method="post" action="index.php?exec=cos&update">
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
            <input type="text" value="<?php echo $_SESSION['cart'][$cart_obj->isbn];?>" name="<?php echo $cart_obj->isbn?>"/>    </td>
    <td><?php echo $cart_obj->pret?></td>
    <input type="hidden" name="id[]" value="<?php echo $cart_obj->isbn?>"/>
    <td><input type="checkbox" name="sterge[]" value="<?php echo $cart_obj->isbn?>"/></td>
</tr>
    
 
<?PHP
}
//session_unset($_SESSION['cart']['121']);

//var_dump($_POST['sterge']);
?>
<tr>
    <td>
        
        <input type="submit" value="Efectueaza modificarile"/>
    </td>
    <td>
        <a href="index.php?exec=finalizare_comanda">Finalizare comanda</a>
    </td>
</tr>

</table>
</form>
<?php else:?>

Nu aveti produse in cos

<?php endif; ?>

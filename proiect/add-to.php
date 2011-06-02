<?php 
session_start();
if(isset($_GET['id_prod'])){
    if(!isset($_SESSION['cart'][$_GET['id_prod']])){
        $_SESSION['cart'][$_GET['id_prod']] = 0;
    }
    $_SESSION['cart'][$_GET['id_prod']] += 1;
}


    $suma = 0;
    foreach($_SESSION['cart'] as $s){
       // var_dump(array_sum($s));
      //  echo $s.'<br/>';
        $suma += $s;
       // echo $suma;
       
       // echo array_sum($s);
    }
     //var_dump($suma);
//array_sum($_SESSION['cart']);
//var_dump($_SESSION['cart']);
?>
<strong>Cosul de cumparaturi:</strong>
<span> acum in cosul tau </span><a href="index.php?exec=cos"><?php echo $suma?> carti</a>
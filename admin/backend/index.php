<?php session_start();?>
<?php 
if(isset($_GET['salveaza_editura'])){
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
<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.12.custom.min.js"></script>
<?php include('../connect.php');?>


<a href="index.php?exec=adauga_carte">Adauga Carte</a><br>
<a href="index.php?exec=adauga_editura">Adauga Editura</a><br>
<a href="index.php?exec=adauga_autor">Adauga Autor</a><br>
<?php 

//breadcrumbs
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//var_dump($url);

if($_SESSION['de_unde'] != $url){
$_SESSION['unde'] = $_SESSION['de_unde'];
$_SESSION['de_unde'] = $url;

}
if(isset($_SESSION['de_unde'])){
$de_unde = $_SESSION['de_unde'];
$unde = $_SESSION['unde'];
}
echo  $_SESSION['de_unde'].'<br>';
echo  $_SESSION['unde'];
//breadcrumbs




//meniul principal pentru admin
if(isset($_GET['exec'])){
switch ($_GET['exec']) {
    case "adauga_carte":
        include('adauga_carte.php');
	break;
	
	case "adauga_editura":
		include('adauga_editura.php');
	break;
	
	case "adauga_autor":
		include('adauga_autor.php');
	break;
    default:
	
        //include ('index.php');
        break;
}
}
/*
if(isset($_GET['adauga_carte'])){
include('adauga_carte.php');
}elseif(isset($_GET['adauga_editura'])){
include('adauga_editura.php');
}elseif(isset($_GET['adauga_autor'])){
include('adauga_autor.php');
}else{?>
<a href="index.php?adauga_carte">Adauga Carte</a><br>
<a href="index.php?adauga_editura">Adauga Editura</a><br>
<a href="index.php?adauga_autor">Adauga Autor</a><br>
<?php
}*/
?>

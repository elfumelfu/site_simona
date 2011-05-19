<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.12.custom.min.js"></script>
<?php include('../connect.php');?>



<?php 
//meniul principal pentru admin

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
}
?>
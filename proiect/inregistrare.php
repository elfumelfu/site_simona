
<?php

//session_start();
if(isset($_POST['logout'])){
if($_POST['logout'] == 'logout'){
    session_destroy();
    echo 'In 5 secunde veti iesi din contul dumeavoastra.';
    ?>
    <script>
        setTimeout('this.location.href = "index.php";',5000)
    </script>
<?php
}
}

if(isset($_POST['username'])){
  login($_POST['username'],md5($_POST['password']));
}

//login
function login($user,$pass){
        $result = mysql_query("SELECT * FROM `baza_librarie`.`user` where email = '".$user."'  and parola = '".$pass."'");
      //  var_dump(mysql_num_rows($result));
        $re = mysql_fetch_array($result);
     if(mysql_num_rows($result) > 0){
         $id = $re['id'];
         $_SESSION['is_logged_in'] = $id;
                                    }
                            }
//login                           
?>

 <?php
if(isset($_SESSION['is_logged_in'])) {
    ?>
<!--<form method="post">
    <input type="hidden" name="logout" value="logout"/>
    <input type="submit" value="Logout"/>
</form>    -->
    <?php }?>
    <?php
if(!isset($_SESSION['is_logged_in'])) {
    ?>
<!--    <form method="post">
        <input type="text" name="username"/>
        <input type="password" name="password"/>
        <input type="submit" value="Autentificare"/>
    </form>-->
    <?php
} 
?>




    <!--<form method="post">
        Nume: <input type="text" name="nume"/><br/>
        Prenume: <input type="text" name="prenume"/><br/>
        Email: <input type="text" name="email"/><br/>
        Parola: <input type="password" name="parola"/><br/>
        Confirmare parola: <input type="password" name="conf_parola"/><br/>
        <input type="submit" value="trimite" />
    </form>-->
<?php //var_dump($_POST);


if(isset($_POST['nume'])){
   // echo "SELECT * FROM `baza_librarie`.`user` where email = '".$_POST['email']."'";
    $select = mysql_query("SELECT * FROM `baza_librarie`.`user` where email = '".$_POST['email']."'");
  
//    var_dump(mysql_num_rows$($select));
    if(mysql_num_rows($select) != 0){
        //echo '...';
        
        }else{
        
        
        $insert_user="INSERT INTO `baza_librarie`.`user` (`id`, `nume`, `prenume`, `email`, `parola`, `adresa`, `oras`) VALUES (NULL, '".$_POST['nume']."', '".$_POST['prenume']."', '".$_POST['email']."', '".md5($_POST['parola'])."', '', '');";
//echo $insert_user;
mysql_query($insert_user);
        //echo '!!!';
        }
    
    
    

}
?>
<?php session_start();?>


<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.12.custom.min.js"></script>
<?php include('../connect.php');?>
<script>
function open_link(url){
    window.location = url;
}
</script>

<?php 
function sterge_inregistrare($id, $tabela) {
	$rem = "DELETE FROM baza_librarie.".$tabela." WHERE id = ".$id."";
	var_dump($rem);
	mysql_query($rem);
?>
        <script>open_link("<?php echo $_SESSION["de_unde"];?>")</script>
<?php    
        exit ();
}
?>

<?php 

//breadcrumbs
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//var_dump($url);

?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="LTR" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Librarie Online</title>
<xbasehref="http://osc3.template-help.com/osc_23506/">
<script type="text/javascript" src="iepngfix_tilebg.js"></script>
<link rel="stylesheet" type="text/css" href="stylesheet.css" >
<style type="text/css">
.ie6_png 			{behavior: url("iepngfix.htc"/*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*//*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*/) }
.ie6_png img		{behavior: url("iepngfix.htc"/*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*//*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*/) }
.ie6_png input		{behavior: url("iepngfix.htc"/*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*//*tpa=http://osc3.template-help.com/osc_23506/iepngfix.htc*/) }
</style>
<!--[if IE]>
   <script type="text/javascript" src="ie_png.js"></script>
   <script type="text/javascript">
       ie_png.fix('.png');
   </script>
<![endif]-->
</head>
<body>
<!-- header //-->
<!-- start -->
<!-- start -->
<table cellpadding="0" cellspacing="0" border="0" class="bg_body2"><tr><td class="bg_body2_td">
<table cellpadding="0" cellspacing="0" border="0" align="center" class="width_table">
	<tr><td class="width_td">
		<table cellpadding="0" cellspacing="0" border="0" align="center" style="height:100%;">
			<tr><td class="row_1">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr><td>
						<table cellpadding="0" cellspacing="0" border="0">
							<tr><td><img src="images/bg_logo2.jpg"  border="0" alt="" width="34" height="127"></td>
								<td class="logo"><a href="index.php.htm">
									<img src="images/logo11.gif" border="0" alt="" width="227" height="98"></a>
								</td>
								<td class="navigation">
									<table cellpadding="0" cellspacing="0" border="0"  class="navigation_table">
										<tr><td style="height:42px; text-align:right; padding-top:5px;">
											<form name="search" action="http://osc3.template-help.com/osc_23506/advanced_search_result.php" method="get">
											<table border="0" cellspacing="0" cellpadding="0" align="right" class="search">
												<tr>
												<td>Cautare:&nbsp;&nbsp;</td>
												<td style="width:100%; vertical-align:middle;">
													<input type=text name="keywords" class="go" value=""></td>
												<td style="padding:0px 20px 0px 6px; vertical-align:middle;">
													<input type="image" src="includes/languages/english/images/buttons/button_search_prod.gif" border="0" alt=""></td>
												</tr>
											</table>
											</form>                                        
										</td></tr>
										<tr><td style="background:url(images/header_box_r.gif) 100% 0px repeat-y; height:85px; vertical-align:top;">
                                            <table cellpadding="0" cellspacing="0" border="0">
											<tr><td style="padding:0px 20px 0px 40px;background:url(images/navigation_td2.gif) 100% 0px no-repeat;height:85px;">
                                            	
											</td></tr></table> 
										</td></tr>
									</table>
								</td>
							</tr>
						</table>
					</td></tr>
				</table>
			</td></tr>
			<tr><td class="row_2">
				<table cellpadding="0" cellspacing="0" border="0" class="header_box_b">
					<tr><td class="header_box_r">
							<div class="header_box_l">
								<div class="header_box_bl">
									<div class="header_box_br">
										<div class="width_100">
<!-- start meniu orizontal -->										
<table cellpadding="0" cellspacing="0" border="0" class="menu">
	<tr>
	<td class="td">
		<table cellpadding="0" cellspacing="0" border="0" class="table">
			<tr><td>
					<table cellpadding="0" cellspacing="0" border="0">
						<!--<tr> -->
           				<tr>
							<td id="m1"> <a href="index.php?listare_carti">Carti</a></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m2"><a href="index.php?listare_autor">Autori</a></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3" ><a href="index.php?listare_editura">Edituri</a></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3" ><a href="index.php?listare_domeniu">Domenii</a></td>
                            <td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3" ><a href="index.php?listare_subdomeniu">Subdomenii</a></td>
                            <td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3" ><a href="index.php?listare_user">Utilizatori</a></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>													
	</td>
	</tr>					
</table>			
<!-- end meniu orizontal -->	

<!-- header_eof //-->

<!-- body //-->
<table border="0" class="main_table" cellspacing="0" cellpadding="0">
<tr>
    <td class="box_width_td_left"><table border="0" class="box_width_left" cellspacing="0" cellpadding="0">
<!-- left_navigation //-->
<!-- categories //-->
          <tr>
            <td>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading_table">
  <tr>
    <td><img src="images/corner_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading_td">Categorii</td>
    <td><img src="images/corner_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox2_table">
  <tr>
    <td  class="infoBox2_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents2_table">
 
</table>
</td>
  </tr>
</table>
            </td>
          </tr>

    </table></td>
<!-- body_text //-->
    <td class="content_width2_td" style="width:100px;">                           	
                        
        <div style="clear:both"></div>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="width:100%;padding:0px 11px 0px 0px;">
	
<!-- Welcome_box_start -->
     <!--   <table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr><td class="main"></td></tr>
          <tr><td></td></tr>
          <tr><td class="main"></td></tr>
        </table>  -->
<!-- Welcome_box_end -->


<table cellpadding="0" cellspacing="0" border="0">
<tr><td class="padd_3">		
				<!-- new_products //-->
<table border="0" width="" cellspacing="0" cellpadding="0">
   <tr>
    <td  class="tableBox_output_td main">
	<table border="0" width="" cellspacing="0" cellpadding="0">
		<tr>
		<td align="center"><img src="images/spacer.gif" border="0" alt="" width="1" height="4"><br />
	
<?php 

//start list utilizatori
if(isset($_GET['listare_user'])){
    
	$qry = "SELECT id, nume, prenume, email, parola from baza_librarie.user";
	$res = mysql_query($qry);
	if (! $res) {
		echo 'invalid query : "'.$res.'"';
	}
	
	echo '
		<a href="index.php?exec=adauga_user">Adauga user</a>
		<table border="1">
		<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Prenume</th>
		<th>Email</th>
		<th>Parola</th>
		</tr>
		';

	while($row = mysql_fetch_array($res)){
		
		echo '
			<tr>
			<td>'.$row['id'].'</td>
			<td>'.$row['nume'].'</td>
			<td>'.$row['prenume'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['parola'].'</td>
				<td><a href="index.php?exec=adauga_user&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=user" >stergere</a></td>
			</tr>
			';
	}
//end list autori		
//var_dump($test);
}

//insert subdomeniu
if(isset($_GET['salveaza_user']) && $_POST){

 
  if (isset($_GET['id'])) {
	$id = $_GET['id'];
        echo "id = ".$id;

        $modifica_user = "UPDATE baza_librarie.user SET 
                            nume='".$_POST['nume']."',
                            prenume='".$_POST['prenume']."',
                            email='".$_POST['email']."',
                            parola='".md5($_POST['parola'])."'    WHERE id=".$id;
	$rc = mysql_query($modifica_user);
        if (!$rc) echo "ERROR".  mysql_error();
        
 } else {
	$insert_user = "INSERT INTO `baza_librarie`.`user` ( `nume`,`prenume`, email, parola) VALUES (
					'".$_POST['nume']."', 
                    '".$_POST['prenume']."', 
                    '".$_POST['email']."', 
                    '".md5($_POST['parola'])."');";
	$test = mysql_query($insert_user);

 }
?> <script>open_link("<?php echo $_SESSION["unde"];?>")</script>
        <?php 
}

//listare carti
if(isset($_GET['listare_carti'])){
	$list_carti = "SELECT isbn, titlu, group_concat(prenume, ' ', nume separator ':')as autori, ideditura, nrpag , pret, reducere, nrbuc, 
	limba, anaparitie, descriere, imagine from carte, autor , autorcarte 
			where autor.id=autorcarte.idautor and carte.isbn = autorcarte.idcarte group by isbn";
	//var_dump($list_carti);
	$test_carti = mysql_query($list_carti);
	if (!$test_carti) {
		echo 'invalid query : "'.$list_carti.'"';
	}
	
	echo '
		<a href="index.php?exec=adauga_carte">Adauga carte</a>
		<table border="1">
		<tr>
		<th>ISBN</th>
		<th>Titlu</th>
		<th>Autori</th>
		<th>Pret</th>
		<th>Reducere</th>
		<th>Editura</th>
		<th>An Aparitie</th>
		<th>Numar pagini</th>
		<th>Descriere</th>
		</tr>
		';

	while($row = mysql_fetch_array($test_carti)){

		$aut = explode (":", $row['autori']);
		//var_dump($aut);
		
		echo '
			<tr>
			<td>'.$row['isbn'].'</td>
			<td>'.$row['titlu'].'</td>
			<td nowrap>';
			$i=0;
			while (isset($aut[$i])) {
			echo '<a href="WTF?'.$aut[$i].'">'.$aut[$i].'</a><br>';
			$i++;
			}
			echo '</td>';
			echo '
			<td>'.$row['pret'].'</td>
			<td>'.$row['reducere'].'</td>
			<td>'.$row['ideditura'].'</td>
			<td>'.$row['anaparitie'].'</td>
			<td>'.$row['nrpag'].'</td>
			<td>'.$row['descriere'].'</td>
				<td><a href="index.php?exec=adauga_autor&mod='. $row['isbn'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['isbn'].'&tabela=autor" >stergere</a></td>
			</tr>
			';
	}
		
//var_dump($test);
}



//listare autori
if(isset($_GET['listare_autor'])){
	$list_autor = "SELECT id, nume, prenume, origine FROM baza_librarie.autor ";
	if(!isset($_SESSION['order'])) {
		$_SESSION['order'] = "id";
		}
	if(!isset($_SESSION['order_type']))
		$_SESSION['order_type'] = "ASC"; 
	
	$order = $_SESSION['order'];
	$order_type = $_SESSION['order_type'];
	
	if (isset($_GET['order'])) {
		$set_order = $_GET['order'];
		$list_autor .= " ORDER BY " . $set_order;
		
		if ($order == $set_order) {
			if (strcmp( $order_type , "ASC") == 0) 
				$order_type = "DESC";
			else
				$order_type = "ASC";
		} else
			$order_type = "ASC";

		$_SESSION['order'] = $set_order;
		$_SESSION['order_type'] = $order_type;
	} else
		$list_autor .= " ORDER BY id";
	
	$list_autor .= " ".$order_type;
		
	$test_autor = mysql_query($list_autor);
	
	echo '
		<a href="index.php?exec=adauga_autor">Adauga autor</a>
		<table border="1">
		<tr>
		<th><a href="index.php?listare_autor&order=id">ID</a></th>
		<th><a href="index.php?listare_autor&order=nume">Nume</a></th>
		<th><a href="index.php?listare_autor&order=prenume">Prenume</a></th>
		<th><a href="index.php?listare_autor&order=origine">Origine</a></th>
		</tr>
		';
	while($row = mysql_fetch_array($test_autor)){
		echo '
			<tr>
			<td>'.$row['id'].'</td><td>'.$row['nume'].'</td><td>'.$row['prenume'].'</td><td>'.$row['origine'].'</td>
				<td><a href="index.php?exec=adauga_autor&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=autor" >stergere</a></td>
			</tr>
			';
	}
		
//var_dump($test);
}
//insert autor
if(isset($_GET['salveaza_autor']) && $_POST){
 
  if (isset($_GET['id'])) {
	$id = $_GET['id'];			
	$modifica_autor = "UPDATE baza_librarie.autor SET nume='".$_POST['nume']."', prenume='"	.$_POST['prenume']."', origine='" .$_POST['origine']."' WHERE id=".$id;
	$rc = mysql_query($modifica_autor);
 } else {
	$insert_autor = "INSERT INTO `baza_librarie`.`autor` ( `nume` , `prenume` , `origine`  ) VALUES (
					'".$_POST['nume']."', '".$_POST['prenume']."', '".$_POST['origine']."');";
	$test = mysql_query($insert_autor);
 }
?> <script>open_link("<?php echo $_SESSION["unde"];?>")</script>
        <?php	
}
//insert autor

//listare editura
if(isset($_GET['listare_editura'])){
	$list_editura = "SELECT id, denumire, localitate, nrtelefon, email FROM baza_librarie.editura ";
	if(!isset($_SESSION['order'])) {
		$_SESSION['order'] = "id";
	}
	if(!isset($_SESSION['order_type']))
		$_SESSION['order_type'] = "ASC"; 
	
	$order = $_SESSION['order'];
	$order_type = $_SESSION['order_type'];
	
	if (isset($_GET['order'])) {
		$set_order = $_GET['order'];
		$list_editura .= " ORDER BY " . $set_order;

		if ($order == $set_order) {

			if (strcmp( $order_type , "ASC") == 0) 
				$order_type = "DESC";
			else
				$order_type = "ASC";
		} else
			$order_type = "ASC";

		$_SESSION['order'] = $set_order;
		$_SESSION['order_type'] = $order_type;
	} else
		$list_editura .= " ORDER BY id";
	
	$list_editura .= " ".$order_type;
	
	$rc = mysql_query($list_editura);
	echo '
		<a href="index.php?exec=adauga_editura">Adauga editura</a>
		<table border="1">
		<tr>
		<th><a href="index.php?listare_editura&order=id">ID</a></th>
		<th><a href="index.php?listare_editura&order=denumire">Editura</a></th>
		<th><a href="index.php?listare_editura&order=localitate">Localitate</a></th>
		<th><a href="index.php?listare_editura&order=nrtelefon">Telefon</a></th>
		<th><a href="index.php?listare_editura&order=email">E-mail</a></th>
		</tr>
		';
	while($row = mysql_fetch_array($rc)){
		echo '
			<tr>
			<td>'.$row['id'].'</td><td>'.$row['denumire'].'</td><td>'.$row['localitate'].'</td><td>'.$row['nrtelefon'].'</td><td>'.$row['email'].'</td>
				<td><a href="index.php?exec=adauga_editura&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=editura" >stergere</a></td>
			</tr>
			';
	}

//var_dump($test);
}
//listare domeniu
if(isset($_GET['listare_domeniu'])){
	$list_domeniu = "SELECT id, denumire FROM baza_librarie.domeniu ";
	if(!isset($_SESSION['order'])) {
		$_SESSION['order'] = "id";
	}
	if(!isset($_SESSION['order_type']))
		$_SESSION['order_type'] = "ASC"; 
	
	$order = $_SESSION['order'];
	$order_type = $_SESSION['order_type'];
	
	if (isset($_GET['order'])) {
		$set_order = $_GET['order'];
		$list_domeniu .= " ORDER BY " . $set_order;

		if ($order == $set_order) {

			if (strcmp( $order_type , "ASC") == 0) 
				$order_type = "DESC";
			else
				$order_type = "ASC";
		} else
			$order_type = "ASC";

		$_SESSION['order'] = $set_order;
		$_SESSION['order_type'] = $order_type;
	} else
		$list_domeniu .= " ORDER BY id";
	
	$list_domeniu .= " ".$order_type;
	
	$test_domeniu = mysql_query($list_domeniu);
	echo '
		<a href="index.php?exec=adauga_domeniu">Adauga domeniu</a>
		<table id="listare" border="1">
		<tr>
		<th><a href="index.php?listare_domeniu&order=id">ID</a></th>
		<th><a href="index.php?listare_domeniu&order=denumire">Domeniu</a></th>
		<th colspan=2 >Operatii</th>
	   	</tr>
		';
$i=1;
	while($row = mysql_fetch_array($test_domeniu)){
		$i++;
		if ($i%2 == 0){		
		echo '
			<tr>
			<td>'.$row['id'].'</td> <td>'.$row['denumire'].'</td>
				<td><a href="index.php?exec=adauga_domeniu&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=domeniu" >stergere</a></td>
			</tr>
			';
		}
		else {
		echo '
			<tr class="alt">
			<td>'.$row['id'].'</td> <td>'.$row['denumire'].'</td>
				<td><a href="index.php?exec=adauga_domeniu&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=domeniu" >stergere</a></td>
			</tr>
			';
		}
	}
		
//var_dump($test);
}

//start insert domeniu
if(isset($_GET['salveaza_domeniu']) && $_POST){
 
  if (isset($_GET['id'])) {
	$id = $_GET['id'];
        echo "id = ".$id;
        $modifica_domeniu = "UPDATE baza_librarie.domeniu SET denumire='".$_POST['denumire']."' WHERE id=".$id;
	$rc = mysql_query($modifica_domeniu);
        if (!$rc) echo "ERROR".  mysql_error();
        
 } else {
	$insert_domeniu = "INSERT INTO `baza_librarie`.`domeniu` ( `denumire`) VALUES (
					'".$_POST['denumire']."');";
	$test = mysql_query($insert_domeniu);
    $insert_subdomeniu = "INSERT INTO `baza_librarie`.`subdomeniu` ( `denumire`, iddomeniu) VALUES (
					'-', (SELECT id from domeniu where denumire='".$_POST['denumire']."'));";
	$test = mysql_query($insert_subdomeniu);
 }
?> <script>open_link("<?php echo $_SESSION["unde"];?>")</script>
        <?php 
}
//end insert domeniu





//start insert editura
if(isset($_GET['salveaza_editura']) && isset($_POST)){

    if (isset($_GET['id'])) {
	$id = $_GET['id'];			
	$modifica_editura = "UPDATE baza_librarie.editura SET denumire='".$_POST['denumire'].
	                       "', localitate='".$_POST['localitate'].
						   "', nrtelefon='" .$_POST['numar_telefon'].
						   "', email='".$_POST['email']."' WHERE id=".$id;
	$rc = mysql_query($modifica_editura);
       
        
    } else {
	echo $inserare_editura="INSERT INTO `baza_librarie`.`editura` ( `denumire` , `localitate` , `nrtelefon` , `email` ) VALUES (
				'".$_POST['denumire']."', '".$_POST['localitate']."', '".$_POST['numar_telefon']."', '".$_POST['email']."')";
	$ts = mysql_query($inserare_editura);

	}
     ?> <script>open_link("<?php echo $_SESSION["unde"];?>")</script>
        <?php
}
//end insert editura


//listare subdomeniu
if(isset($_GET['listare_subdomeniu'])){
	$list_domeniu = "SELECT subdomeniu.id, domeniu.denumire as dom, subdomeniu.denumire as den 
                         FROM baza_librarie.domeniu, baza_librarie.subdomeniu WHERE subdomeniu.iddomeniu=domeniu.id AND subdomeniu.denumire<>'-'";
	if(!isset($_SESSION['order'])) {
		$_SESSION['order'] = "id";
	}
	if(!isset($_SESSION['order_type']))
		$_SESSION['order_type'] = "ASC"; 
	
	$order = $_SESSION['order'];
	$order_type = $_SESSION['order_type'];
	
	if (isset($_GET['order'])) {
		$set_order = $_GET['order'];
		$list_domeniu .= " ORDER BY " . $set_order;

		if ($order == $set_order) {

			if (strcmp( $order_type , "ASC") == 0) 
				$order_type = "DESC";
			else
				$order_type = "ASC";
		} else
			$order_type = "ASC";

		$_SESSION['order'] = $set_order;
		$_SESSION['order_type'] = $order_type;
	} else
		$list_domeniu .= " ORDER BY id";
	
	$list_domeniu .= " ".$order_type;
	
	$test_domeniu = mysql_query($list_domeniu);
	echo '
		<a href="index.php?exec=adauga_subdomeniu">Adauga subdomeniu</a>
		<table id="listare" border="1">
		<tr>
		<th><a href="index.php?listare_subdomeniu&order=id">ID</a></th>
                <th><a href="index.php?listare_subdomeniu&order=dom">Domeniu</a></th>
		<th><a href="index.php?listare_subdomeniu&order=den">Subdomeniu</a></th>
	   	</tr>
		';
$i=1;
	while($row = mysql_fetch_array($test_domeniu)){
		$i++;
		if ($i%2==0){
		echo '
			<tr>
			<td>'.$row['id'].'</td> 
                        <td>'.$row['dom'].'</td>
                        <td>'.$row['den'].'</td>
				<td><a href="index.php?exec=adauga_subdomeniu&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=subdomeniu" >stergere</a></td>
			</tr>
			';
			}
			else {
			echo '
			<tr class="alt">
			<td>'.$row['id'].'</td> 
                        <td>'.$row['dom'].'</td>
                        <td>'.$row['den'].'</td>
				<td><a href="index.php?exec=adauga_subdomeniu&mod='. $row['id'] .'" >editare</a></td>
				<td><a href="index.php?function=sterge&id='.$row['id'].'&tabela=subdomeniu" >stergere</a></td>
			</tr>
			';
			}
	}
		
//var_dump($test);
}

//insert subdomeniu
if(isset($_GET['salveaza_subdomeniu']) && $_POST){

 
  if (isset($_GET['id'])) {
	$id = $_GET['id'];
        echo "id = ".$id;

        $modifica_subdomeniu = "UPDATE baza_librarie.subdomeniu SET 
                            denumire='".$_POST['denumire']."',
                            idDomeniu=".$_POST['iddomeniu']."    WHERE id=".$id;
	$rc = mysql_query($modifica_subdomeniu);
        if (!$rc) echo "ERROR".  mysql_error();
        
 } else {
	$insert_subdomeniu = "INSERT INTO `baza_librarie`.`subdomeniu` ( `denumire`,`idDomeniu`) VALUES (
					'".$_POST['denumire']."', ".$_POST['iddomeniu'].");";
	$test = mysql_query($insert_subdomeniu);

 }
?> <script>open_link("<?php echo $_SESSION["unde"];?>")</script>
        <?php 
}


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
	case "adauga_domeniu":
		include('adauga_domeniu.php');
	break;

    case "adauga_subdomeniu":
		include('adauga_subdomeniu.php');
    	break;
    case "adauga_user":
		include('adauga_user.php');
    	break;

    default:
	
        //include ('index.php');
        break;
}
}

if( isset($_GET['function']) ) { 
  switch( $_GET['function'] ) { 
     case 'sterge':
		if (isset($_GET['id']))
			$id = $_GET['id'];
		if (isset($_GET['tabela']))
			$tabela = $_GET['tabela'];	
        sterge_inregistrare($id, $tabela); 
     break; 

  } 
}
if($_SESSION['de_unde'] != $url){
		$_SESSION['unde'] = $_SESSION['de_unde'];
		$_SESSION['de_unde'] = $url;
		}
if(isset($_SESSION['de_unde'])){
		$de_unde = $_SESSION['de_unde'];
		$unde = $_SESSION['unde'];
		}
echo  'de_unde : '.$_SESSION['de_unde'].'<br>';
echo  '   unde : '.$_SESSION['unde'];
echo '<br>';
//breadcrumbs

  ?>
		</table>
		</td>  
  </tr> 	
</table>
</td>
  </tr> 	
</table>
<!-- new_products_eof //-->
</td></tr></table>				
				</td>
					

			</tr>
		</table>
							
		
	</td>
<!-- body_text_eof //-->
  </tr>
</table>
<!-- body_eof //-->

<!-- footer //-->
</div>
                        </div>
					</div>
				</div>
			</td></tr>
		</table>		
		</td></tr>
		<tr><td class="row_3">			


</td></tr></table>
</td></tr></table>
</td></tr></table>
<!-- footer_eof //-->
<!--osc3.template-help.com -->
<!--
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www./");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7078796-1");
pageTracker._trackPageview();
} catch(err) {}</script>-->
</body>
</html>

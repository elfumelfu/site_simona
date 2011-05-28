<?php session_start();?>


<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.8.12.custom.min.js"></script>
<?php include('../connect.php');?>

<?php 
function sterge_inregistrare($id, $tabela) {
	$rem = "DELETE FROM baza_librarie.".$tabela." WHERE id = ".$id."";
	var_dump($rem);
	mysql_query($rem);
}
?>

<?php 

//breadcrumbs
$url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//var_dump($url);


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
<table cellpadding="0" cellspacing="0" border="0" class="menu">
					<tr><td class="td">
						<table cellpadding="0" cellspacing="0" border="0" class="table">
							<tr><td>
								<table cellpadding="0" cellspacing="0" border="0">
									<tr>
            				<tr>
							<td id="over_m1"> <a href="index.php?exec=adauga_carte">Adauga Carte</a></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m2" ><a href="index.php?exec=adauga_editura">Adauga Editura</a></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3"><a href="index.php?exec=adauga_autor">Adauga Autor</a><br></td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m4"><a href="index.php?listare_autor">Autori</a><br></td>
							 </tr>
						</table>
								</td>
							</tr>
						</table>													
					</td></tr>					
				</table>			<!-- header_eof //-->

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
  <tr>
    <td  class="boxText">
	<ul class="categories">
		<li class="bg_list_un"><a href="index.php-cPath=1.htm">Arte</a></li>
		<li class="bg_list"><a href="index.php-cPath=2.htm">Autoeducare</a></li>
		<li class="bg_list"><a href="index.php-cPath=3.htm">Beletristica</a></li>
		<li class="bg_list"><a href="index.php-cPath=4.htm">Calculatoare</a></li>
		<li class="bg_list"><a href="index.php-cPath=5.htm">Carte straina</a></li>
		<li class="bg_list"><a href="index.php-cPath=6.htm">Economie</a></li>
		<li class="bg_list"><a href="index.php-cPath=7.htm">Gastronomie</a></li>
		<li class="bg_list"><a href="index.php-cPath=8.htm">Hobby</a></li>
		<li class="bg_list"><a href="index.php-cPath=9.htm">Invatamant-Educatie</a></li>
		<li class="bg_list"><a href="index.php-cPath=10.htm">Istorie</a></li>
	</ul>
	</td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>

    </table></td>
<!-- body_text //-->
    <td class="content_width2_td" style="width:100px;padding-left:100px;">                           	
                        
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
		<td align="left"><img src="images/spacer.gif" border="0" alt="" width="1" height="4"><br />
	
	  <?php 
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
echo '<br>';
//breadcrumbs

//listare autori
if(isset($_GET['listare_autor'])){
	$list_autor = "SELECT id, nume, prenume, origine FROM baza_librarie.autor ORDER BY nume, prenume, origine";
	$test_autor = mysql_query($list_autor);
	echo '
		<a href="index.php?exec=adauga_autor">Adauga autor</a>
		<table border="1">
		<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Prenume</th>
		<th>Origine</th>
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
//var_dump($test);
}
//insert autor
//insert editura
if(isset($_GET['salveaza_editura']) && isset($_POST)){
echo $inserare_editura="INSERT INTO `baza_librarie`.`editura` (
`id` ,
`denumire` ,
`localitate` ,
`nrtelefon` ,
`email`
)
VALUES (
NULL , '".$_POST['denumire']."', '".$_POST['localitate']."', '".$_POST['numar_telefon']."', '".$_POST['email']."')";
$ts = mysql_query($inserare_editura);
var_dump($ts);
}
//insert editura

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

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www./");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7078796-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

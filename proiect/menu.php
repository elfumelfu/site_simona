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
	<?php	//Listarea categoriilor
	include("../admin/connect.php");
	if (isset($_GET['domeniu']))
		$sel_domeniu = $_GET['domeniu'];
	else
		$sel_domeniu = '';
	$lista_categorii = "SELECT denumire from `baza_librarie`.`domeniu` ORDER BY denumire ";
		$test = mysql_query($lista_categorii);
	
		while($domeniu = mysql_fetch_array($test)) {
		
			
			if ($sel_domeniu == $domeniu['denumire'])
				{
				echo '<li class="bg_list"><a href="'.$_SERVER['PHP_SELF'].'?domeniu='.$domeniu['denumire'].'">'.$domeniu['denumire'].'</a></li>';
				
				$lista_subcategorii = "SELECT sub.denumire as denumire from `baza_librarie`.`domeniu` as dom,`baza_librarie`.`subdomeniu` as sub 
				                      WHERE sub.idDomeniu=dom.id and dom.denumire='".$sel_domeniu."' ORDER BY denumire";
				$testsub = mysql_query($lista_subcategorii);
				//var_dump($lista_subcategorii);
				echo '<ul class="subcategories">';
				while($subdomeniu = mysql_fetch_array($testsub)) {
					echo '<li class="bg_list2_un"><a href="'.$_SERVER['PHP_SELF'].'?domeniu='.$subdomeniu['denumire'].'">'.$subdomeniu['denumire'].'</a></li>';
					}
				echo '</ul >';
				}
			else
				echo '<li class="bg_list_un"><a href="'.$_SERVER['PHP_SELF'].'?domeniu='.$domeniu['denumire'].'">'.$domeniu['denumire'].'</a></li>';
		}
		?>
	</ul>
	</td>
  </tr>
</table>
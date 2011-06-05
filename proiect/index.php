<?php
session_start();

include '../admin/connect.php';

   if(isset($_POST['id'])){
     foreach($_POST['id'] as $id){
      // echo $id;
    
       if((int)$_POST[$id] == $_SESSION['cart'][$id]){
          
       }else{
          
           $_SESSION['cart'][$id] = $_POST[$id];
       }
    }
    }

if(isset($_POST['sterge'])){
foreach($_POST['sterge'] as $sterge){
    unset($_SESSION['cart'][$sterge]);
  
}
};

include('inregistrare.php');
?>
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="LTR" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Librarie Online</title>
<xbasehref="http://osc3.template-help.com/osc_23506/">
<script type="text/javascript" src="iepngfix_tilebg.js"></script>
    	<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
                <script type="text/javascript" src="js/jquery.form.js"></script>
                <script src="js/jquery.validate.js" type="text/javascript"></script>

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
   <script>
                                                                            $(document).ready(function(){
                                                                                
                                                                                $('.add-to').click(function(){
                                                                                    var name = $(this).attr('name');
                                                                                    //alert(name);
                                                                                   
                                                                                    
                                                                                    
                                                                                    $.ajax({
  url: "add-to.php?id_prod="+name,
  context: document.body,
  success: function(result){
    $(".z1").html(result);
  }
});
    return false;                                                                                 
                                                                                });
                                                                            })
                                                                        </script>
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
								<td class="logo"><a href="index.php">
									<img src="images/logo11.gif" border="0" alt="" width="227" height="98"></a>
								</td>
								<td class="navigation">
									<table cellpadding="0" cellspacing="0" border="0"  class="navigation_table">
										<tr><td style="height:42px; text-align:right; padding-top:5px;">
											<form name="search" action="advanced_search_result.php" method="get">
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
                                            	<table border="0" cellspacing="0" cellpadding="0" class="header" style="margin:20px 0px 0px 0px;">
													<tr>
													<td class="header_td" style="width:66%;">
 <?php
if(isset($_SESSION['is_logged_in'])) {
    
    
    $sel_user = mysql_query("SELECT * FROM `user` where id=".$_SESSION['is_logged_in']);
   // var_dump($sel_user);
    //echo "SELECT * FROM `user` where id=".$_SESSION['is_logged_in'];
    $obj_us = mysql_fetch_object($sel_user);
    echo "Buna ziua,".$obj_us->nume.' '.$obj_us->prenume.'<br/>';
    //echo  $_SESSION['is_logged_in'];
    ?>
	
<form method="post">
    <input type="hidden" name="logout" value="logout"/>
    <input type="submit" value="Logout"/>
</form>    
    <?php }?>
    <?php
if(!isset($_SESSION['is_logged_in'])) {
    ?>
	<?php  echo'User:           Parola: ';?><br>
    <form method="post">
	<?php// echo'User: ';?>
        <input type="text" name="username"/>
		<?php //echo'Parola: ';?>
        <input type="password" name="password"/>
        <input type="submit" value="Autentificare"/>
    </form>
    <?php
} 
?>
											</td>
											<td><img src="images/part.gif" border="0" alt="" width="1" height="34"></td>
											<td class="header_td" style="width:33%; padding-top:2px; padding-bottom:0px; padding-left:3px;">
<table cellpadding="0" cellspacing="0" border="0" align="center" style="width:140px;">
	<tr>
		<td class="z1">
                    
                    
                    
        <?php            
if(isset($_SESSION['cart'])){
    $suma = 0;
    foreach($_SESSION['cart'] as $s){
       // var_dump(array_sum($s));
      //  echo $s.'<br/>';
        $suma += $s;
       // echo $suma;
       
       // echo array_sum($s);
    }
    // var_dump($suma);
//array_sum($_SESSION['cart']);
//var_dump($_SESSION['cart']);
?>
<strong>Cosul de cumparaturi:</strong>
<span> acum in cosul tau </span><a href="index.php?exec=cos"><?php echo $suma?> carti</a>
<?php }else{?>
<strong>Cosul de cumparaturi:</strong>
<span> acum in cosul tau </span><a href="index.php?exec=cos">0   carti</a>

<?php }?>
                </td>
	</tr>
</table>
											</td>										
										</tr>
									</table>
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
                                            <td class="menu_separator"></td>
							<td id="over_m1" onMouseOut="this.id='over_m1';" onMouseOver="this.id='over_m1';" onClick="document.location='index.php'" nowrap="nowrap"> Acasa</td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m2" onMouseOut="this.id='m2';" onMouseOver="this.id='over_m2';" onClick="document.location='index.php?exec=noutati'">Noutati</td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m3" onMouseOut="this.id='m3';" onMouseOver="this.id='over_m3';" onClick="document.location='index.php?exec=oferte'">Oferte</td>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
									<?php if(isset($_SESSION['is_logged_in'])) {?> 
                                                        <td id="m4" onMouseOut="this.id='m4';" onMouseOver="this.id='over_m4';" onClick="document.location='index.php?exec=contul_meu'" nowrap="nowrap">Contul meu</td>
                                                                        <?php }else{?>                      
							<td id="m4" onMouseOut="this.id='m4';" onMouseOver="this.id='over_m4';" onClick="document.location='index.php?exec=creare_cont'" nowrap="nowrap">Creare cont nou</td>
                                                                        <?php }?>
							<td class="menu_separator"><img src="images/menu_separator.gif" border="0" alt="" width="1" height="38"></td>
							<td id="m6" onMouseOut="this.id='m6';" onMouseOver="this.id='over_m6';" onClick="document.location='index.php?exec=contact'">Contact</td>
							</tr>
						</table>
								</td>
							</tr>
						</table>													
					</td></tr>					
				</table>			
<!-- header_eof //-->

<!-- body //-->
<table border="0" class="main_table" cellspacing="0" cellpadding="0">
<tr>
    <td class="box_width_td_left"><table border="0" class="box_width_left" cellspacing="0" cellpadding="0">
<!-- left_navigation //-->
<!-- categories //-->
          <tr>
            <td>

			<?php 
			include ('menu.php');
			?>

            </td>
          </tr>
<!-- categories_eof //-->
<!-- whats_new //-->
          <tr>
            <td>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading3_table">
  <tr>
    <td><img src="images/corner3_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading3_td">What's New?</td>
    <td><img src="images/corner3_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox3_table">
  <tr>
    <td  class="infoBox3_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents3_table">
  <tr>
    <td  class="boxText">
                    <table cellpadding="0" cellspacing="0" border="0">
						<tr><td class="pic_padd">
  		<table cellpadding="0" cellspacing="0" border="0" align="center" class="pic2_b">
			<tr><td class="pic2_r">
				<div class="pic2_t">
					<div class="pic2_l">
						<div class="pic2_tl">
							<div class="pic2_tr">
								<div class="pic2_bl">
									<div class="pic2_br">
										<div class="width_100"><a href="product_info.php-products_id=72.htm">
										<img src="images/072.jpg" border="0" alt="Evil Dracula" title=" Evil Dracula " width="145" height="118"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</td></tr>
		</table></td></tr>
						<tr><td class="name_padd">
	  <span><a href="product_info.php-products_id=72.htm" >Evil Dracula</a></span>
	  </td></tr>
                        <tr><td class="price_padd"><span class="productSpecialPrice">$499.99</span></td></tr>
                    </table></td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>
<!-- whats_new_eof //-->
<!-- information //-->
          <tr>
            <td>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading_table">
  <tr>
    <td><img src="images/corner_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading_td">Informatii</td>
    <td><img src="images/corner_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox2_table">
  <tr>
    <td  class="infoBox2_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents2_table">
  <tr>
    <td  class="boxText">
		<ul class="information">
  			<li class="bg_list_un"><a href="shipping.php">Shipping & Returns</a></li>
			<li class="bg_list"><a href="privacy.php">Privacy Notice</a></li>
			<li class="bg_list"><a href="conditions.php">Conditions of Use</a></li>
			<li class="bg_list"><a href="contact_us.php">Contact Us</a></li>
		</ul>
	</td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>
<!-- information_eof //-->

<!-- left_navigation_eof //-->
    </table></td>
<!-- body_text //-->
    <td class="content_width2_td">                           	
                        
<!--        <div class="banner_02">
			<a href="index.php-cPath=3.htm" target="_blank">
			<img src="images/banner_02.jpg" border="0" alt="Banner2" title=" Banner2 " width="660" height="283">
			</a>
		</div>-->
                <div class="banner_02">
                    
                    <div style="width:660px;border:1px solid #000; height:30px;margin-bottom: 10px;">
                      
                    </div>
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td style="padding:0px 11px 0px 0px;width: 100%;">
	
<!-- Welcome_box_start -->
     <!--   <table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr><td class="main"></td></tr>
          <tr><td></td></tr>
          <tr><td class="main"></td></tr>
        </table>  -->
       		

<!-- Welcome_box_end -->

		<?php 
                
                //continut
                if(isset($_GET['exec'])){
switch ($_GET['exec']) {
    case "creare_cont":
        include('cont-nou.php');
	break;

	
	case "cos":
		include('cos_de_cumparaturi.php');
        break;
        
        case "finalizare_comanda":
                include('finalizare_comanda.php');
        break;
    
    
	case "contact":
        include('contact_us.php');
	break;
	case "oferte":
        include('specials.php');
	break;
	case "adauga_editura":
		include('adauga_editura.php');
	break;
	
	case "adauga_autor":
		include('adauga_autor.php');
	break;
    default:
	
        break;
}
}else{
    
    include('prima_pag.php');
        //include ('index.php');
//        echo 'test';
}
                if(!isset($_GET['exec'])){$_GET['exec'] = 'null';}
                if($_GET['exec'] != 'cos'){
                ?>
				<td class="box_width_td_right"><table border="0" class="box_width_right" cellspacing="0" cellpadding="0">
<!-- right_navigation //-->
<!-- manufacturers 
          <tr>
            <td>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading_table">
  <tr>
    <td><img src="images/corner_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading_td">Manufacturers</td>
    <td><img src="images/corner_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox_table">
  <tr>
    <td  class="infoBox_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents_table">
  <tr>
    <td  class="boxText">
	<form name="manufacturers" action="http://osc3.template-help.com/osc_23506/index.php" method="get">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td>
					<select name="manufacturers_id" onChange="this.form.submit();" size="1" style="width: 100%">
					<option value="" SELECTED>Please Select</option><option value="1">Example_1</option>
					<option value="2">Example_2</option>
					<option value="3">Example_3</option>
					</select>
				</td>
			</tr>
		</table>
	</form>
	</td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>
<!-- manufacturers_eof //-->
<!-- best_sellers //-->
          <tr>
            <td valign="top">
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading_table">
  <tr>
    <td><img src="images/corner_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading_td">Bestsellers</td>
    <td><img src="images/corner_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
	

					
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox2_table">
  <tr>
    <td  class="infoBox2_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents2_table">
  <tr>
    <td  class="boxText">
		<ul class="bestsellers">
			<li class="bg_list2_un">
				<a href="product_info.php-products_id=1.htm"><b>01.&nbsp;&nbsp;</b><font>Brothers Grimm</font></a></li>
			<li class="bg_list2">
				<a href="product_info.php-products_id=2.htm"><b>02.&nbsp;&nbsp;</b><font>Folk Tales</font></a></li>
			<li class="bg_list2">
				<a href="product_info.php-products_id=3.htm"><b>03.&nbsp;&nbsp;</b><font>Piggy Bank</font></a></li>
			<li class="bg_list2">
				<a href="product_info.php-products_id=5.htm"><b>04.&nbsp;&nbsp;</b><font>Comedy Club</font></a></li>
			<li class="bg_list2">
				<a href="product_info.php-products_id=6.htm"><b>05.&nbsp;&nbsp;</b><font>Geography Textbook</font></a></li>
			<li class="bg_list2">
				<a href="product_info.php-products_id=4.htm"><b>06.&nbsp;&nbsp;</b><font>Prosper&rsquo;os Books</font></a></li>
		</ul>
	</td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>
<!-- best_sellers_eof //-->
<!-- specials //-->
          <tr>
            <td>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading3_table">
  <tr>
    <td>
		<img src="images/corner3_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading3_td">Oferte</td>
    <td>
		<img src="images/corner3_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBox3_table">
  <tr>
    <td  class="infoBox3_td"><table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxContents3_table">
  <tr>
    <td align="center"  class="boxText">
                    <table cellpadding="0" cellspacing="0" border="0">
						<tr><td class="pic_padd">
  		<table cellpadding="0" cellspacing="0" border="0" align="center" class="pic2_b">
			<tr><td class="pic2_r">
				<div class="pic2_t">
					<div class="pic2_l">
						<div class="pic2_tl">
							<div class="pic2_tr">
								<div class="pic2_bl">
									<div class="pic2_br">
										<div class="width_100">
											<a href="product_info.php-products_id=6.htm">
											<img src="images/006.jpg" border="0" alt="Geography Textbook" title=" Geography Textbook " width="145" height="118"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</td></tr>
		</table></td></tr>
						<tr><td class="name_padd">
							<span><a href="product_info.php-products_id=6.htm">Geography Textbook</a></span></td></tr>
                        <tr><td class="price_padd"><div><del>$39.99</del> &nbsp;&nbsp; 
							<span class="productSpecialPrice">$30.00</span></div></td></tr>
                    </table></td>
  </tr>
</table>
</td>
  </tr>
</table>
            </td>
          </tr>
<!-- specials_eof //-->
<!-- right_navigation_eof //-->
    </table></td>	
<?php }?>
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


			<table cellpadding="0" cellspacing="0" border="0" align="center" class="footer">
				<tr>
					<td><table cellpadding="0" cellspacing="0" border="0" class="footer_td">
					<tr>
						<td>
						<img src="images/p1.gif" border="0" alt="" width="162" height="26">
						</td>
					</tr>
					</table>
					</td>
                    <td class="footer2_td">
						<span><a href="specials.php">Oferte</a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
						<a href="advanced_search.php">Advanced Search</a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
						<a href="reviews.php">Reviews</a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
						<a href="create_account.php">Create an Account</a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
						<a href="login.php">Log In</a></span><br>Copyright &copy; 2011 
						<a href="index.php">Book Store</a> &nbsp;&nbsp; <b>
						<a href="privacy.php">Privacy Notice</a> &nbsp;&nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;
						<a href="conditions.php">Conditions of Use</a></b>
					</td>
				</tr>
			</table>
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

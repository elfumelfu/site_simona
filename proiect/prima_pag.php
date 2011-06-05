				
<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="cont_heading_table">
  <tr>
    <td  class="cont_heading_td">What's New Here?</td>
  </tr>
</table>

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
if(isset($_GET['pag'])){
	  if($_GET['pag'] !=''){

	  $pagina = $_GET['pag'];
	  $limita = $pagina*4;
	  }else{
	  $pagina = 0;
	   $limita = 1*4;
	  }}else{
 $pagina = 0;
}
		  
  //mysql_connect("localhost", "root", "") or die(mysql_error());
  include ('../admin/connect.php');
  
  $sel = "SELECT * FROM `carte` ";
  
  
  
  
  $select = mysql_query($sel);
 
 
	 $numar_coloane = mysql_num_rows($select);
	 $pagini = $numar_coloane/4;
 
 ?>
 
 
		<div style="clear:both;width:100%;text-align:center;">Numar de pagini: <?php echo ceil($pagini);?>
		&nbsp;<?php  for($i = 0; $i < ceil($pagini); $i++){?>
		<a href="index.php?pag=<?php echo $i;?>"> pag <?php echo $i+1;?></a>
		<?php }?>
		
		</div>
 
 <br/><br/>
 
  <?php
if(isset($_GET['pag'])){  
  $lim = $_GET['pag']*4;
  
  }else{$lim = 0 ;}
  //$sel .="LEFT JOIN `autor` AS `aut` ON aut.id = carte.idautor";
  
  
  $sel .= "limit ".(int)$lim.",4";
  //echo $sel;
  $select = mysql_query($sel);
  while($carte = mysql_fetch_array($select)){?>
 
	
  		<table cellpadding="0" cellspacing="0" border="0" class="content_wrapper_b">
			<tr><td class="content_wrapper_r">
				<div class="content_wrapper_t">
					<div class="content_wrapper_l">
						<div class="content_wrapper_tl">
							<div class="content_wrapper_tr">
								<div class="content_wrapper_bl">
									<div class="content_wrapper_br">
										<div class="width_100">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr><td class="name name2_padd">
			<a href="product_info.php-products_id=70.htm" ><?php echo $carte['titlu'];?></a></td></tr>
	</table>
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
		<td class="pic2_padd">
  		<table cellpadding="0" cellspacing="0" border="0" align="center" class="pic_b">
			<tr>
			<td class="pic_r">
				<div class="pic_t">
					<div class="pic_l">
						<div class="pic_tl">
							<div class="pic_tr">
								<div class="pic_bl">
									<div class="pic_br">
										<div class="width_100"><a href="product_info.php-products_id=70.htm">
										<img src="<?php echo $carte['imagine']?>"  border="0" alt="<?php echo $carte['titlu']?>" title=" Manager attempted " width="145"></a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</td></tr>
		</table></td>
			<td style="width:100%;">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr><td class="desc desc2_padd"><?php echo substr($carte['descriere'],0,50);?>...</td></tr>
					<tr><td>
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="button2_padd button_marg">
									<a href="product_info.php-products_id=70.htm">
									<img src="includes/languages/english/images/buttons/button_details.gif"border="0" alt="" width="67" height="24"  class="btn1"></a><br />
									
                                                                        
                                                                     
                                                                        
                                                                        <a href="shopping_cart.php" name="<?php echo $carte['isbn']?>" class="add-to">
                                                                            <img src="includes/languages/english/images/buttons/button_add_to_cart1.gif" border="0" alt="" width="92" height="24"  class="btn2">
                                                                        </a>
								</td>
								<td class="price2_padd"><span class="productSpecialPrice"><?php echo $carte['pret']?> Lei</span></td>
							</tr>
						</table>
					</td></tr>
					</tr>
				</table>									   
			</td>
		</tr>
	</table>
	</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</td></tr>
			
			
			
			
			
			
			
			
			
			<?php 
  
  }
  ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

		</table>
		<br/>   
		<br/>
		
		
		
			<div style="clear:both;width:100%;text-align:center;">Numar de pagini: <?php echo ceil($pagini);?>
		&nbsp;<?php  for($i = 0; $i < ceil($pagini); $i++){?>
		<a href="index.php?pag=<?php echo $i;?>"> pag <?php echo $i+1;?></a>
		<?php }?>
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		</td>  
  </tr> 	
</table>
</td>
  </tr> 	
</table>
<!-- new_products_eof //-->
</td></tr></table>				
				</td>
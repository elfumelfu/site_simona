<form method="post" enctype="multipart/form-data" action="upload.php" name="changer">
<input type="file" name="poza"/>
<input type="submit" value="trimite"/>
</form>
<?php 
include('admin/connect.php');
 $tmpName  = $_FILES['poza']['tmp_name'];  
       
      // Read the file 
      $fp      = fopen($tmpName, 'r');
      $data = fread($fp, filesize($tmpName));
      $data = addslashes($data);
      fclose($fp);
	 // $query = "INSERT INTO tbl_images ";
      //$query .= "(image) VALUES ('$data')";
     
$poza= "INSERT INTO `test`.`blob` (`poza`) VALUES ( '".$data."' )";
mysql_query($poza);




$sel="SELECT *
FROM `test`.`blob`
LIMIT 0 , 30";
$q = mysql_query($sel);
while($poz = mysql_fetch_array($q)){
header("Content-type: image/jpg"); 
?>
<img src="<?php echo $poz['poza']; ?>"/><?php
}
	  ?>
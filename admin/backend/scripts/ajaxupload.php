<?php
	$imgUploaded = false;
    
    function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
 
 $str = 'filename';
 
//function upload_picture ($str) {
$tip = strtolower(getExtension($_FILES[$str]['name']));
$correct_type = array( 'png', 'jpg', 'jpeg');


$new_img="NULL";

	if(in_array($tip, $correct_type)){
	        
			//numele pozei
				$img_name = $_FILES[$str]['name'];
			//numele pozei
			
			//un sir de caractere generat pentru a nu se suprascrie pozele
				$unique = uniqid();
			//un sir de caractere generat pentru a nu se suprascrie pozele
			
			//noul nume + locatie poza
				$new_img = $unique.$_FILES[$str]['name'];
			//noul nume + locatie poza
			
			//copiere imagine
				//$copied = copy($_FILES['poza']['tmp_name'], $new_img);
			//copiere imagine
			
	move_uploaded_file($_FILES[$str]['tmp_name'], '../poze_carti/'.$new_img);		
    $imgUploaded=true;
	}else{
		echo 'fisierul pe care l-ati introdus nu este o imagine';
	}

?>
<?php
	if($imgUploaded){
        echo '<img src="images/success.gif" width="16" height="16" border="0" style="marin-bottom: -4px;" /> Success!<br />';        
        echo '<img src="poze_carti/'.$new_img.'" border="1" height="141" width="100"/>';
    }else{
    echo '<img src="images/error.gif" width="16" height="16px" border="0" style="marin-bottom: -3px;" /> Error(s) Found: ';
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<title>PHP AJAX Image Upload, Truly Web 2.0!</title>
		<meta name="description" content="PHP AJAX Image Upload, Truly Web 2.0!" />
		<meta name="keywords" content="PHP AJAX Image Upload, Truly Web 2.0!" />
		<meta name="robots" content="index,follow" />
		<meta name="revisit-after" content="10 days" />
		<meta name="author" content="AT Web Results, Inc. - http://www.atwebresults.com" />
		<meta name="copyright" content="AT Web Results, Inc." />
		<meta name="distribution" content="global" />
		<meta name="resource-type" content="document" />
		<link href="css/styles.css" rel="stylesheet" type="text/css" media="all" />
		<!-- MAKE SURE TO REFERENCE THIS FILE! -->
		<script type="text/javascript" src="scripts/ajaxupload.js"></script>
		<!-- END REQUIRED JS FILES -->
		<!-- THIS CSS MAKES THE IFRAME NOT JUMP -->
		<style type="text/css">
			iframe {
				display:none;
			}
		</style>
		<!-- THIS CSS MAKES THE IFRAME NOT JUMP -->
	</head>
	<body>

		<div id="container">
			
			<!-- THIS IS THE IMPORTANT STUFF! -->
			<div id="demo_area">
				<div id="left_col">


					<fieldset>
						<legend>Unobtrusive (Falls Back to a Standard Form)</legend>
						<form action="scripts/ajaxupload.php" method="post" name="unobtrusive" id="unobtrusive" enctype="multipart/form-data">
							
							<p><input type="file" name="filename" id="filename" value="filename" onchange="ajaxUpload(this.form,'scripts/ajaxupload.php','upload_area','File Uploading Please Wait...&lt;br /&gt;&lt;img src=\'images/loader_light_blue.gif\' width=\'128\' height=\'15\' border=\'0\' /&gt;','&lt;img src=\'images/error.gif\' width=\'16\' height=\'16\' border=\'0\' /&gt; Error in Upload, check settings and path info in source code.'); return false;" /></p>
							<noscript><p><input type="submit" name="submit" value="Upload Image" /></p></noscript>
                            
						</form>
					</fieldset>
					<br /><small style="font-weight: bold; font-style:italic;">Supported File Types: gif, jpg, png</small>
				</div>
				<div id="right_col">
					<div id="upload_area">
						Images Will Be uploaded here for the demo.
					</div>
		
				
				</div>
				<div class="clear"> </div>
			</div>
			<!-- END IMPORTANT STUFF -->
			
	</div>	

</body>
</html>
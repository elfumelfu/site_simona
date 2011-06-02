<?php

function createMenu ($head) {
echo '<table border="0" width="100%" cellspacing="0" cellpadding="0"  class="infoBoxHeading_table">
  <tr>
    <td><img src="images/corner_top_left.gif" border="0" alt="" width="4" height="4"></td>
    <td  class="infoBoxHeading_td">'.$head.'</td>
    <td><img src="images/corner_top_right.gif" border="0" alt="" width="4" height="4"></td>
  </tr>
</table>';
}
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css" >
</head>
<body>

<?php createMenu("Categoria"); ?>

</body>
</html>
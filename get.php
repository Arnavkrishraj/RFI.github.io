<?php  
echo'THis id the file you requested<br><br>';
if(isset($_GET['file'])) echo'NO file found';
include('.php' . $_GET['file']);
?>
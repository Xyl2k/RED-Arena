<?php
$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}
?>
<div id="footer"><div id="footer-content"><center>Xylitol // &#x42F;ED</center></div></div>

<link rel="shortcut icon" href="images/favicon.ico">

<style type="text/css">
body {
	background-image: url(images/bg2.gif);
	background-repeat: repeat;
}
body,td,th {
	color: #CCC;
}
</style>
<link href="images/styles.css" rel="stylesheet" type="text/css">
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3"><center><?php
	include 'dbc.php';
			$bannersListe = directoryToArray('images/banners');	//Récupère la liste des bannières
			$rand	= mt_rand( 0 , count($bannersListe)-1 );	//Choisir une bannière au hasard
			
			echo '<img src="', $bannersListe[$rand], '" alt="RED Arena" />';
			
			unset($bannersListe, $rand);
		?></center></td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top">
       <div class="box-content"><div class="box"><h2>Youhou!! your registration is now complete!</h2>
      <p>&nbsp;</p>
      <p><center><img src="images/youhou.png" width="235" height="208" alt="Youhou !" /></center></p>
      <p>&nbsp;</p>
      <p><font size="2" face="Arial, Helvetica, sans-serif">Click <a href="login.php">here</a> for login!</font></p>
	   
      <p align="right">&nbsp; </p></div></div></td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

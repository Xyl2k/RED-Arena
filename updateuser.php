<?php
require("header.php");

	if(isset($_POST['headline']) AND isset($_POST['website']) AND isset($_POST['avatar']))
	{
		
			$website = mysql_real_escape_string($_POST['website']);
			$avatar = mysql_real_escape_string($_POST['avatar']);
			$headline = mysql_real_escape_string($_POST['headline']);
// WTF
			mysql_query('UPDATE users SET website =\'' .$website. '\', avatar =\'' .$avatar. '\' , headline =\'' .$headline. '\' WHERE user_name=\'' .$U1. '\'')
// UPDATE users SET full_name = 'root', website = 'http://google.fr', fax = 'http://google.fr/avatar.jpg' WHERE  user_name = 'root'
		
	}
		
$reponse = mysql_query('SELECT id FROM users WHERE user_name=\'' .$U1. '\'');
while ($donnees = mysql_fetch_array( $reponse ))
    {
$id = $donnees['id']; 
    }
	header('Location: userID.php?id='.$id.'');
?>

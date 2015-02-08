<?php require("header.php"); ?>
<div class="box">
<?php 

$exist_user = false;

if (isset($_GET['user']) && $_GET['user'] == 'fail')
	echo '<p>Nom d\'utilisateur introuvable.</p>';
	
else if (isset($_GET['nick']))
{
	$nick = mysql_real_escape_string($_GET['nick']);
	
	$reponse = mysql_query('SELECT avatar, user_name, full_name, title, website, date, headline FROM users WHERE user_name =\'' .$nick. '\'');

    while ($donnees = mysql_fetch_array( $reponse ))
    {
		$A1 = htmlspecialchars($donnees['avatar']); 
		$U1 = htmlspecialchars($donnees['user_name']);
		$N1 = htmlspecialchars($donnees['full_name']);
		$T1 = htmlspecialchars($donnees['title']); 
		$W1 = htmlspecialchars($donnees['website']); 
		$D1 = htmlspecialchars($donnees['date']);
		$H1 = htmlspecialchars($donnees['headline']);
    }
	?>
	<h2>User: <?php echo $U1; ?></h2>
	<div class="box-content">
	<center><img src="<?php echo htmlspecialchars($A1); ?>" width="200" height="200" /></center><br><br>
	<center><?php echo htmlspecialchars($H1); ?></center><br><br>
	<b>Pseudo:</b> <?php echo htmlspecialchars($U1); ?><br>
	<b>Group:</b> <?php echo $T1; ?><br>
	<b>Website:</b> <a href="<?php echo htmlspecialchars($W1); ?>"><?php echo htmlspecialchars($W1); ?></a><br>
	<b>Member since:</b> <?php echo $D1; ?><br><br>
	<?php echo $U1; ?> Have solved these challenges:<br>
	<?php

		$req = mysql_query('SELECT id_epreuve FROM `epreuve_valide` WHERE pseudo=\''.$nick.'\'');
		
		if (mysql_num_rows($req))
		{
			$exist_user = true;
			while ($datas = mysql_fetch_array($req))
			{
				$sql = mysql_query('SELECT nom_challenge FROM challenges WHERE id_challenge=\''.$datas['id_epreuve'].'\'');
				
				if (mysql_num_rows($sql))
				{
					$return = mysql_fetch_array($sql);
					echo '<a href="epr.php?id='.$datas['id_epreuve'].'">'.htmlspecialchars($return['nom_challenge']).'</a><br />';
				}
			}
		}
		else {
			header('Location : ./userID.php?user=fail'); exit ();
		}
	
	?>
	</div>
<?php
}
else {
	header('Location : ./userID.php?user=fail'); exit ();
}
?>
</div>
<br>
<?php include 'footer.php'; ?>
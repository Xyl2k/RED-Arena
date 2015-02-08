<?php require("header.php"); ?>

<div class="box">
<?php
mysql_real_escape_string($_GET['id']);
$reponse = mysql_query('SELECT nom_challenge, enonce_epreuve, nb_points, auteur_challenge FROM challenges WHERE id_challenge =\'' .mysql_real_escape_string($_GET['id']). '\'');
while ($donnees = mysql_fetch_array( $reponse ))
    {
$Challid = $donnees ['id']; 
$Challname = $donnees['nom_challenge']; 
$Challenonce = $donnees['enonce_epreuve']; 
$Challpoints = $donnees['nb_points']; 
$Challauteur =  htmlspecialchars($donnees['auteur_challenge']); 
    } 
	?>
<h2>Challenge: <?php echo $Challname; ?> By <?php echo $Challauteur; ?></h2>
<div class="box-content">
Score modification: +<?php echo $Challpoints; ?><br>
<b>Description :</b><br> 
<?php echo $Challenonce; ?><br>
<hr style="text-shadow: none;">
<p style="text-shadow: none;" class="bold">Validation :</p>
<form style="text-shadow: none;" method="post" action="validation.php" id="chatb0x">
<input style="text-shadow: none;" name="reponse" size="50" type="text">
<input style="text-shadow: none;" name="id" value="<?php echo $_GET['id']; ?>" type="hidden">
<input style="text-shadow: none;" name="valider" value="Validate" type="submit"></p>

</form>
<br><font color="#CC6600">Who solved it ?</font><br>
<?php
$reponse = mysql_query('SELECT pseudo FROM epreuve_valide WHERE id_epreuve=\'' .mysql_real_escape_string($_GET['id']). '\'');
$whorulz = null;
while ($donnees=mysql_fetch_array( $reponse ))
    {
$whorulz = $donnees['pseudo'];
echo '<a href ="userID.php?nick='.htmlspecialchars($whorulz).'">'.htmlspecialchars($whorulz).'</a>, ';
	}
?>
</div>
</div>

<br>
<?php include 'footer.php'; ?>
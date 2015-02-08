<?php require("header.php"); ?>

<div class="box">
<?php
$reponse = mysql_query('SELECT nom_challenge, enonce_epreuve, nb_points, auteur_challenge FROM challenges WHERE id_challenge =\'' .$_GET['id']. '\'');
while ($donnees = mysql_fetch_array( $reponse ))
    { 
$Challname = $donnees['nom_challenge']; 
$Challauteur = $donnees['auteur_challenge']; 
    } 
	?>
<h2>Challenge: <?php echo $Challname; ?> By <?php echo $Challauteur; ?></h2>
<div class="box-content">
<b>Validation :</b><br>
 <?php
  //si le formulaire a été validé on traite la réponse
if (isset($_POST["valider"])) {
 if (!empty($_POST["reponse"])) {
  $req = mysql_query("SELECT mot_de_passe FROM challenges where id_challenge=".mysql_real_escape_string($_POST["id"]));
    $rep = mysql_fetch_row($req);
  if ($_POST["reponse"] == $rep[0]) {
  $rek = mysql_query("SELECT id_challenge, nom_challenge FROM challenges WHERE mot_de_passe='".$rep[0]."' ");
   $repon = mysql_fetch_row($rek);
    $rek1 = mysql_query("SELECT pseudo,id_epreuve FROM epreuve_valide WHERE pseudo='".$U1."' and id_epreuve=".$repon[0]);
    if (mysql_num_rows($rek1) == 0) {
     $date = date("d/m/Y");
     $heure = date("H:i");
    $requet = mysql_query("INSERT INTO epreuve_valide VALUES ('".$U1."',".$repon[0].",'".$date."','".$heure."')");
    echo'<p><img src="images/checkmark.png"> Congratz ! You validated '.$repon[1].'. </p>';
   }
     else {
    echo'<p><img src="images/alert.png"> You have already validated this chall !</p>';
    }
   }
    else {
    echo'<p><img src="images/delete2.png"> <A href="javascript:history.back()">Bad boy, try again !</A></p>';
   }
 }
  else {
 echo'<p><img src="images/delete-user.png"> Enter something.. lol.</p>';
   }
 }
 ?>
 </div>
</div>

<br>
<?php include 'footer.php'; ?>
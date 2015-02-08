<?php
// Connexion à la base de données
try
{

    // Récupération des 10 derniers messages
    $reponse = mysql_query('SELECT pseudo, message FROM minichat ORDER BY ID DESC LIMIT 0, 10');
    
    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
    while ($donnees = mysql_fetch_array( $reponse ))
    {

        echo '<p><strong>&lt;' . stripslashes(htmlspecialchars($donnees['pseudo'])) . '&gt;</strong> : ' . stripslashes(htmlspecialchars($donnees['message'])) . '</p>';
    }

}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?><br>
<form action="minichat_post.php" method="post"> <p>
 <input name="pseudo" type="hidden" id="pseudo" value="<?php echo $U1; ?>" /><input name="message" type="text" class="edit" id="message" style="text-shadow: none;" maxlength="255" /> <input style="text-shadow: none;" class="bouton" type="submit" value="Send" />            
	</p>
</form>
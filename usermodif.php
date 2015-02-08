<?php require("header.php"); ?>

<div class="box">
<h2>Edit your profile</h2>
<div class="box-content">
<?php 
$reponse = mysql_query('SELECT website, avatar, headline FROM users WHERE full_name=\'' .$username. '\'');

    while ($donnees = mysql_fetch_array( $reponse ))
    {
$A1 = htmlspecialchars($donnees['avatar']); 
$W1 = htmlspecialchars($donnees['website']); 
$H1 = htmlspecialchars($donnees['headline']); 
    }
?>
Avatar best view in 200x200<br>
Name: 20 chars max<br>
Headline: 255 chars max<br><br>
<form style="text-shadow: none;" method="post" action="updateuser.php"  id="chatb0x">
  <table width="625" border="0">
    <tr>
      <td width="142">Avatar url:</td>
      <td width="380"><input name="avatar" type="text" style="text-shadow: none;" value="<?php echo $A1; ?>" size="60" maxlength="200" /></td>
      </tr>
    <tr>
      <td>Website:</td>
      <td><input name="website" type="text" style="text-shadow: none;" value="<?php echo $W1; ?>" size="60" maxlength="300" /></td>
      </tr>
    <tr>
      <td>Headline:</td>
      <td><input name="headline" type="text" style="text-shadow: none;" value="<?php echo $H1; ?>" size="60" maxlength="255" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input style="text-shadow: none;" value="Validate" type="submit" /></td>
    </tr>
    </table>
  </p>
</form>
<?php
echo '<center><a href="userID.php?nick='.$username.'">[ View your public profil ]</a></center>';
?>
</div>
</div>

<br>
<?php include 'footer.php'; ?>
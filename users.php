<?php require("header.php"); ?>

<div class="box">
<h2>Challengers</h2>
<div class="box-content"><br />
<img src="images/green-flag.png" width="16" height="16" alt="Green" /> : Ok<br>
<img src="images/red-flag.png" width="16" height="16" alt="Red" /> : Cheater/Banned<br><br>
<center><table border="0">
   <th id="th2" colspan="4" class="box"><h2><center><img src="images/lock2.png" width="16" height="16" alt="Unlock" /><img src="images/king.png" width="16" height="16" alt="Arena Master" title="Arena Master" /> <font color="#CC6600" align="left">Gladiators classification</font> <img src="images/king.png" width="16" height="16" alt="Arena Master" title="Arena Master" /><img src="images/lock2.png" width="16" height="16" alt="Unlock" /></center></h2></th>
<?php
	$color= "color:green;";
	
	$requete = mysql_query("SELECT e.pseudo, SUM(c.nb_points) as Total FROM epreuve_valide e, challenges c WHERE e.id_epreuve = c.id_challenge GROUP BY pseudo ORDER BY Total DESC");
	$i=0;
	$j=1;
	while($rep = mysql_fetch_array($requete)){
		$req1 = mysql_query("SELECT approved, user_name FROM users WHERE user_name='".$rep['pseudo']."' ");
		$rep1 = mysql_fetch_array($req1);
		if ($rep1['approved'] == 0) { 
			$image = 'CHEATER:<img src="images/red-flag.png" alt="Cheater" title="Cheater" />';
		}
		else {
			$image ='';
		}
		$image = '<img src="images/green-flag.png" alt="Gladiator" title="Gladiator" />';

		echo '<tr>
    <td align="center" style="color:'.$color.';">'.$j.'<font color="'.$color.'"></font></a></td>
    <td align="center" style="color:'.$color.';"><font color="'.$color.'"><a href="userID.php?nick='.htmlspecialchars($rep['pseudo']).'">'.htmlspecialchars($rep['pseudo']).'</a></font></td>
       <td align="center" style="color:'.$color.';"><font color="'.$color.'">'.$image.'</font></td>
    <td align="center" style="color:'.$color.';"><font color="'.$color.'">'.$rep['Total'].'</font></td>
      </tr>';
     
		$i+=1;
		$j+=1;
	}
	echo'</table></center>';
?>
</div>
</div>
<br>
<?php include 'footer.php'; ?>

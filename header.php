<?php 
include "dbc.php";
page_protect();
include "includes/functions.php";

$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}
?>
<link href="images/styles.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico">
<title>RED Arena</title>

<body>
		<div id="container">
<div id="header"><?php
			$bannersListe = directoryToArray('images/banners');	//Récupère la liste des bannières
			$rand	= mt_rand( 0 , count($bannersListe)-1 );	//Choisir une bannière au hasard
			
			echo '<img src="', $bannersListe[$rand], '" alt="RED Arena" />';
			
			unset($bannersListe, $rand);
		?></div>
<?php 
if (isset($_SESSION['user_id'])) { 
?>

<div id="navigation">

					<dl class="dropdown">
					<dt style="width: 85px" class="single"><a href="index.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/home.gif"> Arena main</a></dt>
					</dl>

					<dl class="dropdown">
					<dt style="width: 75px" class="single"><a href="faq.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/info.gif"> FAQ</a></dt>
					</dl>
                    
					<dl class="dropdown">
					<dt style="width: 75px" class="single"><a href="users.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/blogicon3.png"> Scores</a></dt>
					</dl>

					<dl class="dropdown">
					<dt style="width: 110px" class="single"><a href="chall.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/admin.png"> Challenges</a></dt>
					</dl>

					<dl class="dropdown">
					<dt style="width: 85px" class="single"><a href="submit.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/visit.png"> Submit</a></dt>
					</dl>

					<dl class="dropdown">
					<dt style="width: 75px" class="single"><a href="about.php" style="height: 18px; padding-top: 5px;"><img border=0 height="10" width="10" src="images/info.png"> About</a></dt>
					</dl>
					
					<?php  if (checkAdmin()) { 
                                        // Admin only links should go below here    
                                        ?>



					
					<?php } ?>
					
					<dl class="dropdown">
					<dt style="width: 85px" class="single"><a href="logout.php" onclick='return confirm("Are you sure you want to logout?");' style="height: 18px; padding-top: 5px;"><img border=0 src="images/delete.png"> Logout</a></dt>
					</dl>

                                        <?php } ?>

</div>

<div id="main">
<div id="left">
</div>

<div id="right">

<?php
$reponse = mysql_query('SELECT avatar, user_name, full_name, title, score FROM users WHERE full_name=\'' .$username. '\'');
$A1 = null;
$U1 = null;
$F1 = null;
$T1 = null;
while ($donnees=mysql_fetch_array( $reponse ))
    {
$A1 = $donnees['avatar'];
$U1 = $donnees['user_name'];
$F1 = $donnees['full_name'];
$T1 = $donnees['title'];
	}
	
?>

<div class="small-box"><h2>Welcome, <?php echo $F1; ?>!</h2>
    <div class="small-box-content">
        <p><center><img src="<?php echo $A1 ?>" width="90" height="90" /></center><br />
        Profile ID: <font color="white"><?php echo $id; ?></font><br />
        Group: <font color="white"><?php echo $T1 ?></font><br />
        <center><a href="usermodif.php">[Modify]</a></center>
      </p>

  </div></div>

        <div class="small-box"><h2>Members Statistics</h2>
    <div class="small-box-content">
      <p>

 <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="forms">
          <tr>
            <td><font size=1><font color="white">Total Users</font></td>
            <td><?php echo $all; ?></font></td>
          </tr>
          </table>
        </p>

    </div></div>

    <div class="small-box">
      <h2>RSS</h2>
    <div class="small-box-content">
    <?php
	require_once 'magpierss/rss_fetch.inc';
	$url = 'http://redcrew.astalavista.ms/home/rss.xml';
	$rss = fetch_rss($url);
	?>
    <?php echo htmlentities($rss->channel['title']); ?><br>
    <?php
									foreach ($rss->items as $item ) {
										$title = $item['title'];
										$url   = $item['link'];
										echo "<li><a href='$url'>$title</a></li>";
									}
								?>
</div></div>

    <div class="small-box">
      <h2>fish-feeding</h2>
    <div class="small-box-content">
        <p><object type="application/x-shockwave-flash" style="outline:none;" data="fish.swf?up_backgroundImage=http://&up_fishColor5=F45540&up_fishColor3=F4CA40&up_fishName=REDfiSH&up_fishColor2=64C257&up_fishColor6=F45540&up_numFish=5&up_fishColor9=F45540&up_fishColor7=F45540&up_fishColor10=F45540&up_fishColor1=F45540&up_fishColor8=F45540&up_foodColor=FCB347&up_backgroundColor=000000&up_fishColor4=492DAD&" width="180" height="273"><param name="movie" value="fish.swf?up_backgroundImage=http://&up_fishColor5=F45540&up_fishColor3=F4CA40&up_fishName=REDfiSH&up_fishColor2=64C257&up_fishColor6=F45540&up_numFish=5&up_fishColor9=F45540&up_fishColor7=F45540&up_fishColor10=F45540&up_fishColor1=F45540&up_fishColor8=F45540&up_foodColor=FCB347&up_backgroundColor=000000&up_fishColor4=492DAD&"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param><param name="scale" value="noscale"/><param name="salign" value="tl"/></object></p>
    </div></div>
</div>


	
	

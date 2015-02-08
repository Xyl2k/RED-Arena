<?php require("header.php"); ?>

<div class="box">
<h2><p align=left>Chatbox</p></h2>
<div class="box-content" id="chatb0x">
<?php include "minichat.php"; ?>
</div>
</div>
<div class="box">
<h2>Tiny update...</h2>
<div class="box-content">
<p>Firstly, Thanks for your <a href="submit.php">contributions</a> guys :) <br />
  - Added on the user's public profil page a function for see what the user has solved<br />
  - Added on the challenge page some colors, removed the ugly border in the table (same on the rank page)<br />
  - Added on the task page a function for see who has solved it <br />
  TODO: FAQ page.<br />
</p>
</div>
</div>
<div class="box">
<h2>Working...</h2>
<div class="box-content">
<p>We clearly need more challs than my crappy one<br />
  Dont hesitate to code something if you want to <a href="submit.php">contribute</a> :) <br />
    - Fixed the chatbox bug with stripslashes (that was mysql_real_escape_string who maked the problem)<br />
    - On the <a href="users.php">ranking page</a> you can now view the profil of users<br />
    TODO: Find a way for show who have validated what, i've already an idea.</p>
</div>
</div>
<div class="box">
<h2>W&#xFB;t...</h2>
<div class="box-content">
<p>Site launched 27/03/2k11, still in beta</p>
<p>Stay tuned.</p>
</div>
</div>

<br>
<?php include 'footer.php'; ?>
<?php require("header.php"); ?>

<div class="box">
<h2>Send a chall</h2>
<div class="box-content">
<p><form vname="FormName" action="formmail.php" method="post" enctype="multipart/form-data" name="form">
<table border="0" cellpadding="5" cellspacing="0" width="137">
	<tr>
		<td><span id="search">Sender</span>:</td>
		<td><input type="text" name="email" size="35"></td>
	</tr>
	<tr>
		<td>Subject</td>
		<td><input name="subject" type="text" value="Challenge Submission" size="35"></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><textarea rows="12" name="msg" cols="60">Give a link to your crackme for the moment attach file is disabled :(

Tell us about your crackme, make a description, the amounts of points you think it's about

And of course give us a valid username/serial for the name 'ARENA' or 'REDARENA' for exemple
That will be used as validation password for the site.

thanks.</textarea></td>
	</tr>
	<tr>
		<td>Attach file</td>
		<td>Disabled for the moment</td>
	</tr>
	<tr>
		<td>Priority:</td>
		<td>
			<div align="left">
				<select name="priority" size="1" type="hidden">
					<option value="1">Urgent
				</select> <input type="submit" value="Send"></div>
		</td>
	</tr>
</table>
</form>
</p>
</div>
</div>

<br>
<?php include 'footer.php'; ?>
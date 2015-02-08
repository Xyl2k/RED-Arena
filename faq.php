<?php require("header.php"); ?>

<script type="text/javascript" src="lbox/highslide/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="lbox/highslide/highslide.css" />

<!--
	2) Optionally override the settings defined at the top
	of the highslide.js file. The parameter hs.graphicsDir is important!
-->

<script type="text/javascript">
	hs.graphicsDir = 'lbox/highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.numberPosition = 'caption';
	hs.dimmingOpacity = 0.75;

	// Add the controlbar
	if (hs.addSlideshow) hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: .75,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});

</script>

<div class="box">
<h2>FAQ</h2>
<div class="box-content">
<p>This is how to play:<br />
  Go to a task, read the description then download the file and solve it.<br />
  When you have solved a task, return to the site and  validate it  for win some points.<br />
  Then you can <a href="users.php">view and compare</a> your score with others reversers.<br />
  <br>
  <a href="images/solve.png" alt="" border="0" width="200" height="200" class="highslide" onclick="return hs.expand(this)"><img src="images/solve.png" width="445" height="117" alt="Highslide JS" title="Click to enlarge" /></a></p>
<p>&nbsp;</p>
<p>Don't hesitate to <a href="submit.php">send us</a> your own crackme :)<br />
  Have fun.
</p>
</div>
</div>

<?php include 'footer.php'; ?>
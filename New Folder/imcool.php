<!DOCTYPE html>
<html>
	<head>
		<title>Pag not fownd</title>
	</head>
	<body>
		<div style="text-align:center;">
			<div style="width:50%; display: inline-block;">
				<br><br><br>
				<hr>
				<h1 style='color:blue; font-family:verdana;'>4 O four!!!!</h1>
				<p style="font-size:160%;"> da page u r looking 4 wus delted or movd 2 <abbr title="college">colleg</abbr>!!!!!!!!</p>
				<marquee scrollamount="15"> 
					<img src='http://vignette3.wikia.nocookie.net/undertale/images/9/9c/Temmie.gif/revision/latest?cb=20151206115948'
						width="300" height="300">
				</marquee>
				<br>
				
				<abbr title="hello world">hOI</abbr>!!!!!!
				<hr>
				<img src='https://31.media.tumblr.com/78c963de15929a4825567fc4c83b3000/tumblr_inline_nyjrmoFW9G1soslki_500.gif'
					width="50" height="50" style='position: absolute; right: 0; bottom: 0;'>
				<img src='https://31.media.tumblr.com/78c963de15929a4825567fc4c83b3000/tumblr_inline_nyjrmoFW9G1soslki_500.gif'
					width="50" height="50" style='position: absolute; left: 0; bottom: 0;'>
				<img src='https://31.media.tumblr.com/78c963de15929a4825567fc4c83b3000/tumblr_inline_nyjrmoFW9G1soslki_500.gif'
					width="50" height="50" style='position: absolute; right: 0; top: 0;'>
				<img src='https://31.media.tumblr.com/78c963de15929a4825567fc4c83b3000/tumblr_inline_nyjrmoFW9G1soslki_500.gif'
					width="50" height="50" style='position: absolute; left: 0; top: 0;'>

				<form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
					Sero is: <input type="text" name="thingserois"><br>
					<input type="text" name="coolthing"> is cool. <br>
					<input type="submit" name="submit" value="Submit"></input>
				</form>
				
				<?php
				$thingserois = $coolthing = "";
				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				  $thingserois = $_POST["thingserois"];
				  $coolthing = $_POST["coolthing"];
				  
					echo "You thought that Sero is: " . $_POST['thingserois'] . "!!!!!!<br>";
					echo "You thought " . $_POST['coolthing'] . " is cool :O!!!!!!!"; 
				}

				?>
			</div>
		</div>
	</body>
</html>

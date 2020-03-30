 <?php include 'database.php'; ?>
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Shout It!</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>SHOUT IT! Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
					<li class="shout"><span>10:15pm - </span> Brad: Hey what are you guys up to? </li>
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter your name" />
					<input type="text" name="message" placeholder="Enter a message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="Shout it Out" />
				</form>
			</div>
		</div>
	</body>
</html>

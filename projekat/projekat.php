<?php 

require_once("db_utils.php");
session_start();
$d = new Database();

$main_user = false;
if (isset($_POST["loginButton"])) {
	$main_user = $d->checkLogin($_POST["username"], $_POST["password"]);
	if (!$main_user) {
		header("Location: login.php?login-fail");
	} else {
		$_SESSION["user"] = $main_user;
		if ($_POST["remember-me"]) {
			setcookie("username", $main_user[COL_USER_USERNAME], time()+60*60*24*365);
		}
		header("Location: projekat.php");
	}
}

if (!isset($_SESSION["user"])) {
	header("Location: login.php");
}

if (!$main_user) {
	$main_user = $_SESSION["user"];
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Lana Del Rey</title>
	<link rel="stylesheet" type="text/css" href="../projekat/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap">
</head>

<body>
	<div class="navigacija">
		<h1>Lana Del Rey</h1>
		<p>User: <?php echo $_SESSION["user"]["username"];?></p>
		<a href="#"><div>Home</div></a>
		<a href="about.php"><div>About</div></a>
		<a href="career.php"><div>Career</div></a>
		<a href="music.php"><div>Music</div></a>
		<a href="poetry.php"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>

	<div class="content">
		<br>
		<h2>HOME</h2>
	
		<p style="float: right" align="center">
		<p>
			<iframe id="song" src="https://www.youtube.com/embed/ZlZXHV0uTpI" frameborder="0" allowfullscreen></iframe>
 			Lana Del Rey is an American singer-songwriter and record producer. Her music is noted for its stylized, cinematic quality and exploration of themes of sadness, tragic romance, glamor, and melancholia, containing many references to pop culture, particularly 1950s and 1960s Americana. 	
		</p> 
		<p>
			Born in New York City and raised in upstate New York, Del Rey returned to New York City in 2005 to begin her music career. Following numerous projects, including her self-titled debut studio album, Del Rey's breakthrough came with the viral success of her debut single "Video Games" in 2011. She signed with Interscope and Polydor later that year. Her major label debut, Born to Die (2012), was an international success and spawned "Summertime Sadness", a top-ten single on the Billboard Hot 100, as well as the singles "Blue Jeans" and "Born to Die", which charted in several overseas territories. Del Rey released the EP Paradise in 2012. The next year, Del Rey ventured into film, writing and starring in the music short film Tropico; she released "Young and Beautiful" as the lead single for the romantic drama film The Great Gatsby (2013). 
		</p>
		<p>
			Del Rey released her third album, Ultraviolence (2014), to critical success. It topped charts and spawned the single "West Coast". That same year, Del Rey recorded the eponymous theme for the drama film Big Eyes, which earned a Golden Globe nomination. She released the albums Honeymoon in 2015 and Lust for Life in 2017, the latter topping the US Billboard 200. Her sixth album, Norman Fucking Rockwell! (2019), received widespread critical acclaim and two Grammy nominations, including Album of the Year.
			In 2019, Del Rey released the singles "Doin' Time" and "Don't Call Me Angel", the latter being a collaboration with Ariana Grande and Miley Cyrus for the soundtrack of the film Charlie's Angels (2019). Her follow-up releases included the spoken word album and poetry collection, Violet Bent Backwards over the Grass (2020), and her eighth studio album, Chemtrails over the Country Club (2021). 
		</p>
		<p>
			Her accolades include two Brit Awards, two MTV Europe Music Awards, a Satellite Award, nine GAFFA Awards, six Grammy Award nominations, and a Golden Globe nomination.
		</p>
			</p>

	</div>

</body>
</html>
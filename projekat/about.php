<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<title>Lana Del Rey</title>
	<link rel="stylesheet" type="text/css" href="../projekat/style.css">
</head>

<body>
	<div class="navigacija">
		<h1>Lana Del Rey</h1>
		<p>User: <?php echo $_SESSION["user"]["username"];?></p>
		<a href="projekat.php"><div>Home</div></a>
		<a href="#"><div>About</div></a>
		<a href="career.php"><div>Career</div></a>
		<a href="music.php"><div>Music</div></a>
		<a href="poetry.php"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>

	<div class="content2">
		<br>
		<h2>ABOUT</h2>
		<p align="justify">
			<p>
				<h3>Early days</h3>
				<img src="slike/lana3.jpg" height="292.5" width="225" style="float: left; margin-right: 50px; border: solid; border-color: rgb(255,77,77)">
				Del Rey was born as Elizabeth Woolridge Grant on June 21, 1985, in New York City. Del Rey's parents were working in advertising in New York City when she was born, but left that life behind to move to Lake Placid, New York, in the Adirondack Mountains when Del Rey was a baby. She grew up with a younger brother and sister. Her sister, photographer Caroline "Chuck" Grant, shot the Lust for Life album cover and has taken promotional photos of Del Rey.
			</p>
		</p>
		<p>
			<p>
				As a teenager in the small community of Lake Placid, Del Rey started drinking heavily. She'd attended Catholic school, but her parents sent her to Kent School, a boarding school in Connecticut, because of her drinking.
			</p>

			<p>
				Boarding school wasn't a complete cure, but by the age of 18, Del Rey was sober. Instead of attending college right away, she went to live with her aunt and uncle on Long Island; her uncle taught her to play guitar. Though Del Rey soon enrolled at Fordham University in the Bronx, where she studied philosophy, music became her true focus.
			</p>
		</p><br>

		<h3>Early career</h3>
		<img src="slike/lana4.png" style="float: right; margin-left: 50px; border: solid; border-color: rgb(255,77,77)" width="216" height="267">
		<p>
			After graduating from the Kent School, she spent a year living on Long Island with her aunt and uncle and working as a waitress. During this time, Grant's uncle taught her how to play guitar, and she "realized [that she] could probably write a million songs with those six chords."
		</p>

		<p>
			Del Rey, then still known as Lizzy Grant, started her career with open mic nights and club gigs. In 2006, she entered a songwriting competition; she didn't win, but a judge on the panel helped her create a demo, which led to her signing with the indie label 5 Points. With the $10,000 she earned for this deal, Del Rey moved into a New Jersey trailer park. 
		</p>
		<p>
			In fall of 2004, at age 19, Grant enrolled at Fordham University in The Bronx where she majored in philosophy, with an emphasis on metaphysics. She has said she chose to study the subject because it "bridged the gap between God and science... I was interested in God and how technology could bring us closer to finding out where we came from and why." In the spring of 2005, while still in college, Del Rey registered a seven-track extended play with the United States Copyright Office; the application title was Rock Me Stable with another title Young Like Me also listed. A second extended play, titled From the End, was also recorded under Del Rey's stage name at the time, May Jailer. Between 2005 and 2006, she recorded an acoustic album titled Sirens under the May Jailer project, which later leaked on the internet in mid-2012.
		</p>
		<br><br><br>

		<h3>Becoming Lana Del Rey</h3>

		<p> <img src="slike/lana2.jpg" style="float: left; margin-right: 50px; border: solid; border-color: rgb(255,77,77)" width="243" height="345">
			By the time her first album came out, Del Rey had decided she wanted to work under a new name. She flirted with names like Sparkle Rope Jump Queen and May Jailer before settling on Lana Del Rey, which was selected on a trip to Miami in part for its evocation of coastal glamour.
		</p>

		<p>
			Del Rey got back the rights to her first album so as to avoid confusion with her new name. She also dyed her blonde hair and adopted a more retro, glamorized image — at one point describing herself as "gangster Nancy Sinatra." Living in London and focused on songwriting, she produced what became the viral hit "Video Games."
		</p>

		<p>
			The news that Del Rey had signed with the label Interscope made some wonder if "Video Games" was a marketing ploy and not a video she'd created herself. There was also speculation that her father was a millionaire who'd bankrolled her (Del Rey has said her family was never wealthy). In 2012, Del Rey appeared on Saturday Night Live and was criticized for looking nervous and singing hesitantly. However, her first studio album was still a success, as were subsequent releases.
		</p>
		<br><br>
	</div>
</body>
</html>
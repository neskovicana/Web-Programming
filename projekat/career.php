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
		<a href="about.php"><div>About</div></a>
		<a href="#"><div>Career</div></a>
		<a href="music.php"><div>Music</div></a>
		<a href="poetry.php"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>
	
	<div class="content2">
		<br>
		<h2>CAREER</h2>
		
		<h3>Albums</h3>
		<img src="slike/lana17.jpg" style="float: left; margin-right: 50px; border: solid; border-color: rgb(255,77,77)" width="373.5" height="192">
		<ul>
			<li>AKA Lizzy Grant</li>
			<li>Born to die</li>
			<li>Ultraviolence</li>
			<li>Honeymoon</li>
			<li>Lust for life</li>
			<li>Norman F*****g Rockwell</li>
		</ul><br><br><br>

		<h3>Success and other projects</h3>
		<p>
			Success brought Del Rey new opportunities. She modeled for H&M and a Mulberry signature handbag — "The Del Rey" — was created for her. In 2013, she made a short film called Tropico, as well as a Tropico EP. That year, Cedric Gervais made an EDM remix of her "Summertime Sadness" that went platinum.
		</p>
		<p>
			<img src="slike/lana13.jpg" style="float: right; margin-left: 50px; border: solid; border-color: rgb(255,77,77)" width="319.5" height="180">
		In 2014, Del Rey went to the Palace of Versailles to sing at the pre-wedding dinner for Kim Kardashian and Kanye West. Her setlist included "Young and Beautiful," "Summertime Sadness" and "Blue Jeans." Her song "Big Eyes" for the 2014 Tim Burton film of the same name was nominated for a Golden Globe, and Del Rey sang an updated "Once Upon a Dream" for the movie Maleficent (2014).
		</p>
		<p>
			Del Rey toured with Courtney Love in 2015 and inspired James Franco and a co-author to write Flip-Side: Real and Imaginary Conversations With Lana Del Rey (2016). In 2018, Del Rey participated in a big U.S. tour. She attended the 2018 Met Gala alongside Jared Leto while sporting a halo with wings and a dress with knives sticking out of a gold heart.
		</p>
		<p>
			Yet success also has its pitfalls: Del Rey's house was broken into, and in February 2018, a man was arrested at a concert in Orlando, Florida, for plotting to kidnap the singer. And Del Rey's computer was hacked in 2012, exposing personal information and unreleased songs, many of which have spread online.
		</p><br>

		<h3>Grammy nominations</h3>
		<p>
			<img src="slike/lana16.jpg" style="float: left; margin-right: 50px; border: solid; border-color: rgb(255,77,77)" width="195" height="178.5">
			Del Rey has received six Grammy Award nominations. Lust for Life was nominated as Best Pop Vocal Album. Del Rey collaborated on a song for The Weeknd's Beauty Behind The Madness, which was given a Grammy nod for Album of the Year. Del Rey's Paradise EP was nominated as Best Pop Vocal Album, while her song "Young And Beautiful," for the 2013 movie The Great Gatsby, was nominated for Best Song Written for Visual Media. The artist picked up two more nominations in late 2019, with Norman F*****g Rockwell earning a nod for Album of the Year and the title track landing in the Song of the Year category.
		</p>
		<br><br><br><br><br>

		<h3>Controversies</h3>
		<p>
			In an interview with The Guardian in 2014, Del Rey said, "I wish I was dead already" after talking about Kurt Cobain and Amy Winehouse, something Cobain's daughter criticized her for.
		</p>
		<p>
			The song "Ultraviolence" featured the controversial line "He hit me and it felt like a kiss"; in 2017, Del Rey said she's no longer comfortable with the lyric.
		</p>
		<p>
			Early the following year, it was revealed that Radiohead asked for some of the publishing rights to Del Rey's "Get Free" due to similarities to their hit song "Creep."
		</p>
		<p>
			Del Rey came under fire for a May 2020 Instagram post in which she cited Ariana Grande, Cardi B, Nicki Minaj and Beyoncé as singers who "have had number ones with songs about being sexy, wearing no clothes, f------, cheating, etc" and asked why she was being condemned for "glamorizing abuse." Critics wondered why she was singling out women of color, and pointed out that the other artists named in her post had also endured plenty of negative comments.
		</p>
		<br><br>
	</div>
</body>
</html>
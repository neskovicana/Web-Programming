<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Lana Del Rey</title>
	<link rel="stylesheet" type="text/css" href="../projekat/style.css">

	<style type="text/css">
		#tabela td, #tabela th {
		border: 1px solid #ddd;
		padding:12px;
		}

		#tabela tr:nth-child(even){background-color: #FEF2F0;}

		#tabela tr:hover {background-color: #ddd;}

		#tabela th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: rgb(255,77,77);
			color: white;
		}
	</style>
</head>

<body>
	<div class="navigacija">
		<h1>Lana Del Rey</h1>
		<p>User: <?php echo $_SESSION["user"]["username"];?></p>
		<a href="projekat.php"><div>Home</div></a>
		<a href="about.php"><div>About</div></a>
		<a href="career.php"><div>Career</div></a>
		<a href="#"><div>Music</div></a>
		<a href="poetry.php"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>

<div class="content2">
		<br>
		<h2>MUSIC</h2>
		<p>Here, you can read something about all of the Lana's albums.</p>
		<dl>
			<dt><b>AKA Lizzy Grant</b></dt>
			<dd>
				Before Del Rey adopted the professional moniker of Lana Del Rey, she made an album titled Lana Del Ray AKA Lizzy Grant (spelling Ray with an "a," not an "e"). It came out in 2010, but the digital release was only available for a couple of months.
			</dd>
			<dt><b><a href="https://www.youtube.com/watch?v=Bag1gUxuU0g&list=OLAK5uy_lJb0Jpa2n98IyR-Tj07ufsiKI9MVgg-OU&ab_channel=LanaDelReyVEVO">Born to die</a></b></dt>
			<dd>
				Del Rey's first major-label album was Born to Die, which came out in 2012. Though critics didn't embrace the album, it reached No. 2 on the Billboard 200, sold more than 7 million copies worldwide and has been certified platinum by the RIAA. 2012 also saw the release of the Grammy-nominated EP Paradise, which contained the songs "Ride" and "Cola."
			</dd>
			<dt><b><a href="https://www.youtube.com/watch?v=epvlvDzKfv8&list=OLAK5uy_lZVgcQp3acwd7iL5xm6d_I-ACj5F_gf1c&ab_channel=LanaDelRey-Topic">Ultraviolence</a></b></dt>
			<dd>
				Del Rey's Ultraviolence (2014), featured atmospheric ballads like "Pretty When You Cry," "Sad Girl" and "West Coast," and debuted at No. 1 on the Billboard 200. It's also been certified platinum. Before its release, Del Rey redid the completed album with producer Dan Auerbach, using single takes and cheap microphones instead of professional equipment.
			</dd>
			<dt><b><a href="https://www.youtube.com/watch?v=oPU8XJcA__k&list=OLAK5uy_nIKMbuSAOxnLGiMM09jdug9vn_JAGsj_Y&ab_channel=LanaDelRey">Honeymoon</a></b></dt>
			<dd>
				2015 saw the arrival of the dark, critically praised Honeymoon. Del Rey has described the album as "a tribute to Los Angeles." She moved to California in 2012 and says it's a place where she's found more musical collaborators than in New York. It reached No. 2 on the Billboard 200 and landed at No. 1 in countries like Australia and Ireland.
			</dd>
			<dt><b><a href="https://www.youtube.com/watch?v=3-NTv0CdFCk&list=OLAK5uy_m8igIPuZDSmOHDu5REA0LW5iES2wcokuY&ab_channel=LanaDelReyVEVO">Lust for life</a></b></dt>
			<dd>
				In 2017, Del Rey released Lust for Life. Though there are still dark tunes on the album, songs like "Love" gave it a more upbeat tone than earlier Del Rey projects, while tracks like "Coachella - Woodstock in My Mind" take the day's politics into account. It's also the first Del Rey album with guest artists, including The Weeknd on "Lust for Life," Stevie Nicks on "Beautiful People Beautiful Problems" and Sean Ono Lennon on "Tomorrow Never Came." The album reached No. 1 on the Billboard 200.
			</dd>
			<dt><b><a href="https://www.youtube.com/watch?v=wPt0dGg4BKA&list=OLAK5uy_kq_gJdWJ9LUwgYzXMWeocvSyee4OqsvOQ&ab_channel=LanaDelRey-Topic">Norman F*****g Rockwell</a></b></dt>
			<dd>
				In September 2018, Del Rey released two singles from her upcoming sixth studio album, the pensive "Mariners Apartment Complex" and more expansive "Venice Bitch." She followed in January 2019 with "Hope Is a Dangerous Thing for a Woman Like Me to Have – but I Have It," originally named after troubled American poet Sylvia Plath, before dropping a dreamy cover of Sublime's "Doing Time" in May. The album, Norman F*****g Rockwell arrived at No. 3 on the Billboard 200 following its August 2019 debut, with "The Greatest" and the title track also earning releases as singles before the end of the year.
			</dd>
		</dl>

		<p align="center">
		<img src="slike/lana6.png" width="220" height="220">
		<img src="slike/lana7.jpg" width="220" height="220">
		<img src="slike/lana8.png" width="220" height="220">
		<img src="slike/lana9.jpg" width="220" height="220">
		<img src="slike/lana10.jpg" width="220" height="220">
		<img src="slike/lana11.jpg" width="220" height="220">
		</p>
		<br>

		<div>
			<table id="tabela" border="2" style="padding: 25px">
				<tr>
					<th colspan="3">The most critically aclaimed songs by Lana Del Rey</th>
				</tr>
				<tr>
					<td>Rank</td>
					<td>Song name</td>
					<td>Album</td>
				</tr>
				<tr>
					<td>1.</td>
					<td>hope is a dangerous thing for a woman like me to have - but i have it</td>
					<td>Norman F*****g Rockwell</td>
				</tr>	
				<tr>
					<td>2.</td>
					<td>Video Games</td>
					<td>Born to die</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>Brooklin Baby</td>
					<td>Ultraviolence</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>Ride</td>
					<td>Single</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>Venice bitch</td>
					<td>Norman F*****g Rockwell</td>
				</tr>

			</table>
		</div>
	</div>
</body>
</html>
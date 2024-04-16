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
		<a href="career.php"><div>Career</div></a>
		<a href="music.php"><div>Music</div></a>
		<a href="#"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>
	
	<div class="content2">
		<br>
		<h2>POETRY</h2>
		<a href="https://www.amazon.com/Violet-Bent-Backwards-Over-Grass/dp/1982167289"><img id="poetrySlika1" src="slike/lana5.jpg" width="350" height="536" style="float: left; margin-right: 50px; border: solid; border-color: rgb(255,77,77)" title="Link for buying the book on Amazon"></a>
		<h3>Violet Bent Backwards over the Grass</h3>
		<p>
			'Violet Bent Backwards over the Grass' is the debut book by Lana. A poetry collection featuring over thirty original poems and photography, including "13 longer poems" and several short pieces, the collection is Del Rey's first published work and was released by Simon & Schuster on September 29, 2020.
		</p>
		<p>
			In December 2019, Del Rey announced that she would be releasing a spoken word album to accompany the book, also featuring music by Jack Antonoff, which was set to be released in January 2020. Following a delay due to personal problems, the album was set to be released in February through Interscope/Polydor. The cover artwork, a painting of an orange tree by artist Erika Lee Sears, was released in April 2020. The final release dates for the book were announced on July 9, 2020, with the audiobook being released on July 28, 2020 and the hardcover book to follow on September 29, 2020.[2] Half of the proceeds from the book will go to the Navajo Water Project.
		</p>
		<p>
			Since her musical beginnings, Del Rey has expressed how she has been inspired by poetry, with Walt Whitman and Allen Ginsberg being instrumental to her songwriting. Del Rey has written several poems which she has used as spoken monologues in her music videos and short films, the most notable being the lengthier, melancholic pieces featured Ride (2012) and Tropico (2013), in the latter of which she also recited poems from Whitman's Leaves of Grass.
		</p>
		<p>
			In 2018, Del Rey announced her intention to release a book of poetry. She explained how, following some writer's block while beginning work on Norman Fucking Rockwell! (2019) in 2017, she had begun writing poetry. Shortly afterwards, Del Rey revealed she would be binding the book herself and be selling copies for as little as a dollar. When asked why the book would be so inexpensive, Del Rey replied "because my thoughts are priceless." However, Lana's original plans changed when Simon & Schuster acquired the rights and published the book regularly and at a standard price.
		</p>
		<p>
			During her promotional cycle of Norman Fucking Rockwell!, Del Rey described the book as consisting of "thirteen long poems", though she has teased shorter pieces on social media since, including "Never to Heaven", "Happy", and "Quiet Waiter-Blue Forever," among other pieces.
		</p>
		<p>
			In addition to the book, Violet Bent Backwards over the Grass was released as a spoken word album on July 28, 2020 through Interscope and Polydor in physical formats only, with the track "LA Who Am I to Love You" available on streaming for a limited time. The poems are accompanied with music by Jack Antonoff, a frequent collaborator of Del Rey's and the producer of her albums Norman Fucking Rockwell! and Chemtrails over the Country Club.
		</p>
		<br><br>
		<p>
			Here is a part of one of Lana's poems:
		</p>
		<img src="slike/lana21.png" id="poetrySlika2" style="float: right; margin-left: 550px; margin-top: -50px;">
		<div style="display: block; width: 50%">
			<pre>
			<a href="https://www.youtube.com/watch?v=pKukosYC-AQ&ab_channel=VioletBentBackwardsOvertheGrass">"LA Who Am I To Love You"</a>

I left my city for San Francisco
Took a free ride off a billionaire's jet
L.A, I'm from nowhere, who am I to love you?
L.A, I've got nothing, who am I to love you when I'm feeling this way and I've got nothing to offer?
L.A, not quite the city that never sleeps
Not quite the city that wakes, but the city that dreams, for sure
If by dreams you mean in nightmares

L.A, I'm a dreamer, but I'm from nowhere, who am I to dream?
L.A, I'm upset, I have complaints, listen to me
They say I came from money and I didn't, and I didn't even have love, and it's unfair
L.A, I sold my life rights for a big check and I'm upset
And now I can't sleep at night and I don't know why
Plus, I love Zac, so why did I do that when I know it won't last?
.
.
.

</pre>
		</div>
	<div>
</body>
</html>
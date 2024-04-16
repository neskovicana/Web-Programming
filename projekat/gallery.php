<?php
session_start();

require_once("db_utils.php");

$d = new Database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		<a href="poetry.php"><div>Poetry</div></a>
		<a href="gallery.php"><div>Gallery</div></a>
		<a href="login?logout" id="logout-button"><div>Log out</div></a>
	</div>

    <?php

    displayForm();
    if (isset($_POST["sendPhoto"])) {
        processForm();
    } else {
        displayUploadedPhotos();
    }

    function processForm()
    {
        global $d;
        if (isset($_FILES["photo"]) and $_FILES["photo"]["error"] == UPLOAD_ERR_OK) {
            if ($_FILES["photo"]["type"] != "image/jpeg") {
                echo "<p>JPEG photos only</p>";
            } elseif (!move_uploaded_file($_FILES["photo"]["tmp_name"], "photos/" . basename($_FILES["photo"]["name"]))) {
                echo "<p>Sorry, there was a problem uploading that photo.</p>" . $_FILES["photo"]["error"];
            } else {
                // Slika se dodaje u bazu
                $userId = $_SESSION['user']['id'];
                $photoPath = "photos/" . basename($_FILES["photo"]["name"]);

                $d->insertUserPhoto($userId, $photoPath);
                displayUploadedPhotos();
            }
        } else {
            switch ($_FILES["photo"]["error"]) {
                case UPLOAD_ERR_INI_SIZE:
                    $message = "The photo is larger than the server allows.";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $message = "The photo is larger than the script allows.";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $message = "No file was uploaded. Make sure you choose a file to upload.";
                    break;
                default:
                    $message = "Please contact your server administrator for help.";
            }
            echo "<p>Sorry, there was a problem uploading that photo. $message</p>";
        }
    }

    function displayForm()
    {
        ?>

        <div class="content2">
            <br>
            <h2>Gallery</h2>
            Upload photos to your personal Gallery.
            <form action="gallery.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="MAX_FILE_SIZE" value="500000" />

                <label for="photo">Your photo</label>
                <input type="file" name="photo" id="photo" value="" />

                <input type="submit" name="sendPhoto" value="Send photo" />
            </form>
        </div>
        <?php
    }

    function displayUploadedPhotos()
    {
        global $d;
        $userId = $_SESSION['user']['id'];
    
        $photoFiles = $d->getPhotosByUserId($userId);

        if (!empty($photoFiles)) {
            echo '<div class="content2">';
            echo '<h3>Uploaded Photos</h3>';
            foreach ($photoFiles as $photoFile) {
                echo '<img src="' . $photoFile['photo_path'] . '" alt="Uploaded Photo" />';
            }
            echo '</div>';
        }
    }

    ?>

</body>

</html>
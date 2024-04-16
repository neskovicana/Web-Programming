<?php
require_once("db_utils.php");

$d = new Database();
$errors = [];
$messages = [];

session_start();

$username = $password1 = $password2 = $email = $gender = "";

if (isset($_GET["logout"])) {
    session_destroy();
} elseif (isset($_SESSION["user"])) {
    header("Location: projekat.php");
}

if (isset($_GET["login-fail"])) {
    $messages[] = "Wrong username or password!";
}

if (isset($_GET["forget-me"])) {
    setcookie("username", "", time() - 1000);
    header("Location: login.php");
}

function outputError($errorCode) {
    global $errors;
    if (isset($errors[$errorCode])) {
        echo '<div class="error">' . $errors[$errorCode] . '</div>';
    }
}

if (isset($_POST["registerButton"])) {
    // Setovanje promjenljivih
    if ($_POST["username"]) {
        $username = htmlspecialchars($_POST["username"]);
    }
    if ($_POST["email"]) {
        $email = htmlspecialchars($_POST["email"]);
    }
    if ($_POST["password1"]) {
        $password1 = $_POST["password1"];
    }
    if ($_POST["password2"]) {
        $password2 = $_POST["password2"];
    }
    if (isset($_POST["pol"])) {
        $gender = htmlspecialchars($_POST["pol"]);
    }

    // Validacija
    if (!$username) {
        $errors["username"] = "Add username";
    }
    if (!$email) {
        $errors["email"] = "Add email";
    }
    if (!$password1) {
        $errors["password1"] = "Add password";
    }
    if ($password1 != $password2) {
        $errors["poklapanjeLozinki"] = "Passwords do not match";
    }
    if (!$gender) {
        $errors["gender"] = "Add gender";
    }

    if (empty($errors)) {
        $success = $d->insertUser($username, $password1, $email, $gender);
        $messages[] = $success ? "Registration success!" : "Registration fail!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lana Del Rey Fanpage</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap">
    <style>
        body {
            background-color: mistyrose;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 0.2rem;
        }

        h1 {
            font-family: 'Roboto Slab', serif;
            font-size: 2em;
            font-weight: bold;
        }

        h2 {
            font-family: 'Roboto Slab', serif;
            font-size: 1.5em;
            font-weight: bold;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }

        input {
            margin-bottom: 10px;
        }

        table {
            margin-top: 10px;
        }

        a {
            color: blue;
        }

        a:hover {
            color: darkblue;
        }
    </style>
</head>

<body>

    <h1>Welcome to Lana Del Rey Fanpage!</h1>
    <hr>
    <?php
    if (!empty($messages)) {
        foreach ($messages as $message) {
            echo $message;
        }
    }
    ?>

    <h2>Log in </h2>
    <form method="post" action="projekat.php">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" name="username"
                        value="<?php echo isset($_COOKIE["username"]) ? $_COOKIE["username"] : ""; ?>"></td>
            <tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="checkbox" name="remember-me" checked>Remember my username</td>

                <td><a href="?forget-me">Forget me</a></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="loginButton" value="Log in"></td>
            </tr>
        </table>
    </form>

    <br>
    <hr>

    <h2>Register</h2>
    <form method="post" action="">
        <label for="username" class="obavezno-polje">Username:</label>
        <?php outputError("username"); ?>
        <input type="text" name="username" value="<?php echo $username; ?>"><br>

        <label for="email" class="obavezno-polje">Email:</label>
        <?php outputError("email"); ?>
        <input type="text" name="email" value="<?php echo $email; ?>"><br>

        <label for="password1" class="obavezno-polje">Password:</label>
        <?php outputError("password1"); ?>
        <input type="password" name="password1" value="<?php echo $password1; ?>"><br>

        <label for="password2" class="obavezno-polje">Repeat password:</label>
        <?php outputError("password2"); ?>
        <?php outputError("poklapanjeLozinki"); ?>
        <input type="password" name="password2" value="<?php echo $password2; ?>"><br>

        <label for="pol">Gender:</label> <br>
        <?php outputError("gender"); ?>
        <input type="radio" name="pol" value="m" <?php if ($gender == "m")
            echo 'checked'; ?>> M
        <input type="radio" name="pol" value="z" <?php if ($gender == "f")
            echo 'checked'; ?>> F <br>

        <input type="submit" name="registerButton" value="Register">
        </table>
    </form>


</body>

</html>
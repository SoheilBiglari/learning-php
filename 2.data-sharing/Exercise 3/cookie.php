<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-8-2019
 * Time: 11:20
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Data-sharing: exercise 3</title>
</head>
<body>
<h1>Tell us a nice joke!</h1>
<form action="" method="get" onsubmit="createJoke()">
    <textarea id="joke" name="joke" rows="5" cols="80"></textarea>
    <br>
    <input type="submit" value="Submit joke">
</form>
<div class="show-joke">
    <?php showJoke(); ?>
</div>
</body>
</html>

<script>
    function createJoke() {
        let valJoke = document.getElementById('joke').value;
        // Cookies are saved in name-value pairs
        document.cookie = "joke=" + valJoke;
        /* The preventDefault() method cancels the event if it is cancelable,
        meaning that the default action that belongs to the event will not occur.*/
        event.preventDefault();
    };
</script>



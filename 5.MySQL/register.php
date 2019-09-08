<?php
include ('auth.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    fieldset{
        width: 20%;
    }
</style>
<body>
<div class="container">
    <form id="contact"  method="post" action="register.php">
            <!-- display validation here errors are here-->
        <?php include ('errors.php') ?>
        <fieldset>
            <input placeholder="first name" type="text"  name="firstName">
        </fieldset>
        <fieldset>
            <input placeholder="last name" type="text"  name="lastName">
        </fieldset>
        <fieldset>
            <input placeholder="user name" type="text"   name="userName" value="<?php echo $userName ?>">
        </fieldset>
        <fieldset>
            <input placeholder="linkedin" type="text"  name="linkedin">
        </fieldset>
        <fieldset>
            <input placeholder="github" type="text"  name="github">
        </fieldset>
        <fieldset>
            <input placeholder="Email" type="text"  name="email" value="<?php echo $email ?>">
        </fieldset>
        <fieldset>
                <input placeholder="preferred_language " type="text"  name="language">
        </fieldset>
        <fieldset>
            <input placeholder="avatar" type="text"  name="avatar">
        </fieldset>
        <fieldset>
            <input placeholder="video" type="text"  name="video">
        </fieldset>
        <fieldset>
            <input placeholder="quote" type="text"  name="quote" >
        </fieldset>
        <fieldset>
            <input placeholder="quote_author" type="text" name="guote_author">
        </fieldset>
        <fieldset>
            <fieldset>
                 <input  type="date" name="bday">
            </fieldset>
        </fieldset>
        <fieldset>
            <input placeholder="password" type="password"  name="password">
        </fieldset>
        <fieldset>
            <input placeholder="passwordConfirmation" type="password" name="passwordConfirmation">
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
</div>
</body>
</html>



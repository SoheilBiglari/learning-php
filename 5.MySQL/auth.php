<?php
include_once 'connection.php';

session_start();
$userName="";
$email="";
$errors= array();

//connect to database
$conn = openConnection();
$conn = mysqli_connect('localhost','root','','becode_genk');

//if the register button is clicked

if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $email = $_POST['email'];
    $language = $_POST['language'];
    $avatar = $_POST['avatar'];
    $video = $_POST['video'];
    $quote = $_POST['quote'];
    $guote_author = $_POST['guote_author'];
    $created_at = $_POST['bday'];
    $pass = $_POST['password'];
    $pass2 = $_POST['passwordConfirmation'];


    //ensure that uit bestanden is correct ingevoerd
    if (empty($userName)) {
        array_push($errors, "Username is required"); //add errors to errors_array
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email format");
    }
    if (empty($pass)) {
        array_push($errors, "Password is required");
    }
    if ($pass != $pass2) {
        array_push($errors, "The two passwords do not match");
    }

    //if there are no errors save user to database
    if (count($errors) == 0) {
        //hash for password
        $password =md5($pass); //inja ye variabe dorost krdam ke mosavi passworde avalam bashe vali to database ghabul nemikone
        //inja ro bayad ok konm ta hash password okay she nemishe
        $sql = "INSERT INTO hopper_2 (first_name,last_name,username,linkedin,github,email,preferred_language,avatar,video,quote,quote_author,created_at,password)
                VALUES ('$firstName','$lastName','$userName','$linkedin','$github','$email','$language','$avatar','$video','$quote','$guote_author','$created_at',$pass)";

        mysqli_query($conn,$sql);
        ///in code paein bekhater ine ke akhe rigester kardam to ye safe dg bezane id mano bad welcome bege
        $_SESSION['userName'] = $userName;
        $_SESSION['success'] = "you are now logged in";
        header('location: profile.php'); //redirect to profile.php
    }

}


//log user in  from login page
if (isset($_POST['loginUser'])){
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    if (empty($userName)) {
        array_push($errors, "Username is required"); //add errors to errors_array
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
        if (count($errors) == 0){
            $password = md5($password);
            $query = "SELECT * FROM hopper_2 where username='$userName' AND password='$password'";
            $login_result = mysqli_query($conn, $query);

            if (mysqli_num_rows($login_result) == 1) {
                $_SESSION['userName'] = $userName;
                $_SESSION["success"] = "You are now logged in";
                header('Location: profile.php');
            } else {
                array_push($errors, "Wrong email/password combination");
            }

        }
}

    ///logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


closeConnection($conn);

<?php
include_once 'connection.php';
include ('auth.php');
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <link rel="stylesheet" href="style.css" media="all">
        <meta charset="utf-8">
        <title>Profile</title>
        <style>
            .content{
                width: 30%; margin: 0px auto; padding: 20px; border: 1px solid #B0C4DE; background: white; border-radius: 0px 0px 10px 10px; height: 35%    ;
            }
        </style>
    </head>


<body  class="main_grid">
    <header>
        <!-------------Search profile based on ID---------------->
        <form action="test.php" method="post">
            <input type="hidden" name="submmitted" value="true">
            <label for="search-id">Search id:
                <input id="search-id" type="text" name="search">
            </label>
            <input type="submit" value="Get profile!" name="submitted">
        </form>
    </header>
<!--------------inja code welcome inloggen to html ezafe kardam---------------------->
<div class="content">
    <?php if (isset($_SESSION['success'])): ?>
    <div class="error success">
        <h3><?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?></h3>
    </div>
    <?php endif ?>

    <?php if (isset($_SESSION['username'])) ?>           <!--age nashod avaz she username be userName-->
    <p>Welcome <strong><?php echo $_SESSION['userName']?></strong></p>
    <p><a href="profile.php?logout='1'" style="color: red;">Logout</a> </p>
</div>

<div class="v_card">

    <div class="v_card_profile" id="profile">

    <div class="v_card_bg"></div>

    <div class="prof_pic_container">
        <div class="prof_pic_bg">
            <img src="" class="prof_pic" alt="Profile picture.">
        </div>
    </div>
    <!-------------Connect to the database---------------------->
<?php if (isset($_POST['submitted'])):?>
    <?php
    $conn = openConnection();
    $search = $_POST['search'];

    //select the data from database
    $sql = "SELECT * FROM hopper_2  WHERE id = $search";

    // Save selected data in variable
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            //Profile page start
            echo "<div class='title_container'><h2 class='text title1'>".$row["first_name"]." ".$row["last_name"]."</h2><h2 class='text title2'>"
                .$row["username"]."</h2><div class='button_container'><a class='button link_button linkedin' href='".$row['linkedin']."'></a>"
                ."<a class='button link_button github' href='".$row['github']."'></a></div></div>"."<div class='about_me_container'><div class='about_me_sub_container'>
                        <h2 class='text title2'>Quote & Quote author</h2><p class='text'>".$row['quote']."</p><p class='text'>".$row['quote_author']."</p></div></div>"
                ."<div class='prof_pic_container'><div class='prof_pic_bg'><img class='prof_pic' src=".$row['avatar']."></div></div>"
                ."<div class='info_list_container'><ul class='text info_list'><li>Email</li><li>Video</li><li>Datum</li></ul></div>"
                ."<div class='info_answer_list_container'><ul class='text info_answer_list'>
                                <li>".$row['email']."</li><li><a class='text' href='".$row['video']."'>youtube</li><li>".$row['created_at']."</li>";
        }
    } else {
        echo "0 results";
    }
    ?>
    <?php while($row = $result->fetch_assoc()): ?>
    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php

/// close connection to database
closeConnection($conn);
?>
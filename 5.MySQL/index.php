<?php
include ('auth.php');
if (empty($_SESSION['userName'])){
    header('location: login.php');
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data information</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color:#d96459 ;
            color: white;
        }
        tr:nth-child(even){background-color: #f2f2f2};
    </style>
</head>
<body>

    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>language</th>
            <th>Linkedin</th>
        </tr>
        <?php
        include_once 'connection.php';
        //connect to the database
        $conn = openConnection();
        //select data from database hopper_2
        $sql ="SELECT * FROM hopper_2";
        // Save selected data in variable
        $result = mysqli_query($conn , $sql);
        $resultchek = mysqli_num_rows($result);
        //table start here
        if ($resultchek > 0){
            while ($row =mysqli_fetch_assoc($result)){
                echo "<tr><td>". $row ['first_name']."</td><td>". $row['last_name']."</td><td>".$row['email']."</td><td>"
                    .$row['preferred_language']."</td><td><a href='".$row['linkedin']."'>linkedin</a></td></tr>";

            }
        }

        closeConnection($conn);

        ?>
    </table>
</body>
</html>
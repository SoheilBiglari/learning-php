<?php
include_once 'connection.php';

//connect to database
$conn = openConnection();
//update you database set yani az kodom line va where id yani kodom
$sql = "UPDATE hopper_2 SET preferred_language='nl' WHERE id = '7'" ;
//if estefade mikonm ke bebinm in update ke karda dooste mire to server ya na
 if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
//inm update bara profile foto hast
$sql = "UPDATE hopper_2 SET avatar='https://media.giphy.com/media/n1koqKtJ8xffa/giphy.gif' WHERE id = '7'" ;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
closeConnection($conn);
?>

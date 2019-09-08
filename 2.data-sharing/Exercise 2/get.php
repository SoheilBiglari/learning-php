<?php
/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 19-8-2019
 * Time: 09:33
 */

?>

<!DOCTYPE html>
<html>
<head>
    <title>Table Generator</title>
</head>

<body>
<center>
    <div>
        <h3>Enter number of rows you would like to have in the table: </h3>
        <form method="GET">
            <input type="text" name="numRows" />
            <input type="submit" name="submit" value="Generate Table">
        </form>
    </div>

    <div>
        <?php
        if(isset($_GET['numRows'])) {
            $row = $_GET['numRows'];
            $column =2;

            echo '<form method="get" action="" name="form_1st_generate" >';
            echo '<br/>';
            echo '<table style="border-collapse: collapse; border: 1px solid black">';
            for($tr=1;$tr<=$row;$tr++) {
                echo '<tr>';
                for($td=1;$td<=$column;$td++){
                    echo '<td style="border: 1px solid black"><input type="text" name="'.$tr.'" /></td>';
                }
                echo '</tr>';
            }
            echo '</table><br/>';
            echo '<input type="submit" value="Generate Template"/><br/><br/>';
            echo '</form>';

        }
        ?>
    </div>




    <!-- ba in code paein neshon mide html codo to webpage.-->

 <!--   <div>
        <table>
            <hr>
            <h3>Generated Example:</h3>
            <?php
/*            foreach ($_POST as $tr => $value){
                echo "\n<tr><td><label for='".$value."'></label>".$value.": </td><td>     <input type='text' name='".$value."' /></td></tr>\n";
            }
            */?>
        </table>
        <br />
        <textarea style='width:50%;;height:300px;'>
<table>
<?php
/*foreach ($_POST as $tr => $value){
    echo "\n<tr><td><label for='".$value."'></label>".$value.": </td><td>   <input type='text' name='".$value."' /></td></tr>\n";
}
*/?>

</table>
</textarea>
    </div>-->

</center>
</body>
</html>
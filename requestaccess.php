<?php 
    foreach ($_POST as $key => $value) {

        echo $key;
        echo "  ";
        echo $value;
        echo "<br/>";

    }
    

    if(isset($_POST['submit'])){
        foreach($_POST['involvement'] as $role)
        {
            echo $role." ";
        }
        }
?>
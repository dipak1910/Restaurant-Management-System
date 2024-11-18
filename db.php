<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "yajmanre_admin(1)";

    $con = mysqli_connect($server,$user,$password,$db);

    if($con)
    {
    }
    else
    {
        echo mysqli_error($con);
    }
    
?>
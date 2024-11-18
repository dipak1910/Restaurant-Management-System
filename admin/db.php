<?php
    // $server = "localhost";
    // $user = "yajmanre_admin";
    // $password = "U&ji7c]wDYS*";
    // $db = "yajmanre_admin";

    // $con = mysqli_connect($server,$user,$password,$db);

    // if(!($con))
    // {
    //     echo "Connection Error";
    // }

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
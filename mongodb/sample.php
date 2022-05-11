<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="sujith";
    $conn=mysqli_connect($host,$user,$pass,$db);
    if($conn)
    {
        echo "connect successful";

    }
    else
    {
        echo "unable to connect";

    }
    $query ="insert into student values('1','sujith','95')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "$result is inserted";

    }
    else
    {
        echo "unable to insert";

    }
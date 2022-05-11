<?php
    //to make working /n 
    header('Content-type: text/plain');
    require './vendor/autoload.php';
    $con = new MongoDB\Client('mongodb://localhost:27017/');
    //var_dump($con);
    $db=$con->mydb;
    $coll=$db->student;

    //$coll->insertOne(["name"=>$_POST['name'],"age"=>$_POST['age'],"branch"=>$_POST['branch']]);
    //if($coll)
    //{
    //    echo "One record is inserted\n";
        //var_dump($coll);
    //}
    //else
    //{
    //    echo "Error in insertion\n";

    //}
    $cursor = $coll->find();
    //iterate cursor to display title of documents
     foreach ($cursor as $record) {
         echo $record["name"];
         echo $record["age"];
         echo $record["branch"];
         echo "\n";
     }

?>
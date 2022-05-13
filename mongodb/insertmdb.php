<?php
    require './vendor/autoload.php';
    header('Content-type: text/plain');
    $con = new MongoDB\Client('mongodb://localhost:27017/');
    //var_dump($con);
    $db=$con->mydb;
    $coll=$db->student;

    $coll->insertOne(["name"=>$_POST['name'],"age"=>$_POST['age'],"branch"=>$_POST['branch']]);
    if($coll)
    {
        //echo "One record is inserted\n";
        //var_dump($coll);
        $cursor = $coll->find();
        //iterate cursor to display title of documents
       
         foreach ($cursor as $record) {
             echo $record["name"];
             echo $record["age"];
             echo $record["branch"];
             echo "\n";
         }    
    }
    else
    {
        echo "Error in insertion\n";

    }
    //$cursor = $coll->find();
    //iterate cursor to display title of documents
    // foreach ($cursor as $document) {
    //     echo $document["name"] . "\n";
    //     echo $document["year"] . "\n";
    // }

?>
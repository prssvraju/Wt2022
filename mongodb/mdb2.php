<?php
    require './vendor/autoload.php';
    $con = new MongoDB\Client('mongodb://localhost:27017/');
    //var_dump($con);
    $db=$con->test2022;
    $coll=$db->product;
    //$coll->insertOne(["name"=>"WWW","year"=>2022]);
    $cursor = $coll->find();
  // iterate cursor to display title of documents
    foreach ($cursor as $document) {
        echo $document["name"] . "\n";
        echo $document["year"] . "\n";

    }
?>
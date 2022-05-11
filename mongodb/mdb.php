<?php
 try {
    // connect to OVHcloud Public Cloud Databases for MongoDB (cluster in version 4.4, MongoDB PHP Extension in 1.8.1)
    $m = new MongoDB\Driver\Manager('mongodb://localhost:27017/mydb?tls=true');
    echo "Connection to database successfully";
    // display the content of the driver, for diagnosis purpose
    var_dump($m);
    $db = $m->mydb;
    echo "Database mydb selected";
    $collection = $db->createCollection("student");
   


}
catch (Throwable $e) {
    // catch throwables when the connection is not a success
    echo "Captured Throwable for connection : " . $e->getMessage() . PHP_EOL;

 }
?>
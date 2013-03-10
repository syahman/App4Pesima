<?php
  
$services_json = json_decode(getenv("VCAP_SERVICES"),true);
$mongo_config = $services_json["mongodb-1.8"][0]["credentials"];
$username = $mongo_config["username"];
$password = $mongo_config["password"];
$hostname = $mongo_config["hostname"];
$port = $mongo_config["port"];
$db = $mongo_config["db"];
$name = $mongo_config["name"]; 
$connect = "mongodb://${username}:${password}@${hostname}:${port}/${db}";


  try{
    $m = new Mongo($connect);
    $db = $m->selectDB($db); 
  
    $coll = $db->selectCollection('peserta');
    
  } catch(MongoConnectionException $e) {
    //handle connection error
    die($e->getMessage());
  }
  
  echo "insert " ;
  $peserta = array(
   'nama'=>"fsdfsdf",
   'gred'=>"fsdfsdf",
   'jabatan'=>"fsdfsdf",
   'emel'=>"fsdfsdf",
   'peranan'=>"fsdfsdf",
   'alahan'=>"fsdfsdf",
    'ahli'=>"fsdfsdf"
);

$collection->insert( $peserta );
  
$cursor = $collection->find();
  
  
  
  
  while ($cursor->hasNext()): $obj = $cursor->getNext();
  echo $obj["nama"] . "<br/>";
            echo $obj["gred"] . "<br/>";
            echo $obj["jabatan"] . "<br/>";
            echo $obj["emel"] . "<br/>";
            echo $obj["peranan"] . "<br/>";
            echo $obj["ahli"] . "<br/>";
            echo $obj["alahan"] . "<br/>";
  endwhile;		  
  
  ?>
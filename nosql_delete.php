<?php




include "config.php";

	
	$id = $_POST['id'];
        
        //echo $id;
        //exit();
	$coll->remove(array('_id' => new MongoId($id)));
        //$collection->remove(array('_id' => new MongoId($id)));
	
	echo 'Padam Rekod Berjaya! <a href="read.php">(R)ead</a>';
        
        
?>

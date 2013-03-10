<?php

require_once('config.php');
	
   // get id to update, macam pkey dalam rdbms 

   $id = $_POST['id'];


   $p = array();
   $p['nama']= $_POST['nama'];
   $p['gred']= $_POST['gred'];
   $p['jabatan']= $_POST['jabatan'];
   $p['emel']= $_POST['emel'];
   $p['peranan']=implode(",", $_POST['peranan']);
   $p['alahan']=$_POST['alahan'];
   $p['ahli']=$_POST['ahli'];

   $coll->update(array('_id'=>new MongoId($id)),$p);
   	
   echo 'Kemaskini Berjaya! <a href="read.php">(R)ead</a>';
   
?>

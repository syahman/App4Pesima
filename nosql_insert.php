<?php

require_once('config.php');


//print_r(array("\"" . implode("\",\"", $_POST['peranan']) . "\""));
//exit();
$peserta = array(
   'nama'=>$_POST['nama'],
   'gred'=>$_POST['gred'],
   'jabatan'=>$_POST['jabatan'],
   'emel'=>$_POST['emel'],
   'peranan'=>implode(",", $_POST['peranan']),
   'alahan'=>$_POST['alahan'],
    'ahli'=>$_POST['ahli']
);

$coll->insert( $peserta );
	
echo 'Simpan Rekod Berjaya! <a href="read.php">(R)ead</a>';


?>

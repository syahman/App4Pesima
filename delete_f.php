

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Apps4Pesima::Registration</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="layout.css" media="all">
</head>

<body>
<?php

header('Pragma: no-cache');
header('Cache-Control: s-maxage=0, max-age=0, must-revalidate, no-cache');


include 'config.php';

$id = $_POST['nama'];

$p = $coll->findOne(array('_id'=> new MongoId($id)));

?>
<div id="wrapper">

	<h2>MongoDB  (<a href="create.php">C</a>)reate (<a href="read.php">R</a>)ead (<a href="update.php">U</a>)pdate (<a href="delete.php">D</a>)elete </h2>

	<div class="form-container">

	<h2>Pendaftaran Kehadiran Peserta DB-SIG <u>(D)elete</u></h2>
	<form action="nosql_delete.php" method="post">
	  <fieldset>
		<legend>Padam Maklumat Peserta </legend>
			<div>
			  <label for="uname">Nama  </label> 
			  <input name="nama" type="text" class="error" id="nama" size="60" value="<?php echo $p["nama"]; ?>"/>
			  <input name="id" type="hidden" value="<?php echo $p["_id"]; ?>" />
			  <p class="note"><strong>Nama penuh tuan/puan .</strong></p>
			</div>
			<div>
			  <label for="email">Gred Jawatan </label> <input name="gred" type="text" id="gred" size="60" value="<?php echo $p["gred"]; ?>"/>
				<p class="note"><strong>Gred Jawatan Sekarang </strong></p>
			</div>
			
			<div>
			  <label for="emel">Emel </label> <input name="emel" type="text" id="emel" size="60" value="<?php echo $p["emel"]; ?>" />
				<p class="note"><strong>Emel peserta </strong></p>
			</div>
	
			<div>
			  <label for="fname">Jabatan / Agensi </label> 
			  <input id="jabatan" type="text" name="jabatan" size="60" value="<?php echo $p["jabatan"]; ?>"/>
			<p class="note"><strong>Jabatan/Agensi/Tempat tuan/puan bertugas sekarang</strong></p>
			</div>
			<div class="controlset">
				<span class="label">Peranan</span>
				<input name="peranan[]" type="checkbox"  value="Teknikal dan Operasi" checked="checked" /> 
				<label for="approved">Teknikal dan Operasi </label>
				<input name="peranan[]"  value="Pentadbir Pangkalan Data" type="checkbox" /> <label for="pending">Pentadbir Pangkalan Data </label>
				<input name="peranan[]"  value="Pengurusan ICT" type="checkbox" /> <label for="actives">Pengurusan ICT</label>
	  </div>		
			<div class="controlset">
				<span class="label">Anda Merupakan </span>
				<input name="ahli" type="radio" id="ahli" value="perjasa" /> 
				<label for="radio1">Ahli PERJASA </label>
				<input name="ahli" type="radio" id="ahli" value="pesima" checked="checked" /> 
				<label for="radio2">Ahli PESIMA </label>
				<input name="ahli" type="radio" id="ahli" value="lain2" /> 
				<label for="radio3">Lain-Lain</label>
			</div>			
			
	  <div>
			  <label for="lname">Alahan/Pilihan Makanan </label>
		  <textarea id="alahan" name="alahan" cols="40" rows="4"><?php echo $p["alahan"]; ?></textarea>
	  </div>
	  </fieldset>
	
	  <div class="buttonrow">
		<input type="submit" class="button" id="Submit" value="Padam" />
		<input name="Reset" type="reset" class="button" value="Batalkan" />
	</div>

	</form>
	
	</div><!-- /form-container -->
</div>
<!-- /wrapper -->

</body>
</html>


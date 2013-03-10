
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>Apps4Pesima::Registration</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link rel="stylesheet" type="text/css" href="layout.css" media="all">

</head>

<body>

<div id="wrapper">

	<h2>MongoDB  (<a href="create.php">C</a>)reate (<a href="read.php">R</a>)ead (<a href="update.php">U</a>)pdate (<a href="delete.php">D</a>)elete </h2>

	<div class="form-container">

	<h2>Pendaftaran Kehadiran Mesyuarat Agung PESIMA</h2>
	<form action="nosql_insert.php" method="post">
	  <fieldset>
		<legend>Maklumat Peserta </legend>
			<div>
			  <label for="uname">Nama  </label> 
			  <input name="nama" type="text" class="error" id="nama" size="60" />
			  <p class="note"><strong>Nama penuh tuan/puan .</strong></p>
			</div>
			<div>
			  <label for="email">Gred Jawatan </label> <input name="gred" type="text" id="gred" size="60" />
				<p class="note"><strong>Gred Jawatan Sekarang </strong></p>
			</div>
			
			<div>
			  <label for="emel">Emel </label> <input name="emel" type="text" id="emel" size="60" />
				<p class="note"><strong>Emel peserta </strong></p>
			</div>
	
			<div>
			  <label for="fname">Jabatan / Agensi </label> 
			  <input id="jabatan" type="text" name="jabatan" size="60" />
			<p class="note"><strong>Jabatan/Agensi/Tempat tuan/puan bertugas sekarang</strong></p>
			</div>
			<div class="controlset">
				<span class="label">Peranan</span>
				<input name="peranan[]"  value="Teknikal dan Operasi" type="checkbox" /> <label for="approved">Teknikal dan Operasi </label>
				<input name="peranan[]"  value="Pentadbir Pangkalan Data" type="checkbox" /> <label for="pending">Pentadbir Pangkalan Data </label>
				<input name="peranan[]"  value="Pengurusan ICT" type="checkbox" /> <label for="actives">Pengurusan ICT</label>
	  </div>		
			<div class="controlset">
				<span class="label">Anda Merupakan </span>
				<input name="ahli" type="radio" id="ahli" value="perjasa" /> 
				<label for="radio1">Ahli PERJASA </label>
				<input name="ahli" type="radio" id="ahli" value="pesima" /> 
				<label for="radio2">Ahli PESIMA </label>
				<input name="ahli" type="radio" id="ahli" value="lain2" /> 
				<label for="radio3">Lain-Lain</label>
			</div>			
			
	  <div>
			  <label for="lname">Alahan/Pilihan Makanan </label>
		  <textarea id="alahan" name="alahan" cols="40" rows="4"></textarea>
			</div>
	  </fieldset>
	
	  <div class="buttonrow">
		<input type="submit" value="Simpan" class="button" />
		<input name="Reset" type="reset" class="button" value="Batalkan" />
	</div>

	</form>
	
	</div><!-- /form-container -->
</div>
<!-- /wrapper -->

</body>
</html>


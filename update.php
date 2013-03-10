

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

	<h2>Kemaskini Senarai Kehadiran Mesyuarat Agung PESIMA</h2>
	<form action="update_f.php" method="post">
	  <fieldset>
		<legend>Kemaskini Maklumat Peserta </legend>
			<select name="nama">
			    <?php

       include 'config.php';
       
       $cursor = $coll->find();
       
       while ($cursor->hasNext()): $obj = $cursor->getNext();
            
         
      
           echo("<option value='". $obj["_id"]. "'>" . $obj["nama"] . "--" . $obj['jabatan'] .  "</option>");
       
       endwhile;
        
        ?>
			</select>
	        <input type="submit" name="Submit" value="Pilih" />
	  </fieldset>
	
	

	</form>
	
	</div><!-- /form-container -->
	
	
	
</div><!-- /wrapper -->

</body>
</html>


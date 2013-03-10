
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
   
	<h2>Senarai Kehadiran Mesyuarat Agung PESIMA</h2>

	<fieldset><legend>Senarai Peserta</legend>
	      <?php

       include 'config.php';
       
       $cursor = $coll->find();
       
       // sort function .. i like ! -1 desc 1 asc 
       $cursor->sort(array('nama'=>1));
      
       
       // jumlah rekod 
       
       $bil = $cursor->count();
       //echo "<strong>Jumlah Kehadiran : " . $bil . " Orang</strong><br/>"; 
       
    echo "<div id=\"cetak\">";  
    echo "<table id=\"ekewgrid\" width=\"100%\" border=\"0\">\n"; 
    echo "       <tr>\n"; 
    echo "       <td width=\"5%\">Bil.</td>\n"; 
    echo "       <td width=\"35%\">Nama / Gred</td>\n"; 
    echo "       <td width=\"20%\">Jabatan/Agensi</td>\n"; 
    echo "       <td width=\"20%\">Emel/Telefon</td>\n"; 
    echo "       <td width=\"20%\">Peranan</td>\n"; 
    echo "       </tr>\n";
      $nom = 1; 
       while ($cursor->hasNext()): $obj = $cursor->getNext();
           echo " <tr>\n"; 
            echo "    <td align=\"center\">". $nom . ". </td>\n";   
            echo "    <td><strong>" .$obj["nama"] ."</strong> <br/> " . $obj["gred"] . "</td>\n"; 
            echo "    <td>" . $obj["jabatan"] . "</td>\n"; 
            echo "    <td>" . $obj["emel"] . "</td>\n"; 
            echo "    <td>". $obj["peranan"] . "</td>\n"; 
            echo "  </tr>\n";
            $nom = $nom + 1; 
            endwhile;		  
        
        echo "</table>"; 
        echo "</div>";
        
        ?>
	</fieldset>
	
	</div><!-- /form-container -->
	

	
</div><!-- /wrapper -->

</body>
</html>


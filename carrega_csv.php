<!DOCTYPE html>
<html>
<head>
	<title>Carregar CSV</title>
</head>
<body>
	
	<br><br><br>
	Carregar CSV : <input type="file" name="upload" size="20">
	<br><br>
	<hr>
	<br><br>

<?php
	
	print <<< HERE
	  <table border='2' class='tabela'>
		<tr>
       		<th>CNPJ/CPF</th>
        	<th>Incentivador</th>
        	<th>Esporte</th>
        	<th>Cultura</th>
        </tr>
HERE;
	$data = fgetcsv("EmpresasIncentivo.csv");
	foreach ($data as $line) {
		$lineArray = explode("t", $line);
		list($cpfcnpj, $incentivador, $esporte, $cultura) = $lineArray;
		print <<< HERE
		  <tr>
		    <td>$cpfcnpj</td>
		    <td>$incentivador</td>
		    <td>$esporte</td>
		    <td>$cultura</td>
		  </tr>
HERE;		  
				
	}

	print "</table> n";        				

	fclose();

	break;
   
   end here;
?>	

</body>
</html>
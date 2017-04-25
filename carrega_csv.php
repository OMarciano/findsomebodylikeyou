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
		
		

	$row = 1;
	if (($handle = fopen("EmpresasIncentivo.csv", "r")) !== FALSE) {
    		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        			echo "<table border='4' class='tabela' cellspacing='0'>

        				<tr>

        					<td class='hed' colspan='8'>Tabela de contribuicao</td>
        				</tr>	
        					<tr>
        						<th>CNPJ/CPF</th>
        						<th>Incentivador</th>
        						<th>Esporte</th>
        						<th>Cultura</th>
        					</tr>";

        				while ($row < sizeof($data)){
        					echo "<tr>"
        							"<td>$row"
        						"</tr>";
        					$row++;	
        				}

        				}
        			echo "</table>";     				  	 

        			$data++;
        			
        		
    	}
    }	


    fclose($handle);


}
?>	

</body>
</html>
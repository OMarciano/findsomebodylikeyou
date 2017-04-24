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
		
		
		
<?php
$row = 1;
if (($handle = fopen("EmpresasIncentivo.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p> $num campos na linha $row: <br /></p>\n";
        $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }
    }
    fclose($handle);
}
?>

	

	?>	



</body>
</html>
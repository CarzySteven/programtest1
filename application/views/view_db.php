<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php 

	// print_r($results);

	echo "<BR>"; 
	foreach ($results as $key => $value) {
		//Object 呼叫
		echo $value->id. " ".$value->psw."<BR>";
		//Array 呼叫
		//echo $value['id']. $value['name']."<BR>";
	}
?>
</body>
</html>
<?php

    $host = "kark.hin.no";
    $dbname = "stud_v15_naqvi";
    $username = "naqvi";
    $password = "AbbasTerra123,.";
    
	try
	{
		$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
	}
	catch(PDOException $e)
	{
		//throw new Exception($e->getMessage(), $e->getCode);
		printf($e->getMessage());
	}

?>
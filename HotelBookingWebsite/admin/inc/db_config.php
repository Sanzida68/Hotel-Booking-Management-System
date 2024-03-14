<?php 
	
	$hname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db = 'hotel_managment';

	$con = mysqli_connect($hname,$uname,$pass,$db);

	if (!$con) 
	{
		die("Cannot Connect to Database".mysqli_connect_error());//halts script execution
	}

	function filteration($data)//sends array
	{
		foreach ($data as $key => $value) 
		{
			$data[$key] = trim($value);//extra space
			$data[$key] = stripcslashes($value);//back slash
			$data[$key] = htmlspecialchars($value);//special char
			$data[$key] = strip_tags($value);//remove html tags
		}
		  return $data;
	}

	// function selectAll($table)
	// {
	// 	$con = $GLOBALA['con'];
	// 	$res = mysqli_query($con, "SELECT * FROM $table");
	// 	return $res;
	// }

	function select($sql,$values,$datatypes)
	{
		$con = $GLOBALS['con'];//to call outside con
		if ($stmt = mysqli_prepare($con,$sql)) //if prepared store in stmt
		{
			mysqli_stmt_bind_param($stmt,$datatypes,...$values);//splat operator-to dynamically bind values
			if(mysqli_stmt_execute($stmt))
			{
                 $result = mysqli_stmt_get_result($stmt);
				 mysqli_stmt_close($stmt);
				 return $result;
			}
			else{
				mysqli_stmt_close($stmt);
				die("Query cannot be Executed - Select");
			}

            		
		}
		else
		{
			die("Query cannot be Prepared - Select");
		}
	}
 ?>
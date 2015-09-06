<?php  
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
	$valid = 'true';
    $dbname='twentyfour';  
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    echo '';  
	
 
$sql = "DELETE FROM login";


if(mysqli_query($conn, $sql)){  
 echo "";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);

if($valid){
   header('Location: index.html');
   exit();
}
?>

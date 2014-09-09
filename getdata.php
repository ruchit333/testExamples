<?php

// Create connection
$con=mysqli_connect("localhost","onez","raspberry","onez");
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
  {
    // echo "success";
        writeData($con);
}
  
  mysqli_close($con);


function writeData($dbConn)
{
    $result = mysqli_query($dbConn,"SELECT * FROM temperature");

        while($row = mysqli_fetch_assoc($result))
  {
    $output[] = $row;
    // echo $row['name'] . '<br>';
   
}
   print(json_encode($output));    
}

?>

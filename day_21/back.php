<?php

$conn = mysqli_connect("localhost", "root", "", "yk"); 

if($conn -> connect_error)
{
    die($conn -> connect_error);
}
else
{
    echo"Mysql run..." , "<br/>";
}

$enroll = $_REQUEST["enroll"];
$name = $_REQUEST["name"];
$number = $_REQUEST["phone"];
$mail = $_REQUEST["mail"];
$add = $_REQUEST["add"];

$query = " INSERT INTO form(`Enrollnment No.`, `Name`, `Phone`, `Email`, `Address`) VALUES ('$enroll','$name','$number','$mail','$add')";

$result = $conn->multi_query($query);

if ($conn-> error)
{
    echo $conn-> error;
}

else{
    echo "Record Inserted succeusfll.....";
}

mysqli_close($conn);

?>



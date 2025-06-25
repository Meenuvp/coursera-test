<?php
//connect sever and database;
$conn=mysqli_connect("localhost","root","","meenu");
if($conn==TRUE)
{
    echo"Connected successfully";
}
else{
    echo"not connected";
}
$name=$_POST['name'];
$b=$_POST['brownie'];
foreach($b as $c){
    echo $c;
}
$sql="INSERT INTO `order`( `name`, `phone`, `email`, `brownie`, `quantity`, `pickup-date`, `Address`, `notes`, `status`)
 VALUES ('$name','value-3','value-4','$c','value-6','value-7','value-8','value-9','1')";
 $qry=mysqli_query($conn,$sql);
 if($qry==TRUE)
 {
    echo"record added";
 }
 else{
    echo"Wrong";
 }
?>
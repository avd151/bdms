<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from ngo where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"Deleted NGO Successfully";
    header('Location:deletengo.php');
}else{
    echo"ERROR!!";
}
}

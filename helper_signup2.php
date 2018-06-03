<?php
require("formdata.php");

if($_POST['type']=='signup'){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password=$_POST['password'];
    $query = "INSERT INTO userdata(name,email,password)VALUES('$name','$email','$password') ";
    $result = mysqli_query($conn,$query);
    if($result){
        echo 1;
    }
    else {
        echo 0;
    }}





?>
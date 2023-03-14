<?php
require("./admin/layout/db.php");

$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["img"]["name"]);


$name = $_POST["name"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$nan = $_POST["nan"];
$rel = $_POST["rel"];
$caste = $_POST["caste"];
$img = basename($_FILES["img"]["name"]);

if(move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)){
        $sql="INSERT INTO student(name,fname,mname,gender,dob,mobile,email,address,nan,rel,caste,img) VALUE('$name','$fname','$mname','$gender','$dob','$mobile','$email','$address','$nan','$rel','$caste','$img')";
        $conn->query($sql);
        header("Location: /?msg=Your Details Stored Successfully! We will Contact You, Thank you");
        die();
}else{
    header("Location: /?err=Something went Wrong!");
    die();
}


?>
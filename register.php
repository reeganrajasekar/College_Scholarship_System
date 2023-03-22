<?php
require("./admin/layout/db.php");

$name = $_POST["name"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$address = $_POST["address"];
$aadhaar = $_POST["aadhaar"];
$nan = $_POST["nan"];
$rel = $_POST["rel"];
$caste = $_POST["caste"];
$subcaste = $_POST["subcaste"];

$typeofedu = $_POST["typeofedu"];
$course = $_POST["course"];
$syear = $_POST["syear"];
$lyearatt = $_POST["lyearatt"];
$lyearmark = $_POST["lyearmark"];
$physical = $_POST["physical"];

$bank = $_POST["bank"];
$branch = $_POST["branch"];
$accno = $_POST["accno"];
$ifsc = $_POST["ifsc"];
$micr = $_POST["micr"];

$sql="INSERT INTO student(name,fname,mname,gender,dob,mobile,email,aadhaar,nan,rel,caste,subcaste,address,typeofedu,course,syear,lyearatt,lyearmark,physical,bank,branch,accno,ifsc,micr) VALUE('$name','$fname','$mname','$gender','$dob','$mobile','$email','$aadhaar','$nan','$rel','$caste','$subcaste','$address','$typeofedu','$course','$syear','$lyearatt','$lyearmark','$physical','$bank','$branch','$accno','$ifsc','$micr')";
$conn->query($sql);
header("Location: /?msg=Your Details Stored Successfully! We will Contact You, Thank you");
die();


?>
<?php 
require("./db.php");

// 
$sql = "CREATE TABLE student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500),
    fname VARCHAR(500),
    mname VARCHAR(500),
    gender VARCHAR(500),
    dob VARCHAR(500),
    mobile VARCHAR(500),
    email VARCHAR(500),
    aadhaar VARCHAR(500),
    nan VARCHAR(500),
    rel VARCHAR(500),
    caste VARCHAR(500),
    subcaste VARCHAR(500),
    address VARCHAR(500),
    typeofedu VARCHAR(500),
    course VARCHAR(500),
    syear VARCHAR(500),
    lyearatt VARCHAR(500),
    lyearmark VARCHAR(500),
    physical VARCHAR(500),
    bank VARCHAR(500),
    branch VARCHAR(500),
    accno VARCHAR(500),
    ifsc VARCHAR(500),
    micr VARCHAR(500),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully<br>";
} else {
    echo "Error creating table: ";
}


?>
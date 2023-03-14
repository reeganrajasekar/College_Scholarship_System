<?php 
require("./db.php");

// 
$sql = "CREATE TABLE student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mname VARCHAR(500) NOT NULL,
    fname VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    address VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    nan VARCHAR(500) NOT NULL,
    rel VARCHAR(500) NOT NULL,
    gender VARCHAR(500) NOT NULL,
    dob DATE NOT NULL,
    caste VARCHAR(500) NOT NULL,
    img VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully<br>";
} else {
    echo "Error creating table: ";
}


?>
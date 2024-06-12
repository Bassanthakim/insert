<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "school";

try{$conn = new PDO ("mysql:host=$servername;dbname=$dbname"
    ,$username
    ,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "connection failed: " . $e->getMessage();
}

$q= "INSERT INTO students(Name,Contact_info,Email,Password)
VALUES('Youssef','010123','youssef@test.com','y15')";

$conn->exec($q);

$r="INSERT INTO students(Name,Contact_info,Email,Password)
VALUES('Asser','010124','asser@test.com','a24')";
$conn->exec($r);


$h= "INSERT INTO students(Name,Contact_info,Email,Password)
VALUES('Hamza','010125','hanza@test.com','h13')";

$conn->exec($h);

echo "<br> Data Inserted Successfully";
?>
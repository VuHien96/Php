<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$connect = mysqli_connect($servername, $username, $password);
if ($connect) {
    echo "Success" . "<br>";
} else {
    echo "Fail";
}
$sql = "CREATE DATABASE db";
$connect->query($sql);

$connect->query("USE db");

//Tao bảng
$create = "CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (125),
    email VARCHAR (125),
    password VARCHAR (125)
)";
$connect->query($create);

//Thêm dữ liệu
$insert = "INSERT INTO users(id,name,email,password) VALUES (1,'a','a@gmail.com','12345')";
$connect->query($insert);
$insert = "INSERT INTO users(id,name,email,password) VALUES (2,'b','b@gmail.com','12345')";
$connect->query($insert);

//Xóa dữ liệu
$delete = "DELETE FROM users WHERE id = 2";
$connect->query($delete);

//Lấy dữ liệu
$select = "SELECT * FROM users";
$result = $connect->query($select);
while ($row = $result->fetch_assoc()) {
    echo "id: " . $row['id'] . " Name: " . $row['name'] . " Email: " . $row['email'] . " Password: " . $row['password'] . "<br>";
}

echo "*********************************" . "<br>";
$id="1";
$selectOne = "SELECT * FROM users WHERE id = ?";
$stmt = $connect->prepare($selectOne);
$stmt->bind_param('i',$id);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "id: " . $row['id'] . " Name: " . $row['name'] . " Email: " . $row['email'] . " Password: " . $row['password'];
}


<?php

if ($_POST['name'] && $_POST['age'] && $_POST['address']) {
    echo "Name: " . $_POST['name']."</br>";
    echo "Age: " . $_POST['age']."</br>";
    echo "Address: " . $_POST['address']."</br>";
}
?>
<style>
    .form input{
        margin-bottom: 10px;
    }
</style>
<form action="get_post.php" method="post" class="form">
    <input type="text" name="name" placeholder="Nhập tên"/><br>
    <input type="text" name="age"placeholder="Nhập tuổi"/><br>
    <input type="text" name="address" placeholder="Nhập địa chỉ"/><br>
    <input type="submit"/>
</form>
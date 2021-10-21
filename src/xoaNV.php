<?php
require("connsql.php");

if(isset($_GET['reci_id'])) {
    $id = $_GET['reci_id'];
    $sql = "delete from db_nhanvien where reci_id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}


<?php 
    require ("connsql.php");

    if(isset($_POST['them'])) {
        $reci_name = $_POST['fullName'];
        $reci_age = $_POST['Tuoi'];
        $reci_bgrp = $_POST['NhomMau'];
        $reci_bqnty = $_POST['LuongMau'];
        $reci_sex = $_POST['GT'];
        $reci_reg_date = $_POST['date']; 
        $reci_phno = $_POST['sdt'];

        $sql_insert = "INSERT into blood_recipient(reci_id, reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date, 
reci_phno)
            values (' $reci_name',' $reci_age','$reci_bgrp','$reci_bqnty','$reci_sex','$reci_reg_date','$reci_phno ')";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');

    }
?>

    <?php
        include('header.php');
    ?>
    <div class="container">
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" >
            </div>
            <div class="mb-3">
                <label for="Tuoi" class="form-label">Tuổi</label>
                <input type="text" name="Tuoi" class="form-control" id="Tuoi" >
            </div>
            <div class="mb-3">
                <label for="NhomMau" class="form-label">Nhóm máu</label>
                <input type="text" name="NhomMau" class="form-control" id="NhomMau" >
            </div>
        <div class="mb-3">
                <label for="LuongMau" class="form-label">Số lượng máu:</label>
                <input type="text" name="LuongMau" class="form-control" id="LuongMau" >
            </div>
            <div class="mb-3">
                <label for="GT" class="form-label">Giới Tính</label>
                <input type="text" name="GT" class="form-control" id="GT" >
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Ngày nhận máu</label>
                <input type="date" name="date" class="form-control" id="date" >
            </div>
            <div class="mb-3">
                <label for="sdt" class="form-label">Số điện thoại</label>
                <input type="text" name="sdt" class="form-control" id="sdt" >
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="themdanhba">Thêm</button>
        </form>
    </div>
<?php 
include('./footer.php');
?>

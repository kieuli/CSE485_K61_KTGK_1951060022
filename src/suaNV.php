<?php 
$conn = mysqli_connect('localhost', 'root', '', 'qlmau');
if (!$conn) {
    die("Kết nối thất bại  .Kiểm tra lại các tham số    khai báo kết nối");
}
         if(isset($_POST['submit'])) {
        $reci_name = $_POST['fullName'];
        $reci_age = $_POST['Tuoi'];
        $reci_bgrp = $_POST['NhomMau'];
        $reci_bqnty = $_POST['LuongMau'];
        $reci_sex = $_POST['GT'];
        $reci_reg_date = $_POST['date']; 
        $reci_phno = $_POST['sdt'];

        $sql_update = "UPDATE blood_recipient set reci_name = ' $reci_name',reci_age = ' $reci_age',reci_bgrp = '$reci_bgrp',reci_bqnty = '$reci_bqnty', reci_sex = '$reci_sex',reci_reg_date = '$reci_reg_date', reci_phno = '$reci_phno', where reci_id = '$reci_id',";
        mysqli_query($conn,$sql_update);
        header('location: index.php');
    }
?>

    <?php
        include('header.php');
    ?>
    <?php 
    require ("connsql.php");
        if(isset($_GET['reci_id'])) {
            $id = $_GET['reci_id'];
            $sql = "SELECT reci_id, reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date, reci_phno from blood_recipient";
            $result = mysqli_query($conn, $sql); 
        }
    ?>
    <div class="container">
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="fullName" class="form-label">Họ và Tên</label>
                <input type="text" name="fullName" class="form-control" id="fullName" value="<?php echo $row['reci_name']; ?>">
            </div>
            <div class="mb-3">
                <label for="Tuoi" class="form-label">Tuổi</label>
                <input type="text" name="Tuoi" class="form-control" id="Tuoi" value="<?php echo $row['reci_age']; ?>">
            </div>
            <div class="mb-3">
                 <label for="NhomMau" class="form-label">Nhóm máu</label>
                <input type="text" name="NhomMau" class="form-control" id="NhomMau" value="<?php echo $row['reci_bgrp']; ?>">
            </div>
            <div class="mb-3">
                <label for="LuongMau" class="form-label">Số lượng máu:</label>
                <input type="text" name="LuongMau" class="form-control" id="LuongMau" value="<?php echo $row['reci_bqnty']; ?>">
            </div>
            <div class="mb-3">
               <label for="GT" class="form-label">Giới Tính</label>
               <input type="text" name="GT" class="form-control" id="GT" value="<?php echo $row['reci_sex']; ?>">
            </div>
            <div class="mb-3">
                 <label for="date" class="form-label">Ngày nhận máu</label>
                 <input type="date" name="date" class="form-control" id="date" value="<?php echo $row['reci_reg_date']; ?>">
            </div>
            <div>
                <label for="sdt" class="form-label">Số điện thoại</label>
                <input type="text" name="sdt" class="form-control" id="sdt"  value="<?php echo $row['reci_phno']; ?>"> 
            </div>
            <input type="hidden" name="reci_id" class="form-control" id="reci_id" value="<?php echo $row['reci_id']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div>
<?php 
include('./footer.php');
?>
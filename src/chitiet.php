<?php
require "connsql.php";

?>
<?php 
include('./header.php');
?>
    <main class="bg-warning">
        <div class="container">
            <a href="themNV.php" class="mt-4"><button class="btn btn-primary mt-4">thêm</button></a>
            <div class="row">
                <div></div>
                <div class="directory-table">
                    <div class="table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">tuổi</th>
                                    <th scope="col">nhóm máu</th>
                                    <th scope="col">số lượng máu</th>
                                    <th scope="col">giới tính</th>
                                    <th scope="col">ngày nhận</th>
                                    <th scope="col">số điện thoại</th>
                                    <th scope="col">Sửa</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                                <?php
                                //b1 :ket noi csdl

                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT reci_id, reci_name, reci_age, reci_bgrp, reci_bqnty, reci_sex, reci_reg_date, 
                                reci_phno from blood_recipient ";
                                $result = mysqli_query($conn, $sql);

                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if (mysqli_num_rows($result) > 0) {
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i; ?></th>
                                            <td><?php echo $row['reci_name']; ?></td>
                                            <td><?php echo $row['reci_age']; ?></td>
                                            <td><?php echo $row['reci_bgrp']; ?></td>
                                            <td><?php echo $row['reci_bqnty']; ?></td>
                                            <td><?php echo $row['reci_sex']; ?></td>
                                            <td><?php echo $row['reci_reg_date']; ?></td>
                                            <td><?php echo $row['reci_phno']; ?></td>
                                            <td><a href="suaNV.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-edit"></i></a></td>
                                            <td><a href="xoaNV.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                <?php
                                        $i++;
                                    }
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php 
include('./footer.php');
?>
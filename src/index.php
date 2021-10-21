<?php
    require "connsql.php";

?>
<?php 
include('./header.php');
?>
    <main class="bg-warning">
        <div class="container">
            <a href="chitiet.php" class="mt-4"><button class="btn btn-primary mt-4">chi tiết</button></a>
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
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                                <?php
                                //b1 :ket noi csdl
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT * FROM blood_recipient";
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
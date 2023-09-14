<?php
$con=mysqli_connect('localhost', 'root','','qlkytuc')
or die('Lỗi kết nối');  
$sql="SELECT * FROM  student WHERE id like '%$id%'";
$data=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Danh sách sinh viên</title>
  <link rel="stylesheet" href="../../css/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
    <?php
        include_once './dashboard_NV.php';
    ?>
     <form style="padding-top: 150px; padding-left:200px;" method="post" action="">
        <table border=1 width=80% style="padding-left: 320px;">
        <h2 style="padding-left: 350px;">Danh sách sinh viên</h2>
        <tr style="background:  rgb(65,74,76); color:aliceblue;">
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Họ tên</th>
                <th>Giới tính</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Căn cước công dân</th>
                <th>Lớp</th>
                <th>Mã phòng</th>
                <th>Mã giường</th>
                <th>Mã hợp đồng</th>
            </tr>
            <?php
                if(isset($data)&& $data!=null)
                {
                    $i=1;
                    while($row=mysqli_fetch_array($data)){
                
            ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['gender'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['cccd'] ?></td>
                <td><?php echo $row['class'] ?></td>
                <td><?php echo $row['room-id'] ?></td>
                <td><?php echo $row['bed-id'] ?></td>
                <td><?php echo $row['contract-id'] ?></td>
            </tr>
            <?php
            }
        }
            ?>
        </table>
    </form>
</body>
</html>

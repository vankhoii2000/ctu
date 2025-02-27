<?php
    include 'connect-admin.php';

    $sql = "SELECT * FROM BINH_LUAN as BL, SAN_PHAM as SP 
    WHERE BL.ma_san_pham = SP.ma_san_pham";
    $binhluan = mysqli_query($connect, $sql);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <title>bình luận</title>
</head>


<body>
    <div class="container-fluid">
        <?php
        include 'header-admin.php';
        ?>

        <h4 class="text-center fs-2 mt-5" style="color:green">BÌNH LUẬN</h4>
        <div class="container mt-5">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Tên cây cảnh</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Ngày</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($value =  mysqli_fetch_assoc($binhluan)):?>
                    <tr>
                        <th scope="row"></th>
                        <td><?php echo $value['ten_san_pham']?></td>
                        <td><?php echo $value['ho_ten_kh']?></td>
                        <td><?php echo $value['noi_dung']?></td>
                        <td><?php echo $value['ngay_bl']?></td>

                        <td><a href="xoabinhluan.php?id=<?=$value['so_thu_tu']?>" type="button" class="btn btn-danger">Xóa</a></td>
                    <tr>
                        <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>



</html>

<?php
require 'connect.php';
$sql = "SELECT * FROM `donhang`";
$query= $connect->prepare($sql);
$query->execute();
$list_dh=array();
while($sp=$query->fetch(PDO::FETCH_ASSOC)){
    array_push($list_dh,$dh);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="controvary mx-auto max-w-7xl">
        <header class="max-w-7xl  bg-amber-300 mt-2 rounded-[10px]">
            <h1 class="font-mono font-medium text-[30px] p-2 " >Trang quản trị </h1>
        </header>
        <div class="menu mt-2 bg-slate-800 ">
                <ul class="flex p-4">
                <li><a class="pl-4 text-white" href="index.php">Trang chủ</a></li>
                    <li><a class="pl-4 text-white" href="">Loại hàng</a></li>
                    <li><a class="pl-4 text-white" href="">Hàng hóa</a></li>
                    <li><a class="pl-4 text-white" href="">Khách hàng</a></li>
                    <li><a class="pl-4 text-white" href="./sanpham/list_sp.php">Sản phẩm</a></li>
                    <li><a class="pl-4 text-white" href="">Đánh Giá</a></li>    
                    <li><a class="pl-4 text-white" href="">Thống kê</a></li>     
                </ul>
        </div>
        <div class="max-w-5xl">
            Danh sách đơn hàng 
            <table>
                <thead>
                    <tr>
                        <th>Mã Đơn Hàn</th>
                        <th>Tên Đơn Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Số Lượng</th>
                        <th>Địa chỉ</th>
                        <th>Giá</th>
                        <th>Đơn vị vận chuyển</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($list_dh as $dh){?>
                    <tr>
                        <td><?php echo $dh['madonhang']?></td>
                        <td><?php echo $dh['tendonhang']?></td>
                        <td><?php echo $dh['tenkhachhang']?></td>
                        <td><?php echo $dh['soluong']?></td>
                        <td><?php echo $dh['diachi']?></td>
                        <td><?php echo $dh['gia']?></td>
                        <td><?php echo $dh['donvivanchuyen']?></td>
                    </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>
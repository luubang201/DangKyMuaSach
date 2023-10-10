<div class="mx-auto w-[1200px] bg-white">
     <div class="row tilead mb    ">
         <h2> Thống kê</h2>
     </div>
     <div class="row fromconten">
         <div class="row mb-2">
             <table class="formloai ">
                 <tr>
                     <th>Mã danh mục </th>
                     <th>Tên danh mục </th>
                     <th>Số Lượng </th>
                     <th>Giá cao nhất </th>
                     <th>Giá thấp nhất </th>
                     <th>Giá trung bình </th>
                     <th></th>
                 </tr>
                 <?php
                    foreach ($listhongke as $thongke) {
                        extract($thongke);
                        echo '
                    <tr>
                    <td >' . $id . '</td>
                    <td >' . $name . '</td>
                    <td >' . $countsp . '</td>
                    <td >' . $maxprice . '</td>
                    <td >' . $minprice . '</td>
                    <td >' . $avgprice . '</td>
                  </tr>
                        ';
                    }
                    ?>

             </table>
         </div>
         <div class="row mb">

             <a href="index.php?act=bieudo"><input class="p-3 m-3 bg-blue-200 " type="button" value="Xem biểu đồ"></a>

         </div>
     </div>
 
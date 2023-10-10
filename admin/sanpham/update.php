<?php
    if (is_array($sanpham)) {
        extract($sanpham);
    }
    $hinhpath = "../uploads/" . $img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='" . $hinhpath . "' width='80'>";
    } else {
        $hinh = "no photo";
    }
    $id = $_GET["id"];
    ?>
 <div class="mx-auto max-w-7xl bg-white mt-2  rounded">
     <div class="p-2 bg-blue-200 rounded">
         <h1 class="">Cập nhập loại hàng hóa </h1>
     </div>
     <div class="m-3">
         <form method="POST" enctype="multipart/form-data" action="index.php?act=update_sp&id=<?php echo $id ?>">
             <div class="border w-[160px] rounded">
                 <select name="iddm">
                     <option value="0">Tất cả </option>
                     <?php
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            if ($iddm == $id)  echo '<option value="' . $id . '" selected>' . $tendanhmuc . '</option>';
                            else
                                echo '<option value="' . $id . '" >' . $tendanhmuc . '</option>';
                        }
                        ?>

                 </select>
             </div>
             <div class="row mb">
                 Tên sản phẩm <br>
                 <input type="text" class="border w-[300px] rounded" name="tensp" value="<?= $name ?>">
             </div>
             <div class="row mb">
                 Giá <br>
                 <input type="text" class="border w-[300px] rounded" name="gia" value=" <?= $price ?> ">
             </div>
             <div class=" row mb">
                 Hình <br>
                 <input type="file" class="border w-[300px] rounded" name="hinh">
                 <?= $hinh ?>
             </div>
             <div class="row mb">
                 Mô tả <br>
                 <textarea name="mota"  cols="80" rows="7"><?= $mota ?></textarea>
             </div>
             <div class="row mb">
                 <input type="submit" name="update" class="p-2 bg-blue-300 rounded " value="Cập nhật  ">
                 <a href="index.php?act=lsp" class="p-2 bg-blue-300 rounded "><input type="button" value="Danh sách sản phẩm"></a>
                 <input type="hidden" name="id" value="<?= $id ?>">
             </div>
             <?php
                if (isset($thongbao) && ($thongbao != "")) $thongbao;
                ?>
         </form>
     </div>
 </div>
 </div>
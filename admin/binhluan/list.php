<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <h1>Danh sách bình luận</h1>
    <table class="mx-auto">
        <thead>
            <tr>
                <th class="w-[50px] ">ID</th>
                <th class="w-[200px]">Nội dung</th>
                <th class="w-[200px]">IDTK</th>
                <th class="w-[200px]">Idpro</th>
                <th class="w-[200px]">Ngày bình luận</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listbl as $bl) {
    extract($bl);
    $xoabl = "index.php?act=xoabl&id=" . $id;
    echo ' <tr >
            <td>' . $id . '</td>
            <td class="bg-neutral-300 ">' . $noidung . '</td>
            <td class="text-center">' . $idtk . '</td>
            <td class="bg-neutral-300 text-center">' . $idpro . '</td>
            <td class="bg-neutral-300">' . $ngaybinhluan . '</td>
            <td class="flex">     
                <a href="' . $xoabl . '" class="p-1 bg-blue-300 rounded">Xóa</a>
            </td>
            </tr>';
            } ?>

        </tbody>
    </table>
   
    
    <?php
if (isset($thongbao) && ($thongbao != ''))
    echo $thongbao;
?>
</div>
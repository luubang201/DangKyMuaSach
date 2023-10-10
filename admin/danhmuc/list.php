<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <div class="mx-auto max-w-7xl">
        <table class="mx-auto">
            <thead class="mb-3">
                <tr class="bg-blue-400 m-3">
                    <th class="w-[170px]">Mã Loại</th>
                    <th class="w-[200px]">Tên danh mục</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($listdm as $dm) {
    extract($dm);
    $suadm = "index.php?act=suadm&id=" . $id;
    $xoadm = "index.php?act=xoadm&id=" . $id;
    echo '  <tr class="p-1">
                <td class="text-center">' . $id . '</td>
                <td class="text-center">' . $tendanhmuc . '</td>
                <td>
                    <a href="' . $suadm . '" class="p-1 bg-blue-300 rounded">Sửa</a> 
                    <a href="' . $xoadm . '" class="p-1 bg-blue-300 rounded">Xóa</a>
                </td>
            </tr>';
}?>

            </tbody>
        </table>
        <a href="index.php?act=adddm"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
                value="Thêm mới"></a>
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=ldm">Danh sách sản
                phẩm</a></button>
        <?php
if (isset($thongbao) && ($thongbao != ''))
    echo $thongbao;
?>
    </div>
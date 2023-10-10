<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <div class="mx-auto max-w-7xl">
        <table class="mx-auto">
            <thead class="mb-3">
                <tr class="bg-blue-400 m-3">
                    <th class="w-[170px]">Tên khách hàng</th>
                    <th class="w-[200px]">Mã đơn hàng</th>
                    <th class="w-[200px]">Địa chỉ</th>
                    <th class="w-[200px]">Số điện thoại</th>
                    <th class="w-[200px]">Tổng tiền</th>
                    <th class="w-[200px]">Phương thức thanh toán</th>
                    <th class="w-[200px]">Trạng thái</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($listdh as $dh) {
    extract($dh);
    $xoadh = "index.php?act=xoadh&id=" . $id;
    echo '  <tr class="p-1">
                <td class="text-center">' . $bill['name'] . '</td>
                <td class="text-center">' . $cart['id'] . '</td>
                <td class="text-center">' . $id . '</td>
                <td>
                    
                    <a href="' . $xoadh . '" class="p-1 bg-blue-300 rounded">Xóa</a>
                </td>
            </tr>';
}?>

            </tbody>
        </table>
        <a href="index.php?act=adddh"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
                value="Thêm mới"></a>
        <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=ldh">Danh sách sản
                phẩm</a></button>
        <?php
if (isset($thongbao) && ($thongbao != ''))
    echo $thongbao;
?>
    </div>
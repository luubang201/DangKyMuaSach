<div class="flex">
    <div class="donhang">
        <h1>Đơn hàng của bạn</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>Mã Đơn hàng</th>
                <th>Ngày đặt</th>
                <th>Số lượng</th>
                <th>Tổng tiền</th>
                <th>Tình trạng đơn hàng</th>
            </tr>
            <tr>
                <?php
if (is_array($listbill)) {
    foreach ($listbill as $bill) {
        $ttdh = get_ttdh($bill['trangthai']);
        $count_sp = loadall_cart_count($bill['id']);
        echo '
                <tr>
                <td>DAM-' . $bill['id'] . '</td>
                <td>' . $bill['ngaydathang'] . '</td>
                <td>' . $bill['soluong'] . '</td>
                <td>' . $bill['total'] . '</td>
                <td>' . $ttdh . '</td>
                </tr>
                ';

    }
}

?>
            </tr>
        </table>
    </div>
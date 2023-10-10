<div class="flex">
    <div class="xacnhan w-[1000px] bg-white mt-2 rounded p-2">
        <h1 class="bg-gray-200 text-[17px] text-center">Cảm ơn quý khách đã đặt hàng</h1>
        <div class="thongtindonhang">
            <?php
if (isset($billct) && (is_array($billct))) {
    extract($billct);
}
?>
            <div class="donhang">
                <h1 class="text-[18px] bg-gray-200">Thông tin đơn hàng</h1>
                <ul>
                    <li>Mã đơn hàng : DAM-
                        <?= $bill['id'] ?>
                    </li>
                    <li>Ngày Đặt hàng :
                        <?= $bill['ngaydathang'] ?>
                    </li>
                    <li>Tổng đơn hàng :
                        <?= $bill['total'] ?>
                    </li>
                    <li>Phương thức thanh toán :
                        <?= $bill['pttt'] ?>
                    </li>
                </ul>
            </div>
            <div class="">
                <h1>Thông tin đơn hàng</h1>
                <table>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td>
                            <?= $bill['name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <?= $bill['address'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <?= $bill['email'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <?= $bill['tel'] ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="chitiet">
                <h1>Chi tiết giỏ hàng</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>Hình </th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng </th>
                        <th>Thành tiền</th>
                    </tr>
                    <tr>
                        <?php
show_bill_ct($billct);
?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
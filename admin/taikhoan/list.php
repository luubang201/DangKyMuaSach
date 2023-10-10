<div class="mx-auto max-w-7xl bg-white p-3 mt-2 rounded ">
    <h1>Danh sách tài khoản</h1>
    <table class="mx-auto">
        <thead>
            <tr>
                <th class="w-[50px] ">Mã tài khoản</th>
                <th class="w-[200px]">Tên đăng nhập</th>
                <th class="w-[200px]">Email</th>
                <th class="w-[200px]">Mật khẩu</th>
                <th class="w-[200px]">Địa chỉ</th>
                <th class="w-[200px]">Số điện thoại</th>
                <th class="w-[200px]">Vai trò</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listtk as $tk) {
    extract($tk);
    $suatk = "index.php?act=suatk&id=" . $id;
    $xoatk = "index.php?act=xoatk&id=" . $id;
    echo ' <tr >
            <td>' . $id . '</td>
            <td class="bg-neutral-300 ">' . $user . '</td>
            <td>' . $pass . '</td>
            <td class="bg-neutral-300">' . $email . '</td>
            <td>' . $diachi . '</td>
            <td class="bg-neutral-300">' . $phone . '</td>
            <td class="text-center">' . $rol . '</td>
            <td class="flex">
                <a href="' . $suatk . '" class="p-1 bg-blue-300 rounded mr-1">Sửa</a> 
                <a href="' . $xoatk . '" class="p-1 bg-blue-300 rounded">Xóa</a>
            </td>
        </tr>';



}?>

        </tbody>
    </table>
    <a href="index.php?act=addtk"><input class="bg-sky-400 rounded p-1 text-white" type="submit" name="themmoi"
            value="Thêm mới"></a>
    <button class="ml-2 mt-4 rounded bg-sky-400 text-white p-1"><a href="index.php?act=dskh">Danh sách tài khoản</a></button>
    <?php
if (isset($thongbao) && ($thongbao != ''))
    echo $thongbao;
?>
</div>
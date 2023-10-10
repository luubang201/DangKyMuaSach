<div class="flex">
    <div class="thongtin max-w-5xl w-full ">
        <div class="max-w-6xl w-[1000px] mt-6 bg-gray-300 rounded-[30px]">
            <h1 class="text-center text-[30px] font-bold text-blue-600 pt-[30px]">Quên mật khẩu</h1>
            <div class=" max-w-2xl mx-auto ml-[300px]">

                <form action="index.php?act=quenmk" method="post">
                    <h1>Email</h1>
                    <input type="text" name="email" id="user" ">
                    <br>
                    <input type=" submit" name="quenmk" value="Cấp lại mật khẩu"
                        class="p-2 bg-blue-300 rounded mt-2 mb-2 w-[150px]">
                    <br>
                    <?php

if (isset($thongbao) && ($thongbao != '')) {
    echo $thongbao;
?>
                    <?php


}
?>
                </form>
            </div>
        </div>
    </div>
<?php
session_start();
$idpro = $_REQUEST['idpro'];
include '../../modem/pdo.php';
include '../../modem/binhluan.php';
$dsbl = loadall_binhluan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="binhluan">
        <h1 class="bg-blue-100 p-2 mt-2 mb-2 rounded text-[30px]">Bình Luận</h1>
        <div class="rounded bg-white mt-3 w-[990px] justify-between ">
            <table>
                <?php
foreach ($dsbl as $bl) {
    extract($bl);
    echo '<tr ">
                <td class=" p-2 w-[800px]">' . $noidung . ' </td>
                <td class="w-[50px]">' . $idtk . ' </td>
                <td class="w-[200px]">' . $ngaybinhluan . ' </td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="formbinhluan bg-white mt-3 h-10 rounded">
            <?php
if (isset($_SESSION['user']) && ($_SESSION['user'])) { ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="text" name="noidung" class="w-[400px] border ml-2 mt-2" id="">
                <input type="submit" name="binhluan" class=" p-1 bg-blue-400 text-white" value="Bình luận" id="">
            </form>
            <?php
} else {
    echo '
    <h1 class="text-center p-2">Bạn cần đăng nhập để bình luận</h1>
    ';
?>
            <?php
}
?>

        </div>
        <?php
if (isset($_POST['binhluan']) && ($_POST['binhluan'])) {
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $idtk = $_SESSION['user']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');
    insert_binhluan($noidung, $idtk, $idpro, $ngaybinhluan);
    header('location:' . $_SERVER['HTTP_REFERER']);
}
?>
    </div>
</body>

</html>
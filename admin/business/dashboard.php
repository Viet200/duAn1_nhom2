<?php
require_once './dao/system_dao.php';
function dashboard_index()
{
    $sql = "select count(id) from product";
    $product = count_all($sql);
    $sql = "select count(id) from contents";
    $binh_luan = count_all($sql);
    $sql = "select count(id) from favorite_products";
    $favorite = count_all($sql);
    $sql = "select count(id) from user";
    $user = count_all($sql);
    $sql = "select count(id) from orders";
    $don_hang = count_all($sql);
    admin_render('dashboard/index.php', compact('product', 'user', 'favorite','don_hang', 'binh_luan'));
}
function news_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from news where news_name like '%$keyword%'";
    $cates = executeQuery($sql, true);
    // hiển thị view
    admin_render('news/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}
function news_add()
{
    admin_render('news/add_form.php', [], 'admin-assets/custom/product_add.js');
}
function news_save_add()
{
    $news_name = $_POST['news_name'];
    $content = $_POST['content'];
    $update_at = $created_at = date('Y-m-d H:s:i');
    $file = $_FILES['news_img'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }
    $sql = " INSERT INTO news (news_name,news_img,content,update_at,created_at) values ('$news_name','$filename','$content','$update_at','$created_at')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'news');
}
function news_remove()
{
    $id = $_GET['id'];
    $sql = "delete from news where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'news');
}
function news_edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from news where id = $id";
    $cates = executeQuery($sql, '');
    // hiển thị view
    admin_render('news/edit_form.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function news_update_form()
{
    $id = $_POST['id'];
    $news_name = $_POST['news_name'];
    $content = $_POST['content'];
    $file = $_FILES['news_img'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }
    if ($filename != "") {
        $sql = " UPDATE news set news_name = '$news_name',content = '$content',news_img = '$filename' where id = $id";
    } else {
        $sql = " UPDATE news set news_name = '$news_name',content = '$content' where id = $id";
    }
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'news');
}
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

</body>

</html>
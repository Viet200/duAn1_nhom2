<?php
// các hàm thêm sửa xóa của danh mục
function cate_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from category where name like '%$keyword%'";
    $cates = executeQuery($sql, true);
    // hiển thị view
    admin_render('category/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}
function cate_remove()
{
    $id = $_GET['id'];
    $sql = "delete from category where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}
function cate_add_form()
{
    admin_render('category/add-form.php', [], 'admin-assets/custom/category_add.js');
}
function cate_save_add()
{
    $name = $_POST['name'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = "insert into category (name, show_menu) values ('$name', $show_menu)";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}
function edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from category where id = $id";
    $cates = executeQuery($sql, '');
    // hiển thị view
    admin_render('category/edit-form.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function update_form()
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = " UPDATE category set name = '$name',show_menu = '$show_menu' where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'danh-muc');
}
//============================================

// các hàm thêm sửa xóa của thuwong hiệu
function brand_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from brand where name_brand like '%$keyword%'";
    $cates = executeQuery($sql, true);
    // hiển thị view
    admin_render('category/brand_index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}
function brand_add_form()
{
    admin_render('category/brand-add.php', [], 'admin-assets/custom/category_add.js');
}
function brand_save_add()
{
    $name_brand = $_POST['name_brand'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = "INSERT INTO brand (name_brand,show_menu) values ('$name_brand', $show_menu)";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
function brand_edit_add()
{
    // hiển thị view
    admin_render('category/brand-edit.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function brand_remove()
{
    $id = $_GET['id'];
    $sql = "delete from brand where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
function brand_edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from brand where id = $id";
    $cates = executeQuery($sql);
    // hiển thị view
    admin_render('category/brand-edit.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function brand_update_form()
{
    $id = $_POST['id'];
    $name_brand = $_POST['name_brand'];
    $show_menu = isset($_POST['show_menu']) ? 1 : 0;
    $sql = " UPDATE brand set name_brand = '$name_brand', show_menu = '$show_menu' where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'thuong-hieu');
}
//==========================================================

// các hàm thêm sửa xóa của slide show
function slide_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "select * from slideshow where slide_name like '%$keyword%'";
    $cates = executeQuery($sql, true);
    // hiển thị view
    admin_render('category/slide_index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}
function slide_add()
{
    admin_render('category/slide_add.php', [], 'admin-assets/custom/product_add.js');
}
function slide_save_add()
{
    $slide_name = $_POST['slide_name'];
    $file = $_FILES['slideshow_img'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }
    $sql = " INSERT INTO slideshow (slide_name,slideshow_img) values ('$slide_name','$filename')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'slide');
}
function slide_remove()
{
    $id = $_GET['id'];
    $sql = "delete from slideshow where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'slide');
}
function slide_edit_form()
{
    $id = isset($_GET['id']) ? $_GET['id'] : "";
    // lấy danh sách danh mục
    $sql = "select * from slideshow where id = $id";
    $cates = executeQuery($sql, '');
    // hiển thị view
    admin_render('category/slide_edit.php', compact('cates'), 'admin-assets/custom/category_index.js');
}
function slide_update_form()
{
    $id = $_POST['id'];
    $slide_name = $_POST['slide_name'];
    $file = $_FILES['slideshow_img'];
    $filename = "";
    if ($file['size'] > 0) {
        $filename = uniqid() . '-' . $file['name'];
        move_uploaded_file($file['tmp_name'], './public/uploads/' . $filename);
        $filename = 'uploads/' . $filename;
    }
    if ($filename != "") {
        $sql = " UPDATE slideshow set slide_name = '$slide_name',slideshow_img = '$filename' where id = $id";
    } else {
        $sql = " UPDATE slideshow set slide_name = '$slide_name' where id = $id";
    }
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'slide');
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
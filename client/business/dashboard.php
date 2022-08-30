<?php
require_once './dao/system_dao.php';
function dashboard_index()
{
    $sql = "select * from product order by view desc limit 0,6";
    $items = pdo_query($sql);
    $sql = "select * from slideshow ";
    $itemsl = pdo_query($sql);
    $sql = "select * from product order by id desc limit 0,13";
    $newitems = pdo_query($sql);
    $sql = "SELECT * FROM product ORDER BY view desc limit 6";
    $listSale = select_page($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/slider.php', compact('items', 'newitems', 'itemsl', 'list', 'listSale', 'thuonghieu'));
}

function chitiet()
{
    $id = $_GET['id'];
    $sql = "select * from product where id = '$id'";
    $item = pdo_query($sql);
    $category_id = $item[0]['category_id'];
    $sql = "SELECT * FROM product WHERE category_id = '$category_id' AND id != '$id' limit 4";
    $itemcungloais = select_page($sql);

    //
    $luotXemUD = $item[0]['view'] + 1;
    $sqlUd = "UPDATE product SET view='$luotXemUD' WHERE id = '$id'";
    $conn = get_connect();
    $stmt = $conn->prepare($sqlUd);
    $stmt->execute();

    if (isset($_POST) && isset($_POST['comment'])) {
        $id_sp = $_GET['id'];
        $contents = $_POST['contents'];
        $created_at = date('Y-m-d H:s:i');
        if (isset($_SESSION['auth']) && $_SESSION['auth'] != null) {
            $id_user = $_SESSION['auth']['id'];
            $name = $_SESSION['auth']['fullname'];
            $emailcmt = $_SESSION['auth']['email'];
            $avtcmt = $_SESSION['auth']['avatar'];
            $sql = "INSERT INTO contents (id_user, name, emailcmt,avtcmt,id_sp,contents,created_at) VALUES ('$id_user','$name','$emailcmt', '$avtcmt','$id_sp','$contents','$created_at')";
            executeQuery($sql);
            header('Location:' . BASE_URL . 'chitietsp?id=' . $id);
        } else {
            $name = $_POST['name'];
            $emailcmt = $_POST['emailcmt'];
            $sql = "INSERT INTO contents (id_sp,contents,created_at,name, emailcmt) VALUES ('$id_sp','$contents','$created_at','$name','$emailcmt')";
            executeQuery($sql);
            header('Location:' . BASE_URL . 'chitietsp?id=' . $id);
        }
    }
    $sql = "select * from contents where id_sp ='$id'";
    $cmt = select_page($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/chitietsp.php', compact('item', 'itemcungloais', 'cmt', 'list', 'thuonghieu'));
}
function tintuc_index()
{
    $sql = "select * from news";
    $items = pdo_query($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/tintuc.php', compact('items', 'list', 'thuonghieu'));
}
function tintucchitiet_index()
{
    $id = $_GET['id'];
    $sql = "select * from news where id = '$id'";
    $itemct = pdo_query($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    client_render('homepage/tintucchitiet.php', compact('itemct', 'list', 'thuonghieu'));
}

function list_product()
{
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM product   where category_id = '$id'";
    } else {
        $value = isset($_GET['timkiem']) ? $_GET['timkiem'] : "";
        $sql = "SELECT * FROM product INNER JOIN brand ON product.brand_id = brand.id WHERE title like '%$value%' OR price LIKE '%$value%'";
    }
    $items = select_page($sql);
    $viewss = select_page($sql);
    client_render('homepage/shop.php', compact('items', 'list', 'viewss', 'thuonghieu'));
}
function thuonghieu()
{
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM product   where brand_id = '$id'";
    } else {
        $value = isset($_GET['timkiem']) ? $_GET['timkiem'] : "";
        $sql = "SELECT * FROM product INNER JOIN brand ON product.brand_id = brand.id WHERE title like '%$value%' OR price LIKE '%$value%'";
    }
    $items = select_page($sql);
    $sql = "SELECT * FROM product  ORDER BY view desc limit 6";
    $viewss = select_page($sql);
    client_render('homepage/thuonghieu.php', compact('items', 'list', 'viewss', 'thuonghieu'));
}

// yêu thích sản phẩm 
function favorite_profuct()
{
    $sql = "select yt.*, pr.title, pr.thumbnail, pr.price,pr.status from favorite_products yt join product pr on pr.id = yt.product_id join user us on yt.user_id = us.id where 1 order by id ASC";
    $favorite = executeQuery($sql, true);
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('favorite_profuct/favorite_profuct.php', compact('favorite', 'list', 'thuonghieu'));
}

function add_favorite_profuct()
{
    $id = $_GET['id'];
    // ktra xem đã được yêu thích sản phẩm này hay chưa 
    $userId = $_SESSION['auth']['id'];
    $checkFavoriteProduct = "select * from favorite_products where product_id = $id and user_id = $userId";
    $favorite = executeQuery($checkFavoriteProduct, false);
    // nếu chưa có thì lưu vào db
    if (!$favorite) {
        $currentTime = date("Y-m-d h:i:s");
        $addFavoriteQuery = "insert into favorite_products (user_id, product_id, created_at) values ($userId, $id, '$currentTime')";
        executeQuery($addFavoriteQuery);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

function favorite_profuct_remove()
{
    $id = $_GET['id'];
    $sql = "delete from favorite_products where id = $id";
    executeQuery($sql);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
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
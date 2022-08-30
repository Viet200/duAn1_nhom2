<?php

function home()
{
    client_render('homepage/homepage.php');
}
function dangnhap()
{
    if (isset($_POST) && isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $err = array();
        if (empty($_POST['email'])) {
            $err['email'] = "Xin mời điền đầy đủ thông tin email!";
        } else {
            $email = $_POST['email'];
        }
        if (empty($_POST['password'])) {
            $err['password'] = "Xin mời điền đầy đủ thông tin password!";
        } else {
            $password = $_POST['password'];
        }
        if ($email && $password != '') {
            $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
            $connect = get_connect();
            $stmt = $connect->prepare($sql);
            $stmt->execute();
            $user = $stmt->fetch();
            $loi = [];
            if ($user != false) {
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['auth'] = $user;
                header("Location: " . BASE_URL);
            } else {
                $loi = "tài khoản bạn nhập không tồn tại!";
                client_render('homepage/dangnhap.php', compact('loi'));
            }
        }
        client_render('homepage/dangnhap.php', compact('err'));
    }
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/dangnhap.php', compact('list', 'thuonghieu'));
}
function logout()
{
    unset($_SESSION['auth']);
    header('location: ' . BASE_URL . 'dangnhap');
}
//===============================GỬI PHẢN HỒI===================================//
function lienhe()
{

    if (isset($_POST) && isset($_POST['btnsend'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $subject_name = $_POST['subject_name'];
        $note = $_POST['note'];
        $created_at = date("Y-m-d H:i:s");
        $err = [];
        if (empty($name)) {
            $err['name'] = "Hãy điền đầy đủ tên đăng nhập!";
        } else {
            $name = $_POST['name'];
        }

        if (empty($email)) {
            $err['email'] = "Hãy điền đầy đủ email!";
        } else {
            $email = $_POST['email'];
        }

        if (empty($phone_number)) {
            $err['phone_number'] = "Hãy điền đầy đủ số điện thoại!";
        } else {
            $phone_number = $_POST['phone_number'];
        }

        if (empty($subject_name)) {
            $err['subject_name'] = "Hãy điền đầy đủ tiêu đề!";
        } else {
            $subject_name = $_POST['subject_name'];
        }

        if (empty($note)) {
            $err['note'] = "Hãy nhập đầy đủ nội dung!";
        } else {
            $note = $_POST['note'];
        }
        if (empty($err)) {
            $sql = "insert into feedback (name, email, phone_number, subject_name, note, created_at) values ('$name', '$email', '$phone_number', '$subject_name', '$note', '$created_at')";
            executeQuery($sql);
            $success = [];
            $success = "GỬI THÀNH CÔNG CHÚNG TÔI SẼ PHẢN HỒI LẠI SỚM NHẤT!";
            client_render('homepage/lienhe.php', compact('success'));
        }
        client_render('homepage/lienhe.php', compact('err'));
    }
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('homepage/lienhe.php', compact('list', 'thuonghieu'));
}
function add2Cart()
{
    $pId = $_GET['id'];
    // lấy thông tin sản phẩm
    $getProductByIdQuery = "select * from product where id = $pId";
    $product = executeQuery($getProductByIdQuery, false);
    if (!$product) {
        header('location: ' . BASE_URL);
        die;
    }
    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    // kiểm tra xem sản phẩm đã có trong giỏ hàng hay chưa
    $existedIndex = -1;
    foreach ($cart as $index => $item) {
        if ($item['id'] == $product['id']) {
            $existedIndex = $index;
            break;
        }
    }
    // nếu có rồi thì cộng thêm 1 đơn vị vào quantity
    if ($existedIndex != -1) {
        $cart[$existedIndex]['quantity']++;
    } else {
        // nếu chưa có thì thêm vào giỏ với quanity mặc định = 1
        $product['quantity'] = 1;
        $cart[] = $product;
    }
    $_SESSION['cart'] = $cart;
    header('location: ' . BASE_URL);
    die;
}

function checkout()
{
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header('location: ' . BASE_URL);
        die;
    }
    $cart = $_SESSION['cart'];
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('cart/cart.php', compact('cart', 'list', 'thuonghieu'));
}
function remove()
{
    
    unset($_SESSION['cart']);
    header("location: " . BASE_URL . 'check-out');
}
function checkout1()
{
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        header('location: ' . BASE_URL);
        die;
    }
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    $cart = $_SESSION['cart'];
    client_render('cart/check-out.php', compact('cart', 'list', 'thuonghieu'));
}

function paycart()
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $note = $_POST['note'];
    $created_at = $updated_at = date('Y-m-d H:s:i');
    // insert dữ liệu để tạo hóa đơn mới, sau đó lấy id của hóa đơn
    $createorderQuery = "insert into orders (customer_name, customer_phone_number, customer_email, customer_address, note,created_at,updated_at) values ('$name', '$phone', '$email', '$address', '$note','$created_at','$updated_at')";
    $orderId = insertDataAndGetId($createorderQuery);
    $totalPrice = 0;
    // chạy vòng lặp qua các phần tử của giỏ hàng, sau đó insert dữ liệu vào bảng order_detail
    foreach ($_SESSION['cart'] as $item) {
        $productId = $item['id'];
        $price = $item['price'];
        $quantity = $item['quantity'];
        $totalPrice += $price * $quantity;
        $insertorderDetailQuery = "insert into order_detail (order_id, product_id, quantity, unit_price)  values   ($orderId, $productId, $quantity, $price)";
        executeQuery($insertorderDetailQuery, false);
    }
    // Cập nhật tổng số tiền vào hóa đơn
    $updateTotalPriceToorder = "update orders set total_price = $totalPrice where id = $orderId";
    executeQuery($updateTotalPriceToorder, false);
    unset($_SESSION['cart']);
    header('location: ' . BASE_URL . 'camon');
    die;
}
function camon()
{
    $sql = "SELECT * FROM category";
    $list = select_page($sql);
    $sql = "SELECT * FROM brand";
    $thuonghieu = select_page($sql);
    client_render('cart/camon.php', compact('list', 'thuonghieu'));
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
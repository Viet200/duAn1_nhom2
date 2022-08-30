<?php
function tk_donhang(){
	if (isset($_POST) && isset($_POST['btn_timkiemdh'])) {
		$customer_email = $_POST['customer_email'];
		$sql = "SELECT orders.*,tinhtrangdh.name AS 'status' FROM orders JOIN tinhtrangdh ON orders.id_ttdh = tinhtrangdh.id where customer_email= '$customer_email'";
		$cates = select_page($sql);
		$_SESSION['dsdh'] = $cates;
		// dd($_SESSION['dsdh']);
		header("Location: " . BASE_URL . 'donhangdm');
	}
	client_render('homepage/timkiemdh.php');
}
function dh_damua(){
    client_render('homepage/donhangdm.php');
}
function donhang_ct()
{
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	$sql = "SELECT * from orders where id = $id ";
	$list = executeQuery($sql, true);
	$sql = $id = $_GET['id'];
    $sql = "SELECT * FROM order_detail id JOIN product sp ON id.product_id = sp.id WHERE id.order_id = $id";
    $oder = select_page($sql);
	$sql = "SELECT * from tinhtrangdh";
	$tt = executeQuery($sql, true);
	$sql = "SELECT * from product";
	$prd = executeQuery($sql, true);
	client_render('homepage/donhangct.php', compact('list', 'oder', 'tt', 'prd'));
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
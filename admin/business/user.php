<?php
function user_index()
{
	$sql = "select * from role";
	$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
	$sql = "SELECT * from user where email like '%$keyword%'";
	$sql = "SELECT user.*,role.name AS 'role_id' FROM user JOIN role ON user.role_id = role.id where email like '%$keyword%'";
	$cates = executeQuery($sql, true);
	admin_render('user/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}
function user_add()
{
	$sql = "select * from role";
	$cates = pdo_query($sql, true);
	admin_render('user/user_add.php', compact('cates'), 'admin-assets/custom/product_add.js');
}
function user_save_add()
{
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$avatar = $_FILES['avatar'];
	$avatarname = "";
	$created_at = $updated_at = date('Y-m-d H:s:i');
	$role_id = $_POST['role_id'];
	if ($avatar['size'] > 0) {
		$avatarname = uniqid() . '-' . $avatar['name'];
		move_uploaded_file($avatar['tmp_name'], './public/uploads/' . $avatarname);
		$avatarname = 'uploads/' . $avatarname;
	}

	$sql = "INSERT into user (fullname, avatar, email, phone_number, address, password,created_at, updated_at,role_id ) values ('$fullname','$avatarname', '$email', '$phone_number', '$address', '$password','$created_at','$updated_at','$role_id')";
	executeQuery($sql);
	header('Location:' . ADMIN_URL . 'taikhoan');
}

function user_remove()
{
	$id = $_GET['id'];
	$sql = "delete from user where id = $id";
	executeQuery($sql);
	header("location: " . ADMIN_URL . 'taikhoan');
}

function edit_user()
{
	$id = isset($_GET['id']) ? $_GET['id'] : "";
	// lấy danh sách danh mục
	$sql = "select * from user where id = $id ";
	$cates = executeQuery($sql);
	// hiển thị view
	$sql2 = "select * from role  ";
	$cates2 = pdo_query($sql2);
	admin_render('user/edit_user.php', compact('cates', 'cates2'), 'admin-assets/custom/category_index.js');
}
function update_user()
{
	$id = $_POST['id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$avatar = $_FILES['avatar'];
	$filename = "";
	$role_id = $_POST['role_id'];
	$updated_at = date('Y-m-d H:s:i');
	if ($avatar['size'] > 0) {
		$filename = uniqid() . '-' . $avatar['name'];
		move_uploaded_file($avatar['tmp_name'], './public/uploads/' . $filename);
		$filename = 'uploads/' . $filename;
	}
	if ($filename != "") {
		$sql = " UPDATE user set fullname = '$fullname',email = '$email',avatar = '$filename',phone_number = '$phone_number',password = '$password',address = '$address', role_id = '$role_id', updated_at = '$updated_at' where id = $id";
	} else {
		$sql = " UPDATE user set fullname = '$fullname',email = '$email', phone_number = '$phone_number',password = '$password',address = '$address', role_id = '$role_id', updated_at = '$updated_at' where id = $id";
	}
	executeQuery($sql);
	header("location: " . ADMIN_URL . 'taikhoan');
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
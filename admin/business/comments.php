<?php
function comment_index()
{
	$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
	$sql = "select bl.*, pr.title from contents bl join product pr on bl.id_sp=pr.id where emailcmt like '%$keyword%'";
	$cates = executeQuery($sql, true);
	admin_render('comments/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
}

function comment_remove()
{
	$id = $_GET['id'];
	$sql = "delete from contents where id = $id";
	executeQuery($sql);
	header("location: " . ADMIN_URL . 'comments');
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
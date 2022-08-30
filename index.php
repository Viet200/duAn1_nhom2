<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/system_dao.php';
require_once 'globol.php';
require_once './vendor/PHPMailer/src/Exception.php';
require_once './vendor/PHPMailer/src/PHPMailer.php';
require_once './vendor/PHPMailer/src/SMTP.php';
switch ($url) {
    case '/':
        require_once './client/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/danh-muc':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/danh-muc/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_remove();
        break;
    case 'cp-admin/danh-muc/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_add_form();
        break;
    case 'cp-admin/danh-muc/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        cate_save_add();
        break;
        //    thương hiệu
    case 'cp-admin/thuong-hieu':
        require_once './admin/business/category.php';
        brand_index();
        break;
    case 'cp-admin/thuong-hieu/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_remove();
        break;
    case 'cp-admin/thuong-hieu/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_add_form();
        break;
    case 'cp-admin/thuong-hieu/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_save_add();
        break;
    case 'cp-admin/thuong-hieu/capnhat':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_edit_form();
        break;
    case 'cp-admin/thuong-hieu/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        brand_update_form();
        break;
        // end thương hiệu
        // bình luận
    case 'cp-admin/comments':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/comments.php';
        comment_index();
        break;
    case 'cp-admin/comments/xoa':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/comments.php';
        comment_remove();
        break;
    case 'chitietsp':
        require_once './client/business/dashboard.php';
        chitiet();

        break;
    case 'tintuc':
        require_once './client/business/dashboard.php';
        tintuc_index();
        break;
    case 'tintucchitiet':
        require_once './client/business/dashboard.php';
        tintucchitiet_index();
        break;
        //===================================================TÀI KHOẢN===================================================//
    case 'dangnhap':
        require_once './client/business/homepage.php';
        dangnhap();
        break;
    case 'dang-xuat':
        require_once './client/business/homepage.php';
        logout();
        break;
    case 'dang-ky':
        require_once './client/business/taikhoan.php';
        dangky();
        break;
    case 'quenmk':
        require_once './client/business/taikhoan.php';
        quenmk();
        break;
        // case 'doi_mk':
        //     require_once './client/business/taikhoan.php';
        //     doi_mk();
        //     break;
        //=============================================QUẢN LÝ PHẢN HỒI===============================================//
    case 'lienhe':
        require_once './client/business/homepage.php';
        lienhe();
        break;
    case 'cp-admin/contact':
        require_once './admin/business/lienhe.php';
        contact_index();
        break;
    case 'cp-admin/contact/phanhoi':
        require_once './admin/business/lienhe.php';
        feedback();
        break;
    case 'cp-admin/contact/gui-phanhoi':
        require_once './admin/business/lienhe.php';
        send_email();
        break;
    case 'cp-admin/contact/xoa':
        require_once './admin/business/lienhe.php';
        contact_remove();
        break;
    case 'cp-admin/danh-muc/capnhat':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        edit_form();
        break;
    case 'cp-admin/danh-muc/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/category.php';
        update_form();
        break;
        // and danh mục
    case 'cp-admin/sanpham':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/product.php';
        product_index();
        break;
    case 'cp-admin/sanpham/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        product_add_form();
        break;
    case 'cp-admin/sanpham/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        product_save_add();
        break;
    case 'cp-admin/sanpham/xoa':
        require_once './admin/business/product.php';
        product_remove();
        break;
        // end sản phẩm
    case 'cp-admin/sanpham/capnhat':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        edit_form();
        break;
    case 'cp-admin/sanpham/update':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/product.php';
        update_form();
        break;
        // end sản phẩm
    case 'cp-admin/taikhoan':
        checkAuth([ADMIN_ROLE, STAFF_ROLE]);
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/taikhoan/tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_add();
        break;
    case 'cp-admin/taikhoan/luu-tao-moi':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_save_add();
        break;
    case 'cp-admin/taikhoan/edit-user':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        edit_user();
        break;
    case 'cp-admin/taikhoan/update-user':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        update_user();
        break;
        // require_once './admin/business/user.php';
        // update_user();
        // 
    case 'cp-admin/slide':
        require_once './admin/business/category.php';
        slide_index();
        break;
    case 'cp-admin/slide/tao-moi':
        require_once './admin/business/category.php';
        slide_add();
        break;
    case 'cp-admin/slide/luu-tao-moi':
        require_once './admin/business/category.php';
        slide_save_add();
        break;
    case 'cp-admin/slide/xoa':
        require_once './admin/business/category.php';
        slide_remove();
        break;
    case 'cp-admin/slide/capnhat':
        require_once './admin/business/category.php';
        slide_edit_form();
        break;
    case 'cp-admin/slide/update':
        require_once './admin/business/category.php';
        slide_update_form();
        break;

        // ================================ TIN TỨC ======================================

    case 'cp-admin/news':
        require_once './admin/business/dashboard.php';
        news_index();
        break;
    case 'cp-admin/news/tao-moi':
        require_once './admin/business/dashboard.php';
        news_add();
        break;
    case 'cp-admin/news/luu-tao-moi':
        require_once './admin/business/dashboard.php';
        news_save_add();
        break;
    case 'cp-admin/news/xoa':
        require_once './admin/business/dashboard.php';
        news_remove();
        break;
    case 'cp-admin/news/capnhat':
        require_once './admin/business/dashboard.php';
        news_edit_form();
        break;
    case 'cp-admin/news/update':
        require_once './admin/business/dashboard.php';
        news_update_form();
        break;

        // checkAuth([ADMIN_ROLE]);
        // require_once './admin/business/user.php';
        // update_user();

    case 'cp-admin/taikhoan/xoa':
        checkAuth([ADMIN_ROLE]);
        require_once './admin/business/user.php';
        user_remove();
        break;
        //aa
    case 'my-user':
        checkAuth([ADMIN_ROLE, STAFF_ROLE, USER_ROLE]);
        require_once './client/business/taikhoan.php';
        my_user();
        break;
        //aa
    case 'my-user/edit':
        require_once './client/business/taikhoan.php';
        edit_my_user();
        break;
        // case 'my-user/update':
        //     require_once './client/business/taikhoan.php';
        //     my_user_update();
        //     break;
        //hiển thị sản phẩm theo danh mục
    case 'category':
        require_once './client/business/dashboard.php';
        list_product();
        break;
    case 'thuonghieu':
        require_once './client/business/dashboard.php';
        thuonghieu();
        break;

        // case 'category_sp':
        //     require_once './client/business/dashboard.php';
        //     category_sp();
        //     break;


        // <<======================== GIỎ HÀNG ======================== >>

    case 'timkiemdh':
        require_once './client/business/donhang.php';
        tk_donhang();
        break;
    case 'donhangdm':
        require_once './client/business/donhang.php';
        dh_damua();
        break;
    
    case 'donhangct':
        require_once './client/business/donhang.php';
        donhang_ct();
        break;
    case 'cp-admin/donhang':
        require_once './admin/business/donhang.php';
        donhang();
        break;
    case 'cp-admin/donhang/ctdonhang':
        require_once './admin/business/donhang.php';
        ct_donhang();
        break;

    case 'cp-admin/donhang/donhangct':
        require_once './admin/business/donhang.php';
        edit_donhangct();
        break;
    case 'cp-admin/donhang/update-dh':
        require_once './admin/business/donhang.php';
        update_dh();
        break;

    case 'add-to-cart':
        require_once './client/business/homepage.php';
        add2Cart();
        break;
    case 'check-out':
        require_once './client/business/homepage.php';
        checkout();
        break;
    case 'remove':
        require_once './client/business/homepage.php';
        remove();
        break;
    case 'camon':
        require_once './client/business/homepage.php';
        camon();
        break;
    case 'check-out1':
        require_once './client/business/homepage.php';
        checkout1();
        break;

    case 'pay-cart':
        require_once './client/business/homepage.php';
        paycart();
        break;
        // <<======================== SẢN PHẨM YÊU THÍCH ======================== >>
    case 'favorite':
        require_once './client/business/dashboard.php';
        favorite_profuct();
        break;
    case 'addfavorite':
        require_once './client/business/dashboard.php';
        add_favorite_profuct();
        break;
    case 'favorite/xoa':
        require_once './client/business/dashboard.php';
        favorite_profuct_remove();
        break;
        // <<==================================================================== >>

        // <<======================== Gửi email cho khách hàng ======================== >>
    case 'cp-admin/send-email-form':
        require_once './admin/business/lienhe.php';
        email_form();
        break;
    case 'cp-admin/submit-email':
        require_once './admin/business/lienhe.php';
        send_email();
        break;
        // <<==================================================================== >>
    default:
        # code...
        break;
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
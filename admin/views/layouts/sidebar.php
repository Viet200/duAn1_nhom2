<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= BASE_URL ?>" class="brand-link">
    <img src="<?= ADMIN_ASSET ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Trang chủ</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= ADMIN_ASSET ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">ADMIN</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL ?>" class="nav-link ">
            <i class="fas fa-home"></i>
            <p>
              Thông kê
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-list-ol" aria-hidden="true"></i>
            <p>
              Danh mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'danh-muc' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'danh-muc/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-registered" aria-hidden="true"></i>
            <p>
              Thương hiệu
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thuong-hieu' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách thương hiệu</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'thuong-hieu/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>

        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fa fa-truck" aria-hidden="true"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'sanpham' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'sanpham/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-money-bill"></i>
            <p>
              Đơn Hàng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'donhang' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách Đơn Hàng</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p></p>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users" aria-hidden="true"></i>
            <p>
              Tài khoản
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'taikhoan' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tài khoản</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'taikhoan/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users" aria-hidden="true"></i>
            <p>
              Liên Hệ
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'lien_he' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thông tin liên hệ</p>
              </a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-slideshare" aria-hidden="true"></i>
            <p>
              SlideShow
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'slide' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách SlideShow</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'slide/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-newspaper" aria-hidden="true"></i>
            <p>
              Tin tức
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'news' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách tin tức</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'news/tao-moi' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-comments" aria-hidden="true"></i>
            <p>
              Bình luận sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'comments' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách bình luận</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= ADMIN_URL . '/khachvanglai' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>New</p>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-id-card" aria-hidden="true"></i>
            <p>
              Quản lý phản hồi
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'contact' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách phản hồi</p>
              </a>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-envelope" aria-hidden="true"></i>
            <p>
              Gửi email cho khách hàng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'send-email-form' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Gửi email</p>
              </a>
            </li>
          </ul>
        </li> -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
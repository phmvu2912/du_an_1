<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">ADMINITRATOR</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="<?= BASE_URL_ADMIN ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Bảng điều khiển</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=products">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý sản phẩm
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=catalogues">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý danh mục
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=products">Quản lý sản phẩm</a>
            <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=catalogues">Quản lý danh mục</a>
            <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=users">Quản lý người dùng</a>
            <a class="collapse-item" href="<?= BASE_URL_ADMIN ?>?act=news">Quản lý bài viết, tin tức</a>
        </div>
    </div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=users">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý người dùng
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=news">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý bài viết, tin tức
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=vouchers">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý khuyến mãi
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="<?= BASE_URL_ADMIN ?>?act=orders">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        Quản lý đơn hàng
    </a>
</li>
</ul>
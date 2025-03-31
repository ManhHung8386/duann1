<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">



<head>

    <meta charset="utf-8" />
    <title>Dashboard | Mobile Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <?php
    require_once "libs_css.php";
    ?>
<style>

</style>
</head>

<body>

    
    <div id="layout-wrapper">

<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
               
                <div class="navbar-brand-box horizontal-logo">
                    <a href="../index.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo/logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo/logo.png" alt="" height="70">
                        </span>
                    </a>

                    <a href="../index.php" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo/logo.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo/logo.png" alt="" height="70">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
            </div>

            <div class="d-flex align-items-center">
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                        <i class='bx bx-fullscreen fs-22'></i>
                    </button>
                </div>

                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <?php $anh = "../uploads/" .$_SESSION['user']['anh_dai_dien'];  ?>
                            <img class="rounded-circle header-profile-user" src="<?= $anh ?>" alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php echo htmlspecialchars($_SESSION['user']['ten']); ?></span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Quản trị viên</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                       
                        <h6 class="dropdown-header">Tuấn Anh</h6>
                        <a class="dropdown-item" href="index.php?act=dangxuat"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Đăng Xuất</span></a>
                        <a class="dropdown-item" href="../index.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Trở Lại trang chủ</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
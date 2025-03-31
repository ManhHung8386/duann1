<?php

session_start();
include './models/pdo.php';
include './models/nguoidung.php';

// Xử lý đăng ký
if (isset($_GET['act']) && $_GET['act'] === 'dangky' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $so_dien_thoai = $_POST['so_dien_thoai'];
    $dia_chi = $_POST['dia_chi'];
    $mat_khau = password_hash($_POST['mat_khau'], PASSWORD_BCRYPT);
    $hinh = isset($_FILES['anh_dai_dien']['name']) ? $_FILES['anh_dai_dien']['name'] : '';
    
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($hinh);
    if (!empty($hinh) && move_uploaded_file($_FILES["anh_dai_dien"]["tmp_name"], $target_file)) {
    } else {
        $hinh = '';
    }
    
    if (emailExists($email)) {
        $_SESSION['thongbao'] = "Email này đã được sử dụng!";
        header('Location: index.php?act=dangky');
        exit();
    }
    
    insert_user($ten, $email, $mat_khau, $hinh, $so_dien_thoai, $dia_chi);
    header('Location: index.php?act=dangnhap');
    exit();
}

// Xử lý đăng nhập
if (isset($_GET['act']) && $_GET['act'] === 'dangnhap' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = findByEmail($email);
    if ($user && password_verify($password, $user['mat_khau'])) {
        $_SESSION['user'] = $user;
        
        if ($_SESSION['user']['trang_thai'] == '0') {
            $_SESSION['thongbao'] = "Tài khoản đã bị khóa.";
            unset($_SESSION['user']);
        } else {
            $redirect_url = ($_SESSION['user']['loai_nguoi_dung'] == 'KhachHang') ? 'index.php' : './admin/index.php';
            header("Location: $redirect_url");
            exit();
        }
    } else {
        $_SESSION['thongbao'] = "Email hoặc mật khẩu không đúng!";
        header('Location: index.php?act=dangnhap');
        exit();
    }
}

?>

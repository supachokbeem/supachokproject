<?php
    session_start();
    include 'config.php';

    if(!empty($_GET['id'])) {
        unset($_SESSION['cart'][$_GET['id']]);
        $_SESSION['message'] = 'ลบตระกร้าเรียบร้อย';
    }
    header('location: ' . $base_url . '/cart.php');

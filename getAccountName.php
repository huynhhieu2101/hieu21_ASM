<?php
$accounts = [
    "12345678" => "Nguyễn Văn A",
    "23456789" => "Trần Thị B",
    "98765432" => "Lê Văn C"
];

// Lấy dữ liệu từ form
$bank = $_POST['bank'];
$account = $_POST['account'];
$key = "$bank-$account";

// Kiểm tra tài khoản
if (array_key_exists($key, $accounts)) {
    echo "Chủ tài khoản: " . $accounts[$key];
} else {
    echo "Không tìm thấy thông tin tài khoản.";
}
?>
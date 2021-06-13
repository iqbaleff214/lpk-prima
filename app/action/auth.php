<?php 

$tb = new Table('admin', 'id_admin');

if ($_GET['action'] == 'login') {
    $data = $_POST;
    $login = $tb->getWhere('username', $data['username'])[0];
    if ($login) {
        if (password_verify($data['password'], $login['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $login['nama'];
            return headTo('home');
            exit;
        } else {
            $message = "Password salah!";
        }
    } else {
        $message = "Username salah!";
    }
} elseif ($_GET['action'] == 'logout') {
    unset($_SESSION['login']);
    unset($_SESSION['nama']);
    $message = "Logout berhasil!";
} elseif ($_GET['action'] == 'register' && $tb->countAll == 0) {
    $tb->insert([
        'username' => 'admin',
        'password' => password_hash('admin', PASSWORD_DEFAULT),
        'nama' => 'Administrator'
    ]);
    $message = "Selamat datang, pengguna baru!";
}

setFlash($message);
headTo('home');
exit();




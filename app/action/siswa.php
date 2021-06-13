<?php 

if (!isset($_POST)) headTo('home');

$tb = new Table('siswa', 'id_siswa');
$data = $_POST;

switch ($_GET['action']) {
    case 'insert':
        $message = ($tb->insert($data)) ? "Berhasil menambahkan data!" : "Gagal menambahkan data!";
        break;
    case 'update':
        $id = $_GET['id'];
        $message = ($tb->update($id, $data)) ? "Berhasil mengedit data!" : "Gagal mengedit data!";
        break;
    case 'delete':
        $id = $_POST['id'];
        $message = ($tb->delete($id)) ? "Berhasil menghapus data!" : "Gagal menghapus data!";
        break;
}
            
setFlash($message);
headTo('siswa');
exit();




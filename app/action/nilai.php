<?php 

if (!isset($_POST)) headTo('home');

$tb = new Table('nilai', 'id_nilai');
$data = $_POST;

switch ($_GET['action']) {
    case 'insert':
        $data['id_siswa'] = $_GET['id'];
        $message = ($tb->insert($data)) ? "Berhasil menambahkan nilai!" : "Gagal menambahkan nilai!";
        break;
    case 'delete':
        $id = $_POST['id'];
        $message = ($tb->delete($id)) ? "Berhasil menghapus nilai!" : "Gagal menghapus nilai!";
        break;
    case 'update':
        $message = "Nilai tidak dapat diedit!";
        break;
}
            
setFlash($message);
headWithId('siswa_detil', $_GET['id']);
exit();




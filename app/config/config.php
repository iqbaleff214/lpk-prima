<?php 

define('BASE_URL', 'http://localhost/latihan/lpk-prima-kapuas-native/');

define('HOST', 'localhost');
define('USER', 'admin');
define('PASS', 'admin');
define('DBASE', 'lpk-prima');


$pages = [
    'home' => 'index.php',
    //siswa
    'siswa'         => 'siswa/index.php',
    'siswa_tambah'  => 'siswa/create.php',
    'siswa_edit'    => 'siswa/edit.php',
    'siswa_detil'   => 'siswa/show.php',
    //laporan
    //siswa
    'siswa_semua'   => 'laporan/siswa/semua.php',
    'siswa_calon'   => 'laporan/siswa/calon.php',
    'siswa_aktif'   => 'laporan/siswa/aktif.php',
    'siswa_lulus'   => 'laporan/siswa/lulus.php',
    //kelas
    'kelas_private' => 'laporan/kelas/private.php',
    'kelas_reguler' => 'laporan/kelas/reguler.php',
    //nilai
    'nilai'         => 'laporan/nilai/index.php',
];
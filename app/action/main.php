<?php 

$actionsFile = [
    'siswa' => 'siswa.php',
    'nilai' => 'nilai.php',
    'auth'  => 'auth.php',
];

$actions = ['insert', 'update', 'delete', 'login', 'logout', 'register'];

if (isset($actionsFile[$_GET['page']]) && in_array($_GET['action'], $actions)) {
    include $actionsFile[$_GET['page']];
} else {
    headTo('home');
}
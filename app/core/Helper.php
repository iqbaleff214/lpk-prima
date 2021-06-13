<?php

function linkTo($link): String {
    return BASE_URL . 'index.php?page=' . $link;
}

function linkWithId($link, $id): String {
    return linkTo($link) . '&id=' . $id;
}

function actionTo($page, $action): String {
    return linkTo($page) . '&action=' . $action;
}

function actionWithId($page, $action, $id): String {
    return actionTo($page, $action) . '&id=' . $id;
}

function activePage(array $pages): String {
    $current = $_GET['page'] ?: 'home';
    return in_array($current, $pages) ? 'active' : '';
}

function headTo($link) {
    header("Location: " . linkTo($link));
}

function headWithId($link, $id) {
    header("Location: " . linkWithId($link, $id));
}

function loadView($view) {
    include_once $view ? "app/page/{$view}" : "app/page/error/404.php";
}

function currentUrl(): String {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    

    return $url; 
}

function setFlash($message) {
    $_SESSION['flash'] = $message;
}

function hasFlash() {
    return isset($_SESSION['flash']);
}

function getFlash(): String {
    $message = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $message;
}

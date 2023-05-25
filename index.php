<?php
    session_start();
    $rq = $_SERVER['REQUEST_URI'];
    $route = str_replace('/trandaiphat_profile_website/', '', $rq);
    $_SESSION['route'] = $route;
    if ($route == '/' || $route == '') {
        include('./includes/header.php');
        include('./pages/homepage.php');
        include('./includes/footer.php');
    } else if ($route == 'resume') {
        include('./includes/header.php');
        include('./pages/resume.php');
        include('./includes/footer.php');
    } else if ($route == 'project') {
        include('./includes/header.php');
        include('./pages/project.php');
        include('./includes/footer.php');
    } else if ($route == 'education') {
        include('./includes/header.php');
        include('./pages/education.php');
        include('./includes/footer.php');
    } else if ($route == 'notification') {
        include('./includes/header.php');
        include('./pages/notification.php');
        include('./includes/footer.php');
    } else if ($route == 'contact') {
        include('./includes/header.php');
        include('./pages/contact.php');
        include('./includes/footer.php');
    } else {
        include('./includes/header.php');
        include('./pages/404.php');
        include('./includes/footer.php');
    }
?>
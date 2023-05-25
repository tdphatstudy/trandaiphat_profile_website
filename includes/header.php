<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    $route = $_SESSION['route'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PhatTran's Profile</title>
        <link rel="stylesheet" href="./assets/css/global.css">
        <link rel="stylesheet" href="./assets/css/header.css">
        <link rel="stylesheet" href="./assets/css/footer.css">
        <link rel="stylesheet" href="./assets/css/body.css">
        <link rel="stylesheet" href="./assets/css/404.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="navbar-wrapper">
                <div class="logo-website"> &lt; /&gt; PhatTran</div>
                <div class="menu-wrapper">
                    <div class="homepage-option <?php if($route == '/' || $route == '') {echo 'action';} ?>" id='homepage' onclick="chooseOption(this.id);">Homepage</div>
                    <div class="resume-option <?php if($route == 'resume') {echo 'action';} ?>" id='resume' onclick="chooseOption(this.id);">Resume</div>
                    <div class="project-option <?php if($route == 'project') {echo 'action';} ?>" id='project' onclick="chooseOption(this.id);">Project</div>
                    <div class="education-option <?php if($route == 'education') {echo 'action';} ?>" id='education' onclick="chooseOption(this.id);">Education</div>
                    <div class="notification-option <?php if($route == 'notification') {echo 'action';} ?>" id='notification' onclick="chooseOption(this.id);">Notification</div>
                    <div class="contact-option <?php if($route == 'contact') {echo 'action';} ?>" id='contact' onclick="chooseOption(this.id);">Contact</div>

                </div>
            </div>
<?php echo '<script></script>' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title><?php echo SITENAME; ?></title>
</head>

<header>
    <body>   
        <a href="#" class="logo">Test<span>Test</span></a>
        <div class="menuToggle" onclick="toggleMenu()"></div>
        <ul class="navigation">
            <li><a href="#banner" onclick="toggleMenu()">Home</a></li>
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#menu" onclick="toggleMenu()">Menu</a></li>
            <li><a href="#testimonials" onclick="toggleMenu()">Testimonials</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
            <li id="listbreak">|</li>
            <li>
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT; ?>/users/logout" onclick="toggleMenu()">Logout</a>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/login" onclick="toggleMenu()">Login</a>
                <?php endif; ?>
            </li>
        </ul>
    </body>
</header>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeroSkill</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/slideshow.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<?php include("./header.php") ?>
<div class="content">
    <h1>
        We strive to bring everything at your fingertips, just browse the endless pages of games, hardware or accessories and we will take care of everything else!
    </h1>
    <div class="slideshow">
        <div class="slideshow-count"></div>
        <div class="slideshow-container">
            <div class="slideshow-slide active-slide">
                <img src="assets/img/videoCard.jpg" alt="" />
                <div class="slideshow-title">
                    Videocard
                </div>
            </div>
            <div class="slideshow-slide">
                <img src="assets/img/motherboard.jpg" alt="" />
                <div class="slideshow-title">
                    Motherboard
                </div>
            </div>
            <div class="slideshow-slide">
                <img src="assets/img/processors.jpg" alt="" />
                <div class="slideshow-title">
                    Processors
                </div>
            </div>
        </div>
        <div class="slideshow-controls">
            <div class="slideshow-control slideshow-prev pull-left noselect">Prev</div>
            <div class="slideshow-control slideshow-next pull-right noselect">Next</div>
        </div>
    </div>
</div>
<?php include("./assets/php/loginBtn.php")?>
<?php include("./assets/php/registerForm.php")?>
<?php include("./footer.php") ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="assets/scripts/slideshow.js"></script>
<script src="assets/scripts/login.js"></script>
<script src="assets/scripts/register.js"></script>
</body>

</html>

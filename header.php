<?php session_start(); ?>
<div class="wrapper">
    <header>
        <a href="index.php">
                <img src="assets/img/logo.png" class="logo" alt="Logo here" />
            </a>
    </header>
    <nav class="navBar">
        <ul class="navBox">
            <li class="navBtn">
                <a href="index.php">Home</a>
            </li>
            <li class="navBtn">
                <a href="games.php">Games</a>
            </li>
            <li class="navBtn">
                <a href="hardware.php">Hardware</a>
            </li>
            <li class="navBtn">
                <a href="accessories.php">Accessories</a>
            </li>
            <li class="navBtn">
                <a href="contact.php">Contact</a>
            </li>
            <?php if(!isset($_SESSION['login_user'])): ?>
            <li class="navBtn">
                <a class="log-button" onclick="document.getElementById('id01').style.display='block'">
                    Login
                </a>
            </li>
            <li class="navBtn">
                <a class="register-button" onclick="document.getElementById('registrationForm').style.display='block'">
                    Register
                </a>
            </li>
            <?php else: ?>
            <li class="navBtn">
                <a class="logout-button" href="assets/php/logout.php">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
        <div class="search-container">
            <form>
                <input class="search" type="text" placeholder="Search.." name="search" />
                <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
            </form>
        </div>
    </nav>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZeroSkill</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/shop.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <?php include("./header.php") ?>
  <div class="content">
    <div class="navBarLeft">
      <ul class="navBoxLeft">
        <li class="navBtnLeft">
          <a href="#action"> Action </a>
        </li>
        <li class="navBtnLeft">
          <a href="#fantasy"> Fantasy </a>
        </li>
        <li class="navBtnLeft">
          <a href="#horror"> Horror </a>
        </li>
        <li class="navBtnLeft">
          <a href="#fps"> FPS </a>
        </li>
        <li class="navBtnLeft">
          <a href="#rpg"> RPG </a>
        </li>
        <li class="navBtnLeft">
          <a href="#indie"> Indie </a>
        </li>
        <li class="navBtnLeft">
          <a href="#mmorpg"> MMORPG </a>
        </li>
      </ul>
    </div>
    <div class="navBarRight">
      <ul>
        <li class="item">
          <img src="assets/img/ACO.jpg" />
          <div class="popup" onclick="myFunction1()">
            <button class="shop-button">Add to cart
                                <span class="popuptext" id="myPopup1">Added to cart!</span>
                            </button>
          </div>
        </li>
        <li class="item">
          <img src="assets/img/FarCry5.jpg" />
          <div class="popup" onclick="myFunction2()">
            <button class="shop-button">Add to cart
                                <span class="popuptext" id="myPopup2">Added to cart!</span>
                            </button>
          </div>
        </li>
        <li class="item">
          <img src="assets/img/GodOfWar.jpg" />
          <div class="popup" onclick="myFunction3()">
            <button class="shop-button">Add to cart
                                <span class="popuptext" id="myPopup3">Added to cart!</span>
                            </button>
          </div>
        </li>
        <li class="item">
          <img src="assets/img/HZD.jpg" />
          <div class="popup" onclick="myFunction4()">
            <button class="shop-button">Add to cart
                                <span class="popuptext" id="myPopup4">Added to cart!</span>
                            </button>
          </div>
        </li>
        <li class="item">
          <img src="assets/img/ShadowOfTheColossus.jpg" />
          <div class="popup" onclick="myFunction5()">
            <button class="shop-button">Add to cart
                                <span class="popuptext" id="myPopup5">Added to cart!</span>
                            </button>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <?php include("./assets/php/loginBtn.php")?>
  <?php include("./assets/php/registerForm.php")?>
  <?php include("./footer.php") ?>
  </div>
  <script src="assets/scripts/shop.js"></script>
  <script src="assets/scripts/login.js"></script>
  <script src="assets/scripts/register.js"></script>
</body>

</html>

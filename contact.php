<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZeroSkill</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <?php include("./header.php") ?>
  <div class="content">
    <p class="info">
      The company was founded in 2018 by Ivan Vasilev and his partner Vladimir Dimitrov. They strive for success and to be the best on the market. A quote from them: "We try to make gaming as seamless as possible so that everybody can join the great community. Gaming is a way of life, many people are scared of building computers but here on our website we have endless components so we encourage everybody to pick a configuration and personalize it to their taste. Computer building is an art form, putting your heart and sould into it will yield a great result!"
    </p>
    <img class="controller" src="assets/img/controller.png" alt="" />
    <p class="info">
      Office Location:
    </p>
    <div class="google-maps-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.3304755405993!2d5.479793916137643!3d51.452088579625986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d92199730073%3A0x1c98f3a0d8ee087b!2sFontys+-+Campus+Rachelsmolen!5e0!3m2!1sen!2suk!4v1521595375256" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <p class="info">
      Emails to contact the creators
      <br /> Ivan Vasilev
      <br /> ivan.vasilev@student.fontys.nl
      <br /> Vladimir Dimitrov
      <br /> v.dimitrov@student.fontys.nl
    </p>
    <div class="contact-container">
      <?php include("./assets/php/contactForm.php") ?>
    </div>
  </div>
  <?php include("./assets/php/loginBtn.php")?>
  <?php include("./assets/php/registerForm.php")?>
  <?php include("./footer.php") ?>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="assets/scripts/contact.js"></script>
  <script src="assets/scripts/login.js"></script>
  <script src="assets/scripts/register.js"></script>
</body>

</html>

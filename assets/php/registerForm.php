<div id="registrationForm" class="modal">

  <form class="modal-content animate" action="./assets/php/register.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('registrationForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/img/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-form">
      <label for="uname"><b>Username</b></label>
      <input class="login-input" type="text" placeholder="Username goes here:" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input class="login-input" type="password" placeholder="Password goes here:" name="password" required>

      <button class="login" type="submit">Register</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('registrationForm').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<div id="id01" class="modal">

  <form class="modal-content animate" action="./assets/php/login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/img/logo.png" alt="Avatar" class="avatar">
    </div>

    <div class="container-form">
      <label for="uname"><b>Username</b></label>
      <input class="login-input" type="text" placeholder="Username goes here:" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input class="login-input" type="password" placeholder="Password goes here:" name="password" required>

      <button class="login" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

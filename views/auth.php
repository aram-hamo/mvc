<!DOCTYPE html>
<html lang=en>
<head>
<?php
include "../templates/header.php";
?>
<style>
form > a{
  text-decoration:0;
}
form{
  padding:5%;
}

</style>
<script src="/static/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <title><?= self::viewData()['title'] ?></title>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Login</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Register</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form id=loginForm method="post" class="form-control form">
      <input class="form-control" placeholder="Username" name="username" ><br>
      <input class="form-control" placeholder="Password" name="password" type="password" ><br>
      <input class="form-control btn btn-primary" name="login" type="submit" value="Login">
    </form>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <form id=registerForm method="post" class="form-control form">
      <label for="firstName" class="form-label">First Name</label>
      <input class="form-control" placeholder="First Name" name="firstName" id="firstName"><br>
      <label for="lastName" class="form-label">First Name</label>
      <input class="form-control" placeholder="Last Name" name="lastName" id="lastName"><br>
      <input class="form-control" placeholder="Username" name="username" ><br>
      <input class="form-control" placeholder="Password" name="password" type="password" minlength="8" aria-labelledby="passwordHelpBlock"><br>
      <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
      </div>
      <input class="form-control" placeholder="E-Mail" name="email" type="email"><br>
      <input class="form-control btn btn-primary"name="register" type="submit" value="Register">
    </form>
  </div>
</div>
</body>
</html>

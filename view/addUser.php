<?php
include '../controller/UserC.php';
$error = '';
$UserC = new UserC();

if (
  isset($_POST["firstName"]) &&
  isset($_POST["lastName"]) &&
  isset($_POST["email"]) &&
  isset($_POST["password"]) &&
  isset($_POST["dob"])
) {
  if (
    !empty($_POST['firstName']) &&
    !empty($_POST["lastName"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["password"]) &&
    !empty($_POST["dob"])
  ) {
    $user = new User(
      null,
      $_POST['firstName'],
      $_POST['lastName'],
      $_POST['email'],
      $_POST['password'],
      new DateTime($_POST['dob'])
    );
    $return=$UserC->addUser($user);
    if($return)
    {
      echo '<script>alert("WELLCOME!")</script>';
      header('Location:TableauPanel.php');
    }else{
      /*?> <style>#emailid{background-color: brown}</style><?php*/
      echo '<script>alert("Email already used..try again!")</script>';

    }
  } else
    $error = "Missing information";
}


//login Test

if (
  isset($_POST["emailL"]) &&
  isset($_POST["passwordL"])
) {
  if (
    !empty($_POST['emailL']) &&
    !empty($_POST["passwordL"])
  ) {
      $emailL=$_POST["emailL"];
      $passwordL=$_POST["passwordL"];
      $return1=$UserC->login($emailL,$passwordL);
      if($return1)
      {
        echo '<script>alert("WELLCOME BACK!")</script>';
      }else{
        echo '<script>alert("Check your email or password!")</script>';
      }

  }}

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/sty.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="" class="sign-in-form" method="POST">
          <h2 class="title">S'identifier</h2>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="emailL" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="passwordL" />
          </div>
          <input type="submit" value="Login" class="btn solid" />
          <p class="social-text">Ou Connectez-vous avec les plateformes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form action="" class="sign-up-form" method="POST">
          <h2 class="title">S'inscrire</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="firstName" name="firstName" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="lastName" name="lastName" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" id="emailid"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="date of birth" name="dob" />
          </div>
          <input type="submit" class="btn" value="Sign up" />
          <p class="social-text">Ou Inscrivez-vous avec les plateformes sociales</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
          Vous vous sentez débordé, stressé ou même pas d'humeur ? Rejoignez notre communauté et laissez-nous vous aider !
          </p>
          <button class="btn transparent" id="sign-up-btn">
          S'inscrire
          </button>
        </div>
        <img src="../img/intro.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Un de nous ?</h3>
          <p>
          Connectez-vous et plongez à nouveau ! Faites-vous aider et aidez les autres à sentir que vous devriez l'être
             sentiment!
          </p>
          <button class="btn transparent" id="sign-in-btn">
          Sign in
          </button>
        </div>
        <img src="../img/sing-in.png" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="../js/app.js"></script>
</body>

</html>
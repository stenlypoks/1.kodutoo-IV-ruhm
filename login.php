<?php

//var_dump($_GET);

//echo "<br>";

var_dump($_POST);


$signupUsernameError = "*";

//kas kasutaja sisestas soovitud kasutajanime

if (isset ($_POST[singupUsername])) {

  // on olemas
  // kas kasutajanimi on tühi
    if (empty ($_POST["signupUsername"])) {

    //on tühi
      $signupUsernameError = "Väli on kohustuslik!";
   }
 }


$signupFirstNameError = "*";

//kas kasutaja sisestas eesnime

if (isset ($_POST[singupFirstName])) {

  // on olemas
  // kas eesnimi on tühi
    if (empty ($_POST["signupFirstName"])) {

    //on tühi
      $signupFirstNameError = "Väli on kohustuslik!";
   }
 }

 $signupError = "*";

 //kas kasutaja sisestas perekonnanime

 if (isset ($_POST[singupLastName])) {

   // on olemas
   // kas perekonnanimi on tühi
     if (empty ($_POST["signupLastName"])) {

     //on tühi
       $signupLastNameError = "Väli on kohustuslik!";
    }
  }

$signupEmailError = "*";

  // kas kasutaja vajutas nuppu ja see on olemas

if (isset ($_POST["signupEmail"])) {

  // on olemas
  // kas epost on tyhi
    if (empty ($_POST[signupEmail])) {

    //on tyhi
      $signupEmailError = "Väli on kohustuslik!";
    }
  }

// kas password on tühi:

$signupPasswordError = "*";

// kas kasutaja vajutas nuppu ja see on olemas:

if (isset ($_POST["signupPassword"])) {

    //on olemas
    //kas e-post on tühi:
    if (empty ($_POST[signupEmail])) {

      //on tühi
        $signupEmailError = "Väli on kohustuslik!";
    }
  }



 ?>

<!DOCTYPE html>
<html>
  <head>
      <title>Sisselogimise leht</title>

      <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>

<h1>Logi sisse</h1>

    <form method="POST">

      <placeholder>E-post</placeholder><br>
      <input name="loginEmail" type="email">

      <br><br>

      <placeholder>Password</placeholder><br>
      <input name="loginPassword" type="password">

      <br> <br>

      <input type="submit" value="Logi sisse">

</body>
</html>


<!DOCTYPE html>
<html>
  <head>
      <title>Signup page</title>
</head>
<body>

<h1>Loo kasutaja</h1>

    <form method="POST">

      <placeholder>Soovitud kasutajanimi</placeholder><br>
      <input name = "signupUsername" type = "kasutajanimi"> <?php echo $signupUsernameError; ?>

      <br><br>

      <placeholder>Eesnimi</placeholder><br>
      <input name = "signupFirstName" type = "eesnimi"> <?php echo $signupFirstNameError; ?>

      <br><br>

      <placeholder>Perekonnanimi</placeholder><br>
      <input name = "signupLastName" type = "perekonnanimi"> <?php echo $signupLastNameError; ?>

      <br><br>

      <placeholder>E-post</placeholder><br>
      <input name = "signupEmail" type = "email"> <?php echo $signupEmailError; ?>

      <br><br>

      <placeholder>Password</placeholder><br>
      <input name="signupPassword" type="parool"> <?php echo $signupPasswordError; ?>

      <br> <br>

      <input type="submit" value="Loo kasutaja">

      <br><br>



      <div class="g-recaptcha" data-sitekey="6Ld0OQcUAAAAAPDJsOJo5KFp3_BLzx9zIpj_-qkN"></div>


</body>
</html>

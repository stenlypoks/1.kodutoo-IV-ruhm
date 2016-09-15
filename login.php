<?php

//var_dump($_GET);

//echo "<br>";

var_dump($_POST);

$signupEmailError = "";

// kas keegi vajutas nuppu ja see on olemas

if (isset ($_POST["signupEmail"])) {

  // on olemas
  // kas epost on tyhi
    if (empty ($_POST[signupEmail])) {

    //on tyhi
      $signupEmailError "V2li on kohustuslik!";
    }
  }

// kas epost on tyhi


 ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Sisselogimise leht</title>
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

      <input type+"submit" value="Logi sisse">

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

      <placeholder>E-post</placeholder><br>
      <input name="signupEmail" type="email"> <?php echo $signupEmailError; ?>

      <br><br>

      <placeholder>Password</placeholder><br>
      <input name="signupPassword" type="parool">

      <br> <br>

      <input type="submit" value="Loo kasutaja">

</body>
</html>

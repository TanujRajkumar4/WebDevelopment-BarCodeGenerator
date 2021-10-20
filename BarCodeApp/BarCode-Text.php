<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>ShakthiSoftSolutions</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

  <?php

  if (isset($_POST['submit']) && $_POST['email'] == "Admin@ShakthiSoftSolutions.com" && $_POST['pwd'] == "Admin123") {
  } else {
    echo '<script>alert("Incorrect Mail or Password");
    window.location.assign("index.php");</script>';
  }

  ?>

  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST" action="BarCode.php">
      <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Enter Text to Generate Bar Code</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Bar Code Text" name="BarCodeText">
        <label for="floatingInput">Text</label>
      </div>
      <!-- <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div> -->
      <button class="w-100 btn btn-lg btn-primary" name="BarCodeTextSubmit" type="submit">Generate Bar Code</button>
      <p class="mt-5 mb-3 text-muted">&copy; Shakthi SoftSolutions 2021</p>
    </form>
  </main>
</body>

</html>
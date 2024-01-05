
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= APP_URL ?>public/assets/css/login.css">
</head>
<body>
  <section class="register d-flex justify-content-center align-items-center">
    <form method ="POST" > 
        
      <h1 class="text-center">Reset Password</h1>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Try Password</label>
        <input type="password" class="form-control" id="password" name="tryPassword">
      </div>
      <button class="btn btn-primary w-100" id="sign-up" name="confirme">Confirmer</button>
    </form>
  </section>



  <!-- scripts -->
  <script src="./registerREGEX.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
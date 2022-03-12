<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php require_once "menu.php" ?>
  <title>Estructuras de Control</title>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">


      <div class="col-6 p-5 bg-white shadow-lg rounded">

        <h1 align="Center">Inicio de Sesion</h1>
        <hr>

        <form method="post" action="validar.php">
          <div class="form-group">
            <label for="users">Usuario:</label>
            <input id="users" class="form-control" type="text" name="usuario" required>
          </div>
          <div class="form-group">
            <label for="pasword">Contraseña:</label>
            <input id="pasword" class="form-control" type="password" name="password" required>
          </div>
          <br>
          <a href="http://">¿Olvido la contraseñaa?</a>
          <br>
          <br>
          <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
      </div>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
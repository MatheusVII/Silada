<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="w-100">
    <?=include('navbar.php');?>
    <div class="container p-5 w-50 mt-3">
        <h3 class="mb-5">ALUNO: Peter grifin da silva dos matões</h3>
        <form action="">
            <div class="mb-3">
                <label for="just" class="form-label">JUSTIFICATIVA</label>
                <input type="text" name="just" id="just" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">ENVIAR</button>
            <a href="moderador.php" class="btn btn-danger ms-2">VOLTAR</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

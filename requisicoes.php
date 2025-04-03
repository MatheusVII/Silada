<?php
    require 'conexao.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requisições</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Requisições</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ALUNO</th>
                                    <th>TURMA</th>
                                    <th>RESPONSÁVEL</th>
                                    <th>DATA</th>
                                    <th>RETORNO</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peter grifin da silva dos matões</td>
                                    <td>8°Z</td>
                                    <td>Dilma roussef</td>
                                    <td>23/05/25 as 12:30</td>
                                    <td>SEM RETORNO</td>
                                    <td>
                                        <form action="" method="post" class="d-inline">
                                            <button type="submit" name="confirmar_requisicao" class="btn btn-success btn-sm">CONFIRMAR</button>
                                            <button type="submit" class="btn btn-danger btn-sm" name="recusar_requisicao">RECUSAR</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

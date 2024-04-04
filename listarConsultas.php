<?php
require_once "func.php";
$listaDeConsultas = lerConsultas($conexao);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar Consultas</title>
    <link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>

    <div class="container">
      <h1 class="page-header text-center">Consultas agendadas</h1>
      <div class="row">
            <div class="col-12">

                <table class="table table-bordered table-striped" style="margin-top:20px;">
                    <thead>
                        <th style="width:3%">ID</th>
                        <th style="width:30%">Nome</th>
                        <th style="width:12%">CPF</th>
                        <th style="width:7%">E-mail</th>
                        <th style="width:9%">Telefone</th>
                        <th style="width:10%">Data</th>
                        <th style="width:7%">Horário</th>
                    </thead>
                    <tbody>
                        <?php foreach($listaDeConsultas as $consulta){ ?>
                            <tr>
                                <td><?php echo $consulta['id']; ?></td>
                                <td><?php echo $consulta['nome']; ?></td>
                                <td><?php echo $consulta['cpf']; ?></td>                                    
                                <td><?php echo $consulta['email']; ?></td>                                    
                                <td><?php echo $consulta['telefone']; ?></td>                                    
                                <td><?php echo date("d/m/Y", strtotime($consulta['dataconsulta'])); ?></td>                                    
                                <td><?php echo $consulta['horario']; ?></td>                                    
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
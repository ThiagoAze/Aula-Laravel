<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UniAlfa</a>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Detalhes do Cliente <?php echo e($client->nome); ?>

            </div>
            <div class="card-body">
                <p><strong>ID: <?php echo e($client->id); ?></strong></p>
                <p><strong>Nome: <?php echo e($client->nome); ?></strong></p>
                <p><strong>Endereço: <?php echo e($client->endereco); ?></strong></p>
                <p><strong>Observação: <?php echo e($client->observacao); ?></strong></p>
                <br>
                <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>">Voltar</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH /Volumes/THI-FACUL/4°Semestre/Laravel/aula/resources/views/clients/show.blade.php ENDPATH**/ ?>
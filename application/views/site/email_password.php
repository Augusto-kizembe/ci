<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduiba Projectos</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/css/bootstrap.min.css">
    <style>
        #logo {
            width: 30%;
        }

        .card-header{
            background-color: black;
        }

        h4{
            color:whitesmoke;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="<?= base_url() ?>/public/images/eduiba3.png" alt="Eduiba Projectos" id="logo">
                <h4>Email: suport@eduiba.com - Telefone: (+244) 921625653 / 995151782</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Senhor (a): <?= $name ?></h5>
                <p class="card-text">Foste registado no site do grupo Eduiba, abaixo estão as suas credências</p>
                <p class="card-text">Email: <?= $email?></p>
                <p class="card-text">Palavra-Passe: <?= $password ?></p>
                <p class="card-text">Informamos que só você e somente você conhece a sua palavra passe, sinta-se a vontade para altera-la assim que desejar</p>
            </div>
            <div class="card-footer text-muted text-center">
                <a href="https:eduiba.com">visite nosso web site</a>
                <h6>Copyright &copy GRUPO EDUIBA - Todos direitos reservados</h6>
            </div>
        </div>
    </div>
</body>
</html>
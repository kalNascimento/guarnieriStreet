<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <main class="container">

        <?= form_open(base_url("admin/marcas/cadastrar"))?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome Marca:</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Url Imagem</label>
            <input type="text" class="form-control" id="logo" name="logo">
        </div>
        
        <div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        </div>

        <?= form_close() ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Url-Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($marcas as $marca): ?>
                <tr>
                    <th scope="row"><?= $marca["idmarca"] ?></th>
                    <td><?= $marca["nome"] ?></td>
                    <td><img src="<?= $marca["logo"]?>" width="100px"><?= $marca["logo"] ?></td>
                    <td><a href="/admin/marcas/deletar/<?=$marca["idmarca"]?>">Excluir</a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>
<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<div class="row">
    <?php foreach ($this->data['lista'] as $produto): ?>    
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="<?= $produto->imagem ?>"
                    alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title"><?= $produto->nome ?></h5>
                    <p class="card-text"><strong>Marca:</strong> <?= $produto->nome_marca ?></p>
                    <p class="card-text"><strong>Preço:</strong> R$ <?= $produto->preco ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a type="button" class="btn btn-sm btn-outline-secondary">Visualizar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?= $this->endSection() ?>
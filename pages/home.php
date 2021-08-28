<?php
include 'data/array_produtos.php';
$produtos = $array_produtos;
?>
<div class="apresentacao">
  <h1 class="title">Bem-vindo à HONEY</h1>
</div>
<div class="lista-produtos">
  <h2 class="subtitle">Nossos Produtos</h2>

  <div class="catalogo">
    <?php
    foreach ($produtos as $produto) { ?>
    <div class="card" style="width: 12rem;">
      <img class="card-img-top" src="./images/fotos_produtos/<?= $produto['foto'] ?>" alt="Card image cap">
      <div class="card-body border-top border-warning">
        <h5 class="card-title"><strong><?= $produto['titulo'] ?></strong></h5>
        <p class="card-text">R$ <?= str_replace('.', ',', $produto['valor']) ?></p>
      </div>
      <a href="index.php?tela=produto.php&id=<?= $produto['id'] ?>" class="btn btn-warning hover">Ver Produto</a>
    </div>
    <?php } ?>
  </div>
</div>

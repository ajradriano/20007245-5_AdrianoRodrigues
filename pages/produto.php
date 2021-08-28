<div class="detalhe-produto">
  <?php

  include 'data/array_produtos.php';
  $produtos = $array_produtos;

  if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    include './404.php';
  }
  foreach ($produtos as $produto) {
    if($produto['id'] == $id) {?>
        <h3 style="font-weight:bold"><?= $produto['titulo'] ?></h3>
        <div class="imagem-produto">
            <img class="card-img-top" src="./images/fotos_produtos/<?= $produto['foto'] ?>" alt="Card image cap">
        </div>
        <div class="title">
            Descrição
        </div>
        <p><?= $produto['descricao'] ?></p>
        <div class="title">
            Valor
        </div>
        <p>R$ <?= str_replace('.', ',', $produto['valor']) ?></p>
        <div class="title">
            Ingredientes
        </div>
        <p>
          <?php
          foreach ($produto['ingredientes'] as $ingrediente) {
            echo $ingrediente . ', ';
          }
          ?>
        </p>
    <?php }
  }
  ?>
</div>
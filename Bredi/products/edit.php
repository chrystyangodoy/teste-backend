<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Produto</h2>

<form action="edit.php?id=<?php echo $product['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="name">Categoria</label>
      <input type="text" class="form-control" name="product['categoria_id']" value="<?php echo $product['categoria_id']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Nome</label>
      <input type="text" class="form-control" name="product['nome']" value="<?php echo $product['nome']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Preço</label>
      <input type="text" class="form-control" name="product['preco']" value="<?php echo $product['preco']; ?>">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
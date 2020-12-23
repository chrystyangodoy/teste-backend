<?php

require_once('../config.php');
require_once(DBAPI);

$products = null;
$product = null;

/**
 *  Listagem de Produtos
 */
function index() {
	global $products;
	$products = find_all('produtos');
}


function add() {

  if (!empty($_POST['products'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $product  = $_POST['product'];
    $product['modified'] = $product['created'] = $today->format("Y-m-d H:i:s");
    
    save('products', $product);
    header('location: index.php');
  }
}


function edit() {

  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['product'])) {

      $product= $_POST['product'];
      $product['modified'] = $now->format("Y-m-d H:i:s");

      update('customers', $id, $product);
      header('location: index.php');
    } else {

      global $product;
      $product = find('produtos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

function view($id = null) {
  global $product;
  $product = find('produtos', $id);
}

function delete($id = null) {

  global $product;
  $product = remove('produtos', $id);

  header('location: index.php');
}
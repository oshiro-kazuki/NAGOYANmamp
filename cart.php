<?php
  require_once('data.php');

  $carts = array();
  $sum = 0;
  $pdo = connect();

  if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

  if (@$_POST['submit']) {
    @$_SESSION['cart'][$_POST['id']] += $_POST['num'];
  }

  foreach($_SESSION['cart'] as $id => $num) {
    $stmt = $pdo->prepare("SELECT * FROM menus WHERE id = ?");
    $stmt->execute(array($id));
    $cart = $stmt->fetch();
    $stmt->closeCursor();
    $cart['num'] = strip_tags($num);
    $sum += $num * $cart['price'];
    $carts[] = $cart;
  }

  require 'cart_top.php';
?>

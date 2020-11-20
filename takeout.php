<?php
  require_once('data.php');

  $pdo = connect();
  $stmt = $pdo->query('SELECT * FROM menus');
  $menus = $stmt->fetchAll();

  require 'takeout_top.php';
?>


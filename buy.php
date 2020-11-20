<?php
  require_once('data.php');

  $error = $name = $tel = $mail = $date = '';

  if(@$_POST['submit']) {
    $name = htmlspecialchars($_POST['name']);
    // $tel = htmlspecialchars($_POST['tel']);
    // $mail = htmlspecialchars($_POST['mail']);
    // $date = htmlspecialchars($_POST['date']);

    if(!$name) $error .= 'お名前を入力してくだい';
    // if(!$tel) $error .= 'お電話番号を入力してください';
    // if(!$mail) $error .= 'メールアドレスを入力してくだい';
    // if(!$date) $error .= 'お受け取り日時を入力してくだい';

    if(!$error) {
      $pdo = connect();

      $body = 'ご注文ありがとうございました\n\n'
      .'お名前: $name\n'
      .'お電話番号: $tel\n'
      .'メールアドレス: $mail\n'
      .'お受け取り日時: $date\n\n';

      foreach($_SESSION['cart'] as $id => $num) {
        $stmt = $pdo->prepare("SELECT * FROM menus WHERE id = ?");
        $stmt->execute(array($id));
        $cart = $stmt->fetch();
        $stmt->closeCursor();

        $sum += $num * $cart['price'];

        $body .= "商品名: {$cart['name']}\n"
          . "数量: $num\n"
          . "合計: $sum 円\n\n";
      }
      
      $from = 'newuser@localhost';
      $to = 'newuser@localhost';
      mb_send_mail($to, "購入メール", $body, "From: $from");
      $_SESSION['cart'] = null;
      require 'buy_comp.php';
      exit();
    }
  }
  require 'buy_top.php';
  
?>
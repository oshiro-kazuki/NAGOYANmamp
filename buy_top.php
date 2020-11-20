<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN / order</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href="index.php"><img src="images/yagi.JPG" class="headerLogo"></a>
        <nav id="pcInfo"></nav>
        <nav id="mfInfo">･･･</nav>
        <nav id="mfInfoClose" class="hidden">✕</nav>
      </header>
  
      <div id="mask" class="hidden"></div>
  
      <div id="infoModal" class="hidden"></div>
  
      <main>
        <div class="userContent">
          <p>注文内容が宜しければお名前、ご連絡先、お受け取り日時をご入力いただき、ご注文ボタンをクリックしてください</p>
          <?php if($error) : ?>
            <p><?php echo $error ?></p>
          <?php endif ?>

          <form method="POST" action="buy.php">
            <input type="text" name="name" value="<?php echo $name ?>" placeholder="お名前">
            <!-- <input type="tel" name="tel" placeholder="ご電話番号">
            <input type="email" name="mail" placeholder="メールアドレス">
            <input type="datetime-local" name="date"> -->
            <input type="submit" value="ご注文">
          </form>
        </div>

        <div class="resultBtn">
          <a href="cart.php">カートに戻る</a>
          <a href="takeout.php">トップに戻る</a>
        </div>
        </div>
      </main>

      <div id="home">
        <a href="index.php">トップへ</a>
      </div>
  
      <footer>     
        <div>CAFE NAGOYAN
          <span class="footerPoint">.</span>
        </div>
      </footer>
    </div>
    <script src="public.js"></script>
    <script src="order.js"></script>
  </body>
</html>


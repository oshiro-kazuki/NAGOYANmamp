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
      <!-- <div id="orderConf" class="hidden">
          <p>ご注文ありがとうございました。</p>
      </div> -->
        <div id="result">
          <p>ご注文の確認</p>
          <div id="resultForm">
            <?php foreach($carts as $cart): ?>
              <p>
                <?php echo $cart['name'] ?>: 
                <?php echo $cart['num'] ?>個: 
                <?php echo $cart['price'] * $cart['num'] ?>円
              </p>
              <?php endforeach ?>
            </div>
            
            <p id="total">合計: <?php echo $sum ?>円</p>
            
            <!-- <div class="userContent">
              <p>注文内容が宜しければお名前、ご連絡先、お受け取り日時をご入力いただき、ご注文ボタンをクリックしてください</p>
              <form method="POST" action="buy.php">
                <input type="text" name="name" placeholder="お名前">
                <input type="tel" name="tel" placeholder="ご電話番号">
                <input type="email" name="mail" placeholder="メールアドレス">
                <input type="datetime-local" name="date">
                <input type="submit" value="ご注文">
              </form>
            </div> -->

            <div class="resultBtn">
              <a href="buy.php">注文へ進む</a>
              <a href="cart_empty.php">空にする</a>
              <a href="takeout.php">戻る</a>
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


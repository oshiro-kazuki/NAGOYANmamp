<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN / takeout</title>
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
        <div class="takeout-wrapper">
          <div class="takeout-text">
            <h1>たくさんのご要望をいただいたのでテイクアウト始めました。</h1>
          </div>

          <div id="toItems">
            <?php foreach($menus as $menu): ?>
              <div class="toItem">
                <p class="toP" ><?php echo $menu['name'] ?></p>
                <img src="<?php echo $menu['image'] ?>" class="toImage">
                <p class="toP">￥<?php echo $menu['price'] ?></p>
                <form method="POST" action="cart.php">
                  <select name="num" class="toCount" >
                    <?php for($i = 0; $i < 10; $i++): ?>
                      <option><?php echo $i ?></option>
                    <?php endfor ?>
                  </select>
                  <input type="hidden" name="id" value="<?php echo $menu['id'] ?>" >
                  <input type="submit" name="submit" value="カートへ">
                </form>
              </div>
            <?php endforeach ?>
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
  </body>
</html>
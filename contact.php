<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>CAFE NAGOYAN / contact</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <a href="index.php"><img src="images/yagi.JPG" class="headerLogo"></a>
        <nav id="pcInfo">
        </nav>
        <nav id="mfInfo">･･･</nav>
        <nav id="mfInfoClose" class="hidden">✕</nav>
      </header>
      <div id="mask" class="hidden"></div>
      <div id="infoModal" class="hidden"></div>
      <main>
        <div class="contact-wrapper">
          <h2>お問い合わせ</h2>
          <form action="result.php" method="get" class="contactForm">
            <div>
              <label for="kind">お問い合わせの種類</label><br>
              <select name="kind">
                <option value="reservation">ご予約</option>
                <option value="event">イベントについて</option>
                <option value="etc">その他</option>
              </select>
            </div>
    
            <div>ご来店いただいたことはありますか？<br>
              <label>
                <input type="radio" name="first" value="yes" checked>はい
              </label>
              <label>
                <input type="radio" name="first" value="no">いいえ
              </label>
            </div>
    
            <div>当店をお知りになったきっかけは？<br>
              <label>
                <input type="checkbox" name="how" value="friend">知り合いの紹介
              </label>
              <label>
                <input type="checkbox" name="how" value="magazin">雑誌やウェブサイト
              </label>
              <label>
                <input type="checkbox" name="how" value="etc">その他
              </label>
            </div>
    
            <div>
              <label>お問い合わせの件名<br>
                <input type="text" name="subject" placeholder="お問い合わせ">
              </label>
            </div>
    
            <div>
              <label>お問い合わせの内容<br>
                <textarea name="message"></textarea>
              </label>
            </div>
    
            <div>
              <input type="submit" name="submit" value="送信">
            </div>
          </form>
        </div>
      </main>

      <div id="home">
        <a href="index.php">トップへ</a>
      </div>
  
      <footer>
        <div>CAFE NAGOYAN<span class="footerPoint">.</span></div>
      </footer>
    </div>
    <script src="public.js"></script>
  </body>
</html>
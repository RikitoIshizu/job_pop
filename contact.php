<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JOBPOP 特定労働派遣事業 東京都豊島区東池袋</title>
    <link rel="stylesheet" type="text/css" href="css/header_menu.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/img.js"></script>
    <script>
    $(function(){
      $("#submit_btn").on("click", function(){
          var error;  //エラー用の変数
          var name = $("#name").val();
          var huri = $("#huri").val();
          var tel = $("#tel").val();
          var mail = $("#mail").val();
          if ( name === '' || huri === '' || tel === '' || mail === '') {
            error = true;
          }
          if (error) { //エラーが見つかった場合
            alert("未入力の項目があります。");
            return false;
          }
      });
    });
    </script>
  </head>
  <body>
    <div id="wrapper">
      <?php require_once "tpl/header.html"; ?>
      <div id="contents">
        <h1>contact</h1>
        <h2>下記の項目をご記入の上送信ボタンを押してください</h2>
        <p id="text">
          送信いただいた件につきましては、当社より折り返しご連絡を差し上げます。<br>
          なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。<br>
          <span class="red">＊</span>
          は必須項目となります。
        </p>
        <form action="thanks.php" method="post">
          <dl class="clearfix">
            <dt>氏名<span class="red">*</span></dt>
            <dd><input type="text" name="name" id="name"></dd>
            <dt>フリガナ<span class="red">*</span></dt>
            <dd><input type="text" name="huri" id='huri'></dd>
            <dt>電話番号<span class="red">*</span></dt>
            <dd><input type="text" name="tel" id='tel'></dd>
            <dt>メールアドレス<span class="red">*</span></dt>
            <dd><input type="text" name="mail" id='mail'></dd>
          </dl>
        <h2>
          1.お問い合わせ内容をご記入ください
          <span class="red">*</span>
        </h2>
        <dl>
          <dd><textarea name="contact"></textarea></dd>
          <input type="submit" name="submit" value="送信" id="submit_btn">
        </dl>
      </form>
      </div><!-- contents -->
      <?php require_once "tpl/footer.html"; ?>
    </div> <!-- wrapper -->
  </body>
</html>

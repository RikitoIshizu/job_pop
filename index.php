<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JOBPOP 特定労働派遣事業 東京都豊島区東池袋</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/img.js"></script>
  </head>
  <body>
    <div id="wrapper">
      <?php require_once "tpl/header.html"; ?>
      <div id="contents">
        <div id="top_img">
          <img id=main_img src="img/main_img.jpg" alt="写真">
          <div class="flexslider">
            <ul class="slides">
              <li id="first" style="display:none;">
                <img class="catchcopy" src="img/catchcopy.png" alt="キャッチコピー">
              </li>
              <li id="second" style="display:none;">
                <img class="catchcopy" src="img/catchcopy2.png" alt="キャッチコピー">
              </li>
            </ul>
          </div><!-- flexslider -->
        </div><!-- top_img -->
        <img src="img/title.png" alt="EVENT STYLE PRODUCE" style="display:block;">
        <div id="btn_menu" class="clearfix">
          <ul>
            <li style="clear:both;">
              <a href="about.php"><img src="img/btn01.png" alt="what's Jobpop"></a>
              <p>ジョブポップとはこういう会社です。</p>
              <p class="more">more</p>
            </li>
            <li>
              <a href="company.php"><img src="img/btn02.png" alt="Company"></a>
              <p>会社概要</p>
              <p class="more">more</p>
            </li>
            <li>
              <a href="recruit.php"><img src="img/btn03.png" alt="Recruit"></a>
              <p>随時スタッフを募集しています。</p>
              <p class="more">more</p>
            </li>
            <li>
              <a href="qa_index.php"><img src="img/btn04.png" alt="q&amp;A"></a>
              <p>よくあるQ&amp;A</p>
              <p class="more">more</p>
            </li>
            <li>
              <a href="contact.php"><img src="img/btn05.png" alt="Inquary"></a>
              <p>ジョブポップへのお問い合せ</p>
              <p class="more">more</p>
            </li>
          </ul>
        </div><!-- btn_menu -->
      </div><!-- contents -->
      <?php require_once "tpl/footer.html"; ?>
    </div> <!-- wrapper -->
  </body>
</html>

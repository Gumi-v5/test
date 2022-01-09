<!doctype html>
<html>
<head>
<?php include( 'inc/head.php'); ?>
</head>
<body>
  <?php include( 'inc/header.php'); ?>
  <link rel="stylesheet" href="css/works.css">
  <main class="page_scenery">
    <ul class="breadcrumb maw">
      <li class="breadcrumb_item"><a href="/portfolio">TOP</a></li>
      <li class="breadcrumb_item"><span class="current">WORKS</span></li>
    </ul>
    <h1 class="page_ttl los_b maw"><span class="span">WORKS</span></h1>
    <div class="works_bookmark maw">
      <p class="works_bookmark_ttl">目次</p>
      <ul class="works_bookmark_list">
        <li class="works_bookmark_item"><a href="#id01">幻想遊戯団</a></li>
        <li class="works_bookmark_item"><a href="#id02">マウナ・ケア</a></li>
        <li class="works_bookmark_item"><a href="#id03">ペンデュラム・ドールズ</a></li>
      </ul>
    </div>
    <div class="works">
      <div class="works_blc" id="id01">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">幻想遊戯団</h2>
          <p class="works_link"><a href="//gensouyugi.com/" target="_blank">https://gensouyugi.com/</a></p>
          <p class="works_lead">ワードプレスを使用してオリジナルテーマで作成したサイトです。<br>トップスライダー、ゲームタイトル、トピックスはCPT UIを使用して動的に作成しています。<br>子ページとして作成したブランドページ（マウナ・ケアとペンデュラム・ドールズ）の世界観を強調をさせるために、トップページはそれを邪魔しないシンプルなデザインに仕上げました。</p>
        </div>
        <ul class="works_img maw">
          <li class="works_img_item">
            <p class="works_img_head">【PC表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02a.jpg" alt="幻想遊戯団"></p>
          </li>
          <li class="works_img_item">
            <p class="works_img_head">【SP表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02b.jpg" alt="幻想遊戯団"></p>
          </li>
        </ul>
      </div>
      <div class="works_blc" id="id02">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">幻想遊戯団 <i class="fa fa-angle-right" aria-hidden="true"></i> マウナ・ケア</h2>
          <p class="works_link"><a href="//gensouyugi.com/maunakea/" target="_blank">https://gensouyugi.com/maunakea/</a></p>
          <p class="works_lead">アニメーションをふんだんに使用して作成したサイトです。<br>天体観測がテーマのボードゲームなので、オープニングのアニメーションは少しずつ下にスクロールさせて夜空を見上げるような演出にしました。<br>他にもサイト全体に隕石を降らせるなどアニメーションでボードゲームの世界観を再現しています。</p>
        </div>
        <ul class="works_img maw">
          <li class="works_img_item">
            <p class="works_img_head">【PC表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02c.jpg" alt="幻想遊戯団"></p>
          </li>
          <li class="works_img_item">
            <p class="works_img_head">【SP表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02d.jpg" alt="幻想遊戯団"></p>
          </li>
        </ul>
      </div>
      <div class="works_blc" id="id03">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">幻想遊戯団 <i class="fa fa-angle-right" aria-hidden="true"></i> ペンデュラム・ドールズ</h2>
          <p class="works_link"><a href="//gensouyugi.com/pendulum-dolls/" target="_blank">https://gensouyugi.com/pendulum-dolls/</a></p>
          <p class="works_lead">こちらはコーディングのみ担当しました。<br>頒布イベントのギリギリに作成依頼を受け、期限に間に合わすためにテキストを画像のままコーディングするなどの時短をして、トップページは4時間程度で作成しました。<br>Q&amp;AページはCPT UIを使用して動的に作成しています。</p>
        </div>
        <ul class="works_img maw">
          <li class="works_img_item">
            <p class="works_img_head">【PC表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02e.jpg" alt="幻想遊戯団"></p>
          </li>
          <li class="works_img_item">
            <p class="works_img_head">【SP表示】</p>
            <p class="works_img_body"><img src="img/index/index_img02f.jpg" alt="幻想遊戯団"></p>
          </li>
        </ul>
      </div>
    </div>
  </main>
<?php include( 'inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});
</script>
<script>
$(window).scroll(function(){
 var MainSlider = $(".sec01_ttl").innerHeight();
 var MainSlider02 = $(".scroll_stop").innerHeight();
 var MainSlider03 = MainSlider + MainSlider02;
  if ($(window).scrollTop() > MainSlider03) {
    $('.sec01_ttl').addClass('scrl');
    $('.side_bnr').addClass('scrl');
  } else {
    $('.sec01_ttl').removeClass('scrl');
    $('.side_bnr').removeClass('scrl');
  }
});
</script>
<script>
$('.burger').on('click', function () {
    $('.burger').toggleClass('open');
    $('.header_gnav').toggleClass('open');
});
</script>
<script type="text/javascript" src="js/slick.js"></script>
<script>
$(function() {
    $('.sec01_slider').slick({
        infinite: true,
        autoplay:true,
        autoplaySpeed:5000,
        dots:true,
        arrows:true,
    });
});
</script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</body>
</html>

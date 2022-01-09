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
    <div class="works">
      <div class="works_blc" id="id01">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">jigsaw</h2>
          <p class="works_link"><a href="//jigsaw-house.com/" target="_blank">https://jigsaw-house.com/</a></p>
          <p class="works_lead">前職で作成したもののひとつです。<br>コーディングを担当し、ワードプレスを使用して作成しました。<br>リキッドレイアウトで全環境から正しく表示させることはもちろん、イベントページからメールフォームに飛ぶ際、セッション変数を利用し、リンク元のイベント名、日時などの情報をフォームに引っ張ってきてエンドユーザーの入力の手間を減らせるような仕組みを実装しました。</p>
        </div>
        <ul class="works_img maw">
          <li class="works_img_item">
            <p class="works_img_head">【PC表示】</p>
            <p class="works_img_body"><img src="img/index/index_img04a.jpg" alt="jigsaw"></p>
          </li>
          <li class="works_img_item">
            <p class="works_img_head">【SP表示】</p>
            <p class="works_img_body"><img src="img/index/index_img04b.jpg" alt="jigsaw"></p>
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

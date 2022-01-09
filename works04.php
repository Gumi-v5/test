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
        <li class="works_bookmark_item"><a href="#id01">お品書き</a></li>
        <li class="works_bookmark_item"><a href="#id02">フライヤー・ポスター</a></li>
      </ul>
    </div>
    <div class="works">
      <div class="works_blc" id="id01">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">お品書き</h2>
          <p class="works_lead">ゲームマーケット2020秋で使用したお品書きです。<br>右半分の全面にキャラクターを配置してゲームの雰囲気を伝えつつ、左下から右上にカードを流して右上のコンテンツに視線を誘導させる工夫をしました。<br>また右側のコンテンツのそれぞれ大きさを分けることでジャンプ率を高めるデザインに仕上げました。</p>
        </div>
        <div class="works_slider maw">
          <ul class="slider slider01">
            <li class="slide-item"><img data-lazy="img/index/index_img06a.jpg" alt="お品書き"><p class="caption">お品書き</p></li>
            <li class="slide-item"><img data-lazy="img/index/index_img06b.jpg" alt="お品書き"><p class="caption">お品書き見開きサンプル</p></li>
            <li class="slide-item"><img data-lazy="img/index/index_img06c.jpg" alt="お品書き"><p class="caption">お品書き実物写真</p></li>
          </ul>
          <ul class="thumbnail-list thumbnail01">
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06a.jpg" alt="お品書き"></span></li>
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06b.jpg" alt="お品書き見開きサンプル"></span></li>
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06c.jpg" alt="お品書き実物写真"></span></li>
          </ul>
        </div>
      </div>
      <div class="works_blc" id="id02">
        <div class="works_txt maw">
          <h2 class="works_ttl yumin_b">フライヤー・ポスター</h2>
          <p class="works_lead">ペンデュラム・ドールズという同人カードゲームのフライヤーとポスターです。<br>ドールズ（下部の4キャラ）が宿敵（上部のキャラ）に戦いを挑む構図を意識し、全体的にカードを散りばめカードゲームだと一目でわかるデザインに仕上げました。</p>
        </div>
        <div class="works_slider maw">
          <ul class="slider slider02">
            <li class="slide-item"><img data-lazy="img/index/index_img06d.jpg" alt="お品書き"><p class="caption">B5フライヤー</p></li>
            <li class="slide-item"><img data-lazy="img/index/index_img06e.jpg" alt="お品書き"><p class="caption">A3ポスター</p></li>
            <li class="slide-item"><img data-lazy="img/index/index_img06f.jpg" alt="お品書き"><p class="caption">A3ポスター実物</p></li>
          </ul>
          <ul class="thumbnail-list thumbnail02">
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06d.jpg" alt="お品書き"></span></li>
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06e.jpg" alt="お品書き見開きサンプル"></span></li>
            <li class="thumbnail-item"><span class="span trim_w"><img src="img/index/index_img06f.jpg" alt="お品書き実物写真"></span></li>
          </ul>
        </div>
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
$(function(){
  var slider = ".slider01"; // スライダー
  var thumbnailItem = ".thumbnail01 .thumbnail-item"; // サムネイル画像アイテム
  
  // サムネイル画像アイテムに data-index でindex番号を付与
  $(thumbnailItem).each(function(){
   var index = $(thumbnailItem).index(this);
   $(this).attr("data-index",index);
  });
  
  // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
  // 「slickスライダー作成」の前にこの記述は書いてください。
  $(slider).on('init',function(slick){
   var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
   $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
  });

  //slickスライダー初期化  
  $(slider).slick({
    autoplay: false,
    arrows: false,
    fade: true,
    infinite: false //これはつけましょう。
  });
  //サムネイル画像アイテムをクリックしたときにスライダー切り替え
  $(thumbnailItem).on('click',function(){
    var index = $(this).attr("data-index");
    $(slider).slick("slickGoTo",index,false);
  });
  
  //サムネイル画像のカレントを切り替え
  $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
    $(thumbnailItem).each(function(){
      $(this).removeClass("thumbnail-current");
    });
    $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
  });
});
</script>
<script>
$(function(){
  var slider = ".slider02"; // スライダー
  var thumbnailItem = ".thumbnail02 .thumbnail-item"; // サムネイル画像アイテム
  
  // サムネイル画像アイテムに data-index でindex番号を付与
  $(thumbnailItem).each(function(){
   var index = $(thumbnailItem).index(this);
   $(this).attr("data-index",index);
  });
  
  // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
  // 「slickスライダー作成」の前にこの記述は書いてください。
  $(slider).on('init',function(slick){
   var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
   $(thumbnailItem+'[data-index="'+index+'"]').addClass("thumbnail-current");
  });

  //slickスライダー初期化  
  $(slider).slick({
    autoplay: false,
    arrows: false,
    fade: true,
    infinite: false //これはつけましょう。
  });
  //サムネイル画像アイテムをクリックしたときにスライダー切り替え
  $(thumbnailItem).on('click',function(){
    var index = $(this).attr("data-index");
    $(slider).slick("slickGoTo",index,false);
  });
  
  //サムネイル画像のカレントを切り替え
  $(slider).on('beforeChange',function(event,slick, currentSlide,nextSlide){
    $(thumbnailItem).each(function(){
      $(this).removeClass("thumbnail-current");
    });
    $(thumbnailItem+'[data-index="'+nextSlide+'"]').addClass("thumbnail-current");
  });
});
</script>
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</body>
</html>

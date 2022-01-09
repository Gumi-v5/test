  <header class="header">
    <div class="header_inr maw">
<?php
    $url = $_SERVER['REQUEST_URI'];
?>
<?php if($url == "/portfolio/"){ ?>
      <h1 class="header_logo"><a href="/portfolio"><img src="img/common/logo.png" alt="AKI GONDA Portfolio Website"></a></h1>
<?php }else{ ?>
      <p class="header_logo"><a href="/portfolio"><img src="img/common/logo.png" alt="AKI GONDA Portfolio Website"></a></p>
<?php } ?>
      <ul class="header_gnav los_b">
        <li class="header_gnav_item"><a href="/portfolio#top">TOP</a></li>
        <li class="header_gnav_item"><a href="/portfolio#about">ABOUT</a></li>
        <li class="header_gnav_item"><a href="/portfolio#works">WORKS</a></li>
        <li class="header_gnav_item close burger">閉じる</li>
      </ul>
    </div>
  </header>
  
<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1 user-scalable=no, maximum-scale=1.0">
  <title><?php if ($page_title) {
            echo $page_title . ' | ';
          } ?>マナファクトリー</title>
  <meta name="description" content="">
  <meta property="og:url" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <link rel="icon" href="/assets/img/common/favicon.ico" sizes="16x16" type="image/png">

  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

  <script src="/assets/js/jquery-3.6.1.min.js"></script>
  <script src="/assets/js/slick.min.js"></script>
  <script src="/assets/js/desvg.js"></script>
  <!-- <script src="/assets/js/bodyScrollLock.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="/assets/js/main.js"></script>
</head>

<body class="<?= $body_class; ?>">

  <header class="header">
    <div class="l-inner">
      <div class="headerTop">
        <ul class="headerSnsList">
          <li class="headerSnsList__item"><a href="#"><img src="/assets/img/common/ico_sns-insta.svg" alt=""></a></li>
          <li class="headerSnsList__item"><a href="#"><img src="/assets/img/common/ico_sns-fb.svg" alt=""></a></li>
          <li class="headerSnsList__item"><a href="#"><img src="/assets/img/common/ico_sns-line.svg" alt=""></a></li>
          <li class="headerSnsList__item"><a href="#"><img src="/assets/img/common/ico_sns-x.svg" alt=""></a></li>
          <li class="headerSnsList__item"><a href="#"><img src="/assets/img/common/ico_sns-youtube.svg" alt=""></a></li>
        </ul>

        <h1 class="headerLogo"><a href="#"><img src="/assets/img/common/logo.png" alt=""></a></h1>

        <div class="headerInfo">
          <a href="/contact/" class="headerInfo__link contact">お問い合わせ</a>
          <a href="/reserve/" class="headerInfo__link reserve">ご予約</a>
        </div>
      </div>

      <nav class="headerNav">
        <ul class="headerNavList">
          <li class="headerNavList__item">
            <a href="#">メニュー</a>
            <ul class="headerNavListSub">
              <li class="headerNavListSub__item"><a href="#">メニュー一覧</a></li>
              <li class="headerNavListSub__item"><a href="#">ファンダイビング</a></li>
              <li class="headerNavListSub__item"><a href="#">体験ダイビング</a></li>
              <li class="headerNavListSub__item"><a href="#">シュノーケリング</a></li>
              <li class="headerNavListSub__item"><a href="#">集合場所のご案内</a></li>
              <li class="headerNavListSub__item"><a href="#">ツアー参加前のお願い</a></li>
            </ul>
          </li>
          <li class="headerNavList__item"><a href="#">マナファクトリーについて</a></li>
          <li class="headerNavList__item"><a href="#">よくある質問</a></li>
          <li class="headerNavList__item"><a href="#">ダイビング日記</a></li>
        </ul>
      </nav>
    </div>
  </header>
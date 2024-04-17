<?php
$body_class = 'post';
$page_ttl = [
  'subTxt' => 'Blog',
  'mainTxt' => 'ダイビング日記'
];
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php'); ?>

<div class="l-section postArea">
  <div class="l-inner postContainer">
    <main class="postMain">

      <article class="postArt">
        <div class="postArtHead">
          <div class="c-postCatBox">
            <p class="c-postCat">ダイビング日記</p>
          </div>
          <p class="c-postDate">2024/02/11</p>
        </div>
        <h1 class="postArt__ttl">クダゴンベ</h1>

        <div class="c-postTagBox postArt__tagBox">
          <a href="#" class="c-postTag">クダゴンベ</a>
          <a href="#" class="c-postTag">ロウニンアジ</a>
        </div>

        <dl class="postArtCondition">
          <div class="postArtCondition__item weather">
            <dt class="postArtCondition__ttl">天気</dt>
            <dd class="postArtCondition__txt">雲</dd>
          </div>
          <div class="postArtCondition__item windDirection">
            <dt class="postArtCondition__ttl">風向き</dt>
            <dd class="postArtCondition__txt">東北東</dd>
          </div>
          <div class="postArtCondition__item windSpeed">
            <dt class="postArtCondition__ttl">風速</dt>
            <dd class="postArtCondition__txt">2m/s</dd>
          </div>
        </dl>

        <div class="postArtCont">
          <p>ベテランさんのリクエスト</p>
          <p>小物と大物で、クダゴンベとロウニンアジにあってきました。</p>

          <figure class="wp-block-image"><img decoding="async" width="680" height="510" src="https://www.kapilina.biz/wp-content/uploads/2024/04/P4110077.jpg" alt="ハナダイアーチ" class="wp-image-21456"></figure>

          <h2>見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2見出し2</h2>

          <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>

          <h3>見出し3見出し3見出し3見出し3見出し3見出し3見出し3見出し3見出し3見出し3見出し3見出し3</h3>

          <p>本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文</p>

          <a href="#">リンク</a>

          <figure class="wp-block-image"><img decoding="async" width="680" height="510" src="https://www.kapilina.biz/wp-content/uploads/2024/04/P4110077.jpg" alt="ハナダイアーチ" class="wp-image-21456"></figure>
        </div>

      </article>

      <div class="postNextArt">
        <a href="https://arari.co.jp/divelog/2111/" class="postNextArt__link prev">
          <div class="postNextArt__cont">
            <p class="postNextArt__linkTxt">前の記事</p>
            <p class="postNextArt__ttl">体験ダイビングにチャレンジ</p>
          </div>
        </a>

        <a href="https://arari.co.jp/divelog/2128/" class="postNextArt__link next">
          <div class="postNextArt__cont">
            <p class="postNextArt__linkTxt">次の記事</p>
            <p class="postNextArt__ttl">朝方、土砂降り</p>
          </div>
        </a>
      </div>

      <a href="/blog/" class="c-btn back center postArt__backLink">一覧へ戻る</a>

    </main>


    <?php require_once($_SERVER['DOCUMENT_ROOT'] . '/sidebar.php'); ?>

  </div>
</div>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');

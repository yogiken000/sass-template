<?php
$prevpost = get_adjacent_post(false, '', true); //前の記事
$nextpost = get_adjacent_post(false, '', false); //次の記事
if ($prevpost or $nextpost) : //前の記事、次の記事いずれか存在しているとき
?>


<div class="postNextArt">

  <?php if ($prevpost) : ?>
  <a href="<?= get_permalink($prevpost->ID); ?>" class="postNextArt__link prev">
    <div class="postNextArt__cont">
      <p class="postNextArt__linkTxt">前の記事</p>
      <p class="postNextArt__ttl"><?= get_the_title($prevpost->ID); ?></p>
    </div>
  </a>
  <?php endif; ?>

  <?php if ($nextpost) : ?>
  <a href="<?= get_permalink($nextpost->ID); ?>" class="postNextArt__link next">
    <div class="postNextArt__cont">
      <p class="postNextArt__linkTxt">次の記事</p>
      <p class="postNextArt__ttl"><?= get_the_title($nextpost->ID); ?></p>
    </div>
  </a>
  <?php endif; ?>

</div>

<?php endif; ?>
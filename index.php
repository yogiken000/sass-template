<?php
$body_class = 'index';
require_once($_SERVER['DOCUMENT_ROOT'] . '/header.php');  ?>


<script>
jQuery(function($) {

});
</script>

<div class="container">
  <div class="car"></div>
</div>


<style>
.container {
  height: 3000px;
}

.car {
  width: 30px;
  height: 50px;
  background-color: #000;
}
</style>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/footer.php');

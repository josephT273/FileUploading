<?php

$path = "upload/*";

$search = glob($path);

// print_r($search);

foreach ($search as $loadValue) {
?>
<div class="img_container">
  <img src="<?php echo "$loadValue"; ?>" alt="">
</div>
<?php
}

?>

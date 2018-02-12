
<?php

if(!function_exists("get_field")) return;
?>
  <div class="w-100 row col-12 d-flex justify-content-center">
  <div class="row col-12 d-flex justify-content-center ">
    <h1 class="text-center"><?php the_field('titre'); ?></h1>
  </div>
  <div class="col-12 mt-5">
      <?php 

$image = get_field('img');

if( !empty($image) ): ?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

<?php endif; ?>
    </div>
    <div class="col-12 mt-5">
      <strong class="col-12">Descriptif :</strong>
      <p class="col-12" ><?php the_field('descriptif'); ?></p>
      <p class="col-12" ><?php the_field('link'); ?></p>
    </div>
    <div class="row col-12 mt-5">
    <h1 class="col-12"><?php the_field('titre-techno'); ?></h1>
<ulclass="col-12">
<p><?php the_field('techno1'); ?></p>
<p><?php the_field('techno2'); ?></p>
<p><?php the_field('techno3'); ?></p>
<p><?php the_field('techno4'); ?></p>
<p><?php the_field('techno5'); ?></p>
</ul>
</div>

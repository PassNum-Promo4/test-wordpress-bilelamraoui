<?php
/**
 * Template Name: CV
 */

get_header();
?>
<div class="card row col-12 p-5 w-100 d-flex justify-content-center "style=" border-color: #000;" >  


  <div class="row col-12">
    <div class="row col-12">
      <?php
      $image = get_field('imgheader');
      if( !empty($image) ): ?>
        <img class="img-fluid col-12" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
    </div>
    <div class="row col-12 mt-5 d-flex justify-content-center">
      <h1 class="col-12 d-flex justify-content-center"><?php the_field('nom'); ?></h1>
      <h1 class="col-12 d-flex justify-content-center" style="color:purple;"><strong><?php the_field('titre'); ?></strong></h1>
      <h1 class="col-12 d-flex justify-content-center"><?php the_field('objectif'); ?></h1>
    </div>
  </div>

<div class="row col-12">
  <div class="row col-lg-6 col-md-6 col-sm-12" >
    <div class="row  col-12 mt-5">
      <h2 class="col-12" style="color:blue;"><?php the_field('profil'); ?></h2>
      <p class="col-12"><?php the_field('elemprofil'); ?></p>
    </div>
    <div class="row col-12 mt-5">
      <h2 class="col-12" style="color:blue;"><?php the_field('atout'); ?></h2>
      <p class="col-12"><?php the_field('atoutelem'); ?></p>
    </div>
    <div class="row col-12 mt-5">
    <h2 class="col-12" style="color:blue;"><?php the_field('voyage'); ?></h2>
      <p class="col-12"><?php the_field('voyageelem'); ?></p>
      <h2 class="col-12" style="color:blue;"><?php the_field('reseau'); ?></h2>
      <p class="col-12"><?php the_field('reseauelem'); ?></p>
    </div>
    <div class="row col-12 mt-5">
      <h2 class="col-12" style="color:blue;"><?php the_field('diver'); ?></h2>
      <p class="col-12"><?php the_field('diverelem'); ?></p>
    </div>
  </div>



  <div class="row col-lg-6 col-md-6 col-sm-12">
    <div class="row col-12 mt-5 ">
    <h2 class="col-12" style="color:blue;"><?php the_field('diplom'); ?></h2>
      <p class="col-12"><?php the_field('passnum'); ?></p>
      <p class="col-12"><?php the_field('rtes'); ?></p>
      <p class="col-12"><?php the_field('bafa'); ?></p>
      <p class="col-12"><?php the_field('bac'); ?></p>
    </div>
    <div class="row col-12 mt-5">
    <h2 class="col-12" style="color:blue;"><?php the_field('experience'); ?></h2>
      <p class="col-12"><?php the_field('experiencepro'); ?></p>
    </div>
    <div class="row col-12 mt-5">
    <h2 class="col-12" style="color:blue;"><?php the_field('competence'); ?></h2>
      <p class="col-12"><?php the_field('competenceelem'); ?></p>
    </div>
    <div class="row col-12 mt-5">
    <h2 class="col-12" style="color:blue;"><?php the_field('langue'); ?></h2>
      <p class="col-12"><?php the_field('langueelem'); ?></p>
    </div>
  </div>
</div>  
</div>
<?php
get_footer();
 

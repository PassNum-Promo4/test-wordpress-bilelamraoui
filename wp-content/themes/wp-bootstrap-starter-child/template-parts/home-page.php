<?php
/**
 * Template Name: home
 */

get_header();
?>
<div>
	<div class="col-12 row d-flex justify-content-center">
		<h1 class="p-3 text-center card" style=" border-color: #000;" ><?php the_field('nom'); ?></h1>
	</div>
	<div class=" p-5 col-12 row ">
		<h1 class="text-center"><?php the_field('diplom'); ?></h1>
		<p><?php the_field('passnum'); ?></p>
	</div>
	<div class="p-5 row col-12 justify-content-center">
	<div class=" m-2 col-lg-4 col-md-8 col-sm-12 "><a class="p-3 card text-center" style=" border-color: #000; text-decoration: none;"  href="<?php the_field('lien'); ?>">Contact</a></div>
	<div class=" m-2 col-lg-4 col-md-8 col-sm-12 "><a class="p-3 card text-center" style=" border-color: #000; text-decoration: none;"  href="<?php the_field('lien2'); ?>">CV</a></div>
	<div class=" m-2 col-lg-4 col-md-8 col-sm-12"><a class="p-3 card text-center" style=" border-color: #000; text-decoration: none;"  href="http://localhost/wordpress/?post_type=projet">Projet</a></div>
		

		
	</div>
</div>

<?php
get_footer();
 

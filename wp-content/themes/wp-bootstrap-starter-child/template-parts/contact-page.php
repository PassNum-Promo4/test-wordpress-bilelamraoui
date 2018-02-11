<?php
/**
 * Template Name: Contact
 */

get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
					<div class=" w-100 col-12 row ">
				  <div class="row col-12  d-flex justify-content-center " >
				    <h1 class="text-center col-10 p-5 card" style=" border-color: #000;"  ><?php the_field('titre'); ?></h1>
				  </div>
					<div class="col-lg-12 col-md-12 col-sm-12">
						<p class="text-center"><?php the_field('text'); ?></p>
					</div>
					<div class="col-12 row m-3 d-flex justify-content-center">
						<div class="col-lg-8 col-md-12 col-sm-12 m-5 row d-flex justify-content-center ">
							<div class="row col-lg-6 col-md-12 col-sm-12  d-flex justify-content-start">
								<?php
								$image = get_field('phone');
								if( !empty($image) ): ?>
									<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
									<p class="m-3">:<?php the_field('numero'); ?></p>
							</div>
							<div class="row col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start ">
								<?php
								$image = get_field('git');
								if( !empty($image) ): ?>
									<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
									<p class="m-3">:<?php the_field('github'); ?></p>
							</div>
							<div class="row col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start ">
								<?php
								$image = get_field('mail');
								if( !empty($image) ): ?>
									<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
									<p class="m-3">:<?php the_field('email'); ?></p>
							</div>
							<div class="row col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start ">
								<?php
								$image = get_field('link');
								if( !empty($image) ): ?>
									<img class="img-fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								<?php endif; ?>
									<p class="m-3">:<?php the_field('linkedin'); ?></p>
							</div>
						</div>
					</div>
					<div class="col-12 row d-flex justify-content-center ">
						<form class="col-lg-8 col-md-12 col-sm-12 row  " action="index.html" method="post">
							<div class="col-12">
								<h1 class="text-center p-5 card" style=" border-color: #000;" >Contactez Moi</h1>
							</div>
							<div class="col-12 row d-flex justify-content-start m-3  ">
								<label class="col-4">Nom :</label>
								<input class="col-8 form-control" type="text" name="nom" value="AMRAOUI">
							</div>
							<div class="col-12 row d-flex justify-content-start m-3  ">
								<label for="#prenom" class="col-4" for="">Prenom :</label>
								<input id="prenom" class="col-8 form-control" type="text" name="prenom" value="bilel">
							</div>
							<div class="col-12 row d-flex justify-content-start m-3">
								<label for="#email" class="col-4" for="">Email :</label>
								<input id="email" class="col-8 form-control" type="mail" name="mail" value="bilel-amraoui@outlook.fr">
							</div>
							<div class="col-12 row d-flex justify-content-start m-3">
								<label for="#object" class="col-4" for="">Object :</label>
								<input id="object" class="col-8 form-control" type="text" name="objet" value="Sujet">
							</div>
							<div class="col-12 row d-flex justify-content-start m-3">
								<label for="#message" class="col-12" for="">Message :</label>
							<textarea id="message" class="col-12 form-control" name="message" rows="8" cols="80"></textarea>
							</div>
							<div class="col-12 row d-flex justify-content-center">
								<input class="col-5  m-3" type="button" name="button" value="Envoyer">
							</div>

						</form>
					</div>
					</div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();

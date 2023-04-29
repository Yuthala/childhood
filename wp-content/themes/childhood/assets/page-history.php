<?php
/*
Template Name: Наша История
*/
?>

<?php
	get_header();
?>

<div class="aboutus">
	<div class="container">
		<h1 class="title">Наша история</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="subtitle">
					<?php
						the_field('wish_title');
					?>
				</div>
				<div class="aboutus__text">
					<?php
						the_field('wish_text');
					?>
				</div>
			</div>
			<div class="col-lg-6">
				<img class="aboutus__img" src="<?php the_field('wish_photo'); ?>" alt="мир детства">
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<img class="aboutus__img" src="<?php the_field('quality_photo'); ?>" alt="главное-качество">
			</div>
			<div class="col-lg-6">
				<div class="subtitle">
					<?php the_field('quality_title'); ?>
				</div>
				<div class="aboutus__text">
					<?php the_field('quality_text'); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6">
				<div class="subtitle">
					<?php the_field('technologies_title'); ?>
				</div>
				<div class="aboutus__text">
					<?php the_field('technologies_text'); ?>
				</div>
			</div>
			<div class="col-lg-6">
				<img class="aboutus__img" src="<?php the_field('technologies_photo'); ?>" alt="современные технологии">
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
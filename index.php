<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */

get_header(); ?>

<div class="banner">
</div>

<div class="main main__content">
	<section class="news">
		<h2 class="title">À la une</h2>
		<?php $newsList = new WP_Query('post_type=actualites'); ?>
		<?php if ( $newsList->have_posts() ) : ?>
			<ul class="news__list">
				<?php $i=1; while ( $newsList->have_posts() && i<=1) : $newsList->the_post(); ?>
					<li class="news__list__item">
						<?php the_content(); ?>
					</li>
				<?php $i++; endwhile; ?>
			</ul>
		<?php endif; ?>
	</section>

	<section class="informations">
		<h2 class="title">Informations</h2>
		<div class="informations-wrapper">
			<div class="info-type">
				<h3 class="info-type--title">Générales</h3>
				<div class="info-type--text">
					<p>Si vous êtes un curieux ou que vous recherchez juste des informations sur Espace P et la legislation en place, c'est par ici.</p>
				</div>
				<p class="info-type--button"><a href="informations_main">Informations générales</a></p>
			</div>
			<div class="info-type">
				<h3 class="info-type--title">Travailleurs du Sexe / Sex Workers</h3>
				<div class="info-type--text">
					<p>Pour tous les renseignements relatifs à la législation du travail dans le milieu du sexe et d'autres informations pratiques. Page disponible également en anglais !</p>
					<p>This way for all informations about legislation for sex workers and some useful tips. Page available in English !</p>
				</div>
				<p class="info-type--button"><a href="informations_workers">Informations Travailleurs du Sexe / Sex Workers</a></p>
			</div>
			<div class="info-type">
				<h3 class="info-type--title">Etudiants</h3>
				<div class="info-type--text">
					<p>Si vous êtes étudiant et cherchez des informations sur la législation, des stages ou juste sur des activités de sensibilisation, c'est ici.</p>
				</div>
				<p class="info-type--button"><a href="informations_students">Informations Etudiants</a></p>
			</div>
			<div class="info-type">
				<h3 class="info-type--title">Clients</h3>
				<div class="info-type--text">
					<p>Si vous êtes client, c'est par là.</p>
				</div>
				<p class="info-type--button"><a href="informations_clients">Informations Clients</a></p>
			</div>
		</div>
	</section>
</div>

<?php get_footer(); ?>

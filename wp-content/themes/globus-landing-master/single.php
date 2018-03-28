<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package globus-landing-master
 */

get_header();
?>
<!-- start inside-crumbs.html-->
<section class="crumbs">
	<ul class="crumbs__link">
<!--		<li><a href="/">Главная <i class="fas fa-chevron-right"></i> </a> </li>-->
<!--		<li><a href="/new-buildings">Новостройки Москвы и МО <i class="fas fa-chevron-right"></i></a></li>-->
<!--		<li><a href="#">--><?php //the_title(); ?><!--</a></li>-->
		<?php echo fw_ext_get_breadcrumbs('<i class="fas fa-chevron-right"></i>');?>
	</ul>
</section>
<!-- end inside-crumbs.html-->
<div class="blog__content">
	<?php while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', get_post_type() );
		/*the_post_navigation();*/
	endwhile; ?>
</div>

<?php
get_footer();
?>
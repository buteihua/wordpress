<?php
/**
 * The template for displaying Category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
 
		<?php if ( have_posts() ) : ?>
			

			<?php /* The loop */ ?>
			<ul class="post_ul">
			<?php while ( have_posts() ) : the_post(); ?>
				<li style="margin-top: 40px;">
           
                <div class="bd">
                <h3 style="margin:11px 0"><a href="<?php the_permalink()?>"><?php echo the_title()?></a></h3>
                <div class="cate-cont"><p><?php echo mb_strlen($cont = strip_tags(get_the_content())) > 120 ? mb_substr($cont, 0, 120) . '...' : $cont?></p></div>
                </div>
            </li>
			<?php endwhile; ?>
		</ul>
			<?php twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php get_header();?>

<div class="o-container u-margin-bottom-40">
	<div class="o-row">
		<div class="o-row__column o-row__column--span-12 o-row__column--span-<?php echo is_active_sidebar('primary-sidebar') ? 8 : 12 ?>@medium">
			<main role="main">
			<?php if(have_posts()) { ?>
				<?php while(have_posts()): ?>
					<?php the_post();?>
					<article <?php post_class('c-post u-margin-bottom-20')?>>
						<h2 class="c-post__title">
							<a href="<?php the_permalink();?>"
								title="<?php the_title_attribute()?>">
								<?php the_title();?>
							</a>
						</h2>
						<div class="c-post__meta">
							<?php _themename_post_meta(); ?>
						</div>
						<div class="c-post__excerpt">
							<?php the_excerpt();?>
						<div>
						<?php _themename_readmore_link(); ?>
					</article>
				<?php endwhile; ?>
				<?php the_posts_pagination(); ?>
			<?php } else { ?>
				<p><?php _e('Sorry, no posts matched your criteria.', '_themename'); ?></p>
			<?php } ?>
			</main>
		</div>
		<?php if (is_active_sidebar('primary-sidebar')){ ?>
			<div class="o-row__column o-row__column--span-12 o-row__column--span-4@medium">
					<?php get_sidebar(); ?>
			</div>
		<?php } else { ?>
		<?php dynamic_sidebar('primary-sidebar') ?>

		you can add widgets
	<?php }?>
	</div>
</div>
<?php

	$comments = 1;

	printf(_n('One comment', '%s comments', $comments, '_themename'), $comments);

	$city = 'london';

	echo esc_html__('Your city is ', '_themename') . $city;
	printf(
		/* translators: %s is the city name. */
		esc_html__('Your city is %s', '_themename'),
		$city
	);

?>

<?php get_footer();?>
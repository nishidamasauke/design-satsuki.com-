<?php
/*
Template Name:new top page
*/
?>
<?php get_header(); ?>

<div class="mainvisual">
<?php echo do_shortcode('[metaslider id="171"]'); ?>
</div>
<div class="section siteContent">
	<div class="container">
		<div class="row">

			<?php
			if ( lightning_is_frontpage_onecolumn() ) {
				$main_col = 'col-md-12';
			} else {
				$main_col = 'col-md-12';
			}
			?>

			<div class="<?php echo $main_col; ?> mainSection">

			<?php do_action( 'lightning_home_content_top_widget_area_before' ); ?>

			<?php if ( is_active_sidebar( 'home-content-top-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'home-content-top-widget-area' ); ?>
			<?php endif; ?>

			<?php do_action( 'lightning_home_content_top_widget_area_after' ); ?>

			<?php if ( apply_filters( 'is_lightning_home_content_display', true ) ) : ?>

			<?php if ( have_posts() ) : ?>

				<?php if ( 'page' == get_option( 'show_on_front' ) ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();
?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="entry-body">






						<div class="message-block">
							<div class="row">
								<div class="col-sm-5">
							<h2><img src="<?php echo get_template_directory_uri(); ?>/images/message_h2.png"></h2>
						</div>
						<div class="col-sm-7">
						<div class="row">
					<?php the_content(); ?>
						</div>
					</div>
					</div>
						</div>


<div class="service-block">
	<div class="row">
		<div class="col-sm-5">
	<h2><img src="<?php echo get_template_directory_uri(); ?>/images/service_h2.png"></h2>
</div>
<div class="col-sm-7">
	<p class="h2text"><?php the_field( 'service_text' ); ?></p>
</div>
</div>
<div class="row">
<?php the_field( 'service' ); ?>
</div>
</div>


<div class="works-block">
	<div class="row">
		<div class="col-sm-5">
	<h2><img src="<?php echo get_template_directory_uri(); ?>/images/works_h2.png"></h2>
</div>
<div class="col-sm-7">
	<p class="h2text"><?php the_field( 'works_text' ); ?></p>
</div>
	<div class="row">
	<?php the_field( 'works' ); ?>
	<div class="morebtn">
	<a href="<?php site_url() ?>/works"><img src="<?php echo get_template_directory_uri(); ?>/images/more.png" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/more_hover.png'" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/more.png'"></a>
	</div>
	</div>
</div>
</div>

 <?php //entrybody ?>
						<?php
						wp_link_pages(
							array(
								'before' => '<div class="page-link">' . 'Pages:',
								'after'  => '</div>',
							)
						);
?>
						 </article><!-- [ /#post-<?php the_ID(); ?> ] -->

					<?php endwhile; ?>

				<?php else : ?>

					<div class="postList">

						<?php
						while ( have_posts() ) :
							the_post();
?>

							<?php get_template_part( 'module_loop_post' ); ?>

						<?php endwhile; ?>

						<?php
						the_posts_pagination(
							array(
								'mid_size'           => 1,
								'prev_text'          => '&laquo;',
								'next_text'          => '&raquo;',
								'type'               => 'list',
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'lightning' ) . ' </span>',
							)
						);
							?>

					</div><!-- [ /.postList ] -->

				<?php endif; // if ( 'page' == get_option('show_on_front') ) : ?>

			<?php else : ?>

				<div class="well"><p><?php _e( 'No posts.', 'lightning' ); ?></p></div>

			<?php endif; // have_post() ?>

			<?php endif; // if ( apply_filters( 'is_lightning_home_top_posts_display', true ) ) : ?>

			</div><!-- [ /.mainSection ] -->

			<?php if ( ! lightning_is_frontpage_onecolumn() ) : ?>

			<!--	<div class="col-md-3 col-md-offset-1 subSection sideSection">
					<?php get_sidebar(); ?>
				</div>--><!-- [ /.subSection ] -->

			<?php endif; ?>

		</div><!-- [ /.row ] -->
	</div><!-- [ /.container ] -->
</div><!-- [ /.siteContent ] -->
<?php get_footer(); ?>

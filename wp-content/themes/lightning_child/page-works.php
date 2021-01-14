<?php 
/*
 * Template Name: works Page
 */
get_header(); ?>

<?php
// Dealing with old files.
// Actually, it's ok to only use get_template_part().
/*-------------------------------------------*/
/* Page Header
/*-------------------------------------------*/
$old_file_name[] = 'module_pageTit.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/page-header' );
}
/*-------------------------------------------*/
/* BreadCrumb
/*-------------------------------------------*/
$old_file_name[] = 'module_panList.php';
if ( locate_template( $old_file_name, false, false ) ) {
	locate_template( $old_file_name, true, false );
} else {
	get_template_part( 'template-parts/breadcrumb' );
}
?>

<div class="<?php lightning_the_class_name( 'siteContent' ); ?>">
<?php do_action( 'lightning_siteContent_prepend' ); ?>
<div class="container">
<?php do_action( 'lightning_siteContent_container_prepend' ); ?>
<div class="row">
<div class="<?php lightning_the_class_name( 'mainSection' ); ?>" id="main" role="main">
<?php do_action( 'lightning_mainSection_prepend' ); ?>

<?php
$args = array(
  'post_type' => 'works', /* カスタム投稿名が「gourmet」の場合 */
  'posts_per_page' => 5, /* 表示する数 */
); ?>
 
<?php $my_query = new WP_Query( $args ); ?>
 
<ul>
 
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
 
<!-- ▽ ループ開始 ▽ -->
 
  <li>
    <h3><?php the_title(); ?></h3>
    <p><?php the_time( get_option( 'date_format' ) ); ?></p>
  </li>
 
<!-- △ ループ終了 △ -->
 
<?php endwhile; ?>
 
</ul>
 
<?php wp_reset_postdata(); ?>

<?php do_action( 'lightning_mainSection_append' ); ?>
</div><!-- [ /.mainSection ] -->

<div class="<?php lightning_the_class_name( 'sideSection' ); ?>">
<?php get_sidebar( get_post_type() ); ?>
</div><!-- [ /.subSection ] -->

</div><!-- [ /.row ] -->
</div><!-- [ /.container ] -->
</div><!-- [ /.siteContent ] -->
<?php get_footer(); ?>

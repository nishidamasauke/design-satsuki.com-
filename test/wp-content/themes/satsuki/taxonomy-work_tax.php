<?php get_header(); ?>
<body id="page" class="page">
<!--#wrapper-->
<div id="wrapper">
<?php get_template_part('template-parts/header-nav'); ?>
     <!--#cont-->
     <div id="cont">
          <!--#main-->
          <div id="main">
               <section class="visual">
                    <h2><?php single_term_title(); ?></h2>
               </section>
               <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
               <section class="work_list">
                <ul class="tax">
                  <li><a href="/works/">全ての実績</a></li>
                 <?php
                  $terms = get_terms('work_tax');
                  foreach ( $terms as $term ) {
                  echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                  }
                  ?>
                </ul>
                          <div class="inner">
			<?php query_posts($query_string ."& posts_per_page=42"); ?>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
        <div class="box">
          <a href="<?php the_permalink(); ?>">
            <p class="img"><?php
      $image = get_field('image01');
      if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?></p>
            <p class="title"><?php the_title(); ?></p>
            <p class="client"><?php the_field('client'); ?></p>
          </a>
          </div>
				<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
                          </div>

                          <div class="inner">
			<?php if (function_exists('responsive_pagination')) {
			responsive_pagination($additional_loop->max_num_pages);
			} ?>
			<?php wp_reset_query(); ?>
                          </div>

               </section>
          </div>
          <!--/#main-->
     </div>
     <!--#cont-->
     <?php get_footer(); ?>

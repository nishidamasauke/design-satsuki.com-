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
                    <h2><?php the_title(); ?></h2>
               </section>
               <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                    </div>
               <section class="work_list">
                        <?php
                          $args = array(
                            'post_type' => 'work_post',
                            'posts_per_page' => 6, /* 表示する数 */
                          'paged' => $paged
                          ); ?>
                          <?php $my_query = new WP_Query( $args ); ?>
                          <div class="inner">
                                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                <!-- ▽ ループ開始 ▽ -->
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
                                <!-- △ ループ終了 △ -->
                                <?php endwhile; ?>
                          </div>
                          <?php wp_reset_postdata(); ?>
               </section>
          </div>
          <!--/#main-->
     </div>
     <!--#cont-->
     <?php get_footer(); ?>
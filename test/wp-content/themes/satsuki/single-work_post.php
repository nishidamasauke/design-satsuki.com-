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
               <section>
                    <div class="inner works">
                      <ul class="img">
                        <li><?php 
                              $image = get_field('image01');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?></li>
                        <li><?php 
                              $image = get_field('image02');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?></li>
                        <li><?php 
                              $image = get_field('image03');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?></li>
                        <li><?php 
                              $image = get_field('image04');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?></li>
                      </ul>
                      <h3><?php the_title(); ?></h3>
                      <p class="client"><?php the_field('client'); ?></p>
                      <p class="url"><a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a></p>
                      <?php 
                        $terms = get_field('category');
                        if( $terms ): ?>
                            <ul class="tax">
                            <?php foreach( $terms as $term ): ?>
                                <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <p class="cont"><?php the_field('cont'); ?></p>
                        <p class="credit"><?php the_field('credit'); ?></p>
                    </div>
               </section>
          </div>
          <!--/#main-->
     </div>
     <!--#cont-->
     <?php get_footer(); ?>
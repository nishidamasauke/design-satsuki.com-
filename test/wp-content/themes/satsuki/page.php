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
                    <div class="inner">
                         <?php
if(have_posts()): while(have_posts()): the_post();?>

<?php the_content(); ?>

<?php endwhile; endif; ?>
                    </div>
               </section>
          </div>
          <!--/#main-->
     </div>
     <!--#cont-->
     <?php get_footer(); ?>
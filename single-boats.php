<?php
/*
Template Name: Template for Single boat
Template post type: post, page
*/
?>
<?php get_header(); ?>


<div class="sboat__page">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="sboat__h1"><span><?php the_title() ?></span></div>
    <div class="contain">

      <div class="sboat__slider">


        <?php 
        print_r(get_field('sboat__slide_1'))
        ?>

        <?php if (get_field('sboat__slide_1') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_1') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_2') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_2') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_3') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_3') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_4') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_4') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_5') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_5') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_6') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_6') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_7') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_7') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_8') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_8') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_9') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_9') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_10') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_10') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_11') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_11') ?>" alt="">
          </div>        
        <?php endif; ?>
        <?php if (get_field('sboat__slide_12') != ''): ?>
          <div class="sboat__slide">
            <img src="<?php echo get_field('sboat__slide_12') ?>" alt="">
          </div>        
        <?php endif; ?>
      </div><!--sboat__slider-->

      <a href="<?php echo get_field('sboat_btn'); ?>" class="sboat-change__btn">Выбрать комплектацию</a>

      <div class="bvideo bvideo-3">
        <div class="contain">
          <a href="<?php echo get_field('bvideo__link_3'); ?>" class="bvideo__w">        
            <img src="<?php echo get_field('bvideo__img_3'); ?>" class="bvideo__img" /></a>
          </div>
        </div>
      </div><!--contain-->



      <div class="charact__w rcpadding">
        <div class="charact__col-1">
          <div class="charact__h lcpadding">Грузоподъёмность</div>
          <div class="charact__contnet lcpadding">            
            <ul class="charact__ul">
              <li class="charact__li">Грузоподъёмность аэролодки на глиссере составляет <strong class="charact__li-str">1500 кг</strong></li>
              <li class="charact__li">
                Обеспечивается двигателем <strong class="charact__li-str">Honda J35, </strong> мощностью <strong class="charact__li-str">280 л.с.</strong> и объём <strong и="" объём="" class="charact__li-str">3,5 л., </strong><br />
                либо <strong и="" объёмclass="charact__li-str">Toyota 3UZ,</strong> мощность<strong class="charact__li-str">320 л.с.</strong> <br />
                и объём<strong class="charact__li-str">2 л. </strong> <br />
                (двигатель зависит от комплектации аэролодки)
              </li>
            </ul>
          </div>

        </div>
        <div class="charact__col-2">
          <img src="<? bloginfo('template_url') ?>/img/charact-1.jpg" class="charact__img" />
        </div>
      </div>




    </div><!--sboat__page-->

  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
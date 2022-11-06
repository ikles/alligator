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
      <?php the_content(); ?>
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

      <?php if (get_field('sboat_btn') != ''): ?>
        <div class="sboat-change__btn-w">
          <a href="<?php echo get_field('sboat_btn'); ?>" class="sboat-change__btn">Выбрать комплектацию</a>
        </div>
      <?php endif; ?>

      <?php if (get_field('sboat_vid_t') != ''): ?>
        <div class="sboat__h heading">
          <span><?php echo get_field('sboat_vid_t'); ?></span>
        </div>
      <?php endif; ?>

      <div class="bvideo bvideo-3">
        <a href="<?php echo get_field('bvideo__link_3'); ?>" class="bvideo__w">        
          <img src="<?php echo get_field('bvideo__img_3'); ?>" class="bvideo__img" /></a>
        </div>
      </div>
      


      <div class="charact__w-wrap">
        <div class="charact__w rcpadding">
          <div class="charact__col-1">
            <div class="charact__h lcpadding"><?php echo get_field('charact__h_1'); ?></div>
            <div class="charact__contnet lcpadding">            
              <?php echo get_field('charact__contnet_1'); ?>
            </div>
          </div>
          <div class="charact__col-2">
            <?php if (get_field('charact__video_link_1') != ''): ?>  
              <a href="<?php echo get_field('charact__video_link_1'); ?>" class="charact__video-link video__has-btn _s80">
                <img src="<?php echo get_field('charact__img_1'); ?>" class="charact__img" />
              </a>
            <?php endif; ?>

            <?php if (get_field('charact__video_link_1') == ''): ?>  
              <div class="charact__video-link">
                <img src="<?php echo get_field('charact__img_1'); ?>" class="charact__img" />
              </div>
            <?php endif; ?>
          </div>
        </div>


        <div class="charact__w rcpadding">
          <div class="charact__col-1">
            <div class="charact__h lcpadding"><?php echo get_field('charact__h_2'); ?></div>
            <div class="charact__contnet lcpadding">            
              <?php echo get_field('charact__contnet_2'); ?>
            </div>
          </div>
          <div class="charact__col-2">
            <?php if (get_field('charact__video_link_2') != ''): ?>  
              <a href="<?php echo get_field('charact__video_link_2'); ?>" class="charact__video-link video__has-btn _s80">
                <img src="<?php echo get_field('charact__img_2'); ?>" class="charact__img" />
              </a>
            <?php endif; ?>
            <?php if (get_field('charact__video_link_2') == ''): ?>  
              <a href="<?php echo get_field('charact__img_2'); ?>" class="charact__video-link">
                <img src="<?php echo get_field('charact__img_2'); ?>" class="charact__img" />
              </a>
            <?php endif; ?>
          </div>
        </div>


        <?php if (get_field('charact__h_3') != ''): ?>
          <div class="charact__w rcpadding">
            <div class="charact__col-1">
              <div class="charact__h lcpadding"><?php echo get_field('charact__h_3'); ?></div>
              <div class="charact__contnet lcpadding">            
                <?php echo get_field('charact__contnet_3'); ?>
              </div>
            </div>
            <div class="charact__col-2">
              <?php if (get_field('charact__video_link_3') != ''): ?>  
                <a href="<?php echo get_field('charact__video_link_3'); ?>" class="charact__video-link video__has-btn _s80">
                  <img src="<?php echo get_field('charact__img_3'); ?>" class="charact__img" />
                </a>
              <?php endif; ?>
              <?php if (get_field('charact__video_link_3') == ''): ?>  
                <a href="<?php echo get_field('charact__img_3'); ?>" class="charact__video-link">
                  <img src="<?php echo get_field('charact__img_3'); ?>" class="charact__img" />
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_field('charact__h_4') != ''): ?>
          <div class="charact__w rcpadding">
            <div class="charact__col-1">
              <div class="charact__h lcpadding"><?php echo get_field('charact__h_4'); ?></div>
              <div class="charact__contnet lcpadding">            
                <?php echo get_field('charact__contnet_4'); ?>
              </div>
            </div>
            <div class="charact__col-2">
              <?php if (get_field('charact__video_link_4') != ''): ?>  
                <a href="<?php echo get_field('charact__video_link_4'); ?>" class="charact__video-link video__has-btn _s80">
                  <img src="<?php echo get_field('charact__img_4'); ?>" class="charact__img" />
                </a>
              <?php endif; ?>
              <?php if (get_field('charact__video_link_4') == ''): ?>  
                <a href="<?php echo get_field('charact__img_4'); ?>" class="charact__video-link">
                  <img src="<?php echo get_field('charact__img_4'); ?>" class="charact__img" />
                </a>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>    

        <?php if (get_field('charact__h_5') != ''): ?>
          <div class="charact__w rcpadding">
            <div class="charact__col-1">
              <div class="charact__h lcpadding"><?php echo get_field('charact__h_5'); ?></div>
              <div class="charact__contnet lcpadding">            
                <?php echo get_field('charact__contnet_5'); ?>
              </div>
            </div>
            <div class="charact__col-2">
              <?php if (get_field('charact__video_link_5') != ''): ?>  
                <a href="<?php echo get_field('charact__video_link_5'); ?>" class="charact__video-link video__has-btn _s80">
                  <img src="<?php echo get_field('charact__img_5'); ?>" class="charact__img" />
                </a>
              <?php endif; ?>
              <?php if (get_field('charact__video_link_5') == ''): ?>  
               <a href="<?php echo get_field('charact__img_5'); ?>" class="charact__video-link">
                <img src="<?php echo get_field('charact__img_5'); ?>" class="charact__img" />
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <div class="consult__btn-w">
      <a href="<?php echo get_field('consult__btn_2'); ?>" class="consult-2__btn">Узнать о лодке подробнее</a>
    </div>

    <div class="view">
      <div class="contain">
        <div class="view__cont-w">
          <div class="view__h heading">
            <span><?php echo get_field('view__h_1'); ?></span>
          </div>
          <div class="view__cont">
            <?php if (get_field('view__photo_1') != ''): ?>
              <a href="<?php echo get_field('view__photo_1'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_1'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_2') != ''): ?>
              <a href="<?php echo get_field('view__photo_2'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_2'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_3') != ''): ?>
              <a href="<?php echo get_field('view__photo_3'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_3'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_4') != ''): ?>
              <a href="<?php echo get_field('view__photo_4'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_4'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_5') != ''): ?>
              <a href="<?php echo get_field('view__photo_5'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_5'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_6') != ''): ?>
              <a href="<?php echo get_field('view__photo_6'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_6'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_7') != ''): ?>
              <a href="<?php echo get_field('view__photo_7'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_7'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_8') != ''): ?>
              <a href="<?php echo get_field('view__photo_8'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_8'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_9') != ''): ?>
              <a href="<?php echo get_field('view__photo_9'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_9'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_10') != ''): ?>
              <a href="<?php echo get_field('view__photo_10'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_10'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_11') != ''): ?>
              <a href="<?php echo get_field('view__photo_11'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_11'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_12') != ''): ?>
              <a href="<?php echo get_field('view__photo_12'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_12'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_13') != ''): ?>
              <a href="<?php echo get_field('view__photo_13'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_13'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_14') != ''): ?>
              <a href="<?php echo get_field('view__photo_14'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_14'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_15') != ''): ?>
              <a href="<?php echo get_field('view__photo_15'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_15'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_16') != ''): ?>
              <a href="<?php echo get_field('view__photo_16'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_16'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_17') != ''): ?>
              <a href="<?php echo get_field('view__photo_17'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_17'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_18') != ''): ?>
              <a href="<?php echo get_field('view__photo_18'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_18'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_19') != ''): ?>
              <a href="<?php echo get_field('view__photo_19'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_19'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_20') != ''): ?>
              <a href="<?php echo get_field('view__photo_20'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_20'); ?>" />
              </a>
            <?php endif; ?>
          </div>
        </div>


        <?php if (get_field('sel_btn_2') != ''): ?>
          <div class="sel__btn-w">
            <a href="<?php echo get_field('sel_btn_2'); ?>" class="consult-2__btn"><?php echo get_field('sel_btn_txt_1'); ?></a>
          </div>
        <?php endif; ?>

        <div class="view__cont-w">
          <div class="view__h-2 heading">
            <span><?php echo get_field('view__h_2'); ?></span>              
          </div>
          <div class="view__cont">          
            <?php if (get_field('view__photo_21') != ''): ?>
              <a href="<?php echo get_field('view__photo_21'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_21'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_22') != ''): ?>
              <a href="<?php echo get_field('view__photo_22'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_22'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_23') != ''): ?>
              <a href="<?php echo get_field('view__photo_23'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_23'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_24') != ''): ?>
              <a href="<?php echo get_field('view__photo_24'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_24'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_25') != ''): ?>
              <a href="<?php echo get_field('view__photo_25'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_25'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_26') != ''): ?>
              <a href="<?php echo get_field('view__photo_26'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_26'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_27') != ''): ?>
              <a href="<?php echo get_field('view__photo_27'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_27'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_28') != ''): ?>
              <a href="<?php echo get_field('view__photo_28'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_28'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_29') != ''): ?>
              <a href="<?php echo get_field('view__photo_29'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_29'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_30') != ''): ?>
              <a href="<?php echo get_field('view__photo_30'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_30'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_31') != ''): ?>
              <a href="<?php echo get_field('view__photo_31'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_31'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_32') != ''): ?>
              <a href="<?php echo get_field('view__photo_32'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_32'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_33') != ''): ?>
              <a href="<?php echo get_field('view__photo_33'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_33'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_34') != ''): ?>
              <a href="<?php echo get_field('view__photo_34'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_34'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_35') != ''): ?>
              <a href="<?php echo get_field('view__photo_35'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_35'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_36') != ''): ?>
              <a href="<?php echo get_field('view__photo_36'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_36'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_37') != ''): ?>
              <a href="<?php echo get_field('view__photo_37'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_37'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_38') != ''): ?>
              <a href="<?php echo get_field('view__photo_38'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_38'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_39') != ''): ?>
              <a href="<?php echo get_field('view__photo_39'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_39'); ?>" />
              </a>
            <?php endif; ?>
            <?php if (get_field('view__photo_40') != ''): ?>
              <a href="<?php echo get_field('view__photo_40'); ?>" class="view__photo" data-fancybox="gallery-2">
                <img src="<?php echo get_field('view__photo_40'); ?>" />
              </a>
            <?php endif; ?>
          </div>
        </div>


       <?php if (get_field('sel_btn_3') != ''): ?>
          <div class="sel__btn-w">
            <a href="<?php echo get_field('sel_btn_3'); ?>" class="consult-2__btn"><?php echo get_field('sel_btn_txt_2'); ?></a>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div class="review">
      <div class="contain">
        <div class="review__h heading">
          <span><?php echo get_field('review__h'); ?></span>
        </div>
        <div class="review__cont">

          <?php if (get_field('review__item_link_1') != ''): ?>
            <a href="<?php echo get_field('review__item_link_1'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_1'); ?>" />
            </a>
          <?php endif; ?>

          <?php if (get_field('review__item_link_2') != ''): ?>
            <a href="<?php echo get_field('review__item_link_2'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_2'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_3') != ''): ?>
            <a href="<?php echo get_field('review__item_link_3'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_3'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_4') != ''): ?>
            <a href="<?php echo get_field('review__item_link_4'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_4'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_5') != ''): ?>
            <a href="<?php echo get_field('review__item_link_5'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_5'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_6') != ''): ?>
            <a href="<?php echo get_field('review__item_link_6'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_6'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_7') != ''): ?>
            <a href="<?php echo get_field('review__item_link_7'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_7'); ?>" />
            </a>
          <?php endif; ?>
          <?php if (get_field('review__item_link_8') != ''): ?>
            <a href="<?php echo get_field('review__item_link_8'); ?>" class="review__item video__has-btn _s80">
              <img src="<?php echo get_field('review__item_img_8'); ?>" />
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>




    <div class="free">
      <div class="contain">
        <div class="free__h"><?php echo get_field('free__h'); ?></div>
        <div class="free__txt"><?php echo get_field('free__txt'); ?></div>
        <div class="free__form">
          <?php echo do_shortcode('[contact-form-7 id="158" title="join-form"]'); ?>
        </div>
      </div>
    </div>


    <div class="discount">
      <div class="contain">
        <div class="discount__h heading">
          <span><?php echo get_field('discount__h'); ?></span>
        </div>
        <div class="discount__coupon">
          <?php echo get_field('discount__coupon'); ?>

        </div>
        <div class="discount__txt-2">
          <?php echo get_field('discount__txt-2'); ?>
        </div>
        <div class="consult__btn-w">
          <a href="<?php echo get_field('discount__btn'); ?>" class="discount__btn">Получить скидку</a>
        </div>
      </div>
      <img src="<?php echo get_field('discount__airboat_1'); ?>" class="discount__airboat" />
      <img src="<?php echo get_field('discount__airboat_2'); ?>" class="discount__airboat-2" />      
    </div>


    <div class="equip">
      <div class="contain">
        <div class="equip__row">
          <div class="equip__l">
            <div class="equip__choice">
              <a href="#" class="equip__choice-link-act"><?php echo get_field('equip__choice_1'); ?></a>
              <a href="#" class="equip__choice-link"><?php echo get_field('equip__choice_2'); ?></a>
            </div>
            <div class="equip__table-w">
              <?php echo get_field('equip__table'); ?>
            </div>
          </div>
          <div class="equip__r">
            <div class="equip__r-titl">
              <?php echo get_field('equip__r_tit'); ?>
            </div>
            <div class="equip__r-row">
              <div class="equip__r-item">
                <div class="equip__r-img">
                  <img src="<? bloginfo('template_url') ?>/img/equip-1.svg" /></div>
                  <div class="equip__r-txt-1">Грузоподъёмность</div>
                  <div class="equip__r-txt-2"><?php echo get_field('equip__r_txt_1'); ?></div>
                </div>
                <div class="equip__r-item">
                  <div class="equip__r-img"><img src="<? bloginfo('template_url') ?>/img/equip-2.svg" /></div>
                  <div class="equip__r-txt-1">Вместимость салона</div>
                  <div class="equip__r-txt-2"><?php echo get_field('equip__r_txt_2'); ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div><!--sboat__page-->

  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
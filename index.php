<?php get_header(); ?>

<div class="banner" style="background-image: url('<?php echo get_field('banner_bg'); ?>')">
  <div class="contain">
    <div class="banner__row">
      <div class="banner__l">
        <div class="banner__title"><?php echo get_field('banner__title'); ?></div>
        <div class="banner__text"><?php echo get_field('banner__text'); ?></div>
        <a href="<?php echo get_field('banner__btn_link'); ?>" class="banner__btn">Скачать</a>
      </div>
      <div class="banner__r">
        <a href="<?php echo get_field('banner__video'); ?>" class="banner__video">
          <img src="<?php echo get_field('banner-vid'); ?>" />
        </a>




      </div>
    </div>
  </div>
</div>
<div class="mproduct">
  <div class="contain">
    <div class="mproduct__items">
      <?php
if ( have_posts() ) : // если имеются записи в блоге.
  query_posts('cat=4' . '&order=ASC');   // указываем ID рубрик, которые необходимо вывести.
  
  while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
  ?>
  <div class="mproduct__item <?php if (get_field('reverse')[0] == 'yes') { ?> mproduct__item--revesre<?php } ?>">
    <div class="mproduct__row">
      <div class="mproduct__l">
        <?php if (get_field('reverse')[0] == 'yes') { ?>
          <div class="mproduct__content-reverse">
          <?php } ?>
          <div class="mproduct__content">
            <div class="mproduct__tit"><?php the_title(); ?></div>
            <div class="mproduct__subtit"><?php the_content();?></div>
            <a href="<?php echo get_field('link'); ?>" class="mproduct__btn">Смотреть модели</a>
          </div>
          <?php if (get_field('reverse')[0] == 'yes') { ?>        
          </div>
        <?php } ?>
      </div>
      <div class="mproduct__r">
        <img src="<?php the_post_thumbnail_url('mproduct__img');?>" alt="" class="mproduct__img">        
      </div>
    </div>
    <div class="mproduct__chars">
      <div class="mproduct__chars-col">
        <div class="mproduct__chars-title">длина</div>
        <div class="mproduct__chars-value"><?php echo get_field('length'); ?></div>
      </div>
      <div class="mproduct__chars-col">
        <div class="mproduct__chars-title">мощность</div>
        <div class="mproduct__chars-value"><?php echo get_field('power'); ?></div>
      </div>
      <div class="mproduct__chars-col">
        <div class="mproduct__chars-title">грузоподъёмность</div>
        <div class="mproduct__chars-value"><?php echo get_field('weight'); ?></div>
      </div>
      <div class="mproduct__chars-col">
        <div class="mproduct__chars-title">вместимость</div>
        <div class="mproduct__chars-value"><?php echo get_field('peolpes'); ?></div>
      </div>
    </div>
  </div>

  <?php
  endwhile;  // завершаем цикл.
endif;
/* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
wp_reset_query();                
?>
</div>
</div>
</div>

<?php
$post = get_post(594);
?>

<div class="download">
  <div class="contain">
    <div class="download__title">Скачать каталог аэролодок</div>
    <a href="#" class="download__btn">Скачать каталог</a>
  </div>
</div>
<div class="peculiarities">
  <div class="contain">
    <div class="peculiarities__heading heading">
      <span><?php echo get_field('peculiarities__heading'); ?></span>
    </div>
    <div class="tabs scard-main__tabs">
      <ul class="tabs__content-list">
        <li class="tabs__content-list-item active">
          <div class="tab__img-w">
            <img src="<?php echo get_field('tab__img'); ?>" />
          </div>
          <div class="tab__content-text"><?php echo get_field('tab__content-text'); ?></div>
        </li>
        <li class="tabs__content-list-item">
          <div class="tab__img-w">
            <img src="<?php echo get_field('tab__img_2'); ?>" />
          </div>
          <div class="tab__content-text"><?php echo get_field('tab__content-text_2'); ?></div>
        </li>
        <li class="tabs__content-list-item">
          <div class="tab__img-w">
            <img src="<?php echo get_field('tab__img_3'); ?>" />
          </div>
          <div class="tab__content-text"><?php echo get_field('tab__content-text_3'); ?></div>
        </li>
        <li class="tabs__content-list-item">
          <div class="tab__img-w">
            <img src="<?php echo get_field('tab__img_4'); ?>" />
          </div>
          <div class="tab__content-text"><?php echo get_field('tab__content-text_4'); ?></div>
        </li>
        <li class="tabs__content-list-item">
          <div class="tab__img-w">
            <img src="<?php echo get_field('tab__img_5'); ?>" />
          </div>
          <div class="tab__content-text"><?php echo get_field('tab__content-text_5'); ?></div>
        </li>
      </ul>
      <ul class="tabs__list">
        <li class="tabs__list-item active"><?php echo get_field('tabs__list-item_1'); ?></li>        
        <li class="tabs__list-item"><?php echo get_field('tabs__list-item_2'); ?></li>        
        <li class="tabs__list-item"><?php echo get_field('tabs__list-item_3'); ?></li>        
        <li class="tabs__list-item"><?php echo get_field('tabs__list-item_4'); ?></li>        
        <li class="tabs__list-item"><?php echo get_field('tabs__list-item_5'); ?></li>        
      </ul>
    </div>
  </div>
</div>
<div class="consult">
  <div class="contain">
    <div class="consult__row">
      <div class="consult__title"><?php echo get_field('consult__title'); ?></div>
      <a href="<?php echo get_field('
      consult__btn'); ?>" class="consult__btn">Консультация</a>
    </div>
  </div>
</div>
<div class="engines">
  <div class="contain">
    <div class="engines__heading heading">
      <span><?php echo get_field('engines__heading'); ?></span>
    </div>
    <div class="engines__row">
      <div class="engines__l">
        <img src="<?php echo get_field('engines__img'); ?>" class="engines__img" /></div>
        <div class="engines__r">
          <?php echo get_field('engines__r'); ?>        
        </div>
      </div>
    </div>
  </div>
  <div class="bvideo">
    <div class="contain">
      <a href="<?php echo get_field('bvideo__link_1'); ?>" class="bvideo__w">
        <img src="<?php echo get_field('bvideo__img_1'); ?>" class="bvideo__img" />
      </a>
    </div>
  </div>

  <div class="attent">
    <div class="contain">
      <div class="attent__h heading">
        <span>Внимание к деталям</span>
      </div>
      <div class="attent__cont">
        <div class="attent__l">
          <div class="attent__col-w">
            <div class="attent__col">
              <div class="attent__img-w">
                <img src="<?php echo get_field('attent__img_1'); ?>" class="attent__img" />
                <div class="attent__txt"><?php echo get_field('attent__txt_1'); ?></div>
              </div>
              <div class="attent__img-w">
                <img src="<?php echo get_field('attent__img_2'); ?>" class="attent__img" />
                <div class="attent__txt"><?php echo get_field('attent__txt_2'); ?></div>
              </div>
            </div>
            <div class="attent__col">
              <div class="attent__img-w">
                <img src="<?php echo get_field('attent__img_3'); ?>" class="attent__img" />
                <div class="attent__txt"><?php echo get_field('attent__txt_3'); ?></div>
              </div>
              <div class="attent__img-w">
                <img src="<?php echo get_field('attent__img_4'); ?>" class="attent__img" />
                <div class="attent__txt"><?php echo get_field('attent__txt_4'); ?></div>
              </div>
            </div>
          </div>
          <div class="attent__col-dw-row">
           <div class="attent__img-w">
            <img src="<?php echo get_field('attent__img_5'); ?>" class="attent__img" />
            <div class="attent__txt"><?php echo get_field('attent__txt_5'); ?></div>
          </div>
          <div class="attent__img-w">
            <img src="<?php echo get_field('attent__img_6'); ?>" class="attent__img" />
            <div class="attent__txt"><?php echo get_field('attent__txt_6'); ?></div>
          </div>
        </div>
      </div>
      <div class="attent__r">
       <div class="attent__img-w">
        <img src="<?php echo get_field('attent__img_7'); ?>" class="attent__img" />
        <div class="attent__txt"><?php echo get_field('attent__txt_7'); ?></div>
      </div>
      <div class="attent__img-w">
        <img src="<?php echo get_field('attent__img_8'); ?>" class="attent__img" />
        <div class="attent__txt"><?php echo get_field('attent__txt_8'); ?></div>
      </div>
      <div class="attent__img-w">
        <img src="<?php echo get_field('attent__img_9'); ?>" class="attent__img" />
        <div class="attent__txt"><?php echo get_field('attent__txt_9'); ?></div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="testdrive">
  <div class="contain">
    <div class="testdrive__title">
      <?php echo get_field('testdrive__title'); ?>
    </div>
    <a href="<?php echo get_field('testdrive__btn_link'); ?>" class="testdrive__btn">Записаться</a>
  </div>
</div>

<div class="ctable">
  <div class="contain">
    <div class="ctable__h heading">
      <span><?php echo get_field('ctable__h'); ?></span>
    </div>
    <?php echo get_field('ctable__table'); ?>
  </div>
</div>
<div class="production">
  <div class="contain">
    <div class="production__h heading">
      <span><?php echo get_field('production__h'); ?></span>
    </div>
    <div class="production__img-w">
      <img src="<?php echo get_field('production__img'); ?>" class="production__img" />
    </div>
    <div class="production__items">
      <div class="production__item">
        <div class="production__icon-w">
          <img src="<? bloginfo('template_url') ?>/img/production-icon-1.png" />
        </div>
        <div class="production__content">
          <div class="production__advant"><?php echo get_field('production__advant_1'); ?></div>
          <div class="production__info"><?php echo get_field('production__info_1'); ?></div>
        </div>
      </div>
      <div class="production__item">
        <div class="production__icon-w">
          <img src="<? bloginfo('template_url') ?>/img/production-icon-2.png" />
        </div>
        <div class="production__content">
          <div class="production__advant"><?php echo get_field('production__advant_2'); ?></div>
          <div class="production__info"><?php echo get_field('production__info_2'); ?></div>
        </div>
      </div>
      <div class="production__item">
        <div class="production__icon-w">
          <img src="<? bloginfo('template_url') ?>/img/production-icon-3.png" />
        </div>
        <div class="production__content">
          <div class="production__advant"><?php echo get_field('production__advant_3'); ?></div>
          <div class="production__info"><?php echo get_field('production__info_3'); ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bvideo bvideo-2">
  <div class="contain">
    <a href="<?php echo get_field('bvideo__link_2'); ?>" class="bvideo__w">        
      <img src="<?php echo get_field('bvideo__img_2'); ?>" class="bvideo__img" /></a>
    </div>
  </div>
  <div class="consult">
    <div class="contain">
      <div class="consult__row">
        <div class="consult__title"><?php echo get_field('consult__title'); ?></div>
        <a href="<?php echo get_field('
        consult__btn'); ?>" class="consult__btn">Консультация</a>
      </div>
    </div>
  </div>

  <div class="our-boats">
    <div class="contain">
      <div class="our-boats__h heading">
        <span><?php echo get_field('our-boats__h'); ?></span>
      </div>
      <div class="our-boats__row">
        <div class="our-boats__col">
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_1'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_1'); ?>" class="our-boats__img" />
          </a>
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_2'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_2'); ?>" class="our-boats__img" />
          </a>
        </div>
        <div class="our-boats__col">
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_3'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_3'); ?>" class="our-boats__img" />
          </a>
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_4'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_4'); ?>" class="our-boats__img" />
          </a>
        </div>
        <div class="our-boats__col">
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_5'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_5'); ?>" class="our-boats__img" />
          </a>
          <a data-fancybox="gallery-1" href="<?php echo get_field('our_boats_6'); ?>" class="our-boats__img-w">
            <img src="<?php echo get_field('our_boats_6'); ?>" class="our-boats__img" />
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="reviews">
    <div class="contain">
      <div class="reviews__h heading">
        <span><?php echo get_field('reviews__h'); ?></span>
      </div>
      <div class="reviews__slider">
        <a href="<?php echo get_field('rev_link_1'); ?>" class="reviews__slide">
          <img src="<?php echo get_field('rev_1'); ?>" />
        </a>
        <a href="<?php echo get_field('rev_link_2'); ?>" class="reviews__slide">
          <img src="<?php echo get_field('rev_2'); ?>" />
        </a>
        <a href="<?php echo get_field('rev_link_3'); ?>" class="reviews__slide">
          <img src="<?php echo get_field('rev_3'); ?>" />
        </a>
        <a href="<?php echo get_field('rev_link_4'); ?>" class="reviews__slide">
          <img src="<?php echo get_field('rev_4'); ?>" />
        </a>

        <?php if (get_field('rev_link_5') != ''): ?>
          <a href="<?php echo get_field('rev_link_5'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_5'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (get_field('rev_link_6') != ''): ?>
          <a href="<?php echo get_field('rev_link_6'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_6'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (get_field('rev_link_7') != ''): ?>
          <a href="<?php echo get_field('rev_link_7'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_7'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (get_field('rev_link_8') != ''): ?>
          <a href="<?php echo get_field('rev_link_8'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_8'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (get_field('rev_link_9') != ''): ?>
          <a href="<?php echo get_field('rev_link_9'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_9'); ?>" />
          </a>
        <?php endif; ?>

        <?php if (get_field('rev_link_10') != ''): ?>
          <a href="<?php echo get_field('rev_link_10'); ?>" class="reviews__slide">
            <img src="<?php echo get_field('rev_10'); ?>" />
          </a>
        <?php endif; ?>

      </div>
    </div>
  </div>

  <div class="family">
    <div class="contain">
      <div class="family__h heading">
        <span><?php echo get_field('family__h'); ?></span>
      </div>
      <div class="family__img-w">
        <img src="<?php echo get_field('family__img'); ?>" class="family__img" />
      </div>
      <div class="family__row">
        <div class="family__l">
          <div class="family__bloqu">
            <?php echo get_field('family__bloqu'); ?>
            
            <div class="family__name"><?php echo get_field('family__name'); ?></div>
          </div>
        </div>
        <div class="family__r">
          <div class="family__person-1">
            <div class="person__left">
              <div class="person__name"><?php echo get_field('person__name_1'); ?></div>
              <div class="person__func"><?php echo get_field('person__func_1'); ?></div>
            </div>
            <div class="person__img">
              <img src="<?php echo get_field('person__img_1'); ?>" /></div>
          </div>
          <div class="family__person-2">
             <div class="person__img">
              <img src="<?php echo get_field('person__img_2'); ?>" /></div>
            <div class="person__right">
                 <div class="person__name"><?php echo get_field('person__name_2'); ?></div>
              <div class="person__func"><?php echo get_field('person__func_2'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="trust">
    <div class="contain">
      <div class="trust__h heading">
        <span><?php echo get_field('trust__h'); ?></span>
      </div>
      <div class="trust__row">
        <div class="trust__logo"><img src="<?php echo get_field('trust__logo_1'); ?>" alt=""></div>
        <div class="trust__logo"><img src="<?php echo get_field('trust__logo_2'); ?>" alt=""></div>
        <div class="trust__logo"><img src="<?php echo get_field('trust__logo_3'); ?>" alt=""></div>
        <div class="trust__logo"><img src="<?php echo get_field('trust__logo_4'); ?>" alt=""></div>
        <div class="trust__logo"><img src="<?php echo get_field('trust__logo_5'); ?>" alt=""></div>        
      </div>
    </div>
  </div>
  <div class="download-2">
    <div class="contain">
      <div class="download__content">
        <div class="download__title"><?php echo get_field('download__title'); ?></div>
        <a href="<?php echo get_field('download__btn_2'); ?>" class="download__btn">Скачать каталог</a>
        <img class="catalog__min-img" src="<? bloginfo('template_url') ?>/img/catalog-min.png" alt="">
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
<?php get_header(); ?>

<div class="bg-offer">
  <section class="offer page-top">
    <div class="container">
      <div class="left">
        <h1>
          <?php the_field('offer_title', 'options'); ?>
        </h1>
        <p>
          <?php the_field('offer_subtitle', 'options'); ?>
        </p>
        <div class="button call-consult">
          Бесплатная консультация
        </div>
      </div>
      <div class="right">
        <?php
          $image = get_field('fotka', 'options');
          if( !empty( $image ) ) : 
        ?>
              <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </section>

  
</div>
<div class="bg-about">
  <section class="offer-features container">
    <?php if (have_rows('features', 'options')) : while (have_rows('features', 'options')) : the_row(); ?>
    <div class="item">
      <div class="icon">
        <img width="120" height="120" src="<?php the_sub_field('icon') ?>" alt="Icon">
      </div>
      <b><?php the_sub_field('title') ?></b>
      <p><?php the_sub_field('text') ?></p>
    </div>
    <?php endwhile; endif; ?>
  </section>
  <div class="bg-chart">
    <section class="about">
      <div class="container">
        <div class="about-wrap">
          <div class="top">
            <h2 class="title">
              <?php the_field('about_title', 'options'); ?>
            </h2>
            <p>
              <?php the_field('about_left', 'options'); ?>
            </p>
            <p>
              <?php the_field('about_right', 'options'); ?>
            </p>
          </div>
          <div class="bot">
            <?php if (have_rows('about_cards', 'options')) : while (have_rows('about_cards', 'options')) : the_row(); ?>
            <div class="item">
              <p><?php the_sub_field('text'); ?></p>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
    <section class="chart">
      <div class="container">
        <div class="left">
          <h2><?php the_field('gr_title', 'options'); ?></h2>
          <b><?php the_field('gr_num', 'options'); ?></b>
          <p><?php the_field('gr_small', 'options'); ?></p>
        </div>
        <div class="right">
          <?php
            $gr_img = get_field('gr_img', 'options');
            if( !empty( $gr_img ) ) : 
          ?>
                <img src="<?php echo esc_url($gr_img['url']); ?>" title="<?php echo esc_attr($gr_img['title']); ?>" alt="<?php echo esc_attr($gr_img['alt']); ?>" />
          <?php endif; ?>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="how-bg">
  <section class="how">
    <div class="container">
      <h2 class="title"><?php the_field('how_title', 'options') ?></h2>
      <div class="swiper">
        <div class="how-wrap swiper-wrapper">
          <?php if (have_rows('how_cards', 'options')) : while (have_rows('how_cards', 'options')) : the_row(); ?>
          <div class="item swiper-slide">
            <div class="icon">
              <img src="<?php the_sub_field('icon') ?>" alt="icon">
            </div>
            <b><?php the_sub_field('title') ?></b>
            <p><?php the_sub_field('text') ?></p>
          </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="inst">
    <div class="container">
      <div class="inst-title">
        <img src="<?php the_field('instr_img', 'options') ?>" alt="icon">
        <h2><?php the_field('instr_title', 'options') ?></h2>
      </div>
      <div class="inst-wrap">
        <?php if (have_rows('instr_cards', 'options')) : while (have_rows('instr_cards', 'options')) : the_row(); ?>
        <div class="item">
          <b><?php the_sub_field('title') ?></b>
          <p><?php the_sub_field('text') ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <div class="feed-bg">
    <div class="form">
      <div class="container">
        <div class="form-wrap">
          <div class="left">
            <b>Узнайте точную стоимость продвижения</b>
            <p>
              Перезвоню в течении рабочего дня и обсудим стратегию по продвижению вашего проекта
            </p>
          </div>
          <div class="right">
            <?php echo do_shortcode('[contact-form-7 id="f39d860" title="Узнайте точную стоимость продвижения"]'); ?>
          </div>
        </div>
      </div>
    </div>
    <section class="feed">
      <div class="container">
        <h2 class="title"><?php the_field('feed_title', 'options') ?></h2>
        <div class="wrapper">
          <div class="arr prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7955 3.3295C13.2348 3.76884 13.2348 4.48116 12.7955 4.92049L6.84099 10.875L19.875 10.875C20.4963 10.875 21 11.3787 21 12C21 12.6213 20.4963 13.125 19.875 13.125L6.84099 13.125L12.7955 19.0795C13.2348 19.5188 13.2348 20.2312 12.7955 20.6705C12.3562 21.1098 11.6438 21.1098 11.2045 20.6705L3.3295 12.7955C3.11853 12.5845 3 12.2984 3 12C3 11.7016 3.11853 11.4155 3.32951 11.2045L11.2045 3.3295C11.6438 2.89016 12.3562 2.89017 12.7955 3.3295Z" fill="#020202"/>
            </svg>
          </div>
          <div class="swiper">
            <div class="feed-wrap swiper-wrapper">
              <?php if (have_rows('feed', 'options')) : while (have_rows('feed', 'options')) : the_row(); ?>
              <div class="swiper-slide item">
                <b><?php the_sub_field('imya') ?></b>
                <div class="stars">
                  <?php
                    $stars = get_sub_field('rejting');
                    for ($i = 0; $i < $stars; $i++) { ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M21.5 9.757L16.222 14.111L17.871 21.5L12 17.278L6.129 21.5L7.778 14.111L2.5 9.757L8.833 8.833L12 2.5L15.167 8.833L21.5 9.757Z" fill="#FFA800"/>
                      </svg>
                    <?php }
                  ?>
                </div>
                <p><?php the_sub_field('otzyv') ?></p>
              </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <div class="arr next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2045 20.6705C10.7652 20.2312 10.7652 19.5188 11.2045 19.0795L17.159 13.125L4.125 13.125C3.50368 13.125 3 12.6213 3 12C3 11.3787 3.50368 10.875 4.125 10.875L17.159 10.875L11.2045 4.9205C10.7652 4.48116 10.7652 3.76885 11.2045 3.32951C11.6438 2.89017 12.3562 2.89017 12.7955 3.32951L20.6705 11.2045C20.8815 11.4155 21 11.7016 21 12C21 12.2984 20.8815 12.5845 20.6705 12.7955L12.7955 20.6705C12.3562 21.1098 11.6438 21.1098 11.2045 20.6705Z" fill="#020202"/>
            </svg>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>





<?php get_footer(); ?>

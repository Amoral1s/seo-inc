<?php
/**
 Template Name: SEO
*/

get_header();
?>

<div class="bg-offer bg-offer-target">
  <section class="offer offer-target offer-context page-top">
    <div class="container">
      <div class="left">
        <h1>
          <?php the_field('offer_title'); ?>
        </h1>
        <p>
          <?php the_field('offer_subtitle'); ?>
        </p>
        <div class="button call-consult">
          Бесплатная консультация
        </div>
      </div>
      <div class="right">
        <?php
          $image = get_field('fotka');
          if( !empty( $image ) ) : 
        ?>
              <img src="<?php echo esc_url($image['url']); ?>" title="<?php echo esc_attr($image['title']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="how">
    <div class="container">
      <h2 class="title"><?php the_field('how_title') ?></h2>
      <div class="swiper">
        <div class="how-wrap swiper-wrapper">
          <?php if (have_rows('how_cards')) : while (have_rows('how_cards')) : the_row(); ?>
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
  
</div>

<div class="how-bg">
  <noindex>
    <section class="process process-seo">
      <div class="container">
        <h2 class="title"><?php the_field('proc_title'); ?></h2>
        <div class="wrapper swiper">
          <div class="wrap swiper-wrapper">
            <?php $num = 1; if (have_rows('proc')) : while (have_rows('proc')) : the_row(); ?>
            <div class="item swiper-slide">
              <div class="num"><?php echo $num; $num++; ?></div>
              <b><?php the_sub_field('title') ?></b>
              <p><?php the_sub_field('text') ?></p>
            </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </section>
  </noindex>
  <section class="target target-seo">
    <div class="container">
      <div class="left">
        <h2 class="title">
          <?php the_field('tg_title'); ?>
        </h2>
        <div class="content">
          <?php the_field('tg_text'); ?>
        </div>
      </div>
      <div class="right">
        <img src="<?php the_field('tg_img'); ?>" alt="<?php the_field('tg_title'); ?>">
      </div>
    </div>
  </section>
  
</div>

<div class="target-feat-bg">
  <noindex>
    <section class="cases">
      <div class="container">
        <h2 class="title">Мои лучшие кейсы</h2>
        <div class="cases-wrap ">
          <div class="arr prev">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7955 3.3295C13.2348 3.76884 13.2348 4.48116 12.7955 4.92049L6.84099 10.875L19.875 10.875C20.4963 10.875 21 11.3787 21 12C21 12.6213 20.4963 13.125 19.875 13.125L6.84099 13.125L12.7955 19.0795C13.2348 19.5188 13.2348 20.2312 12.7955 20.6705C12.3562 21.1098 11.6438 21.1098 11.2045 20.6705L3.3295 12.7955C3.11853 12.5845 3 12.2984 3 12C3 11.7016 3.11853 11.4155 3.32951 11.2045L11.2045 3.3295C11.6438 2.89016 12.3562 2.89017 12.7955 3.3295Z" fill="#020202"/>
              </svg>
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php
                $args = array(
                  'category_name' => 'seo'
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $query->the_post();
              ?>
              <a href="<?php the_permalink(); ?>" class="swiper-slide item">
                <img src="<?php the_post_thumbnail_url() ?>" title="?php the_title(); ?>" alt="<?php the_title(); ?>">
                <!-- <p><?php the_title(); ?></p> -->
              </a>
              <?php } }  wp_reset_postdata(); ?>
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
  </noindex>
  <section class="inst inst-target inst-seo">
    <div class="container">
      <h2 class="title"><?php the_field('instr_title') ?></h2>
    </div>
    <div class="container">
      <div class="inst-title">
        <img src="<?php the_field('instr_img') ?>" alt="icon">
      </div>
      <div class="inst-wrap">
        <?php if (have_rows('instr_cards')) : while (have_rows('instr_cards')) : the_row(); ?>
        <div class="item">
          <b><?php the_sub_field('title') ?></b>
          <p><?php the_sub_field('txt') ?></p>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>
  <noindex>
    <section class="faq">
      <div class="container">
        <h2 class="title"><?php the_field('faq_title') ?></h2>
        <div class="faq-wrap">
        <?php if (have_rows('faq')) : while (have_rows('faq')) : the_row(); ?>

          <div class="item">
            <h3 class="item-title">
              <?php the_sub_field('vopros') ?>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26035 10.2929C7.60748 9.90237 8.1703 9.90237 8.51743 10.2929L15 17.5858L21.4826 10.2929C21.8297 9.90237 22.3925 9.90237 22.7397 10.2929C23.0868 10.6834 23.0868 11.3166 22.7397 11.7071L15.6285 19.7071C15.2814 20.0976 14.7186 20.0976 14.3715 19.7071L7.26035 11.7071C6.91322 11.3166 6.91322 10.6834 7.26035 10.2929Z" fill="white"/>
                </svg>
              </div>
            </h3>
            <p class="item-content">
              <?php the_sub_field('otvet') ?>
            </p>
          </div>
          <?php endwhile; endif; ?>

        </div>
      </div>
    </section>
  </noindex>
</div>


  

  

  


<?php
get_footer();

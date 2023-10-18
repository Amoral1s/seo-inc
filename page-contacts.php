<?php
/**
 Template Name: Контакты
*/

get_header();
?>

<div class="bg-offer contacts-page">
  <div class="form">
    <div class="container">
      <div class="form-wrap">
        <div class="left">
          <b>Остались вопросы?</b>
          <p>
            Перезвоню в течении рабочего дня и обсудим стратегию по продвижению вашего проекта
          </p>
          <div class="contacts">
            <a class="phone" href="tel:<?php the_field('phone_800', 'options'); ?>   " target="blank"><?php the_field('phone_800', 'options'); ?>   </a>
            <a href="mailto:<?php the_field('email', 'options'); ?>" target="blank"><?php the_field('email', 'options'); ?>   </a>
            <a href="<?php the_field('tg', 'options'); ?>" target="blank">Telegram: <?php the_field('tg_nickname', 'options'); ?>   </a>
          </div>
        </div>
        <div class="right">
          <?php echo do_shortcode('[contact-form-7 id="f39d860" title="Узнайте точную стоимость продвижения"]'); ?>
        </div>
        <div class="contacts mb-hiden" style="display: none">
          <a class="phone" href="tel:<?php the_field('phone_800', 'options'); ?>   " target="blank"><?php the_field('phone_800', 'options'); ?>   </a>
          <a href="mailto:<?php the_field('email', 'options'); ?>" target="blank"><?php the_field('email', 'options'); ?>   </a>
          <a href="<?php the_field('tg', 'options'); ?>" target="blank">Telegram: <?php the_field('tg_nickname', 'options'); ?>   </a>
        </div>
      </div>
    </div>
  </div>
</div>



<?php
get_footer('contacts');

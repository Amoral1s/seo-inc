
<footer class="footer footer-contacts">
  <div class="container">
    <div class="footer-bot" >
      <div class="copyright">
        Copyright © <span id="year">2023</span> SEOinc 
      </div>
      <script>
        document.getElementById('year').textContent = new Date().getFullYear();
      </script>
      <div class="social">
        <a href="<?php the_field('vk', 'options'); ?>" target="blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M18.8736 25.7726C10.6271 25.7726 5.92352 20.0908 5.72754 10.6362H9.85831C9.99399 17.5756 13.0392 20.515 15.4514 21.1211V10.6362H19.3411V16.6211C21.723 16.3635 24.2253 13.6362 25.0696 10.6362H28.9592C28.3109 14.3332 25.5973 17.0605 23.6676 18.1817C25.5973 19.0908 28.688 21.4696 29.8639 25.7726H25.5822C24.6626 22.8938 22.3713 20.6665 19.3411 20.3635V25.7726H18.8736Z" fill="white"/>
          </svg>
        </a>
        <a href="<?php the_field('tg', 'options'); ?>" target="blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.0078 17.8003C13.7181 15.3178 17.5259 13.6812 19.4312 12.8905C24.871 10.6328 26.0014 10.2406 26.7381 10.2277C26.9001 10.2248 27.2625 10.2649 27.4971 10.4549C27.6953 10.6154 27.7498 10.8321 27.7759 10.9842C27.802 11.1364 27.8345 11.4829 27.8087 11.7537C27.5139 14.8443 26.2384 22.3443 25.5894 25.8059C25.3149 27.2706 24.7742 27.7617 24.2508 27.8097C23.1132 27.9142 22.2495 27.0596 21.1477 26.339C19.4237 25.2113 18.4498 24.5094 16.7763 23.409C14.8423 22.1373 16.096 21.4384 17.1982 20.2961C17.4866 19.9972 22.4986 15.4484 22.5956 15.0357C22.6077 14.9841 22.619 14.7918 22.5045 14.6902C22.3899 14.5886 22.2209 14.6233 22.0989 14.651C21.926 14.6901 19.1718 16.5065 13.8365 20.1002C13.0547 20.6358 12.3467 20.8968 11.7122 20.8831C11.0128 20.8681 9.66748 20.4885 8.66734 20.1642C7.44063 19.7663 6.46567 19.5559 6.55056 18.8802C6.59478 18.5282 7.08053 18.1683 8.0078 17.8003Z" fill="white"/>
          </svg>
        </a>
        <a href="<?php the_field('fl_link', 'options'); ?>" target="blank">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
            <path d="M16.8088 18.6264C16.8088 19.1787 16.3611 19.6264 15.8088 19.6264H12.3718C11.8195 19.6264 11.3718 20.0741 11.3718 20.6264V25C11.3718 25.5523 10.924 26 10.3718 26H9C8.44772 26 8 25.5523 8 25V11C8 10.4477 8.44772 10 9 10H16.3564C16.9087 10 17.3564 10.4477 17.3564 11V11.978C17.3564 12.5303 16.9087 12.978 16.3564 12.978H12.3718C11.8195 12.978 11.3718 13.4257 11.3718 13.978V15.6593C11.3718 16.2116 11.8195 16.6593 12.3718 16.6593H15.8088C16.3611 16.6593 16.8088 17.1071 16.8088 17.6593V18.6264Z" fill="white"/>
            <path d="M22.1306 22.033C22.1306 22.5853 22.5784 23.033 23.1306 23.033H27C27.5523 23.033 28 23.4807 28 24.033V25C28 25.5523 27.5523 26 27 26H19.7589C19.2066 26 18.7589 25.5523 18.7589 25V11C18.7589 10.4477 19.2066 10 19.7589 10H21.1306C21.6829 10 22.1306 10.4477 22.1306 11V22.033Z" fill="white"/>
          </svg>
        </a>
      </div>
      <a href="<?php the_permalink(3); ?>" target="blank" class="privacy">
        Политика конфиденциальности
      </a>
    </div>
  </div>
  
</footer>

<div class="overlay"></div>


<div class="popup form callback">
  <div class="popup-wrap">
    <b>Оставьте заявку</b>
    <p>Перезвоню в течении рабочего дня и обсудим стратегию по продвижению вашего проекта</p>
    <?php echo do_shortcode('[contact-form-7 id="8d28ad9" title="Бесплатная консультация (попап)"]'); ?>
  </div>
</div>

<div class="popup form tarif">
  <div class="popup-wrap">
    <b>Оставьте заявку</b>
    <p>Перезвоню в течении рабочего дня и обсудим стратегию по продвижению вашего проекта</p>
    <?php echo do_shortcode('[contact-form-7 id="6b74a91" title="Заказать таргет с тарифом (попап)"]'); ?>
  </div>
</div>

<div class="popup thx" id="thx">
  <div class="wrap">
    <b>Спасибо за заявку!</b>
    <!-- <div class="button button-accent close-button">
      На главную
    </div> -->
  </div>
</div>

<div class="menu-mob" style="display: none">
  <div class="row">
  <?php if (is_home()) : ?>
    <div  class="header-logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="139" height="28" viewBox="0 0 139 28" fill="none">
        <path d="M11.7382 27.8566C9.45917 27.8566 7.24883 27.5744 5.10713 27.0101C2.99289 26.4201 1.29051 25.6634 0 24.74L2.26526 20.046C3.50086 20.8924 4.96984 21.5722 6.67222 22.0852C8.3746 22.5982 10.077 22.8547 11.7793 22.8547C13.6739 22.8547 15.0743 22.5982 15.9804 22.0852C16.8865 21.5465 17.3395 20.8411 17.3395 19.969C17.3395 19.3277 17.065 18.8019 16.5158 18.3915C15.9941 17.9554 15.3077 17.6091 14.4565 17.3526C13.6327 17.0961 12.507 16.814 11.0792 16.5062C8.88256 16.0188 7.08408 15.5314 5.68374 15.0441C4.2834 14.5567 3.07526 13.7744 2.05933 12.6971C1.07085 11.6197 0.576612 10.1833 0.576612 8.38775C0.576612 6.82306 1.02966 5.41228 1.93577 4.1554C2.84187 2.87287 4.20103 1.85967 6.01323 1.1158C7.8529 0.371934 10.0907 0 12.7266 0C14.5663 0 16.3648 0.205205 18.1221 0.615614C19.8794 1.02602 21.417 1.61599 22.735 2.38551L20.6756 7.11805C18.0122 5.70726 15.3488 5.00187 12.6855 5.00187C10.8183 5.00187 9.43172 5.28403 8.52561 5.84834C7.64697 6.41265 7.20764 7.15652 7.20764 8.07994C7.20764 9.00336 7.71561 9.69593 8.73154 10.1576C9.77494 10.5937 11.3538 11.0298 13.468 11.4658C15.6646 11.9532 17.4631 12.4405 18.8634 12.9279C20.2638 13.4153 21.4582 14.1848 22.4467 15.2365C23.4626 16.2881 23.9706 17.7117 23.9706 19.5073C23.9706 21.0463 23.5038 22.4571 22.5702 23.7396C21.6641 24.9965 20.2912 25.9969 18.4516 26.7408C16.6119 27.4846 14.3741 27.8566 11.7382 27.8566Z" fill="white"/>
        <path d="M50.8528 22.393V27.3949H28.5297V0.46171H50.3174V5.46358H35.1608V11.3119H48.5464V16.1599H35.1608V22.393H50.8528Z" fill="white"/>
        <path d="M70.0435 27.8566C67.0506 27.8566 64.346 27.2538 61.9297 26.0482C59.5409 24.8426 57.6601 23.1882 56.2872 21.0848C54.9418 18.9558 54.2691 16.5703 54.2691 13.9283C54.2691 11.2863 54.9418 8.91359 56.2872 6.81024C57.6601 4.68124 59.5409 3.01395 61.9297 1.80837C64.346 0.602789 67.0506 0 70.0435 0C73.0364 0 75.7272 0.602789 78.1161 1.80837C80.5049 3.01395 82.3857 4.68124 83.7586 6.81024C85.1315 8.91359 85.8179 11.2863 85.8179 13.9283C85.8179 16.5703 85.1315 18.9558 83.7586 21.0848C82.3857 23.1882 80.5049 24.8426 78.1161 26.0482C75.7272 27.2538 73.0364 27.8566 70.0435 27.8566ZM70.0435 22.5469C71.7459 22.5469 73.2835 22.1878 74.6564 21.4696C76.0293 20.7257 77.1001 19.6997 77.8689 18.3915C78.6652 17.0833 79.0633 15.5956 79.0633 13.9283C79.0633 12.261 78.6652 10.7733 77.8689 9.46508C77.1001 8.15689 76.0293 7.14369 74.6564 6.42548C73.2835 5.68161 71.7459 5.30968 70.0435 5.30968C68.3411 5.30968 66.8035 5.68161 65.4306 6.42548C64.0577 7.14369 62.9731 8.15689 62.1769 9.46508C61.408 10.7733 61.0236 12.261 61.0236 13.9283C61.0236 15.5956 61.408 17.0833 62.1769 18.3915C62.9731 19.6997 64.0577 20.7257 65.4306 21.4696C66.8035 22.1878 68.3411 22.5469 70.0435 22.5469Z" fill="white"/>
        <path d="M92.9187 13.2466H96.9709V26.3018H92.9187V13.2466ZM94.9448 11.4267C94.2001 11.4267 93.5941 11.2245 93.1265 10.82C92.6589 10.4156 92.4251 9.91411 92.4251 9.31554C92.4251 8.71698 92.6589 8.21548 93.1265 7.81105C93.5941 7.40661 94.2001 7.2044 94.9448 7.2044C95.6894 7.2044 96.2955 7.39853 96.7631 7.78678C97.2306 8.17504 97.4644 8.66036 97.4644 9.24275C97.4644 9.87366 97.2306 10.3994 96.7631 10.82C96.2955 11.2245 95.6894 11.4267 94.9448 11.4267Z" fill="white"/>
        <path d="M109.226 13.0525C110.957 13.0525 112.351 13.5378 113.408 14.5085C114.481 15.4791 115.018 16.9189 115.018 18.8278V26.3018H110.966V19.4102C110.966 18.3749 110.724 17.6065 110.239 17.105C109.754 16.5873 109.053 16.3284 108.135 16.3284C107.113 16.3284 106.299 16.6277 105.693 17.2263C105.087 17.8087 104.784 18.6822 104.784 19.847V26.3018H100.732V13.2466H104.602V14.7754C105.139 14.2254 105.806 13.8048 106.602 13.5136C107.399 13.2062 108.273 13.0525 109.226 13.0525Z" fill="white"/>
        <path d="M125.597 26.4959C124.108 26.4959 122.766 26.2128 121.571 25.6466C120.393 25.0642 119.467 24.2634 118.792 23.2443C118.134 22.2251 117.805 21.0684 117.805 19.7742C117.805 18.48 118.134 17.3233 118.792 16.3042C119.467 15.285 120.393 14.4923 121.571 13.9261C122.766 13.3437 124.108 13.0525 125.597 13.0525C127.069 13.0525 128.351 13.3437 129.442 13.9261C130.55 14.4923 131.355 15.3093 131.857 16.377L128.714 17.9543C127.987 16.7571 126.939 16.1586 125.571 16.1586C124.515 16.1586 123.64 16.4821 122.948 17.1292C122.255 17.7763 121.909 18.658 121.909 19.7742C121.909 20.8905 122.255 21.7721 122.948 22.4192C123.64 23.0663 124.515 23.3899 125.571 23.3899C126.957 23.3899 128.004 22.7913 128.714 21.5942L131.857 23.1957C131.355 24.2311 130.55 25.04 129.442 25.6223C128.351 26.2047 127.069 26.4959 125.597 26.4959Z" fill="white"/>
        <path d="M136.23 26.4959C135.52 26.4959 134.923 26.2694 134.438 25.8165C133.953 25.3635 133.711 24.7973 133.711 24.1178C133.711 23.4222 133.953 22.8641 134.438 22.4435C134.923 22.0067 135.52 21.7883 136.23 21.7883C136.94 21.7883 137.538 22.0067 138.023 22.4435C138.508 22.8641 138.75 23.4222 138.75 24.1178C138.75 24.7973 138.508 25.3635 138.023 25.8165C137.538 26.2694 136.94 26.4959 136.23 26.4959Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M76.7736 14.2781H63.4347V13.4036H76.7736V14.2781Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7531 20.1806V7.71967L70.6892 7.71967V20.1806H69.7531Z" fill="white"/>
        <path d="M73 13.9283C73 15.4668 71.6569 16.7139 70 16.7139C68.3431 16.7139 67 15.4668 67 13.9283C67 12.3898 68.3431 11.1426 70 11.1426C71.6569 11.1426 73 12.3898 73 13.9283Z" fill="white"/>
      </svg>
      <p>С 2009г в интернет-рекламе</p>
    </div>
    <?php else : ?>
    <a href="/" class="header-logo">
      <svg xmlns="http://www.w3.org/2000/svg" width="139" height="28" viewBox="0 0 139 28" fill="none">
        <path d="M11.7382 27.8566C9.45917 27.8566 7.24883 27.5744 5.10713 27.0101C2.99289 26.4201 1.29051 25.6634 0 24.74L2.26526 20.046C3.50086 20.8924 4.96984 21.5722 6.67222 22.0852C8.3746 22.5982 10.077 22.8547 11.7793 22.8547C13.6739 22.8547 15.0743 22.5982 15.9804 22.0852C16.8865 21.5465 17.3395 20.8411 17.3395 19.969C17.3395 19.3277 17.065 18.8019 16.5158 18.3915C15.9941 17.9554 15.3077 17.6091 14.4565 17.3526C13.6327 17.0961 12.507 16.814 11.0792 16.5062C8.88256 16.0188 7.08408 15.5314 5.68374 15.0441C4.2834 14.5567 3.07526 13.7744 2.05933 12.6971C1.07085 11.6197 0.576612 10.1833 0.576612 8.38775C0.576612 6.82306 1.02966 5.41228 1.93577 4.1554C2.84187 2.87287 4.20103 1.85967 6.01323 1.1158C7.8529 0.371934 10.0907 0 12.7266 0C14.5663 0 16.3648 0.205205 18.1221 0.615614C19.8794 1.02602 21.417 1.61599 22.735 2.38551L20.6756 7.11805C18.0122 5.70726 15.3488 5.00187 12.6855 5.00187C10.8183 5.00187 9.43172 5.28403 8.52561 5.84834C7.64697 6.41265 7.20764 7.15652 7.20764 8.07994C7.20764 9.00336 7.71561 9.69593 8.73154 10.1576C9.77494 10.5937 11.3538 11.0298 13.468 11.4658C15.6646 11.9532 17.4631 12.4405 18.8634 12.9279C20.2638 13.4153 21.4582 14.1848 22.4467 15.2365C23.4626 16.2881 23.9706 17.7117 23.9706 19.5073C23.9706 21.0463 23.5038 22.4571 22.5702 23.7396C21.6641 24.9965 20.2912 25.9969 18.4516 26.7408C16.6119 27.4846 14.3741 27.8566 11.7382 27.8566Z" fill="white"/>
        <path d="M50.8528 22.393V27.3949H28.5297V0.46171H50.3174V5.46358H35.1608V11.3119H48.5464V16.1599H35.1608V22.393H50.8528Z" fill="white"/>
        <path d="M70.0435 27.8566C67.0506 27.8566 64.346 27.2538 61.9297 26.0482C59.5409 24.8426 57.6601 23.1882 56.2872 21.0848C54.9418 18.9558 54.2691 16.5703 54.2691 13.9283C54.2691 11.2863 54.9418 8.91359 56.2872 6.81024C57.6601 4.68124 59.5409 3.01395 61.9297 1.80837C64.346 0.602789 67.0506 0 70.0435 0C73.0364 0 75.7272 0.602789 78.1161 1.80837C80.5049 3.01395 82.3857 4.68124 83.7586 6.81024C85.1315 8.91359 85.8179 11.2863 85.8179 13.9283C85.8179 16.5703 85.1315 18.9558 83.7586 21.0848C82.3857 23.1882 80.5049 24.8426 78.1161 26.0482C75.7272 27.2538 73.0364 27.8566 70.0435 27.8566ZM70.0435 22.5469C71.7459 22.5469 73.2835 22.1878 74.6564 21.4696C76.0293 20.7257 77.1001 19.6997 77.8689 18.3915C78.6652 17.0833 79.0633 15.5956 79.0633 13.9283C79.0633 12.261 78.6652 10.7733 77.8689 9.46508C77.1001 8.15689 76.0293 7.14369 74.6564 6.42548C73.2835 5.68161 71.7459 5.30968 70.0435 5.30968C68.3411 5.30968 66.8035 5.68161 65.4306 6.42548C64.0577 7.14369 62.9731 8.15689 62.1769 9.46508C61.408 10.7733 61.0236 12.261 61.0236 13.9283C61.0236 15.5956 61.408 17.0833 62.1769 18.3915C62.9731 19.6997 64.0577 20.7257 65.4306 21.4696C66.8035 22.1878 68.3411 22.5469 70.0435 22.5469Z" fill="white"/>
        <path d="M92.9187 13.2466H96.9709V26.3018H92.9187V13.2466ZM94.9448 11.4267C94.2001 11.4267 93.5941 11.2245 93.1265 10.82C92.6589 10.4156 92.4251 9.91411 92.4251 9.31554C92.4251 8.71698 92.6589 8.21548 93.1265 7.81105C93.5941 7.40661 94.2001 7.2044 94.9448 7.2044C95.6894 7.2044 96.2955 7.39853 96.7631 7.78678C97.2306 8.17504 97.4644 8.66036 97.4644 9.24275C97.4644 9.87366 97.2306 10.3994 96.7631 10.82C96.2955 11.2245 95.6894 11.4267 94.9448 11.4267Z" fill="white"/>
        <path d="M109.226 13.0525C110.957 13.0525 112.351 13.5378 113.408 14.5085C114.481 15.4791 115.018 16.9189 115.018 18.8278V26.3018H110.966V19.4102C110.966 18.3749 110.724 17.6065 110.239 17.105C109.754 16.5873 109.053 16.3284 108.135 16.3284C107.113 16.3284 106.299 16.6277 105.693 17.2263C105.087 17.8087 104.784 18.6822 104.784 19.847V26.3018H100.732V13.2466H104.602V14.7754C105.139 14.2254 105.806 13.8048 106.602 13.5136C107.399 13.2062 108.273 13.0525 109.226 13.0525Z" fill="white"/>
        <path d="M125.597 26.4959C124.108 26.4959 122.766 26.2128 121.571 25.6466C120.393 25.0642 119.467 24.2634 118.792 23.2443C118.134 22.2251 117.805 21.0684 117.805 19.7742C117.805 18.48 118.134 17.3233 118.792 16.3042C119.467 15.285 120.393 14.4923 121.571 13.9261C122.766 13.3437 124.108 13.0525 125.597 13.0525C127.069 13.0525 128.351 13.3437 129.442 13.9261C130.55 14.4923 131.355 15.3093 131.857 16.377L128.714 17.9543C127.987 16.7571 126.939 16.1586 125.571 16.1586C124.515 16.1586 123.64 16.4821 122.948 17.1292C122.255 17.7763 121.909 18.658 121.909 19.7742C121.909 20.8905 122.255 21.7721 122.948 22.4192C123.64 23.0663 124.515 23.3899 125.571 23.3899C126.957 23.3899 128.004 22.7913 128.714 21.5942L131.857 23.1957C131.355 24.2311 130.55 25.04 129.442 25.6223C128.351 26.2047 127.069 26.4959 125.597 26.4959Z" fill="white"/>
        <path d="M136.23 26.4959C135.52 26.4959 134.923 26.2694 134.438 25.8165C133.953 25.3635 133.711 24.7973 133.711 24.1178C133.711 23.4222 133.953 22.8641 134.438 22.4435C134.923 22.0067 135.52 21.7883 136.23 21.7883C136.94 21.7883 137.538 22.0067 138.023 22.4435C138.508 22.8641 138.75 23.4222 138.75 24.1178C138.75 24.7973 138.508 25.3635 138.023 25.8165C137.538 26.2694 136.94 26.4959 136.23 26.4959Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M76.7736 14.2781H63.4347V13.4036H76.7736V14.2781Z" fill="white"/>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M69.7531 20.1806V7.71967L70.6892 7.71967V20.1806H69.7531Z" fill="white"/>
        <path d="M73 13.9283C73 15.4668 71.6569 16.7139 70 16.7139C68.3431 16.7139 67 15.4668 67 13.9283C67 12.3898 68.3431 11.1426 70 11.1426C71.6569 11.1426 73 12.3898 73 13.9283Z" fill="white"/>
      </svg>
      <p>С 2009г в интернет-рекламе</p>
    </a>
    <?php endif; ?> 
    <div class="close">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
        <path d="M7.29375 21.375L5.71875 19.8L12.0188 13.5L5.71875 7.2L7.29375 5.625L13.5938 11.925L19.8938 5.625L21.4688 7.2L15.1687 13.5L21.4688 19.8L19.8938 21.375L13.5938 15.075L7.29375 21.375Z" fill="white"/>
      </svg>
    </div>
  </div>
  <nav class="header-menu" itemscope itemtype="http://schema.org/SiteNavigationElement" > 
    <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
    <?php  
      wp_nav_menu( array(
        'menu_class' => '',
        'theme_location' => 'menu-1',
        'container' => null,
        'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
      )); 
    ?>
    </ul>
    <div class="lang">
      <?php echo do_shortcode('[gtranslate]'); ?>
    </div>
  </nav> 
  <div class="header-right"> 
    <div class="header-contacts"> 
      <a target="blank" class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
        <?php the_field('phone', 'options'); ?>          
      </a>
      <small>9-21 по Мск</small>
    </div> 
    <div class="social">
      <a href="<?php the_field('tg', 'options'); ?>" target="blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00731 17.8003C13.7177 15.3178 17.5254 13.6812 19.4307 12.8905C24.8705 10.6328 26.0009 10.2406 26.7376 10.2277C26.8997 10.2248 27.262 10.2649 27.4967 10.4549C27.6948 10.6154 27.7493 10.8321 27.7754 10.9842C27.8015 11.1364 27.834 11.4829 27.8082 11.7537C27.5134 14.8443 26.2379 22.3443 25.5889 25.8059C25.3144 27.2706 24.7737 27.7617 24.2503 27.8097C23.1128 27.9142 22.249 27.0596 21.1472 26.339C19.4232 25.2113 18.4493 24.5094 16.7758 23.409C14.8419 22.1373 16.0956 21.4384 17.1977 20.2961C17.4862 19.9972 22.4981 15.4484 22.5951 15.0357C22.6072 14.9841 22.6185 14.7918 22.504 14.6902C22.3894 14.5886 22.2204 14.6233 22.0984 14.651C21.9255 14.6901 19.1714 16.5065 13.836 20.1002C13.0543 20.6358 12.3462 20.8968 11.7117 20.8831C11.0124 20.8681 9.66699 20.4885 8.66685 20.1642C7.44014 19.7663 6.46518 19.5559 6.55008 18.8802C6.5943 18.5282 7.08004 18.1683 8.00731 17.8003Z" fill="white"/>
        </svg>
      </a>
      <a href="<?php the_field('whatsapp', 'options'); ?>" target="blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
          <path d="M19.5 9C24.7469 9 29 13.2531 29 18.5C29 23.7468 24.7469 28 19.5 28C17.8211 28.0027 16.1718 27.5584 14.7215 26.7127L10.0038 28L11.2882 23.2804C10.4419 21.8296 9.99721 20.1796 10 18.5C10 13.2531 14.2532 9 19.5 9ZM16.2624 14.035L16.0724 14.0426C15.9494 14.0501 15.8292 14.0824 15.719 14.1376C15.616 14.196 15.5219 14.2689 15.4397 14.3542C15.3257 14.4615 15.2611 14.5546 15.1918 14.6449C14.8404 15.1018 14.6512 15.6626 14.6541 16.239C14.656 16.7045 14.7776 17.1576 14.9676 17.5813C15.3561 18.4382 15.9955 19.3455 16.8391 20.1862C17.0424 20.3886 17.2419 20.5919 17.4566 20.7809C18.5048 21.7038 19.7539 22.3694 21.1046 22.7246L21.6442 22.8073C21.8199 22.8168 21.9957 22.8035 22.1724 22.7949C22.449 22.7807 22.7192 22.7057 22.9637 22.5755C23.0881 22.5114 23.2095 22.4417 23.3276 22.3665C23.3276 22.3665 23.3684 22.3399 23.4463 22.281C23.5746 22.186 23.6534 22.1185 23.7598 22.0074C23.8387 21.9257 23.9071 21.8297 23.9593 21.7205C24.0334 21.5656 24.1075 21.2702 24.1379 21.0241C24.1607 20.836 24.1541 20.7334 24.1512 20.6698C24.1474 20.5681 24.0629 20.4627 23.9707 20.418L23.4178 20.1701C23.4178 20.1701 22.5913 19.81 22.0859 19.5801C22.033 19.5571 21.9764 19.5438 21.9187 19.5412C21.8537 19.5345 21.788 19.5418 21.7261 19.5626C21.6642 19.5835 21.6074 19.6173 21.5596 19.6618C21.5549 19.6599 21.4912 19.7141 20.8044 20.5463C20.7649 20.5993 20.7106 20.6393 20.6484 20.6613C20.5861 20.6833 20.5187 20.6862 20.4548 20.6698C20.3929 20.6532 20.3322 20.6322 20.2733 20.6071C20.1555 20.5577 20.1147 20.5387 20.0339 20.5045C19.4887 20.2666 18.9839 19.9451 18.5377 19.5516C18.418 19.4471 18.3068 19.3331 18.1928 19.2229C17.8191 18.865 17.4933 18.4601 17.2238 18.0183L17.1678 17.9281C17.1275 17.8675 17.095 17.802 17.0709 17.7333C17.0348 17.5937 17.1288 17.4816 17.1288 17.4816C17.1288 17.4816 17.3597 17.2289 17.467 17.0921C17.5715 16.9591 17.6599 16.8299 17.7169 16.7377C17.829 16.5572 17.8641 16.372 17.8052 16.2285C17.5392 15.5787 17.2637 14.9318 16.9806 14.2896C16.9246 14.1623 16.7583 14.0711 16.6073 14.053C16.556 14.0473 16.5047 14.0416 16.4534 14.0378C16.3258 14.0315 16.1979 14.0328 16.0705 14.0416L16.2615 14.034L16.2624 14.035Z" fill="white"/>
        </svg>
      </a>
    </div>
  </div> 
</div>

<?php wp_footer(); ?>

</body>
</html>
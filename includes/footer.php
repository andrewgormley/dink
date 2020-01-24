<div id="footer">
  <div class="grid-container">
    <div class="grid-x">

      <div class="small-6 medium-3 large-4 cell">
        <a href="index"><img class="footer-logo" src="img/dink-logo-light.svg"></a>
        <div class="sign-off">© Dink Digital 2018<br />DINK Digital Limited is a company registered in England, company number 11072685, VAT number GB283769844.</div>
      </div>

      <div class="small-6 medium-3 large-2 cell">
        <ul>
          <li><a href="index.php#work">Our work</a></li>
          <li><a href="index.php#services">What we do</a></li>
          <li><a href="index.php#team">The team</a></li>
          <li><a href="index.php#join">Join us</a></li>
          <li><a href="mailto:hello@wearedink.com">Contact</a></li>
        </ul>
      </div>

      <hr />

      <div class="address small-12 medium-3 large-4 cell grid-x">
        <div class="footer-title small-6 medium-12 cell">
          London
          <p>6-9 Timber Street, London, EC1Y 0TQ</p>
        </div>
        <div class="footer-title small-6 medium-12 cell">
          Devon
          <p>Stadium House, Aspen Way, Yalberton Tor Ind Est, Paignton, Devon, TQ4 7QR</p>
        </div>

        <div class="footer-title small-6 medium-12 cell">
          Shirebrook (Registered office)
          <p>Unit A, Brook Park East, Shirebrook, United Kingdom, NG20 8RY</p>
        </div>
      </div>

      <div class="social-links small-12 medium-3 large-2 cell">
        <div class="footer-title hide-for-small">Social</div>
        <a href="https://www.instagram.com/wearedink/" target="_blank"><img src="img/icons/instagram-light.svg" alt="Dink Instagram"></a>
        <a href="https://twitter.com/wearedink" target="_blank"><img src="img/icons/twitter-light.svg" alt="Dink Twitter"></a>
        <a href="https://www.linkedin.com/company/wearedink/" target="_blank"><img src="img/icons/linkedin-light.svg" alt="Dink LinkedIn"></a>
        <div class="facebook-icon">
          <img src="img/icons/facebook-marketing-partner.png" alt="Facebook Marketing Partner">
        </div>
      </div>

    </div>
  </div>
</div>

<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/aos.js"></script>

<script>

  $(window).on('scroll', function(){
    if ($(window).scrollTop() > 25){
      $('nav').addClass('scrolled');
    }
    else {
      $('nav').removeClass('scrolled');
    }
  })

  AOS.init();

  $('body').on('click', '.nav-trigger', function() {
    $(this).toggleClass('on');
    $('.nav-menu').fadeToggle(200);
  });

  $('body').on('click', '.nav-trigger-dark', function() {
    $(this).toggleClass('on');
    $('.nav-menu').fadeToggle(200);
  });

  $(document).scroll(function (e) {
      $.each($('section'), function (index, section) {
        if($(this).scrollTop() >= section.getBoundingClientRect().top && $(this).scrollTop() <= section.getBoundingClientRect().bottom){
        if ($(section).hasClass('bgwhite')) {
            $('.js_navbar').removeClass('nav-trigger');
            $('.js_navbar').addClass('nav-trigger-dark');
          } else {
            $('.js_navbar').removeClass('nav-trigger-dark');
            $('.js_navbar').addClass('nav-trigger');
          }
        }
      });
    });


</script>

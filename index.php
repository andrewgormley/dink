<?php include "includes/header.php"; ?>
<title>DINK | A platform for inclusive creativity | Digital creative agency</title>
</head>
<body>
<?php include "includes/navigation.php"; ?>

    <div id="loader-wrapper">
      <div class="loader"></div>
      <img src="img/dink-logo-light.svg" alt="DINK loading animation"/>
      <div class="loader-section_first"></div>
    </div>

    <div id="border-wrapper">

        <div id="billboard" class="grid-x">
          <div class="large-12 cell">

            <div id="social-pod" class="hide-for-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
                <a href="https://www.instagram.com/wearedink/" target="_blank"><img src="img/icons/instagram.svg" alt="Dink Instagram"></a>
                <a href="https://twitter.com/wearedink" target="_blank"><img src="img/icons/twitter.svg" alt="Dink Twitter"></a>
                <a href="https://www.linkedin.com/company/wearedink/" target="_blank"><img src="img/icons/linkedin.svg" alt="Dink LinkedIn"></a>
            </div>

            <div id="rotated-text" class="hide-for-small" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-once="true">WE ARE DINK</div>

            <?php

            $useragent=$_SERVER['HTTP_USER_AGENT'];

            if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
            {?>

              <!-- video not supported on mobile -->

              <?php } else { ?>

                <video muted autoplay loop>
                  <source src="dink_showreel/logo/dink_showreel.mp4" type="video/mp4">
                  <source src="dink_showreel/logo/dink_showreel.ogg" type="video/ogg">
                  <source src="dink_showreel/logo/dink_showreel.webm" type="video/webm">
                </video>

            <?php }; ?>

            <h1>WE ARE DINK</h1>

          </div>
        </div>

        <div class="scroll-down"></div>

        <div id="intro-text" class="grid-x">
          <div class="large-12 cell">
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100" data-aos-once="true">
              We are a platform for inclusive creativity.<br />
              We inspire, connect and provoke the creative communities within sport and fashion.<br />
              We are DINK.
            </p>
          </div>
        </div>

        <?php include "includes/case-studies.php"; ?>

    </div>

    <div class="grid-container">
      <div class="grid-x">

        <?php include "includes/services.php"; ?>

        <div class="quote-container grid-x">

              <div class="avatar small-12 medium-4 cell" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
                <div class="avatar-image">
                  <img src="img/adidas.svg" alt="adidas logo">
                </div>
              </div>

              <div class="quote small-12 medium-8 cell" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
                  <div class="quote-copy">
                    <p>Dink have been a pleasure to work with. Highly organised, efficient and their projects are truly industry leading.</p>
                    <div class="quote-mark quote-mark_open">,,</div>
                    <div class="quote-mark quote-mark_close">,,</div>
                  </div>
              </div>

          </div>

          <?php include "includes/team.php"; ?>

          <div id="join" class="small-12 cell">

            <div class="scroll-down"></div>

            <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">Be part <br>of the team</h2>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">Dink is always on the lookout for the brightest talent. If you consider yourself a visionary individual who lives for creativity, then drop us a line. We’d love to hear from you.</p>
            <a href="https://www.linkedin.com/jobs/search/?f_C=18317908&locationId=OTHERS.worldwide" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"><button>View Vacancies</button></a>
          </div>

      </div>
    </div>

    <div id="marquee-container">
      <div class='marquee' data-duration='26000' data-gap='10' data-duplicated='true' style="opacity:.03;">PHOTOGRAPHY  -  UI DESIGN  -  MARKETING  -  CREATIVE DIRECTING  -  ACCOUNT MANAGEMENT  -  UX DESIGN  -  WEB DEVELOPMENT  -  VIDEOGRAPHY  -  3D ART  -  PRODUCT MANAGEMENT  -  DATA ANALYTICS  -  ECOMMERCE  -  </div>
      <div class='marquee' data-duration='24000' data-gap='10' data-duplicated='true' style="opacity:.07;">ECOMMERCE  -  DATA ANALYTICS  -  PRODUCT MANAGEMENT  -  3D ART  -  VIDEOGRAPHY  -  WEB DEVELOPMENT  -  UX DESIGN  -  ACCOUNT MANAGEMENT  -  CREATIVE DIRECTING  -  MARKETING  -  UI DESIGN  -  PHOTOGRAPHY  -  </div>
      <div class='marquee' data-duration='22000' data-gap='10' data-duplicated='true' style="opacity:.14;">PHOTOGRAPHY  -  UI DESIGN  -  MARKETING  -  CREATIVE DIRECTING  -  ACCOUNT MANAGEMENT  -  UX DESIGN  -  WEB DEVELOPMENT  -  VIDEOGRAPHY  -  3D ART  -  PRODUCT MANAGEMENT  -  DATA ANALYTICS  -  ECOMMERCE  -  </div>
      <div class='marquee' data-duration='20000' data-gap='10' data-duplicated='true'>PHOTOGRAPHY  -  UI DESIGN  -  MARKETING  -  CREATIVE DIRECTING  -  ACCOUNT MANAGEMENT  -  UX DESIGN  -  WEB DEVELOPMENT  -  VIDEOGRAPHY  -  3D ART  -  PRODUCT MANAGEMENT  -  DATA ANALYTICS  -  ECOMMERCE  -  </div>
      <div class='marquee' data-duration='22000' data-gap='10' data-duplicated='true' style="opacity:.14;">ECOMMERCE  -  DATA ANALYTICS  -  PRODUCT MANAGEMENT  -  3D ART  -  VIDEOGRAPHY  -  WEB DEVELOPMENT  -  UX DESIGN  -  ACCOUNT MANAGEMENT  -  CREATIVE DIRECTING  -  MARKETING  -  UI DESIGN  -  PHOTOGRAPHY  -  </div>
      <div class='marquee' data-duration='24000' data-gap='10' data-duplicated='true' style="opacity:.07;">PHOTOGRAPHY  -  UI DESIGN  -  MARKETING  -  CREATIVE DIRECTING  -  ACCOUNT MANAGEMENT  -  UX DESIGN  -  WEB DEVELOPMENT  -  VIDEOGRAPHY  -  3D ART  -  PRODUCT MANAGEMENT  -  DATA ANALYTICS  -  ECOMMERCE  -  </div>
      <div class='marquee' data-duration='26000' data-gap='10' data-duplicated='true' style="opacity:.03;">ECOMMERCE  -  DATA ANALYTICS  -  PRODUCT MANAGEMENT  -  3D ART  -  VIDEOGRAPHY  -  WEB DEVELOPMENT  -  UX DESIGN  -  ACCOUNT MANAGEMENT  -  CREATIVE DIRECTING  -  MARKETING  -  UI DESIGN  -  PHOTOGRAPHY  -  </div>
    </div>

    <div class="grid-container">
      <div class="grid-x">
        <div id="contact" class="small-12 large-6 cell social-links" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
          <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-once="true">
            Say <br>Hello
          </h2>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
            Creatively changing the game. Social by design, and insights driven. DINK has the team to take any business, campaign or story to the next level. Get in touch, we’ll show you what we can do.
          </p>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
            Email: <a href="mailto:hello@wearedink.com">hello@wearedink.com</a>
          </p>
          <a href="https://www.instagram.com/wearedink/" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"><img src="img/icons/instagram.svg" alt="Dink Instagram"></a>
          <a href="https://twitter.com/wearedink" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"><img src="img/icons/twitter.svg" alt="Dink Twitter"></a>
          <a href="https://www.linkedin.com/company/wearedink/" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true"><img src="img/icons/linkedin.svg" alt="Dink LinkedIn"></a>
        </div>

        <div id="dink-negative" class="small-12 large-6 cell" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="true">
          <img src="img/dink-negative.jpg" alt="Dink logo">
        </div>
      </div>
    </div>

    <?php include "includes/footer.php"; ?>

    <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>
    <script>

      $(document).ready(function(){

        setTimeout(function(){
          $('body').addClass('loaded');
        }, 3000)

      });

      $(document).ready(function(){
        $("#owl-carousel").owlCarousel();
        $("#owl-carousel2").owlCarousel();
      });

      var owl = $('#owl-carousel1');
      owl.owlCarousel({
          loop:true,
          autoplayTimeout:3000,
          autoplayHoverPause:false,
          nav:true,
          dots: false,
          responsive:{
              0:{
                  items:1,
                  autoplay:false,
                  dots: true
              },
              800:{
                  items:2,
                  autoplay:false
              },
              980:{
                  items:3,
                  autoplay:true
              }
          }
      });

      var owl2 = $('#owl-carousel2');
      owl2.owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:false,
          dots: false,
          responsive:{
              0:{
                  items:2,
                  nav:false,
                  autoplay:false
              },
              600:{
                  items:2,
                  nav:false,
                  autoplay:false
              },
              800:{
                  items:3,
                  nav:false,
                  autoplay:true
              },
          }
      });

      $('.marquee').marquee({});



    </script>

<?php include "includes/sitefoot.php"; ?>

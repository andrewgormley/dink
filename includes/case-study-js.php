<script>

  $(document).ready(function(){
    $("#owl-carousel").owlCarousel();
  });

  var owl = $('#owl-carousel');
  owl.owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:false,
      responsive:{
          0:{
              items:1,
              nav:false,
          },
          600:{
              items:1,
              nav:true,
          },
      }
  });
</script>

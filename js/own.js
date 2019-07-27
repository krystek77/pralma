  jQuery(function($) {
      "use strict"
      $.scrollTo(0);
      $('.scrollTop').click( function( event ) {
          $.scrollTo($('body'), 500);
          event.preventDefault();
      });
      /*
      $('.scrollUp').click( function( event ) {
          $.scrollTo($('body'), 500);
          event.preventDefault();
      });
      */

      $('body').on('click','.scrollUp',function(){
          $.scrollTo($('#mainmenu'), 500);
          event.preventDefault();
      });

      $('body').on('click','.available',function(event){
          $.scrollTo($('#lista-modeli'), 500);
          event.preventDefault();
      });

      $('body').on('click','.available-controls',function(event){
          
          let data_type = this.getAttribute('data-type-tech');

          $.scrollTo($('#'+data_type), 500);

          event.preventDefault();
      });

      $( window ).scroll(function( event ) {
          /* Act on the event */

          if ($( this ).scrollTop() > 300) {$('.scrollTop').fadeIn('300', function() {});}
          else {$('.scrollTop').fadeOut('300', function() {});}
      });
      $(document).keyup(function(event) {
          if(event.which===27 && $('body').hasClass('modal_opened')) {

              event.preventDefault();
              $('body').removeClass('modal_opened');
              /*
              console.log("ESC");
              */
          }
      });
      /* modal industrial washing machine - loading by ajax*/
      $('body').on('click','.has-modal',function(e){
          $('body').addClass('modal_opened');

          //console.log('modal został kliknięty');

      });
      $('body').on('click','.modal_close',function(e){
          $('body').removeClass('modal_opened');

          //console.log('modal zamknięty - close');
      });
      $('body').on('click','.btn_modal_close',function(e){
          $('body').removeClass('modal_opened');

          //console.log('modal zamknięty - btn');
      });

      $('body').on('click','.image-iwm > img',function(e){
          let $image = this;
          let src_image = $image.getAttribute('src');
          $('.replaced_image').fadeOut('slow', function() {
              $('.replaced_image').attr('src',src_image);
          });
          $('.replaced_image').fadeIn();

          /*
          console.log('kliknięty obrazek');
          console.log($image);
          console.log(src_image);
          */

      });
      /* modal references */
      /* vertical slideshow */

      $('body').on('click','.get-src-img > img',function(event){
            let $image = this;
            let src_image = $image.getAttribute('src');
            let alt_image = $image.getAttribute('alt');
            let title_image = $image.getAttribute('title');
            $('.change-src-img').fadeOut('slow', function() {
                $('.change-src-img').attr('src',src_image);
            });
            $('.change-src-img').fadeIn();
            //$('.change-src-img').attr('src',src_image);

            $('.change-src-img').attr('alt',alt_image);
            $('.change-src-img').attr('title',title_image);
            $('.current-image-caption').text(alt_image);

      });
      $('body').on('click','.scroll-y-vertical-plate.up',function(event){

          let $elem_first = $('.vertical-slideshow ul > li:first-child');
          $('.vertical-slideshow ul > li:last-child').after($elem_first);

      });
      $('body').on('click','.scroll-y-vertical-plate.down',function(event){

          let $elem_last = $('.vertical-slideshow ul > li:last-child');
          $('.vertical-slideshow ul > li:first-child').before($elem_last);

      });

      $('.reference_img').click(

          function( event ){
              //get id of clicked image
              let id_image = this.getAttribute("data-number-image");

              //get correct image
              let $image = $('#'+id_image);

              //get path to the that image
              let image_src = $($image).attr('src');
              //get alt of the that image
              let alt_image = $($image).attr('alt');

              $('.replaced_image').attr('src',image_src);
              $('.modal_suptitle').text(alt_image);

              $('body').addClass('modal_opened');
              /*
              console.log(id_image);
              console.log($image);
              console.log(image_src);
              console.log(alt_image);
              */

          }
      );

      /*
      $('.modal_close').click(function( event){
          $('body').removeClass('modal_opened');
      });
      $('.btn_modal_close').click(function( event){
          $('body').removeClass('modal_opened');
      });
      */

      /* slideshow */

      let slideIndex = 0; //slide number

      let $slides = $('.carousel ul'); // slides container

      let lenSlides = $slides.children('li').length; // number of sildes

      $slides.css('left', '0px');               //set start position of slide container
      $slides.css('width',lenSlides*1110+"px");//set start width of slide container


      /* get the same amount pagination like slides*/
      let $pagination = $('.pagination');

      for(var i=0;i<lenSlides;i++) {
          if(i==0) $pagination.append('<a class="active-btn-carousel" href="#'+(i+1)+'" title="'+(i+1)+'"></a>');
          else $pagination.append('<a class="" href="#'+(i+1)+'" title="'+(i+1)+'"></a>');
      }

      let $pad    = $('.pagination a');
      let $slide  = $('.carousel li');
      let timer_slide;

      /* change slide */
      function changeSlide()
       {
           if(slideIndex > (lenSlides-1)) slideIndex = 0;

           $slides.css('left', -slideIndex*1110+"px");
           for(var i=0;i < lenSlides;i++)
           {
               $pad.removeClass('active-btn-carousel');
               $slide.removeClass('active-slide');
           }
           $('.pagination a[title='+(slideIndex+1)+']').addClass('active-btn-carousel');
           $('.carousel li[data-type-slide-number='+(slideIndex+1)+']').addClass('active-slide');

           slideIndex=slideIndex+1;
           timer_slide = setTimeout(changeSlide,8000);
       }

      /*pagination click*/
      $('.pagination a').click(function(){

          slideIndex = $(this).attr('title')-1;

          $slides.css('left', -slideIndex*1110+"px");
          for(var i=0;i < lenSlides;i++) {
             $pad.removeClass('active-btn-carousel');
             $slide.removeClass('active-slide');
          }

          $('.pagination a[title='+(slideIndex+1)+']').addClass('active-btn-carousel');
          $('.carousel li[data-type-slide-number='+(slideIndex+1)+']').addClass('active-slide');


      });

      /*prev*/
      $('#prev').click(function(){

          slideIndex=slideIndex-2;
          if(slideIndex<0) slideIndex = (lenSlides-1);

          $slides.css('left', -slideIndex*1110+"px");

          for(var i=0;i < lenSlides;i++) {
             $pad.removeClass('active-btn-carousel');
             $slide.removeClass('active-slide');
          }
          $('.pagination a[title='+(slideIndex+1)+']').addClass('active-btn-carousel');
          $('.carousel li[data-type-slide-number='+(slideIndex+1)+']').addClass('active-slide');

          clearTimeout(timer_slide);
          changeSlide();
      });

      /*next*/
      $('#next').click(function(){
         clearTimeout(timer_slide);
         changeSlide();
      });

      changeSlide();



  });

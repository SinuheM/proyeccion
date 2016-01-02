$(document).ready(function(){
  setInterval(cambiarVel, 1000);// 5 segundos
  setInterval(CochinoCambio, 7000);// 5 segundos
  nCochinoClear = 0;
  nCarro = 0;
  containerSize = $( window ).width();
  tamañoCarro = $('.ImgCochinoClear').width();
  velocidad = ["vel1", "vel1", "vel1", "vel2", "vel3", "vel4", "vel5", "vel6", "vel6", "vel7", "vel4", "vel3", "vel8", "vel1", "vel1", "vel1"];

  function cambiarVel() {
    nCarro++;
    if(nCarro==17) nCarro = 0;
    $('.llanta').css("animation-name", velocidad[nCarro]);
    //console.log('cambio a :' + velocidad[nCarro] + $('.llanta').css('transform: rotateZ()'));
  }

  function CochinoCambio(){
    tamañoCarro = $('.ImgCochinoClear').width();
    if (nCochinoClear == 0) {
      $('.ImgCochinoClear2').css({'margin-left':"-"+tamañoCarro+"px"});
      $('.carroCambio2').css({'background': 'url(img/carro-cochino.png)','background-size': 'cover'});
      nCochinoClear = 1;
    }
    else if (nCochinoClear==1) {
      cambiarCarro2();
      nCarro = 16;
      nCochinoClear = 2;
    }
    else if (nCochinoClear == 2) {
      $('.ImgCochinoClear1').css({'margin-left':"-"+tamañoCarro+"px"});
      $('.carroCambio1').css({'background': 'url(img/carro-cochino.png)','background-size': 'cover'});
      nCochinoClear = 3;
    }
    else {
      cambiarCarro1();
      nCarro = 16;
      nCochinoClear = 0;
    }
  }

  function cambiarCarro1(){
    containerSize = $( window ).width();
    tamañoCarro = $('.ImgCochinoClear').width();
    $('.ImgCochinoClear1').animate(
            { 'marginLeft': ''+((containerSize*0.5)-tamañoCarro/2)+'px'}, 
            {duration: 7500, easing : 'easeOutCirc'})
            .animate({'color':'red'},1000, function(){
            $('.carroCambio1').css({'background': 'url(img/carro-limpio.png)', 'background-size': 'cover'})
            })
            .animate({ 'marginLeft': ''+(containerSize)+'px'}, 
            {duration: 7500, easing : 'easeInCirc'});
  }
  function cambiarCarro2(){
    console.log(outerWidth/2)
    containerSize = $( window ).width();
    $('.ImgCochinoClear2').animate(
            { 'marginLeft': ''+((containerSize*0.5)-tamañoCarro/2)+'px'}, 
            {duration: 7500, easing : 'easeOutCirc'})
            .animate({'color':'red'},1000, function(){
            console.log('Porquee');
            $('.carroCambio2').css({'background': 'url(img/carro-limpio.png)','background-size': 'cover'})
            })
            .animate({ 'marginLeft': ''+(containerSize)+'px'}, 
            {duration: 7500, easing : 'easeInCirc'});
  }

  $('.ImgCochinoClear1').animate(
            { 'marginLeft': ''+((containerSize*0.5)-tamañoCarro/2)+'px'}, 
            {duration: 7500, easing : 'easeOutCirc'})
            .animate({'color':'red'},1000, function(){
            $('.carroCambio1').css({'background': 'url(img/carro-limpio.png)','background-size': 'cover'})
            })
            .animate({ 'marginLeft': ''+(containerSize)+'px'}, 
            {duration: 7500, easing : 'easeInCirc'});

  $(window).scroll( function(){
          /* Check the location of each desired element */
          $('.fadeX').each( function(i){

              var bottom_of_object = $(this).offset().top+100;
              var bottom_of_window = $(window).scrollTop() + $(window).height();

              /* If the object is completely visible in the window, fade it it */
              console.log(bottom_of_object);
              console.log(bottom_of_window);
              if( bottom_of_window > bottom_of_object ){
                  $(this).animate({'opacity':'1',},1000);        
              }
              
          }); 
      });
  $('.packX').click(function (e) {
          var packX = $('#packX');
          $('html,body').stop().animate({
              scrollTop: packX.offset().top
          }, 1000);
          e.preventDefault();
      });

  $('.HowItOpen, .Close, .HowItClose').click(function(e){
    $('.howItWork').slideToggle("fast");
    e.preventDefault();
  });

  $('.MenuToggle, #frameTime, .HowItClose, .CloseMenu').click(function(e){
      if($('.MenuToggle').hasClass('ToggleClose'))
      {
        $('.MenuList').animate({right: '0'});
        $('.MenuToggle').removeClass('ToggleClose');
        $('#frameTime').removeClass('hide');
      }
      else{
        $('.MenuList').animate({right: "-340px"});
        $('.MenuToggle').addClass('ToggleClose');
        $('#frameTime').addClass('hide');
      }
      e.preventDefault();
  });


  $( "#suscribe" ).submit(function( event ) {
    console.log( "Handler for .submit() called." );
    event.preventDefault();
  });
});

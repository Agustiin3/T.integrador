// WARNING: Menu derecho fixed
var contadorfixed = 0;
$('.iconomenufixed').click(menuderechofixed);
$('.cerrartodo').click(cerrartodo);
$('.iconomenufixedcerrar').click(ocultarmenuderechofixed);

function menuderechofixed(){

  if (contadorfixed == 0) {
    $('.menuizquierdofixed').animate({left: '0'});
    $('.cerrartodo').css({'display': 'block'});
    contadorfixed = 1;
  }
}

function ocultarmenuderechofixed(){
   if (contadorfixed == 1) {
     $('.menuizquierdofixed').animate({left: '-100%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorfixed = 0;
   }
}

// WARNING: SESION
var contadorsesionfixed = 0;
$('.registrooiniciofixed').click(registrooiniciofixed);
$('.iconosesionheader').click(iconosesionheader);
$('.iconosesioncerrar').click(iconosesioncerrar);

function registrooiniciofixed(){

  if (contadorsesionfixed == 0) {
    $('.sesion').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorsesionfixed = 1;
  }
}

function iconosesionheader(){

  if (contadorsesionfixed == 0) {
    $('.sesion').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorsesionfixed = 1;
  }
}

function iconosesioncerrar(){
   if (contadorsesionfixed == 1) {
     $('.sesion').animate({top: '-200%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorsesionfixed = 0;
   }
}


// WARNING: REGISTRO
var contadorregistrofixed = 0;
$('.iconoregistroensesion').click(iconoregistroensesion);
$('.iconoregistroheader').click(iconoregistroheader);
$('.iconoregistrocerrar').click(iconoregistrocerrar);

function iconoregistroensesion(){

  if (contadorregistrofixed == 0) {
    $('.registro').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorregistrofixed = 1;
  }
}

function iconoregistroheader(){

  if (contadorregistrofixed == 0) {
    $('.registro').animate({top: '12%'});
    $('.cerrartodo').css({'display': 'block'});
    contadorregistrofixed = 1;
  }
}

function iconoregistrocerrar(){
   if (contadorregistrofixed == 1) {
     $('.registro').animate({top: '-200%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorregistrofixed = 0;
   }
}


// WARNING: Cerrartodo

function cerrartodo(){
   if (contadorfixed == 1) {
     $('.menuizquierdofixed').animate({left: '-100%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorfixed = 0;
   }

   if (contadorsesionfixed == 1) {
     $('.sesion').animate({top: '-200%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorsesionfixed = 0;
   }

   if (contadorregistrofixed == 1) {
     $('.registro').animate({top: '-200%'});
     $('.cerrartodo').css({'display': 'none'});
     contadorregistrofixed = 0;
   }
}

// WARNING: Slider

var contadorimagenes = $('.slider ul li').length;
var contador2 = 1;
for (var i = 1; i <= contadorimagenes; i++) {
  $('.slider ol').append('<li><div class="iconopaginacion"><i class="fas fa-scrubber"></i></div></li>');
}

$('.slider ul li').hide();
$('.slider ul li:first').show();
$('.slider ol li:first').css({'color':'#131311b8'});


$('.slider ol li').click(iconopaginacion);
$('.flechaderecha').click(flechaderecha);
$('.flechaisquierda').click(flechaisquierda);

function iconopaginacion(){
  var contador = $(this).index()+1;

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $(this).css({'color':'#131311b8'});

  contador2 = contador;
}

function flechaderecha(){
  if (contador2 >= contadorimagenes) {
    contador2 = 1;
  }else {
    contador2++;
  }

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador2+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#131311b8'});
}

function flechaisquierda(){
  if (contador2 <= 1) {
    contador2 = contadorimagenes;
  }else {
    contador2--;
  }

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador2+')').fadeIn();

  $('.slider ol li').css({'color':'#7b7b7ab8'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#131311b8'});
}

setInterval(function(){
  flechaderecha();
},6000);


// WARNING: Slider 2

var contadorimagenes2 = $('.slider2 ul li').length;

$('.slider2 ul li').hide();
$('.slider2 ul li:nth-child(-n+1)').show();
var carril1 = 1;


$('.flechaderecha2').click(flechaderecha2);
$('.flechaisquierda2').click(flechaisquierda2);

function flechaderecha2(){
  if (carril1 >= contadorimagenes2) {
    carril1 = 1;
  }else {
    carril1++;
  }

  $('.slider2 ul li').hide();
  $('.slider2 ul li:nth-child('+carril1+')').show();
}

function flechaisquierda2(){
  if (carril1 <= 1) {
    carril1 = contadorimagenes2;
  }else {
    carril1--;
  }

  $('.slider2 ul li').hide();
  $('.slider2 ul li:nth-child('+carril1+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes2 = $('.slider2 ul li').length;

  $('.slider2 ul li').hide();
  $('.slider2 ul li:nth-child(-n+2)').show();
  var carril7681 = 1;
  var carril7682 = 2;

  $('.flechaderecha2').click(flechaderecha7682);
  $('.flechaisquierda2').click(flechaisquierda7682);

  function flechaderecha7682(){
    if (carril7682 >= contador768imagenes2) {
      carril7681 = 1;
      carril7682 = 2;
    }else {
      carril7681++;
      carril7682++;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril7681+')').show();
    $('.slider2 ul li:nth-child('+carril7682+')').toggle();
  }

  function flechaisquierda7682(){
    if (carril7681 <= 1) {
      carril7681 = contador768imagenes2 - 1;
      carril7682 = contador768imagenes2;
    }else {
      carril7681--;
      carril7682--;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril7681+')').toggle();
    $('.slider2 ul li:nth-child('+carril7682+')').show();
  }
}

var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes2 = $('.slider2 ul li').length;

  $('.slider2 ul li').hide();
  $('.slider2 ul li:nth-child(-n+2)').show();
  var carril7681 = 1;
  var carril7682 = 2;

  $('.flechaderecha2').click(flechaderecha7682);
  $('.flechaisquierda2').click(flechaisquierda7682);

  function flechaderecha7682(){
    if (carril7682 >= contador768imagenes2) {
      carril7681 = 1;
      carril7682 = 2;
    }else {
      carril7681++;
      carril7682++;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril7681+')').show();
    $('.slider2 ul li:nth-child('+carril7682+')').toggle();
  }

  function flechaisquierda7682(){
    if (carril7681 <= 1) {
      carril7681 = contador768imagenes2 - 1;
      carril7682 = contador768imagenes2;
    }else {
      carril7681--;
      carril7682--;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril7681+')').toggle();
    $('.slider2 ul li:nth-child('+carril7682+')').show();
  }
}


var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes2 = $('.slider2 ul li').length;

  $('.slider2 ul li:nth-child(-n+3)').show();
  var carril10241 = 1;
  var carril10242 = 2;
  var carril10243 = 3;

  $('.flechaderecha2').click(flechaderecha10242);
  $('.flechaisquierda2').click(flechaisquierda10242);

  function flechaderecha10242(){
    if (carril10243 >= contador1024imagenes2) {
      carril10241 = 1;
      carril10242 = 2;
      carril10243 = 3;
    }else {
      carril10241++;
      carril10242++;
      carril10243++;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril10241+')').show();
    $('.slider2 ul li:nth-child('+carril10242+')').show();
    $('.slider2 ul li:nth-child('+carril10243+')').toggle();
  }

  function flechaisquierda10242(){
    if (carril10241 <= 1) {
      carril10241 = contador1024imagenes2 - 2;
      carril10242 = contador1024imagenes2 - 1;
      carril10243 = contador1024imagenes2;
    }else {
      carril10241--;
      carril10242--;
      carril10243--;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril10241+')').toggle();
    $('.slider2 ul li:nth-child('+carril10242+')').show();
    $('.slider2 ul li:nth-child('+carril10243+')').show();
  }
}


var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes2 = $('.slider2 ul li').length;

  $('.slider2 ul li:nth-child(-n+4)').show();
  var carril12801 = 1;
  var carril12802 = 2;
  var carril12803 = 3;
  var carril12804 = 4;

  $('.flechaderecha2').click(flechaderecha12802);
  $('.flechaisquierda2').click(flechaisquierda12802);

  function flechaderecha12802(){
    if (carril12804 >= contador1280imagenes2) {
      carril12801 = 1;
      carril12802 = 2;
      carril12803 = 3;
      carril12804 = 4;
    }else {
      carril12801++;
      carril12802++;
      carril12803++;
      carril12804++;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril12801+')').show();
    $('.slider2 ul li:nth-child('+carril12802+')').show();
    $('.slider2 ul li:nth-child('+carril12803+')').show();
    $('.slider2 ul li:nth-child('+carril12804+')').toggle(1200);
  }

  function flechaisquierda12802(){
    if (carril12801 <= 1) {
      carril12801 = contador1280imagenes2 - 3;
      carril12802 = contador1280imagenes2 - 2;
      carril12803 = contador1280imagenes2 - 1;
      carril12804 = contador1280imagenes2;
    }else {
      carril12801--;
      carril12802--;
      carril12803--;
      carril12804--;
    }

    $('.slider2 ul li').hide();
    $('.slider2 ul li:nth-child('+carril12801+')').toggle(1200);
    $('.slider2 ul li:nth-child('+carril12802+')').show();
    $('.slider2 ul li:nth-child('+carril12803+')').show();
    $('.slider2 ul li:nth-child('+carril12804+')').show();
  }
}

// WARNING: Slider 3

var contadorimagenes3 = $('.slider3 ul li').length;

$('.slider3 ul li').hide();
$('.slider3 ul li:nth-child(-n+1)').show();
var carril1slider3 = 1;


$('.flechaderecha3').click(flechaderecha3);
$('.flechaisquierda3').click(flechaisquierda3);

function flechaderecha3(){
  if (carril1slider3 >= contadorimagenes3) {
    carril1slider3 = 1;
  }else {
    carril1slider3++;
  }

  $('.slider3 ul li').hide();
  $('.slider3 ul li:nth-child('+carril1slider3+')').show();
}

function flechaisquierda3(){
  if (carril1slider3 <= 1) {
    carril1slider3 = contadorimagenes3;
  }else {
    carril1slider3--;
  }

  $('.slider3 ul li').hide();
  $('.slider3 ul li:nth-child('+carril1slider3+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes3 = $('.slider3 ul li').length;

  $('.slider3 ul li').hide();
  $('.slider3 ul li:nth-child(-n+3)').show();
  var carril7681slider3 = 1;
  var carril7682slider3 = 2;
  var carril7683slider3 = 3;

  $('.flechaderecha3').click(flechaderecha7683);
  $('.flechaisquierda3').click(flechaisquierda7683);

  function flechaderecha7683(){
    if (carril7683slider3 >= contador768imagenes3) {
      carril7681slider3 = 1;
      carril7682slider3 = 2;
      carril7683slider3 = 3;
    }else {
      carril7681slider3++;
      carril7682slider3++;
      carril7683slider3++;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril7681slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7682slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7683slider3+')').toggle();
  }

  function flechaisquierda7683(){
    if (carril7681slider3 <= 1) {
      carril7681slider3 = contador768imagenes3 - 2;
      carril7682slider3 = contador768imagenes3 - 1;
      carril7683slider3 = contador768imagenes3;
    }else {
      carril7681slider3--;
      carril7682slider3--;
      carril7683slider3--;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril7681slider3+')').toggle();
    $('.slider3 ul li:nth-child('+carril7682slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7683slider3+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes3 = $('.slider3 ul li').length;

  $('.slider3 ul li').hide();
  $('.slider3 ul li:nth-child(-n+3)').show();
  var carril7681slider3 = 1;
  var carril7682slider3 = 2;
  var carril7683slider3 = 3;

  $('.flechaderecha3').click(flechaderecha7683);
  $('.flechaisquierda3').click(flechaisquierda7683);

  function flechaderecha7683(){
    if (carril7683slider3 >= contador768imagenes3) {
      carril7681slider3 = 1;
      carril7682slider3 = 2;
      carril7683slider3 = 3;
    }else {
      carril7681slider3++;
      carril7682slider3++;
      carril7683slider3++;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril7681slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7682slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7683slider3+')').toggle();
  }

  function flechaisquierda7683(){
    if (carril7681slider3 <= 1) {
      carril7681slider3 = contador768imagenes3 - 2;
      carril7682slider3 = contador768imagenes3 - 1;
      carril7683slider3 = contador768imagenes3;
    }else {
      carril7681slider3--;
      carril7682slider3--;
      carril7683slider3--;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril7681slider3+')').toggle();
    $('.slider3 ul li:nth-child('+carril7682slider3+')').show();
    $('.slider3 ul li:nth-child('+carril7683slider3+')').show();
  }
}

var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes3 = $('.slider3 ul li').length;

  $('.slider3 ul li:nth-child(-n+4)').show();
  var carril10241slider3 = 1;
  var carril10242slider3 = 2;
  var carril10243slider3 = 3;
  var carril10244slider3 = 4;

  $('.flechaderecha3').click(flechaderecha10243);
  $('.flechaisquierda3').click(flechaisquierda10243);

  function flechaderecha10243(){
    if (carril10244slider3 >= contador1024imagenes3) {
      carril10241slider3 = 1;
      carril10242slider3 = 2;
      carril10243slider3 = 3;
      carril10244slider3 = 4;
    }else {
      carril10241slider3++;
      carril10242slider3++;
      carril10243slider3++;
      carril10244slider3++;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril10241slider3+')').show();
    $('.slider3 ul li:nth-child('+carril10242slider3+')').show();
    $('.slider3 ul li:nth-child('+carril10243slider3+')').show();
    $('.slider3 ul li:nth-child('+carril10244slider3+')').toggle();
  }

  function flechaisquierda10243(){
    if (carril10241slider3 <= 1) {
      carril10241slider3 = contador1024imagenes3 - 3;
      carril10242slider3 = contador1024imagenes3 - 2;
      carril10243slider3 = contador1024imagenes3 - 1;
      carril10244slider3 = contador1024imagenes3;
    }else {
      carril10241slider3--;
      carril10242slider3--;
      carril10243slider3--;
      carril10244slider3--;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril10241slider3+')').toggle();
    $('.slider3 ul li:nth-child('+carril10242slider3+')').show();
    $('.slider3 ul li:nth-child('+carril10243slider3+')').show();
    $('.slider3 ul li:nth-child('+carril10244slider3+')').show();
  }
}

var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes3 = $('.slider3 ul li').length;

  $('.slider3 ul li:nth-child(-n+6)').show();
  var carril12801slider3 = 1;
  var carril12802slider3 = 2;
  var carril12803slider3 = 3;
  var carril12804slider3 = 4;
  var carril12805slider3 = 5;
  var carril12806slider3 = 6;

  $('.flechaderecha3').click(flechaderecha12803);
  $('.flechaisquierda3').click(flechaisquierda12803);

  function flechaderecha12803(){
    if (carril12806slider3 >= contador1280imagenes3) {
      carril12801slider3 = 1;
      carril12802slider3 = 2;
      carril12803slider3 = 3;
      carril12804slider3 = 4;
      carril12805slider3 = 5;
      carril12806slider3 = 6;
    }else {
      carril12801slider3++;
      carril12802slider3++;
      carril12803slider3++;
      carril12804slider3++;
      carril12805slider3++;
      carril12806slider3++;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril12801slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12802slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12803slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12804slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12805slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12806slider3+')').toggle(1200);
  }

  function flechaisquierda12803(){
    if (carril12801slider3 <= 1) {
      carril12801slider3 = contador1280imagenes3 - 5;
      carril12802slider3 = contador1280imagenes3 - 4;
      carril12803slider3 = contador1280imagenes3 - 3;
      carril12804slider3 = contador1280imagenes3 - 2;
      carril12805slider3 = contador1280imagenes3 - 1;
      carril12806slider3 = contador1280imagenes3;
    }else {
      carril12801slider3--;
      carril12802slider3--;
      carril12803slider3--;
      carril12804slider3--;
      carril12805slider3--;
      carril12806slider3--;
    }

    $('.slider3 ul li').hide();
    $('.slider3 ul li:nth-child('+carril12801slider3+')').slideToggle(1200);
    $('.slider3 ul li:nth-child('+carril12802slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12803slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12804slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12805slider3+')').show();
    $('.slider3 ul li:nth-child('+carril12806slider3+')').show();
  }
}




// WARNING: Slider 4

var contadorimagenes4 = $('.slider4 ul li').length;

$('.slider4 ul li').hide();
$('.slider4 ul li:nth-child(-n+1)').show();
var carril1slider4 = 1;


$('.flechaderecha4').click(flechaderecha4);
$('.flechaisquierda4').click(flechaisquierda4);

function flechaderecha4(){
  if (carril1slider4 >= contadorimagenes4) {
    carril1slider4 = 1;
  }else {
    carril1slider4++;
  }

  $('.slider4 ul li').hide();
  $('.slider4 ul li:nth-child('+carril1slider4+')').show();
}

function flechaisquierda4(){
  if (carril1slider4 <= 1) {
    carril1slider4 = contadorimagenes4;
  }else {
    carril1slider4--;
  }

  $('.slider4 ul li').hide();
  $('.slider4 ul li:nth-child('+carril1slider4+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes4 = $('.slider4 ul li').length;

  $('.slider4 ul li').hide();
  $('.slider4 ul li:nth-child(-n+2)').show();
  var carril7681slider4 = 1;
  var carril7682slider4 = 2;

  $('.flechaderecha4').click(flechaderecha7684);
  $('.flechaisquierda4').click(flechaisquierda7684);

  function flechaderecha7684(){
    if (carril7682slider4 >= contador768imagenes4) {
      carril7681slider4 = 1;
      carril7682slider4 = 2;
    }else {
      carril7681slider4++;
      carril7682slider4++;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril7681slider4+')').show();
    $('.slider4 ul li:nth-child('+carril7682slider4+')').toggle();
  }

  function flechaisquierda7684(){
    if (carril7681slider4 <= 1) {
      carril7681slider4 = contador768imagenes4 - 1;
      carril7682slider4 = contador768imagenes4;
    }else {
      carril7681slider4--;
      carril7682slider4--;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril7681slider4+')').toggle();
    $('.slider4 ul li:nth-child('+carril7682slider4+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes4 = $('.slider4 ul li').length;

  $('.slider4 ul li').hide();
  $('.slider4 ul li:nth-child(-n+2)').show();
  var carril7681slider4 = 1;
  var carril7682slider4 = 2;

  $('.flechaderecha4').click(flechaderecha7684);
  $('.flechaisquierda4').click(flechaisquierda7684);

  function flechaderecha7684(){
    if (carril7682slider4 >= contador768imagenes4) {
      carril7681slider4 = 1;
      carril7682slider4 = 2;
    }else {
      carril7681slider4++;
      carril7682slider4++;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril7681slider4+')').show();
    $('.slider4 ul li:nth-child('+carril7682slider4+')').toggle();
  }

  function flechaisquierda7684(){
    if (carril7681slider4 <= 1) {
      carril7681slider4 = contador768imagenes4 - 1;
      carril7682slider4 = contador768imagenes4;
    }else {
      carril7681slider4--;
      carril7682slider4--;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril7681slider4+')').toggle();
    $('.slider4 ul li:nth-child('+carril7682slider4+')').show();
  }
}


var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes4 = $('.slider4 ul li').length;

  $('.slider4 ul li:nth-child(-n+3)').show();
  var carril10241slider4 = 1;
  var carril10242slider4 = 2;
  var carril10243slider4 = 3;

  $('.flechaderecha4').click(flechaderecha10244);
  $('.flechaisquierda4').click(flechaisquierda10244);

  function flechaderecha10244(){
    if (carril10243slider4 >= contador1024imagenes4) {
      carril10241slider4 = 1;
      carril10242slider4 = 2;
      carril10243slider4 = 3;
    }else {
      carril10241slider4++;
      carril10242slider4++;
      carril10243slider4++;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril10241slider4+')').show();
    $('.slider4 ul li:nth-child('+carril10242slider4+')').show();
    $('.slider4 ul li:nth-child('+carril10243slider4+')').toggle();
  }

  function flechaisquierda10244(){
    if (carril10241slider4 <= 1) {
      carril10241slider4 = contador1024imagenes4 - 2;
      carril10242slider4 = contador1024imagenes4 - 1;
      carril10243slider4 = contador1024imagenes4;
    }else {
      carril10241slider4--;
      carril10242slider4--;
      carril10243slider4--;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril10241slider4+')').toggle();
    $('.slider4 ul li:nth-child('+carril10242slider4+')').show();
    $('.slider4 ul li:nth-child('+carril10243slider4+')').show();
  }
}


var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes4 = $('.slider4 ul li').length;

  $('.slider4 ul li:nth-child(-n+4)').show();
  var carril12801slider4 = 1;
  var carril12802slider4 = 2;
  var carril12803slider4 = 3;
  var carril12804slider4 = 4;

  $('.flechaderecha4').click(flechaderecha12804);
  $('.flechaisquierda4').click(flechaisquierda12804);

  function flechaderecha12804(){
    if (carril12804slider4 >= contador1280imagenes4) {
      carril12801slider4 = 1;
      carril12802slider4 = 2;
      carril12803slider4 = 3;
      carril12804slider4 = 4;
    }else {
      carril12801slider4++;
      carril12802slider4++;
      carril12803slider4++;
      carril12804slider4++;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril12801slider4+')').show();
    $('.slider4 ul li:nth-child('+carril12802slider4+')').show();
    $('.slider4 ul li:nth-child('+carril12803slider4+')').show();
    $('.slider4 ul li:nth-child('+carril12804slider4+')').toggle(1200);
  }

  function flechaisquierda12804(){
    if (carril12801slider4 <= 1) {
      carril12801slider4 = contador1280imagenes4 - 3;
      carril12802slider4 = contador1280imagenes4 - 2;
      carril12803slider4 = contador1280imagenes4 - 1;
      carril12804slider4 = contador1280imagenes4;
    }else {
      carril12801slider4--;
      carril12802slider4--;
      carril12803slider4--;
      carril12804slider4--;
    }

    $('.slider4 ul li').hide();
    $('.slider4 ul li:nth-child('+carril12801slider4+')').toggle(1200);
    $('.slider4 ul li:nth-child('+carril12802slider4+')').show();
    $('.slider4 ul li:nth-child('+carril12803slider4+')').show();
    $('.slider4 ul li:nth-child('+carril12804slider4+')').show();
  }
}



// WARNING: Slider 5

var contadorimagenes5 = $('.slider5 ul li').length;

$('.slider5 ul li').hide();
$('.slider5 ul li:nth-child(-n+1)').show();
var carril1slider5 = 1;


$('.flechaderecha5').click(flechaderecha5);
$('.flechaisquierda5').click(flechaisquierda5);

function flechaderecha5(){
  if (carril1slider5 >= contadorimagenes5) {
    carril1slider5 = 1;
  }else {
    carril1slider5++;
  }

  $('.slider5 ul li').hide();
  $('.slider5 ul li:nth-child('+carril1slider5+')').show();
}

function flechaisquierda5(){
  if (carril1slider5 <= 1) {
    carril1slider5 = contadorimagenes5;
  }else {
    carril1slider5--;
  }

  $('.slider5 ul li').hide();
  $('.slider5 ul li:nth-child('+carril1slider5+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes5 = $('.slider5 ul li').length;

  $('.slider5 ul li').hide();
  $('.slider5 ul li:nth-child(-n+2)').show();
  var carril7681slider5 = 1;
  var carril7682slider5 = 2;

  $('.flechaderecha5').click(flechaderecha7685);
  $('.flechaisquierda5').click(flechaisquierda7685);

  function flechaderecha7685(){
    if (carril7682slider5 >= contador768imagenes5) {
      carril7681slider5 = 1;
      carril7682slider5 = 2;
    }else {
      carril7681slider5++;
      carril7682slider5++;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril7681slider5+')').show();
    $('.slider5 ul li:nth-child('+carril7682slider5+')').toggle();
  }

  function flechaisquierda7685(){
    if (carril7681slider5 <= 1) {
      carril7681slider5 = contador768imagenes5 - 1;
      carril7682slider5 = contador768imagenes5;
    }else {
      carril7681slider5--;
      carril7682slider5--;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril7681slider5+')').toggle();
    $('.slider5 ul li:nth-child('+carril7682slider5+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes5 = $('.slider5 ul li').length;

  $('.slider5 ul li').hide();
  $('.slider5 ul li:nth-child(-n+2)').show();
  var carril7681slider5 = 1;
  var carril7682slider5 = 2;

  $('.flechaderecha5').click(flechaderecha7685);
  $('.flechaisquierda5').click(flechaisquierda7685);

  function flechaderecha7685(){
    if (carril7682slider5 >= contador768imagenes5) {
      carril7681slider5 = 1;
      carril7682slider5 = 2;
    }else {
      carril7681slider5++;
      carril7682slider5++;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril7681slider5+')').show();
    $('.slider5 ul li:nth-child('+carril7682slider5+')').toggle();
  }

  function flechaisquierda7685(){
    if (carril7681slider5 <= 1) {
      carril7681slider5 = contador768imagenes5 - 1;
      carril7682slider5 = contador768imagenes5;
    }else {
      carril7681slider5--;
      carril7682slider5--;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril7681slider5+')').toggle();
    $('.slider5 ul li:nth-child('+carril7682slider5+')').show();
  }
}


var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes5 = $('.slider5 ul li').length;

  $('.slider5 ul li:nth-child(-n+3)').show();
  var carril10241slider5 = 1;
  var carril10242slider5 = 2;
  var carril10243slider5 = 3;

  $('.flechaderecha5').click(flechaderecha10245);
  $('.flechaisquierda5').click(flechaisquierda10245);

  function flechaderecha10245(){
    if (carril10243slider5 >= contador1024imagenes5) {
      carril10241slider5 = 1;
      carril10242slider5 = 2;
      carril10243slider5 = 3;
    }else {
      carril10241slider5++;
      carril10242slider5++;
      carril10243slider5++;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril10241slider5+')').show();
    $('.slider5 ul li:nth-child('+carril10242slider5+')').show();
    $('.slider5 ul li:nth-child('+carril10243slider5+')').toggle();
  }

  function flechaisquierda10245(){
    if (carril10241slider5 <= 1) {
      carril10241slider5 = contador1024imagenes5 - 2;
      carril10242slider5 = contador1024imagenes5 - 1;
      carril10243slider5 = contador1024imagenes5;
    }else {
      carril10241slider5--;
      carril10242slider5--;
      carril10243slider5--;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril10241slider5+')').toggle();
    $('.slider5 ul li:nth-child('+carril10242slider5+')').show();
    $('.slider5 ul li:nth-child('+carril10243slider5+')').show();
  }
}


var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes5 = $('.slider5 ul li').length;

  $('.slider5 ul li:nth-child(-n+4)').show();
  var carril12801slider5 = 1;
  var carril12802slider5 = 2;
  var carril12803slider5 = 3;
  var carril12804slider5 = 4;

  $('.flechaderecha5').click(flechaderecha12805);
  $('.flechaisquierda5').click(flechaisquierda12805);

  function flechaderecha12805(){
    if (carril12804slider5 >= contador1280imagenes5) {
      carril12801slider5 = 1;
      carril12802slider5 = 2;
      carril12803slider5 = 3;
      carril12804slider5 = 4;
    }else {
      carril12801slider5++;
      carril12802slider5++;
      carril12803slider5++;
      carril12804slider5++;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril12801slider5+')').show();
    $('.slider5 ul li:nth-child('+carril12802slider5+')').show();
    $('.slider5 ul li:nth-child('+carril12803slider5+')').show();
    $('.slider5 ul li:nth-child('+carril12804slider5+')').toggle(1200);
  }

  function flechaisquierda12805(){
    if (carril12801slider5 <= 1) {
      carril12801slider5 = contador1280imagenes5 - 3;
      carril12802slider5 = contador1280imagenes5 - 2;
      carril12803slider5 = contador1280imagenes5 - 1;
      carril12804slider5 = contador1280imagenes5;
    }else {
      carril12801slider5--;
      carril12802slider5--;
      carril12803slider5--;
      carril12804slider5--;
    }

    $('.slider5 ul li').hide();
    $('.slider5 ul li:nth-child('+carril12801slider5+')').toggle(1200);
    $('.slider5 ul li:nth-child('+carril12802slider5+')').show();
    $('.slider5 ul li:nth-child('+carril12803slider5+')').show();
    $('.slider5 ul li:nth-child('+carril12804slider5+')').show();
  }
}



// WARNING: Slider 6

var contadorimagenes6 = $('.slider6 ul li').length;

$('.slider6 ul li').hide();
$('.slider6 ul li:nth-child(-n+1)').show();
var carril1slider6 = 1;


$('.flechaderecha6').click(flechaderecha6);
$('.flechaisquierda6').click(flechaisquierda6);

function flechaderecha6(){
  if (carril1slider6 >= contadorimagenes6) {
    carril1slider6 = 1;
  }else {
    carril1slider6++;
  }

  $('.slider6 ul li').hide();
  $('.slider6 ul li:nth-child('+carril1slider6+')').show();
}

function flechaisquierda6(){
  if (carril1slider6 <= 1) {
    carril1slider6 = contadorimagenes6;
  }else {
    carril1slider6--;
  }

  $('.slider6 ul li').hide();
  $('.slider6 ul li:nth-child('+carril1slider6+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes6 = $('.slider6 ul li').length;

  $('.slider6 ul li').hide();
  $('.slider6 ul li:nth-child(-n+2)').show();
  var carril7681slider6 = 1;
  var carril7682slider6 = 2;

  $('.flechaderecha6').click(flechaderecha7686);
  $('.flechaisquierda6').click(flechaisquierda7686);

  function flechaderecha7686(){
    if (carril7682slider6 >= contador768imagenes6) {
      carril7681slider6 = 1;
      carril7682slider6 = 2;
    }else {
      carril7681slider6++;
      carril7682slider6++;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril7681slider6+')').show();
    $('.slider6 ul li:nth-child('+carril7682slider6+')').toggle();
  }

  function flechaisquierda7686(){
    if (carril7681slider6 <= 1) {
      carril7681slider6 = contador768imagenes6 - 1;
      carril7682slider6 = contador768imagenes6;
    }else {
      carril7681slider6--;
      carril7682slider6--;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril7681slider6+')').toggle();
    $('.slider6 ul li:nth-child('+carril7682slider6+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes6 = $('.slider6 ul li').length;

  $('.slider6 ul li').hide();
  $('.slider6 ul li:nth-child(-n+2)').show();
  var carril7681slider6 = 1;
  var carril7682slider6 = 2;

  $('.flechaderecha6').click(flechaderecha7686);
  $('.flechaisquierda6').click(flechaisquierda7686);

  function flechaderecha7686(){
    if (carril7682slider6 >= contador768imagenes6) {
      carril7681slider6 = 1;
      carril7682slider6 = 2;
    }else {
      carril7681slider6++;
      carril7682slider6++;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril7681slider6+')').show();
    $('.slider6 ul li:nth-child('+carril7682slider6+')').toggle();
  }

  function flechaisquierda7686(){
    if (carril7681slider6 <= 1) {
      carril7681slider6 = contador768imagenes6 - 1;
      carril7682slider6 = contador768imagenes6;
    }else {
      carril7681slider6--;
      carril7682slider6--;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril7681slider6+')').toggle();
    $('.slider6 ul li:nth-child('+carril7682slider6+')').show();
  }
}


var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes6 = $('.slider6 ul li').length;

  $('.slider6 ul li:nth-child(-n+3)').show();
  var carril10241slider6 = 1;
  var carril10242slider6 = 2;
  var carril10243slider6 = 3;

  $('.flechaderecha6').click(flechaderecha10246);
  $('.flechaisquierda6').click(flechaisquierda10246);

  function flechaderecha10246(){
    if (carril10243slider6 >= contador1024imagenes6) {
      carril10241slider6 = 1;
      carril10242slider6 = 2;
      carril10243slider6 = 3;
    }else {
      carril10241slider6++;
      carril10242slider6++;
      carril10243slider6++;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril10241slider6+')').show();
    $('.slider6 ul li:nth-child('+carril10242slider6+')').show();
    $('.slider6 ul li:nth-child('+carril10243slider6+')').toggle();
  }

  function flechaisquierda10246(){
    if (carril10241slider6 <= 1) {
      carril10241slider6 = contador1024imagenes6 - 2;
      carril10242slider6 = contador1024imagenes6 - 1;
      carril10243slider6 = contador1024imagenes6;
    }else {
      carril10241slider6--;
      carril10242slider6--;
      carril10243slider6--;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril10241slider6+')').toggle();
    $('.slider6 ul li:nth-child('+carril10242slider6+')').show();
    $('.slider6 ul li:nth-child('+carril10243slider6+')').show();
  }
}


var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes6 = $('.slider6 ul li').length;

  $('.slider6 ul li:nth-child(-n+4)').show();
  var carril12801slider6 = 1;
  var carril12802slider6 = 2;
  var carril12803slider6 = 3;
  var carril12804slider6 = 4;

  $('.flechaderecha6').click(flechaderecha12806);
  $('.flechaisquierda6').click(flechaisquierda12806);

  function flechaderecha12806(){
    if (carril12804slider6 >= contador1280imagenes6) {
      carril12801slider6 = 1;
      carril12802slider6 = 2;
      carril12803slider6 = 3;
      carril12804slider6 = 4;
    }else {
      carril12801slider6++;
      carril12802slider6++;
      carril12803slider6++;
      carril12804slider6++;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril12801slider6+')').show();
    $('.slider6 ul li:nth-child('+carril12802slider6+')').show();
    $('.slider6 ul li:nth-child('+carril12803slider6+')').show();
    $('.slider6 ul li:nth-child('+carril12804slider6+')').toggle(1200);
  }

  function flechaisquierda12806(){
    if (carril12801slider6 <= 1) {
      carril12801slider6 = contador1280imagenes6 - 3;
      carril12802slider6 = contador1280imagenes6 - 2;
      carril12803slider6 = contador1280imagenes6 - 1;
      carril12804slider6 = contador1280imagenes6;
    }else {
      carril12801slider6--;
      carril12802slider6--;
      carril12803slider6--;
      carril12804slider6--;
    }

    $('.slider6 ul li').hide();
    $('.slider6 ul li:nth-child('+carril12801slider6+')').toggle(1200);
    $('.slider6 ul li:nth-child('+carril12802slider6+')').show();
    $('.slider6 ul li:nth-child('+carril12803slider6+')').show();
    $('.slider6 ul li:nth-child('+carril12804slider6+')').show();
  }
}




// WARNING: Slider 7

var contadorimagenes7 = $('.slider7 ul li').length;

$('.slider7 ul li').hide();
$('.slider7 ul li:nth-child(-n+2)').show();
var carril1slider7 = 1;
var carril2slider7 = 2;


$('.flechaderecha7').click(flechaderecha7);
$('.flechaisquierda7').click(flechaisquierda7);

function flechaderecha7(){
  if (carril2slider7 >= contadorimagenes7) {
    carril1slider7 = 1;
    carril2slider7 = 2;
  }else {
    carril1slider7++;
    carril1slider7++;
    carril2slider7++;
    carril2slider7++;
  }

  $('.slider7 ul li').hide();
  $('.slider7 ul li:nth-child('+carril1slider7+')').show();
  $('.slider7 ul li:nth-child('+carril2slider7+')').toggle();
}

function flechaisquierda7(){
  if (carril1slider7 <= 1) {
    carril1slider7 = contadorimagenes7 - 1;
    carril2slider7 = contadorimagenes7;
  }else {
    carril1slider7--;
    carril1slider7--;
    carril2slider7--;
    carril2slider7--;
  }

  $('.slider7 ul li').hide();
  $('.slider7 ul li:nth-child('+carril1slider7+')').toggle();
  $('.slider7 ul li:nth-child('+carril2slider7+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes7 = $('.slider7 ul li').length;

  $('.slider7 ul li').hide();
  $('.slider7 ul li:nth-child(-n+3)').show();
  var carril7681slider7 = 1;
  var carril7682slider7 = 2;
  var carril7683slider7 = 3;

  $('.flechaderecha7').click(flechaderecha7687);
  $('.flechaisquierda7').click(flechaisquierda7687);

  function flechaderecha7687(){
    if (carril7683slider7 >= contador768imagenes7) {
      carril7681slider7 = 1;
      carril7682slider7 = 2;
      carril7683slider7 = 3;
    }else {
      carril7681slider7++;
      carril7681slider7++;
      carril7681slider7++;
      carril7682slider7++;
      carril7682slider7++;
      carril7682slider7++;
      carril7683slider7++;
      carril7683slider7++;
      carril7683slider7++;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril7681slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7682slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7683slider7+')').toggle();
  }

  function flechaisquierda7687(){
    if (carril7681slider7 <= 1) {
      carril7681slider7 = contador768imagenes7 - 2;
      carril7682slider7 = contador768imagenes7 - 1;
      carril7683slider7 = contador768imagenes7;
    }else {
      carril7681slider7--;
      carril7681slider7--;
      carril7681slider7--;
      carril7682slider7--;
      carril7682slider7--;
      carril7682slider7--;
      carril7683slider7--;
      carril7683slider7--;
      carril7683slider7--;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril7681slider7+')').toggle();
    $('.slider7 ul li:nth-child('+carril7682slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7683slider7+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes7 = $('.slider7 ul li').length;

  $('.slider7 ul li').hide();
  $('.slider7 ul li:nth-child(-n+3)').show();
  var carril7681slider7 = 1;
  var carril7682slider7 = 2;
  var carril7683slider7 = 3;

  $('.flechaderecha7').click(flechaderecha7687);
  $('.flechaisquierda7').click(flechaisquierda7687);

  function flechaderecha7687(){
    if (carril7683slider7 >= contador768imagenes7) {
      carril7681slider7 = 1;
      carril7682slider7 = 2;
      carril7683slider7 = 3;
    }else {
      carril7681slider7++;
      carril7681slider7++;
      carril7681slider7++;
      carril7682slider7++;
      carril7682slider7++;
      carril7682slider7++;
      carril7683slider7++;
      carril7683slider7++;
      carril7683slider7++;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril7681slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7682slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7683slider7+')').toggle();
  }

  function flechaisquierda7687(){
    if (carril7681slider7 <= 1) {
      carril7681slider7 = contador768imagenes7 - 2;
      carril7682slider7 = contador768imagenes7 - 1;
      carril7683slider7 = contador768imagenes7;
    }else {
      carril7681slider7--;
      carril7681slider7--;
      carril7681slider7--;
      carril7682slider7--;
      carril7682slider7--;
      carril7682slider7--;
      carril7683slider7--;
      carril7683slider7--;
      carril7683slider7--;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril7681slider7+')').toggle();
    $('.slider7 ul li:nth-child('+carril7682slider7+')').show();
    $('.slider7 ul li:nth-child('+carril7683slider7+')').show();
  }
}


var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes7 = $('.slider7 ul li').length;

  $('.slider7 ul li:nth-child(-n+4)').show();
  var carril10241slider7 = 1;
  var carril10242slider7 = 2;
  var carril10243slider7 = 3;
  var carril10244slider7 = 4;

  $('.flechaderecha7').click(flechaderecha10247);
  $('.flechaisquierda7').click(flechaisquierda10247);

  function flechaderecha10247(){
    if (carril10244slider7 >= contador1024imagenes7) {
      carril10241slider7 = 1;
      carril10242slider7 = 2;
      carril10243slider7 = 3;
      carril10244slider7 = 4;
    }else {
      carril10241slider7++;
      carril10241slider7++;
      carril10241slider7++;
      carril10241slider7++;
      carril10242slider7++;
      carril10242slider7++;
      carril10242slider7++;
      carril10242slider7++;
      carril10243slider7++;
      carril10243slider7++;
      carril10243slider7++;
      carril10243slider7++;
      carril10244slider7++;
      carril10244slider7++;
      carril10244slider7++;
      carril10244slider7++;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril10241slider7+')').show();
    $('.slider7 ul li:nth-child('+carril10242slider7+')').show();
    $('.slider7 ul li:nth-child('+carril10243slider7+')').show();
    $('.slider7 ul li:nth-child('+carril10244slider7+')').toggle();
  }

  function flechaisquierda10247(){
    if (carril10241slider7 <= 1) {
      carril10241slider7 = contador1024imagenes7 - 3;
      carril10242slider7 = contador1024imagenes7 - 2;
      carril10243slider7 = contador1024imagenes7 - 1;
      carril10244slider7 = contador1024imagenes7;
    }else {
      carril10241slider7--;
      carril10241slider7--;
      carril10241slider7--;
      carril10241slider7--;
      carril10242slider7--;
      carril10242slider7--;
      carril10242slider7--;
      carril10242slider7--;
      carril10243slider7--;
      carril10243slider7--;
      carril10243slider7--;
      carril10243slider7--;
      carril10244slider7--;
      carril10244slider7--;
      carril10244slider7--;
      carril10244slider7--;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril10241slider7+')').toggle();
    $('.slider7 ul li:nth-child('+carril10242slider7+')').show();
    $('.slider7 ul li:nth-child('+carril10243slider7+')').show();
    $('.slider7 ul li:nth-child('+carril10244slider7+')').show();
  }
}


var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes7 = $('.slider7 ul li').length;

  $('.slider7 ul li:nth-child(-n+6)').show();
  var carril12801slider7 = 1;
  var carril12802slider7 = 2;
  var carril12803slider7 = 3;
  var carril12804slider7 = 4;
  var carril12805slider7 = 5;
  var carril12806slider7 = 6;

  $('.flechaderecha7').click(flechaderecha12807);
  $('.flechaisquierda7').click(flechaisquierda12807);

  function flechaderecha12807(){
    if (carril12806slider7 >= contador1280imagenes7) {
      carril12801slider7 = 1;
      carril12802slider7 = 2;
      carril12803slider7 = 3;
      carril12804slider7 = 4;
      carril12805slider7 = 5;
      carril12806slider7 = 6;
    }else {
      carril12801slider7++;
      carril12801slider7++;
      carril12801slider7++;
      carril12801slider7++;
      carril12801slider7++;
      carril12801slider7++;
      carril12802slider7++;
      carril12802slider7++;
      carril12802slider7++;
      carril12802slider7++;
      carril12802slider7++;
      carril12802slider7++;
      carril12803slider7++;
      carril12803slider7++;
      carril12803slider7++;
      carril12803slider7++;
      carril12803slider7++;
      carril12803slider7++;
      carril12804slider7++;
      carril12804slider7++;
      carril12804slider7++;
      carril12804slider7++;
      carril12804slider7++;
      carril12804slider7++;
      carril12805slider7++;
      carril12805slider7++;
      carril12805slider7++;
      carril12805slider7++;
      carril12805slider7++;
      carril12805slider7++;
      carril12806slider7++;
      carril12806slider7++;
      carril12806slider7++;
      carril12806slider7++;
      carril12806slider7++;
      carril12806slider7++;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril12801slider7+')').toggle(10);
    $('.slider7 ul li:nth-child('+carril12802slider7+')').toggle(600);
    $('.slider7 ul li:nth-child('+carril12803slider7+')').toggle(700);
    $('.slider7 ul li:nth-child('+carril12804slider7+')').toggle(800);
    $('.slider7 ul li:nth-child('+carril12805slider7+')').toggle(900);
    $('.slider7 ul li:nth-child('+carril12806slider7+')').toggle(1200);
  }

  function flechaisquierda12807(){
    if (carril12801slider7 <= 1) {
      carril12801slider7 = contador1280imagenes7 - 5;
      carril12802slider7 = contador1280imagenes7 - 4;
      carril12803slider7 = contador1280imagenes7 - 3;
      carril12804slider7 = contador1280imagenes7 - 2;
      carril12805slider7 = contador1280imagenes7 - 1;
      carril12806slider7 = contador1280imagenes7;
    }else {
      carril12801slider7--;
      carril12801slider7--;
      carril12801slider7--;
      carril12801slider7--;
      carril12801slider7--;
      carril12801slider7--;
      carril12802slider7--;
      carril12802slider7--;
      carril12802slider7--;
      carril12802slider7--;
      carril12802slider7--;
      carril12802slider7--;
      carril12803slider7--;
      carril12803slider7--;
      carril12803slider7--;
      carril12803slider7--;
      carril12803slider7--;
      carril12803slider7--;
      carril12804slider7--;
      carril12804slider7--;
      carril12804slider7--;
      carril12804slider7--;
      carril12804slider7--;
      carril12804slider7--;
      carril12805slider7--;
      carril12805slider7--;
      carril12805slider7--;
      carril12805slider7--;
      carril12805slider7--;
      carril12805slider7--;
      carril12806slider7--;
      carril12806slider7--;
      carril12806slider7--;
      carril12806slider7--;
      carril12806slider7--;
      carril12806slider7--;
    }

    $('.slider7 ul li').hide();
    $('.slider7 ul li:nth-child('+carril12801slider7+')').toggle(1200);
    $('.slider7 ul li:nth-child('+carril12802slider7+')').toggle(900);
    $('.slider7 ul li:nth-child('+carril12803slider7+')').toggle(800);
    $('.slider7 ul li:nth-child('+carril12804slider7+')').toggle(700);
    $('.slider7 ul li:nth-child('+carril12805slider7+')').toggle(600);
    $('.slider7 ul li:nth-child('+carril12806slider7+')').toggle(10);
  }

  setInterval(function(){
    flechaderecha12807();
  },10000);
}



// WARNING: Slider 8

var contadorimagenes8 = $('.slider8 ul li').length;

$('.slider8 ul li').hide();
$('.slider8 ul li:nth-child(-n+1)').show();
var carril1slider8 = 1;


$('.flechaderecha8').click(flechaderecha8);
$('.flechaisquierda8').click(flechaisquierda8);

function flechaderecha8(){
  if (carril1slider8 >= contadorimagenes8) {
    carril1slider8 = 1;
  }else {
    carril1slider8++;
  }

  $('.slider8 ul li').hide();
  $('.slider8 ul li:nth-child('+carril1slider8+')').show();
}

function flechaisquierda8(){
  if (carril1slider8 <= 1) {
    carril1slider8 = contadorimagenes8;
  }else {
    carril1slider8--;
  }

  $('.slider8 ul li').hide();
  $('.slider8 ul li:nth-child('+carril1slider8+')').show();
}


var mediaqueryhorizontal = window.matchMedia("(orientation: landscape)");
if (mediaqueryhorizontal.matches) {

  var contador768imagenes8 = $('.slider8 ul li').length;

  $('.slider8 ul li').hide();
  $('.slider8 ul li:nth-child(-n+3)').show();
  var carril7681slider8 = 1;
  var carril7682slider8 = 2;
  var carril7683slider8 = 3;

  $('.flechaderecha8').click(flechaderecha7688);
  $('.flechaisquierda8').click(flechaisquierda7688);

  function flechaderecha7688(){
    if (carril7683slider8 >= contador768imagenes8) {
      carril7681slider8 = 1;
      carril7682slider8 = 2;
      carril7683slider8 = 3;
    }else {
      carril7681slider8++;
      carril7682slider8++;
      carril7683slider8++;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril7681slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7682slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7683slider8+')').toggle();
  }

  function flechaisquierda7688(){
    if (carril7681slider8 <= 1) {
      carril7681slider8 = contador768imagenes8 - 2;
      carril7682slider8 = contador768imagenes8 - 1;
      carril7683slider8 = contador768imagenes8;
    }else {
      carril7681slider8--;
      carril7682slider8--;
      carril7683slider8--;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril7681slider8+')').toggle();
    $('.slider8 ul li:nth-child('+carril7682slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7683slider8+')').show();
  }
}


var mediaquery768 = window.matchMedia("(min-width: 768px)");
if (mediaquery768.matches) {

  var contador768imagenes8 = $('.slider8 ul li').length;

  $('.slider8 ul li').hide();
  $('.slider8 ul li:nth-child(-n+3)').show();
  var carril7681slider8 = 1;
  var carril7682slider8 = 2;
  var carril7683slider8 = 3;

  $('.flechaderecha8').click(flechaderecha7688);
  $('.flechaisquierda8').click(flechaisquierda7688);

  function flechaderecha7688(){
    if (carril7683slider8 >= contador768imagenes8) {
      carril7681slider8 = 1;
      carril7682slider8 = 2;
      carril7683slider8 = 3;
    }else {
      carril7681slider8++;
      carril7682slider8++;
      carril7683slider8++;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril7681slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7682slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7683slider8+')').toggle();
  }

  function flechaisquierda7688(){
    if (carril7681slider8 <= 1) {
      carril7681slider8 = contador768imagenes8 - 2;
      carril7682slider8 = contador768imagenes8 - 1;
      carril7683slider8 = contador768imagenes8;
    }else {
      carril7681slider8--;
      carril7682slider8--;
      carril7683slider8--;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril7681slider8+')').toggle();
    $('.slider8 ul li:nth-child('+carril7682slider8+')').show();
    $('.slider8 ul li:nth-child('+carril7683slider8+')').show();
  }
}

var mediaquery1024 = window.matchMedia("(min-width: 1024px)");
if (mediaquery1024.matches) {

  var contador1024imagenes8 = $('.slider8 ul li').length;

  $('.slider8 ul li:nth-child(-n+4)').show();
  var carril10241slider8 = 1;
  var carril10242slider8 = 2;
  var carril10243slider8 = 3;
  var carril10244slider8 = 4;

  $('.flechaderecha8').click(flechaderecha10248);
  $('.flechaisquierda8').click(flechaisquierda10248);

  function flechaderecha10248(){
    if (carril10244slider8 >= contador1024imagenes8) {
      carril10241slider8 = 1;
      carril10242slider8 = 2;
      carril10243slider8 = 3;
      carril10244slider8 = 4;
    }else {
      carril10241slider8++;
      carril10242slider8++;
      carril10243slider8++;
      carril10244slider8++;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril10241slider8+')').show();
    $('.slider8 ul li:nth-child('+carril10242slider8+')').show();
    $('.slider8 ul li:nth-child('+carril10243slider8+')').show();
    $('.slider8 ul li:nth-child('+carril10244slider8+')').toggle();
  }

  function flechaisquierda10248(){
    if (carril10241slider8 <= 1) {
      carril10241slider8 = contador1024imagenes8 - 3;
      carril10242slider8 = contador1024imagenes8 - 2;
      carril10243slider8 = contador1024imagenes8 - 1;
      carril10244slider8 = contador1024imagenes8;
    }else {
      carril10241slider8--;
      carril10242slider8--;
      carril10243slider8--;
      carril10244slider8--;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril10241slider8+')').toggle();
    $('.slider8 ul li:nth-child('+carril10242slider8+')').show();
    $('.slider8 ul li:nth-child('+carril10243slider8+')').show();
    $('.slider8 ul li:nth-child('+carril10244slider8+')').show();
  }
}

var mediaquery1280 = window.matchMedia("(min-width: 1280px)");
if (mediaquery1280.matches) {

  var contador1280imagenes8 = $('.slider8 ul li').length;

  $('.slider8 ul li:nth-child(-n+6)').show();
  var carril12801slider8 = 1;
  var carril12802slider8 = 2;
  var carril12803slider8 = 3;
  var carril12804slider8 = 4;
  var carril12805slider8 = 5;
  var carril12806slider8 = 6;

  $('.flechaderecha8').click(flechaderecha12808);
  $('.flechaisquierda8').click(flechaisquierda12808);

  function flechaderecha12808(){
    if (carril12806slider8 >= contador1280imagenes8) {
      carril12801slider8 = 1;
      carril12802slider8 = 2;
      carril12803slider8 = 3;
      carril12804slider8 = 4;
      carril12805slider8 = 5;
      carril12806slider8 = 6;
    }else {
      carril12801slider8++;
      carril12802slider8++;
      carril12803slider8++;
      carril12804slider8++;
      carril12805slider8++;
      carril12806slider8++;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril12801slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12802slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12803slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12804slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12805slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12806slider8+')').toggle(1200);
  }

  function flechaisquierda12808(){
    if (carril12801slider8 <= 1) {
      carril12801slider8 = contador1280imagenes8 - 5;
      carril12802slider8 = contador1280imagenes8 - 4;
      carril12803slider8 = contador1280imagenes8 - 3;
      carril12804slider8 = contador1280imagenes8 - 2;
      carril12805slider8 = contador1280imagenes8 - 1;
      carril12806slider8 = contador1280imagenes8;
    }else {
      carril12801slider8--;
      carril12802slider8--;
      carril12803slider8--;
      carril12804slider8--;
      carril12805slider8--;
      carril12806slider8--;
    }

    $('.slider8 ul li').hide();
    $('.slider8 ul li:nth-child('+carril12801slider8+')').slideToggle(1200);
    $('.slider8 ul li:nth-child('+carril12802slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12803slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12804slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12805slider8+')').show();
    $('.slider8 ul li:nth-child('+carril12806slider8+')').show();
  }
}

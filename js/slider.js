// WARNING: Slider

var contadorimagenes = $('.slider ul li').length;
var contador2 = 1;
for (var i = 1; i <= contadorimagenes; i++) {
  $('.slider ol').append('<li><div class="iconopaginacion"><i class="fas fa-scrubber"></i></div></li>');
}

$('.slider ul li').hide();
$('.slider ul li:first').show();
$('.slider ol li:first').css({'color':'#fff126'});


$('.slider ol li').click(iconopaginacion);
$('.flechaderecha').click(flechaderecha);
$('.flechaisquierda').click(flechaisquierda);

function iconopaginacion(){
  var contador = $(this).index()+1;

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador+')').fadeIn();

  $('.slider ol li').css({'color':'blue'});
  $(this).css({'color':'#fff126'});

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

  $('.slider ol li').css({'color':'blue'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#fff126'});
}

function flechaisquierda(){
  if (contador2 <= 1) {
    contador2 = contadorimagenes;
  }else {
    contador2--;
  }

  $('.slider ul li').hide();
  $('.slider ul li:nth-child('+contador2+')').fadeIn();

  $('.slider ol li').css({'color':'blue'});
  $('.slider ol li:nth-child('+contador2+')').css({'color':'#fff126'});
}

setInterval(function(){
  flechaderecha();
},4000);


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

  setInterval(function(){
    flechaisquierda12802();
  },10000);
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

  setInterval(function(){
    flechaderecha12803();
  },15000);
}

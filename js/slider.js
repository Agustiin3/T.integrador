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

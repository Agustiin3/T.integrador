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

$(function()
 {
 $('h2').fadeTo(5000,0.6).fadeTo(5000,1);

  $('h1').fadeOut(5000).fadeIn(5000);
 });

$(function()
 {
  var l = $('button');
  l.mouseover(function(){
   $(this).addClass('q');

  })
  l.mouseout(function(){
   $(this).removeClass('q') ;

 })
 });
$(function()
 {
  var l = $('input');
  l.mouseover(function(){
   $(this).addClass('qq');

  })
  l.mouseout(function(){
   $(this).removeClass('qq') ;

 })
 });

$(document).ready(function(){
  animate();
});

function animate(){
  $(".progress_bar").width("0px");
  $(".progress_bar").animate({
    width: '100%'
  }, 6000, function(){setTimeout('animate()',2500);});
}

WW = $(window).width();
WH = $(window).height();
mn = 769;

function set_params() {
  WH = $(window).height();
  $('article').css({width:$('body').width()-$('aside').width()-1, height:$('aside').height()});
  $('body').height(WH);
  if (WH > mn) {
    $('div.tables').css({height:245+(WH-mn)});
  }
  mt = WH-$('div.refresh_b').offset().top-150;
  $('div.chat').css({'margin-top':mt});
}
set_params();
$(window).resize(function() {
  set_params();
});

$('aside').mCustomScrollbar({
    set_width:320,
    set_height:WH,
    advanced:{
      updateOnBrowserResize: true
    }
  });
$('article').mCustomScrollbar({
    set_height:WH,
    advanced:{
      updateOnBrowserResize: true
    }
});



/*  Responsive Navigation 
----------------------------------------------------------------------------------------*/

$('.menu-btn').click(function() {
  $(this).toggleClass('active');
  $('.main-nav').toggleClass('open');
});


$(function() {
  var o = $(window).height() - 63,
      a = 10,
      n = 537,
      l = $(".header-wrapper"),
      n = $(".main-nav")
      w = $(window).width();

  if(w > 996) {   
    $(window).scroll(function() {
      $(this).scrollTop() > o ? l.addClass("fixed") : l.removeClass("fixed")
    }), 

    $(window).scroll(function() {
      $(this).scrollTop() > a ? (l.addClass("shrink")) : (l.removeClass("shrink"))
    })
  }
  else {
    $(window).scroll(function() {
      $(this).scrollTop() > a ? (l.addClass("shrink")) : (l.removeClass("shrink"))
    })
  }
});


/*  Expand/Collapse (site plan)
---------------------------------------------------------------------------------------*/

$('.site-plan-btn').click(function() {
  
  $(this).toggleClass('active');

  if($(this).hasClass('active')) {
    $(this).text("Close site plan");
  } else {
    $(this).text("View site plan");
  };
  
  $('.site-plan-content').toggleClass('open');
  $('.filters h2').toggleClass('hide');
  $('.filters ul').toggleClass('hide');

});


/*  Equal Columns
---------------------------------------------------------------------------------------*/

equalheight = function(t) {
    var n, e = 0,
        i = 0,
        o = new Array;
    $(t).each(function() {
        if (n = $(this), $(n).height("auto"), topPostion = n.position().top, i != topPostion) {
            for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(e);
            o.length = 0, i = topPostion, e = n.height(), o.push(n)
        } else o.push(n), e = e < n.height() ? n.height() : e;
        for (currentDiv = 0; currentDiv < o.length; currentDiv++) o[currentDiv].height(e)
    })
}, $(window).load(function() {
    equalheight(".equal")
}), $(window).resize(function() {
    equalheight(".equal")
})



/*  Foundation
---------------------------------------------------------------------------------------*/

;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);

var SwiperUi = (function() {
	
	// selectors
	var selectors = {
    html: 'html',
    body: 'body',
  };

  var _initialize = function() {

    if ($(selectors.body).find('.js-swiper').length) {
      var swiper = new Swiper(".js-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
          },
          1140: {
            slidesPerView: 3,
          }
        },
      });
    }
  };

  return {
    init:  _initialize,
  };
	
})();

// Initialize
$(function() {
  SwiperUi.init();
});


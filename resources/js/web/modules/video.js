var Video = (function() {
	
	// selectors
	var selectors = {
    html:  'html',
    body:  'body',
    video: 'js-video',
    wrapElapsed: '.js-video-time-elapsed',
    btnStart: '.js-video-btn-start',
    btnPause: '.js-video-btn-pause',
    btnResume: '.js-video-btn-resume',
  };
  
  // let startRight;
  // let startLeft;
  // let requestIdLeft;
  // let requestIdRight;
  // let dist = 150;

  let isRunning = false;
  var video = document.getElementById(selectors.video);

  // Init
  var _initialize = function() {
    $(selectors.body).on('click', selectors.btnStart, function(){
      _start();
    });

    $(selectors.body).on('click', selectors.btnPause, function(){
      _pause();
    });

    $(selectors.body).on('click', selectors.btnResume, function(){
      _resume();
    });
  };

  // video.addEventListener('play', (event) => {
  //   _play();
  // });

  video.addEventListener('timeupdate', (event) => {
    _update();
  });

  var _start = function() {
    $('#' + selectors.video).removeClass('paused');
    $('#' + selectors.video).removeClass('move');
    $('#' + selectors.video).addClass('move');
    video.currentTime = 0;
    video.play();
    isRunning = true;
  };

  var _pause = function() {
    $('#' + selectors.video).addClass('paused');
    video.pause();
    isRunning = false;
  };

  var _resume = function() {
    $('#' + selectors.video).removeClass('paused');
    video.play();
    isRunning = true;
  };

  var _update = function() {
    $(selectors.wrapElapsed).html(video.currentTime);
  };


  // var _update = function() {


  //   // if (currentTime > 2) {
  //   //   window.requestAnimationFrame(_right);
  //   // }

  //   // if (currentTime >= 12) {
  //   //   window.requestAnimationFrame(_left);
  //   // }

  //   // if (currentTime > 20) {
  //   //   window.requestAnimationFrame(right);
  //   // }

  //   // if (currentTime > 36) {
  //   //   window.requestAnimationFrame(left);
  //   // }

  //   // if (currentTime > 60) {
  //   //   window.requestAnimationFrame(right);
  //   // }

  //   // if (currentTime > 118) {
  //   //   window.requestAnimationFrame(left);
  //   // }
  // };

  // var _moveRight = function() {
  //   let pos = (video.clientWidth/2) + 150;
  //   video.style.transform = 'translateX(-' + pos + 'px)';
  //   video.style.transition = 'transform 3s ease-in';
  // };

  // var _moveLeft = function() {
  //   let pos = (video.clientWidth/2);
  //   video.style.transform = 'translateX(-' + pos + 'px)';
  // };


  // var _right = function(timestamp) {
  //   if (startRight === undefined) {
  //     startRight = timestamp;
  //   }
  //   const elapsed = timestamp - startRight;
  //   let pos = (video.clientWidth/2) + Math.min(0.02 * elapsed, dist);
  //   video.style.transform = 'translateX(-' + pos + 'px)';
  
  //   if (elapsed < (dist * 75)) {
  //     window.requestAnimationFrame(_right);
  //   }
  // };
  
  // var _left = function(timestamp) {
  //   if (startLeft === undefined) {
  //     startLeft = timestamp;
  //   }
  //   const elapsed = timestamp - startLeft;
  //   let pos = (video.clientWidth/2) + (dist - Math.min(0.02 * elapsed, dist));
  //   video.style.transform = 'translateX(-' + pos + 'px)';
  
  //   if (elapsed < (dist * 75)) {
  //     window.requestAnimationFrame(_left);
  //   }
  // };

  return {
    init: _initialize,
  };
	
})();

// Initialize
$(function() {
  Video.init();
});


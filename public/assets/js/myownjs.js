 $(document).ready(function(){
 // Smooth scrolling using jQuery easing
	  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: (target.offset().top - 72)
	        }, 1000, "easeInOutExpo");
	        return false;
	      }
	    }
	  });

	  

	  // Closes responsive menu when a scroll trigger link is clicked
	  $('.js-scroll-trigger').click(function() {
	    $('.classy-menu').removeClass('menu-on');
        $('.navbarToggler').removeClass('active');
	  });


	     /*[ Play video 01]
    ===========================================================*/
    // Gets the video src from the data-src on each button

		var $videoSrc;  
		$('.video-btn').click(function() {
		    $videoSrc = $(this).data( "src" );
		});
		console.log($videoSrc);

		  
		  
		// when the modal is opened autoplay it  
		$('#myModal').on('shown.bs.modal', function (e) {
		    
		// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
		$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
		})
		  


		// stop playing the youtube video when I close the modal
		$('#myModal').on('hide.bs.modal', function (e) {
		    // a poor man's stop video
		    $("#video").attr('src',$videoSrc); 
		}) 
    

})
jQuery(document).ready(function($) {

	$(window).load(function() {

		function animateShape() {
			// ANIMATIONS & COLORS // ----------------------------------
			var animationToPublishers = $("#animation-to-publishers"),
				animationToAdvertisers = $("#animation-to-advertisers"),
				animationToReaders = $("#animation-to-readers");
			var animationToYellow = $("#animation-to-yellow"),
				animationToPink = $("#animation-to-pink"),
				animationToBlue = $("#animation-to-orange");

			var flagYellow = true;
			var flagPink = true;
			var flagBlue = true;

			var	colorYellow = "rgba(253,209,71,0.5)";
			var	colorPink = "rgba(250, 169, 56,0.5)";
			var	colorBlue = "rgba(242, 127, 138,0.5)";

			function animateYellow() {
				animationToPublishers[0].beginElement();
				animationToYellow[0].beginElement();
			}
			function animatePink() {
				animationToAdvertisers[0].beginElement();
				animationToPink[0].beginElement();
			}
			function animateBlue() {
				animationToReaders[0].beginElement();
				animationToBlue[0].beginElement();
			}

			// DIV HEIGHTS // ------------------------------------------
			var h = $(window).height();

			var spacer = $("#spacer").height();
			var shapeSpacer = $(".shape-spacer").height();
			var navbarHeight = 59;
			
			// var carouselHeight = $("#carousel-inside > .item").css("min-height", h-navbarHeight);
			// var carousel = $("#carousel-inside > .item").height();
			
			// var carouseContainerHeight = $("#carousel-inside > .item > .container").css("min-height", (h*0.8)-navbarHeight);
			// var carouseInsideHeight = $("#carousel-inside > .item > .container").height();

			// center elements vertically
			
			//var carouseInsideAlign = $("#carousel-inside > .item > .container").css("padding-top", (h/2 - carouseInsideHeight/2));


			var rethinkingHeight = $("#rethinking").css({"height":h + "px"});
			var rethinking = $("#rethinking").height();
			
			// if (h < 650) {
			// 	$('#carousel-inside > .item > .container > .row > .col-md-12 > img').css({"width":"75%"});
			// };

			var sha = $("#shape").height();
			
			var pub = $("#publishers").offset().top;
			var adv = $("#advertisers").offset().top;
			var rea = $("#readers").offset().top;
			//var ded = $("#dedicated").offset().top;

			var pubHeight = $("#publishers").height();
			var advHeight = $("#advertisers").height();
			var reaHeight = $("#readers").height();
			//var dedHeight = $("#dedicated").height(); 

			$(window).scroll(function(){
			    var y = $(window).scrollTop();		
				if (y < pub + pubHeight + spacer) {
			    	$("#shape").css({"position":"absolute", "top": adv - sha});
			    };
			    if (y >= pub + pubHeight - h && y <= rea) {
			    	$("#shape").css({"position":"fixed", "top": h - sha});
			    };			    
			    if (y > rea + reaHeight + spacer - h) {
			    	$("#shape").css({"position":"absolute", "top": rea + reaHeight - sha});
			    };

			    // yellow
			    if( (y < adv-sha+ shapeSpacer && flagYellow == true) || 
			    	((y < adv-sha+ shapeSpacer && flagPink == false)) ) {
			    	animateYellow();
			    	flagYellow = false;
			    	flagPink = true;
			    	flagBlue = true;
			    }
			    // pink
			    if( (y >= adv-sha + shapeSpacer && y < rea-sha && flagPink == true) || 
			    	(y >= adv-sha + shapeSpacer && y < rea-sha && flagBlue == false) || 
			    	(y >= adv-sha + shapeSpacer && y < rea-sha && flagYellow == false) ){
			    	animatePink();
			    	flagYellow = true;
			    	flagPink = false;
			    	flagBlue = true;
			    }
			    // blue
			    if( (y >= rea-sha && flagBlue == true) || 
			    	(y >= rea-sha && flagPink == false)) {
			    	animateBlue();
			    	flagYellow = true;
			    	flagPink = true;
			    	flagBlue = false;
			    }
			});
		}

	
		$(window).resize(function() {
			animateShape();
		});
		$(window).trigger('resize');
	});
	
});
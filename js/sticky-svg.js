jQuery(document).ready(function($) {

	$(window).load(function() {

		function animateShape() {
			// ANIMATIONS & COLORS // ----------------------------------
			var animationToPublishers = $("#animation-to-publishers"),
				animationToAdvertisers = $("#animation-to-advertisers"),
				animationToReaders = $("#animation-to-readers");
			var animationToYellow = $("#animation-to-yellow"),
				animationToPink = $("#animation-to-pink"),
				animationToOrange = $("#animation-to-orange");

			var flagYellow = true;
			var flagPink = true;
			var flagOrange = true;

			var	colorYellow = "rgba(253,209,71,0.5)";
			var	colorPink = "rgba(250, 169, 56,0.5)";
			var	colorOrange = "rgba(242, 127, 138,0.5)";

			function animateYellow() {
				animationToPublishers[0].beginElement();
				animationToYellow[0].beginElement();
			}
			function animatePink() {
				animationToAdvertisers[0].beginElement();
				animationToPink[0].beginElement();
			}
			function animateOrange() {
				animationToReaders[0].beginElement();
				animationToOrange[0].beginElement();
			}

			// DIV HEIGHTS // ------------------------------------------
			var h = $(window).height();

			var spacer = $("#spacer").height();
			var shapeSpacer = $(".shape-spacer").height();
			var carouselHeight = $("#carousel-inside > .item").css({"min-height":h + "px"});
			var carousel = $("#carousel-inside > .item").height();
			var rethinkingHeight = $("#rethinking").css({"height":h + "px"});
			var rethinking = $("#rethinking").height();
			//var topDivs = carousel + rethinking;

			var sha = $("#shape").height();
			
			var pub = $("#publishers").offset().top;
			var adv = $("#advertisers").offset().top;
			var rea = $("#readers").offset().top;
			var ded = $("#dedicated").offset().top;

			var pubHeight = $("#publishers").height();
			var advHeight = $("#advertisers").height();
			var reaHeight = $("#readers").height();
			var dedHeight = $("#dedicated").height(); 

			console.log("publishers y: "+pub);
			console.log("rethinking y: "+reaHeight);

			$(window).scroll(function(){
			    var y = $(window).scrollTop();		
				if (y < pub + pubHeight + spacer) {
			    	$("#shape").css({"position":"absolute", "top": adv - sha});
			    };
			    if (y >= pub + pubHeight  + spacer - h && y <= rea) {
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
			    	flagOrange = true;
			    }
			    // pink
			    if( (y >= adv-sha + shapeSpacer && y < rea-sha - shapeSpacer && flagPink == true) || 
			    	(y >= adv-sha-sha + shapeSpacer && y < rea-sha && flagOrange == false) || 
			    	(y >= adv-sha + shapeSpacer && y < rea-sha && flagYellow == false) ){
			    	animatePink();
			    	flagYellow = true;
			    	flagPink = false;
			    	flagOrange = true;
			    }
			    // blue
			    if( (y >= rea-sha && flagOrange == true) || (y >= rea-sha && flagPink == false)) {
			    	animateOrange();
			    	flagYellow = true;
			    	flagPink = true;
			    	flagOrange = false;
			    }
			});
		}

	
		$(window).resize(function() {
			animateShape();
		});
		$(window).trigger('resize');
	});
	
});
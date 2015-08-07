jQuery(document).ready(function($) {

	$(window).load(function() {

		var h = $(window).height();
		var w = $(window).width();

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
			//var h = $(window).height();
			//console.log("window height: "+h);

			var navbarHeight = 59;

			var shapeSpacerHeight = $(".shape-spacer").css({"height":h*0.12});
			var shapeSpacer = $(".shape-spacer").height();
			//console.log("shape spacer:"+shapeSpacer);			

			var sha = $("#shape").height();
			//console.log("shape:"+sha);
			
			var pub = $("#publishers").offset().top;
			var adv = $("#advertisers").offset().top;
			var rea = $("#readers").offset().top;

			var pubHeight = $("#publishers").height();
			var advHeight = $("#advertisers").height();
			var reaHeight = $("#readers").height();

			$(window).scroll(function(){
			    var y = $(window).scrollTop();		
				if (y < adv - shapeSpacer) {
			    	$("#shape").css({"position":"absolute", "top": adv - sha - shapeSpacer - navbarHeight*2});
			    };
			    if (y >= pub + pubHeight - h && y <= rea + reaHeight - h) {
			    	$("#shape").css({"position":"fixed", "top": h - sha});
			    };			    
			    if (y > rea + reaHeight - h) {
			    	$("#shape").css({"position":"absolute", "top": rea + reaHeight - sha - navbarHeight});
			    };

			    var yellow = (y < (adv - sha/2));
			    var pinkTop = (y > (adv - sha/2));
			    var pinkBottom = (y < (rea - sha/2));
			    var blue = (y >= (rea - sha/2));

			    // yellow
			    if( (yellow && flagYellow == true) || 
			    	(yellow && flagPink == false) ) {
			    	animateYellow();
			    	flagYellow = false;
			    	flagPink = true;
			    	flagBlue = true;
			    }
			    // pink
			    if( (pinkTop && pinkBottom && flagPink == true) || 
			    	(pinkTop && pinkBottom && flagBlue == false) || 
			    	(pinkTop && pinkBottom && flagYellow == false) ){
			    	animatePink();
			    	flagYellow = true;
			    	flagPink = false;
			    	flagBlue = true;
			    }
			    // blue
			    if( (blue && flagBlue == true) || 
			    	(blue && flagPink == false)) {
			    	animateBlue();
			    	flagYellow = true;
			    	flagPink = true;
			    	flagBlue = false;
			    }
			});
		}

		    // VIMEO // -------------------------------------------------------

    $(function() {
        var iframe = $('#player1')[0];
        var player = $f(iframe);
        var status = $('.status');

        // When the player is ready, add listeners for pause, finish, and playProgress
        player.addEvent('ready', function() {
            status.text('ready');
            
            player.addEvent('pause', onPause);
            player.addEvent('finish', onFinish);
            player.addEvent('playProgress', onPlayProgress);
        });

        // Call the API when a button is pressed
        $('#my-modal-1').bind('click', function() {
            player.api('pause');
        });

        function onPause(id) {
            status.text('paused');
        }

        function onFinish(id) {
            status.text('finished');
        }

        function onPlayProgress(data, id) {
            status.text(data.seconds + 's played');
        }
    }); 
	
		$(window).resize(function() {
			if (w >= 768) {
				animateShape();
			};
			
		});

		$(window).trigger('resize');
	});
	
});
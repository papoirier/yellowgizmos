jQuery(document).ready(function($) {
  "use strict";

  // Navbar left
  // -------------------------------------------------
  	
  	// Variables
		  var dnl                = $(".dash-navbar-left"),
					dnlBtnToggle       = $(".dnl-btn-toggle"),
					dnlBtnCollapse     = $(".dnl-btn-collapse"),
					contentWrap        = $(".content-wrap"),
					contentWrapEffect  = contentWrap.data("effect"),
					windowHeight       = $(window).height() - 61,
					windowWidth        = $(window).width() < 767;

		// Functions
			function cwShowOverflow() {
				if ( windowWidth ) {
						contentWrap.css({
						height : windowHeight ,
						overflow : 'hidden'
					});
					$( 'html, body' ).css( 'overflow', 'hidden' );
				}
			}

			function cwHideOverflow() {
				if ( windowWidth ) {
					contentWrap.css({
						height : 'auto' ,
						overflow : 'auto'
					});
					$( 'html, body' ).css( 'overflow', 'auto' );
				}
			}

			function hamburger() {
				// hamburger menu
			    // $('#nav-icon3').click(function(){
			    //     $(this).toggleClass('open');
			    // });
				$('#nav-icon3').toggleClass('open');
			}

			function dnlShow() {
				dnl.addClass("dnl-show").removeClass("dnl-hide");
				contentWrap.addClass(contentWrapEffect);
				cwShowOverflow();
				//dnlBtnToggle.find("span").removeClass("fa-bars").addClass("fa-arrow-left");
			}

			function dnlHide() {
				dnl.removeClass("dnl-show").addClass("dnl-hide");
				contentWrap.removeClass(contentWrapEffect);
				cwHideOverflow();
				//dnlBtnToggle.find("span").removeClass("fa-arrow-left").addClass("fa-bars");
			}

		// Toggle the edge navbar left
			dnl.addClass("dnl-hide");
			dnlBtnToggle.click( function() {
				if( dnl.hasClass("dnl-hide") ) {
					dnlShow();
					hamburger();
				} else {
					dnlHide();
					hamburger();
				}
			});

		// Collapse the dash navbar left subnav
			dnlBtnCollapse.click( function(e) {
				e.preventDefault();
				if( dnl.hasClass("dnl-collapsed") ) {
					dnl.removeClass("dnl-collapsed");
					contentWrap.removeClass("dnl-collapsed");
					//$(this).find(".dnl-link-icon").removeClass("fa-arrow-right").addClass("fa-arrow-left");
				} else {
					dnl.addClass("dnl-collapsed");
					contentWrap.addClass("dnl-collapsed");
					//$(this).find(".dnl-link-icon").removeClass("fa-arrow-left").addClass("fa-arrow-right");
				}
			});

		// Close left navbar when top navbar opens
		// content-wrap
		function closeOverlay() {
			if ( $( this ).hasClass( 'dnl-overlay' ) ) {
				dnlHide();
				hamburger();
			}
		};
		$( '.content-wrap' ).click(function(e) {
			if ( $( '.content-wrap' ).hasClass( 'dnl-overlay' ) ) {
				hamburger();
			}
			e.preventDefault();
			closeOverlay();
			//hamburger();
		});
		$( '.menu-content a' ).click(function() {
			//e.preventDefault();
			if ( $( '.content-wrap' ).hasClass( 'dnl-overlay' ) ) {
				dnlHide();
				hamburger();
			}
		});

		// Close top navbar when left navbar opens
			dnlBtnToggle.click( function() {
				$( '.navbar-toggle' ).addClass( 'collapsed' );
				$( '.navbar-collapse' ).removeClass( 'in' );
			});

		// Code credit: https://tr.im/CZzf4
			function isMobile() {
			  try { document.createEvent("TouchEvent"); return true; }
			  catch(e){ return false; }
			}


		// Collapse navbar on content click
			$( '.content-wrap' ).click( function() {
				dnlHide();
			});	

		// Auto collapse other opens subnavs
	  	/*$(".dnl-nav > li > a").click( function() {
	  		$( document ).find( 'ul .in' ).collapse( 'hide' );
	  	});*/

});
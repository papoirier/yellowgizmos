jQuery(document).ready(function($) {

    $('.navbar').fadeIn();

    var h = $(window).height();
    var w = $(window).width();

    // intro carousel behavior
    $(function() {
        if (w <= 767) {
            $('#carousel-intro.carousel').carousel({
              interval: false
            });
        } else {
            $('#carousel-intro.carousel').carousel({
              interval: 4000,
              pause: "hover"
            });
        }
    });

    $(window).load(function() {

        // fading in the contents
        $(function() {
            $('#loading').hide();
            $('.content-wrap').fadeIn();
        });

        // height of the navbar
        // removing unused image
        var navbarHeight;
        if (w <= 767) {
            navbarHeight = 44;
            $("#carousel-inside .img-desktop").remove();
        } else {
            navbarHeight = 59;
            $("#carousel-inside .img-mobile").remove();
        }

        // carousel alignment
        var carouselHeight = $("#carousel-inside > .item").css("min-height", h-navbarHeight);
        var carousel = $("#carousel-inside > .item").height();
        var carouseContainerHeight = $("#carousel-inside > .item > .container").css("min-height", (h*0.8)-navbarHeight);
        var carouseInsideHeight = $("#carousel-inside > .item > .container").height();
        console.log("carousel height: "+carouseInsideHeight);
        var carouseInsideAlign;
        if (h <= 900) {
            carouseInsideAlign = $("#carousel-inside > .item > .container").css("padding-top", (h/2 - carouseInsideHeight*0.58));
        } else {
            carouseInsideAlign = $("#carousel-inside > .item > .container").css("padding-top", (h/2 - carouseInsideHeight*0.53));
        };
        /*
        @white:     rgb(237,237,237);
        @blue:      rgb(23,134,185);
        @green:     rgb(48,173,99);
        @yellow:    rgb(253,209,71);
        @pink:      rgb(242, 127, 138);
        @purple:    rgb(162, 92, 186);
        @orange:    rgb(250, 169, 56);
        */
        

        // update text of button (faq, blog)
        function btnTextUpdate() {
            $(".dropdown-menu > li").click(function(){
                $(this).parents(".btn-group").find('.btn').text($(this).text());
                $(this).parents(".btn-group").find('.btn').val($(this).text());
                $(".dropdown-toggle").append("<span class=\"caret\"></span>"); // add back the caret
            });
        }

        // BLOG PAGE // --------------------------------------------------------------
        $(function() {
            // add dropdown menu
            if (w < 767 && ($("body").hasClass("blog-home"))) {
                // add elements
                $("#blog-tabs").addClass("dropdown-menu").wrap("<div class='btn-group'>").before("<button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">ALL<span class=\"caret\"></span></button>");
                // strip class
                $("#blog-tabs > li").click(function(){
                    $("#blog-tabs > li").removeClass("active");
                });
                btnTextUpdate();
            };
        });
        // FAQ PAGE // --------------------------------------------------------------
        $(function() {
            // add dropdown menu
            if (w < 767) {
                // add elements
                $("#tabs-faq").addClass("dropdown-menu").wrap("<div class='btn-group'>").before("<button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">GENERAL<span class=\"caret\"></span></button>");
                // strip class
                $(".dropdown-menu > li").click(function(){
                    $(".dropdown-menu > li").removeClass("active");
                });
                btnTextUpdate();
            }
         });

        // twitter styling
        $("iframe#twitter-widget-0").contents().find('div.footer').remove();
        $("iframe#twitter-widget-0").contents().find('img.u-photo').remove();

        var $font = "'Apercu Regular','Apercu', Helvetica, Georgia";
        var $fontweight = "normal";
        $("iframe#twitter-widget-0").contents().find('head').append('<style>.html, body, h1, h2, h3, blockquote, p, ol, ul, li, img, iframe, button, .tweet-box-button{font-family:'+$font+' !important;font-weight:'+$fontweight+' !important;} .p-author, .e-entry-content, p.e-entry-title{text-align:center !important;} li.tweet{padding-left:0 !important;} p.e-entry-title{font-size:18px !important; line-height:1.2em !important; margin-bottom: 20px !important; min-height:90px !important;} .e-entry-content{min-height:70px !important;} a.permalink{float:none; text-align:center !important;} .header{text-align:center !important;} .p-author{margin-top:-36px; padding-top:36px; margin-bottom:24px;} .p-author a, .p-name{ color: #0B84BB !important;} .header{padding:0 !important;} .twtr-avatar { display: none !important; } }</style>');
    
    });

    // tabs
    $('#myTabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    // phone image carousel
    $(function() {
        $("#in-content").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/placement-in-content.gif");
            $("button").removeClass("active");
            $("button#in-content").addClass("active");
        });
        $("#footer").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/placement-footer.gif");
            $("button").removeClass("active");
            $("button#footer").addClass("active");
        });
        $("#wrapper").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/placement-wrapper.gif");
            $("button").removeClass("active");
            $("button#wrapper").addClass("active");
            console.log("nosl");
        });
    });

    // CONTACT // ------------------------------------------------------------

    // contact form buttons
    $(function() {
        $( "input:radio[value='Publisher']" ).prop('checked',true);
        $("input:radio[value='Publisher']").next().addClass("active");

        $("input:radio[value='Publisher']").click(function(e){
            //e.preventDefault();
            $("span.wpcf7-list-item-label").removeClass("active");
            $("input:radio[value='Publisher']").next().addClass("active");
        });
        $( "input:radio[value='Advertiser']" ).click(function(e){
            //e.preventDefault();
            $("span.wpcf7-list-item-label").removeClass("active");
            $("input:radio[value='Advertiser']").next().addClass("active");
        });
        $( "input:radio[value='Reader']" ).click(function(e){
            //e.preventDefault();
            $("span.wpcf7-list-item-label").removeClass("active");
            $("input:radio[value='Reader']").next().addClass("active");
        });
    });
    // contact form placeholder text
    $(".hear option:first").html('How did you hear about us?*');
    $(".state option:first").html('State (US and Canada only)*');


    // ABOUT // ------------------------------------------------------------

    // about pages carousels
    $('#carousel-publishers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-advertisers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-readers > .carousel-inner > .item:first').addClass('active col-md-offset-1-5');
    $('#carousel-dedicated > .carousel-inner > .item:first').addClass('active');

    // MOBILE CAROUSELS SETUP --------------------------------------------
    
    $("#carousel-intro, #carousel-publishers, #carousel-advertisers, #carousel-readers, #carousel-dedicated").swiperight(function() {  
        $(this).carousel('prev');  
    });  
    $("#carousel-intro, #carousel-publishers, #carousel-advertisers, #carousel-readers, #carousel-dedicated").swipeleft(function() {  
        $(this).carousel('next');  
    }); 

    // ------------------------------------------------------------

    $(window).on("load resize", function(){

        h = $(window).height();
        w = $(window).width();

        // var navbarHeight;
        // if (w <= 767) {
        //     navbarHeight = 44;
        // } else {
        //     navbarHeight = 59;
        // }

        // about pages carousels
        if (w <= 767) {
            $("#carousel-example-generic > .carousel-inner").find(".row").contents().unwrap();
            $("#carousel-example-generic > .carousel-inner").find(".container").contents().unwrap();
        } 
        if ( (w >= 768) && (!$("#carousel-example-generic > div.carousel-inner > div").hasClass("container")) ) {
            $("#carousel-example-generic > div.carousel-inner").wrapInner("<div class='row'>").wrapInner("<div class='container'>");
        } 

        $(".modal-dialog").css("margin-top", h/2 - 506/2);
        
        var rethinkingHeight = $("#rethinking").css({"height":h + "px"});
        var rethinking = $("#rethinking").height();
        var aboutIntroHeight = $("#about-intro").height();
        $("#about-intro").css("padding-top", h/2 - aboutIntroHeight*0.65 );

    });

    // SMOOTH SCROLLING // --------------------------------------------

    $(function() {
    $('a[href=#about], a[href=#team], a[href=#blog], a[href=#contact]').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top-57
          }, 500);
          return false;
        }
      }
    });
  });

});
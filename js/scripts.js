jQuery(document).ready(function($) {

    $('.navbar').fadeIn();

    $(window).load(function() {
        show();
    });
    function show() {
        $('#loading').hide();
        $('.content-wrap').fadeIn();
    };

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
    
    $("#carousel-intro, #carousel-publishers, #carousel-advertisers, #carousel-readers").swiperight(function() {  
        $(this).carousel('prev');  
    });  
    $("#carousel-intro, #carousel-publishers, #carousel-advertisers, #carousel-readers").swipeleft(function() {  
        $(this).carousel('next');  
    }); 

    
    $(window).load(function() {

        var navbarHeight;
        var h = $(window).height();
        var w = $(window).width();
        if (w <= 767) {
            navbarHeight = 44;
        } else {
            navbarHeight = 59;
        }

        // BLOG // --------------------------------------------------------------
        $(function() {
            if (w < 767 && ($("body").hasClass("blog"))) {
                // add elements
                $("#blog-tabs").addClass("dropdown-menu").wrap("<div class='btn-group'>").before("<button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">ALL<span class=\"caret\"></span></button>");
                // strip classes
                $("#blog-tabs > li").removeClass();
                // update button text
                $(".dropdown-menu li a").click(function(){
                    $(this).parents(".btn-group").find('.btn').text($(this).text());
                    $(this).parents(".btn-group").find('.btn').val($(this).text());
                    $(".dropdown-toggle").append("<span class=\"caret\"></span>"); // add back the caret
                });
            };
        });
                
        var carouselHeight = $("#carousel-inside > .item").css("min-height", h-navbarHeight);
        var carousel = $("#carousel-inside > .item").height();
        
        var carouseContainerHeight = $("#carousel-inside > .item > .container").css("min-height", (h*0.8)-navbarHeight);
        var carouseInsideHeight = $("#carousel-inside > .item > .container").height();
        console.log("carousel height: "+carouseInsideHeight);
        var carouseInsideAlign;
        if (h <= 710) {
            carouseInsideAlign = $("#carousel-inside > .item > .container").css("padding-top", (h/2 - carouseInsideHeight*0.6));
        } else {
            carouseInsideAlign = $("#carousel-inside > .item > .container").css("padding-top", (h/2 - carouseInsideHeight*0.5));
        };

        // twitter styling
        $("iframe#twitter-widget-0").contents().find('div.footer').remove();
        $("iframe#twitter-widget-0").contents().find('img.u-photo').remove();

        var $font = "Apercu";
        var $fontweight = "normal";
        $("iframe#twitter-widget-0").contents().find('head').append('<style>.html, body, h1, h2, h3, blockquote, p, ol, ul, li, img, iframe, button, .tweet-box-button{font-family:'+$font+' !important;font-weight:'+$fontweight+' !important;} .p-author, .e-entry-content, p.e-entry-title{text-align:center !important;} li.tweet{padding-left:0 !important;} p.e-entry-title{font-size:18px !important; line-height:1.2em !important; margin-bottom: 36px !important; min-height:70px !important;} .e-entry-content{min-height:70px !important;} a.permalink{float:none; text-align:center !important;} .header{text-align:center !important;} .p-author{margin-top:-36px; padding-top:36px; margin-bottom:24px;} .p-author a, .p-name{ color: #0B84BB !important;} .header{padding:0 !important;} }</style>');
    });

    // ------------------------------------------------------------

    $(window).on("load resize", function(){
        // about pages carousels
        var $width = $(window).width();
        var $height = $(window).height();
        if ($width <= 767) {
            $("#carousel-example-generic > .carousel-inner").find(".row").contents().unwrap();
            $("#carousel-example-generic > .carousel-inner").find(".container").contents().unwrap();
        } 
        if ( ($width >= 768) && (!$("#carousel-example-generic > div.carousel-inner > div").hasClass("container")) ) {
            $("#carousel-example-generic > div.carousel-inner").wrapInner("<div class='row'>").wrapInner("<div class='container'>");
        } 

        $(".modal-dialog").css("margin-top", $height/2 - 506/2);
        
        var aboutIntroHeight = $("#about-intro").height();
        $("#about-intro").css("padding-top", $height/2 - aboutIntroHeight*0.65 );

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
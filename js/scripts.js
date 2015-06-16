jQuery(document).ready(function($) {
    
    // hamburger menu
    var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
    });

    // phone image carousel
    $(function() {
        $("#in-content").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/r.png");
            $("button").removeClass("active");
            $("button#in-content").addClass("active");
        });
        $("#footer").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/g.png");
            $("button").removeClass("active");
            $("button#footer").addClass("active");
        });
        $("#wrapper").click(function(e){
            e.preventDefault();
            $("img#phone-screen").attr("src","wp-content/themes/yellowgizmos/img/b.png");
            $("button").removeClass("active");
            $("button#wrapper").addClass("active");
            console.log("nosl");
        });
    });

    // twitter styling
    $(window).load(function() {
        var $font = "Apercu";
        var $font_weight = "normal";

        $("iframe").contents().find('head').append('<style>.html, body, h1, h2, h3, blockquote, p, ol, ul, li, img, iframe, button, .tweet-box-button{font-family:'+$font+' !important;font-weight:'+$font_weight+' !important;} .p-author, .e-entry-content, p.e-entry-title{text-align:center !important;} li.tweet{padding-left:0 !important;}</style>');
        
        $("iframe").contents().find('img.avatar').remove();
        $("iframe").contents().find('div.footer').remove();
        
        var $time;
        $time = $("iframe").contents().find('time');
        $time.detach();
        for (var i = 0; i <= $time.length-1; i++) {
            //console.log($time);
            //$("iframe").contents().find('div.header:eq(i)').append($time[i]);
            // var $test = $("iframe").contents().find('div.header:eq(0)');
            // console.log($test);
        };
    });

    // about pages carousels
    $('#carousel-publishers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-advertisers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-readers > .carousel-inner > .item:first').addClass('active');

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
    });

});
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

    // twitter styling
    $(window).load(function() {

        $("iframe").contents().find('div.footer').remove();
        $("iframe").contents().find('img.u-photo').remove();

        var $font = "Apercu";
        var $fontweight = "normal";
        $("iframe").contents().find('head').append('<style>.html, body, h1, h2, h3, blockquote, p, ol, ul, li, img, iframe, button, .tweet-box-button{font-family:'+$font+' !important;font-weight:'+$fontweight+' !important;} .p-author, .e-entry-content, p.e-entry-title{text-align:center !important;} li.tweet{padding-left:0 !important;} p.e-entry-title{font-size:18px !important; line-height:1.2em !important; margin-bottom: 36px !important; min-height:70px !important;} .e-entry-content{min-height:70px !important;} a.permalink{float:none; text-align:center !important;} .header{text-align:center !important;} .p-author{margin-top:-36px; padding-top:36px; margin-bottom:24px;} .p-author a, .p-name{ color: #0B84BB !important;} .header{padding:0 !important;} }</style>');
    });

    // about pages carousels
    $('#carousel-publishers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-advertisers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-readers > .carousel-inner > .item:first').addClass('active');
    $('#carousel-dedicated > .carousel-inner > .item:first').addClass('active');

    // tabs
    $('#myTabs a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

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
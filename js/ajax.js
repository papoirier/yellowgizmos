jQuery(document).ready(function($) {

	// var postLink = $("#post-list .post-title a");
	// var contents = $("#post-container > .contents")
	 
	// $.ajaxSetup({cache:false});
 //    $(postLink).click(function(event){
	// 	event.preventDefault();
 //        var post_link = $(this).attr("href");
 //        contents.html("content loading");
 //        contents.load(post_link);
 //    return false;
 //    });


/*
    $(function() {

    if(Modernizr.history){

    var newHash      = "",
        $mainContent = $("#post-container"),
        baseHeight   = 0,
        $el;
    
    $("#post-list > .post-title").delegate("a", "click", function(event) {
    	event.preventDefault();
        _link = $(this).attr("href");
        history.pushState(null, null, _link);
        // $("#post-container > #contents").load(_link);
        loadContent(_link);
        return false;
    });

   function loadContent(href){

        $mainContent.find("#contents").fadeOut(200, function() {
                $mainContent.hide().load(href + " #contents", function() {
                    $mainContent.fadeIn(200, function() {
                            // $pageWrap.animate({
                            //     height: baseHeight + $mainContent.height() + "px"
                            // });
                        });
                    $("#post-list > post-title a").removeClass("current");
                    console.log(href);
                    $("#post-list > .post-title a[href
                    	="+href+"]").addClass("current");
                });
            });
    }
    
    $(window).bind('popstate', function(){
       _link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
       loadContent(_link);
    });

} // otherwise, history is not supported, so nothing fancy here.

    
});
*/

$(function() {

    if(Modernizr.history){

    var newHash      = "",
        $mainContent = $("#post-container"),
        $pageWrap    = $("#blog"),
        baseHeight   = 0,
        $el;
        
    $pageWrap.height($pageWrap.height());
    baseHeight = $pageWrap.height() - $mainContent.height();
    
    $("#post-list").delegate("a", "click", function(event) {
    	event.preventDefault();
        _link = $(this).attr("href");
        history.pushState(null, null, _link);
        loadContent(_link);
        return false;
    });

    function loadContent(href){
        $mainContent
                .find("#contents")
                .fadeOut(200, function() {
                    $mainContent.hide().load(href + "#contents", function() {
                    	$mainContent.wrapInner("<div id='contents'>");
                        $mainContent.fadeIn(200, function() {
                            $pageWrap.animate({
                                //height: baseHeight + $mainContent.height() + "px"
                            });
                        });

                        $("#post-list a").removeClass("current");
                        console.log(href);
                        $("#post-list a[href='"+href+"']").addClass("current");
                    });
                });
    }
    
    $(window).bind('popstate', function(){
       _link = location.pathname.replace(/^.*[\\\/]/, ''); //get filename only
       loadContent(_link);
    });

} // otherwise, history is not supported, so nothing fancy here.

    
});

	
});
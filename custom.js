jQuery(document).ready(function($){
    $(document).scroll(function(){
        $('#site-header').toggleClass('scrolled', $(this).scrollTop() > 160);
    });
});

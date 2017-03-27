jQuery(document).ready(function (){
    jQuery('select#id_currency').chosen({"disable_search_threshold":10,"search_contains":true,"allow_single_deselect":true,"placeholder_text_multiple":"Type or select some options","placeholder_text_single":"Select an option","no_results_text":"Kh\u00f4ng t\u00ecm th\u1ea5y k\u1ebft qu\u1ea3 ph\u00f9 h\u1ee3p"});
});

spnoConflict(function($){

    function mainmenu() {
        $('.sp-menu').spmenu({
            startLevel: 0,
            direction: 'ltr',
            initOffset: {
                x: 0,
                y: 0
            },
            subOffset: {
                x: 0,
                y: 0
            },
            center: 0
        });
    }

    mainmenu();

    $(window).on('resize',function(){
        mainmenu();
    });


});
jQuery(function(){
    jQuery('#camera_wrap_280').camera({
        height: '41%',
        minHeight: '',
        pauseOnClick: false,
        hover: 1,
        fx: 'random',
        loader: 'none',
        pagination: 0,
        thumbnails: 0,
        thumbheight: 75,
        thumbwidth: 100,
        time: 7000,
        transPeriod: 1500,
        alignment: 'center',
        autoAdvance: 1,
        mobileAutoAdvance: 1,
        portrait: 0,
        barDirection: 'leftToRight',
        imagePath: '/modules/mod_slideshowck/images/',
        lightbox: 'mediaboxck',
        fullpage: 0,
        mobileimageresolution: '0',
        navigationHover: true,
        mobileNavHover: true,
        navigation: true,
        playPause: true,
        barPosition: 'bottom',
        container: ''
    });
    jQuery("#vina-carousel-content260").owlCarousel({
        items: 4,
        itemsDesktop: [1170, 4],
        itemsDesktopSmall: [980, 3],
        itemsTablet: [800, 3],
        itemsTabletSmall: [650, 2],
        itemsMobile: [450, 1],
        singleItem: true,
        itemsScaleUp: true,
        slideSpeed: 200,
        paginationSpeed: 800,
        rewindSpeed: 1000,
        autoPlay: true,
        stopOnHover: true,
        navigation: true,
        rewindNav: true,
        scrollPerPage: true,
        pagination: true,
        paginationNumbers: true,
        responsive: true,
        autoHeight: true,
        mouseDrag: true,
        touchDrag: true
    });
    jQuery('#vina-ticker-jshopping164   ').easyTicker({
        direction: 		'up',
        easing: 		'jswing',
        speed: 			'slow',
        interval: 		4000,
        height: 		'auto',
        visible: 		3,
        mousePause: 	1,

        controls: {
            up: '#vina-ticker-jshopping164 .up',
            down: '#vina-ticker-jshopping164 .down',
            toggle: '#vina-ticker-jshopping164 .toggle',
            playText: 'Play',
            stopText: 'Stop'
        },
    });
});


jQuery(document).ready(function ($) {
    $(".megamenucss301 #CSS3-megaMenuToggle").click(function () {
        $(".megamenucss301 .js-megamenu").toggleClass("dropdown-menucssjs-meganav");


    });
    $(window).resize(function () {
        if (document.body.offsetWidth > 768) {
            $(".megamenucss301 .js-megamenu").removeClass("dropdown-menucssjs-meganav");
        }

    });
});
jQuery(document).ready(function(){
    jQuery('.button_buy').click(function(e){
        e.preventDefault();
        var id = jQuery(this).attr('idsp');
        var nsp = jQuery(this).attr('nsp');
       jQuery.ajax({
           url : "/cart/mua-hang/"+id+"/"+nsp+".html",
           type : "GET",
           success : function(data){
               if(data){
                   //jQuery('.top-cart-content').html(data);
                   //jQuery.ajax({
                   //    url: "/cart/mua-hang/get-cart-count.html",
                   //    type : "GET",
                   //    success : function(data1){
                   //        jQuery('#count_products_cart').html(data1);
                   //    }
                   //});
                   location.reload();
               }
               else{
                   jQuery('.top-cart-content').text('<p class="empty">Bạn không có sản phẩm nào trong giỏ hàng của bạn.</p>');
               }
           }
       });
    });
    jQuery('#delete_cart').click(function(e){
        e.preventDefault();
        var id = jQuery(this).attr('idsp');
        jQuery.ajax({
            url : "/cart/xoa-san-pham/"+id+".html",
            success:function(data){
                if(data){
                    //jQuery('.top-cart-content').html(data);
                    //if(jQuery('#top-cart-sidebar').html() == ''){
                    //    jQuery('.top-cart-content').html('<p class="empty">Bạn không có sản phẩm nào trong giỏ hàng của bạn.</p>');
                    //}
                    //jQuery.ajax({
                    //    url: "/cart/mua-hang/get-cart-count.html",
                    //    type : "GET",
                    //    success : function(data1){
                    //        jQuery('#count_products_cart').html(data1);
                    //    }
                    //});
                    location.reload();
                }
            }
        });
    });
    jQuery('#buy_detail').click(function(){
        e.preventDefault();
        var id = jQuery(this).attr('idsp');
        jQuery.ajax({
            url : "/cart/xoa-san-pham/"+id+".html",
            success:function(data){
                if(data){
                    jQuery('.top-cart-content').html(data);
                    if(jQuery('#top-cart-sidebar').html() == ''){
                        jQuery('.top-cart-content').html('<p class="empty">Bạn không có sản phẩm nào trong giỏ hàng của bạn.</p>');
                    }
                    jQuery.ajax({
                        url: "/cart/mua-hang/get-cart-count.html",
                        type : "GET",
                        success : function(data1){
                            jQuery('#count_products_cart').html(data1);
                        }
                    });
                }
            }
        });
    });


});

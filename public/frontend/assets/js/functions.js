/*!
<----------------------------------------
  Theme Name: EnviShare
  Theme URI: http://codexcoder.com/
  Author: codexcoder.com
  Author URI: http://codexcoder.com/
  Description: EnviShare is a Creative Environment & Ecology HTML5 Template.
  Version: 1.0.0
  Tags: bio, charity, crowdfunding, eco, ecological, ecology, environment, environmental, green, green tech, natural, nature, nonprofit, organic, renewable
---------------------------------------->
*/

(function($){
    "use strict";

    //menu top fixed start
    $(function() {
        var fixed_top = $(".header-section");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 125) {
                fixed_top.addClass("menu-fixed animated slideInDown");
                fixed_top.removeClass("slideInUp");
                $('body').addClass("body-padding");
            } else {
                fixed_top.removeClass("menu-fixed slideInDown");
                fixed_top.addClass("slideInUp"); 
                $('body').removeClass("body-padding");
            }
        });
    });

    
    // lightcase 
    $('a[data-rel^=lightcase]').lightcase();


    // menu icon releted
    $(".menu li ul").parent("li").children("a").addClass("dd-icon-down");
    $(".menu li ul ul").parent("li").children("a").addClass("dd-icon-down");
    $(".shop-menu>li .shop-submenu").parent("li").children("a").addClass("dd-icon-down");

    // mobile menu responsive
    $(document).on('click','.header-bar',function(){
        $(".header-bar").toggleClass("close");
        $(".menu").toggleClass("open");
    });

    //mobile drodown menu display
    $('.mobile-menu-area .m-menu li a').on('click', function(e) {
        var element = $(this).parent('li');
        if (element.hasClass('open')) {
            element.removeClass('open');
            element.find('li').removeClass('open');
            element.find('ul').slideUp(1000,"swing");
        }
        else {
            element.addClass('open');
            element.children('ul').slideDown(1000,"swing");
            element.siblings('li').children('ul').slideUp(1000,"swing");
            element.siblings('li').removeClass('open');
            element.siblings('li').find('li').removeClass('open');
            element.siblings('li').find('ul').slideUp(1000,"swing");
        }
    }); 

    // drop down menu width overflow problem fix
    $('ul').parent().hover(function() {
        var menu = $(this).find("ul");
        var menupos = $(menu).offset();

        if (menupos.left + menu.width() > $(window).width()) {
            var newpos = -$(menu).width();
            menu.css({ left: newpos });    
        }
    });


    //Click event to scroll to top
    $('.scrollToTop').on('click',function(){
        $('html, body').animate({scrollTop : 0},500);
        return false;
    });

    //HeaderBGChangeColor
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 500) {
            scrollTop.show();
        } else {
            scrollTop.hide();
        }
    });

    // search & cart option
    $(document).on('click','.search-start, .search-close',function(){
        $(".search-area").toggleClass("open");
    });

    // banner slider
    var swiper = new Swiper('.banner-slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.banner-pagination',
            clickable: true,
        },
        loop: true,
    });

    // campaign slider
    var galleryThumbs = new Swiper('.pagination-slider', {
        spaceBetween: 10,
        slidesPerView: 3,
        // freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        breakpoints: {
            767 : {
                slidesPerView : 2,
            }
        }
    });
    var galleryTop = new Swiper('.campaign-slider', {
        speed: 1200,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        thumbs: {
          swiper: galleryThumbs
        },
    });
    

    
    //Counter Up
    $('.counter').counterUp({
        delay: 10,
        time: 2000
    });

    //Campaign Slider
    var swiper = new Swiper('.campaign-slider-two', {
        slidesPerView: 3,
        spaceBetween: 0,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 1,
            },
        },
        pagination: {
            el: '.campaign-pagination',
            clickable: true,
        },
        loop: true,
    });

    //Testimonial Slider
    var swiper = new Swiper('.testimonial-slider', {
        slidesPerView: 3,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 1,
            },
        },
        pagination: {
            el: '.testimonial-pagination',
            clickable: true,
        },
        loop: true,
    });
    
    //sponsor Slider
    var swiper = new Swiper('.sponsor-slider', {
        slidesPerView: 6,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
         },
        breakpoints: {
            991: {
                slidesPerView: 4,
            },
            575: {
                slidesPerView: 2,
            },
        },
        loop: true,
    });

    //Volunteer Slider
    var swiper = new Swiper('.volunteer-slider', {
        slidesPerView: 3,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 1,
            },
        },
        pagination: {
            el: '.volunteer-pagination',
            clickable: true,
        },
        loop: true,
    });

    //Circle ProgressbarOne
    $(function() {
        var skillLevel1 = jQuery('.first').data('percent');
        $('.first.circle').circleProgress({
            value:  '0.' + skillLevel1,
            fill: {gradient: ['#57cbe1']}
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(skillLevel1 * progress) + '<i>%</i>');
        });
        //Circle ProgressBarTwo
        var skillLevel2 = jQuery('.second').data('percent');
        $('.second.circle').circleProgress({
            value:  '0.' + skillLevel2,
            fill: {gradient: ['#62e0c1']}
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(skillLevel2 * progress) + '<i>%</i>');
        });
        //Circle ProgressBarThree
        var skillLevel3 = jQuery('.third').data('percent');
        $('.third.circle').circleProgress({
            value:  '0.' + skillLevel3,
            fill: {gradient: ['#7fe092']}
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(skillLevel3 * progress) + '<i>%</i>');
        });
    });
        

    
    // skill bar start here
    $(function(){
        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
               width:$(this).attr('data-percent')
            },6000);
        });
    });

    
    //campaign Tabs
    $(function(){
        var tabWrapper = $('.campaign-single .section-wrapper .tab-section'),
        tabMnu = tabWrapper.find('.tab-menu  li'),
        tabContent = tabWrapper.find('.tab-content > .tab-item');
        tabContent.not(':first-child').hide();
        tabMnu.each(function(i){
            $(this).attr('data-tab','tab'+i);
        });
        tabContent.each(function(i){
            $(this).attr('data-tab','tab'+i);
        });
        
        tabMnu.on('click',function(){
            var tabData = $(this).data('tab');
            tabWrapper.find(tabContent).hide();
            tabWrapper.find(tabContent).filter('[data-tab='+tabData+']').show();
        });
        
        $('.tab-menu > li').on('click',function(){
            var before = $('.tab-menu li.active');
            before.removeClass('active');
            $(this).addClass('active');
        });
    });

    // sticky-widget
    $(function() {
        $('.sticky-widget').theiaStickySidebar();
    });

    //Campaign Single
    $(function() {
        $('.donate-amount ul.amount li').on('click',function(){
            var active = $('.donate-amount ul.amount li.active');
            active.removeClass('active');
            $(this).addClass('active');
        });
    });
        

    //Slick Slider
    $(function() {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: false,
            asNavFor: '.slider-nav',
            // autoplay: 5000,
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true,
        });
    });
    

    //shop-widget drodown menu display
    $(function() {
        $('.shop-widget .shop-menu li a').on('click', function(e) {
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(1000,"swing");
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown(1000,"swing");
                element.siblings('li').children('ul').slideUp(1000,"swing");
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(1000,"swing");
            }
        });
    });
    

    // shop cart + - start here
    $(function() {
        var CartPlusMinus = $('.cart-plus-minus');
        CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
        CartPlusMinus.append('<div class="inc qtybutton">+</div>');
        $(".qtybutton").on("click", function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() === "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find("input").val(newVal);
        });
    });
    

    // product view mode change js
    $(function() {
        $('.product-view-mode').on('click', 'a', function (e) {
            e.preventDefault();
            var shopProductWrap = $('.shop-product-wrap');
            var viewMode = $(this).data('target');
            $('.product-view-mode a').removeClass('active');
            $(this).addClass('active');
            shopProductWrap.removeClass('grid list').addClass(viewMode);
        });
    });
    

    // model option start here
    $(function() {
        $('.view-modal').on('click', function () {
            $('.modal').addClass('show');
        });
        $('.close').on('click', function () {
            $('.modal').removeClass('show');
        });
    });

    //Review Tabs
    $('ul.review-nav').on('click', 'li', function (e) {
        e.preventDefault();
        var reviewContent = $('.review-content');
        var viewRev = $(this).data('target');
        $('ul.review-nav li').removeClass('active');
        $(this).addClass('active');
        reviewContent.removeClass('review-content-show description-show').addClass(viewRev);
    });

    // aos js
    $(function() {
        AOS.init();
    });

    
    // wow animation
    new WOW().init();


    // Add smooth scrolling to all links
    $("a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // specified area
            $('html, body').animate({
                scrollTop: $(hash)
                    .offset()
                    .top
            }, 800, function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        }
    });




    // Teamplate Layout

    $(function() {
        jQuery('.demos-toggle').on('click', function() {
            jQuery('body').toggleClass('open');
        });
    });

    // box layout background images change
    $(function(){
        jQuery(".bg-1").click(function(){            
            jQuery("body").css({"background":"url(assets/css/images/bg/01.jpg) no-repeat fixed","background-size":"cover" });
            jQuery("body").addClass("boxed");
        });
        jQuery(".bg-2").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/02.jpg) no-repeat fixed","background-size":"cover"});
        });
        jQuery(".bg-3").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/03.jpg) no-repeat fixed","background-size":"cover" });
        });
        jQuery(".bg-4").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/04.jpg) no-repeat fixed","background-size":"cover"});
        });
        jQuery(".bg-5").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/05.jpg) no-repeat fixed","background-size":"cover"});
        });
        jQuery(".bg-6").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/06.jpg) no-repeat fixed","background-size":"cover"});
        });
        jQuery(".bg-7").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/07.jpg) no-repeat fixed","background-size":"cover"});
        });   
        jQuery(".bg-8").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/bg/08.jpg) no-repeat fixed","background-size":"cover"});
        });      
    });

    // box layout background pattan change
    $(function(){
        jQuery(".pattan-1").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/01.png) repeat fixed"});
        });
        jQuery(".pattan-2").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/02.png) repeat fixed"});
        });
        jQuery(".pattan-3").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/03.png) repeat fixed" });
        });
        jQuery(".pattan-4").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/04.png) repeat fixed"});
        });
        jQuery(".pattan-5").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/05.png) repeat fixed"});
        });
        jQuery(".pattan-6").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/06.png) repeat fixed"});
        });
        jQuery(".pattan-7").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/07.png) repeat fixed"});
        });
        jQuery(".pattan-8").click(function(){
            jQuery("body").addClass("boxed");
            jQuery("body").css({"background":"url(assets/css/images/pattan-bg/08.png) repeat fixed"});
        });
    });

    $(function() {
        function getUrlVars() {
            var vars = [], hash;
            var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
            for(var i = 0; i < hashes.length; i++)
            {
                hash = hashes[i].split('=');
                vars.push(hash[0]);
                vars[hash[0]] = hash[1];
            }
            return vars;
        }
        var companyName = getUrlVars()["demo"];

        
        if(companyName === 'boxed'){
            jQuery("body").addClass("boxed");
        }
        else if (companyName === 'wide') {
            jQuery("body").removeClass("boxed");
        }

        jQuery(document).ready(function(){
            jQuery( '.triggar-btn' ).click(function() {
                jQuery('.layout-palate').toggleClass("triggar-on");
            });
        });

        // theme color layout
        jQuery(document).ready(function(){
            jQuery( '.color-btn' ).click(function() {
                jQuery('.color-palate').toggleClass("triggar-color");
            });
            
        });
    });
}(jQuery));
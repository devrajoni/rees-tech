
$(document).ready(function(){
    $('.owl-carousel').each(function(){
        var
            $this = $(this),
            item = $this.data("item");
            item2 = $this.data("item2");
        $(this).owlCarousel({       
            loop:true,
            margin:30,
            nav:true,
            autoplay:true,
            autoplayTimeout:3000,
            navText:
                [
                    "<i class='fa fa-arrow-left'></i>",
                    "<i class='fa fa-arrow-right'></i>"
                ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:item2
                },
                1000:{
                    items:item
                }
            }
        }) 
    });
});


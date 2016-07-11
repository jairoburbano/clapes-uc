(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        windowHeight	= $window.height();
    function menuMobile() {
        var menu = $('.menu--bottom'),
            icon = $('.menu__icon');
        if(windowSize < 1025) {
            menu.css('heihgt', windowHeight);
            icon.click(function() {
                menu.stop().slideToggle();
            });
        }
    }
    function slider() {
        var slider = $('.js-slider'),
            video = $('.js-video');
        slider.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                manualControls: ".slide__control.control-slide .slide__item"
            });
        });
        video.each(function() {
            var $this = $(this);
            $this.flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                manualControls: ".slide__control.control-video .slide__item",
                start: function(slider) {
                    var featured = slider.find('.js-video-item');

                    featured.each(function() {
                        var $el       = $(this),
                            featuredWidth   = $el.width(), //Ancho del bloque
                            featuredHeight  = $el.height(), // Alto del bloque
                            featuredCover   = $el.find('img'), // Buscamos la imagen de cover
                            featuredCall    = $el.find('.js-video-call'); // Buscamos el cta

                        featuredCall.on('click', function() {
                            var $this       = $(this), // Guardamos este elemento en una variable para fácil acceso
                                platform    = $this.attr('rel'), //Tipo de plataforma
                                $document   = $(document);

                            // Detenemos el slide si le damos click aun video
                            slider.flexslider('stop');

                            $el.width(featuredWidth); // Le colocamos al bloque completo el ancho
                            $el.height(featuredHeight); // Aquí colocamos el alto
                            featuredCover.fadeOut(100); //Desaparecemos la imagen de cover
                            featuredCall.fadeOut(100); // Desaparecemos la llamada

                            $document.on('click', '#'+this.id, function() {
                                // Create an iFrame with autoplay set to true
                                switch(platform) {
                                    case 'youtube':
                                        var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                                        break;
                                    case 'vimeo':
                                        var iframe_url  = "https://player.vimeo.com/video/"+ this.id +"?color=ffffff&byline=0&portrait=0&autoplay=1";
                                        break;
                                }

                                // The height and width of the iFrame should be the same as parent
                                var iframe = $('<iframe/>', {'frameborder': '0', 'src': iframe_url, 'width': featuredWidth, 'height': featuredHeight, 'allowfullscreen': 'allowfullscreen' });

                                // Replace the YouTube thumbnail with YouTube HTML5 Player
                                $this.parent().append(iframe);
                            });
                        });
                    });
                },
                before: function(slider) {
                    slider.find('iframe').remove();
                    slider.find('.slide__item__video__frame img').show();
                    slider.find('.slide__item__video__frame .js-video-call').show();
                }
            });
        });
    }
    function accordeon() {
        var tab = $('.tab'),
            accordeon = $('.accordeon'),
            sidebar = $('.sidebar');
        tab.click(function() {
            accordeon.stop().slideToggle();
            sidebar.toggleClass('active');
        });
    }
    function newsItem() {
        if($('html').hasClass('no-touch')) {
            var item = $('.news__item');
            item.each(function() {
                var altura = $(this).find('.news__item__content').outerHeight();
                $(this).find('.news__item__content').css('height', altura);
            });
            item.hover(function() {
                $(this).find('.news__item__text').stop().slideToggle(200);
            });
        }
    }
    function smoothScroll() {
        $('a[href^="#"]').on('click',function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    }
    function newsletter() {
        var icon = $('.menu__newsletter');
        icon.click(function() {
            $('html, body').animate({
                scrollTop: $("#newsletter-mail").offset().top
            }, 2000, function() {
                $('#newsletter-mail').focus();
            });
        });
    }
    function explica() {
        var title = $('.explica__title');
        title.click(function() {
            var $this = $(this);
            $this.parent().find('.explica__text').stop().slideToggle();
            $this.parent().toggleClass('active');
            $this.parent().siblings().find('.explica__text').slideUp();
        });
    }
    function sliderGallery() {
        var slide = $('.js-slider__gallery'),
            slideContent = $('.gallery'),
            fullscreen = $('.js-fullscreen'),
            altura = $window.height(),
            texto = $('.gallery__text p');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-icon-gal-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-gal-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            if(fullscreen.hasClass('open-gallery')) {
                slideContent.removeClass('slider--fullscreen');
                fullscreen.removeClass('open-gallery');
                slide.find('ul li').css('height', 490);
            } else {
                slideContent.addClass('slider--fullscreen');
                fullscreen.addClass('open-gallery');
                slide.find('ul li').css('height', altura);
            }
            setTimeout(function(){ slide.resize(); }, 350);
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function menuUc() {
        $('ul.top-header__list').superfish();
    }
    function videosMobile() {
        if(windowSize < 740) {
            var item = $('.slide__item'),
                icon = $('.js-more-videos'),
                box = $('.js-box .control-video');
            icon.click(function() {
                box.toggleClass('open');
            });
            $('.open').click(function() {
                alert('12313123');
                box.removeClass('open');
            });
        }
    }
    function noticiasTablet() {
        if(windowSize > 740 && windowSize < 1025) {
            var biggestHeight = 0;  
            $('.news--home .news__item__content').each(function(){  
                if($(this).height() > biggestHeight){  
                    biggestHeight = $(this).height();  
                }  
            });  
            $('.news--home .news__item__content').height(biggestHeight);  
        }
    }
    function error404() {
        var error = $('.error404');
        if(windowSize > 740 && windowSize < 1025) {
            error.css('height', windowHeight - 315);
        } else if(windowSize > 1025) {
            error.css('height', windowHeight - 356);
        }
    }
    function dmTabs() {
        var tabTrigger = $('.js-tab-trigger');
        $('.js-tab-trigger:first-child').addClass('active');
        if(windowSize < 740) {
            tabTrigger.change(function() {
                var $this  = $(this),
                    target = $this.val();
                console.log(target);
                $('#'+target).show();
                $('#'+target).siblings('.js-tab-content').hide();
            });
        } else {
            tabTrigger.on('click', function() {
                var $this  = $(this),
                    target = $this.data('tab');
                $this.addClass('active');
                $this.siblings().removeClass('active');
                $('#'+target).show();
                $('#'+target).siblings('.js-tab-content').hide();
            });
        }
    }
    function sliderbox() {
        var slider = $('.slider');
        slider.each(function() {
            var sliderHeight = $(this).height(),
                box = $('.slide--box');
            console.log(sliderHeight);
            if(windowSize > 740) {
                box.css('height', sliderHeight);
            }
        });
    }
    function galleryMobile() {
        if(windowSize < 740) {
            var biggestHeight = 0;  
            $('.slide__item__wrap').each(function(){  
                if($(this).height() > biggestHeight){  
                    biggestHeight = $(this).height();
                }  
            });  
            $('.slide__item__wrap').height(biggestHeight);  
        }
    }
    function tableSpecial() {
        var table = $('.table--special .column'),
            i = 1;
        if(windowSize < 740) {
            $('.column--title .column__row').each(function() {
                var title = $(this).data('title'),
                    newTitle = $('<p class="title__row">'+title+'</p>');
                $('.row-'+i).prepend(newTitle);
                i++;
            });
        }
    }
    function wrapVideo() {
        if ($('.noticias.single').length) {
            $( "iframe" ).wrap( "<div class='videoWrapper'></div>" );
        }
    }
    function lightbox() {
        var button = $('.open-it'),
            lightbox = $('.lightbox__info'),
            close = $('.info__close');
        button.click(function() {
            lightbox.fadeIn();
        });
        close.click(function() {
            lightbox.fadeOut();
        });
    }
    menuMobile();
    slider();
    accordeon();
    smoothScroll();
    newsletter();
    explica();
    sliderGallery();
    popupLinks();
    menuUc();
    videosMobile();
    noticiasTablet();
    error404();
    dmTabs();
    tableSpecial();
    wrapVideo();
    lightbox();
    $(window).load(function() {
        newsItem();
        sliderbox();
        galleryMobile();
    });
    $(window).resize(function() {
        sliderbox();
    });
})(jQuery);

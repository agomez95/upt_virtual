(function($) {

    var scrolltoOffset = $('#header').outerHeight() - 150;

    $(document).on('click', '.scrollto', function(e) {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();

                var scrollto = target.offset().top - scrolltoOffset;

                if ($(this).attr("href") == '#header') {
                    scrollto = 100;
                }

                $('html, body').animate({
                    scrollTop: scrollto
                }, 1500, 'easeInOutExpo');

                return false;
            }
        }
    });

    $(document).ready(function() {
        $('.hamburger').click(function() {
            $('.hamburger').toggleClass('is-active');
            $('.menuppal').toggleClass('is_active');
            $("body").toggleClass("body-hidden");
            return false;
        });

        $('.carousel-inner .carousel-item').first().addClass("active");
    });
    $('.current-menu-parent .menu-item-type-custom').click(function() {
        $('.menuppal').removeClass('is_active');
        $('.hamburger').removeClass('is-active');
        $("body").removeClass("body-hidden");
    });

    $(document).ready(function() {
        $("form.wp-block-search").keypress(function(e) {
            if (e.which == 13) {
                return false;
            }
        });
        $("#wp-block-search__input-1").attr("placeholder", "Buscar en ISUR");

    });

    $(".tab_content").hide();
    $(".tab_content:first").show();
    $("ul.tabs li:first").addClass("active");

    $("ul.tabs li").click(function() {
        $(".tab_content").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading").removeClass("d_active");
        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

    });
    $(".tab_container .tab_drawer_heading:first").addClass("d_active");
    $(".tab_drawer_heading").click(function() {

        $(".tab_content").hide();
        var d_activeTab = $(this).attr("rel");

        if ($(this).hasClass("d_active")) {
            $("#" + d_activeTab).fadeOut();
            $(this).removeClass('d_active');
        } else {
            $("#" + d_activeTab).fadeIn();
            $(".tab_drawer_heading").removeClass("d_active");
            $(this).addClass("d_active");
            var targetOffset = $("#" + d_activeTab).offset().top;
            $('html, body').animate({ scrollTop: targetOffset - 150 }, 500);
        }

        $("ul.tabs li").removeClass("active");
        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");

    });

    $('ul.tabs li').last().addClass("tab_last");


    /* ============ TABS VERTICALES ===============*/
    $(".tab_content_vertical").hide();
    $(".tab_content_vertical:first").show();
    $("ul.tabs_vertical li:first").addClass("active");

    $("ul.tabs_vertical li").click(function() {
        $(".tab_content_vertical").hide();
        var activeTab = $(this).attr("rel");
        $("#" + activeTab).fadeIn();

        $("ul.tabs_vertical li").removeClass("active");
        $(this).addClass("active");

        $(".tab_drawer_heading_vertical").removeClass("d_active");
        $(".tab_drawer_heading_vertical[rel^='" + activeTab + "']").addClass("d_active");

    });

    $(".tab_drawer_heading_vertical").click(function() {

        $(".tab_content_vertical").hide();
        var d_activeTab = $(this).attr("rel");

        if ($(this).hasClass("d_active")) {
            $("#" + d_activeTab).fadeOut();
            $(this).removeClass('d_active');
        } else {
            $("#" + d_activeTab).fadeIn();
            $(".tab_drawer_heading_vertical").removeClass("d_active");
            $(this).addClass("d_active");
            var targetOffset = $("#" + d_activeTab).offset().top;
            $('html, body').animate({ scrollTop: targetOffset - 150 }, 500);
        }

        $("ul.tabs_vertical li").removeClass("active");
        $("ul.tabs_vertical li[rel^='" + d_activeTab + "']").addClass("active");
    });

    $('ul.tabs_vertical li').last().addClass("tab_last");


    $(document).ready(function() {
        if (window.location.hash) {
            var initial_nav = window.location.hash;
            /*if ($(initial_nav).length) {
              var scrollto = $(initial_nav).offset().top - scrolltoOffset;
              $('html, body').animate({
                scrollTop: scrollto
              }, 1500, 'easeInOutExpo');
            }*/
        }

        $('.my-video-links').venobox();
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 130) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    });

    if ($(window).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
    }
    /* SUBMENU MOBILE */
    $(".menuppal .menu-top.menu-item-has-children > a").click(function(event) {
        var subtitle = $(this).parents(".menu-top.menu-item-has-children");
        var submenu = $(subtitle).find(".sub-menu");

        $(".sub-menu").not($(submenu)).slideUp("slow").removeClass("menu-active");
        $(".menu-open").not($(subtitle)).removeClass("menu-open");

        $(subtitle).toggleClass("menu-open");
        $(submenu).slideToggle("slow").toggleClass("menu-active");

        return false;
    });

    /* SUBMENU*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });

    $('.red-educativa-list').owlCarousel({
        autoplay: true,
        dots: false,
        items: 4,
        autoplayTimeout: 12000,
        loop: true,
        nav: true,
        margin: 20,
        responsive: {
            0: {
                items: 1,
                margin: 5
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    $('.cursos-listado').owlCarousel({
        autoplay: true,
        dots: false,
        items: 3,
        autoplayTimeout: 12000,
        loop: true,
        nav: true,
        margin: 26,
        responsive: {
            0: {
                items: 1,
                margin: 5
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

    $('.convenios-list').owlCarousel({
        autoplay: true,
        dots: false,
        items: 2,
        autoplayTimeout: 12000,
        loop: true,
        nav: true,
        margin: 26,
        responsive: {
            0: {
                items: 1,
                margin: 5
            },
            600: {
                items: 2
            },
            1000: {
                items: 2
            }
        }
    });

    $('.portfolio-popup').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });


    Isotope.Item.prototype._create = function() {
        this.id = this.layout.itemGUID++;
        this._transn = {
            ingProperties: {},
            clean: {},
            onEnd: {}
        };
        this.sortData = {};
    };
    Isotope.Item.prototype.layoutPosition = function() {
        this.emitEvent('layout', [this]);
    };
    Isotope.prototype.arrange = function(opts) {
        this.option(opts);
        this._getIsInstant();
        this.filteredItems = this._filter(this.items);
        this._isLayoutInited = true;
    };
    Isotope.LayoutMode.create('none');

    /* filtros */
    var $grid = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'none'
    });
    var filters = {};

    $('.portfolio-flters').on('click', 'li', function(event) {
        var $button = $(event.currentTarget);
        var $buttonGroup = $button.parents('.button-group');
        var filterGroup = $buttonGroup.attr('data-filter-group');
        filters[filterGroup] = $button.attr('data-filter');
        var filterValue = concatValues(filters);
        $grid.isotope({ filter: filterValue });
    });


    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'li', function(event) {
            $buttonGroup.find('.filter-active').removeClass('filter-active');
            var $button = $(event.currentTarget);
            $button.addClass('filter-active');
        });
    });

    function concatValues(obj) {
        var value = '';
        for (var prop in obj) {
            value += obj[prop];
        }
        return value;
    }

    /* filtros docentes */
    $('#ua-diseno .dcentes-list').isotope({
        itemSelector: '.element-item-docente',
        layoutMode: 'none'
    });
    $('#ua-diseno .nav-docentes').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('#ua-diseno .dcentes-list').isotope({ filter: filterValue });
        $('#ua-diseno .nav-docentes li').removeClass('filter-active');
        $(this).addClass('filter-active');
    });

    $('#ua-negocios .dcentes-list').isotope({
        itemSelector: '.element-item-docente',
        layoutMode: 'none'
    });
    $('#ua-negocios .nav-docentes').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('#ua-negocios .dcentes-list').isotope({ filter: filterValue });
        $('#ua-negocios .nav-docentes li').removeClass('filter-active');
        $(this).addClass('filter-active');
    });


    $('#ua-gastronomia .dcentes-list').isotope({
        itemSelector: '.element-item-docente',
        layoutMode: 'none'
    });
    $('#ua-gastronomia .nav-docentes').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('#ua-gastronomia .dcentes-list').isotope({ filter: filterValue });
        $('#ua-gastronomia .nav-docentes li').removeClass('filter-active');
        $(this).addClass('filter-active');
    });

    $('#ua-turismo .dcentes-list').isotope({
        itemSelector: '.element-item-docente',
        layoutMode: 'none'
    });
    $('#ua-turismo .nav-docentes').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('#ua-turismo .dcentes-list').isotope({ filter: filterValue });
        $('#ua-turismo .nav-docentes li').removeClass('filter-active');
        $(this).addClass('filter-active');
    });

    $('#ua-turismo .dcentes-list').isotope({
        itemSelector: '.element-item-docente',
        layoutMode: 'none'
    });
    $('#ua-tecnologias-informacion .nav-docentes').on('click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $('#ua-tecnologias-informacion .dcentes-list').isotope({ filter: filterValue });
        $('#ua-tecnologias-informacion .nav-docentes li').removeClass('filter-active');
        $(this).addClass('filter-active');
    });

})(jQuery);
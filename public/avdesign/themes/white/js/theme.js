(function( $ ) {
    "use strict";

    // Check images loaded
    $.fn.JAS_ImagesLoaded = function( callback ) {
        var JAS_Images = function ( src, callback ) {
            var img = new Image;
            img.onload = callback;
            img.src = src;
        }
        var images = this.find( 'img' ).toArray().map( function( el ) {
            return el.src;
        });
        var loaded = 0;
        $( images ).each(function( i, src ) {
            JAS_Images( src, function() {
                loaded++;
                if ( loaded == images.length ) {
                    callback();
                }
            })
        })
    }

    // Check is mobile
    var isMobile = function() {
        return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);
    }

    // Init slick carousel
    var initCarousel = function() {
        $( '.jas-carousel' ).not( '.slick-initialized' ).slick();

        // Reset the index of image on product variation
        $( 'body' ).on( 'found_variation', '.variations_form', function( ev, variation ) {
            if ( variation && variation.image && variation.image.src && variation.image.src.length > 1 ) {
                $( '.jas-carousel' ).slick( 'slickGoTo', 0 );
                wcInitImageZoom();
            }
        });
    }

    // Init masonry layout
    var initMasonry = function() {
        var el = $( '.jas-masonry' );

        el.each( function( i, val ) {
            var _option = $( this ).data( 'masonry' );

            if ( _option !== undefined ) {
                var _selector = _option.selector,
                    _width    = _option.columnWidth,
                    _layout   = _option.layoutMode;

                $( this ).imagesLoaded( function() {
                    $( val ).isotope( {
                        layoutMode : _layout,
                        itemSelector: _selector,
                        percentPosition: true,
                        masonry: {
                            columnWidth: _width
                        }
                    } );
                });

                $( '.jas-filter a' ).click( function() {
                    var selector = $( this ).data( 'filter' ),
                        parent   = $( this ).parents( '.jas-filter' );

                    $( val ).isotope({ filter: selector });

                    // don't proceed if already selected
                    if ( $( this ).hasClass( 'selected' ) ) {
                        return false;
                    }
                    parent.find( '.selected' ).removeClass( 'selected' );
                    $( this ).addClass( 'selected' );

                    return false;
                });
            }
        });
    }

    // Initialize search form in header.
    var initSearchForm = function() {
        var HS = $( '.header__search' );

        // Open search form
        $( '.sf-open' ).on( 'click', function( e ) {
            e.preventDefault();
            HS.fadeIn();
            HS.find( 'input[type="text"]' ).focus();
        });
        $( '#sf-close' ).on( 'click', function( e ) {
            e.preventDefault();
            HS.fadeOut();
        });
    }

    // Init push on header
    var initPushMenu = function() {
        $( 'a.jas-push-menu-btn' ).on( 'click', function (e) {
            e.preventDefault();
            var mask = '<div class="mask-overlay">';

            $( 'body' ).toggleClass( 'menu-opened' );
            $(mask).hide().appendTo( 'body' ).fadeIn( 'fast' );
            $( '.mask-overlay, .close-menu' ).on( 'click', function() {
                $( 'body' ).removeClass( 'menu-opened' );
                $( '.mask-overlay' ).remove();
            });
        });
    }

    // Accordion mobile menu
    var initDropdownMenu = function() {
        $( '#jas-mobile-menu ul li.has-sub' ).append( '<span class="holder"></span>' );
        $( 'body' ).on('click','.holder',function() {
            var el = $( this ).closest( 'li' );
            if ( el.hasClass( 'open' ) ) {
                el.removeClass( 'open' );
                el.find( 'li' ).removeClass( 'open' );
                el.find( 'ul' ).slideUp();
            } else {
                el.addClass( 'open' );
                el.children( 'ul' ).slideDown();
                el.siblings( 'li' ).children( 'ul' ).slideUp();
                el.siblings( 'li' ).removeClass( 'open' );
                el.siblings( 'li' ).find( 'li' ).removeClass( 'open' );
                el.siblings( 'li' ).find( 'ul' ).slideUp();
            }
        });
    }

    // Sticky menu
    var initStickyMenu = function() {
        if ( JAS_Data_Js != undefined && JAS_Data_Js[ 'header_sticky' ] ) {
            var header          = document.getElementById( 'jas-header' ),
                headerMid       = document.getElementsByClassName( 'header__mid' )[0],
                headerMidHeight = $( '.header__mid' ).outerHeight(),
                headerTopHeight = $( '.header__top' ).outerHeight(),
                headerBotHeight = $( '.header__bot' ).outerHeight(),
                headerHeight    = headerMidHeight + headerTopHeight + headerBotHeight,
                adminBar        = $( '.admin-bar' ).length ? $( '#wpadminbar' ).height() : 0;

            if ( headerMid == undefined ) return;

            header.setAttribute( 'style', 'height:' + headerHeight + 'px' );

            $( window ).scroll( function() {
                if ( $( this ).scrollTop() > headerTopHeight ) {
                    header.classList.add( 'header-sticky' );
                    headerMid.setAttribute( 'style', 'position: fixed;top:' + adminBar + 'px' );
                } else {
                    header.classList.remove( 'header-sticky' );
                    headerMid.removeAttribute( 'style' );
                }
            });
        }
    }

    // Init right to left menu
    var initRTLMenu = function() {
        var menu = $( '.sub-menu li' ), subMenu = menu.find( ' > .sub-menu');
        menu.on( 'mouseenter', function () {
            if ( subMenu.length ) {
                if ( subMenu.outerWidth() > ( $( window ).outerWidth() - subMenu.offset().left ) ) {
                    subMenu.addClass( 'rtl-menu' );
                }
            }
        });
    }

    // Initialize WC quantity adjust.
    var wcQuantityAdjust = function() {
        $( 'body' ).on( 'click', '.quantity .plus', function( e ) {
            var $input    = $( this ).parent().parent().find( 'input.input-text' ),
                $quantity = parseInt( $input.attr( 'max' ) ),
                $step     = parseInt( $input.attr( 'step' ) ),
                $val      = parseInt( $input.val() ),
                $button = $( this ).parent().parent().next().next();

            if ( ( $quantity !== '' ) && ( $quantity <= $val + $step ) ) {
                $( '.quantity .plus' ).css( 'pointer-events', 'none' );
            }

            $input.val( $val + $step );

            $input.trigger( 'change' );
            if ( $( '.btn-atc' ).hasClass( 'atc-popup' ) ) {
                $button.attr( 'data-quantity', $val + $step );
            }
        });
        $( 'body' ).on( 'click', '.quantity .minus', function( e ) {
            var $input  = $( this ).parent().parent().find( 'input.input-text' ),
                $step   = parseInt( $input.attr( 'step' ) ),
                $val    = parseInt( $input.val() ) - $step,
                $button = $( this ).parent().parent().next();

            if ( $val < $step ) $val = $step;
            $input.val( $val );

            $( '.quantity .plus' ).removeAttr( 'style' );

            $input.trigger( 'change' );
            if ( $( '.btn-atc' ).hasClass( 'atc-popup' ) ) {
                $button.attr( 'data-quantity', $val );
            }
        });
    }

    // Back to top button
    var backToTop = function() {
        var el = $( '#jas-backtop' );
        $( window ).scroll(function() {
            if( $( this ).scrollTop() > $( window ).height() ) {
                el.show();
            } else {
                el.hide();
            }
        });
        el.click( function() {
            $( 'body,html' ).animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    }

    // Init Magnific Popup
    var initMagnificPopup = function() {
        if ( $( '.jas-magnific-image' ).length > 0 ) {
            $( '.jas-magnific-image' ).magnificPopup({
                type: 'image',
                image: {
                    verticalFit: true
                },
                mainClass: 'mfp-fade',
                removalDelay: 800,
                callbacks: {
                    beforeOpen: function() {
                        $( '#jas-wrapper' ).after( '<div class="loader"><div class="loader-inner"></div></div>' );
                    },
                    open: function() {
                        $( '.loader' ).remove();
                    },
                }
            });
        }
    }

    // Product quick view
    window._inQuickview = false;
    var initQuickView = function() {
        $( 'body' ).on( 'click', '.btn-quickview', function(e) {
            var _this = $( this ),
                id    = _this.attr( 'data-prod' ),
                data  = { action: 'jas_quickview', product: id };

            $( '#jas-wrapper' ).after( '<div class="loader"><div class="loader-inner"></div></div>' );

            $.post( JASAjaxURL, data, function( response ) {
                $.magnificPopup.open({
                    items: {
                        src: response,
                        type: 'inline',
                    },
                    mainClass: 'mfp-fade',
                    removalDelay: 800
                });

                setTimeout(function() {
                    if ( $( '.product-quickview form' ).hasClass( 'variations_form' ) ) {
                        $( '.product-quickview form.variations_form' ).wc_variation_form();
                        $( '.product-quickview select' ).trigger( 'change' );
                    }
                }, 100);

                $( '.loader' ).remove();

                initCarousel();

                $( '.images' ).imagesLoaded( function() {
                    var imgHeight = $( '.product-quickview .images' ).outerHeight();

                    $( '.product-quickview .jas-row > div' ).css({
                        'height': imgHeight
                    });
                });
            });
            e.preventDefault();
            e.stopPropagation();
            window._inQuickview = true;
        });
    }

    // Extra content on single product ( Help & Shipping - Return )
    var wcExtraContent = function() {
        $( 'body' ).on( 'click', '.jas-wc-help', function(e) {
            $( '#jas-wrapper' ).after( '<div class="loader"><div class="loader-inner"></div></div>' );

            var data = { action: 'jas_shipping_return', '_token': wc_add_to_cart_params.token }

            $.post( JASAjaxURL, data, function( response ) {
                $.magnificPopup.open({
                    items: {
                        src: response
                    },
                });
                $( '.loader' ).remove();
            });
            e.preventDefault();
            e.stopPropagation();
        });
    }

    // Init mini cart on header
    var initMiniCart = function() {
        $( 'body' ).on( 'click', '.jas-icon-cart > a', function (e) {
            e.preventDefault();
            var mask = '<div class="mask-overlay">';

            $( 'body' ).toggleClass( 'cart-opened' );
            $( mask ).hide().appendTo( 'body' ).fadeIn( 'fast' );
            $( '.mask-overlay, .close-cart' ).on( 'click', function() {
                $( 'body' ).removeClass( 'cart-opened' );
                $( '.mask-overlay' ).remove();
            });
        });
    }

    // Refesh mini cart on ajax event
    var refreshMiniCart = function() {
        $.ajax({
            type: 'POST',
            url: JASAjaxURL,
            dataType: 'json',
            headers: { 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
            data: { action: 'load_mini_cart' },
            success: function( data ) {
                if ( data.message != null && $( data.message.error ).length > 0 ) {
                    $( 'body' ).append( '<div class="woocommerce-error">' + data.message.error + '</div>' );
                    $( '.woocommerce-message' ).remove();
                } else {
                    var cartContent = $( '.jas-mini-cart .widget_shopping_cart_content' );
                    if ( data.cart_html.length > 0 ) {
                        cartContent.html( data.cart_html );
                    }

                    $( '.jas-icon-cart .count' ).text( data.cart_total );

                    var mask = '<div class="mask-overlay">';

                    $( 'body' ).toggleClass( 'cart-opened' );
                    $( mask ).hide().appendTo( 'body' ).fadeIn( 'fast' );
                    $( '.mask-overlay, .close-cart' ).on( 'click', function() {
                        $( 'body' ).removeClass( 'cart-opened' );
                        $( '.mask-overlay' ).remove();
                    });
                }
            }
        });
    }

    // Trigger add to cart button
    var initAddToCart = function() {
        var _input = $( '.quantity input' ), _quantity = _input.attr( 'max' );

        if ( _quantity != '' ) {
            _input.bind( 'keyup mouseup change click', function () {
                if ( parseInt( $( this ).val() ) > parseInt( _quantity ) ) {
                    $( '.single_add_to_cart_button' ).addClass( 'disabled' );
                } else {
                    $( '.single_add_to_cart_button' ).removeClass( 'disabled' );
                }
            });
        }

        $( 'body' ).on( 'click', '.atc-slide .single_add_to_cart_button, .wpa_wcpb_add_to_cart', function() {
            var _this = $( this ), _form = _this.parents( 'form' );
            if ( _this.hasClass( 'disabled' ) || $( '.btn-atc' ).hasClass( 'no-ajax' ) ) return;

            $.ajax({
                type: 'POST',
                url: JASSiteURL,
                dataType: 'html',
                data: _form.serialize(),
                cache: false,
                headers: { 'cache-control': 'no-cache', 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
                beforeSend: function() {
                    _this.append( '<i class="fa fa-spinner fa-pulse pa"></i>' );
                },
                success:function() {
                    setTimeout( function() {
                        $( '.fa-spinner' ).remove();
                        $.magnificPopup.close();
                    }, 480)
                    refreshMiniCart();
                }
            });

            return false;
        });

        if ( $( '.cart-moved' ).length > 0 ) {
            $( '.btn-atc' ).appendTo( '.cart-moved' );
        }
    }

    // Switch wc currency
    var initSwitchCurrency = function() {
        $( 'body' ).on( 'click', '.currency-item', function() {
            var currency = $( this ).data( 'currency' );
            $.cookie( 'jas_currency', currency, { path: '/' });
            location.reload();
            $( document.body ).trigger( 'wc_fragment_refresh' );
        });
    }

    // Open video in popup
    var wcInitPopupVideo = function() {
        if ( $( '.p-video' ).length > 0 ) {
            $( '.jas-popup-url' ).magnificPopup({
                disableOn: 0,
                type: 'iframe',
            });

            $( '.jas-popup-mp4' ).magnificPopup({
                disableOn: 0,
                type: 'inline',
            });
        }
    }

    // Init ajax search
    var wcLiveSearch = function() {
        if ( ! $.fn.autocomplete || ( $( '.jas-ajax-search' ).length === 0 ) ) return;

        $( '.jas-ajax-search' ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: JASAjaxURL ,
                    dataType: 'json',
                    data: {
                        key: request.term,
                        action: 'jas_claue_live_search'
                    },
                    success: function( data ) {
                        response( data );
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                window.location = ui.item.url;
            },
            open: function() {
                $( this ).removeClass( 'ui-corner-all' ).addClass( 'ui-corner-top' );
            },
            close: function() {
                $( this ).removeClass( 'ui-corner-top' ).addClass( 'ui-corner-all' );
            }
        }).data( 'ui-autocomplete' )._renderItem = function( ul, item ) {
            return $( '<li class="oh mt__10 pt__10">' )
                .data( 'ui-autocomplete-item', item )
                .attr( 'data-url', item.url )
                .append( "<img class='ajax-result-item fl' src='" + item.thumb + "'><div class='oh pl__15'><a class='ajax-result-item-name' href='" + item.url + "'>" + item.label + "</a><p>" + item.except + "</p></div>" )
                .appendTo( ul );
        };
    }

    // init ajax load
    var initAjaxLoad = function() {
        var button = $( '.jas-ajax-load' );

        button.each( function( i, val ) {
            var _option = $( this ).data( 'load-more' );

            if ( _option !== undefined ) {
                var page      = _option.page,
                    container = _option.container,
                    layout    = _option.layout,
                    isLoading = false,
                    anchor    = $( val ).find( 'a' ),
                    next      = $( anchor ).attr( 'href' ),
                    i         = 2;

                if ( layout == 'loadmore' ) {
                    $( val ).on( 'click', 'a', function( e ) {
                        e.preventDefault();
                        anchor = $( val ).find( 'a' );
                        next   = $( anchor ).attr( 'href' );

                        $( anchor ).html( '<i class="fa fa-circle-o-notch fa-spin"></i>' );

                        getData();
                    });
                } else {
                    var animationFrame = function() {
                        anchor = $( val ).find( 'a' );
                        next   = $( anchor ).attr( 'href' );

                        var bottomOffset = $( '.' + container ).offset().top + $( '.' + container ).height() - $( window ).scrollTop();

                        if ( bottomOffset < window.innerHeight && bottomOffset > 0 && ! isLoading ) {
                            if ( ! next )
                                return;
                            isLoading = true;
                            $( anchor ).html( '<i class="fa fa-circle-o-notch fa-spin"></i>' );

                            getData();
                        }
                    }

                    var scrollHandler = function() {
                        requestAnimationFrame( animationFrame );
                    };

                    $( window ).scroll( scrollHandler );
                }

                var getData = function() {
                    $.get( next + '', function( data ) {
                        var content    = $( '.' + container, data ).wrapInner( '' ).html(),
                            newElement = $( '.' + container, data ).find( '.portfolio-item, .product' );

                        $( content ).imagesLoaded( function() {
                            next = $( anchor, data ).attr( 'href' );
                            $( '.' + container ).append( newElement ).isotope( 'appended', newElement );
                        });

                        $( anchor ).text( JAS_Data_Js['load_more'] );

                        if ( page > i ) {
                            if ( JAS_Data_Js != undefined && JAS_Data_Js[ 'permalink' ] == 'plain' ) {
                                var link = next.replace( /paged=+[0-9]+/gi, 'paged=' + ( i + 1 ) );
                            } else {
                                var link = next.replace( /page\/+[0-9]+\//gi, 'page/' + ( i + 1 ) + '/' );
                            }

                            $( anchor ).attr( 'href', link );
                        } else {
                            $( anchor ).text( JAS_Data_Js['no_more_item'] );
                            $( anchor ).removeAttr( 'href' ).addClass( 'disabled' );
                        }
                        isLoading = false;
                        i++;
                    });
                }
            }
        });

        if ( $( '.yith-wcan' ).length > 0 && button.length > 0 ) {
            $( 'body' ).on( 'click', '.yith-wcan a', function() {
                $( document ).ajaxComplete(function() {
                    window.location.reload();
                });
            });
        }
    }

    // Init Scroll Reveal
    var initScrollReveal = function() {
        window.sr = ScrollReveal().reveal( '.jas-animated', {
            duration: 700
        });
    }

    // Init Countdown
    function initCountdown() {
        var $el = $( '.jas-countdown' );

        $el.each( function( i, val ) {
            var _option = $( this ).data( 'time' );

            if ( _option !== undefined ) {
                var _day   = _option.day,
                    _month = _option.month,
                    _year  = _option.year,
                    _end   = _month + ' ' + _day + ', ' + _year + ' 00:00:00';

                $( val ).countdown( {
                    date: _end,
                    render: function(data) {
                        $( this.$el ).html("<div class='pr'><span class='db cw fs__16 mt__10'>" + this.leadingZeros(data.days, 2) + "</span><span class='db'>" + JAS_Data_Js['days'] + "</span></div><div class='pr'><span class='db cw fs__16 mt__10'>" + this.leadingZeros(data.hours, 2) + "</span><span class='db'>" + JAS_Data_Js['hrs'] + "</span></div><div class='pr'><span class='db cw fs__16 mt__10'>" + this.leadingZeros(data.min, 2) + "</span><span class='db'>" + JAS_Data_Js['mins'] + "</span></div><div class='pr'><span class='db cw fs__16 mt__10'>" + this.leadingZeros(data.sec, 2) + "</span><span class='db'>" + JAS_Data_Js['secs'] + "</span></div>");
                    }
                });
            }
        });
    }

    // Init wc switch layout
    var wcInitSwitchLayout = function() {
        $( 'body' ).on( 'click', '.wc-col-switch a', function(e) {
            e.preventDefault();

            var _this     = $( this ),
                _col      = _this.data( 'col' ),
                _parent   = _this.closest( '.wc-col-switch' ),
                _products = $( '.products .product' ),
                _sizer    = $( '.products .grid-sizer' );

            if ( _this.hasClass( 'active' ) ) {
                return;
            }

            _parent.find( 'a' ).removeClass( 'active' );
            _this.addClass( 'active' );

            _products.removeClass( 'jas-col-md-2 jas-col-md-3 jas-col-md-4 jas-col-md-6' ).addClass( 'jas-col-md-' + _col );
            _sizer.removeClass( 'size-2 size-3 size-4 size-6 size-12' ).addClass( 'size-' + _col )

            if ( $( '.products' ).hasClass( 'jas-masonry' ) ) {
                initMasonry();
            }
        });
    }

    // Init sidebar filter
    var wcInitSidebarFilter = function() {
        $( 'body' ).on( 'click', '.filter-trigger', function(e) {
            $( '.jas-filter-wrap' ).toggleClass( 'opened' );
            $( '.close-filter' ).on( 'click', function() {
                $( '.jas-filter-wrap' ).removeClass( 'opened' );
            });
            e.preventDefault();
        });
    }

    // Init product accordion
    function wcAccordion() {
        $( '.wc-accordions .tab-heading' ).click( function( e ) {
            e.preventDefault();

            var _this = $( this );
            var parent = _this.closest( '.wc-accordion' );
            var parent_top = _this.closest( '.wc-accordions' );

            if ( parent.hasClass( 'active' ) ) {
                parent.removeClass( 'active' );
                parent.find( '.entry-content' ).stop( true, true ).slideUp();
            } else {
                parent_top.find( '.wc-accordion' ).removeClass( 'active' );
                parent.addClass( 'active' );
                parent_top.find( '.entry-content' ).stop( true, true ).slideUp();
                parent.find( '.entry-content' ).stop( true, true ).slideDown();
            }
        } );
    }

    // Sticky sidebar for single product layout 3, 4
    function wcStickySidebar() {
        if ( $( '.jas-sidebar-sticky' ).length > 0 ) {
            $( '.jas-sidebar-sticky' ).stick_in_parent();
        }
    }

    // Init prettyPhoto for WC 3.0
    function initPrettyPhoto() {
        if ( typeof $.fn.prettyPhoto == "function" ) {
            $( 'a.zoom' ).prettyPhoto({
                hook: 'data-rel',
                social_tools: false,
                theme: 'pp_woocommerce',
                horizontal_padding: 20,
                opacity: 0.8,
                deeplinking: false
            });
            $( 'a[data-rel^="prettyPhoto"]' ).prettyPhoto({
                hook: 'data-rel',
                social_tools: false,
                theme: 'pp_woocommerce',
                horizontal_padding: 20,
                opacity: 0.8,
                deeplinking: false
            });
        }
    }

    // Init openswatch update images
    function initOpenswatch() {
        $( document.body ).off( 'openswatch_update_images' ).bind( 'openswatch_update_images',function( event, data ) {
            var data_html = data.html;
            var productId = data.productId;

            $( '#product-' + productId + ' .single-product-thumbnail' ).html( data_html );

            setTimeout(function() {
                initCarousel();
                initPrettyPhoto();
            }, 10 );
        });
        $( 'body' ).on( 'click', '.product-list-color-swatch a', function() {
            var src = $( this ).data( 'thumb' );
            if ( src != '' ) {
                $( this ).closest( '.product' ).find( 'img.wp-post-image' ).first().attr( 'src', src );
                $( this ).closest( '.product' ).find( 'img.wp-post-image' ).first().attr( 'srcset', src );
            }
        });
    }

    // Sticky add to cart function
    var wcStickyAddtocart = function() {
        var cart_button = $( '.jas-wc-single .single_add_to_cart_button' ),
            sticky_dom  = $( '.jas-sticky-atc' );

        if ( cart_button.length == 0 || sticky_dom == 0 )
            return;

        var footer      = $( '#jas-footer' ),
            cart_button = $( '.jas-wc-single .single_add_to_cart_button' ),
            adminBar    = $( '.admin-bar' ).length ? $( '#wpadminbar' ).height() : 0,
            cartTop     = cart_button.offset().top + cart_button.height() - adminBar,
            fh          = footer.height(),
            wh          = $( window ).height(),
            dh          = $( document ).height(),
            ww          = $( window ).width();

        var AddtocartFrame = function() {
            var scrollTop = $( window ).scrollTop(),
                max       = footer.offset().top - sticky_dom.height() - 15,
                top       = max - scrollTop;

            if ( scrollTop > cartTop ) {
                sticky_dom.slideDown();
            } else {
                sticky_dom.slideUp();
            }

            if ( scrollTop + wh < dh - fh ) {
                sticky_dom.css({
                    'top': 'auto',
                    'bottom': ( ww > 480 ) ? 10 : 0
                } );
            } else {
                sticky_dom.css( {
                    'bottom': 'auto',
                    'top': top
                } );
            }
        };

        var AddtocartScroll = function() {
            requestAnimationFrame( AddtocartFrame );
        };

        $( window ).scroll( AddtocartScroll );

        $( 'body' ).on( 'click', '.jas-sticky-atc .button.disabled', function( e ) {
            e.preventDefault();
            $( 'html, body' ).animate({
                scrollTop: $( 'form.variations_form' ).offset().top - adminBar
            }, 800 );
        });

        $( '.btn-atc .variations_form select' ).on( 'change', function() {
            var attr_name        = $( this ).attr( 'id' ),
                selected         = $( this ).val(),
                select_stick     = $( '.jas-sticky-atc .variations_form select#' + attr_name );

            select_stick.val( selected ).change();
        });
    }

    // Preloader
    function initPreLoader() {
        var loader = $( '.preloader' );

        if ( loader.length ) {
            $( window ).on( 'pageshow', function( event ) {
                if ( event.originalEvent != undefined && event.originalEvent.persisted ) {
                    loader.fadeIn( 500, function() {
                        loader.hide();
                        loader.children().hide();
                    });
                }
            });

            $( window ).on( 'beforeunload', function() {
                loader.fadeIn( 500, function() {
                    loader.children().fadeIn( 100 )
                });
            });

            loader.fadeOut( 800 );
            loader.children().fadeOut();
        }
    }

    // Custom 3rd-party plugin
    function customThirdParties() {
        // Reinit carousel on VC tabs
        $( 'body' ).on( 'click', '.vc_tta-tab a', function( e ) {
            if ( $( '.jas-carousel' ).length > 0 ) {
                $( '.jas-carousel' ).slick( 'unslick' );

                setTimeout( function() {
                    $( '.jas-carousel' ).not( '.slick-initialized' ).slick();
                }, 50);
            }
        });

        /**
         * Sets product images for the chosen variation
         */
        $.fn.wc_variations_image_update = function( variation ) {
            var $form             = this,
                $product          = $form.closest( '.product' ),
                $product_gallery  = $product.find( '.images' ),
                $gallery_img      = $product.find( '.p-nav .slick-slide[data-slick-index="0"] img' ),
                $product_img_wrap = $product_gallery.find( '.woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder' ).eq( 0 ),
                $product_img      = $product_img_wrap.find( '.wp-post-image' ),
                $product_link     = $product_img_wrap.find( 'a' ).eq( 0 );

            if ( variation && variation.image && variation.image.src && variation.image.src.length > 1 ) {
                $product_img.wc_set_variation_attr( 'src', variation.image.src );
                $product_img.wc_set_variation_attr( 'height', variation.image.src_h );
                $product_img.wc_set_variation_attr( 'width', variation.image.src_w );
                $product_img.wc_set_variation_attr( 'srcset', variation.image.srcset );
                $product_img.wc_set_variation_attr( 'sizes', variation.image.sizes );
                $product_img.wc_set_variation_attr( 'title', variation.image.title );
                $product_img.wc_set_variation_attr( 'alt', variation.image.alt );
                $product_img.wc_set_variation_attr( 'data-src', variation.image.full_src );
                $product_img.wc_set_variation_attr( 'data-large_image', variation.image.full_src );
                $product_img.wc_set_variation_attr( 'data-large_image_width', variation.image.full_src_w );
                $product_img.wc_set_variation_attr( 'data-large_image_height', variation.image.full_src_h );
                $product_img_wrap.wc_set_variation_attr( 'data-thumb', variation.image.src );
                $gallery_img.wc_set_variation_attr( 'src', variation.image.thumb_src );
                $product_link.wc_set_variation_attr( 'href', variation.image.full_src );
            } else {
                $product_img.wc_reset_variation_attr( 'src' );
                $product_img.wc_reset_variation_attr( 'width' );
                $product_img.wc_reset_variation_attr( 'height' );
                $product_img.wc_reset_variation_attr( 'srcset' );
                $product_img.wc_reset_variation_attr( 'sizes' );
                $product_img.wc_reset_variation_attr( 'title' );
                $product_img.wc_reset_variation_attr( 'alt' );
                $product_img.wc_reset_variation_attr( 'data-src' );
                $product_img.wc_reset_variation_attr( 'data-large_image' );
                $product_img.wc_reset_variation_attr( 'data-large_image_width' );
                $product_img.wc_reset_variation_attr( 'data-large_image_height' );
                $product_img_wrap.wc_reset_variation_attr( 'data-thumb' );
                $gallery_img.wc_reset_variation_attr( 'src' );
                $product_link.wc_reset_variation_attr( 'href' );
            }

            window.setTimeout( function() {
                $product_gallery.trigger( 'woocommerce_gallery_init_zoom' );
                $form.wc_maybe_trigger_slide_position_reset( variation );
                $( window ).trigger( 'resize' );
            }, 10 );
        };
    }

    // Init image zoom
    var wcInitImageZoom = function() {
        if ( $( '.jas-image-zoom' ).length > 0 ) {
            var img = $( '.jas-image-zoom' );
            img.zoom({
                touch: false
            });
        }
    }

    // Add to cart popup
    function wcPopupAddtocart() {
        $( 'body' ).on( 'click', '.atc-popup .single_add_to_cart_button', function( e ) {
            var _btn  = $( this ),
                _form = $( 'form.cart' );

            if ( _btn.hasClass( 'disabled' ) || $( '.btn-atc' ).hasClass( 'no-ajax' ) ) return;

            e.preventDefault();

            if (  _btn.parents( 'form' ).hasClass( 'variations_form' ) ) {
                var variation_id = parseInt( _form.find( '[name=variation_id]' ).val() ),
                    product_id   = parseInt( _form.find('[name=add-to-cart]' ).val() ),
                    quantity     = parseInt( _form.find('.quantity').find('.qty' ).val() ),
                    product_data = {};

                if ( variation_id ) {
                    var attributes_select = _form.find( '.variations select' ),
                        attributes = {};

                    attributes_select.each( function() {
                        attributes[ $( this ).data( 'attribute_name' ) ] = _form.val();
                    });

                    attributes = JSON.stringify( attributes );
                    product_data['attributes']   = attributes;
                    product_data['variation_id'] = variation_id;
                }

                product_data['product_id'] = product_id;
                product_data['quantity']   = quantity;

            } else {
                var _pid = _btn.data( 'product_id' ), quantity = _btn.data( 'quantity' );
                var product_data = {};

                product_data['product_id']   = _pid;
                product_data['variation_id'] = 0;
                product_data['quantity']     = quantity;
            }

            product_data = JSON.stringify( product_data );

            $.ajax({
                url: JASAjaxURL,
                type: 'POST',
                data: _form.serialize(),
                headers: { 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
                beforeSend: function() {
                    _btn.append( '<i class="fa fa-spinner fa-pulse pa"></i>' );
                },
                success: function( response, status, jqXHR ) {
                    $( '.fa-spinner' ).remove();

                    $.magnificPopup.open({
                        items: {
                            src: '<div class="product-quickview cart__popup pr">' + response.output + '</div>',
                            type: 'inline'
                        },
                        mainClass: 'mfp-fade',
                        removalDelay: 800
                    });
                }
            });
        });

        $( 'body' ).on( 'click', '.modal_btn_add_to_cart', function( e ) {
            e.preventDefault();

            var _btn = $( this );
            if ( _btn.hasClass( 'product_type_variable' ) ) { return; }

            var product_id = _btn.data( 'product_id' ), quantity = 1, product_data = {};

            product_data['product_id']   = product_id;
            product_data['variation_id'] = 0;
            product_data['quantity']     = quantity;

            product_data = JSON.stringify( product_data );

            $.ajax({
                url: JASAjaxURL,
                type: 'POST',
                headers: { 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
                data: {
                    action: 'jas_claue_popup_update_cart',
                    product_data: product_data
                },
                beforeSend: function() {
                    $( '.cart__popup' ).addClass( 'loading' );
                },
                success: function( response, status, jqXHR ) {
                    $( '.cart__popup' ).html( response.output );
                    $( '.cart__popup' ).removeClass( 'loading' );
                }
            });
        })

        function wcPopupUpdateAjax( cart_key, new_qty, undo_item ) {
            return $.ajax({
                url: JASPopUpdateURL,
                type: 'POST',
                headers: { 'X-CSRF-TOKEN': wc_add_to_cart_params.token },
                data: {
                    action: 'popup_update_ajax',
                    cart_key: cart_key,
                    new_qty: new_qty,
                    undo_item: undo_item || false
                }
            });
        }
        function wcPopupUpdateCart( _this, new_qty ) {
            var _pwrap	  = _this.parents( '.cart__popup-item' ),
                _pdata	  = _pwrap.data( 'cart-item' ),
                _cartkey  = _pdata.key,
                _pname 	  = _pdata.pname,
                _qtyinput = _pwrap.find( '.cart__popup-qty--input' );

            $( '.cart__popup' ).addClass( 'loading' );

            wcPopupUpdateAjax( _cartkey, new_qty ).done( function( response, status, jqXHR ) {
                if ( jqXHR.getResponseHeader( 'content-type' ).indexOf( 'text/html' ) >= 0 ) {
                    _qtyinput.val( focus_qty );
                } else {
                    _pwrap.find( '.cart__popup-total' ).html( response.ptotal );
                    $( '.cart__popup-stotal' ).html( response.cart_total );

                    _qtyinput.val( new_qty );
                }
                $( '.cart__popup' ).removeClass( 'loading' );
            });
        }

        $( 'body' ).on( 'change','.cart__popup-qty--input', function( e ) {
            var _this   = $( this ),
                new_qty = parseInt( _this.val( ) ),
                _step   = parseInt( _this.attr( 'step' ) ),
                _min    = parseInt( _this.attr( 'min' ) ),
                _max    = parseInt( _this.attr( 'max' ) ),
                invalid = false;

            if ( new_qty === 0 ) {
                _this.parents( '.cart__popup-item' ).find( '.cart__popup-remove' ).trigger( 'click' );
                return;

            } else if ( isNaN( new_qty ) || new_qty < 0 ) {
                invalid = true;

            } else if ( new_qty > _max && _max > 0 ) {
                alert( 'Maximum product is: ' + _max );
                invalid = true;

            } else if ( new_qty < _min ) {
                invalid = true;

            } else if ( ( new_qty % _step ) !== 0 ) {
                alert( 'Quantity can only be purchased in multiple of ' + _step );
                invalid = true;

            } else {
                wcPopupUpdateCart( _this, new_qty );
            }

            if ( invalid === true ) {
                _this.val( focus_qty );
            }
        });

        $( 'body' ).on( 'click', '.cart__popup-qty' ,function() {
            var _this     = $(this),
                _qty      = _this.siblings( '.cart__popup-qty--input' ),
                _qtyinput = parseInt( _qty.val() ),
                _step     = parseInt( _qty.attr( 'step' ) ),
                _min      = parseInt( _qty.attr( 'min' ) ),
                _max      = parseInt( _qty.attr( 'max' ) );

            _qty.trigger( 'focusin' );

            if ( _this.hasClass( 'cart__popup-qty--plus' ) ) {
                var _newqty = _qtyinput + _step;

                if ( _newqty > _max && _max > 0 ) {
                    alert( 'Maximum Quantity: ' + _max );
                    return;
                }
            } else if ( _this.hasClass( 'cart__popup-qty--minus' ) ) {
                var _newqty = _qtyinput - _step;
                if ( _newqty === 0 ) {
                    _this.parents( '.cart__popup-item' ).find( '.cart__popup-remove' ).trigger( 'click' );
                    return;
                } else if ( _newqty < _min ) {
                    return;
                } else if ( _qtyinput < 0 ) {
                    alert( 'Invalid' );
                    return;
                }
            }
            wcPopupUpdateCart( _this, _newqty );
        })

        // Remove item from the cart
        $( 'body' ).on( 'click', '.cart__popup-remove',function() {
            $( '.cart__popup' ).addClass( 'loading' );

            var _this 	 = $( this ),
                _pwrap   = _this.parents( '.cart__popup-item' ),
                _pdata	 = _pwrap.data( 'cart-item' ),
                _ckey    = _pdata.key,
                new_qty	 = 0,
                _pname   = _pdata.pname;

            wcPopupUpdateAjax( _ckey, 0 ).done( function( response ) {
                _pwrap.after( '<div class="cart__popup-empty center-xs mt__15 mb__15">' + _pname + ' ' + JAS_Data_Js['popup_remove'] + ' <span class="cart__popup-undo fwb cb">' + JAS_Data_Js['popup_undo'] + '</span></div>' )
                    .hide()
                    .attr( 'class', 'cart__popup-undo--active' );


                $( '.cart__popup-stotal' ).html( response.cart_total );
                $( '.cart__popup' ).removeClass( 'loading' );
            });
        });

        // Undo the product removed
        $( 'body' ).on( 'click', '.cart__popup-undo', function() {
            var _this 	= $( this ),
                _pwrap  = _this.parents( '.cart__popup-empty' ),
                _pwraps = _pwrap.prev( '.cart__popup-undo--active' );

            if ( _pwraps.length === 0 ) {
                return;
            }
            $( '.cart__popup' ).addClass( 'loading' );

            var _data = _pwraps.data( 'cart-item' ), _cartkey = _data.key, _pid = _data._pid, qty = 10;

            wcPopupUpdateAjax( _cartkey, qty, true ).done( function( response ) {
                _pwraps.attr( 'class','cart__popup-item flex middle-xs' )
                    .show()
                    .find( '.cart__popup-quantity input' ).val( response.quantity );

                _pwrap.remove();

                $( '.cart__popup' ).removeClass( 'loading' );
                $( '.cart__popup-stotal' ).html( response.cart_total );
            });
        });

        $( 'body' ).on( 'click', '.swatch__list--item', function() {
            var color_id  = $( this ).attr('data-image-id'),
                load_grid = $( this ).attr('data-grid');
                $.ajax({
                url: JASSizesURL,
                type: 'POST',
                dataType: 'json',
                headers: {'X-CSRF-TOKEN': wc_add_to_cart_params.token},
                data: {color_id: color_id, load_grid:load_grid},
                beforeSend: function() {
                    $( '#'+load_grid ).html( '' );
                },
                success: function( response, status, jqXHR ) {
                    $( '#color_code' ).html( response.code );
                    $( '#'+load_grid ).html( response.grid );
                }
            });
        });

    }

    /**
     * DOMready event.
     */
    $( document ).ready( function() {
        initCarousel();
        initMasonry();
        initSearchForm();
        initDropdownMenu();
        initPushMenu();
        initRTLMenu();
        initQuickView();
        initAddToCart();
        initMiniCart();
        initAjaxLoad();
        initScrollReveal();
        initCountdown();
        initOpenswatch();
        backToTop();
        initMagnificPopup();
        initSwitchCurrency();
        initPreLoader();
        wcInitPopupVideo();
        wcLiveSearch();
        wcInitSwitchLayout();
        wcQuantityAdjust();
        wcExtraContent();
        wcInitSidebarFilter();
        wcAccordion();
        wcStickySidebar();
        wcInitImageZoom();
        wcStickyAddtocart();
        wcPopupAddtocart();
        initPrettyPhoto();
        customThirdParties();
    });
    $( window ).load( function() {
        initStickyMenu();
    });

})( jQuery );
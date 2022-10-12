<!DOCTYPE html>
<html dir="ltr" lang="en"
    class="desktop win mozilla oc30 is-guest route-common-home store-0 skin-1 desktop-header-active mobile-sticky layout-1 two-column column-left column-right"
    data-jb="b1c2c768" data-jv="3.1.8" data-ov="3.0.3.7">

<!-- Mirrored from www.journal-theme.com/5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 19:03:01 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head typeof="og:website">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CTHostel</title>
    <base />
    <link rel="preload" href="catalog/view/theme/journal3/icons/fonts/icomoon6654.woff2?v1" as="font" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('userpage/css/jquery-ui.min.css') }}" type="text/css">
    <meta name="twitter:description" content="Journal 3 - Most Advanced Opencart Framework" />
    <script>
        window['Journal'] = {
            "isPopup": false,
            "isPhone": false,
            "isTablet": false,
            "isDesktop": true,
            "filterScrollTop": false,
            "filterUrlValuesSeparator": ",",
            "countdownDay": "Day",
            "countdownHour": "Hour",
            "countdownMin": "Min",
            "countdownSec": "Sec",
            "globalPageColumnLeftTabletStatus": false,
            "globalPageColumnRightTabletStatus": false,
            "scrollTop": true,
            "scrollToTop": false,
            "notificationHideAfter": "2000",
            "quickviewPageStyleCloudZoomStatus": true,
            "quickviewPageStyleAdditionalImagesCarousel": false,
            "quickviewPageStyleAdditionalImagesCarouselStyleSpeed": "500",
            "quickviewPageStyleAdditionalImagesCarouselStyleAutoPlay": false,
            "quickviewPageStyleAdditionalImagesCarouselStylePauseOnHover": true,
            "quickviewPageStyleAdditionalImagesCarouselStyleDelay": "3000",
            "quickviewPageStyleAdditionalImagesCarouselStyleLoop": false,
            "quickviewPageStyleAdditionalImagesHeightAdjustment": "5",
            "quickviewPageStyleProductStockUpdate": false,
            "quickviewPageStylePriceUpdate": false,
            "quickviewPageStyleOptionsSelect": "none",
            "quickviewText": "Quickview",
            "mobileHeaderOn": "tablet",
            "subcategoriesCarouselStyleSpeed": "500",
            "subcategoriesCarouselStyleAutoPlay": false,
            "subcategoriesCarouselStylePauseOnHover": true,
            "subcategoriesCarouselStyleDelay": "3000",
            "subcategoriesCarouselStyleLoop": false,
            "productPageStyleCloudZoomStatus": true,
            "productPageStyleCloudZoomPosition": "inner",
            "productPageStyleAdditionalImagesCarousel": false,
            "productPageStyleAdditionalImagesCarouselStyleSpeed": "500",
            "productPageStyleAdditionalImagesCarouselStyleAutoPlay": true,
            "productPageStyleAdditionalImagesCarouselStylePauseOnHover": true,
            "productPageStyleAdditionalImagesCarouselStyleDelay": "3000",
            "productPageStyleAdditionalImagesCarouselStyleLoop": false,
            "productPageStyleAdditionalImagesHeightAdjustment": "5",
            "productPageStyleProductStockUpdate": false,
            "productPageStylePriceUpdate": false,
            "productPageStyleOptionsSelect": "none",
            "infiniteScrollStatus": true,
            "infiniteScrollOffset": "2",
            "infiniteScrollLoadPrev": "Load Previous Products",
            "infiniteScrollLoadNext": "Load Next Products",
            "infiniteScrollLoading": "Loading...",
            "infiniteScrollNoneLeft": "You have reached the end of the list.",
            "checkoutUrl": "https:\/\/www.journal-theme.com\/5\/index.php?route=checkout\/checkout",
            "headerHeight": "100",
            "headerCompactHeight": "60",
            "mobileMenuOn": "",
            "searchStyleSearchAutoSuggestStatus": true,
            "searchStyleSearchAutoSuggestDescription": true,
            "searchStyleSearchAutoSuggestSubCategories": true,
            "headerMiniSearchDisplay": "default",
            "stickyStatus": true,
            "stickyFullHomePadding": false,
            "stickyFullwidth": true,
            "stickyAt": "300",
            "stickyHeight": "45",
            "headerTopBarHeight": "35",
            "topBarStatus": true,
            "headerType": "classic",
            "headerMobileHeight": "60",
            "headerMobileStickyStatus": true,
            "headerMobileTopBarVisibility": true,
            "headerMobileTopBarHeight": "45",
            "notification": [{
                "m": 137,
                "c": "1a2039cc"
            }],
            "headerNotice": [{
                "m": 56,
                "c": "bddc5671"
            }],
            "columnsCount": 2
        };
    </script>
    <script>
        if (window.NodeList && !NodeList.prototype.forEach) {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }
        (function() {
            if (Journal['isPhone']) {
                return;
            }
            var wrappers = ['search', 'cart', 'cart-content', 'logo', 'language', 'currency'];
            var documentClassList = document.documentElement.classList;

            function extractClassList() {
                return ['desktop', 'tablet', 'phone', 'desktop-header-active', 'mobile-header-active',
                    'mobile-menu-active'
                ].filter(function(cls) {
                    return documentClassList.contains(cls);
                });
            }

            function mqr(mqls, listener) {
                Object.keys(mqls).forEach(function(k) {
                    mqls[k].addListener(listener);
                });
                listener();
            }

            function mobileMenu() {
                console.warn('mobile menu!');
                var element = document.querySelector('#main-menu');
                var wrapper = document.querySelector('.mobile-main-menu-wrapper');
                if (element && wrapper) {
                    wrapper.appendChild(element);
                }
                var main_menu = document.querySelector('.main-menu');
                if (main_menu) {
                    main_menu.classList.add('accordion-menu');
                }
                document.querySelectorAll('.main-menu .dropdown-toggle').forEach(function(element) {
                    element.classList.remove('dropdown-toggle');
                    element.classList.add('collapse-toggle');
                    element.removeAttribute('data-toggle');
                });
                document.querySelectorAll('.main-menu .dropdown-menu').forEach(function(element) {
                    element.classList.remove('dropdown-menu');
                    element.classList.remove('j-dropdown');
                    element.classList.add('collapse');
                });
            }

            function desktopMenu() {
                console.warn('desktop menu!');
                var element = document.querySelector('#main-menu');
                var wrapper = document.querySelector('.desktop-main-menu-wrapper');
                if (element && wrapper) {
                    wrapper.insertBefore(element, document.querySelector('#main-menu-2'));
                }
                var main_menu = document.querySelector('.main-menu');
                if (main_menu) {
                    main_menu.classList.remove('accordion-menu');
                }
                document.querySelectorAll('.main-menu .collapse-toggle').forEach(function(element) {
                    element.classList.add('dropdown-toggle');
                    element.classList.remove('collapse-toggle');
                    element.setAttribute('data-toggle', 'dropdown');
                });
                document.querySelectorAll('.main-menu .collapse').forEach(function(element) {
                    element.classList.add('dropdown-menu');
                    element.classList.add('j-dropdown');
                    element.classList.remove('collapse');
                });
                document.body.classList.remove('mobile-wrapper-open');
            }

            function mobileHeader() {
                console.warn('mobile header!');
                Object.keys(wrappers).forEach(function(k) {
                    var element = document.querySelector('#' + wrappers[k]);
                    var wrapper = document.querySelector('.mobile-' + wrappers[k] + '-wrapper');
                    if (element && wrapper) {
                        wrapper.appendChild(element);
                    }
                    if (wrappers[k] === 'cart-content') {
                        if (element) {
                            element.classList.remove('j-dropdown');
                            element.classList.remove('dropdown-menu');
                        }
                    }
                });
                var search = document.querySelector('#search');
                var cart = document.querySelector('#cart');
                if (search && (Journal['searchStyle'] === 'full')) {
                    search.classList.remove('full-search');
                    search.classList.add('mini-search');
                }
                if (cart && (Journal['cartStyle'] === 'full')) {
                    cart.classList.remove('full-cart');
                    cart.classList.add('mini-cart')
                }
            }

            function desktopHeader() {
                console.warn('desktop header!');
                Object.keys(wrappers).forEach(function(k) {
                    var element = document.querySelector('#' + wrappers[k]);
                    var wrapper = document.querySelector('.desktop-' + wrappers[k] + '-wrapper');
                    if (wrappers[k] === 'cart-content') {
                        if (element) {
                            element.classList.add('j-dropdown');
                            element.classList.add('dropdown-menu');
                            document.querySelector('#cart').appendChild(element);
                        }
                    } else {
                        if (element && wrapper) {
                            wrapper.appendChild(element);
                        }
                    }
                });
                var search = document.querySelector('#search');
                var cart = document.querySelector('#cart');
                if (search && (Journal['searchStyle'] === 'full')) {
                    search.classList.remove('mini-search');
                    search.classList.add('full-search');
                }
                if (cart && (Journal['cartStyle'] === 'full')) {
                    cart.classList.remove('mini-cart');
                    cart.classList.add('full-cart');
                }
                documentClassList.remove('mobile-cart-content-container-open');
                documentClassList.remove('mobile-main-menu-container-open');
                documentClassList.remove('mobile-overlay');
            }

            function moveElements(classList) {
                if (classList.includes('mobile-header-active')) {
                    mobileHeader();
                    mobileMenu();
                } else if (classList.includes('mobile-menu-active')) {
                    desktopHeader();
                    mobileMenu();
                } else {
                    desktopHeader();
                    desktopMenu();
                }
            }
            var mqls = {
                phone: window.matchMedia('(max-width: 768px)'),
                tablet: window.matchMedia('(max-width: 1024px)'),
                menu: window.matchMedia('(max-width: ' + Journal['mobileMenuOn'] + 'px)')
            };
            mqr(mqls, function() {
                var oldClassList = extractClassList();
                if (Journal['isDesktop']) {
                    if (mqls.phone.matches) {
                        documentClassList.remove('desktop');
                        documentClassList.remove('tablet');
                        documentClassList.add('mobile');
                        documentClassList.add('phone');
                    } else if (mqls.tablet.matches) {
                        documentClassList.remove('desktop');
                        documentClassList.remove('phone');
                        documentClassList.add('mobile');
                        documentClassList.add('tablet');
                    } else {
                        documentClassList.remove('mobile');
                        documentClassList.remove('phone');
                        documentClassList.remove('tablet');
                        documentClassList.add('desktop');
                    }
                    if (documentClassList.contains('phone') || (documentClassList.contains('tablet') && Journal[
                            'mobileHeaderOn'] === 'tablet')) {
                        documentClassList.remove('desktop-header-active');
                        documentClassList.add('mobile-header-active');
                    } else {
                        documentClassList.remove('mobile-header-active');
                        documentClassList.add('desktop-header-active');
                    }
                }
                if (documentClassList.contains('desktop-header-active') && mqls.menu.matches) {
                    documentClassList.add('mobile-menu-active');
                } else {
                    documentClassList.remove('mobile-menu-active');
                }
                var newClassList = extractClassList();
                if (oldClassList.join(' ') !== newClassList.join(' ')) {
                    if (documentClassList.contains('safari') && !documentClassList.contains('ipad') && navigator
                        .maxTouchPoints && navigator.maxTouchPoints > 2) {
                        window.fetch('index7e38.json?route=journal3/journal3/device_detect', {
                            method: 'POST',
                            body: 'device=ipad',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded'
                            }
                        }).then(function(data) {
                            return data.json();
                        }).then(function(data) {
                            if (data.response.reload) {
                                window.location.reload();
                            }
                        });
                    }
                    if (document.readyState === 'loading') {
                        document.addEventListener('DOMContentLoaded', function() {
                            moveElements(newClassList);
                        });
                    } else {
                        moveElements(newClassList);
                    }
                }
            });
        })();
        (function() {
            var cookies = {};
            var style = document.createElement('style');
            var documentClassList = document.documentElement.classList;
            document.head.appendChild(style);
            document.cookie.split('; ').forEach(function(c) {
                var cc = c.split('=');
                cookies[cc[0]] = cc[1];
            });
            if (Journal['popup']) {
                for (var i in Journal['popup']) {
                    if (!cookies['p-' + Journal['popup'][i]['c']]) {
                        documentClassList.add('popup-open');
                        documentClassList.add('popup-center');
                        break;
                    }
                }
            }
            if (Journal['notification']) {
                for (var i in Journal['notification']) {
                    if (cookies['n-' + Journal['notification'][i]['c']]) {
                        style.sheet.insertRule('.module-notification-' + Journal['notification'][i]['m'] +
                            '{ display:none }');
                    }
                }
            }
            if (Journal['headerNotice']) {
                for (var i in Journal['headerNotice']) {
                    if (cookies['hn-' + Journal['headerNotice'][i]['c']]) {
                        style.sheet.insertRule('.module-header_notice-' + Journal['headerNotice'][i]['m'] +
                            '{ display:none }');
                    }
                }
            }
            if (Journal['layoutNotice']) {
                for (var i in Journal['layoutNotice']) {
                    if (cookies['ln-' + Journal['layoutNotice'][i]['c']]) {
                        style.sheet.insertRule('.module-layout_notice-' + Journal['layoutNotice'][i]['m'] +
                            '{ display:none }');
                    }
                }
            }
        })();
    </script>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700%7COswald:400&amp;subset=latin-ext"
        type="text/css" rel="stylesheet" />
    <link href="catalog/view/theme/journal3/assets/557d6dddb6f8478c54683a2c9063a2194b50.css?v=b1c2c768" type="text/css"
        rel="stylesheet" media="all" />
    <link href="myimages/fav.png" src='myimages/fav.png' rel="icon" />
    <script src="catalog/view/theme/journal3/assets/8b6f997aeeb7244df3e8e7405450b5924b50.js?v=b1c2c768" defer></script>
</head>

<body class="">


    <div class="mobile-container mobile-main-menu-container">
        <div class="mobile-wrapper-header">
            <span>Menu</span>
            <a class="x"></a>
        </div>
        <div class="mobile-main-menu-wrapper">

        </div>
    </div>

    <div class="mobile-container mobile-filter-container">
        <div class="mobile-wrapper-header"></div>
        <div class="mobile-filter-wrapper"></div>
    </div>

    <div class="mobile-container mobile-cart-content-container">
        <div class="mobile-wrapper-header">
            <span>Your Cart</span>
            <a class="x"></a>
        </div>
        <div class="mobile-cart-content-wrapper cart-content"></div>
    </div>



    <div class="site-wrapper">



        <header class="header-classic">
            <div class="header header-classic header-lg">
                <div class="top-bar navbar-nav" style='background:#033553;border-bottom:2px solid #089A49'>

                </div>
                <div class="mid-bar navbar-nav" style='background:#033553'>
                    <div class="desktop-logo-wrapper">
                        <div id="logo">
                            <a href='/'>
                                <img src="/myimages/logo_header.png" srcset="/myimages/logo_header.png" width="220"
                                    height="63" alt="CTHostel" />
                            </a>
                        </div>
                    </div>
                    <div class="desktop-search-wrapper full-search default-search-wrapper">
                        <div id="search" class="dropdown">
                            <button class="dropdown-toggle search-trigger" data-toggle="dropdown"></button>
                            <div class="dropdown-menu j-dropdown">
                                <div class="header-search">
                                    <div style='background:red;animation:1s infinite example;animation-duration: 1s infinite;'
                                        class="search-categories dropdown drop-menu">
                                        <div class="search-categories-button dropdown-toggle" data-toggle="dropdown">
                                            Emergency!</div>
                                        <style>
                                            @keyframes example {
                                                from {
                                                    background-color: red;
                                                }

                                                to {
                                                    background-color: yellow;
                                                }
                                            }

                                        </style>
                                        <div class="dropdown-menu j-dropdown">
                                            <ul class="j-menu">
                                                <li class="menu-item top-menu-item top-menu-item-1">
                                                    <a href="/egbami"><span class="links-text">Egbami Of
                                                            CTHostel</span></a>
                                                </li>
                                                <li class="menu-item top-menu-item top-menu-item-1">
                                                    <a href="tel:08032979644"><span
                                                            class="links-text">Ambulance</span></a>
                                                </li>
                                                <li class="menu-item top-menu-item top-menu-item-1">
                                                    <a href="tel:0803 569 2904"><span class="links-text">Fire
                                                            Service</span></a>
                                                </li>
                                                <li class="menu-item top-menu-item top-menu-item-1">
                                                    <a href="/faq"><span class="links-text">FAQ</span></a>
                                                </li>

                                                <li class="menu-item top-menu-item top-menu-item-2">
                                                    <a href="/welcomepage"><span class="links-text">About
                                                            Us</span></a>
                                                </li>

                                                <li class="menu-item top-menu-item top-menu-item-3">
                                                    <a
                                                        href="https://wa.me/2349058744473?text=Hi%20,%20my%20name%20is%20(%20Input%20%20your%20name%20)%20,%20from%20CTHostel%20.%20(%20Type%20your%20message%20here%20)%20."><span
                                                            class="links-text">Contact Us</span></a>
                                                </li>

                                            </ul>
                                            <form method='post' action='{{ route('search') }}'>@csrf
                                                <input name='school_id' type='hidden' value='{{ $school_id }}'>
                                        </div>
                                    </div>

                                    <input type="text" name="searchinput" value="" placeholder="Search here..."
                                        class="search-input" data-category_id="0" />
                                    <button type="submit" class="search-button">

                                    </button>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="classic-cart-wrapper">
                        <div class="top-menu secondary-menu">
                            <div class="top-menu top-menu-14">
                                <ul class="j-menu">
                                    <li class="menu-item top-menu-item top-menu-item-1">
                                        <a href="#"><span class="links-text">FAQ</span></a>
                                    </li>

                                    <li class="menu-item top-menu-item top-menu-item-2">
                                        <a href="/welcomepage"><span class="links-text">Blog</span></a>
                                    </li>

                                    <li class="menu-item top-menu-item top-menu-item-3">
                                        <a href="/welcomepage"><span class="links-text">Contact Us</span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop-main-menu-wrapper menu-default has-menu-2 navbar-nav">
                    <div class="menu-trigger menu-item main-menu-item">
                        <ul class="j-menu">
                            <li><a>Menu</a></li>
                        </ul>
                    </div>
                    <div id="main-menu" class="main-menu main-menu-3">
                        <ul class="j-menu">
                            <li class="menu-item main-menu-item main-menu-item-1 dropdown flyout drop-menu ">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="links-text">Available Services</span>
                                    <span class="open-menu collapsed" data-toggle="collapse"
                                        data-target="#collapse-611eaae61a0ba"><i class="fa fa-plus"></i></span>
                                    <i class="fa fa-location"></i>
                                </a>
                                <div class="dropdown-menu j-dropdown " id="collapse-611eaae61a0ba">
                                    <div id="flyout-menu-611817a64dfd2" class="flyout-menu flyout-menu-7">
                                        <ul class="j-menu">

                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Electricians</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Plumbers</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Mechanic</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Painters</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">A.C Technicians</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Phone Engineer</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Laptop Engineer</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Kitchen Applicances Engineer</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
   											<li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">TV/Playstation Engineer</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>
                                            <li class="menu-item flyout-menu-item flyout-menu-item-6 multi-level ">
                                                <a href="">
                                                    <span class="links-text">Washing Machine Specialist</span>
                                                    <span class="menu-label">New</span>
                                                </a>
                                            </li>


                                        </ul>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>



                </div>
            </div>
            <div class="mobile-header mobile-default mobile-2">
                <div class="mobile-top-bar">
                    <div class="mobile-top-menu-wrapper">
                        <div class="top-menu top-menu-13">
                            <ul class="j-menu">
                                <li class="menu-item top-menu-item top-menu-item-1">
                                    <a href="/login"><span class="links-text">Login</span></a>
                                </li>

                                <li class="menu-item top-menu-item top-menu-item-2">
                                    <a href="/register"><span class="links-text">Register</span></a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="language-currency top-menu">
                        <div class="mobile-currency-wrapper">

                        </div>
                        <div class="mobile-language-wrapper">

                        </div>
                    </div>
                </div>
                <div class="mobile-bar sticky-bar">
                    <div class="menu-trigger">
                        <button><span>Menu</span></button>
                    </div>
                    <div class="mobile-logo-wrapper">
                    </div>
                    <div class="mobile-cart-wrapper mini-cart">

                    </div>
                </div>
                <div class="mobile-bar-group mobile-search-group">
                    <div class="mobile-search-wrapper full-search">

                    </div>
                </div>
            </div>
        </header>




        <div id="common-home" class="container">
            <div class="row">
                <aside id="column-left" class="side-column">
                    <div class="grid-rows">
                        <div class="grid-row grid-row-column-left-1">
                            <div class="grid-cols">
                                <div class="grid-col grid-col-column-left-1-1">
                                    <div class="grid-items">
                                        <div class="grid-item grid-item-column-left-1-1-1">

                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col grid-col-column-left-1-3">
                                    <div class="grid-items">
                                        <div class="grid-item grid-item-column-left-1-3-1">
                                            <div
                                                class="module module-testimonials module-testimonials-180 blocks-grid carousel-mode">
                                                <h3 class="title module-title">What people say:</h3>
                                                <div class="module-body">
                                                    <div class="swiper"
                                                        data-items-per-row='{"c0":{"0":{"items":1,"spacing":0}},"c1":{"0":{"items":1,"spacing":0}},"c2":{"0":{"items":1,"spacing":0}},"sc":{"0":{"items":1,"spacing":0}}}'
                                                        data-options='{"speed":500,"autoplay":false,"pauseOnHover":true,"loop":false}'>
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">
                                                                <div class="module-item module-item-1 swiper-slide">
                                                                    <div class="block-body">
                                                                        <div class="block-header"><i
                                                                                class="icon icon-block"></i></div>
                                                                        <div class="block-content block-text">
                                                                            CTHostel services is one of the best I've ever seen,
                                                                            they have reliable and very skillful technicians that
                                                                            respond to request very fast
                                                                           
                                                                        </div>
                                                                        <div class="block-footer">- Sotonwa
                                                                            Boluwatife</div>
                                                                    </div>

                                                                </div>
                                                                <div class="module-item module-item-2 swiper-slide">
                                                                    <div class="block-body">
                                                                        <div class="block-header"><i
                                                                                class="icon icon-block"></i></div>
                                                                        <div class="block-content block-text">

                                                                            I love the fact that I can filter hostels in
                                                                            accordance to the amount I have, and I will
                                                                            get to see all hostels at that price,which
                                                                            give me an opportunity to choose from wide
                                                                            range of options.
                                                                        </div>
                                                                        <div class="block-footer">- Adebanjo
                                                                            Adedamola</div>
                                                                    </div>

                                                                </div>
                                                                <div class="module-item module-item-3 swiper-slide">
                                                                    <div class="block-body">
                                                                        <div class="block-header"><i
                                                                                class="icon icon-block"></i></div>
                                                                        <div class="block-content block-text">
                                                                            I was able to get a roommate within three(3)
                                                                            days with caretech Hostels
                                                                            .</div>
                                                                        <div class="block-footer">- Soleye Alexander
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="module-item module-item-4 swiper-slide">
                                                                    <div class="block-body">
                                                                        <div class="block-header"><i
                                                                                class="icon icon-block"></i></div>
                                                                        <div class="block-content block-text">
                                                                            I was able to get a very good hostel within
                                                                            a short period of time at a very cheap price
                                                                            !</div>
                                                                        <div class="block-footer">- Ogundele Samson
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="module-item module-item-5 swiper-slide">
                                                                    <div class="block-body">
                                                                        <div class="block-header"><i
                                                                                class="icon icon-block"></i></div>
                                                                        <div class="block-content block-text">Amazing
                                                                            ways to customize so you don't end up
                                                                            with a site looking like everyone else's :)
                                                                            Unique sites are much better than
                                                                            clone sites, as they keep the customers
                                                                            interest and the bounce rate is a lot
                                                                            lower. Great Job A++++++</div>
                                                                        <div class="block-footer">- sacredcirclegifts
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-buttons">
                                                            <div class="swiper-button-prev"></div>
                                                            <div class="swiper-button-next"></div>
                                                        </div>
                                                        <div class="swiper-pagination"></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>

                <div id="content" class="col-sm-6">
                    <div id="content-top">
                        <div class="grid-rows">
                            <div class="grid-row grid-row-content-top-1">
                                <div class="grid-cols">
                                    <div class="grid-col grid-col-content-top-1-1">
                                        <div class="grid-items">
                                            <div class="grid-item grid-item-content-top-1-1-1">
                                                <div class="links-menu links-menu-125">
                                                    <ul class="module-body">

                                                        <li class="menu-item links-menu-item links-menu-item-1">
                                                            <a href="">
                                                                <span class="links-text">Electricians</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-2">
                                                            <a href="">
                                                                <span class="links-text">Plumbers</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-3">
                                                            <a href="">
                                                                <span class="links-text">Mechanics</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-4">
                                                            <a href="">
                                                                <span class="links-text">Painter</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-5">
                                                            <a href="">
                                                                <span class="links-text">A.C Technicians</span>
                                                            </a>
                                                        </li>
                                                      
                                                      
                                                       <li class="menu-item links-menu-item links-menu-item-1">
                                                            <a href="">
                                                                <span class="links-text">Phone Engineer</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-2">
                                                            <a href="">
                                                                <span class="links-text">Laptop Engineer</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-3">
                                                            <a href="">
                                                                <span class="links-text">Kitchen Appliances Engineer</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-4">
                                                            <a href="">
                                                                <span class="links-text">TV/Playstation Engineer</span>
                                                            </a>
                                                        </li>
                                                        <li class="menu-item links-menu-item links-menu-item-5">
                                                            <a href="">
                                                                <span class="links-text">Washing Machine Specialist</span>
                                                            </a>
                                                        </li>


                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-col grid-col-content-top-1-2">
                                        <div class="grid-items">
                                            <div class="grid-item grid-item-content-top-1-2-1">
                                                <div class="module module-master_slider module-master_slider-232"
                                                    style="background-image:url('myimages/slider_02.jpg')">
                                                    <div class="journal-loading"><i class="fa fa-spinner fa-spin"></i>
                                                    </div>
                                                    <img data-src="/myimages/silder_03.jpg"
                                                        srcset="myimages/slider_03.jpg" alt="" width="880"
                                                        height="440" />

                                                    <div class="master-slider ms-skin-minimal"
                                                        data-options='{"width":880,"height":440,"layout":"fillwidth","smoothHeight":false,"centerControls":false,"parallaxMode":"swipe","instantStartLayers":true,"loop":true,"dir":"h","autoHeight":true,"rtl":false,"startOnAppear":false,"autoplay":true,"overPause":true,"shuffle":false,"view":"fadeFlow","speed":"30","swipe":true,"mouse":true,"controls":{"arrows":{"autohide":false},"bullets":{"autohide":false},"timebar":{"autohide":false,"inset":true,"align":"top"}}}'>
                                                        <div class="module-item module-item-1 ms-slide">
                                                            <img class='lazyload' data-src="/myimages/slider_02.jpg"
                                                                src="/myimages/slider_02.jpg"
                                                                srcset="myimages/slider_02.jpg" alt="" width="880"
                                                                height="440" />

                                                            <div class="module-subitem module-subitem-1 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="mc" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-y="-50" data-effect="skewright(60,200)"
                                                                data-delay="" data-duration="500"
                                                                data-ease="easeOutQuart" data-hide-effect="fade"
                                                                data-hide-delay="0" data-hide-duration="0"
                                                                style='color:#033553'></div>
                                                            <div class="module-subitem module-subitem-2 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="mc" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-y="20" data-effect="skewright(60,200)"
                                                                data-delay="100" data-duration="500"
                                                                data-ase="easeOutQuart" data-hide-effect="fade"
                                                                data-hide-delay="0" data-hide-duration="0"
                                                                style='color:#033553'></div>
                                                            <a href='#latesthostel'
                                                                class="module-subitem module-subitem-3 ms-layer ms-layer-button btn"
                                                                data-resize="true" data-origin="mc" data-parallax="0"
                                                                data-type="button" data-position="normal"
                                                                data-offset-y="90" data-effect="skewleft(60,200)"
                                                                data-delay="200" data-duration="500"
                                                                data-ease="easeOutQuart" data-hide-effect="fade"
                                                                data-hide-delay="0" data-hide-duration="0"><span>Get
                                                                    Now</span></a>
                                                        </div>
                                                        <div class="module-item module-item-2 ms-slide">
                                                            <img data-src="/myimages/slider_01.jpg"
                                                                src="/myimages/slider_01.jpg"
                                                                srcset="myimages/slider_01.jpg" alt="" width="880"
                                                                height="440" />




                                                            <div style='color:#033553'
                                                                class="module-subitem module-subitem-1 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-x="30" data-offset-y="-30"
                                                                data-effect="skewright(60,200)" data-delay=""
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0">A Very Reliable Hostel With No
                                                                Stress</div>
                                                            <div class="module-subitem module-subitem-2 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-x="30" data-offset-y="20"
                                                                data-effect="skewright(60,200)" data-delay=""
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0"></div>
                                                            <a href='#latesthostel'
                                                                class="module-subitem module-subitem-3 ms-layer ms-layer-button btn"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="button" data-position="normal"
                                                                data-offset-x="65" data-offset-y="75"
                                                                data-effect="skewleft(60,200)" data-delay="100"
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0"><span>Get Now</span></a>

                                                        </div>
                                                        <div class="module-item module-item-3 ms-slide"
                                                            data-delay="2.5">
                                                            <img data-src="/myimages/slider_03.jpg"
                                                                src="/myimages/slider_03.jpg"
                                                                srcset="myimages/slider_03.jpg" alt="" width="880"
                                                                height="440" />




                                                            <div class="module-subitem module-subitem-1 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-x="30" data-offset-y="-30"
                                                                data-effect="skewright(60,200)" data-delay=""
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0">Choose The Best Out Of The Best
                                                            </div>
                                                            <div class="module-subitem module-subitem-2 ms-layer ms-layer-text ms-caption"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="text" data-position="normal"
                                                                data-offset-x="30" data-offset-y="20"
                                                                data-effect="skewright(60,200)" data-delay=""
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0"></div>
                                                            <a href='#latesthostel'
                                                                class="module-subitem module-subitem-3 ms-layer ms-layer-button btn"
                                                                data-resize="true" data-origin="ml" data-parallax="0"
                                                                data-type="button" data-position="normal"
                                                                data-offset-x="65" data-offset-y="75"
                                                                data-effect="skewleft(60,200)" data-delay="100"
                                                                data-duration="500" data-ease="easeOutQuart"
                                                                data-hide-effect="fade" data-hide-delay="0"
                                                                data-hide-duration="0"><span>Get Now</span></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-col grid-col-content-top-1-3">
                                        <div class="grid-items">
                                            <div class="grid-item grid-item-content-top-1-3-1">
                                                <div id="banners-61181fcd29534"
                                                    class="module module-banners module-banners-132">
                                                    <div class="module-body">

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="grid-col grid-col-content-top-1-4">
                    <div class="grid-items">
                      <div class="grid-item grid-item-content-top-1-4-1">
                        <div class="module module-info_blocks module-info_blocks-86">
                          <div class="module-body">
                            <div class="module-item module-item-1 info-blocks info-blocks-icon">
                              <div class="info-block">
                                <div class="info-block-content">
                                  <div class="info-block-title">Choose your prefered hostel</div>
                                  <div class="info-block-text">Select from a collection of our hostels.
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="module-item module-item-2 info-blocks info-blocks-icon">
                              <div class="info-block">
                                <div class="info-block-content">
                                  <div class="info-block-title">Contact the agent in charge</div>
                                  <div class="info-block-text">Message or call the agent in charge directly</div>
                                </div>
                              </div>
                            </div>
                            <div class="module-item module-item-3 info-blocks info-blocks-icon">
                              <div class="info-block">
                                <div class="info-block-content">
                                  <div class="info-block-title">Make payment and own your room</div>
                                  <div class="info-block-text">Make an agreement with the agents, check the hostels out and start living comfortably.</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>





                <aside id="column-right" class="side-column">
                    <div class="grid-rows">
                        <div class="grid-row grid-row-column-right-1">
                            <div class="grid-cols">
                                <div class="grid-col grid-col-column-right-1-1">
                                    <div class="grid-items">
                                        <div class="grid-item grid-item-column-right-1-1-1">


                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="grid-col grid-col-column-right-1-2">
                  <div class="grid-items">
                    <div class="grid-item grid-item-column-right-1-2-1">
                      <div class="module module-newsletter module-newsletter-196">
                        <h3 class="title module-title">Wants to be an agent?</h3>
                        <div class="module-body">
                          <div class="newsletter-text">Register here to become an agent.</div>
                          
                            <button class='btn btn-success'>Be an agent</button>
                       
                        </div>
                      </div>

                    </div>
                  </div>
                </div> --}}
                                <div class="grid-col grid-col-column-right-1-2">
                                    <div class="grid-items">
                                        <div class="grid-item grid-item-column-right-1-2-1">
                                            <div class="module module-newsletter module-newsletter-196">
                                                <h3 class="title module-title">Subscribe to our newsletter</h3>
                                                <div class="module-body">
                                                    <div class="newsletter-text">Input your email to receive latest
                                                        updates from us.</div>
                                                    <div class="newsletter-form">
                                                        <form
                                                            action="https://www.journal-theme.com/5/index.php?route=journal3/newsletter/newsletter&amp;module_id=196"
                                                            method="post" enctype="multipart/form-data"
                                                            class="form-horizontal">
                                                            <div class="input-group">
                                                                <input type="text" name="email" placeholder="Your email"
                                                                    class="form-control newsletter-email" />
                                                                <span class="input-group-btn">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        data-loading-text="<span>Sign up</span>"><span>Sign
                                                                            up</span></button>
                                                                </span>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
        <script type="application/ld+json">
            {
                "@context": "http:\/\/schema.org",
                "@type": "WebSite",
                "url": "https:\/\/www.journal-theme.com\/5\/",
                "name": "Journal 3 Demo 5",
                "description": "Journal 3 - Most Advanced Opencart Framework",
                "potentialAction": {
                    "@type": "SearchAction",
                    "target": "https:\/\/www.journal-theme.com\/5\/index.php?route=product\/search&amp;search={search}",
                    "query-input": "required name=search"
                }
            }
        </script>
        <script type="application/ld+json">
            {
                "@context": "http:\/\/schema.org",
                "@type": "Organization",
                "url": "https:\/\/www.journal-theme.com\/5\/",
                "logo": "https:\/\/www.journal-theme.com\/5\/image\/cache\/catalog\/journal3\/logo\/logo6-white-2x-405x116.png"
            }
        </script>
        <div id="bottom" class="bottom top-row">
            <div class="grid-rows">
                <div class="grid-row grid-row-bottom-1">
                    <div class="grid-cols">
                        <div class="grid-col grid-col-bottom-1-1">
                            <div class="grid-items">
                                <div class="grid-item grid-item-bottom-1-1-1">
                                    <div class="module module-info_blocks module-info_blocks-260">
                                        <div class="module-body">
                                            <div class="module-item module-item-1 info-blocks info-blocks-icon">
                                                <div class="info-block">
                                                    <div class="info-block-content">
                                                        <div id='latesthostel' class="info-block-title">Our latest
                                                            hostels</div>
                                                        <div class="info-block-text"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-row grid-row-bottom-2">
                    <div class="grid-cols">
                        <div class="grid-col grid-col-bottom-2-1">
                            <div class="grid-items">
                                <div class="grid-item grid-item-bottom-2-1-1">

                                </div>
                                <!-- <div class="grid-item grid-item-bottom-2-1-2">
                  <div id="banners-61181fcd3ba8d" class="module module-banners module-banners-204">
                    <div class="module-body">
                      <div class="module-item module-item-1">
                        <a href="indexf110.html?route=product/special">
                          <img src="image/cache/catalog/journal3/banners/15-210x210.jpg"
                            srcset="https://www.journal-theme.com/5/image/cache/catalog/journal3/banners/15-210x210.jpg 1x, https://www.journal-theme.com/5/image/cache/catalog/journal3/banners/15-420x420.jpg 2x"
                            alt="" width="210" height="210" />
                        </a>
                      </div>

                    </div>
                  </div>

                </div> -->
                            </div>
                        </div>
                        <div class="grid-col grid-col-bottom-2-2">
                            <div class="grid-items">
                                <div class="grid-item grid-item-bottom-2-2-1">
                                    <div class="module module-products module-products-257 module-products-grid">
                                        <div class="module-body">
                                            <div class="tab-container">
                                                <ul class="nav nav-tabs">
                                                    <li class="tab-1 active">
                                                        <a href="#products-61181fcd4109f-tab-1"
                                                            data-toggle="tab">Electricians</a>
                                                    </li>
                                                    <li class="tab-2">
                                                        <a href="#products-61181fcd4109f-tab-2"
                                                            data-toggle="tab">Plumbers</a>
                                                    </li>
                                                    <li class="tab-3">
                                                        <a href="#products-61181fcd4109f-tab-3"
                                                            data-toggle="tab">Mechanics</a>
                                                    </li>
                                                    <li class="tab-4">
                                                        <a href="#products-61181fcd4109f-tab-4"
                                                            data-toggle="tab">Painters</a>
                                                    </li>
                                                    <li class='tab-5'>
                                                        <a href="#products-61181fcd4109f-tab-5" data-toggle="tab">A.C
                                                            Technicians</a>
                                                    </li>
                                                  
                                                  <li class="tab-6">
                                                        <a href="#products-61181fcd4109f-tab-6"
                                                            data-toggle="tab">Phone Engineer</a>
                                                    </li>
                                                    <li class="tab-7">
                                                        <a href="#products-61181fcd4109f-tab-7"
                                                            data-toggle="tab">Laptop Engineer</a>
                                                    </li>
                                                    <li class="tab-8">
                                                        <a href="#products-61181fcd4109f-tab-8"
                                                            data-toggle="tab">TV/Playstation Engineer</a>
                                                    </li>
                                                    <li class="tab-9">
                                                        <a href="#products-61181fcd4109f-tab-9"
                                                            data-toggle="tab">Kitchen Appliances Engineer</a>
                                                    </li>
                                                    <li class='tab-10'>
                                                        <a href="#products-61181fcd4109f-tab-10" 
                                                           data-toggle="tab">Washing Machine Specialist</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="module-item module-item-1 tab-pane active"
                                                        id="products-61181fcd4109f-tab-1">
                                                        <div class="product-grid" id='table_data'>
                                                            @include('electricians')
                                                        </div>
                                                    </div>
                                                    <div class="module-item module-item-2 tab-pane"
                                                        id="products-61181fcd4109f-tab-2">
                                                        <div class="product-grid">
                                                            @include('plumbers')
                                                        </div>

                                                    </div>
                                                    <div class="module-item module-item-3 tab-pane"
                                                        id="products-61181fcd4109f-tab-3">
                                                        <div class="product-grid">
                                                            @include('mechanics')
                                                        </div>

                                                    </div>
                                                    <div class="module-item module-item-4 tab-pane"
                                                        id="products-61181fcd4109f-tab-4">
                                                        <div class="product-grid">
                                                            @include('painters')
                                                        </div>
                                                    </div>
                                                    <div class="module-item module-item-5 tab-pane"
                                                        id="products-61181fcd4109f-tab-5">
                                                        <div class="product-grid">
                                                           @include('ac_technicians')
                                                        </div>

                                                    </div>
                                                  
                                                   <div class="module-item module-item-6 tab-pane"
                                                        id="products-61181fcd4109f-tab-6">
                                                        <div class="product-grid">
                                                            @include('phone_engineer')
                                                        </div>
                                                    </div>
                                                    <div class="module-item module-item-7 tab-pane"
                                                        id="products-61181fcd4109f-tab-7">
                                                        <div class="product-grid">
                                                            @include('laptop_engineer')
                                                        </div>

                                                    </div>
                                                    <div class="module-item module-item-8 tab-pane"
                                                        id="products-61181fcd4109f-tab-8">
                                                        <div class="product-grid">
                                                            @include('tv_engineer')
                                                        </div>

                                                    </div>
                                                    <div class="module-item module-item-9 tab-pane"
                                                        id="products-61181fcd4109f-tab-9">
                                                       <div class="product-grid">
                                                             @include('kitchen_engineer')
                                                        </div>
                                                    </div>
                                                    <div class="module-item module-item-10 tab-pane"
                                                        id="products-61181fcd4109f-tab-10">
                                                        <div class="product-grid">
                                                            @include('washing_machine_engineer')
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         

        </div>


        <footer>
            <div class="grid-rows">

                <div class="grid-row grid-row-2" style='background:#033553'>
                    <div class="grid-cols">
                        <div class="grid-col grid-col-1">
                            <div class="grid-items">
                                <div class="grid-item grid-item-1">
                                    <div class="icons-menu icons-menu-61">
                                        <h3 class="title module-title">Follow Us</h3>
                                        <ul>
                                            <li class="menu-item icons-menu-item icons-menu-item-1 icon-menu-icon">
                                                <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61"
                                                    data-placement="top" title="Facebook" href="">
                                                    <span class="links-text">Facebook</span>
                                                </a>
                                            </li>
                                            <li class="menu-item icons-menu-item icons-menu-item-2 icon-menu-icon">
                                                <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61"
                                                    data-placement="top" title="Twitter" href="index.html">
                                                    <span class="links-text">Twitter</span>
                                                </a>
                                            </li>
                                            <li class="menu-item icons-menu-item icons-menu-item-3 icon-menu-icon">
                                                <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61"
                                                    data-placement="top" title="Instagram"
                                                    href="https://instagram.com/the_caretech?utm_medium=copy_link">
                                                    <span class="links-text">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="menu-item icons-menu-item icons-menu-item-4 icon-menu-icon">
                                                <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61"
                                                    data-placement="top" title="LinkedIn"
                                                    href="https://linkedin.com/in/fasanya-oluwapelumi-1b7343157">
                                                    <span class="links-text">LinkedIn</span>
                                                </a>
                                            </li>
                                            <li class="menu-item icons-menu-item icons-menu-item-8 icon-menu-icon">
                                                <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61"
                                                    data-placement="top" title="Whatsapp"
                                                    href="https://wa.me/2349058744473?text=Type%2C%20your%20message%20here">
                                                    <span class="links-text">Whatsapp</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="grid-item grid-item-2">
                                    <div class="links-menu links-menu-77">
                                        <ul class="module-body">
                                            <li class="menu-item links-menu-item links-menu-item-1">
                                                <a>
                                                    <span class="links-text">Copyright © 2021, CTHostel, All Rights
                                                        Reserved</span>
                                                </a>
                                            </li>
                                            <li class="menu-item links-menu-item links-menu-item-1">

                                                <a href='https://thecaretech.org'>
                                                    <span class="links-text text-center text-blue"
                                                        style='color:white;text-align:center;float:right'> Developed by
                                                        <a href='https://thecaretech.org'> CareTech </a> </span></a>
                                            </li>

                                        </ul>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>
    </div><!-- .site-wrapper -->




    <!--
  <div class="notification-wrapper notification-wrapper-bottom">
    <div class="module module-notification module-notification-137 notification"
      data-options='{"position":null,"title":"Notification Module","cookie":"1a2039cc"}'>
      <button class="btn notification-close"></button>
      <div class="notification-content">
        <div>
          <div class="notification-title">Notification Module</div>
          <div class="notification-text">This is the sticky Notification module. You can use it for any sticky messages
            such as cookie notices or special promotions, etc.</div>
        </div>
      </div>
    </div>
  </div>
  -->


    <script src="/catalog/view/theme/journal3/assets/0973f77e85a99a7c004f28b2b906bcf44b50.js?v=b1c2c768" defer></script>


    <div class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>-->
    <script src="{{ asset('assets2/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets2/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>

    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js\requestController.js') }}"></script>
    <script src="{{ asset('js\formController.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('userpage/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('userpage/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('userpage/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('userpage/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('userpage/js/main.js') }}"></script>
    <!--<script src="{{ asset('assets/professionallocker.js') }}"></script>-->
    <script>
        let images = document.querySelectorAll(".lazyload");
        lazyload(images);
        console.log(images, 'the image')
        lazyload();
    </script>
    <script src="{{ asset('js/sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js\requestController.js') }}"></script>
    <script src="{{ asset('js\formController.js') }}"></script>

    <script>
        $(document).ready(function() {

            $("#submit").click(function() {
                var fd = new FormData();

                // Append data 
                fd.append('email', $("#email").val());
                fd.append('phone', $("#phone").val());


                $.ajax({
                    type: 'POST',
                    url: "saveegbami route",
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {

                        alert(
                            'Well done, successfully subscribed to Egbami!, click on the checkbox below and close the tab')
                        console.log(data)


                    },
                    error: function(data) {
                        console.log(data);
                        alert(
                            'Opps, we have some techinical issues and you are unable to subscribe')


                    }
                });


            })
        })

        $(document).on('click', '.pagination a', function(event) {

            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            var id = $("#getid").val();
            console.log(id, page);
            fetch_data(page);
        });

        function fetch_data(page) {
            var id = $("#getid").val();


            $.ajax({
                url: "/pagination/fetch_data/" + id + "/?page=" + page,
                success: function(data) {

                    console.log(data, 'this sata')
                    $('#table_data').html(data);
                }
            });
        }

        $("#special_request").submit(async function(e) {
            e.preventDefault()
            $("#request").attr('disabled', true);
            var fd = new FormData();

            // Append data 
            fd.append('name', $("#name").val());
            fd.append('phone', $("#phone").val());
            fd.append('description', $("#description").val());


            console.log(fd, 'this is the fd');

            $.ajax({
                type: 'POST',
                url: "special-request route",
                data: fd,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    swal("Success", 'Request submitted successfully', 'success');
                    console.log(data)
                    $("#description").val('')
                    $("#name").val('')
                    $("#phone").val('')
                    // window.location.reload();

                },
                error: function(data) {
                    console.log(data);
                    swal('Oops', 'request not submitted', 'error')
                }
            });
        });

        // });
    </script>
    <script defer src="../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6815a3bcb8c1bbd0","version":"2021.8.1","r":1,"token":"08f347fa5c4f4ca684e763b9ca7b9d68","si":10}'>
    </script>
</body>

<!-- Mirrored from www.journal-theme.com/5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 19:04:39 GMT -->

</html>

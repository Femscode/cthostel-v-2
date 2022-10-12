
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
  <link rel="stylesheet" href="{{asset('userpage/css/jquery-ui.min.css')}}" type="text/css">
  <meta name="twitter:description" content="Journal 3 - Most Advanced Opencart Framework" />
  <script>window['Journal'] = { "isPopup": false, "isPhone": false, "isTablet": false, "isDesktop": true, "filterScrollTop": false, "filterUrlValuesSeparator": ",", "countdownDay": "Day", "countdownHour": "Hour", "countdownMin": "Min", "countdownSec": "Sec", "globalPageColumnLeftTabletStatus": false, "globalPageColumnRightTabletStatus": false, "scrollTop": true, "scrollToTop": false, "notificationHideAfter": "2000", "quickviewPageStyleCloudZoomStatus": true, "quickviewPageStyleAdditionalImagesCarousel": false, "quickviewPageStyleAdditionalImagesCarouselStyleSpeed": "500", "quickviewPageStyleAdditionalImagesCarouselStyleAutoPlay": false, "quickviewPageStyleAdditionalImagesCarouselStylePauseOnHover": true, "quickviewPageStyleAdditionalImagesCarouselStyleDelay": "3000", "quickviewPageStyleAdditionalImagesCarouselStyleLoop": false, "quickviewPageStyleAdditionalImagesHeightAdjustment": "5", "quickviewPageStyleProductStockUpdate": false, "quickviewPageStylePriceUpdate": false, "quickviewPageStyleOptionsSelect": "none", "quickviewText": "Quickview", "mobileHeaderOn": "tablet", "subcategoriesCarouselStyleSpeed": "500", "subcategoriesCarouselStyleAutoPlay": false, "subcategoriesCarouselStylePauseOnHover": true, "subcategoriesCarouselStyleDelay": "3000", "subcategoriesCarouselStyleLoop": false, "productPageStyleCloudZoomStatus": true, "productPageStyleCloudZoomPosition": "inner", "productPageStyleAdditionalImagesCarousel": false, "productPageStyleAdditionalImagesCarouselStyleSpeed": "500", "productPageStyleAdditionalImagesCarouselStyleAutoPlay": true, "productPageStyleAdditionalImagesCarouselStylePauseOnHover": true, "productPageStyleAdditionalImagesCarouselStyleDelay": "3000", "productPageStyleAdditionalImagesCarouselStyleLoop": false, "productPageStyleAdditionalImagesHeightAdjustment": "5", "productPageStyleProductStockUpdate": false, "productPageStylePriceUpdate": false, "productPageStyleOptionsSelect": "none", "infiniteScrollStatus": true, "infiniteScrollOffset": "2", "infiniteScrollLoadPrev": "Load Previous Products", "infiniteScrollLoadNext": "Load Next Products", "infiniteScrollLoading": "Loading...", "infiniteScrollNoneLeft": "You have reached the end of the list.", "checkoutUrl": "https:\/\/www.journal-theme.com\/5\/index.php?route=checkout\/checkout", "headerHeight": "100", "headerCompactHeight": "60", "mobileMenuOn": "", "searchStyleSearchAutoSuggestStatus": true, "searchStyleSearchAutoSuggestDescription": true, "searchStyleSearchAutoSuggestSubCategories": true, "headerMiniSearchDisplay": "default", "stickyStatus": true, "stickyFullHomePadding": false, "stickyFullwidth": true, "stickyAt": "300", "stickyHeight": "45", "headerTopBarHeight": "35", "topBarStatus": true, "headerType": "classic", "headerMobileHeight": "60", "headerMobileStickyStatus": true, "headerMobileTopBarVisibility": true, "headerMobileTopBarHeight": "45", "notification": [{ "m": 137, "c": "1a2039cc" }], "headerNotice": [{ "m": 56, "c": "bddc5671" }], "columnsCount": 2 };</script>
  <script>
    if (window.NodeList && !NodeList.prototype.forEach) { NodeList.prototype.forEach = Array.prototype.forEach; }
    (function () {
      if (Journal['isPhone']) { return; }
      var wrappers = ['search', 'cart', 'cart-content', 'logo', 'language', 'currency']; var documentClassList = document.documentElement.classList; function extractClassList() { return ['desktop', 'tablet', 'phone', 'desktop-header-active', 'mobile-header-active', 'mobile-menu-active'].filter(function (cls) { return documentClassList.contains(cls); }); }
      function mqr(mqls, listener) { Object.keys(mqls).forEach(function (k) { mqls[k].addListener(listener); }); listener(); }
      function mobileMenu() {
        console.warn('mobile menu!'); var element = document.querySelector('#main-menu'); var wrapper = document.querySelector('.mobile-main-menu-wrapper'); if (element && wrapper) { wrapper.appendChild(element); }
        var main_menu = document.querySelector('.main-menu'); if (main_menu) { main_menu.classList.add('accordion-menu'); }
        document.querySelectorAll('.main-menu .dropdown-toggle').forEach(function (element) { element.classList.remove('dropdown-toggle'); element.classList.add('collapse-toggle'); element.removeAttribute('data-toggle'); }); document.querySelectorAll('.main-menu .dropdown-menu').forEach(function (element) { element.classList.remove('dropdown-menu'); element.classList.remove('j-dropdown'); element.classList.add('collapse'); });
      }
      function desktopMenu() {
        console.warn('desktop menu!'); var element = document.querySelector('#main-menu'); var wrapper = document.querySelector('.desktop-main-menu-wrapper'); if (element && wrapper) { wrapper.insertBefore(element, document.querySelector('#main-menu-2')); }
        var main_menu = document.querySelector('.main-menu'); if (main_menu) { main_menu.classList.remove('accordion-menu'); }
        document.querySelectorAll('.main-menu .collapse-toggle').forEach(function (element) { element.classList.add('dropdown-toggle'); element.classList.remove('collapse-toggle'); element.setAttribute('data-toggle', 'dropdown'); }); document.querySelectorAll('.main-menu .collapse').forEach(function (element) { element.classList.add('dropdown-menu'); element.classList.add('j-dropdown'); element.classList.remove('collapse'); }); document.body.classList.remove('mobile-wrapper-open');
      }
      function mobileHeader() {
        console.warn('mobile header!'); Object.keys(wrappers).forEach(function (k) {
          var element = document.querySelector('#' + wrappers[k]); var wrapper = document.querySelector('.mobile-' + wrappers[k] + '-wrapper'); if (element && wrapper) { wrapper.appendChild(element); }
          if (wrappers[k] === 'cart-content') { if (element) { element.classList.remove('j-dropdown'); element.classList.remove('dropdown-menu'); } }
        }); var search = document.querySelector('#search'); var cart = document.querySelector('#cart'); if (search && (Journal['searchStyle'] === 'full')) { search.classList.remove('full-search'); search.classList.add('mini-search'); }
        if (cart && (Journal['cartStyle'] === 'full')) { cart.classList.remove('full-cart'); cart.classList.add('mini-cart') }
      }
      function desktopHeader() {
        console.warn('desktop header!'); Object.keys(wrappers).forEach(function (k) { var element = document.querySelector('#' + wrappers[k]); var wrapper = document.querySelector('.desktop-' + wrappers[k] + '-wrapper'); if (wrappers[k] === 'cart-content') { if (element) { element.classList.add('j-dropdown'); element.classList.add('dropdown-menu'); document.querySelector('#cart').appendChild(element); } } else { if (element && wrapper) { wrapper.appendChild(element); } } }); var search = document.querySelector('#search'); var cart = document.querySelector('#cart'); if (search && (Journal['searchStyle'] === 'full')) { search.classList.remove('mini-search'); search.classList.add('full-search'); }
        if (cart && (Journal['cartStyle'] === 'full')) { cart.classList.remove('mini-cart'); cart.classList.add('full-cart'); }
        documentClassList.remove('mobile-cart-content-container-open'); documentClassList.remove('mobile-main-menu-container-open'); documentClassList.remove('mobile-overlay');
      }
      function moveElements(classList) { if (classList.includes('mobile-header-active')) { mobileHeader(); mobileMenu(); } else if (classList.includes('mobile-menu-active')) { desktopHeader(); mobileMenu(); } else { desktopHeader(); desktopMenu(); } }
      var mqls = { phone: window.matchMedia('(max-width: 768px)'), tablet: window.matchMedia('(max-width: 1024px)'), menu: window.matchMedia('(max-width: ' + Journal['mobileMenuOn'] + 'px)') }; mqr(mqls, function () {
        var oldClassList = extractClassList(); if (Journal['isDesktop']) {
          if (mqls.phone.matches) { documentClassList.remove('desktop'); documentClassList.remove('tablet'); documentClassList.add('mobile'); documentClassList.add('phone'); } else if (mqls.tablet.matches) { documentClassList.remove('desktop'); documentClassList.remove('phone'); documentClassList.add('mobile'); documentClassList.add('tablet'); } else { documentClassList.remove('mobile'); documentClassList.remove('phone'); documentClassList.remove('tablet'); documentClassList.add('desktop'); }
          if (documentClassList.contains('phone') || (documentClassList.contains('tablet') && Journal['mobileHeaderOn'] === 'tablet')) { documentClassList.remove('desktop-header-active'); documentClassList.add('mobile-header-active'); } else { documentClassList.remove('mobile-header-active'); documentClassList.add('desktop-header-active'); }
        }
        if (documentClassList.contains('desktop-header-active') && mqls.menu.matches) { documentClassList.add('mobile-menu-active'); } else { documentClassList.remove('mobile-menu-active'); }
        var newClassList = extractClassList(); if (oldClassList.join(' ') !== newClassList.join(' ')) {
          if (documentClassList.contains('safari') && !documentClassList.contains('ipad') && navigator.maxTouchPoints && navigator.maxTouchPoints > 2) { window.fetch('index7e38.json?route=journal3/journal3/device_detect', { method: 'POST', body: 'device=ipad', headers: { 'Content-Type': 'application/x-www-form-urlencoded' } }).then(function (data) { return data.json(); }).then(function (data) { if (data.response.reload) { window.location.reload(); } }); }
          if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', function () { moveElements(newClassList); }); } else { moveElements(newClassList); }
        }
      });
    })(); (function () {
      var cookies = {}; var style = document.createElement('style'); var documentClassList = document.documentElement.classList; document.head.appendChild(style); document.cookie.split('; ').forEach(function (c) { var cc = c.split('='); cookies[cc[0]] = cc[1]; }); if (Journal['popup']) { for (var i in Journal['popup']) { if (!cookies['p-' + Journal['popup'][i]['c']]) { documentClassList.add('popup-open'); documentClassList.add('popup-center'); break; } } }
      if (Journal['notification']) { for (var i in Journal['notification']) { if (cookies['n-' + Journal['notification'][i]['c']]) { style.sheet.insertRule('.module-notification-' + Journal['notification'][i]['m'] + '{ display:none }'); } } }
      if (Journal['headerNotice']) { for (var i in Journal['headerNotice']) { if (cookies['hn-' + Journal['headerNotice'][i]['c']]) { style.sheet.insertRule('.module-header_notice-' + Journal['headerNotice'][i]['m'] + '{ display:none }'); } } }
      if (Journal['layoutNotice']) { for (var i in Journal['layoutNotice']) { if (cookies['ln-' + Journal['layoutNotice'][i]['c']]) { style.sheet.insertRule('.module-layout_notice-' + Journal['layoutNotice'][i]['m'] + '{ display:none }'); } } }
    })();</script>
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
                <img src="/myimages/logo_header.png"
                  srcset="/myimages/logo_header.png"
                  width="220" height="63" alt="CTHostel"  />
              </a>
            </div>
          </div>
          <div class="desktop-search-wrapper full-search default-search-wrapper">
            <div id="search" class="dropdown">
              <button class="dropdown-toggle search-trigger" data-toggle="dropdown"></button>
              <div class="dropdown-menu j-dropdown">
                <div class="header-search">
                  <div class="search-categories dropdown drop-menu">
                    <div class="search-categories-button dropdown-toggle" data-toggle="dropdown">About Us</div>

                    <div class="dropdown-menu j-dropdown">
                       <ul class="j-menu">
                  <li class="menu-item top-menu-item top-menu-item-1">
                    <a href="/faq"><span
                        class="links-text">FAQ</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-2">
                    <a href="/welcomepage"><span class="links-text">About Us</span></a>
                  </li>

                  <li class="menu-item top-menu-item top-menu-item-3">
                    <a href="https://wa.me/2349058744473?text=Hi%20,%20my%20name%20is%20(%20Input%20%20your%20name%20)%20,%20from%20CTHostel%20.%20(%20Type%20your%20message%20here%20)%20."><span class="links-text">Contact Us</span></a>
                  </li>

                </ul>
                  <form method='post' action='{{route("search")}}'>@csrf
<input name='school_id' type='hidden' value='{{$school_id}}'>
                    </div>
                  </div>
                  
                  <input type="text" name="searchinput" value="" placeholder="Search here..." class="search-input"
                    data-category_id="0" />
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
                    <a href="#"><span
                        class="links-text">FAQ</span></a>
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
@yield('content')


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
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Facebook" href="">
                          <span class="links-text">Facebook</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-2 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Twitter" href="index.html">
                          <span class="links-text">Twitter</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-3 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Instagram" href="https://instagram.com/the_caretech?utm_medium=copy_link">
                          <span class="links-text">Instagram</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-4 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="LinkedIn" href="https://linkedin.com/in/fasanya-oluwapelumi-1b7343157">
                          <span class="links-text">LinkedIn</span>
                        </a>
                      </li>
                      <li class="menu-item icons-menu-item icons-menu-item-8 icon-menu-icon">
                        <a data-toggle="tooltip" data-tooltip-class="icons-menu-tooltip-61" data-placement="top" title="Whatsapp" href="https://wa.me/2349058744473?text=Type%2C%20your%20message%20here">
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
                          <span class="links-text">Copyright © 2021, CTHostel, All Rights Reserved</span>
                        </a>
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


  <script src="catalog/view/theme/journal3/assets/0973f77e85a99a7c004f28b2b906bcf44b50.js?v=b1c2c768" defer></script>




  <div class="scroll-top">
    <i class="fa fa-angle-up"></i>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
<script src="{{asset('userpage/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('userpage/js/bootstrap.min.js')}}"></script>
    <!-- <script src="{{asset('userpage/js/jquery.nice-select.min.js')}}"></script> -->
    <script src="{{asset('userpage/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('userpage/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('userpage/js/mixitup.min.js')}}"></script>
    <script src="{{asset('userpage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('userpage/js/main.js')}}"></script>
    <script src="{{asset('assets/professionallocker.js')}}"></script>
<script>
let images = document.querySelectorAll(".lazyload");
lazyload(images);
console.log(images,'the image')
lazyload();
</script>
<script>
$(document).ready(function(){
 



 $(document).on('click', '.pagination a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
   var id = $("#getid").val();
   console.log(id);
  fetch_data(page);
 });

 function fetch_data(page)
 {
    var id = $("#getid").val();
    
   
  $.ajax({
   url:"/pagination/fetch_data/"+id+"/?page="+page,
   success:function(data)
   {
   
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>

  <script defer src="../../static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"6815a3bcb8c1bbd0","version":"2021.8.1","r":1,"token":"08f347fa5c4f4ca684e763b9ca7b9d68","si":10}'></script>
</body>

<!-- Mirrored from www.journal-theme.com/5/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Aug 2021 19:04:39 GMT -->

</html>
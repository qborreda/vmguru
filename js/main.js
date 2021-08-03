/**
Yall.js 2.1.0
**/
"use strict";var d=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var a in r)Object.prototype.hasOwnProperty.call(r,a)&&(e[a]=r[a])}return e},yall=function(e){var a=function(a){if("IMG"===a.tagName){var e=a.parentNode;if("PICTURE"===e.tagName&&[].slice.call(e.querySelectorAll("source")).forEach(function(e){return t(e)}),!0===n.asyncDecodeSupport&&!0===n.replaceWithSupport){var o=new Image;t(o,a),o.decode().then(function(){for(var e=0;e<a.attributes.length;e++){var t=a.attributes[e].name,r=a.attributes[e].value;-1===n.ignoredImgAttributes.indexOf(t)&&o.setAttribute(t,r)}a.replaceWith(o)})}else t(a)}"VIDEO"===a.tagName&&([].slice.call(a.querySelectorAll("source")).forEach(function(e){return t(e)}),a.load()),"IFRAME"===a.tagName&&(a.src=a.dataset.src,a.removeAttribute("data-src")),a.classList.contains(i.lazyBackgroundClass)&&(a.classList.remove(i.lazyBackgroundClass),a.classList.add(i.lazyBackgroundLoaded))},t=function(e){var t=(1<arguments.length&&void 0!==arguments[1]&&arguments[1]).dataset||e.dataset;for(var r in t)-1!==n.acceptedDataAttributes.indexOf("data-"+r)&&(e.setAttribute(r,t[r]),e.removeAttribute("data-"+r))},r=function yallBack(){var e=!1;!1===e&&0<l.length&&(e=!0,setTimeout(function(){l.forEach(function(t){t.getBoundingClientRect().top<=window.innerHeight+i.threshold&&t.getBoundingClientRect().bottom>=-i.threshold&&"none"!==getComputedStyle(t).display&&(!0===i.idlyLoad&&!0===n.idleCallbackSupport?requestIdleCallback(function(){a(t)},c):a(t),t.classList.remove(i.lazyClass),l=l.filter(function(e){return e!==t}))}),e=!1,0===l.length&&!1===i.observeChanges&&n.eventsToBind.forEach(function(e){return e[0].removeEventListener(e[1],yallBack)})},i.throttleTime))},o=new Image,n={intersectionObserverSupport:"IntersectionObserver"in window&&"IntersectionObserverEntry"in window&&"intersectionRatio"in window.IntersectionObserverEntry.prototype,mutationObserverSupport:"MutationObserver"in window,idleCallbackSupport:"requestIdleCallback"in window,asyncDecodeSupport:"decode"in o,replaceWithSupport:"replaceWith"in o,ignoredImgAttributes:["data-src","data-sizes","data-media","data-srcset","src","srcset"],acceptedDataAttributes:["data-src","data-sizes","data-media","data-srcset"],eventsToBind:[[document,"scroll"],[document,"touchmove"],[window,"resize"],[window,"orientationchange"]]},i=d({lazyClass:"lazy",lazyBackgroundClass:"lazy-bg",lazyBackgroundLoaded:"lazy-bg-loaded",throttleTime:200,idlyLoad:!1,idleLoadTimeout:100,threshold:200,observeChanges:!1,observeRootSelector:"body",mutationObserverOptions:{childList:!0}},e),s="img."+i.lazyClass+",video."+i.lazyClass+",iframe."+i.lazyClass+",."+i.lazyBackgroundClass,c={timeout:i.idleLoadTimeout},l=[].slice.call(document.querySelectorAll(s));if(!0===n.intersectionObserverSupport){var u=new IntersectionObserver(function(e,r){e.forEach(function(e){if(!0===e.isIntersecting||0<e.intersectionRatio){var t=e.target;!0===i.idlyLoad&&!0===n.idleCallbackSupport?requestIdleCallback(function(){a(t)},c):a(t),t.classList.remove(i.lazyClass),r.unobserve(t),l=l.filter(function(e){return e!==t})}})},{rootMargin:i.threshold+"px 0%"});l.forEach(function(e){return u.observe(e)})}else n.eventsToBind.forEach(function(e){return e[0].addEventListener(e[1],r)}),r();!0===n.mutationObserverSupport&&!0===i.observeChanges&&new MutationObserver(function(e){e.forEach(function(e){[].slice.call(document.querySelectorAll(s)).forEach(function(e){-1===l.indexOf(e)&&(l.push(e),!0===n.intersectionObserverSupport?u.observe(e):r())})})}).observe(document.querySelector(i.observeRootSelector),i.mutationObserverOptions)};


$(document).ready(function() {

  if(yall) {
    yall();
  }

  function isMobile() {
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)
    ) {
      return true;
    } else {
      return false;
    }
  }

  function floatedHeader() {
    // Header slide hiding
    var headerDistanceTrigger = 60,
      distanceY = $(window).scrollTop(),
      shrinkOn = headerDistanceTrigger,
      header = $(".main-header");

    distanceY > shrinkOn
      ? header.addClass("floated")
      : header.removeClass("floated");
  }

  // Mobile menu by cloning
  var isMobile = isMobile();

  if (isMobile) {
    var $mainHeader = $(".main-header");
    var $mainMenu = $(".main-nav");
    var $mobileHeader = $(".mobile-header");
    var $newMenu = $mainMenu.clone();
    var $menuIcon = $(".js-hamburger").show();
    var $logo = $(".main-header .logo");
    var $newLogo = $logo.clone();
    var $secondary = $(".main-header .secondary");

    $secondary.remove();
    $mainMenu.find(".main-nav-item").hide();
    $mobileHeader.empty().prepend($newLogo).append($newMenu);

    $(".js-hamburger").on("click", function() {
      $(this).toggleClass("is-active");
      $mobileHeader.toggleClass("is-open");
    });
  } else {
    $(window).on("scroll", floatedHeader);
    floatedHeader();
  }

  // Generic Content Toggling
  $(".js-toggle-content").animate({height: 'hide'}, 0);
  $(document).on("click", ".js-trigger-toggle", function(e) {
    var target = $(this).data('target');
    var content = (target) ? $(target) : $(this).next(".js-toggle-content");
    $(content[0]).animate({height: 'toggle'}, 700);
    $(this).not(".js-dont-hide").hide();
  });

  // Link on project hexagons
  $(document).on("click", "[data-link]", function(event) {
    var url = window.location.origin + $(this).data("link");
    window.location.href = url;
  });

  // Project Carrousel
  var carruselResponsiveOptions = [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ];

  $(".js-carrusel-1").length > 0 &&
    $(".js-carrusel-1").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-1 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-1 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  $(".js-carrusel-2").length > 0 &&
    $(".js-carrusel-2").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-2 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-2 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  $(".js-carrusel-3").length > 0 &&
    $(".js-carrusel-3").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-3 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-3 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  $(".js-carrusel-variable").length > 0 &&
    $(".js-carrusel-variable").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      variableWidth: true,
      prevArrow: $(".js-carrusel-variable ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-variable ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  // Project Carrousel
  $(".js-main-carrusel").length > 0 &&
    $(".js-main-carrusel").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      centerMode: true,
      prevArrow: $(".project-carrusel-main .btn-arrows-left"),
      nextArrow: $(".project-carrusel-main .btn-arrows-right")
    });

  // Footer Carrousel
  $(".js-carrusel-footer").length > 0 &&
    $(".js-carrusel-footer").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      // variableWidth: true,
      // centerMode: true,
      prevArrow: $(".footer-carrusel .btn-arrows-left"),
      nextArrow: $(".footer-carrusel .btn-arrows-right"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
});

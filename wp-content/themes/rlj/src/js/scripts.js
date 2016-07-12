$(function(){

  var homeHeaderBackground = function() {
    var homeHeader = $('.home .header');

    $(window).scroll(function() {
      var scrollPosition = $(window).scrollTop();

      if (scrollPosition > 1) {
        homeHeader.addClass('js-bg-white');
      }

      if (scrollPosition == 0) {
        homeHeader.removeClass('js-bg-white');
      }
    });
  };

  mobileNav = function() {
    var siteHeader = $('.header');
    var mobileBtn = $('.btn-mobile');
    var mainMenu = $('.menu-main-menu-container');
    var body = $('body');

    mobileBtn.on('click', function(e){
      e.preventDefault();
      body.toggleClass('js-no-scroll');
      mobileBtn.toggle('js-is-active');
      mainMenu.toggleClass('js-is-visible');
    });
  };

  servicesTabs = function() {
    var tabItem = $('.services-tabs--item');
    var servicesItem = $('.services-item');

    tabItem.first().addClass('is-active');
    servicesItem.first().addClass('is-active');

    tabItem.on('click', function(e){
      e.preventDefault();
      if (!$(this).hasClass('is-active')) {
        var tabNum = $(this).index();
        var nthChild = tabNum+1;
        tabItem.removeClass('is-active');
        $(this).addClass('is-active');
        $(".services-item").removeClass('is-active');
        $(".services-item:nth-child("+nthChild+")").addClass('is-active');
      }
    });
  };

  projectsFilters = function() {
    var filter = $('.project-filters a');
    var projectGridItem = $('.project-grid--item');
    var projectGridItemCategories = projectGridItem.data('categories');

    filter.on('click', function(e) {
      e.preventDefault();

      var fitlerCategory = $(this).data('category');

      filter.removeClass('is-active');
      $(this).addClass('is-active');
      projectGridItem.hide();
      $('.project-grid--item[data-categories=' + fitlerCategory + ']').show();
    });
  };

  $('.project-slider').bxSlider({
    nextText: '<svg class="icon-prev project-slider--icon"><use xlink:href="#icon-prev"></use></svg>',
    prevText: '<svg class="icon-next project-slider--icon"><use xlink:href="#icon-next"></use></svg>',
    pager: false
  });

  $(window).on('load', function() {
    $('.animate').addClass('fade-in');
  });

  homeHeaderBackground();
  mobileNav();
  servicesTabs();
  projectsFilters();

});
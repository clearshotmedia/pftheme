// external js: isotope.pkgd.js

jQuery( document ).ready( function( $ ) {
// init Isotope

var $grid = $('.grid').imagesLoaded( function() {
 $grid.isotope({
    itemSelector: '.gallery-item',
  //  layoutMode: 'masonry',
    masonry: {
      columnWidth: 1,
     // gutter: 0
    },
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });
});
var header = $(".start-header");
$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 10) {
    header.removeClass('start-style').addClass("scroll-on");
  } else {
    header.removeClass("scroll-on").addClass('start-style');
  }
});
  
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };
  
  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $grid.isotope({ filter: filterValue });
  });
  

  // Light box
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

// end lightbox
  
  $('.navbar-nav .dropdown  a').click(function() {
    if (!$(this).hasClass("parent-clicked")) {
       $(this).addClass("parent-clicked");
     } else {
       location.href = this.href;
     }
   });
  // change is-checked class on buttons
  $('.filter-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
    
});
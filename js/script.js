
$(document).ready(function(){
// top sale owl carousel
$("#top-sale .owl-carousel").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    responsive : {
        0: {
            items: 1
        },
        400: {
            items: 1
        },
        300: {
            items: 1
        },
        1000 : {
            items: 3
        }
    }
});

  // isotope filter
  var $grid = $(".grid").isotope({
    itemSelector : '.grid-item',
    layoutMode : 'fitRows'
});

// filter items on button click
$(".button-group").on("click", "button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue});
})


 // blogs owl carousel
 $("#blogs .owl-carousel").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    responsive : {
        0: {
            items: 1
        },
        600: {
            items: 3
        }
    }
})

// external js: isotope.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
    itemSelector: '.color-shape'
  });
  
  // store filter for each group
  var filters = {};
  
  $('.filters').on( 'change', function( event ) {
    var $select = $( event.target );
    // get group key
    var filterGroup = $select.attr('value-group');
    // set filter for group
    filters[ filterGroup ] = event.target.value;
    // combine filters
    var filterValue = concatValues( filters );
    // set filter for Isotope
    $grid.isotope({ filter: filterValue });
  });
  
  // flatten object by concatting values
  function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
      value += obj[ prop ];
    }
    return value;
  }
  




})
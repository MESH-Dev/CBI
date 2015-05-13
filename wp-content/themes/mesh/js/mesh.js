jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  $(".image-full-overlay").hover(function() {
    $(".image-full-overlay .text-1").toggle();
    $(".image-full-overlay .text-2").toggle();
  });

  $(".image-partial-overlay").hover(function() {
    $(".image-partial-overlay .text-2").toggle();
  });

  var grid = $('#container').isotope({
    // options
    columnWidth: 200,
    itemSelector: '.item'
  });

  // bind filter button click
  $('.types li').on( 'click', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    grid.isotope({ filter: filterValue });
    $('.types').find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {

    });
  });

});

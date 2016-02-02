jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded');

  //Let's do something awesome!

  $(".image-full-overlay").hover(function() {
    $(this).find(".text-1").toggleClass('hidden');
    $(this).find(".text-2").toggleClass('hidden');
  });

  // $(".image-partial-overlay").hover(function() {
  //   $(this).find(".text-2").toggleClass('hidden');
  // });

  $(".title").hover(function() {
      $(this).find(".unhide").toggle();
      $(this).find(".hide").toggle();
  })



  $('#container').waitForImages(function() {

      // All descendant images have loaded, now slide up.
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


  $('#close-icon').click(function() {
    $.sidr('close');
  });

});

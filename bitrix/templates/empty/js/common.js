$(function() {

// footer
//-----------------------------------------------------------------------------
  var
    footerHeight,
    $footer = $('#footer'),
    $pageWrapper = $('#pageWrapper'),
    placeFooter = function() {
      footerHeight = $footer.outerHeight();
      $pageWrapper.css({paddingBottom: footerHeight});
      $footer.css({marginTop: -footerHeight});
    };

  $(window)
    .on('load', function() {
      placeFooter();
    })
    .on('resize', function() {
      placeFooter();
    });

  $('.jcarousel').jcarousel({
    // Configuration goes here
  });

  $('.tabs a').on('click', function(e) {
    e.preventDefault();
    console.log(this.hash);
    $('.tabs a').not(this).parent().removeClass('active');
    $(this).parent().addClass('active');
    var
      $tabs = $('.tab'),
      $activeTab = $(this.hash);
    $tabs.hide();
    $activeTab.show();
  });
  $('.schedule').on('click', function(){
    $('.schedule tr').toggleClass('none');
  });

  $(".fancybox-thumb").fancybox({
    prevEffect	: 'none',
    nextEffect	: 'none',
    padding: [0],
    helpers	: {
      title	: {

      },
      thumbs	: {
        width	: 82,
        height	: 82
      }
    }
  });

// placeholder
//-----------------------------------------------------------------------------
  $('input[placeholder], textarea[placeholder]').placeholder();

});
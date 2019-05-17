(function($) {

  $.fn.changeColor = function(color) {
    this.each(function() {
      $(this).css('color', color);
      $(this).css('text-decoration', 'none');

      $(this).hover(function() {
        $(this).css('background-color', '#DDDDDD');
      }, function(){
        $(this).css('background-color', '#FFFFFF');
      });
    });

    return this;
  }

}(jQuery));

(function($){

  $('.navbar-nav a').click(function(event){
    var li = $(this).parent()
    console.log(li);
        li.addClass('active')
        .siblings().removeClass('active');
  });


})(jQuery);

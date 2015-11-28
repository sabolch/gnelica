$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: 5000
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  $("#owl-demo-video").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigationText : ["",""],
      pagination: false

 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

  $("#owl-demo-review").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      navigationText : ["",""],
      pagination: false

 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });

    $('#link1').click(function(){
      if(jQuery.browser.msie && parseInt(jQuery.browser.version)==6){
        if($('#look1').css("display")=="block"){
          $('#look1').css("display", "none");
        }
        else{
          $('#look1').css("display", "block");
        }
      }
      else{
        $('#look1').toggle("slow");
      }
      if($('#link1').text()=='скрыть ответ'){
        $('#link1').text('Показать ответ');
      }
      else{
        $('#link1').text('скрыть ответ');
      }
    });
 
});
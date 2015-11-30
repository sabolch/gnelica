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
 
  $('#send-form-button').click( function(event){
    //alert('sss');
    
    var empty = true;
    $('.priom  input[name="uname"]').each(function(o){
        var str = $(this).val().trim();
        if ((str == "") || (str == "Телефон для уточнения размера бытовки")){
          empty = false;
        }
    });

    $('.priom  input[name="phone"]').each(function(o){
        var str = $(this).val().trim();
        if ((str == "") || (str == "Телефон для уточнения размера бытовки")){
          empty = false;
        }
    });

    $('.priom  input[name="email"]').each(function(o){
        var str = $(this).val().trim();
        if ((str == "") || (str == "Телефон для уточнения размера бытовки")){
          empty = false;
        }
    });

    if (empty == false){
      $('.form_error').css('display','block');
      return false;

    }else{
       $('.form_error').css('display','none');
       $('.form_sended').css('display','block');
       
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.priom').serialize(),
        success: function(data) {
        }
      });
      
    }
    empty = true;
    $(this).parent().find('.error').css('display','none');

    return false;
  });

});


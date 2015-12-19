$(document).ready(function() {

  var video_ryad = 1; 
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


$("#main-slider").owlCarousel({
    navigation : false, 
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination: true,
    autoPlay: true,
    loop: true,
    singleItem:true,
    items : 1, 
});

$("#video-testimonails-slider").owlCarousel({
    nav : true,
    slideSpeed : 300,
    pagination : false,
    navText : ["",""],
    items : 1, 
    autoPlay: true,
    loop: true,
});

$("#video-testimonails-slider-2").owlCarousel({
    nav : true,
    slideSpeed : 300,
    pagination : false,
    navText : ["",""],
    items : 1, 
    autoPlay: true,
    loop: true,
});

$("#testimonails-slider").owlCarousel({
    nav : true,
    slideSpeed : 300,
    pagination : false,
    navText : ["",""],
    items : 1, 
    autoPlay: true,
    loop: true,
});
$("#testimonails-slider").owlCarousel({
    navigation : false, 
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination: false,
    autoPlay: true,
    loop: true,
    singleItem:true,
    items : 1, 
});

$("#partners-slider").owlCarousel({
    nav : false, 
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true,
    pagination: false,
    autoPlay: true,
    loop: true,
    singleItem:true,
    items : 5, 
    nav : true,
    navText : ["",""],
});

$("#sert-slider").owlCarousel({
    nav : true,
    slideSpeed : 300,
    pagination : false,
    navText : ["",""],
    items : 2, 
    autoPlay: true,
    loop: true,
});
  $('.see_more_disease').click(function(){
    $(this).parent().parent().parent().find('.treatment-href_hidden').fadeIn();
    //$(this).css('display','none');
    return false;

  }); 

  $('.videothumb').click(function(){
    var video_frame = $(this).parent().find('.hide-frame').html();
    $('#video_modal_1 .video_modal_body').html(video_frame);
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
 
  $('#show-more-video-button').click( function(event){
    //alert('xxx');
    $.ajax({
      type: "GET",
      url: "/get_more_videos.php",
      data: "name=John&video_ryad="+video_ryad,
      success: function(msg){
        video_ryad++; 
        $('#more-videos').append(msg);
      }
    });

    
    

    return;

  });


$('.faq-toggle-button').click( function(event){ 
    var val = $(this).html();
    
    if (val.trim() == 'Скрыть ответ') {
        $(this).parent().find('.faq-answer').slideToggle();
        $(this).html('Показать ответ');
    }else{
        $(this).parent().find('.faq-answer').slideToggle();
        $(this).html('Скрыть ответ');
    }
    
    return;
});

$('#ask-question-submit').click( function(event){ 
   $('.blue-button').trigger('click');
   return;
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



jQuery(document).ready(function($){
    var domen = location.hostname;
    $('body').append('<style>\
        .scrollTop{\
          display:none; z-index:9999; position:fixed; bottom:10px; left:90%; width:50px; height:70px;\
          background:url(http://'+domen+'/wp-content/themes/gnelitsa/img/arrow_up.png) 0 0 no-repeat;\
        }\
        .scrollTop:hover{ background-position:0 -76px;}\
      </style>');

  var
  speed = 500,
  $scrollTop = $('<a href="#" class="scrollTop">').appendTo('body');        

  $scrollTop.click(function(e){
    e.preventDefault();

    $( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
  });

  //появление
  function show_scrollTop(){
    ( $(window).scrollTop() > 300 ) ? $scrollTop.fadeIn(600) : $scrollTop.fadeOut(600);
  }
  $(window).scroll( function(){ show_scrollTop(); } );
  show_scrollTop();

});
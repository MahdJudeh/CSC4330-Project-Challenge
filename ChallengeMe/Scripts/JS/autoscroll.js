$(document).ready(function(){
  $('.loader').hide();
  var load = 0;
    $(window).scroll(function(){
      if($(window).scrollTop() >= $(document).height() - $(window).height()){
        $('.loader').show();
        load++;
        $.post("/Scripts/php/grabChallenges.php", {load:load}, function(data){
          $('.mainBody').append(data);
        });
        $('.loader').hide();
    }
  });
});

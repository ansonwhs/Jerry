let $navBtnStatus = false;


$(document).ready(function(){
  /* navigation button animation */
  /*
     figure out how to disable href and hover effect when navigation open
  */
  $(".nav_btn").click(function(){
    if($navBtnStatus === false){
      $(".rm_logo, .crew_description, .break").css("opacity", "0.1");
      $(".onclick_nav").show();
      $(".crew0_icon, .crew1_icon, .crew2_icon").removeClass("icon_hover");
      $navBtnStatus = true;
    }
    else {
      $(".rm_logo, .crew_description, .break").css("opacity", "1");
      $(".onclick_nav").hide();
      $(".crew0_icon, .crew1_icon, .crew2_icon").addClass("icon_hover");
      $navBtnStatus = false;
    }
  })

  /* scroll down effect */
  /*
     still in progress!
  */
  /*$(document).scroll(function(){
    let $getScrollPosition = $(this).scrollTop();
    if ($getScrollPosition > 0){
      $("nav_btn_area").css("background-color", "red");
    }
  })*/
})

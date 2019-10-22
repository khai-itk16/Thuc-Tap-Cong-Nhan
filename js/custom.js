$(document).ready(function () {
    $(document).scroll(function() {
        if ($(document).scrollTop() > 94){
          $(".header-bottom").addClass("fixed animated fadeIn");
        } else {
          $(".header-bottom").removeClass("fixed animated fadeIn");
        } 

        if ($(document).scrollTop() < 8){
            $("#toTop").css({
                opacity: 0,
                visibility: "hidden",
            });
          } else {
            $("#toTop").css({
                opacity: 1,
                visibility: "visible",
            });
        } 
    });

    $("#toTop").click(function (e) { 
        e.preventDefault();
        $("html,body").animate({
          scrollTop: 0
      }, 700);
    });

    $(".delete-item").click(function (e) { 
      e.preventDefault();
      $(this).parent().remove();
      totalCost();
    });

    $(".minus").click(function (e) { 
      e.preventDefault();
      var quatity = $(this).next().val();
      if (quatity > 1) {
        var price = $(this).parents().prev().children().val();
        $(this).next().val((Number)(quatity) - 1);
        var total = (Number)(price) * ((Number)(quatity)-1);
        $(this).parent().next().children().val(total);

        totalCost();
      } else {
        alert("Hiện tại số lượng sản phẩm bằng 1");
      }
      
    });

    $(".plus").click(function (e) { 
      e.preventDefault();
      var price = $(this).parents().prev().children().val();
      var quatity = $(this).prev().val();
      $(this).prev().val((Number)(quatity)+1);
      var total = (Number)(price) * ((Number)(quatity)+1);
      $(this).parent().next().children().val(total);

      totalCost();
    });

    $(".quatity-status").blur(function() {
      var quatity = $(".quatity-status").val();
      if (quatity == '' || quatity == 0 || isNaN(quatity)) {
        $(this).val(1);
        totalCost();
      } else {
        var price = $(this).parent().prev().children().val();
        var quatity = $(this).val();
        var total = (Number)(price) * ((Number)(quatity));
        $(this).parent().next().children().val(total);
        totalCost();
      }
    });

    function totalCost() {
      var sum = 0;
      $(".total-status").each(function(){
          sum += +$(this).val();
      });
      $(".total-price").val(sum);
    }

    totalCost();
    
});


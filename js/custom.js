$(document).ready(function () {
    $(document).scroll(function() {
        if ($(document).scrollTop() > 94){
          $(".header-bottom").addClass("fixed animated fadeInDown");
        } else {
          $(".header-bottom").removeClass("fixed animated fadeInDown");
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

    
    $('.minus').on('click', function(){
      let root = $(this).next();
      var id = $(this).attr('id');
      var status=-1;
      
      $.ajax({
        url : "xuly_capnhatgiohang.php",
        method : 'GET',
        data : {
          id : id,
          status : status
        },
        success : function (data) {
          if (data==true) {
            let priceContent = parseInt(root.parent().parent().children('.price-content').children('.price-status').val());
            let qty = parseInt(root.val())-1;
            root.parent().parent().children('.total-content').children('.total-status').val(priceContent*qty);
            root.val(qty);
            let currentTotal = parseInt($('.cart-item-content .total-price').val());
            $('.cart-item-content .total-price').val(currentTotal- priceContent);
            let current = $('#test123').text();
            let num = parseInt(current)
            $('#test123').text(num-1);
          }
        }
     })
    });
    //

    
    $('.plus').on('click', function(){
      //let data = {};
      let root = $(this).prev();
      var id = $(this).attr('id');
      var status=1;
      //data.id = id;
      $.ajax({
        url : "xuly_capnhatgiohang.php",
        method : 'GET',
        data : {
          id : id,
          status : status
        },
        success : function (data) {
          if (data==true) {
            let priceContent = parseInt(root.parent().parent().children('.price-content').children('.price-status').val());
            let qty = parseInt(root.val())+1;
            root.parent().parent().children('.total-content').children('.total-status').val(priceContent*qty);
            let currentTotal = parseInt($('.cart-item-content .total-price').val());
            $('.cart-item-content .total-price').val(currentTotal+priceContent);
            root.val(qty);

            let current = $('#test123').text();
            let num = parseInt(current)
            $('#test123').text(num+1);
          }else {
            alert('Sản phẩm đã hết hàng');
          }
        }
     });
    })

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

    $(".nav > li").click(function (e) { 
     // e.preventDefault();
      $(".nav > li").removeClass("active");
      $(this).addClass("active");
    });

    //
    $('.cart-to').on('click', function(){
      let data = {};
      var id = $(this).attr('id');
      data.id = id;
      // alert(id);
      $.ajax({
        url : "xuly-giohang.php",
        method : 'GET',
        data : {
          id : id
        },
        success : function (data) {
          if (data==true) {
            alert('Thêm sản phẩm vào giỏ hàng');
            let current = $('#test123').text();
            let num = parseInt(current)
            $('#test123').text(num+1);
          } else {
            alert('Sản phẩm đã hết hàng');
          }
          
        }



     })
    });
    //
    $('.xoagiohang').on('click', function(){
      if(confirm("Bạn chắc chắn có muốn xóa sản phẩm này không!")) {
        let data = {};
        var id = $(this).attr('id');
        var root = $(this).parent().parent();
        data.id = id;
        // alert(id);
        $.ajax({
          url : "xuly_xoagiohang.php",
          method : 'GET',
          data : {
            id : id
          },
          success : function (data) {
            if (data==true) {
              //alert('Xóa sản phẩm thành công');
              let current = $('#test123').text();
              let num = parseInt(current);
              let numDel = root.children('.count-content').children('.quatity-status').attr('value');
              // console.log(numDel)
              $('#test123').text(num-parseInt(numDel));
              let totalPrice = parseInt(root.children('.total-content').children('.total-status').attr('value'));
              //console.log("Hello"+totalPrice);
              let currentTotal = parseInt($('.cart-item-content .total-price').val());
              $('.cart-item-content .total-price').val(currentTotal - totalPrice);
              root.remove();
              if ($('#test123').text()==="0"){
                $('.content').html(`
                  <div class="col-md-12" style="background: white; padding: 10px;">
                    <h3 class="no-item">Không có sản phẩm nào trong giỏ </h3>
                  </div>
                  <div class="col-md-12" style="background: white; padding: 20px; margin-bottom: 20px;">
                    <div class="cart-order">
                      <button><a href="index.php">MUA THÊM SẢN PHẨM</a></button>
                      <input type="submit" value="ĐẶT HÀNG">
                    </div>
                  </div>`
                );
              }
            }
          }
        })
      }
    });
    //
    
});


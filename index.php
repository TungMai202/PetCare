<?php
  include_once("config.php");
  $db = new DB();
  $conn = $db->conn();
  $get_product = mysqli_query($conn,'SELECT * FROM product');
  $get_order1 = mysqli_query($conn,'SELECT * FROM service WHERE type = 1')->num_rows;
  $get_order2 = mysqli_query($conn,'SELECT * FROM service WHERE type = 2')->num_rows;
  $get_order3 = mysqli_query($conn,'SELECT * FROM service WHERE type = 3')->num_rows;
  $get_order4 = mysqli_query($conn,'SELECT * FROM service WHERE type = 4')->num_rows;
  $get_order4 = mysqli_query($conn,'SELECT * FROM service WHERE type = 4')->num_rows;
  $get_order5 = mysqli_query($conn,'SELECT * FROM service WHERE type = 5')->num_rows;
  $get_order5 = mysqli_query($conn,'SELECT * FROM service WHERE type = 5')->num_rows;
  $get_order6 = mysqli_query($conn,'SELECT * FROM service WHERE type = 6')->num_rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl-MsFhz17iSTKnnKouL6A2yoMZ8mYCRBz1o9rQ1kX7A&s">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/font-icon/themify-icons/themify-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>
<body>
  <div id="home">
    <div id="header">
      <!--Begin: Nav-->
      <ul id="nav">
        <li><a href="#">Home</a></li>
        <li><a href="#store">Pet Care</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a href="#">More <i class="nav-arrow-down ti-angle-down"></i>
          </a>
          <ul class="snav">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
      </ul>
      <!--End: Nav-->

      <!--Begin: Btn Search-->
      <div class="search-btn">
        <i class="search-icon ti-search"></i>
      </div>
      <!--End: Btn Search-->
    </div>

    <div id="slider">
      <div class="text-content">
        <h2 class="text-heading">Thú Cưng</h2>
        <p class="text-description">Người bạn đồng hành đáng yêu</p>
      </div>
    </div>

    <div id="content">

      <!-- About section -->
      <div id="store" class="about-section">
        <h2 class="about-heading">PET CARE</h2>
        <p class="about-sub-heading">Chọn Pet Care, chọn yêu thương</p>
        <p class="about-text">Chào mừng bạn đến với Pet Care, nơi chúng tôi tận tâm chăm sóc và yêu thương thú cưng của bạn. Chúng tôi tự hào là một cửa hàng chuyên về chăm sóc thú cưng, mang đến một loạt các dịch vụ và sản phẩm cao cấp để đảm bảo sức khỏe và hạnh phúc cho bạn và người bạn đáng yêu của bạn. Pet Care không chỉ là một cửa hàng chăm sóc thú cưng thông thường, mà là một nơi mà chúng tôi đảm bảo sự yên tâm, sức khỏe và hạnh phúc cho thú cưng của bạn. Với sự tận tâm và chuyên nghiệp, chúng tôi hy vọng trở thành địa điểm tin cậy cho mọi nhu cầu chăm sóc thú cưng của bạn.
        </p>
      </div>

      <!-- Team -->
      <div class="member-list">
        
        <div class="column-full text-center">
          <p class="member-name">Hải Sơn</p>
          <img src="assets/image/avatarMember/AvtSon.jpg" alt="AvtSon" class="member-avt">
        </div>

        <!-- <div class="member-item">
          <p class="member-name">Toàn Lý</p>
          <img src="assets/image/avatarMember/AvtToan.jpg" alt="AvtToan" class="member-avt">
        </div>
        <div class="clear"></div> -->
      </div>

      <!-- Service section -->
      <div id="service" class="service">
        <div class="service-section">
          <h2 class="service-heading text-white">SERVICES</h2>
          <p class="service-sub-heading text-white">Chăm sóc tận tâm, không gian thân thiện</p>
          
          <!-- Service Introduce -->
          <ul class="service-list">
            <li>Tắm rửa toàn thân <span class="quantity"><?= $get_order1 ?></span></li>
            <li>Cắt, tỉa lông theo yêu cầu <span class="quantity"><?= $get_order2 ?></span></li>
            <li>Cắt, mài móng <span class="quantity"><?= $get_order3 ?></span></li>
            <li>Massage thư giãn <span class="quantity"><?= $get_order4 ?></span></li>
            <li>Vệ sinh tuyến mồ hôi <span class="quantity"><?= $get_order5?></span></li>
            <li>Dịch vụ lưu trú <span class="quantity"><?= $get_order6 ?></span></li>
          </ul>

          <!-- Booking Service -->
          <div class="row booking-service">
            <?php
              if($get_product->num_rows > 0){
                while($item_product = mysqli_fetch_assoc($get_product)){
                  ?>
                    <div class="booking-item">
                      <img src="<?= $item_product['image'] ?>" alt="<?= $item_product['title'] ?>" class="item-img">
                      <div class="item-content">
                        <h3 class="item-heading"><?= $item_product['title'] ?></h3>
                        <p class="item-floor"><?= $item_product['subtile'] ?></p>
                        <p class="item-desc"><?= $item_product['description'] ?></p>
                        <button class="btn js-booking" data-id="<?= $item_product['id'] ?>">Order</button>
                      </div>
                    </div>
                  <?php
                }
              }
            ?>
          </div>
          <div class="clear"></div>
        </div>
      </div>

      <!-- Contact section -->
      <div id="contact" class="contact-section">
        <h2 class="contact-heading">CONTACT</h2>
        <p class="contact-sub-heading">Giải đáp mọi thắc mắc của bạn</p>
        
        <div class="contact-content row">
          <div class="column column-2 contact-info">
            <p><i class="ti-location-pin"></i>Quận Bình Thạnh, Thành phố Hồ Chí Minh</p>
            <p><i class="ti-mobile"></i>SĐT: 0876927550</p>
            <p><i class="ti-email"></i>Email: decade1808@gmail.com</p>
          </div>

          <div class="column column-2 contact-form">
            <form action="">
              <div class="row">
                <div class="column column-2">
                  <input type="text" name="name" placeholder="Name" required id="" class="form-control">
                </div>
                <div class="column column-2">
                  <input type="email" name="email" placeholder="Email" required id="" class="form-control">
                </div>
              </div>
              <div class="row mt-8">
                <div class="column column-full">
                  <input type="text" name="message" placeholder="Message" required id="" class="form-control">
                </div>
              </div>
              <input class="btn pull-right mt-16 send-contact" type="submit" value="SEND">
            </form>
          </div>
        </div>
      </div>
      <!-- End : Contact section -->

      <div class="map-section">
        <img src="./assets/image/slider/map.jpg" alt="">
      </div>
    </div>

    <div id="footer">
      <div class="socials-list">
        <a href=""><i class="ti-facebook"></i></a>
        <a href=""><i class="ti-instagram"></i></a>
        <a href=""><i class="ti-youtube"></i></a>
        <a href=""><i class="ti-pinterest"></i></a>
        <a href=""><i class="ti-twitter"></i></a>
        <a href=""><i class="ti-linkedin"></i></a>
      </div>
      <p class="copyright">
        Copyright © 2024 <a href="">PetCare</a>
      </p>

    </div>
  </div>
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Đặt dịch vụ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group mb-5">
          <label for="">Họ tên <span class="text-danger">*</span></label>
          <input name="fullname" type="text" class="form-control">
        </div>
        <div class="form-group mb-5">
          <label for="">Số điện thoại <span class="text-danger">*</span></label>
          <input name="phone" type="number" class="form-control">
        </div>
        <div class="form-group mb-5">
          <label for="">Email <span class="text-danger">*</span></label>
          <input name="email" type="email" required class="form-control">
        </div>
        <div class="form-group mb-5">
          <label for="">Dịch vụ <span class="text-danger">*</span></label>
          <select class="type form-control" name="type">
            <option value="1">Tắm rửa toàn thân</option>
            <option value="2">Cắt, tỉa lông theo yêu cầu</option>
            <option value="3">Cắt, mài móng</option>
            <option value="4">Massage thư giãn</option>
            <option value="5">Vệ sinh tuyến mồ hôi</option>
            <option value="6">Dịch vụ lưu trú</option>
          </select>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
        <button type="button" class="btn btn-primary">Đặt Chỗ</button>
      </div>
    </div>
  </div>
</div>
  <script>
    $(document).ready(function(){
      $('body').on('click','.js-booking', function(){
        var id = $(this).data('id');
        $('#myModal').modal('show');
        $('.btn-primary').click(function(){
          var fullname = $('#myModal input[name="fullname"]').val();
          var phone = $('#myModal input[name="phone"]').val();
          var email = $('#myModal input[name="email"]').val();
          var type = $('#myModal select[name="type"]').val();
          var error = 0;
          if(fullname == '' || phone == '' || email == ''){
            alert('Vui lòng nhập đầy đủ thông tin!');
            error++;
          }else{
            $.ajax({
              type : "POST",
              dataType : "JSON",
              data : { id, fullname, phone, email, type },
              url : "booking.php?action=booking",
              beforeSend:function(){
                $('.btn-primary').attr('disabled',true);
              },
              success:function(data){
                $('.btn-primary').attr('disabled',false);
                $('#myModal input[name="fullname"]').val('');
                $('#myModal input[name="phone"]').val('');
                $('#myModal input[name="email"]').val('');
                if(data.status){
                  swal(
                    'Thành công',
                    'Cảm ơn bạn đã đặt booking. Chúng tôi sẽ liên hệ cho bạn trong thời gian sớm nhất!',
                    'success'
                  )
                }else{
                  swal(
                    'Lỗi',
                    'Hệ thống đang có lỗi. Vui lòng thử lại sau',
                    'error'
                  )
                }
                $('#myModal').modal('hide');
                setTimeout(() => {
                  location.reload();
                }, 1000);
              }
            })
          }
        })
      });
      $('body').on('click','.send-contact', function(){
        var name = $('.contact-form input[name="name"]').val();
        var email = $('.contact-form input[name="email"]').val();
        var message = $('.contact-form input[name="message"]').val();
        if(name == '' || email == '' || message == ''){
            alert('Vui lòng nhập đầy đủ thông tin!');
            error++;
          }else{
            $.ajax({
              type : "POST",
              dataType : "JSON",
              data : { name, email, message },
              url : "booking.php?action=contact",
              beforeSend:function(){
                $('.send-contact').attr('disabled',true);
              },
              success:function(data){
                $('.send-contact').attr('disabled',false);
                $('.contact-form input[name="name"]').val('');
                $('.contact-form input[name="email"]').val('');
                $('.contact-form input[name="message"]').val('');
                if(data.status){
                  swal(
                    'Thành công',
                    'Cảm ơn bạn đã liên hệ. Chúng tôi sẽ liên hệ cho bạn trong thời gian sớm nhất!',
                    'success'
                  )
                }else{
                  swal(
                    'Lỗi',
                    'Hệ thống đang có lỗi. Vui lòng thử lại sau',
                    'error'
                  )
                }
              }
            })
          }
      });
    });
  </script>
</body>
</html>
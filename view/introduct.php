<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script type="text/javascript">
    var cars = ["../model/image/k.png", "../model/image/h.png", "../model/image/ct.png"];
    var position = 0;
    setInterval(function() {
      document.getElementById('myIamge').src = cars[position];
      //document.getElementById('number').innerHTML =""+position+1"/3";
      position++;
      if (position == 3) {
        position = 0;
      }
    }, 3000);
  </script>
</head>

<body>
  <div>
    <h2>Fail Login</h2>
    <form action="signup.php" method="">
      <input name="signup" id=" " type="submit" class="btn btn-primary " type="button " value="SIGN UP" style="margin: 30px; ">
    </form>
    <form action="..\index.php" method="">
      <input name="" id=" " type="submit" class="btn btn-primary " type="button " value="LOGIN AGAIN" style="margin: 30px; ">
    </form>
  </div>
  <div style="text-align: center;">
    <img style="width: 1000px ; height:500px" id="myIamge" src="../model/image/logo.png" alt="" st>
  </div>
  <h1> HALO la gi? </h1>
  <h3><i> Halo, được tạo ra tại Trung tâm PNV21B của PN ở Viet Nam vào tháng 10/2019.
      Kể từ đó, nó đã phát triển thành ứng dụng di động phổ biến nhất Viet Nam với hơn 1 tỷ người dùng hoạt động hàng tháng.
      Trên nền tảng này, họ trò chuyện, chơi game, mua sắm, đọc tin tức, trả tiền cho bữa ăn và đăng các suy nghĩ cũng như hình ảnh của mình.
      Thậm chí, giờ đây người dùng có thể đặt hẹn với bác sĩ hoặc nộp đơn ly dị trực tuyến thông qua Halo.</i></h3>
  <img style="margin-left:550px" src="../model/image/h.png" alt="">
  <h1>Tinh Nang</h1>
  <h3><i>Chỉ trong đợt nghỉ Tết 2019, hơn 8 triệu người Viet Nam đã trao nhận hơn 40 triệu bao "lì xì".
      Người dùng bắt đầu liên kết tài khoản ngân hàng với ví điện tử di động trên Halo của họ.
      Điều này đã giúp WeChat có thể bắt đầu cạnh tranh với Alipay, dịch vụ thanh toán di động do Alibaba phát triển.
      Vào đêm giao thừa năm 2018, 688 triệu người đã sử dụng dịch vụ mừng tuổi của Halo.</i></h3>
  <img style=" width: 500px; margin-left:600px" src="../model/image/k.png" alt="">

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gửi Mail Google</title>
</head>
<body>
    <div class="container">
        <h2>Đơn Đặt Xe Online</h2>
        <table class="table">
          {{-- <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead> --}}
          <tbody>
            <tr>
              <td><strong>Tên :</strong> </td>
              <td> {{$name}}</td>
            </tr>
            <tr>
              <td><strong>Lộ Trình :</strong> </td>
              <td>@if ($lotrinh == 1)
                Đón Tiễn Sân Bay Đà Nẵng
            @elseif($lotrinh == 2)
                Đà Nẵng Đi Hội An
            @elseif($lotrinh == 3)
                Đà Nẵng Đi Bà Nà Hill
            @elseif($lotrinh == 4)
                Đà Nẵng Đi Núi Thần Tài
            @elseif($lotrinh == 5)
                Đà Nẵng Đi Cù Lao Chàm
            @elseif($lotrinh == 6)
                Đà Nẵng Đi Ngũ Hành Sơn
            @elseif($lotrinh == 7)
                Đà Nẵng Đi Chùa Linh Ứng
            @elseif($lotrinh == 8)
                Đà Nẵng Đi Hoà Phú Thành
            @elseif($lotrinh == 9)
                Đà Nẵng Đi Vinpearl Nam Hội An
            @elseif($lotrinh == 10)
                Đà Nẵng Đi Mỹ Sơn
            @elseif($lotrinh == 11)
                Đà Nẵng Đi Huế
            @else
               Đà Nẵng Đi Thánh Địa La Vang
                
            @endif</td>
            </tr>
            <tr>
              <td><strong>Số Chỗ :</strong> </td>
              <td>@if ($socho == 1)
                4 Chỗ
            @elseif($socho == 2)
                7 Chỗ
            @else 
                16 Chỗ  
            @endif</td>
            </tr>
            <tr>
                <td><strong>Số Chiều :</strong> </td>
                <td>@if ($sochieu == 1)
                    1 Chiều
                    @else 
                    2 Chiều
                    @endif</td>
            </tr>
            <tr>
                <td><strong>Ngày + Giờ :</strong> </td>
                <td>{{$date}}</td>
            </tr>
            <tr>
                <td><strong>Số Điện Thoại :</strong> </td>
                <td>{{$phone}}</td>
            </tr>
            <tr>
                <td><strong>Địa Điểm Đón : </strong></td>
                <td>{{$address}}</td>
            </tr>
            <tr>
                <td><strong>Nội Dung :</strong> </td>
                <td>{{$body}}</td>
            </tr>
          </tbody>
        </table>
        <p>Email này được gửi từ form đặt xe online của website xedananggiare.com</p>
      </div>

</body>
</html>
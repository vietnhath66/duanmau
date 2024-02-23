<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../assets/css/user.css" />
    <style>
      .header{
        background-color: #19322F;
    }
    body {
            font-family: Arial, sans-serif;
        }
        .order-details, .order-status {
            margin-top: 20px;
        }
        .status-item {
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2{
          color: red;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- bill -->
      <div class="row mt-4 main-web">
        <div class="col-md-12">
          <div class="mt-4">
    <?php
    if(isset($loadhd)&& is_array($loadhd)){
      extract($loadhd);
    }
     ?>
  <div class=texthd>
    <h1>Hoá Đơn: <?php echo $madh ?></h1>
      <hr class="mb-4">
      <p>Ngày tạo: <?php echo $ngaytao ?> </p>
      <p>Tên khách hàng: <?php echo $name ?> </p>
      <p>Địa chỉ: <?php echo $address ?> </p>
      <p>Điện thoại: <?php echo $tel ?></p>
      <p>Email: <?php echo $email ?></p>
      <hr class="mb-4">
      <h3>Phương thức thanh toán: <?php
      if($pttt == 1){
        echo $pttt = "Thanh toán khi nhận hàng";
      } elseif ($pttt == 2) {
        echo $pttt = "Chuyển khoản qua ngân hàng";
      } elseif ($pttt == 3){
        echo $pttt = "Ví điện tử MoMo";
      }
      ?></h3>
      <h2>Tổng tiền: <?php echo $tongdonhang ?></h2>
  </div>


    <!-- <table>
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Tổng cộng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tongCong = 0;
            foreach ($iddh as $sanPham) {
                $thanhtien = $sanPham['gia'] * $sanPham['soLuong'];
                $tongcong += $thanhTien;
                echo "<tr>
                        <td>{$sanPham['ten']}</td>
                        <td>{$sanPham['gia']}</td>
                        <td>{$sanPham['soLuong']}</td>
                        <td>{$thanhtien}</td>
                    </tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" style="text-align: right;">Tổng cộng:</td>
                <td><?php echo $tongCong; ?></td>
            </tr>
        </tfoot>
    </table> -->

    <!-- <div class="order-details">
        <h2>Quá Trình Mua Hàng</h2>
        <div class="order-status">
            <?php
            foreach ($quaTrinhDonHang as $buoc) {
                echo "<div class='status-item'>
                        <p><strong>Thời gian:</strong> {$buoc['thoiGian']}</p>
                        <p><strong>Tình trạng:</strong> {$buoc['tinhTrang']}</p>
                    </div>";
            }
            ?>
        </div>
        </div> -->
            </div>
            </div>
        </div>

      <!-- footer -->
      <!-- <?php include "_footer.php" ?> -->
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
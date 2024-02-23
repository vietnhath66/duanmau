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
    </style>
  </head>
  <body>
    <div class="container">
      <!-- detail product -->
      <?php
      if(isset($_SESSION['user'])){
        $name = $_SESSION['user']['user'];
        $pass = $_SESSION['user']['pass'];
        $email = $_SESSION['user']['email'];
        $address = $_SESSION['user']['address'];
        $tel = $_SESSION['user']['tel'];
      } else {
        $name = "";
        $pass = "";
        $email = "";
        $address = "";
        $tel = "";
      }
      ?>
      <div class="row mt-4 main-web">
        <div class="col-md-12">
          <div class="mt-4">
          <form class="needs-validation" name="frmthanhtoan" method="post" action="index.php?act=hoadon">
                <input type="hidden" name="kh_tendangnhap" value="dnpcuong">

                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i>
                    <h2>Thanh toán</h2>
                    <p class="lead">Vui lòng kiểm tra thông tin Khách hàng, thông tin Giỏ hàng trước khi Đặt hàng.</p>
                </div>

                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Giỏ hàng</span>
                            <span class="badge badge-secondary badge-pill">1</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                            <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                            <input type="hidden" name="sanphamgiohang[1][soluong]" value="2">
                          <?php
                          $tongtien=0;
                          $thanhtien=0;
                          foreach ($loadcart as $value):
                            $tongtien=$value['soluong']*$value['price'];
                            $thanhtien+=$tongtien;
                          ?>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0"><?php echo $value['namesp']; ?></h6>
                                    <small class="text-muted"></small>
                                </div>
                                <span class="text-muted"><?php echo $tongtien; ?></span>
                            </li>
                            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Thắt lưng</h6>
                                    <small class="text-muted">14990000.00 x 8</small>
                                </div>
                                <span class="text-muted">119920000</span>
                            </li> -->
                            <?php endforeach ?>
                            <input type="hidden" value="<?php echo $tongtien;?>" name="tongdonhang">
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tổng thành tiền</span>
                                <strong><?php echo $thanhtien; ?></strong>
                            </li>
                        </ul>

                    </div>

                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Thông tin khách hàng</h4>

                        <div class="row">
                            <div class="col-md-12" >
                                <label for="kh_ten">Họ tên</label>
                                <input type="text" class="form-control" value="<?php echo $name ?>" name="name" >
                            </div>
                            <div class="col-md-12">
                                <label for="kh_diachi">Địa chỉ</label>
                                <input type="text" class="form-control" value="<?php echo $address ?>" name="address">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_dienthoai">Điện thoại</label>
                                <input type="text" class="form-control" value="<?php echo $tel ?>" name="tel">
                            </div>
                            <div class="col-md-12">
                                <label for="kh_email">Email</label>
                                <input type="type" class="form-control" value="<?php echo $email ?>" name="email">
                            </div>  
                        </div >

                        <br >

                        <h4 class="mb-3">Hình thức thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="httt-1" name="pttt" type="radio" class="custom-control-input" required="" value="1"> Thanh toán khi nhận hàng
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-2" name="pttt" type="radio" class="custom-control-input" required="" value="2"> Chuyển khoản qua ngân hàng
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="httt-3" name="pttt" type="radio" class="custom-control-input" required="" value="3"> Ví điện tử MoMo
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div>
                          <a href="?act=hoadon">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Đặt hàng" name="hoadon">
                          </a>
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>

      <!-- footer -->
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
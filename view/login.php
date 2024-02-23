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
    .btn{
      background-color: #19322F;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- form login -->
      <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Nhập thông tin đăng nhập</h5>
          <form id="formAuthentication" class="" action="index.php?act=login" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >Email</label
              >
              <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter your email"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                id="password"
                name="pass"
                placeholder="Enter your password"
              />
            </div>
            <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                     
                      <a href="javascript:void(0);">Nhớ tài khoản</a>
                    </label>
                  </div>
                </div>
            <div class="mb-3">
              <span>Chưa có tài khoản? </span>
              <a href="?act=dangky">Đăng ký!</a>
            </div>
              <input type="submit" name="dangnhap" value="Đăng Nhập" class="btn text-white">
          </form>
          <?php if(isset($thongbao)&&$thongbao!=""){
            echo $thongbao;
          }
          ?>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

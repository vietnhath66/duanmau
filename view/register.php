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
      <!-- form register -->
      <div class="row mt-5 main-web">
        <div class="col-md-4 offset-md-4">
          <h5 class="text-center">Nhập thông tin đăng ký</h5>
          <form action="index.php?act=dangky" method="post">
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input
                type="text"
                class="form-control"
                name="user"
                />
                <span style="color:red;"><?php echo isset($error_user)?$error_user:''?></span>
            </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                name="pass"
              />
              <span style="color:red;"><?php echo isset($error_pass)?$error_pass:''?></span>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input
                type="text"
                class="form-control"
                name="email"
              />
              <span style="color:red;"><?php echo isset($error_email)?$error_email:''?></span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Address</label>
              <input
                type="text"
                class="form-control"
                name="address"
              />
              <span style="color:red;"><?php echo isset($error_address)?$error_address:''?></span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Telephone</label>
              <input
                type="text"
                class="form-control"
                name="tel"
              />
              <span style="color:red;"><?php echo isset($error_tel)?$error_tel:''?></span>
            </div>
            <div class="mb-3">
              <span>Đã có tài khoản? </span>
              <a href="?act=login">Đăng nhập!</a>
            </div>

            <input type="submit" class="btn text-white" name="dangky" value="Đăng ký">
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

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
      .text-right a{
        color: white;
        background-color: #19322F;
      }
      .header{
        background-color: #19322F;
    }
    .btncart{
      text-align: right;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <!-- header -->

      <!-- detail product -->
      <div class="row mt-4 main-web">
        <div class="col-md-12">
          <div class="card mt-5">
            <div class="card-header">Giỏ hàng của bạn</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">STT</th>
                  <th scope="col">Sản phẩm</th>
                  <th scope="col">Đơn giá</th>
                  <th scope="col">Số lượng</th>
                  <td scope="col">Hình ảnh</td>
                  <th scope="col">Thành tiền</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($user as $key => $value):?>
                <tr>
                  <th scope="row"><?php echo $key+1?></th>
                  <td>
                    <span class="font-weight-bold"  
                      ><?php echo $value['namesp']?></span
                    >
                  </td>
                  <td>
                    <?php echo $value['price']?>
                  <td>
                    <!-- <input
                      type="number"
                      value="0"
                      class="form-control"
                      min="0"
                    /> -->
                    <?php echo $value['soluong']?>
                  </td>
                  <td><img src="../uploads/<?php echo $value['image']?>" alt="" width="150px"></td>
                  <td><?php echo $value['thanhtien']?></td>
                  <td>
               
                    <a href="?act=deletecart&idpro=<?php echo $value['idpro']?>">
                      <button class="btn btn-danger">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="16"
                          height="16"
                          fill="currentColor"
                          class="bi bi-trash"
                          viewBox="0 0 16 16"
                        >
                          <path
                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"
                          />
                          <path
                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"
                          />
                        </svg>
                      </button>
                    </a>
                     
                  </td>
                </tr>
                <?php endforeach;?>
                
              </tbody>
            </table>
            <div class="btncart">
                  <a href="?act=thanhtoan">
                  <input class="btn btn-success w-50" type="submit" name="thanhtoan" id="" value="Thanh Toán">
                  </a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-3 offset-md-1">
          <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Xem thêm sản phẩm khác</div>
            <div class="list-group">
            <?php foreach($sp_cungloai as $value):?>
              <a
                href="#"
                class="list-group-item list-group-item-action list-item-link"
              >
              <?php if($value['image']!=null&&$value['image']!=""):?>
                <img src="../upload/<?php echo $value['image'];?>" alt="" />
              <?php endif;?>
                <?php echo $value['name']?>
              </a>
              <?php endforeach;?>
              
            </div>
          </div>
        </div> -->
      </div>

      <!-- footer -->
    </div>

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>

<?php
    session_start();
    include "../model/pdo.php";
    include "../model/binhluan.php";

    $idpro = $_REQUEST['idpro'];
    $dsbl = loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/binhluan.css">
    <style>
        .nd{
            font-size: 25px;
            color: green;
        }
        .cmt{
            padding-right: 425px;
            padding-bottom: 6px;
        }
        .btn{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
<div class="card">
            <div class="card-header"><strong class="nd">Bình luận</strong></div>
            <div class="list-group">
        <!-- form mới  -->
        <div class="card">
              
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nội dung</th>
                        <th>Khách hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Ngày bình luận</th>
                        
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php foreach($dsbl as $bl):?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $bl['noidung'] ?></strong></td>
                        <td><?php echo $bl['iduser']?></td>
                        <td><?php echo $bl['idpro']?></td>
                        <td><?php echo $bl['ngaybinhluan']?></td>
                      </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
        <!-- end form  -->
        
            </div>

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="cmtngoai">
                    <input type="hidden" name="idpro" value="<?php echo $idpro?>">
                    <input class="cmt" type="text" name="noidung">
                    <input class="btn" type="submit" name="guibinhluan" value="Gửi bình luận">
                </div>
            </form>

    <?php
        if(isset($_POST['guibinhluan'])&&$_POST['guibinhluan']){
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }

    ?>
</div>
</body>
</html>
<?php if(isset($_SESSION['user'])){
    extract($_SESSION['user']);

}?>
<div class="container">
    <div  class="main-web">
 <h5 class="text-center" style="margin-top:20px;font-size: 25px; color:chocolate; margin-bottom:20px">
 Tài khoản của bạn
</h5>

  <div class="thongtin" style=" width:350px">
       <?php if(isset($_SESSION['user'])){?>
     1-> <a href="" class="form-label">Xin Chào<?php echo " ".$user?></a>
     <?php }else{?>
     1-> <a href="" class="form-label">Chưa có tài khoản</a>
     <?php } ?><br>

   <!-- đăng nhập admin  -->
       
     <!-- <?php if(isset($_SESSION['user'])){?>
     2-> <a href="../admin/?act=dssp" class="form-label">Đăng nhập admin</a>
     <?php }else{?>
     2-> <a href="" class="form-label">Bạn không phải admin không thể vào admin</a>
     <?php } ?><br>
  -->
     <?php if($role==1){?>
       2-><a href="../admin/?act=thongkedm" class="form-label">Đăng nhập admin</a>
       <?php }else{?>

         <?php echo "2->"." "."<a> Bạn không phải là admin</a>";?>
         <?php } ?><br>
   <!-- quên mật khẩu  -->
   3-> <a href="?act=quenmk">Quên mật khẩu</a><br>
 
   <!-- đơn hàng của tui -->
   4->
   <a href="?act=donhangacc">Đơn hàng của tui</a><br>

   <!-- đăng xuất tài khoản  -->
  
     <?php if(isset($_SESSION['user'])){?>
     5-> <a href="?act=dangxuat" class="form-label">Đăng xuất</a>
     <?php }else{?>
     5-> <a href="?act=login" class="form-label">Đăng nhập ?</a>
     <?php } ?>
  </div>
<?php if(isset($thongbao)&&$thongbao!="")
echo $thongbao;
?>
    </div>
</div>
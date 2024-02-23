<style>
    .giohang{
        font-size: 30px;
    }
</style>
<div class="row mt-4 main-web">
        <div class="col-md-12">
        <div class="giohang">Giỏ hàng của tui!</div>
          <div class="card mt-5">
            <div class="card-header">
                <table class="table axil-product-table axil-cart-table mb--40">
                <thead>
                    <tr>
                    <th scope="col">Mã đơn hàng</th>
                    <th scope="col">Ngày đặt hàng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Phương thức thanh toán</th>
                    <th scope="col">Trạng thái đơn hàng</th>
                    <!-- <th scope="col">Hành động</th> -->
                    </tr>
                </thead>
                <?php
                if(is_array($loadhd1)){

                
                foreach($loadhd1  as $value):
                    $trangthai = get_ttdh($value['trangthai']);
                ?>
                

                    <tbody>
                           <td> <?php echo $value['madh'] ?></td>
                           <td> <?php echo $value['ngaytao'] ?></td>
                           <td> <?php echo $value['tongdonhang'] ?></td>
                           <td> <?php if($value['pttt'] == 1){
                                echo $pttt = "Thanh toán khi nhận hàng";
                            } elseif ($value['pttt'] == 2) {
                                echo $pttt = "Chuyển khoản qua ngân hàng";
                            } elseif ($value['pttt'] == 3){
                                echo "Ví điện tử MoMo";
                            } ?></td>
                           <td> <?php echo $trangthai ?> </td>
                    </tbody>
                 <?php endforeach;} ?>   
                </table>
            
            </div>
        </div>
    </div>
</div>
<style>
    .giohang{
        font-size: 30px;
    }
</style>
<div class="row mt-4 main-web">
        <div class="col-md-12">
        <div class="giohang">Quản lý đơn hàng!</div>
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
                    <th scope="col">Hành động</th>
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
                           <td> <?php if ($value['trangthai'] == 0) { ?>
                                        <button type="button" class="btn btn-outline-danger">Chờ xác nhận</button>
                                    <?php } else if ($value['trangthai'] == 1) { ?>
                                        <button type="button" class="btn btn-warning">Đang vận chuyển</button>
                                    <?php } else if ($value['trangthai'] == 2) { ?>
                                        <button type="button" class="btn btn-success">Hoàn thành</button>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-danger">Đã hủy</button>
                                    <?php } ?></td>
                           <td> <form action="index.php?act=qldonhang&bill_id=<?= $value['id'] ?>" method="post">
                                        <?php if ($value['trangthai'] == 0) { ?>
                                            <button type="submit" class="btn btn-outline-primary" name="chapnhandonhang" onclick="return cofirmchapnhan()">Chấp nhận</button>
                                            <button type="submit" class="btn btn-outline-danger" name="huydonhang" onclick="return cofirmcofirmhuy()">Hủy</button>
                                        <?php } else if ($value['trangthai'] == 1) { ?>
                                            <button type="submit" class="btn btn-outline-success" name="chapnhandonhang" onclick="return cofirmchapnhan()">Hoàn thành</button>
                                            <button type="submit" class="btn btn-outline-danger" name="huydonhang" onclick="return cofirmcofirmhuy()">Hủy</button>
                                        <?php } ?>

                                    </form> </td>
                           <td>  </td>


                    </tbody>
                 <?php endforeach;} ?>   
                </table>
            
            </div>
        </div>
    </div>
</div>
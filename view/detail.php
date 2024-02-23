<!-- detail product -->
<div class="main-web">
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card mt-5" style="width: 18rem">
                <div class="card-header">Xem thêm sản phẩm khác</div>
                <div class="list-group">

                <?php foreach($sp_cungloai as $value): ?>
                <a href="?act=detailsp&idsp=<?php echo $value['id']; ?>"
                    class="list-group-item list-group-item-action list-item-link">
                    <img src="../uploads/<?php echo $value['image']; ?>" alt="" />
                    <?php echo $value['name']; ?>
                </a>
                <?php endforeach;  ?>

            </div>
        </div>
    </div>

<!-- chi tiết Sản phẩm -->
    <div class="col-md-8 offset-md-1">
        <div class="container-fuild">
            <div class="row mt-4">
                <div class="col-md-3">
                <?php if($sanpham['image']!=null&&$sanpham!=""):?>
                    <img class="img-detail" src="../uploads/<?php echo $sanpham['image']; ?>" alt="" />
                </div>
                <?php endif;?>
                <div class="col-md-8">
                    <ul>
                        <li>
                            Tên hàng: <?php echo $sanpham['name']; ?>
                        </li>
                        <li>
                            Đơn giá:
                            <span class="line-through">
                                <?php echo number_format($sanpham['price']); ?> VNĐ
                            </span>
                            <span class="badge bg-danger">
                                <?php 
                                    $tt = $sanpham['price']  - (($sanpham['price'] * $sanpham['discount']) / 100);
                                    echo number_format($tt);
                                ?> VNĐ
                            </span>
                        </li>
                        <li>
                            Giảm giá:
                            <span class="badge bg-danger"><?php echo $sanpham['discount']; ?> % </span>
                        </li>
                        <li>
                            Lượt xem:
                            <span class="badge bg-info"><?php echo $sanpham['luotxem']; ?></span>
                        </li>
                    </ul>
                <form action="index.php?act=addtocart" method="POST">
                        <ul>
                            <li>
                                Số lượng: <input name="soluong" type="number" value="1" min="1" max="15">
                            </li>
                        </ul>
                    <input class="btn bg-danger text-white" type="submit" value="Mua hàng" name="">
                    <input class="btn bg-info text-white" type="submit" value="Thêm giỏ hàng" name="addtocart">
                        <!-- <a href="" class="btn bg-danger text-white"> Mua hàng </a>
                        <a href="cart.php" class="btn bg-info text-white"> Thêm giỏ hàng </a> -->
                    <input type="hidden" value="<?php echo $sanpham['id']; ?>" name="id">
                    <input type="hidden" value="<?php echo $sanpham['name']; ?>" name="name">
                    <input type="hidden" value="<?php echo $sanpham['image']; ?>" name="image">
                    <input type="hidden" value="<?php echo $sanpham['price']; ?>" name="price">
                    <input type="hidden" value="<?php echo $sanpham['mota']; ?>" name="mota">
                </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
                    <hr />
                    <span>
                        <?php echo $sanpham['mota']; ?>
                    </span>
                    <hr>
                    <iframe src="binhluan.php?idpro=<?php echo $sanpham['id']?>" frameborder="0" width="755px" ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
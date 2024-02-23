<!-- <style>
    .textxct{
        display: flex;
        justify-content: center;
    }
</style> -->
<div class="row mt-5">
    <div class="col-md-12">
        <!-- slider -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/image/bg4.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="../assets/image/bg5.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="row mt-4">
    <!-- list sản phẩm -->
    <div class="col-md-8">
        <div class="container-fuild">
            <div class="row">

                <!-- Sản phẩm -->
                <?php foreach($dssp as $value): ?>
                <div class="col-md-4 pl-3 pr-3">
                    <div class="card" style="width: 18rem">
                        <img src="../uploads/<?php echo $value['image']; ?>" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="?act=detailsp&idsp=<?php echo $value['id']?>">
                                    <?php echo $value['name']; ?>
                                </a>
                            </h5>
                            <p class="card-price">
                                <span>
                                    <?php echo number_format($value['price']); ?> VNĐ
                                </span>
                                <span>
                                    <?php 
                                        $tt = $value['price']  - (($value['price'] * $value['discount']) / 100);
                                        echo number_format($tt);
                                    ?> VNĐ
                                </span>
                            </p>
                            <div class=textxct>
                                <a href="?act=detailsp&idsp=<?php echo $value['id']?>" class="btn btn-success">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="col-md-3 offset-md-1">
        <!-- Search -->
        <div class="card" style="width: 18rem">
            <div class="card-header">Tìm kiếm</div>
            <div class="card-body">
                <form action="?act=timkiemkyw" method="post" >
                    <input type="text" name="kyw" class="form-control" placeholder="Nhập tên sản phẩm" />        
                </form>
            </div>
        </div>
        <!-- Danh mục -->
        <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Danh mục</div>
            <div class="list-group">

                <?php foreach($dsdm as $value): ?>
                <a href="?act=searchdm&iddm=<?php echo $value['id'] ?>" class="list-group-item list-group-item-action">
                    <?php echo $value['name']; ?>
                </a>
                <?php endforeach; ?>

            </div>
        </div>

        <!-- Top 10 -->
        <!-- <div class="card mt-5" style="width: 18rem">
            <div class="card-header">Top 10 SP có nhiều view nhất</div>
            <div class="list-group">

                <?php foreach($top10 as $value): ?>
                <a href="?act=detailsp&idsp=<?php echo $value['id']?>"
                    class="list-group-item list-group-item-action list-item-link">
                    <img src="../uploads/<?php echo $value['image']; ?>" alt="" />
                    <?php echo $value['name']; ?>
                </a>
                <?php endforeach; ?>

            </div>
        </div> -->
    </div>
</div>
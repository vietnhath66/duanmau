<div class="col-md-8">
    <h3>Sửa sản phẩm</h3>
    <form method="post" action="?act=editsp" enctype="multipart/form-data">
        <input type="hidden" name="idsp" value="<?php echo $sanpham['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="tensp"
                value="<?php echo $sanpham['name']; ?>" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" class="form-control" id="price" placeholder="Nhập giá sản phẩm" name="giasp"
                value="<?php echo $sanpham['price']; ?>" />
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Giảm giá sản phẩm</label>
            <input type="number" class="form-control" id="discount" placeholder="Nhập giảm giá sản phẩm"
                name="giamgiasp" value="<?php echo $sanpham['discount']; ?>" />
        </div>
        <div class="mb-3">
            <?php if($sanpham['image'] != null && $sanpham['image'] != ""): ?>
            <img width="100" src="<?php echo "../uploads/" . $sanpham['image']; ?>" alt="">
            <?php endif; ?>
            <label for="image" class="form-label">Ảnh sản phẩm</label><br>
            <input type="file" id="image" name="anhsp" />
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Mô tả sản phẩm</label>
            <textarea name="motasp" id="mota" class="form-control"
                placeholder="Nhập mô tả sản phẩm"><?php echo $sanpham['mota']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="danhmuc" class="form-label">Danh mục sản phẩm</label><br>
            <select name="danhmucsp" id="danhmuc" class="form-control">
                <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id']?>" <?php if($sanpham['id_dm'] == $value['id']): ?> selected
                    <?php endif; ?>>
                    <?php echo $value['name']?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Chỉnh sửa</button>
    </form>
</div>
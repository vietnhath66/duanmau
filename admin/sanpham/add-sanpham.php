<div class="col-md-8">
    <h3>Thêm sản phẩm mới</h3>
    <form method="post" action="?act=addsp" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" placeholder="Nhập tên sản phẩm" name="tensp" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Giá sản phẩm</label>
            <input type="number" class="form-control" id="price" placeholder="Nhập giá sản phẩm" name="giasp" />
        </div>
        <div class="mb-3">
            <label for="discount" class="form-label">Giảm giá sản phẩm</label>
            <input type="number" class="form-control" id="discount" placeholder="Nhập giảm giá sản phẩm"
                name="giamgiasp" />
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Ảnh sản phẩm</label><br>
            <input type="file" id="image" name="anhsp" />
        </div>
        <div class="mb-3">
            <label for="mota" class="form-label">Mô tả sản phẩm</label>
            <textarea name="motasp" id="mota" class="form-control" placeholder="Nhập mô tả sản phẩm"></textarea>
        </div>
        <div class="mb-3">
            <label for="danhmuc" class="form-label">Danh mục sản phẩm</label><br>
            <select name="danhmucsp" id="danhmuc" class="form-control">
                <?php foreach($dsdm as $value): ?>
                <option value="<?php echo $value['id']?>">
                    <?php echo $value['name']?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnsubmit">Thêm mới</button>
    </form>
</div>
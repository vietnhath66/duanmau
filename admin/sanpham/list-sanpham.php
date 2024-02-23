<div class="col-md-8">
    <h3>Danh sách sản phẩm</h3>
    <a href="?act=addsp" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Giảm giá</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dssp as $key => $value): ?>
            <tr>
                <th scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td>
                    <?php echo $value['name']; ?>
                </td>
                <td>
                    <?php echo $value['price']; ?>
                </td>
                <td>
                    <?php echo $value['discount']; ?>
                </td>
                <td>
                    <?php if($value['image'] != "" && $value['image'] != null):?>
                    <img width="100" src="<?php echo "../uploads/" . $value['image']; ?>" alt="">
                    <?php endif; ?>
                </td>
                <td>
                    <?php echo $value['mota']; ?>
                </td>
                <td>
                    <?php echo $value['tendm']; ?>
                </td>
                <td>
                    <a href="?act=editsp&idsp=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>
                    <button class="btn btn-danger" data-bs-id="<?php echo $value['id']; ?>" data-bs-toggle="modal"
                        data-bs-target="#modalDelete">
                        Xóa
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>
</div>


<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Hành động này không thể hoàn tác. Bạn có muốn xóa không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a href="" class="btn btn-danger" id="btn-delete">Xác nhận xóa</a>
            </div>
        </div>
    </div>
</div>


<script>
var modalDelete = document.getElementById('modalDelete')
modalDelete.addEventListener('show.bs.modal', function(event) {
    var button = event.relatedTarget
    var idsp = button.getAttribute('data-bs-id')
    var link = `?act=deletesp&idsp=${idsp}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>
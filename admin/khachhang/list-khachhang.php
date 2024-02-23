<div class="col-md-8">
    <h3>Danh sách khách hàng</h3>
    <a href="?act=addkh" class="btn btn-success">Thêm mới</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên khách hàng</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Quyền hạn</th>
                <th scope="col">Hành động</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($dskh as $key => $value): ?>
            <tr>
                <th scope="row">
                    <?php echo $key + 1; ?>
                </th>
                <td>
                    <?php echo $value['user']; ?>
                </td>
                <td>
                    <?php echo $value['email']; ?>
                </td>
                <td>
                    <?php echo $value['address']; ?>
                </td>
                <td>
                    <?php echo $value['tel']; ?>
                </td>
                <td>
                    <?php 
                        if($value['role'] == "0"){
                            echo "Khách hàng";
                        } else{
                            echo "Admin";
                        }
                    ?>
                </td>
                <td>
                    <a href="?act=editkh&idkh=<?php echo $value['id']; ?>" class="btn btn-warning">Sửa</a>
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
    var idkh = button.getAttribute('data-bs-id')
    var link = `?act=deletekh&idkh=${idkh}`
    document.getElementById("btn-delete").setAttribute("href", link)
})
</script>
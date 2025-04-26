<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị Dữ liệu từ Bảng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="container">
    <h2 class="my-4">Chọn Bảng để Hiển Thị</h2>
    <div class="btn-group">
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_nguoidung')">Bảng Người Dùng</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_bantin')">Bảng Bản Tin</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_binhluan')">Bảng Bình Luận</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_dangbai')">Bảng Đăng Bài</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_danhmuc')">Bảng Danh Mục</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_docgia')">Bảng Độc Giả</button>
        <button class="btn btn-primary m-1" onclick="loadTable('tbl_phanquyen')">Bảng Phân Quyền</button>
    </div>

    <div class="btn-group">
        <button class="btn btn-secondary m-1" onclick="">a</button>
        <button class="btn btn-secondary m-1" onclick="">b</button>
        <button class="btn btn-secondary m-1" onclick="">c</button>
        <button class="btn btn-secondary m-1" onclick="">d</button>
        <button class="btn btn-secondary m-1" onclick="">e</button>
        <button class="btn btn-secondary m-1" onclick="">f</button>
        <button class="btn btn-secondary m-1" onclick="">g</button>
        <button class="btn btn-secondary m-1" onclick="">h</button>
        <button class="btn btn-secondary m-1" onclick="">i</button>
    </div>
    
    <div id="table-container" class="mt-5">

    </div>
</div>

<script>
    function loadTable(tableName) {
        $.ajax({
            url: 'load_table.php',
            type: 'GET',
            data: { table: tableName },
            success: function(data) {
                $('#table-container').html(data);
            },
            error: function() {
                alert("Có lỗi khi tải dữ liệu.");
            }
        });
    }
</script>

</body>
</html>

<?php
require_once "db_module.php";

$link = null;
taoKetNoi($link);
if (isset($_GET['option']) && $_GET['option'] == 'h') {

// Câu lệnh: Insert bình luận mới, lấy id_bantin tự động từ bảng tbl_bantin
$query = "
INSERT INTO tbl_binhluan (tieude, noidung, `like`, thoigian, id_bantin, id_docgia)
VALUES (
    'bình luận',
    'galaxy s4 ok',
    0,
    NOW(),
    (SELECT id_bantin FROM tbl_bantin WHERE tieude = N'Liệu Samsung sẽ thành công với Galaxy S4 hay sẽ rơi vào tình trạng suy giảm sự tin cậy của nhà đầu tư như Apple' LIMIT 1),
    1
)
";

$result = chayTruyVanKhongTraVeDL($link, $query);

if ($result) {
    echo "<p>Thêm bình luận mới thành công.</p>";
} else {
    echo "<p>Thêm bình luận thất bại.</p>";
}

giaiPhongBoNho($link, $result);
}

?>

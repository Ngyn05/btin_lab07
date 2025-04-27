<?php
require_once "db_module.php";

$link = null;
taoKetNoi($link);

// Câu lệnh UPDATE
$query = "UPDATE tbl_bantin
SET noidung = 'Nội dung mới được cập nhật'
WHERE id_bantin = 123";

$result = chayTruyVanKhongTraVeDL($link, $query);

if ($result) {
    echo "<p>Cập nhật nội dung thành công.</p>";
} else {
    echo "<p>Cập nhật nội dung thất bại.</p>";
}

giaiPhongBoNho($link, $result);
?>
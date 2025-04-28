<?php
require_once "db_module.php";

$link = null;
taoKetNoi($link);

if (isset($_GET['option']) && $_GET['option'] == 'i') {
    $query = "UPDATE tbl_bantin
    SET noidung = 'Nội dung mới được cập nhật'
    WHERE id_bantin = 123";

    $result = chayTruyVanKhongTraVeDL($link, $query);

    if ($result) {
        echo "<p>Cập nhật nội dung bản tin thành công.</p>";
    } else {
        echo "<p>Cập nhật nội dung bản tin thất bại.</p>";
    }

    giaiPhongBoNho($link, $result);
}
?>
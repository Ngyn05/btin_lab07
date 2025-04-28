<?php
require_once "db_module.php";

$link = null;
taoKetNoi($link);

if (isset($_GET['option']) && $_GET['option'] == 'i') {
    $query = "DELETE FROM tbl_bantin
WHERE id_bantin = 123;";

    $result = chayTruyVanKhongTraVeDL($link, $query);

    if ($result) {
        echo "<p>Xóa bản tin thành công.</p>";
    } else {
        echo "<p>Xóa bản tin thất bại.</p>";
    }

    giaiPhongBoNho($link, $result);
}
?>
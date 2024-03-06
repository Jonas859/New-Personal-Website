<?php
require_once "database.php";

if(isset($_POST["region"])) {
    $region = $_POST["region"];
    $sql = "SELECT DISTINCT citymunDesc FROM refcitymun WHERE regCode = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $region);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $cities = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $cities[] = $row;
    }
    echo json_encode($cities);
}
?>

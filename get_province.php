<?php
require_once "database.php";

if(isset($_POST["barangay"])) {
    $barangay = $_POST["barangay"];
    $sql = "SELECT DISTINCT provDesc FROM refprovince WHERE provCode IN (SELECT provCode FROM refbrgy WHERE brgyDesc = ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $barangay);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $provinces = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $provinces[] = $row;
    }
    echo json_encode($provinces);
}
?>

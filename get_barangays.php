<?php
require_once "database.php";

if(isset($_POST["city"])) {
    $city = $_POST["city"];
    $sql = "SELECT DISTINCT brgyDesc FROM refbrgy WHERE citymunCode = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $city);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $barangays = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $barangays[] = $row;
    }
    echo json_encode($barangays);
}
?>

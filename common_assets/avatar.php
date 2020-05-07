<?php 
require_once "config.php";
if(isset($_GET['u_id'])) {
    $sql = "SELECT i_type,i_data FROM userimages WHERE u_id=" . $_GET['u_id'];
    $result = $conn->query($sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
    $img_row = mysqli_fetch_array($result);
    header("Content-type: " . $img_row["i_type"]);
    echo $img_row["i_data"];
}
?>
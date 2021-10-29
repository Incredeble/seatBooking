<?php
if(isset($_POST['i_idx']) && isset($_POST['minn'])) {
    $index = $_POST['i_idx'];
    $minn = $_POST['minn'];
    $data = file_get_contents('database.json');
    $json_arr = json_decode($data,true);
    $row_seat = $json_arr[0][$index];
    $json_arr[0][$index] = $row_seat-$minn;
    file_put_contents('database.json',json_encode($json_arr));
    echo "success";
    exit;
}
else {
    echo "error";
    exit;
}
?>
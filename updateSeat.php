<?php
if(isset($_POST['n'])) {
    $seat = $_POST['n'];
    $data = file_get_contents('database.json');
    $json_arr = json_decode($data,true);
    $available_seat = $json_arr[0][0];
    $json_arr[0][0] = $available_seat-$seat;
    file_put_contents('database.json',json_encode($json_arr));
    echo "success";
    exit;
}
else {
    echo "error";
    exit;
}
?>
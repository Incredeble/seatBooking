<?php
if(isset($_POST['e'])) {
    $seat = $_POST['e'];
    $data = file_get_contents('database.json');
    $json_arr = json_decode($data,true);
    array_push($json_arr[1],$seat); 
    file_put_contents('database.json',json_encode($json_arr));
    echo "success";
    exit;
}
else {
    echo "error";
    exit;
}
?>
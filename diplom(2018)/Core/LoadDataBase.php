<?php
header('Content-Type:text/json;charset=utf-8');
include "Connect/ConnectDB.php";
mysqli_set_charset($link,'utf8_decode');
$query = mysqli_query($link,"SELECT * FROM voprosu");
while($result = mysqli_fetch_array($query)){
    $data['voprosu'][] = $result['voprosu']; // допишем строку из выборки как новый элемент результирующего массива
    $data['otvetu'][] = $result['otvetu'];
}
$out = array('data'=>$data);
echo json_encode($out);
mysqli_close($link)or die( mysqli_error($link) );

?>
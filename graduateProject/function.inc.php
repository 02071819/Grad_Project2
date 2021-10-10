<?php
function get_product($conn,$type='',$limit=''){
    $sql = "select * from products";
    if($type=='latest'){
        $sql.=" order by id desc";
    }
    if($limit!=''){
        $sql.=" limit $limit";
    }
    $res = mysqli_query($conn,$sql);
    $data=array();
    while($row = mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}
?>
<!-- select products DB的所有資料 -->
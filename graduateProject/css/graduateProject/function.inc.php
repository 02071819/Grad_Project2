<?php
function get_product($conn, $limit = '', $cat_id = '', $pro_id = '')
{
    $sql = "select * from products where status=1 ";
    
    if ($cat_id != '') {
        $sql .= " and cat_id=$cat_id";
    }
    if ($pro_id != '') {
        $sql .= " and id=$pro_id";
    }
    $sql .= " order by id desc";
    
    if ($limit != '') {
        $sql .= " limit $limit";
    }
    $res = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $data[] = $row;
    }
    return $data;
}
// select products DB的所有資料


function getIP()
{
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}

?>
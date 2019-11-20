<?php
function m_view(){
    $query ="SELECT * FROM information";
    include "connection.php";
    $result = mysqli_query($connect,$query);
    $info=[];
    if($result && mysqli_num_rows($result)>0){
        foreach($result as $total){
            $info[]=$total;
        }
    }
    return$info;
}
?>
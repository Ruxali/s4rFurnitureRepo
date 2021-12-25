<?php
function search($connect){
    $str=mysqli_real_escape_string($connect,$_POST['s']);
    $sql="SELECT * FROM products WHERE name LIKE '%$str%'";
    $res=mysqli_query($connect,$sql);
    $datas = array();
    
        while($row=mysqli_fetch_assoc($res)){
               $datas[]=$row;
            }
            return $datas;
    
    
}
?>
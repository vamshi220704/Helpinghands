<?php
include 'db.php';
if($conn){
    echo'database connected successfully';
}else{
    echo 'failed to connect';
}
?>
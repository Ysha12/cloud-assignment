<?php

$no = $_POST['number'];

$strnNo =  strlen($no);
// echo $strnNo;

Header("Location:calculate.php?number= $strnNo");


?>
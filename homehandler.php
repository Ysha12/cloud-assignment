<?php

$no = $_POST['number'];

$strnNo =  strlen($no);
 //echo $strnNo;

header("Location:calculate.php?number=".$strnNo);


?>
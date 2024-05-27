



<?php $connection = new mysqli('localhost','root','','roxxon');

if($connection->connect_error){
    echo $connection->connect_error;
    echo "connection error";
}else{
    $connection-> query("SET CHARACTER CHARACTER utf8");
}

?>
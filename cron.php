<?php
$db_host    =   'localhost';
$db_user    =   'root';
$db_pass    =   '';
$db_name    =  'call_db';

$link   = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    echo 'Error connect to database.'. mysqli_connect_error();
}

$today  =   date('Y-m-d');
$query  =   "UPDATE deal_vouchers SET status = 7 WHERE expiration_date < '$today'";
$result =   mysqli_query($link, $query);
?>

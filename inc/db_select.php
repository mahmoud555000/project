<?php
$sql_s = 'SELECT * FROM users3 ORDER BY RAND() LIMIT 1';
$res = mysqli_query($conn, $sql_s);
$users = mysqli_fetch_all($res, MYSQLI_ASSOC);

?>


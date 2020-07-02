<?php
$cmd = 'nohup php /app/public/kill_myself.php > /dev/null &';
exec($cmd);

echo 'OK';

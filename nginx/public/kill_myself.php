#!/usr/bin/php
<?php
sleep(3);
exec("/bin/kill -SIGTERM 1");
exit;

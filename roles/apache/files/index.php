<?php
header("Content-Type: text/plain; charset=utf-8");

$start_time = microtime(true);

$sleep_time = rand(1, 4);
sleep($sleep_time);

$end_time = microtime(true);
$execution_time = $end_time - $start_time;

$hostname = $_SERVER['HTTP_X_FORWARDED_HOST'];

$php_version = phpversion();

echo "Хост: $hostname\n";
echo "Время выполнения: $execution_time\n";
echo "Версия PHP: $php_version\n";

?>

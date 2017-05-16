<?php
//echo realpath(dirname(__FILE__)); 
echo "Turn on LED";
//exec("/bin/sh /var/www/gpio.sh");
$output = shell_exec("cat /sys/class/gpio/gpio54/value");
$test = shell_exec("cat txt");
echo $test;
echo $output;
//echo shell_exec("./led ");
//shell_exec(" echo 54 > /sys/class/gpio/export ");
//shell_exec("/var/www/led2");
$a = 4096;
$b = 15;
shell_exec("/var/www/led /dev/uio0 $a $b");
//$a = 4096;
$b = 0;
usleep(500000);
shell_exec("/var/www/led /dev/uio0 $a $b");
//shell_exec("/var/www/led /dev/uio0 4096 15");
//shell_exec(" echo out > /sys/class/gpio/gpio54/direction ");
shell_exec(" echo 1 > /sys/class/gpio/gpio54/value ");
shell_exec(" echo 1 > /sys/class/gpio/gpio55/value ");
shell_exec(" echo 1 > /sys/class/gpio/gpio56/value ");
shell_exec(" echo 1 > /sys/class/gpio/gpio57/value ");
?>

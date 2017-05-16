<?php
echo "Turn OFF LED";
$output = shell_exec("cat /sys/class/gpio/gpio54/value");
echo $output;
//shell_exec(" echo 54 > /sys/class/gpio/export ");
//shell_exec(" echo out > /sys/class/gpio/gpio54/direction ");
shell_exec(" echo 0 > /sys/class/gpio/gpio54/value ");
shell_exec(" echo 0 > /sys/class/gpio/gpio55/value ");
shell_exec(" echo 0 > /sys/class/gpio/gpio56/value ");
shell_exec(" echo 0 > /sys/class/gpio/gpio57/value ");
?>

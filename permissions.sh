chmod 777 /sys/class/gpio
echo 54 > /sys/class/gpio/export
echo 55 > /sys/class/gpio/export
echo 56 > /sys/class/gpio/export
echo 57 > /sys/class/gpio/export

echo 65 > /sys/class/gpio/export
echo 66 > /sys/class/gpio/export
echo 67 > /sys/class/gpio/export
echo 68 > /sys/class/gpio/export

echo 73 > /sys/class/gpio/export
echo 74 > /sys/class/gpio/export
echo 75 > /sys/class/gpio/export
echo 76 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio54/direction
echo out > /sys/class/gpio/gpio55/direction
echo out > /sys/class/gpio/gpio56/direction
echo out > /sys/class/gpio/gpio57/direction

echo in > /sys/class/gpio/gpio65/direction
echo in > /sys/class/gpio/gpio66/direction
echo in > /sys/class/gpio/gpio67/direction
echo in > /sys/class/gpio/gpio68/direction

echo in > /sys/class/gpio/gpio73/direction
echo in > /sys/class/gpio/gpio74/direction
echo in > /sys/class/gpio/gpio75/direction
echo in > /sys/class/gpio/gpio76/direction

chmod 777 /sys/class/gpio/gpio65/direction
chmod 777 /sys/class/gpio/gpio66/direction
chmod 777 /sys/class/gpio/gpio67/direction
chmod 777 /sys/class/gpio/gpio68/direction

chmod 777 /sys/class/gpio/gpio73/direction
chmod 777 /sys/class/gpio/gpio74/direction
chmod 777 /sys/class/gpio/gpio75/direction
chmod 777 /sys/class/gpio/gpio76/direction

chmod 777 /sys/class/gpio/gpio65/value
chmod 777 /sys/class/gpio/gpio66/value
chmod 777 /sys/class/gpio/gpio67/value
chmod 777 /sys/class/gpio/gpio68/value

chmod 777 /sys/class/gpio/gpio73/value
chmod 777 /sys/class/gpio/gpio74/value
chmod 777 /sys/class/gpio/gpio75/value
chmod 777 /sys/class/gpio/gpio76/value

chmod 777 /sys/class/gpio/gpio54/direction
chmod 777 /sys/class/gpio/gpio55/direction
chmod 777 /sys/class/gpio/gpio56/direction
chmod 777 /sys/class/gpio/gpio57/direction
chmod 777 /sys/class/gpio/gpio54/value
chmod 777 /sys/class/gpio/gpio55/value
chmod 777 /sys/class/gpio/gpio56/value
chmod 777 /sys/class/gpio/gpio57/value

chmod 666 /dev/uio0

echo 48 > /sys/class/gpio/export
echo 49 > /sys/class/gpio/export
echo 52 > /sys/class/gpio/export
echo 53 > /sys/class/gpio/export

echo out > /sys/class/gpio/gpio48/direction
echo out > /sys/class/gpio/gpio49/direction
echo out > /sys/class/gpio/gpio52/direction
echo out > /sys/class/gpio/gpio53/direction

chmod 777 /sys/class/gpio/gpio48/value
chmod 777 /sys/class/gpio/gpio49/value
chmod 777 /sys/class/gpio/gpio52/value
chmod 777 /sys/class/gpio/gpio53/value

chmod 777 /sys/class/gpio/gpio48/direction
chmod 777 /sys/class/gpio/gpio49/direction
chmod 777 /sys/class/gpio/gpio52/direction
chmod 777 /sys/class/gpio/gpio53/direction

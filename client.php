<?php
$i = 0;
$hostname = "localhost";
$port = 3306;

while ($i < 1) {
    $message = "Hello World!";
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP) or die("Could not create socket\n");
    $result = socket_connect($socket, $hostname, $port) or die("Could not connect to server\n");
    socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
    $result = socket_read($socket, 1024) or die("Could not read server response\n");
    echo "Reply From Server  :" . $result;
    socket_close($socket);
    $i++;
}

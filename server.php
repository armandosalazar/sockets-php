<?php
$socket = stream_socket_server("tcp://localhost:8000", $errno, $errstr);

if (!$socket) {
	echo "$errstr ($errno)<br/>\n";
} else {
	echo "[ server running... ]\n";
	while ($connection = stream_socket_accept($socket)) {
		fwrite($connection, "Hola");
		fclose($connection);
	}
	fclose($socket);
}


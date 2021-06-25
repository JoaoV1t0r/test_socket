<?php

require './vendor/autoload.php';

use Ratchet\Server\EchoServer;

$app = new Ratchet\App('localhost', 9980);
$app->route('/echo', new EchoServer, ['*']);
echo "Run server";
$app->run();

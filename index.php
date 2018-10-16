<?php

$http = new swoole_http_server('php-server', 8083);

$http->on('request', function($request, $response) {
    $response->header('Content-Type', 'text/plain');
    $response->end("Hello World PHP\n");
});

$http->start();

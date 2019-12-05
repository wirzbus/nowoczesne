<?php
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/init.php';

$name = $request->get('name', 'World');

$response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));
$response->send();

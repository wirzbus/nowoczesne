<?php
use Symfony\Component\HttpFoundation\Response;

require __DIR__ . '/init.php';


$response = new Response('Bye!');
$response->send();

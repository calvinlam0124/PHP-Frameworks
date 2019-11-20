<?php
require_once __DIR__ . '/vendor/autoload.php';

$leaf = new Leaf\Core\Leaf;
$response = new Leaf\Core\Http\Response;
$request = new Leaf\Core\Http\Request;

$leaf->get('/', function() use($response) {
	$response->respond(["message" => "Welcome to Leaf PHP Starter"]);
});

$leaf->post('/add', function() use($request, $response) {
	$name = $request->getParam('name');
	$response->respondWithCode(['name' => $name], 200);
});

$leaf->set404(function() use($response) {
	$response->renderHtmlPage('./html/404.html');
});

$leaf->run();
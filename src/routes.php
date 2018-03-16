<?php

use Slim\Http\Request;
use Slim\Http\Response;

use App\Controllers\Facebook\UserController;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/facebook/users/[{search}]', function(Request $request){
    $user = new UserController($this);
    
    echo $user->getProfile($request->getAttribute('search'));
});

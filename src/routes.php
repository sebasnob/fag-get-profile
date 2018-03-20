<?php

use Slim\Http\Request;
use Slim\Http\Response;

use App\Controllers\Facebook\UserController;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->group('/facebook/', function(){
    //Return user profile data
    $this->get('users/[{search}]', function(Request $request){
        $user = new UserController($this);

        echo $user->getProfile($request->getAttribute('search'));
    });
});
<?php
require __DIR__ . '/../vendor/autoload.php';
session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/../src/dependencies.php'; // Set up <dependencies></dependencies>

$app->post('/login', function ($request, $response, $args) use ($app){
  $this->logger->info("Login '/login' route");
  //$config = $this->get('settings')['proyecto'];

  if ($request->isPost()) {
        $username = $request->getParams()['email'];
        $password = $request->getParams()['password'];



        //$result = $app->authenticator->authenticate($username, $password);
        //
        // if ($result->isValid()) {
        //     $app->redirect('/');
        // } else {
        //     $messages = $result->getMessages();
        //     $app->flashNow('error', $messages[0]);
        // }

    }

});

$container = $app->getContainer(); // Get container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('../templates/');
};

$app->run();
?>

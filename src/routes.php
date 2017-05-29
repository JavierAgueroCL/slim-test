<?php
// Render PHP template in route
$app->get('/', function ($request, $response, $args) {
  $this->logger->info("Inicio '/' route");
  $config = $this->get('settings')['proyecto'];
  return $this->view->render($response, 'login.phtml', $config);
});

$app->get('/dashboard', function ($request, $response, $args) {
  $this->logger->info("Dashboard '/' route");
  $config = $this->get('settings')['proyecto'];
  return $this->view->render($response, 'dashboard.phtml', $config);
});

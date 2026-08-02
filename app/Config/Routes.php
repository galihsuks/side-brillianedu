<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override(function () {
    $request = service('request');
    $response = service('response');
    $path = trim((string) $request->getPath(), '/');
    $isApiRoute = $path === 'api' || str_starts_with($path, 'api/');

    if ($isApiRoute) {
        $response->setStatusCode(404);
        $response->setContentType('application/json');

        return json_encode([
            'status' => false,
            'message' => 'The requested API endpoint was not found.',
            'data' => null,
        ], JSON_UNESCAPED_SLASHES);
    }

    $response->setStatusCode(404);
    $response->setContentType('text/html');

    return view('errors/html/error_404', [
        'message' => 'The page you are looking for could not be found.',
    ]);
});

$routes->options('(:any)', function () {
    return response()->setStatusCode(200);
});

$routes->get('/', 'WebController::home');
$routes->get('about', 'WebController::about');
$routes->get('service', 'WebController::service');

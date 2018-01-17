<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Core\Routing\RouteUrlMatcher;
use Metinet\Core\Routing\RouteNotFound;
use Metinet\Core\Config\JsonFileLoader;
use Metinet\Core\Config\ChainLoader;
use Metinet\Core\Controller\ControllerResolver;
use Metinet\Core\Config\Configuration;
use Metinet\Domain\Conference;
use Metinet\Domain\DateConference;
use Metinet\Domain\Lieu;
use Metinet\Domain\Student;


$request = Request::createFromGlobals();

$loader = new ChainLoader([
    new JsonFileLoader([__DIR__ . '/../conf/app.json']),
]);

$config = new Configuration($loader);

$logger = $config->getLogger();

try {
    $controllerResolver = new ControllerResolver(new RouteUrlMatcher($config->getRoutes()));
    $callableAction = $controllerResolver->resolve($request);
    $response = call_user_func($callableAction, $request);
} catch (RouteNotFound $e) {
    $logger->log($e->getMessage(), ['url' => $request->getPath()]);
    $response = new Response('Page not found', 404);
} catch (Throwable $e) {
    $logger->log($e->getMessage(), ['url' => $request->getPath()]);
    $response = new Response(sprintf('<p>Error: %s</p>', $e->getMessage()), 500);
}

$response->send();

$conference = new Conference(
    new Student('Matt', 'Ghost', '02/05/1997', 2015),
    'test',
    'un truc de fou', ['test'],
    new Lieu('Salle 107', 'Rue Peter Fink', '01000', 'Bourg en Bresse', 'France', 25),
    10,
    new DateConference('06/02/2018', 15, 17),
    'true');
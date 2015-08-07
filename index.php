<?php
require 'vendor/autoload.php';

use \Slim\Slim;
use Provider\OpenWeather\Service\OpenWeatherService;
use Provider\OpenWeather\Model\Query;

$app = new Slim();
$app->get('/weather', function ($name) {
    $query = new Query();
    $query->setCity('Hamburg');
    $service = new OpenWeatherService();
    return $service->getWeather($query);
});
$app->run();

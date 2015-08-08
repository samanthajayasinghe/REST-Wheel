<?php
require 'vendor/autoload.php';

use \Slim\Slim;
use Provider\OpenWeather\Service\WeatherService;
use Provider\OpenWeather\Model\WeatherQuery;

$app = new Slim();
$app->get('/weather', function ($name) {
    $query = new WeatherQuery();
    $query->setCity('Hamburg');
    $service = new WeatherService();
    return $service->getWeather($query);
});
$app->run();

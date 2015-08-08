<?php

use Provider\OpenWeather\Service\WeatherService;
use Provider\OpenWeather\Model\WeatherQuery;

class ServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var WeatherService
     */
    private $service = null;

    protected function setUp()
    {
        $this->service = new WeatherService();
    }

    public function testGetWeather()
    {
        $query = new WeatherQuery();
        $query->setCity('Hamburg');
        $result = $this->service->getWeather($query);
        var_dump($result);
    }

} 

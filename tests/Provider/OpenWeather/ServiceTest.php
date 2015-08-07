<?php

use Provider\OpenWeather\Service\OpenWeatherService;

class ServiceTest extends PHPUnit_Framework_TestCase{

    /**
     * @var OpenWeatherService
     */
    private $service = null;

    protected function setUp()
    {
        $this->service = new OpenWeatherService();
    }

    public function testGetWeather()
    {
        //$result = $this->service->getWeather();
    }

} 

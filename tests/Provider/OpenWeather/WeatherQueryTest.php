<?php

use Provider\OpenWeather\Model\WeatherQuery;
use Provider\OpenWeather\Mapper\WeatherMapper;

class WeatherQueryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var WeatherMapper
     */
    protected $mapper = null;

    protected function setUp()
    {
        $this->mapper = new WeatherMapper();
    }

    public function testGetEndPointWithCityAndCountry()
    {
        $query = new WeatherQuery();
        $query->setCity('Hamburg');
        $query->setCountry('Germany');
        $result = $this->mapper->getEndPoint($query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Hamburg,Germany',$result);
    }

    public function testGetEndPointOnlyWithCity()
    {
        $query = new WeatherQuery();
        $query->setCity('Hamburg');
        $result = $this->mapper->getEndPoint($query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Hamburg',$result);
    }

    public function testGetEndPointOnlyWithCountry()
    {
        $query = new WeatherQuery();
        $query->setCountry('Germany');
        $result = $this->mapper->getEndPoint($query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Germany',$result);
    }
} 

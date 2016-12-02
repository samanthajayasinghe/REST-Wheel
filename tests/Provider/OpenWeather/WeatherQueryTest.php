<?php

use RestWheel\Provider\OpenWeather\Model\WeatherQuery;
use RestWheel\Provider\OpenWeather\Mapper\WeatherMapper;

class WeatherQueryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var WeatherMapper
     */
    protected $mapper = null;

    protected $query = null;

    protected function setUp()
    {
        $this->mapper = new WeatherMapper();
        $this->query = new WeatherQuery();
    }

    public function testGetEndPointWithCityAndCountry()
    {
        $this->query->setCity('Hamburg');
        $this->query->setCountry('Germany');
        $result = $this->mapper->getEndPoint($this->query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Hamburg,Germany',$result);
    }

    public function testGetEndPointOnlyWithCity()
    {
        $this->query->setCity('Hamburg');
        $result = $this->mapper->getEndPoint($this->query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Hamburg',$result);
    }

    public function testGetEndPointOnlyWithCountry()
    {
        $this->query->setCountry('Germany');
        $result = $this->mapper->getEndPoint($this->query);
        $this->assertEquals('api.openweathermap.org/data/2.5/weather?q=Germany',$result);
    }
} 

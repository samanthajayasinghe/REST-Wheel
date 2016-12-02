<?php

namespace RestWheel\Provider\OpenWeather\Service;

use RestWheel\Provider\OpenWeather\Mapper\WeatherMapper;
use RestWheel\Provider\OpenWeather\Model\WeatherQuery;

class WeatherService
{

    public function getEndPoint(WeatherQuery $query)
    {
        return $this->getWeatherMapper()->getEndPoint($query);
    }

    private function getWeatherMapper()
    {
        return new WeatherMapper();
    }
} 

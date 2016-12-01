<?php

namespace Provider\OpenWeather\Service;

use Provider\OpenWeather\Mapper\WeatherMapper;
use Provider\OpenWeather\Model\WeatherQuery;

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

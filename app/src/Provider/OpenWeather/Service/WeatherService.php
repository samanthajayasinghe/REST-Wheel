<?php

namespace Provider\OpenWeather\Service;

use Provider\OpenWeather\Model\WeatherQuery;

class WeatherService
{

    public function getWeather(WeatherQuery $query)
    {
        return json_encode(['1']);
    }
} 

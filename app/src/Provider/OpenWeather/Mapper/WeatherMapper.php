<?php

namespace Provider\OpenWeather\Mapper;

use Library\Http\Mapper\HttpGetMapper;
use Library\Http\Query;

class WeatherMapper implements  HttpGetMapper{

        
    const WEATHER_API_URI = 'api.openweathermap.org/data/2.5/weather?q=';

    public function getEndPoint(Query $query)
    {
        // TODO: Implement getEndPoint() method.
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

} 

<?php

namespace RestWheel\Provider\OpenWeather\Mapper;

use RestWheel\Library\Mapper\HttpGetMapper;
use RestWheel\Library\Http\Query;

class WeatherMapper implements HttpGetMapper
{

    const WEATHER_API_URI = 'api.openweathermap.org/data/2.5/weather?q=';

    public function getEndPoint(Query $query)
    {
        return self::WEATHER_API_URI.$query->toString();
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

} 

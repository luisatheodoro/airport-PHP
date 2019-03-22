<?php

class Weather {
    public function randomWeather() :string {
        $forecasts = ['Sunny', 'Sunny', 'Sunny', 'Stormy'];
        $random_index = array_rand($forecasts);
        return $forecasts[$random_index];
    }
}

<?php

class Weather {
    private function randomWeather() :string {
        $forecasts = ['Sunny', 'Sunny', 'Sunny', 'Stormy'];
        $random_index = array_rand($forecasts);
        return $forecasts[$random_index];
    }
    private function getWeather() :string {
        return $this->randomWeather();
    }
    public function isStormy() :bool {
        return $this->getWeather() === 'Stormy';
    }
}
<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\observer;
/**
 * WeatherData
 *
 * @package phpbase\design\observer
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-22
 */
class WeatherData implements Subject {

    /**
     * @var array
     */
    private $observers;

    private $temperature;
    private $humidity;
    private $pressure;

    public function __construct() {
        $this->observers = [];
    }

    public function registerObserver(Observer $o) {
        // TODO: Implement registerObserver() method.
        array_push($this->observers,$o);
    }


    public function removeObserver(Observer $o) {
        // TODO: Implement removeObserver() method.

        $key = array_search($o,$this->observers);

        if($key) {
            unset($this->observers[$key]);
        }

    }

    public function notifyObserver() {
        // TODO: Implement notifyObserver() method.

        foreach ($this->observers as $o) {
            $o->update($this->temperature,$this->humidity,$this->pressure);
        }
    }

    public function measurementsChanged() {
        $this->notifyObserver();
    }

    public function setMeasurements($temperature,$humidity,$pressure) {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
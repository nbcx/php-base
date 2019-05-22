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
 * CurrentConditinosDisplay
 *
 * @package phpbase\design\observer
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-22
 */
class CurrentConditinosDisplay implements Observer, DisplayElement {

    private $temperature;
    private $humidity;

    /**
     * @var Subject
     */
    private $weatherData;


    public function __construct(Subject $weatherData) {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function update($temp, $humidity, $pressure) {
        // TODO: Implement update() method.
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display() {
        // TODO: Implement display() method.
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity\n";
    }

}
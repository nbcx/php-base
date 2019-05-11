<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\adapter;
/**
 * DollarCalc
 *
 * @package phpbase\design\adapter
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class DollarCalc {

    private $dollar;
    private $product;
    private $service;

    //折扣
    public $rate = 1;

    public function requestCalc($productNow,$serviceNow) {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }

    public function requestTotal() {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }

}
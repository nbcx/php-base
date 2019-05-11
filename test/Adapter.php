<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace controller;
use phpbase\design\adapter\DollarCalc;
use phpbase\design\adapter\EuroAdapter;
use phpbase\design\adapter\Itarget;

/**
 * Adapter
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Adapter {

    private $requestNow;
    private $dollarRequest;

    public function index() {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        echo "Euros:€" . $this->makeAdapterRequest($this->requestNow);
        echo "\n";
        echo "Dollars:$".$this->makeDollarRequest($this->dollarRequest);
        echo "\n";
    }

    private function makeAdapterRequest(Itarget $req) {
        return $req->requestCalc(40,50);
    }

    private function makeDollarRequest(DollarCalc $req) {
        return $req->requestCalc(40,50);
    }

}
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
use phpbase\design\decorator\Espresso;
use phpbase\design\decorator\Milk;
use phpbase\design\decorator\Mocha;

/**
 * Decorator
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-19
 */
class Decorator {


    public function index() {
        //订一杯蒸馏咖啡，不加调料
        $beverage = new Espresso();
        e($beverage->getDescription() . "¥" .$beverage->cost());


        //订一杯蒸馏咖啡，加摩卡和牛奶
        $beverage = new Espresso();
        $beverage = new Mocha($beverage);
        $beverage = new Milk($beverage);
        e($beverage->getDescription() . "¥" .$beverage->cost());

        //和上面一样，来一个大杯的
        $beverage = new Espresso();
        $beverage = new Mocha($beverage);
        $beverage = new Milk($beverage);
        $beverage->setSize('venti');
        e($beverage->getDescription() . "¥" .$beverage->cost());
    }

}
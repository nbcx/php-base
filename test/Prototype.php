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
use phpbase\design\prototype\Person;

/**
 * Prototype
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Prototype {

    public function index() {
        $worker = new Person();
        $worker->display();

        $slacker = clone $worker;
        $slacker->name = "Cloned";
        $slacker->display();
    }

}
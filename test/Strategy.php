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

use phpbase\design\strategy\FlyRocketPowered;
use phpbase\design\strategy\ModelDuck;

/**
 * Strategy
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-20
 */
class Strategy {

    public function index() {
        $model = new ModelDuck();
        $model->performFly();
        $model->setFlyBehavior(new FlyRocketPowered());
        $model->performFly();
    }

}
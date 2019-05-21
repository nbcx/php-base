<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\strategy;
/**
 * ModelDuck 模型鸭
 *
 * @package phpbase\design\strategy
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-20
 */
class ModelDuck extends Duck {

    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display() {
        // TODO: Implement display() method.
        echo "I`m a model duck\n";
    }

}
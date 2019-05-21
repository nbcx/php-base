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
 * Duck
 *
 * @package phpbase\design\strategy
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-20
 */
abstract class Duck {

    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;

    abstract public function display();

    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    public function swim() {
        echo "All ducks float, even decoys!\n";
    }

    public function setFlyBehavior(FlyBehavior $fb) {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb) {
        $this->quackBehavior = $qb;
    }

}
<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\decorator;
/**
 * Soy
 *
 * @package phpbase\design\decorator
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-19
 */
class Soy extends CondimentDecorator {

    public function getDescription() {
        return $this->beverage->getDescription() . ", 大豆";
    }

    public function cost() {
        // TODO: Implement cost() method.
        $cost = $this->beverage->cost();
        switch ($this->beverage->getSize()) {
            case 'tall':
                $cost += 1;
                break;
            case  'grande':
                $cost += 2;
                break;
            case  'venti':
                $cost += 3;
                break;
        }
        return $cost;
    }

}
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
 * Decaf
 *
 * @package phpbase\design\decorator
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-19
 */
class Decaf extends Beverage {

    public function __construct() {
        $this->description = "低咖";
    }

    public function cost() {
        // TODO: Implement cost() method.
        return 10;
    }
}
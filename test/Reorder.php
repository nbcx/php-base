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
use phpbase\algorithm\reorder\Sort;

/**
 * Reorder
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-23
 */
class Reorder {

    public function index() {
        $sort = new Sort();
        $result = $sort->quick([4,6,1,43,5,6,7,10]);
        e($result);
    }

}
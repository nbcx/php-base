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

use phpbase\design\factory\Creator;

/**
 * Factory
 *
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019/5/9
 */
class Factory {

    public function index() {
        $fac = new Creator();
        $fac->index();
    }

}
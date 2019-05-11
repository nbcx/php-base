<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\adapter;
/**
 * EuroAdapter
 *
 * @package phpbase\design\adapter
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class EuroAdapter extends EuroCalc implements Itarget {

    public function __construct() {
        $this->requester();
    }

    public function requester() {
        // TODO: Implement requester() method.
        $this->rate = 0.8111;
        return $this->rate;
    }

}
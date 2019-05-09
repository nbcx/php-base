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

use phpbase\algorithm\stack\Queue;

/**
 * Stack
 * 先进后出
 *
 * @package controller
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-09
 */
class Stack {

    public function index() {
        $queue = new Queue();
        $queue->push('Helo');
        $queue->push(12);
        $queue->push('test');
        $queue->push(['yes']);

        while ($tmp = $queue->pop()) {
            e($tmp);
        }
    }

}
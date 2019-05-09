<?php
/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace phpbase\algorithm\stack;
/**
 * Stack
 *
 * @package phpbase\algorithm\stack
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-09
 */
class Stack {

    private $data;

    private $top;

    public function __construct() {
        $this->data = [];
        $this->top = 0;
    }

    public function push($data) {
        $this->data[$this->top] = $data;
        $this->top++;
    }


    public function pop() {
        $this->top--;

        $data = $this->data[$this->top];
        unset($this->data[$this->top]);

        return $data;
    }

}
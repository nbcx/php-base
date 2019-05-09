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
 * Queue
 * 先进先出的一种特殊线性结构
 *
 * @package phpbase\algorithm\stack
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-09
 */
class Queue {

    private $head; //队首
    private $tail; //队尾

    private $data = []; //队列数据

    private $lenth; //队列长度

    public function __construct() {
        $this->head = 0;
        $this->tail = 0;
        $this->lenth = 0;
        $this->data = [];
    }

    //入队列
    public function push($data) {
        $this->data[$this->tail] = $data;
        $this->tail ++;
        $this->lenth ++;
    }

    //出队列
    public function pop() {

        if($this->head >= $this->tail) {
            //当队列为空时，返回NULL
            return null;
        }
        $data = $this->data[$this->head];

        unset($this->data[$this->head]);

        $this->lenth --;
        $this->head++;

        //$this->data[$this->tail] = $this->data[$this->head];

        //$this->tail++;

        //$this->head++;

        return $data;
    }

    //队列长度
    public function lenth() {
        return $this->lenth;
    }

}
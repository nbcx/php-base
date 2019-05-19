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
 * Beverage(饮料)相当于抽象的Component(组件)类
 *
 * @package phpbase\design\decorator
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-19
 */
abstract class Beverage {

    protected $description = 'Unknown Beverage';

    protected $size = 'tall';


    public function getDescription() {
        return $this->description;
    }

    //获取杯型
    public function getSize() {
        return $this->size;
    }

    //设置杯型
    public function setSize($size){
        if(in_array($size,['tall','grande','venti'])) {
            $this->size = $size;
        }
    }

    //计算价格
    abstract public function cost();

}
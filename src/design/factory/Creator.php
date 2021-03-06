<?php
/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace phpbase\design\factory;

/**
 * Creator 创建者类
 * 这是抽象创建者类。它定义了一个抽象的工厂方法，让子类实现此方法制造产品
 *
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019/5/9
 */
abstract class Creator {

    protected abstract function factoryMethod();

    public function startFactory() {
        $mfg = $this->factoryMethod();
        return $mfg;
    }

}
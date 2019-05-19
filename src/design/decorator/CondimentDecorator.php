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
 * CondimentDecorator 调料抽象类
 *
 * 抽象装饰者
 *
 * @package phpbase\design\decorator
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-19
 */
abstract class CondimentDecorator extends Beverage {

    /**
     * @var Beverage
     */
    protected $beverage;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function getSize() {
        return $this->beverage->getSize();
    }

    public function setSize($size) {
        $this->beverage->setSize($size);
    }

}
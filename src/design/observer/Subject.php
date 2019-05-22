<?php
/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace phpbase\design\observer;

/**
 * Subject 主题接口
 *
 * @package phpbase\design\observer
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-22
 */
interface Subject {

    public function registerObserver(Observer $o);

    public function removeObserver(Observer $o);

    public function notifyObserver();

}
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
 * Observer
 *
 * @package phpbase\design\observer
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-22
 */
interface Observer {

    public function update($temp, $humidity, $pressure);

}
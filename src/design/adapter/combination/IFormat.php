<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\adapter\combination;
/**
 * IFormat
 *
 * @package phpbase\design\adapter\combination
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
interface IFormat {

    public function formatCSS();

    public function formatGraphics();

    public function horizontalLayout();

}
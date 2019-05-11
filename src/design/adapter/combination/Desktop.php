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
 * Desktop
 *
 * @package phpbase\design\adapter\combination
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Desktop implements IFormat {

    private $head = "<!doctype html><html><head>";
    private $headClose = "<meta charset='UTF-8'><title>Desktop</title></head><body>";
    private $cap = "</body></html>";

    private $sampText;

    public function formatCSS() {
        // TODO: Implement formatCSS() method.
        echo $this->head;
        echo "<link rel='stylesheet' href='desktop.css'>";
    }

    public function formatGraphics() {
        // TODO: Implement formatGraphics() method.
    }

    public function horizontalLayout() {
        // TODO: Implement horizontalLayout() method.
    }
}
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
 * Client
 *
 * @package phpbase\design\factory
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-10
 */
class Client {

    private $someGraphicObject;
    private $someTextObject;

    public function __construct() {
        $someGraphicObject = new GraphicFactory();
        echo $someGraphicObject->startFactory() ."\n";
        $someTextObject = new TextFactory();
        echo $someTextObject->startFactory() ."\n";
    }

}
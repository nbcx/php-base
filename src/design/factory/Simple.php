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
 * Simple 简单工厂
 *
 * @package phpbase\design\factory
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-10
 */
class Simple {

    public static function create($product) {
        switch ($product) {
            case 'text':
                $mfg = new TextFactory();
                break;
            case 'graphic':
                $mfg = new GraphicProduct();
                break;
            default:
                throw new \Error('product non-existent');
                break;
        }
        $mfg->getProperties();
        return $mfg;
    }

}
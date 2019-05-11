<?php

/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace phpbase\design\prototype;
/**
 * Marketing
 *
 * @package phpbase\design\prototype
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Marketing extends IAcmePrototype {

    const UNIT = 'Marketing';

    private $sales = 'sales';
    private $promotion = 'promotion';
    private  $strategic = 'strategic planning';

    public function setDept($orgCode) {
        switch ($orgCode) {
            case 101:
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->promotion;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = 'Unrecognized Marketing';
                break;
        }
    }

    public function getDept() {
        return $this->dept;
    }

    public function __clone() {

    }

}
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
 * Management
 *
 * @package phpbase\design\prototype
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Management extends IAcmePrototype {

    const UNIT = 'Management';
    private $research = 'research';
    private $plan = 'planning';
    private $operations = 'operations';

    public function setDept($orgCode) {
        switch ($orgCode) {
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operations;
                break;
            default:
                $this->dept = 'Unrecognized Management';
        }
    }

    public function getDept() {
        return $this->dept;
    }

    public function __clone() {

    }

}
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
 * Engieering
 *
 * @package phpbase\design\prototype
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
class Engieering extends IAcmePrototype {

    const UNIT = 'Engieering';

    private $development = 'programming';
    private $design='digital artwork';
    private $sysAd = 'system administration';

    public function setDept($orgCode) {
        switch ($orgCode) {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
                break;
            default:
                $this->dept = 'Unrecoginzed Engineering';
        }
    }

    public function getDept() {
        return $this->dept;
    }

    public function __clone() {
        // TODO: Implement __clone() method.
    }

}
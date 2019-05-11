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
 * Iprototype
 *
 * @package phpbase\design\prototype
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-11
 */
abstract class IAcmePrototype {

    public $name;
    public $id;
    public $employeePic;
    public $dept;

    abstract function __clone();

    abstract function setDept($oc);
    abstract function getDept();

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setId($emId) {
        $this->id = $emId;
    }

    public function getId() {
        return $this->id;
    }

    public function setPic($ePic) {
        $this->employeePic = $ePic;
    }

    public function getPic() {
        return $this->employeePic;
    }
}
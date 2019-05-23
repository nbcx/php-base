<?php
/*
 * This file is part of the NB Framework package.
 *
 * Copyright (c) 2018 https://nb.cx All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace phpbase\algorithm\reorder;
/**
 * Sort
 *
 * @package phpbase\algorithm\reorder
 * @link https://nb.cx
 * @author: collin <collin@nb.cx>
 * @date: 2019-05-23
 */
class Sort {

    public function quick(array $arr) {
        $p = $arr[0];
        unset($arr[0]);
        if(count($arr) < 2) {
            return $p === null?[]:[$p];
        }
        $pMax = [];
        $pMin = [];
        foreach ($arr as $i) {
            if($p > $i) {
                $pMax[] = $i;
            }
            else {
                $pMin[] = $i;
            }
        }
        # TODO
        return array_merge($this->quick($pMin),[$p],$this->quick($pMax));
    }

}
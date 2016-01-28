<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/27 18:22
 */

namespace Creational\Builder;


abstract class AbstractVehicle
{
    protected $partList = array();
    abstract public function run();
    public function setPart($name,$part){
        $this->partList[$name] = $part;
    }
}